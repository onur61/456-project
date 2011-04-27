<?php /* Smarty version Smarty-3.0.7, created on 2011-04-17 16:21:42
         compiled from "./templates/is-ilani-ekle.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1914daae966d26426-66327271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1626a75b7d70ec2d601d39418a2425dacff7aba9' => 
    array (
      0 => './templates/is-ilani-ekle.tpl.html',
      1 => 1303046501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1914daae966d26426-66327271',
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
<form action="/cybersoft/controller/is-ilani-ekle.php" method="post" id="form" enctype = "multipart/form-data">
<table border="0">
<tr><td >Baþlýk:</td><td>&nbsp;&nbsp;<input type="text" name="title" id="title"  size="30" maxlength="64" value=""/></td></tr>
<tr><td>Pozisyon: </td><td>&nbsp;&nbsp;<input type="text" name="position" id="position"  size="30" maxlength="64" value=""/></td></tr>
<tr>
  <td>Taným:</td>
  <td>&nbsp;&nbsp;<textarea name="description" id="description" rows="5" cols="50" value=""/></textarea></td></tr>
 
<tr><td colspan="2" align="center"><input type="submit" name="register" value=" Kullanýcý Ekle "/></td> </tr>
</table>

</form>
</center>


<?php $_template = new Smarty_Internal_Template("footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>