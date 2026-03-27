<?php

use Box\Spout\Common\Exception\UnsupportedTypeException;
use Box\Spout\Reader\Common\Creator\ReaderFactory;

class MsIeXLSXReader extends MsIeReader
{
    /** @var \Box\Spout\Reader\XLSX\Reader $reader */
    protected $reader;

    /**
     * @param array $config
     */
    public function initialize(array $config = array())
    {
        parent::initialize($config);
        try {
            $this->reader = ReaderFactory::createFromType($this->getType());
        } catch (UnsupportedTypeException $e) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, "[" . self::class . "]  {$e->getMessage()} Error:\n" . print_r($e, 1));
        }
    }

    /**
     * @param string $file
     * @return bool
     */
    public function open($file)
    {
        if (!parent::open($file)) return false;
        try {
            $this->reader->open($file);
        } catch (Exception $e) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, "[" . self::class . "]  {$e->getMessage()} Error:\n" . print_r($e, 1));
            return false;
        }
        return true;
    }

    /**
     * @param callable|null $callback
     * @return bool|mixed
     */
    public function read(callable $callback = null)
    {
        $result = false;
        $this->proceed = true;
        try {
            $idx = 0;
            foreach ($this->reader->getSheetIterator() as $sheet) {
                foreach ($sheet->getRowIterator() as $row) {
                    $idx++;
                    if ($idx < $this->offset) continue;
                    $this->offset++;
                    if (!$this->proceed) break 2;
                    $this->record = $row->toArray();
                    if (is_callable($callback)) {
                        if ($callback($this->record, $this) !== true) {
                            $this->close();
                            return true;
                        }
                    } else {
                        $this->fireEvent('read', array('data' => $this->record));
                    }

                }
            }
            $result = true;
        } catch (Exception $e) {
            $this->modx->log(modX::LOG_LEVEL_ERROR, "[" . self::class . "]  {$e->getMessage()} Error:\n" . print_r($e, 1));
        }
        return $result;
    }

    /**
     * @param int $offset
     */
    public function setOffset($offset = 0)
    {
        if (empty($offset)) $offset = 1;
        $this->offset = $offset;

    }

    public function close()
    {
        if ($this->reader) {
            $this->reader->close();
        }
    }

    /**
     * @return string
     */
    public function getType()
    {
        return MsIeTools::FILE_TYPE_XLSX;
    }
}