<?php

class msImportExportImport extends modProcessor
{
    /** @var Msie $msie */
    public $msie;
    /** @var MsIeTools $tools */
    public $tools;
    /** @var MsiePreset $preset */
    public $preset;
    /** @var  MsIeReader $reader */
    public $reader;
    /** @var string $file */
    protected $file;
    /** @var string $action */
    protected $action;
    /** @var string $workingDirectory */
    protected $workingDirectory;
    /**@var string $hashFields */
    protected $hashFields;
    /** @var null|int $haveTvFields */
    protected $haveTvFields = null;
    /** @var array $textFormatFields */
    protected $textFormatFields = array();
    /** @var array $fields */
    protected $fields = array();
    /** @var array $settings */
    protected $settings = array();
    /** @var array $stats */
    protected $stats = array(
        'status' => 'running',
        'restarted' => 0,
        'iteration' => 0,
        'errors' => 0,
    );
    /** @var array $storage */
    protected $storage = array();
    /** @var int $offset */
    protected $offset = 0;
    /** @var bool $completed */
    protected $completed = false;
    /** @var int $iteration */
    protected $iteration = 0;
    /** @var int $localIteration */
    protected $localIteration = 0;
    /** @var string $eventError */
    protected $eventError;
    /** @var float $startTime */
    protected $startTime = 0;
    /** @var float $finishTime */
    protected $finishTime = 0;
    /** @var float $memory */
    protected $memory = 0;
    /** @var float $memory_peak */
    protected $memory_peak = 0;
    /** @var float $time */
    protected $time = 0;
    /** @var int */
    protected $iterationLimit = 50;

    public function initialize()
    {

        $this->time = microtime(true);
        $this->memory = memory_get_usage();
        $this->memory_peak = memory_get_peak_usage();
        $this->file = $this->getProperty('file', '');
        $preset = $this->getProperty('preset', 0);
        $this->msie = $this->modx->getService('msimportexport', 'Msie');
        $this->tools = $this->msie->getTools();

        $this->workingDirectory = $this->tools->getWorkingDirectoryByFile($this->file);

        if (!file_exists($this->file)) {
            return $this->modx->lexicon('msimportexport_system_err_nf_file', array('file' => $this->file));
        }

        $this->preset = $this->modx->getObject('MsiePreset', $preset);
        if (!$this->preset) {
            return $this->modx->lexicon('msimportexport_preset_err_nfs', array('id' => $preset));
        }

        $this->reader = $this->tools->getReader($this->file);
        if (!$this->reader) {
            return $this->modx->lexicon('msimportexport_system_err_nf_reader', array('file' => $preset));
        }

        $this->fields = $this->preset->getFields();
        $this->settings = $this->preset->getSettings();
        $this->setSetting('working_directory', $this->getWorkingDirectory());
        $this->textFormatFields = $this->tools->explodeAndClean($this->getSetting('text_format_fields', ''), ',');

        $this->reader->initialize($this->settings);
        if (!$this->reader->open($this->file)) {
            return $this->modx->lexicon('msimportexport_system_err_open_file', array('file' => $this->file));
        }

        $this->iterationLimit = $this->getSetting('iteration_limit', 50);

        $this->setState($this->loadState());

        if (!$this->getStartTime()) {
            $this->setStartTime();
        }

        if ($this->getOffset() > 0) {
            $this->reader->setOffset($this->getOffset());
        }

        $this->reader->onEvent('read', array($this, 'iterate'));

        if ($timeLimit = $this->getSetting('script_time_limit', 0)) {
            @set_time_limit($timeLimit);
        }

        if ($memoryLimit = $this->getSetting('script_memory_limit', 0)) {
            @ini_set('memory_limit', $memoryLimit . 'M');
        }

        register_shutdown_function(array($this, 'shutdown'));

        return parent::initialize();
    }

    public function getLanguageTopics()
    {
        return array('msimportexport:default');
    }

    public function process()
    {
        if (empty($this->getProperty('initiate', 0))) {
            if (!$this->iteration) {
                $this->beforeStart();
                $response = $this->fireEvent('msieOnImportStart', array('file' => $this->file));
                if ($response === false) {
                    return $this->failure($this->eventError);
                } else if ($response === null) {
                    return $this->cleanup();
                }
            }

            $this->beforeRun();
            if (!$this->reader->read()) {
                return $this->failure();
            }
            $this->reader->close();
            $this->completed = !$this->reader->stopped();
            $this->afterRun();
        }
        return $this->cleanup();
    }

    public function cleanup()
    {
        if ($this->completed) {
            $this->setStatsItem('status', 'completed');
            $this->setFinishTime(microtime(true));
            $this->afterFinish();
        }
        $this->saveState();
        return $this->success('', array(
            'preset' => $this->preset->get('id'),
            'stats' => $this->getStats(),
            'workingDirectoryName' => $this->tools->getWorkingDirectoryNameByFile($this->file),
            'completed' => (int)$this->completed,
        ));
    }

    /**
     * @param array $data
     */
    public function iterate(array $data)
    {
        if (
            ($this->iteration !== 0 && $this->getSetting('skip_first_line', 0)) ||
            !$this->getSetting('skip_first_line', 0)
        ) {
            $response = $this->fireEvent('msieOnImportBeforePrepare', array('data' => $data));
            if (!is_array($response)) {
                if ($response === false) {
                    $this->incrementStatsItem('errors');
                }
                return;
            }

            $data = $response['data'];
            $data = $this->prepareData($data);
            $response = $this->fireEvent('msieOnImportAfterPrepare', array('action' => $this->action, 'srcData' => $this->reader->getLastData(), 'data' => $data));
            if (!is_array($response)) {
                if ($response === false) {
                    $this->incrementStatsItem('errors');
                }
                return;
            }

            $this->work($response['data']);
        }

        $this->iteration++;
        $this->localIteration++;
        $offset = $this->reader->getOffset();
        $this->setOffset($offset);

        if ($this->localIteration && ($this->localIteration % $this->iterationLimit) === 0) {
            return $this->reader->stop();
        }
    }

    /**
     * @param array $data
     * @return array
     */
    public function prepareData(array $data)
    {
        return $data;
    }

    /**
     * @param array $data
     */
    public function work(array $data = array())
    {

    }

    public function beforeRun()
    {

    }

    public function afterRun()
    {

    }

    public function beforeStart()
    {
    }

    /**
     * @param array $data
     */
    public function afterFinish(array $data = array())
    {
        $this->fireEvent('msieOnImportFinish', $data);
    }

    /**
     * @param $event
     * @param array $params
     * @return array|bool|null
     */
    public function fireEvent_($event, array $params = array())
    {
        $this->eventError = '';
        $params = array_merge(
            array(
                'worker' => $this,
                'preset' => $this->getProperty('preset'),
                'service' => $this->preset->getService(),
                'fields' => $this->getFields(),
                'settings' => $this->getSettings(),
                'skip' => false,
            ),
            $params
        );
        $response = $this->tools->invokeEvent($event, $params);
        if (empty($response['success'])) {
            $data = false;
            if (!empty($response['message'])) {
                $this->eventError = $response['message'];
                $this->modx->log(modX::LOG_LEVEL_ERROR, $this->eventError);
            }
        } else if (!empty($res['data']['skip'])) {
            $data = null;
            $this->modx->log(modX::LOG_LEVEL_INFO, "[" . self::class . "] Skip params:\n" . print_r($params, 1));
        } else {
            $data = $response['data'];
            $this->setFields($data['fields']);
            $this->setSettings($data['settings']);
        }
        unset($response);
        return $data;
    }

    /**
     * Get an array of settings for this worker
     * @return array
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Set the runtime settings for the worker
     * @param array $settings The settings, in array and key-value form, to run on this worker
     * @return void
     */
    public function setSettings($settings)
    {
        if (is_array($settings)) {
            $this->settings = $this->settings;
        }
    }

    /**
     * Get a specific setting.
     * @param string $k
     * @param mixed $default
     * @param bool $skipEmpty
     * @return mixed
     */
    public function getSetting($k, $default = null, $skipEmpty = true)
    {
        $val = array_key_exists($k, $this->settings) ? $this->settings[$k] : $default;
        if ($val === '' && $skipEmpty) {
            $val = $default;
        }
        return $val;

    }

    /**
     * Set a setting value
     *
     * @param string $k
     * @param mixed $v
     * @return void
     */
    public function setSetting($k, $v)
    {
        $this->settings[$k] = $v;
    }

    /**
     * Get an array of stats for this worker
     * @return array
     */
    public function getStats()
    {
        $this->stats['iteration'] = $this->iteration;
        $this->stats['start_time'] = $this->getStartTime();
        $this->stats['finish_time'] = $this->getFinishTime();
        $this->stats['total_time'] = $this->getTotalTime();
        $this->stats['time'] = microtime(true) - $this->time;
        $this->stats['memory'] = (memory_get_usage() - $this->memory) / 1024 / 1024;
        $this->stats['memory_peak'] = (memory_get_peak_usage() - $this->memory_peak) / 1024 / 1024;
        return $this->stats;
    }

    /**
     * Set the runtime stats for the worker
     * @param array $stats The settings, in array and key-value form, to run on this worker
     * @return void
     */
    public function setStats($stats)
    {
        if (is_array($stats)) {
            $this->stats = array_merge($this->stats, $stats);
        }
    }

    /**
     * Get a specific setting.
     * @param string $k
     * @param mixed $default
     * @param bool $skipEmpty
     * @return mixed
     */
    public function getStatsItem($k, $default = null, $skipEmpty = true)
    {
        $val = array_key_exists($k, $this->stats) ? $this->stats[$k] : $default;
        if ($val === '' && $skipEmpty) {
            $val = $default;
        }
        return $val;
    }

    /**
     * Set a setting value
     *
     * @param string $k
     * @param mixed $v
     * @return void
     */
    public function setStatsItem($k, $v)
    {
        $this->stats[$k] = $v;
    }

    /**
     * @param string $key
     * @param int $k
     * @return int
     */
    public function incrementStatsItem($key, $k = 1)
    {
        return $this->stats[$key] = $this->getStatsItem($key, 0) + $k;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        if (is_array($fields)) {
            $this->fields = $fields;
        }

    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->offset = $offset;
    }

    /**
     * @return int
     */
    public function getIteration()
    {
        return $this->iteration;
    }

    /**
     * @param int $iteration
     */
    public function setIteration(int $iteration)
    {
        $this->iteration = $iteration;
    }

    /**
     * @return bool
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * @param bool $completed
     */
    public function setCompleted(bool $completed)
    {
        $this->completed = $completed;
    }

    /**
     * @return float
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param float $startTime
     */
    public function setStartTime($startTime = 0.0)
    {
        $this->startTime = $startTime > 0 ? $startTime : microtime(true);
    }

    /**
     * @return float
     */
    public function getFinishTime()
    {
        return $this->finishTime;
    }

    /**
     * @param float $finishTime
     */
    public function setFinishTime($finishTime = 0.0)
    {
        $this->finishTime = $finishTime;
    }

    /**
     * @return float
     */
    public function getTotalTime()
    {
        return $this->getFinishTime() > 0 ? $this->getFinishTime() - $this->getStartTime() : 0;
    }

    /**
     * @param string $storeKey
     * @param mixed|null $default
     * @param bool $skipEmpty
     * @return mixed|null
     */
    public function getStore($storeKey, $default = null, $skipEmpty = true)
    {
        $val = array_key_exists($storeKey, $this->storage) ? $this->storage[$storeKey] : $default;
        if ($val === '' && $skipEmpty) {
            $val = $default;
        }
        return $val;
    }

    /**
     * @param string $storeKey
     * @param mixed $v
     */
    public function setStore($storeKey, $v)
    {
        $this->storage[$storeKey] = $v;
    }

    /**
     * @param string $storeKey
     * @param mixed $v
     * @param mixed|null $key
     * @param bool $kit
     */
    public function pushStore($storeKey, $v, $key = null, $kit = false)
    {
        if (!isset($this->storage[$storeKey])) {
            $this->storage[$storeKey] = array();
        }
        if ($key === null) {
            $this->storage[$storeKey][] = $v;
        } else {
            $key = trim($key);
            if ($kit) {
                if (!isset($this->storage[$storeKey][$key])) {
                    $this->storage[$storeKey][$key] = array();
                }
                $this->storage[$storeKey][$key][] = $v;
            } else {
                $this->storage[$storeKey][$key] = $v;
            }
        }
    }

    /**
     * @param string $storeKey
     * @param mixed $key
     * @param null $default
     * @return mixed|null
     */
    public function getStoreVal($storeKey, $key, $default = null)
    {
        return $this->hasKeyInStore($storeKey, $key) ? $this->storage[$storeKey][$key] : $default;
    }

    /**
     * @param string $storeKey
     * @param mixed $v
     * @return bool|false|int|string
     */
    public function hasValInStore($storeKey, $v)
    {
        if (empty($this->storage[$storeKey])) return false;
        return array_search($v, $this->storage[$storeKey]);
    }

    /**
     * @param string $storeKey
     * @param mixed $key
     * @return bool
     */
    public function hasKeyInStorage($storeKey, $key)
    {
        if (empty($this->storage[$storeKey])) return false;
        return array_key_exists(trim($key), $this->storage[$storeKey]);
    }

    /**
     * @return array
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * @param array $storage
     */
    public function setStorage(array $storage = array())
    {
        $this->storage = $storage;
    }


    /**
     * @param array $state
     */
    public function setState($state = array())
    {
        if (empty($state)) return;
        foreach ($state as $method => $params) {
            $method = 'set' . ucfirst($method);
            if (method_exists($this, $method)) {
                $this->$method($params);
            } else {
                $this->modx->log(modX::LOG_LEVEL_ERROR, "[" . self::class . "] Error! Not find method: {$method}");
            }
        }
    }

    /**
     * @return array
     */
    public function getState()
    {
        return array(
            'offset' => $this->getOffset(),
            'completed' => $this->getCompleted(),
            'iteration' => $this->getIteration(),
            'startTime' => $this->getStartTime(),
            'finishTime' => $this->getFinishTime(),
            'storage' => $this->getStorage(),
            'stats' => $this->getStats(),
            'workingDirectory' => $this->getWorkingDirectory(),
        );
    }

    /**
     * @return string
     */
    public function getWorkingDirectory()
    {
        return $this->workingDirectory;
    }

    /**
     * @param string $workingDirectory
     */
    public function setWorkingDirectory($workingDirectory)
    {
        $this->workingDirectory = $workingDirectory;
    }

    public function loadState()
    {
        $state = array();
        $file = $this->getStateFile();
        if (file_exists($file)) {
            if ($content = file_get_contents($file)) {
                $state = unserialize($content);
            }
        }
        return $state;
    }

    /**
     * @param array $state
     * @return bool
     */
    public function saveState(array $state = array())
    {
        $state = array_merge($this->getState(), $state);
        $file = $this->getStateFile();
        return file_put_contents($file, serialize($state)) ? true : false;
    }

    /**
     * @return string
     */
    public function getStateFile()
    {
        return $this->workingDirectory . 'state.var';
    }

    /**
     * @param string|array $message
     */
    public function debug($message)
    {
        if (!$this->getSetting('debug', 0)) return;
        $this->tools->debug($message);
    }

    /**
     * @return bool
     */
    public function hasChangeFields()
    {
        return $this->hashFields == $this->getHashFields() ? false : true;
    }

    /**
     * @return string
     */
    public function getHashFields()
    {
        return md5(json_encode($this->getFields()));
    }

    public function hasErrorDuplicationResource(modProcessorResponse $response)
    {
        if ($response->hasFieldErrors()) {
            $errors = $response->getFieldErrors();
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    if (in_array($error->field, array('uri', 'alias'))) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    /**
     * @return int
     */
    public function hasTvFields()
    {
        if ($this->haveTvFields !== null && !$this->hasChangeFields()) {
            return $this->haveTvFields;
        }
        $this->hashFields = $this->getHashFields();
        $this->haveTvFields = 0;
        foreach ($this->getFields() as $field) {
            if (preg_match('/^tv(\d+)$/', $field)) {
                $this->haveTvFields = 1;
                break;
            }
        }
        return $this->haveTvFields;
    }

    public function reconnect()
    {
        $this->modx->connection->pdo = null;
        $this->modx->connect(null, array(xPDO::OPT_CONN_MUTABLE => true));

    }

    public function shutdown()
    {
        $err = error_get_last();
        $this->saveState();
        if (!empty($err) && in_array($err['type'], array(E_ERROR))) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, print_r($err, 1));
        }
    }

}

return 'msImportExportImport';