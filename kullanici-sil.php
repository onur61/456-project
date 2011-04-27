<?php
include_once 'config.php';

extract($_GET);
$userID = $_GET['id'];


$user = new User();
$users = array();
$users = $user->userProfile($userID);

$smarty->assign('title','Kullanýcý Sil');
$smarty->assign('users',$users);
$smarty->display('kullanici/kullanici-sil.tpl.html');