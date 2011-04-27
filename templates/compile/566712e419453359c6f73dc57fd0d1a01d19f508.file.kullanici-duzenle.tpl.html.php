<?php /* Smarty version Smarty-3.0.7, created on 2011-04-13 17:55:29
         compiled from "./templates/kullanici-duzenle.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:212834da5b961552333-02847588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '566712e419453359c6f73dc57fd0d1a01d19f508' => 
    array (
      0 => './templates/kullanici-duzenle.tpl.html',
      1 => 1302706528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212834da5b961552333-02847588',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',$_smarty_tpl->getVariable('title')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<center>
  <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('users')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
?>

<h2> <?php echo $_smarty_tpl->getVariable('title')->value;?>
 </h2>
<form action="/cybersoft/controller/kullanici-duzenle.php" method="post" id="form" enctype = "multipart/form-data">
<table border="0">
<tr><td >Ad:</td><td>&nbsp;&nbsp;<input type="text" name="uname" id="uname"  size="30" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['uname'];?>
"/></td></tr>
<tr><td>Soyad: </td><td>&nbsp;&nbsp;<input type="text" name="usurname" id="usurname"  size="30" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['usurname'];?>
"/></td></tr>
<tr>
  <td>E-posta:</td>
  <td>&nbsp;&nbsp;<input type="text" name="uemail" id="uemail"  size="30" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['uemail'];?>
"/></td></tr>
  
  <tr>
  <td>Kullanýcý Tipi:</td>
  <td>&nbsp;&nbsp;<select name="type">
  <option>Kullanýcý Tipi Seç</option>
  <option value="1">Yönetici</option>
  <option value="2">Teknik</option>
  <option value="3">Sekreter</option>
  
</select></td></tr>
<td><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['userID'];?>
"></a></td>
 <br><br> 
<tr><td colspan="2" align="center"><input type="submit" name="register" value=" Düzelt "/></td> </tr>
</table>

</form>
<?php }} ?>
</center>


<?php $_template = new Smarty_Internal_Template("footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>