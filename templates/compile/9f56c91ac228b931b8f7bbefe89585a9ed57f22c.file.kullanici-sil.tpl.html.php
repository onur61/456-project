<?php /* Smarty version Smarty-3.0.7, created on 2011-04-24 15:48:38
         compiled from ".\templates\kullanici/kullanici-sil.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:161084db41c26f1cbc0-80807757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f56c91ac228b931b8f7bbefe89585a9ed57f22c' => 
    array (
      0 => '.\\templates\\kullanici/kullanici-sil.tpl.html',
      1 => 1303649262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161084db41c26f1cbc0-80807757',
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
<form action="//cybersoft/action/kullanici/kullanici-sil.php" method="post" id="form" enctype = "multipart/form-data">
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