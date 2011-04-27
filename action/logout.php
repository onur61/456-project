<?php

include_once '../config.php';

$user = new User();

if($user->isLogined()){
	$user->logout();
	
}