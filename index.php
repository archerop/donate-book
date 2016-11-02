<?php
	include("./lib/adodb/adodb.inc.php");
	include("./inc/connection2db.php");
	include("./inc/web_setting.inc.php");
	
	$smarty->assign('uid', $_GET['uid']);

	$smarty->display('index.tpl');
?>