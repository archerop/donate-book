<?php /* Smarty version Smarty-3.1.15, created on 2016-10-23 07:51:52
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65657fb0348e58295-46220156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1477180308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65657fb0348e58295-46220156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57fb0348ebdba8_95484662',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fb0348ebdba8_95484662')) {function content_57fb0348ebdba8_95484662($_smarty_tpl) {?><!DOCTYPE html>
<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=1;">
	<title>iReading送書到偏鄉</title>
	<script type="text/javascript" src="./js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="./js/ui/jquery-ui.js"></script>
	<link rel=stylesheet type="text/css" href="./css/check_table.css">
	<link rel=stylesheet type="text/css" href="./css/darkorange/jquery-ui-1.10.3.custom.css">
	<style>
	
		th {
			text-weight: 900px;
			text-align: right;
			white-space: nowrap;
		}
	
	</style>
	<!--script type="text/javascript">
	
		var filechooser = document.getElementById('filechooser');
		var previewer = document.getElementById('previewer');

		// 2000 KB 对应的字节数
		var maxsize = 2000 * 1024;

		filechooser.onchange = function() {
		alert("Got it");
			var files = this.files;
			var file = files[0];

			// 接受 jpeg, jpg, png 类型的图片
			if (!/\/(?:jpeg|jpg|png)/i.test(file.type)) return;

			var reader = new FileReader();
			reader.onload = function() {
				var result = this.result;
				var img = new Image();

				// 如果图片小于 2MB，不压缩
				if (result.length <= maxsize) {
					toPreviewer(result);
					return;
				}

				img.onload = function() {
					var compressedDataUrl = compress(img, file.type);
					toPreviewer(compressedDataUrl);
					img = null;
				};

				img.src = result;
			};

			reader.readAsDataURL(file);
		};

		function toPreviewer(dataUrl) {
			previewer.src = dataUrl;
			filechooser.value = '';
		}

		function compress(img, fileType) {
			var canvas = document.createElement("canvas");
			var ctx = canvas.getContext('2d');

			var width = img.width;
			var height = img.height;

			canvas.width = width;
			canvas.height = height;

			ctx.fillStyle = "#fff";
			ctx.fillRect(0, 0, canvas.width, canvas.height);
			ctx.drawImage(img, 0, 0, width, height);

			// 压缩
			var base64data = canvas.toDataURL(fileType, 0.5);
			canvas = ctx = null;

			return base64data;
		}
	
	</script-->

	<!--script Language="JavaScript">
		var selectedFile = document.getElementById('input').files[0];
	</script-->
</head>
<body>
<form name="form1" method="post" enctype="multipart/form-data" action="indextodb.php">
<table align=center valign=middle style="border:0;width:30%;height:60vh;">

<tr>
    <th><span style="color:red;">*</span>書名：</th>
    <td>
        <input name="bookname" type="text" id="bookname" value="" size="35" align="center" required="required" />
    </td>
</tr>
<tr>
    <th>ISBN：</th>
    <td>
        <input name="ISBN" type="text" id="ISBN" value="" size="35" align="center" />
    </td>
</tr>
<tr>
    <th>是否已送到：</th>
    <td>
        <input name="exist" type="checkbox"  align="center" id="exist" value="1" checked />
    </td>
     </tr>
<tr>
	<th>書的照片：</th>
    <td><input type="file" id="filechooser" name="filechooser" accept="image/*" /></td>
</tr>
<tr>
    <td align="center" width=50%<?php ?>>
      	<input type="submit" name="submit" class="myButton" value="確定">
    </td>
    <td align="center" width=50%<?php ?>>
		<input type="reset" name="claer" class="myButton" value="取消">
	</td>
</tr>
</table>
</form>
</body>
</html><?php }} ?>
