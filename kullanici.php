<?php
include_once 'config.php';

extract($_GET);
$userID = $_GET['id'];


$user = new User();
$users = array();
$users = $user->userProfile($userID);

$smarty->assign('title','Bütün kullanýcýlar');
$smarty->assign('users',$users);
$smarty->display('kullanici/kullanici.tpl.html');