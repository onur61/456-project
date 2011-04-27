<?php
//session_start();

ini_set('display_errors','off');
//require 'libs/Smarty.class.php';

global $docroot;
$docroot = '/Applications/XAMPP/xamppfiles/htdocs/cs/';
require_once($docroot.'models/Announcement.php');
require_once($docroot.'models/Applicant.php');
require_once($docroot.'models/Database.php');
require_once($docroot.'models/pager.php');
require_once($docroot.'models/User.php');
require_once($docroot.'models/Meeting.php');
require_once($docroot.'libs/Smarty.class.php');

$db = new Database();
$smarty = new Smarty();
$smarty->compile_dir=$GLOBALS['docroot'].'templates/compile';
$smarty->template_dir=$GLOBALS['docroot'].'templates';


