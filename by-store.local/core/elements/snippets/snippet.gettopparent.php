$root = $modx->getOption("root", $scriptProperties, 8);
$id = (int)$modx->getOption("id", $scriptProperties, 0);
$field = $modx->getOption("field", $scriptProperties, "id");
if (!$id) return "";

$iteration = 0;
$maxIterations = 10;
$resource = $modx->getObject("modResource", $id);
if (!$resource) return "";

while ($iteration < $maxIterations) {
    $parent = (int)$resource->get("parent");
    if ($parent == $root) {
        return $resource->get($field);
    }
    if ($parent == 0) {
        return "";
    }
    $resource = $modx->getObject("modResource", $parent);
    if (!$resource) {
        return "";
    }
    $iteration++;
}
return "";
