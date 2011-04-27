<?php
include_once 'config.php';


$user = new User();
if($user->isLogined()){
	//if($user->getAuthorization()==1){
		$smarty->assign('title','Kullanici Ekle');
		$smarty->display('kullanici/kullanici-ekle.php');
		//header('Location:kullanici-listele.php');
}
	else{
		header('Location:giris.php');
		//$smarty->assign('title','Bu sayfa iin yetkiniz yok');
		//$smarty->display('ilan/ilanlari-listele.tpl.html');
	}

