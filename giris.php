<?php

include_once 'config.php';

$user = new User();

$islogin = $user->isLogined();
if($islogin){
	
	header('Location:kullanici-listele.php');	
}
else{
	
	$smarty->assign('title','Giri� yap');
	$smarty->display('giris.tpl.html');
}
