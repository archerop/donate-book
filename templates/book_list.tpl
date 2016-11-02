<html>
<head> <title>捐書列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="{$RootDirectory}/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="{$RootDirectory}/js/ui/jquery-ui.js"></script>
<script type="text/javascript" src="{$RootDirectory}/js/jquery.tablesorter.js"></script>
<link rel=stylesheet type="text/css" href="{$RootDirectory}/css/check_table.css">
<link rel=stylesheet type="text/css" href="{$RootDirectory}/css/darkorange/jquery-ui-1.10.3.custom.css">

<script type="text/javascript">
{literal}
	$(document).ready($(function () {
		$("#listTable").tablesorter({widgets: ['zebra']});	// for table sorting
	}));
{/literal}
</script>
</head>
<body>
<form name="form1" action="session_list.php" method="post">
<label style="text-align:left;font-size:20px;font-weight:bold;">共計 {$count} 本</label>
<div class="tlist">
<table id='listTable' border="0" width="90%" bgcolor="#FFFFFF">
	<thead>
    <tr align="center" bgcolor="#999999">
        <th nowrap="nowrap" class="small"><span class="white2"> ISBN </span></th>
        <th nowrap="nowrap" class="small"><span class="white2"> 書名 </span></th>
        <th nowrap="nowrap" class="small"><span class="white2"> 照片 </span></th>
        <th nowrap="nowrap" class="small"><span class="white2"> 來源IP </span></th>
		<th nowrap="nowrap" class="small"><span class="white2"> 登記時間 </span></th>
		<th nowrap="nowrap" class="small"><span class="white2"> 是否已送達 </span></th>

    </tr>
	</thead>
	<tbody>
    {section name=row loop=$book}
    <tr bgcolor="#DEDEDE">
        <td class="small" align="center"> {$book[row].ISBN} </td>
        <td class="small" align="center"> {$book[row].bookname} </td>
        <td class="small" align="center"> <img src="upload/{$book[row].photo}" height="30px" alt="無照片"> </td>
        <td class="small" align="center"> {$book[row].ip} </td>
        <td class="small" align="center"> {$book[row].CreateTime} </td>
		<td class="small" align="center"> 
			{if ($book[row].exist == "0")}未收到{/if} 
			{if ($book[row].exist == "1")}已收到{/if} 
		</td>

	</tr>	
    {/section}
	</tbody>
</table>
</div>
</form>
</body>
</html>