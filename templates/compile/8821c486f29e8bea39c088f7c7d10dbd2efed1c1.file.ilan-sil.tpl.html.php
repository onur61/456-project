<?php /* Smarty version Smarty-3.0.7, created on 2011-04-17 19:49:04
         compiled from "./templates/ilan-sil.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:108284dab1a002598d3-62286907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8821c486f29e8bea39c088f7c7d10dbd2efed1c1' => 
    array (
      0 => './templates/ilan-sil.tpl.html',
      1 => 1303058927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108284dab1a002598d3-62286907',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_capitalize')) include 'C:\xampp\htdocs\cybersoft\libs\plugins\modifier.capitalize.php';
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
<form action="/cybersoft/controller/ilan-sil.php" method="post" id="form" enctype = "multipart/form-data">

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