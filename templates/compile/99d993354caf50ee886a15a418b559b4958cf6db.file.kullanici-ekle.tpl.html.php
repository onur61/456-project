<?php /* Smarty version Smarty-3.0.7, created on 2011-04-11 19:36:49
         compiled from "./templates/kullanici-ekle.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:50544da32e21c57849-34762234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99d993354caf50ee886a15a418b559b4958cf6db' => 
    array (
      0 => './templates/kullanici-ekle.tpl.html',
      1 => 1302539805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50544da32e21c57849-34762234',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',$_smarty_tpl->getVariable('title')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<center>
<h2> <?php echo $_smarty_tpl->getVariable('title')->value;?>
 </h2>
<form action="/cybersoft/controller/kullanici-ekle.php" method="post" id="form" enctype = "multipart/form-data">
<table border="0">
<tr><td >Ad:</td><td>&nbsp;&nbsp;<input type="text" name="uname" id="uname"  size="30" maxlength="64" value=""/></td></tr>
<tr><td>Soyad: </td><td>&nbsp;&nbsp;<input type="text" name="usurname" id="usurname"  size="30" maxlength="64" value=""/></td></tr>
<tr>
  <td>E-posta:</td>
  <td>&nbsp;&nbsp;<input type="text" name="uemail" id="uemail"  size="30" maxlength="100" value=""/></td></tr>
<tr>
  <td>Þifre:</td>
  <td>&nbsp;&nbsp;<input type="password" name="password" id="password"  size="30" maxlength="12" value=""/></td></tr>
  <tr>
  <td>Þifre Tekrar:</td>
  <td>&nbsp;&nbsp;<input type="password" name="password1" id="password"  size="30" maxlength="12" value=""/></td></tr>
  
  <tr>
  <td>Kullanýcý Tipi:</td>
  <td>&nbsp;&nbsp;<select name="type">
  <option>Kullanýcý Tipi Seç</option>
  <option value="1">Yönetici</option>
  <option value="2">Teknik</option>
  <option value="3">Sekreter</option>
  
</select></td></tr>
 <br><br> 
<tr><td colspan="2" align="center"><input type="submit" name="register" value=" Kullanýcý Ekle "/></td> </tr>
</table>

</form>
</center>


<?php $_template = new Smarty_Internal_Template("footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>