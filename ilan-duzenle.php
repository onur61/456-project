<?php

include_once 'config.php';
extract($_GET);
$announcementID = $_GET['id'];


$an = new announcement();
$announcements = array();
$announcements = $an->announcementDetail($announcementID);
$smarty->assign('announcements',$announcements);
$smarty->display('ilan/ilan-duzenle.tpl.html');

