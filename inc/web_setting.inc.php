<?php
include('./lib/Smarty/Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = "./templates/";
$smarty->compile_dir = "./templates_c/";

if(!is_dir($smarty->compile_dir))
  mkdir( $smarty->compile_dir , 0760, true);

$smarty->config_dir = "configs/";
$smarty->cache_dir  = "cache/";

$smarty->left_delimiter  = '{';
$smarty->right_delimiter = '}';
$smarty->compile_check   = true;
$smarty->debugging       = false;
$smarty->caching         = false;
?>
