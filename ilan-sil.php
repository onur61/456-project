<?php
include_once 'config.php';

extract($_GET);
$announcementID = $_GET['id'];

$an = new announcement();
$announcements = array();
$announcements = $an->announcementDetail($announcementID);
$smarty->assign('title','Ýlan Sil');
$smarty->assign('announcements',$announcements);
$smarty->display('ilan/ilan-sil.tpl.html');