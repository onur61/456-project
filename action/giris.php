<?php
include_once '../config.php';

$user = new User();


	$user->uemail = $_POST['uemail'];
	$user->password = $_POST['password'];
	$msg = $user->login();	
	
	echo $msg;
	
	$name = $user->getName();
	$surname = $user->getSurname();
	$auth = $user->getAuthorization();
	
	echo  $name;
	echo $auth;
	echo $surname;
	