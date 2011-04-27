<?php
include_once 'config.php';



$applicant = new Applicant();
$value = array();
$id = array();
$value = $applicant->positionOptionsValue();
$id = $applicant->positionOptionsID();
$applicant->createSmartyDateCombo($smarty);

$smarty->assign('title','Aday Ekle');
$smarty->assign('option_id',$id);
$smarty->assign('option_value',$value);
$smarty->display('aday/aday-ekle.tpl.html');