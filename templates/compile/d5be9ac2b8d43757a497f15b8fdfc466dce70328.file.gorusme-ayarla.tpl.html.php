<?php /* Smarty version Smarty-3.0.7, created on 2011-04-26 01:19:22
         compiled from "c:/xampp/htdocs/cs/templates\gorusme/gorusme-ayarla.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:139204db5f36a3262d8-98417871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5be9ac2b8d43757a497f15b8fdfc466dce70328' => 
    array (
      0 => 'c:/xampp/htdocs/cs/templates\\gorusme/gorusme-ayarla.tpl.html',
      1 => 1303769547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139204db5f36a3262d8-98417871',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include 'C:\xampp\htdocs\cs\libs\plugins\function.html_options.php';
?><?php $_template = new Smarty_Internal_Template("header.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',$_smarty_tpl->getVariable('title')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<center>
<?php  $_smarty_tpl->tpl_vars['applicant'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('applicants')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['applicant']->key => $_smarty_tpl->tpl_vars['applicant']->value){
?>
<h2> <?php echo $_smarty_tpl->tpl_vars['applicant']->value['name'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['applicant']->value['surname'];?>
 icin gorusme ayarla </h2>
<form action="/cs/action/gorusme/gorusme-ayarla.php" method="post" id="form" enctype = "multipart/form-data">
<table border="0">
<td>Yer:</td>
  <td>&nbsp;&nbsp;<select name="place">
  <option>yer</option>
  <option value="istanbul">Istanbul</option>
  <option value="ankara">Ankara</option>
  
</select></td></tr>
<td> Tarih:</td><td>&nbsp;
<select name=day><?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('did')->value,'output'=>$_smarty_tpl->getVariable('did')->value),$_smarty_tpl);?>
</select>
<select name=month><?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('mid')->value,'output'=>$_smarty_tpl->getVariable('months')->value),$_smarty_tpl);?>
</select>
<select name=year><?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('yid')->value,'output'=>$_smarty_tpl->getVariable('yid')->value),$_smarty_tpl);?>
</select></td></tr>
<tr><td>Zaman: </td><td>&nbsp;<select name=hour><?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('hours')->value,'output'=>$_smarty_tpl->getVariable('hours')->value),$_smarty_tpl);?>
</select>
<select name=minute><?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->getVariable('minutes')->value,'output'=>$_smarty_tpl->getVariable('minutes')->value),$_smarty_tpl);?>
</select></td></tr>
<tr>
  <td>Gorusecek kisi:</td>
  <td>&nbsp;&nbsp;<input type="text" name="person" id="person"  size="30" maxlength="64" value=""/></td></tr>
  <tr></tr><td><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['applicant']->value['applicantId'];?>
"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="register" value=" Gorusme Ayarla "/></td> </tr>
</table>

</form>
<?php }} ?>
</center>


<?php $_template = new Smarty_Internal_Template("footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>