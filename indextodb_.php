<?php
	include("./lib/adodb/adodb.inc.php");
	include("./inc/connection2db.php");
	include("./inc/web_setting.inc.php");
	
	$smarty->assign('RootDirectory', './');
	
	//取得捐書資料
	$donate = $_POST['donate'];
	$phone = $_POST['phone'];	
	$email = $_POST['email'];

	$ip = $_SERVER['REMOTE_ADDR'];
	$time = date("Y-m-d H:i:s");

	$sql = "INSERT INTO datata (`donate`, `phone`, `email`, `ip`,'time') VALUES ('$donate', '$phone', '$email', '$ip', '$time');";
	echo("book = $sql <BR>\r\n");	exit();
	$rs = $conn->Execute( $sql);
	
	$id = mysqli_insert_id();
	
	header('Location: index.php?uid=$id');
    exit;
?>