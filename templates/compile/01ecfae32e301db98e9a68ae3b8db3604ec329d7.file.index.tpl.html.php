<?php /* Smarty version Smarty-3.0.7, created on 2011-04-11 13:40:49
         compiled from "./templates/index.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:295004da2dab13ed241-29910597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01ecfae32e301db98e9a68ae3b8db3604ec329d7' => 
    array (
      0 => './templates/index.tpl.html',
      1 => 1302518445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295004da2dab13ed241-29910597',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'C:\xampp\htdocs\cybersoft\libs\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("header.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',$_smarty_tpl->getVariable('title')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

An itibariyle <?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>


The value of {$name} is <b><?php echo $_smarty_tpl->getVariable('name')->value;?>
</b>

variable modifier example of {$name|upper}

<b><?php echo ((mb_detect_encoding($_smarty_tpl->getVariable('name')->value, 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtoupper($_smarty_tpl->getVariable('name')->value,SMARTY_RESOURCE_CHAR_SET) : strtoupper($_smarty_tpl->getVariable('name')->value));?>
</b>


<p> <?php echo $_smarty_tpl->getVariable('context')->value;?>
</p>

<?php $_template = new Smarty_Internal_Template("footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>