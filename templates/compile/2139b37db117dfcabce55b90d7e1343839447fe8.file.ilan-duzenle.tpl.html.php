<?php /* Smarty version Smarty-3.0.7, created on 2011-04-24 15:49:01
         compiled from ".\templates\ilan/ilan-duzenle.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:134294db41c3d84c5c2-55525331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2139b37db117dfcabce55b90d7e1343839447fe8' => 
    array (
      0 => '.\\templates\\ilan/ilan-duzenle.tpl.html',
      1 => 1303057795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134294db41c3d84c5c2-55525331',
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
<form action="/cybersoft/controller/ilan-duzenle.php" method="post" id="form" enctype = "multipart/form-data">
<table border="0">
<tr><td >Ba�l�k:</td><td>&nbsp;&nbsp;<input type="text" name="title" id="title"  size="30" maxlength="64" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['announcement']->value['title']);?>
"/></td></tr>
<tr><td>Pozisyon: </td><td>&nbsp;&nbsp;<input type="text" name="position" id="position"  size="30" maxlength="64" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['announcement']->value['position']);?>
"/></td></tr>
<tr>
  <td>Tan�m:</td>
  <td>&nbsp;&nbsp;<textarea name="description" id="description" rows="5" cols="50" value=""/><?php echo $_smarty_tpl->tpl_vars['announcement']->value['description'];?>
</textarea></td></tr>
 <tr></tr><td><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['announcementID'];?>
"></a></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="register" value=" Kullan�c� Ekle "/></td> </tr>
</table>

</form>
<?php }} ?>
</center>


<?php $_template = new Smarty_Internal_Template("footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>