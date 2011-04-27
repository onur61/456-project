<?php

include_once 'config.php';

$an = new announcement();
$announcements = array();
$announcements = $an->listAnnouncement();

$smarty->assign('announcements',$announcements);
$smarty->display('ilan/ilanlari-listele.tpl.html');
