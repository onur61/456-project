<?php /* Smarty version Smarty-3.0.7, created on 2011-04-24 15:49:03
         compiled from ".\templates\ilan/ilan-sil.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:112744db41c3fb2df23-46323897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66c4d3f6ef6710c8829df150d05811252b402c04' => 
    array (
      0 => '.\\templates\\ilan/ilan-sil.tpl.html',
      1 => 1303649191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112744db41c3fb2df23-46323897',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\xampp\htdocs\cs\libs\plugins\modifier.capitalize.php';
?><?php $_template = new Smarty_Internal_Template("header.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',$_smarty_tpl->getVariable('title')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<center>
  <?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('announcements')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value){
?>

<h2> <?php echo $_smarty_tpl->getVariable('title')->value;?>
 </h2>
<form action="/cybersoft/action/ilan/ilan-sil.php" method="post" id="form" enctype = "multipart/form-data">

<table border="0">
<tr><td >Baþlýk:</td><td>&nbsp;&nbsp;<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['announcement']->value['title']);?>
</td></tr>
<tr><td>Pozisyon: </td><td>&nbsp;&nbsp;<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['announcement']->value['position']);?>
</td></tr>
<tr>
  <td>Taným:</td>
  <td>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['announcement']->value['description'];?>
</td></tr>
 <tr></tr><td><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['announcementID'];?>
"></a></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="register" value=" Kullanýcý Ekle "/></td> </tr>
</table>

</form>
<?php }} ?>
</center>


<?php $_template = new Smarty_Internal_Template("footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>