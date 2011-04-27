<?php /* Smarty version Smarty-3.0.7, created on 2011-04-13 18:23:41
         compiled from "./templates/kullanici-sil.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:158334da5bffd26dfc0-30083652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9215d648231692e9f720b5800cfad7b0199f5a1f' => 
    array (
      0 => './templates/kullanici-sil.tpl.html',
      1 => 1302708184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158334da5bffd26dfc0-30083652',
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
<form action="/cybersoft/controller/kullanici-sil.php" method="post" id="form" enctype = "multipart/form-data">
<table border="0">
<tr><td >Ad:</td><td>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['uname'];?>
</td></tr>
<tr><td>Soyad: </td><td>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['usurname'];?>
</td></tr>
<tr>
  <td>E-posta:</td>
  <td>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['uemail'];?>
</td></tr>
  
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
<tr><td colspan="2" align="center"><input type="submit" name="register" value=" Sil "/></td> </tr>
</table>

</form>
<?php }} ?>
</center>


<?php $_template = new Smarty_Internal_Template("footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>