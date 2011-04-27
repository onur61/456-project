<?php

require_once 'libs/Smarty.class.php';

$smarty = new Smarty;
$smarty->template_dir = './templates/';
$smarty->compile_dir = './templates/compile/';
$smarty->assign('title','smarty iyimişti');
$smarty->assign('name','onurum aslan parçam');
$smarty->assign('context','vay aq bu iş güzel olmuş valla billa');
$smarty->display('index.tpl.html');