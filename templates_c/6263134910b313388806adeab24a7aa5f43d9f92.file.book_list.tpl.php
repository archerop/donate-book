<?php /* Smarty version Smarty-3.1.15, created on 2016-10-23 07:17:40
         compiled from ".\templates\book_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1057557fb10e07d05d6-26521779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6263134910b313388806adeab24a7aa5f43d9f92' => 
    array (
      0 => '.\\templates\\book_list.tpl',
      1 => 1477178054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1057557fb10e07d05d6-26521779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57fb10e08bea92_40691030',
  'variables' => 
  array (
    'RootDirectory' => 0,
    'count' => 0,
    'book' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fb10e08bea92_40691030')) {function content_57fb10e08bea92_40691030($_smarty_tpl) {?><html>
<head> <title>捐書列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RootDirectory']->value;?>
/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RootDirectory']->value;?>
/js/ui/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RootDirectory']->value;?>
/js/jquery.tablesorter.js"></script>
<link rel=stylesheet type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['RootDirectory']->value;?>
/css/check_table.css">
<link rel=stylesheet type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['RootDirectory']->value;?>
/css/darkorange/jquery-ui-1.10.3.custom.css">

<script type="text/javascript">

	$(document).ready($(function () {
		$("#listTable").tablesorter({widgets: ['zebra']});	// for table sorting
	}));

</script>
</head>
<body>
<form name="form1" action="session_list.php" method="post">
<label style="text-align:left;font-size:20px;font-weight:bold;">共計 <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 本</label>
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
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['row'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['row']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['name'] = 'row';
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['book']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['row']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['row']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['row']['total']);
?>
    <tr bgcolor="#DEDEDE">
        <td class="small" align="center"> <?php echo $_smarty_tpl->tpl_vars['book']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['ISBN'];?>
 </td>
        <td class="small" align="center"> <?php echo $_smarty_tpl->tpl_vars['book']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['bookname'];?>
 </td>
        <td class="small" align="center"> <img src="upload/<?php echo $_smarty_tpl->tpl_vars['book']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['photo'];?>
" height="30px" alt="無照片"> </td>
        <td class="small" align="center"> <?php echo $_smarty_tpl->tpl_vars['book']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['ip'];?>
 </td>
        <td class="small" align="center"> <?php echo $_smarty_tpl->tpl_vars['book']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['CreateTime'];?>
 </td>
		<td class="small" align="center"> 
			<?php if (($_smarty_tpl->tpl_vars['book']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['exist']=="0")) {?>未收到<?php }?> 
			<?php if (($_smarty_tpl->tpl_vars['book']->value[$_smarty_tpl->getVariable('smarty')->value['section']['row']['index']]['exist']=="1")) {?>已收到<?php }?> 
		</td>

	</tr>	
    <?php endfor; endif; ?>
	</tbody>
</table>
</div>
</form>
</body>
</html><?php }} ?>
