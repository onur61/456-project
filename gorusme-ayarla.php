<?php

include_once 'config.php';

$applicantId = $_GET['id'];

$applicant = new Applicant();
$applicants = array();
$applicants = $applicant->applicantProfile($applicantId);
$applicant->createSmartyDateCombo($smarty);
$applicant->createSmartyHourCombo($smarty);

$smarty->assign('title','gorusme ayarla');
$smarty->assign('applicants',$applicants);
$smarty->display('gorusme/gorusme-ayarla.tpl.html');