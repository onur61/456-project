<?php /* Smarty version Smarty-3.0.7, created on 2011-04-13 17:38:44
         compiled from "./templates/kullanici.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:199814da5b57471b897-44277716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4200a34c7e7c802f2162bff070829ea9ba300d30' => 
    array (
      0 => './templates/kullanici.tpl.html',
      1 => 1302705512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199814da5b57471b897-44277716',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',$_smarty_tpl->getVariable('title')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div style="background:#fff; padding: 10px">
                  <table width="100%" cellspacing="0" cellpadding="0" border="0" id="YonetimKullaniciAnasayfa">
                    <tbody>
                      <tr>
                        <td height="40" colspan="6"><strong style=" font-size: 14px; font-weight: bold; margin-left: 4px;">Kullanýcýlar</strong></td>
                      </tr>
                      <tr>
                        <td align="left" class="yonetim-td-top"><span class="ustTitle">Ad</span></td>
                        <td align="left" class="yonetim-td-top"><span class="ustTitle">Soyad</span></td>
                        <td align="left" class="yonetim-td-top"><span class="ustTitle">E-posta</span></td>
                        <td align="left" class="yonetim-td-top"><span class="ustTitle">Kullanýcý Tipi</span></td>

                      </tr>
                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('users')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
?>
                      
                          <tr>
                       <!-- <td valign="bottom" height="40" align="left" style="color: rgb(10, 53, 172);" class="tarihTablo"><a href="<?php echo $_smarty_tpl->getVariable('usersettingsAdminLink')->value;?>
"  style="font-size: 11px; font-weight: normal;"> <?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
 </a></td>-->
                        <td valign="bottom" height="40" align="left" style="color: rgb(10, 53, 172);" class="tarihTablo"> <?php echo $_smarty_tpl->tpl_vars['user']->value['uname'];?>
 </a></td>
                        <td valign="bottom" height="40" align="left" style="color: rgb(10, 53, 172);" class="tarihTablo"> <?php echo $_smarty_tpl->tpl_vars['user']->value['usurname'];?>
 </a></td>
                        <td valign="bottom" height="40" align="left" style="color: rgb(10, 53, 172);" class="tarihTablo"> <?php echo $_smarty_tpl->tpl_vars['user']->value['uemail'];?>
 </a></td>
                        <td valign="bottom" height="40" align="left" style="color: rgb(10, 53, 172);" class="tarihTablo"> <?php echo $_smarty_tpl->tpl_vars['user']->value['type'];?>
 </a></td>
                        <td><a href="/cybersoft/kullanici.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['userID'];?>
">Edit</a></td>
                         <td valign="bottom" height="40" align="left" style="color: rgb(10, 53, 172);" class="tarihTablo"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['userID'];?>
"></a></td>
                      </tr>
                     
	                    <?php }} ?>

 

                    </tbody>
                  </table>
                </div>




<?php $_template = new Smarty_Internal_Template("footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>