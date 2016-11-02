<?php
	include("./lib/adodb/adodb.inc.php");
	include("./inc/connection2db.php");
	include("./inc/web_setting.inc.php");
	
	$smarty->assign('RootDirectory', './');
	
	//取得捐書資料
	$sql = "select * from book;";
	//echo("book = $sql <BR>\r\n");	exit();
	$rs = $conn->Execute( $sql);
	$book = Array();
	if ($rs){
		while ($arr = $rs->FetchRow()) {
				$book[] = $arr;
		}
	}
	//print_r($book);

	$smarty->assign('count', sizeof($book));
	$smarty->assign('book', $book);
	$smarty->display('book_list.tpl');
?>