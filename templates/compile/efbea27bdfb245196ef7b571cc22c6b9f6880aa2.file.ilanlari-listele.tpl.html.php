<?php /* Smarty version Smarty-3.0.7, created on 2011-04-25 22:41:35
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/cs/templates/ilan/ilanlari-listele.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:8123375194db5f89f3b75f1-04565363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efbea27bdfb245196ef7b571cc22c6b9f6880aa2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cs/templates/ilan/ilanlari-listele.tpl.html',
      1 => 1303770422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8123375194db5f89f3b75f1-04565363',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_capitalize')) include '/Applications/XAMPP/xamppfiles/htdocs/cs/libs/plugins/modifier.capitalize.php';
?><?php $_template = new Smarty_Internal_Template("header.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',$_smarty_tpl->getVariable('title')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div style="background:#fff; padding: 10px">
                  <table width="100%" cellspacing="0" cellpadding="0" border="0" id="YonetimKullaniciAnasayfa">
                    <tbody>
                      <tr>
                        <td height="40" colspan="6"><strong style=" font-size: 14px; font-weight: bold; margin-left: 4px;">iþ ilanlarý</strong></td>
                      </tr>
                      <tr>
                        
                        <td align="left" class="yonetim-td-top"><span class="ustTitle">Pozisyon</span></td>
                        <td align="left" class="yonetim-td-top"><span class="ustTitle">Tarih</span></td>
                        <td align="left" class="yonetim-td-top"><span class="ustTitle">Taným</span></td>
                        

                      </tr>
                    <?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('announcements')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value){
?>
                      
                          <tr>
                       

                        <td valign="bottom" height="40" align="left" style="color: rgb(10, 53, 172);" class="tarihTablo"> <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['announcement']->value['position']);?>
 </a></td>
                        <td valign="bottom" height="40" align="left" style="color: rgb(10, 53, 172);" class="tarihTablo"> <?php echo $_smarty_tpl->tpl_vars['announcement']->value['date'];?>
 </a></td>
                        <td valign="bottom" height="40" align="left" style="color: rgb(10, 53, 172);" class="tarihTablo"> <?php echo $_smarty_tpl->tpl_vars['announcement']->value['description'];?>
 </a></td>
                        <td><a href="/cs/ilan-duzenle.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['announcementID'];?>
">Düzenle</a></td>
                        <td><a href="/cs/ilan-sil.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['announcementID'];?>
">Sil</a></td>
                         <td valign="bottom" height="40" align="left" style="color: rgb(10, 53, 172);" class="tarihTablo"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['announcementID'];?>
"></a></td>
                      </tr>
                     
	                    <?php }} ?>

 

                    </tbody>
                  </table>
                </div>




<?php $_template = new Smarty_Internal_Template("footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>