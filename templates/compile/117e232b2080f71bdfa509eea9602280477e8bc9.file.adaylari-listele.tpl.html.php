<?php /* Smarty version Smarty-3.0.7, created on 2011-04-25 22:40:43
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/cs/templates/aday/adaylari-listele.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:15681488724db5f86b75fa45-72465601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '117e232b2080f71bdfa509eea9602280477e8bc9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/cs/templates/aday/adaylari-listele.tpl.html',
      1 => 1303765666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15681488724db5f86b75fa45-72465601',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',$_smarty_tpl->getVariable('title')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<a href="/cs/action/logout.php">Log out</a>
<div style="background:#fff; padding: 10px">
				<h1><?php echo $_smarty_tpl->getVariable('count')->value;?>
</h1>
                  
                    <?php  $_smarty_tpl->tpl_vars['applicant'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('applicants')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['applicant']->key => $_smarty_tpl->tpl_vars['applicant']->value){
?>
                   
					Ad : <?php echo $_smarty_tpl->tpl_vars['applicant']->value['name'];?>
 &#09; Soyad: <?php echo $_smarty_tpl->tpl_vars['applicant']->value['surname'];?>
  TC No: <?php echo $_smarty_tpl->tpl_vars['applicant']->value['tcNo'];?>
 Cinsiyet: <?php echo $_smarty_tpl->tpl_vars['applicant']->value['gender'];?>
<br>
					Dogum Tarihi : <?php echo $_smarty_tpl->tpl_vars['applicant']->value['birth_date'];?>
 e-posta: <?php echo $_smarty_tpl->tpl_vars['applicant']->value['email'];?>
	Sehir: <?php echo $_smarty_tpl->tpl_vars['applicant']->value['city'];?>
<br>
					Telefon: <?php echo $_smarty_tpl->tpl_vars['applicant']->value['telephone_no'];?>
 Cep Tel: <?php echo $_smarty_tpl->tpl_vars['applicant']->value['cell_no'];?>
<br>
					Askeri durum: <?php echo $_smarty_tpl->tpl_vars['applicant']->value['army_status'];?>
	Medeni Hal: <?php echo $_smarty_tpl->tpl_vars['applicant']->value['marriage_status'];?>
<br>
					pozisyon : <?php echo $_smarty_tpl->tpl_vars['applicant']->value['position'];?>
 cv: <a href="/cs/upload/<?php echo $_smarty_tpl->tpl_vars['applicant']->value['cv'];?>
"><?php echo $_smarty_tpl->tpl_vars['applicant']->value['cv'];?>
</a><br>
				   <td><a href="/cs/aday-duzenle.php?id=<?php echo $_smarty_tpl->tpl_vars['applicant']->value['applicantId'];?>
">Düzenle</a></td>
                   <td><a href="/cs/aday-sil.php?id=<?php echo $_smarty_tpl->tpl_vars['applicant']->value['applicantId'];?>
">Sil</a></td>
                   <td><a href="/cs/gorusme-ayarla.php?id=<?php echo $_smarty_tpl->tpl_vars['applicant']->value['applicantId'];?>
">Gorusme Ayarla</a></td>
                        
					<hr></hr>
					
                     
	                    <?php }} ?>
						
 

                    </tbody>
                  </table>
                </div>
<?php if ($_smarty_tpl->getVariable('count')->value>10){?>
<?php echo $_smarty_tpl->getVariable('first')->value;?>
<?php echo $_smarty_tpl->getVariable('links')->value;?>
<?php echo $_smarty_tpl->getVariable('last')->value;?>

<?php }?>

<?php $_template = new Smarty_Internal_Template("footer.tpl.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>