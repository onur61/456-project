<?php
include_once 'config.php';

extract($_GET);
$userID = $_GET['id'];


$user = new User();
$users = array();
$users = $user->userProfile($userID);

$smarty->assign('title','Kullan�c� D�zenle');
$smarty->assign('users',$users);
$smarty->display('kullanici/kullanici-duzenle.tpl.html');