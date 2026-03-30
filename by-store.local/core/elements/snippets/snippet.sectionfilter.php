$section = (int)$modx->getOption('section', $scriptProperties, 0);
$root = (int)$modx->getOption('root', $scriptProperties, 8);
if (!$section || !$root) return '';

$q = $modx->query("SELECT `value` FROM `Modx-BYStoresystem_settings` WHERE `key` = 'table_prefix' LIMIT 1");
$prefix = $q ? $q->fetchColumn() : 'Modx-BYStore';
if (!$prefix) $prefix = 'Modx-BYStore';

$tbl      = "`{$prefix}site_content`";
$tblMs2   = "`{$prefix}ms2_products`";
$tblTvRes = "`{$prefix}site_tmplvar_contentvalues`";
$tblTv    = "`{$prefix}site_tmplvars`";

if ($section == 4) {
    $sql = "SELECT p.id, p.parent FROM {$tbl} p
            INNER JOIN {$tblMs2} ms ON ms.id = p.id AND ms.old_price > 0
            WHERE p.class_key = 'msProduct' AND p.published = 1 AND p.deleted = 0";
} else {
    $stmt = $modx->query("SELECT id FROM {$tblTv} WHERE name = 'Popular_for_index' LIMIT 1");
    if (!$stmt) return '';
    $popTvId = (int)$stmt->fetchColumn();
    if (!$popTvId) return '';
    $sql = "SELECT p.id, p.parent FROM {$tbl} p
            INNER JOIN {$tblTvRes} tv ON tv.contentid = p.id AND tv.tmplvarid = {$popTvId} AND tv.value = '{$section}'
            WHERE p.class_key = 'msProduct' AND p.published = 1 AND p.deleted = 0";
}

$stmt = $modx->query($sql);
if (!$stmt) return '';
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (empty($products)) return '';

// Traverse parent chains to find top-level categories (parent = $root)
$allParents = array_unique(array_column($products, 'parent'));
$categories = array();
$toCheck = $allParents;
$checked = array();
$iter = 0;

while (!empty($toCheck) && $iter < 10) {
    $ids = implode(',', array_map('intval', $toCheck));
    $s = $modx->query("SELECT id, parent FROM {$tbl} WHERE id IN ({$ids})");
    if (!$s) break;
    $nextCheck = array();
    while ($row = $s->fetch(PDO::FETCH_ASSOC)) {
        $id = (int)$row['id'];
        $parent = (int)$row['parent'];
        if (in_array($id, $checked)) continue;
        $checked[] = $id;
        if ($parent == $root) {
            $categories[$id] = 1;
        } elseif ($parent > 0 && !in_array($parent, $checked)) {
            $nextCheck[] = $parent;
        }
    }
    $toCheck = array_unique($nextCheck);
    $iter++;
}

$categoryIds = array_keys($categories);
if (empty($categoryIds)) return '';

$ids = implode(',', $categoryIds);
$s = $modx->query("SELECT id, pagetitle FROM {$tbl} WHERE id IN ({$ids}) ORDER BY menuindex ASC");
if (!$s) return '';

$output = '<button class="products-filter__btn products-filter__btn--active" data-category="all">Все</button>';
while ($row = $s->fetch(PDO::FETCH_ASSOC)) {
    $output .= '<button class="products-filter__btn" data-category="' . (int)$row['id'] . '">'
        . htmlspecialchars($row['pagetitle'], ENT_QUOTES, 'UTF-8')
        . '</button>';
}

return $output;
