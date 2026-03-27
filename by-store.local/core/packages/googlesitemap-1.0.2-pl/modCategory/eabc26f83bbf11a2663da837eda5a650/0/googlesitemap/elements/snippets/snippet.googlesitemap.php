<?php
set_time_limit(0);

if (!$modx->loadClass('xmldocument.Sitemap', MODX_CORE_PATH . 'components/googlesitemap/model/', true, true)) {
    return false;
}

$sitemap = new Sitemap($modx, $scriptProperties);

$sitemap->start();

if (strpos($ignore, ',') !== false) {
    $sitemap->ignore = explode(',', $ignore);
} else {
    $sitemap->ignore[0] = $ignore;
}

$sitemap->asFile = $asFile;
$sitemap->saveFilePath = $saveFilePath;

return $sitemap->save();