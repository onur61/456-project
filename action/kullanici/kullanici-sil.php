<?php
extract($_POST);
include_once '../../config.php';

$u = new User();

$userID = $_POST['id'];

$u->deleteUser($userID);