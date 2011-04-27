<?php /* Smarty version Smarty-3.0.7, created on 2011-04-24 15:48:21
         compiled from ".\templates\kullanici/kullanici-ekle.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:304004db41c157ee3d5-48154738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30c20b952e83c82158d022cb41341f07867d181b' => 
    array (
      0 => '.\\templates\\kullanici/kullanici-ekle.tpl.html',
      1 => 1303649248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304004db41c157ee3d5-48154738',
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
<form action="/cybersoft/action/kullanici/kullanici-ekle.php" method="post" id="form" enctype = "multipart/form-data">
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