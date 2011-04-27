<?php /* Smarty version Smarty-3.0.7, created on 2011-04-26 14:16:26
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/cs/templates/aday/aday-ekle.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:10666085624db6d3baab5fb5-01877113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22f94a320b66a791892240b751fc1de615131ccd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cs/templates/aday/aday-ekle.tpl.html',
      1 => 1303762654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10666085624db6d3baab5fb5-01877113',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include '/Applications/XAMPP/xamppfiles/htdocs/cs/libs/plugins/function.html_options.php';
?><?php $_template = new Smarty_Internal_Template("header.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',$_smarty_tpl->getVariable('title')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<center>
<h2> Add Applicant Profile </h2>
<form action="/cs/action/aday/aday-ekle.php" method = "post" id="form" name = "form" enctype="multipart/form-data">
<table border=0>
<tr><td >Ad:</td><td>&nbsp;&nbsp;<input type="text" name="name" id="name"  size="30" maxlength="64" value=""/></td></tr>
<tr><td>Soyad: </td><td>&nbsp;&nbsp;<input type="text" name="surname" id="surname"  size="30" maxlength="64" value=""/></td></tr>
<tr>
  <td>Tc No:</td>
  <td>&nbsp;&nbsp;<input type="text" name="tcNo" id="tcNO"  size="30" maxlength="11" value=""/></td></tr>
<tr><td>Pozisyon</td><td>&nbsp;&nbsp;<select name=position>
<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('option_id')->value,'output'=>$_smarty_tpl->getVariable('option_value')->value),$_smarty_tpl);?>

</select></td></tr>  
 
<tr>
<td>Doðum Tarihi:</td><td>&nbsp;
<select name=day><?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('did')->value,'output'=>$_smarty_tpl->getVariable('did')->value),$_smarty_tpl);?>
</select>
<select name=month><?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('mid')->value,'output'=>$_smarty_tpl->getVariable('months')->value),$_smarty_tpl);?>
</select>
<select name=year><?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('yid')->value,'output'=>$_smarty_tpl->getVariable('yid')->value),$_smarty_tpl);?>
</select></td></tr>

<tr><td>Cinsiyet:</td><td>&nbsp;&nbsp;<input type="radio"  name="gender" value="M" checked />Male<input type="radio" name="gender" value="F"/>Female</td></tr>
<tr>
  <td>Telefon No:</td>
  <td>&nbsp;&nbsp;<input type="text" name="telNo" id="telNo"  size="20" maxlength="12" value=""/></td></tr>
  <tr>
  <td>Cep Telefonu:</td>
  <td>&nbsp;&nbsp;<input type="text" name="cellNo" id="cellNo"  size="20" maxlength="12" value=""/></td></tr>
  <tr>
  <td>E-posta:</td>
  <td>&nbsp;&nbsp;<input type="text" name="email" id="email"  size="20" maxlength="100" value=""/></td></tr>
  <tr>
  <td>Sehir:</td>
  <td>&nbsp;&nbsp;<input type="text" name="city" id="city"  size="30" maxlength="30" value=""/></td></tr>
  <tr>
  <td>Askerlik Durum:</td>
  <td>&nbsp;&nbsp;<select name="army_status">
  <option>Askerlik Durumu</option>
  <option value="yapýlmýþ">Tamamlanmýþ</option>
  <option value="muaf">Muaf</option>
  <option value="yapýlmamýþ">Yapýlmamýþ</option>
  <option value="ertelenmiþ">Ertelenmiþ</option>
</select></td></tr><tr>
  <td>Medeni Durum:</td>
  <td>&nbsp;&nbsp;<select name="marriage_status">
  <option>Medeni Durum</option>
  <option value="evli">Evli</option>
  <option value="niþanlý">Niþanlý</option>
  <option value="bekar">Bekar</option>
</select></td></tr>
<tr>
  <td>CV:</td>
  <td>&nbsp;
<input name="cv" type="file" />
 
</td></tr>
  
<tr><td colspan="2" align="center"><input type="submit" name="register" value=" Add Applicant "/></td> </tr>

</form>

<?php $_template = new Smarty_Internal_Template("footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>