<?php
include_once 'config.php';

extract($_GET);
$userID = $_GET['id'];


$user = new User();
$users = array();
$users = $user->userProfile($userID);

$smarty->assign('title','B�t�n kullan�c�lar');
$smarty->assign('users',$users);
$smarty->display('kullanici/kullanici.tpl.html');