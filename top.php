<?php
$parent_menu = array();
$sub_menu = array();
$mysqli = new mysqli('localhost', 'root', '', 'tourandtravel');
if ($mysqli->connect_errno) {
    exit;
}

$sql = "SELECT id, label, link_url, parent_id FROM dyn_menu ORDER BY parent_id, id ASC";
if (!$resultado = $mysqli->query($sql)) {
    exit;
}

while ($obj = $resultado->fetch_object()) {
    if ($obj->parent_id == 0) {
        $parent_menu[$obj->id]['label'] = $obj->label;
        $parent_menu[$obj->id]['link'] = $obj->link_url;
    } else {
        $sub_menu[$obj->id]['parent'] = $obj->parent_id;
        $sub_menu[$obj->id]['label'] = $obj->label;
        $sub_menu[$obj->id]['link'] = $obj->link_url;
        if (empty($parent_menu[$obj->parent_id]['count'])) {
            $parent_menu[$obj->parent_id]['count'] = 0;
        }
        $parent_menu[$obj->parent_id]['count']++;
    }
}
$resultado->free();
$mysqli->close();

function dyn_menu_folded($parent_array, $sub_array, $qs_val = "menu", $main_id = "nav", $sub_id = "subnav", $extra_style = "foldout")
{
    $menu = "<ul id=\"" . $main_id . "\">\n";
    foreach ($parent_array as $pkey => $pval) {
        if (!empty($pval['count'])) {
            $menu .= "  <li><a class=\"" . $extra_style . "\" href=\"" . $pval['link'] . "?" . $qs_val . "=" . $pkey . "\">" . $pval['label'] . "</a></li>\n";
        } else {
            $menu .= "  <li><a class='mi menu' onclick=\"javascript:window.open('" . $pval['link'] . "','_self')\" href=\"" . $pval['link'] . "\">" . $pval['label'] . "</a></li>\n";
        }
        //if (!empty($_REQUEST[$qs_val])) {
        $menu .= "<ul id=\"" . $sub_id . "\">\n";
        foreach ($sub_array as $sval) {
            if ($pkey == $sval['parent']) { //
                $menu .= "<li><a href=\"" . $sval['link'] . "\" target=\"_blank\">" . $sval['label'] . "</a></li>\n";
            }
        }
        $menu .= "</ul>\n";
        //}
    }
    $menu .= "</ul>\n";
    return $menu;
}
function rebuild_link($link, $parent_var, $parent_val)
{
    $link_parts = explode("?", $link);
    $base_var = "?" . $parent_var . "=" . $parent_val;
    if (!empty($link_parts[1])) {
        $link_parts[1] = str_replace("&amp;", "##", $link_parts[1]);
        $parts = explode("##", $link_parts[1]);
        $newParts = array();
        foreach ($parts as $val) {
            $val_parts = explode("=", $val);
            if ($val_parts[0] != $parent_var) {
                array_push($newParts, $val);
            }
        }
        if (count($newParts) != 0) {
            $qs = "&amp;" . implode("&amp;", $newParts);
        }
        return $link_parts[0] . $base_var . $qs;
    } else {
        return $link_parts[0] . $base_var;
    }
}
?>

<nav>
    <input type="checkbox" id="menuBtn">
    <label for="menuBtn" class="menuBtn">
        <span class="material-icons md-dark">menu</span>
    </label>
    <?php echo dyn_menu_folded($parent_menu, $sub_menu, "menu", "nav", "subnav"); ?>
    <a href="index.php#section-1"><img class="logo" src="images/logo.png" alt=""></a>
</nav>