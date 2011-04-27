<?php /* Smarty version Smarty-3.0.7, created on 2011-04-24 18:01:19
         compiled from "./templates/giris.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:238824db43b3fec7a07-09835524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e4b2e543578672366cbcfa2bacd27ced8dff1d4' => 
    array (
      0 => './templates/giris.tpl.html',
      1 => 1303652347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238824db43b3fec7a07-09835524',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("../header.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',$_smarty_tpl->getVariable('title')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<center>
<h2> <?php echo $_smarty_tpl->getVariable('title')->value;?>
 </h2>
<form action="/cs/action/giris.php" method="post" id="form" enctype = "multipart/form-data">
<table border="0">
<tr><td >Baþlýk:</td><td>&nbsp;&nbsp; <INPUT id="username" name="email"  type="text"  /></td></tr>
<tr><td>Pozisyon: </td><td>&nbsp;&nbsp;<INPUT id="password" name="password"  type="password"  /></td></tr>
 
<tr><td colspan="2" align="center"><input type="submit" name="register" value=" Giris "/></td> </tr>
</table>

</form>
</center>


<?php $_template = new Smarty_Internal_Template("../footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>