<?php

extract($_POST);
include_once '../../config.php';

$u = new User();

$u->uname = $_POST['uname'];
$u->usurname = $_POST['usurname'];
$u->uemail = $_POST['uemail'];
$u->password = $_POST['password'];
$u->type = $_POST['type'];

$u->addUser();