<?php
	include("./lib/adodb/adodb.inc.php");
	include("./inc/connection2db.php");
	include("./inc/web_setting.inc.php");
	
	$smarty->assign('RootDirectory', './');
	
	//取得捐書資料
	$isbn = $_POST['ISBN'];
	$name = $_POST['bookname'];	
	$exist = $_POST['exist'];
	$people = $_POST['bookname'];	

	
	if ($exist == "1")
		$exist = true;
	else
		$exist = false;

	$ip = $_SERVER['REMOTE_ADDR'];
	$time = date("Y-m-d H:i:s");

	$filename = $_FILES["filechooser"]["name"];
	$filetype = $_FILES["filechooser"]["type"];
	$filesize = $_FILES["filechooser"]["size"];
	$filetmp = $_FILES["filechooser"]["tmp_name"];
	if ($_FILES["filechooser"]["error"] > 0) {
		echo "Error: " . $_FILES["filechooser"]["error"] . "<br />";
	} else {
		echo "Upload: " . $filename . "<br />";
		echo "Type: " . $filetype . "<br />";
		echo "Size: " . ($filesize / 1024) . " Kb<br />";
		echo "Stored in: " . $filetmp;
	}
	move_uploaded_file($_FILES["filechooser"]["tmp_name"],"upload/" . $filename);	
	
	$sql = "INSERT INTO book (`ISBN`, `bookname`, `photo`, `ip`, `CreateTime`, `exist`) VALUES ('$isbn', '$name', '$filename', '$ip', '$time', $exist);";
	//echo("book = $sql <BR>\r\n");	exit();
	$rs = $conn->Execute( $sql);
	
	header('Location: index.php');
    exit;
?>