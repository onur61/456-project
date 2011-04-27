<?php
extract($_POST);
include_once '../../config.php';

$u = new User();

$userID = $_POST['id'];
$uname = $_POST['uname'];
$usurname = $_POST['usurname'];
$uemail = $_POST['uemail'];
$type = $_POST['type'];

$u->editUser($userID, $uname, $usurname, $uemail, $type);