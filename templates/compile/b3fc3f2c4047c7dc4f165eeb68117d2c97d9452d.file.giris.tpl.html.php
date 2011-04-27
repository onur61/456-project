<?php /* Smarty version Smarty-3.0.7, created on 2011-04-26 11:06:35
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/cs/templates/giris.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:20055876674db6a73bce69c8-91209778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3fc3f2c4047c7dc4f165eeb68117d2c97d9452d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cs/templates/giris.tpl.html',
      1 => 1303815986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20055876674db6a73bce69c8-91209778',
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
<form action="/cs/action/giris.php" method="post" id="form" enctype = "multipart/form-data">
<table border="0">
<tr><td >E-posta:</td><td>&nbsp;&nbsp; <INPUT id="username" name="uemail"  type="text"  /></td></tr>
<tr><td>Sifre: </td><td>&nbsp;&nbsp;<INPUT id="password" name="password"  type="password"  /></td></tr>
 
<tr><td colspan="2" align="center"><input type="submit" name="register" value=" Giris "/></td> </tr>
</table>

</form>
</center>


<?php $_template = new Smarty_Internal_Template("footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>