<?php
class Sitemap
{
	public $modx;
	
    public $collected = [];

    public $ignore = [
        '.css',
        '.js',
        '.ico',
        '.jpg',
        '.png',
        '.jpeg',
        '.swf',
        '.gif',
        '.svg',
        '#',
        'mailto:',
        'tel:',
        'skype:',
        'javascript:',
        'whatsapp:'
    ];

    public $url = '';

    public $asFile = false;
    public $saveFilePath = '';

    public function __construct(modX & $modx, $config = [])
    {
        $this->modx = &$modx;
		
		if (!$this->modx->loadClass('phpquery.phpQuery', MODX_CORE_PATH . 'components/googlesitemap/model/', true, true)) {
		    return false;
		}

        $basePath = $this->modx->getOption('core_path') . 'components/googlesitemap/';
        $assetsUrl = $this->modx->getOption('assets_url') . 'components/googlesitemap/';

        $this->config = array_merge([
            'basePath' => $basePath,
            'corePath' => $basePath,
            'modelPath' => $basePath . 'model/',
            'processorsPath' => $basePath . 'processors/',
            'templatesPath' => $basePath . 'templates/',
            'chunksPath' => $basePath . 'elements/chunks/',
            'jsUrl' => $assetsUrl . 'js/',
            'cssUrl' => $assetsUrl . 'css/',
            'assetsUrl' => $assetsUrl,
            'connectorUrl' => $assetsUrl . 'connector.php',
        ], $config);

        $this->url = MODX_SITE_URL;
    }
	
	public function start()
	{
		$this->collected[] = $this->url;
        $this->load($this->url);
	}

    private function get($page)
    {
        $prepare = [];
        $document = phpQuery::newDocument($page);
        foreach ($document->find('a') as $node) {
            $node = pq($node);
            $href = $node->attr('href');
            if ($href and $href != '/') {
				if ($href[0] == '/') {
					$href = mb_substr($href, 1);
				}
                if (!in_array($this->url . $href, $this->collected) and !$this->validateUrl($href)) {
                    if (strpos($href, 'https://') !== false or strpos($href, 'http://') !== false) {
						$prepare[] = $href;
					} else {
						$prepare[] = $this->url . $href;
					}
                }
            }
        }
        $document->unloadDocument();
        $this->collected = array_merge($this->collected, $prepare);
        foreach ($prepare as $link) {
            $this->load($link);
        }
        return true;
    }

    private function load($path)
    {
        $curl = curl_init($path);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        if (strpos($path, 'https://') !== false) {
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        }
        $page = curl_exec($curl);
        if (curl_errno($curl)) {
            exit('Load error: ' . curl_error($curl));
        }
        curl_close($curl);
        $this->get($page);
    }

    private function validateUrl($link)
    {
        if (strpos($link, 'https://') !== false or strpos($link, 'http://') !== false) {
            if (strpos($link, $this->url) === false) {
                return true;
            }
        }
        foreach ($this->ignore as $value) {
            if (strpos($link, $value) !== false) {
                return true;
            }
        }
    }

    public function save()
    {
        $xml = new DomDocument('1.0', 'utf-8');
        $urlset = $xml->appendChild($xml->createElement('urlset'));
        $urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        foreach ($this->collected as $link) {
            $url = $urlset->appendChild($xml->createElement('url'));
            $loc = $url->appendChild($xml->createElement('loc'));
            $lastmod = $url->appendChild($xml->createElement('lastmod'));
            $loc->appendChild($xml->createTextNode(htmlentities($link)));
            $lastmod->appendChild($xml->createTextNode(date('Y-m-d')));
        }
        $xml->formatOutput = true;
        if ($this->asFile == true and $this->saveFilePath) {
            $xml->save($this->saveFilePath);
            return true;
        }
        return $xml->saveXML();
    }
}