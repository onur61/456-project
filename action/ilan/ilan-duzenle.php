<?php
extract($_POST);
include_once '../../config.php';

$an = new announcement();

$announcementID = $_POST['id'];
$title = $_POST['title'];
$position = $_POST['position'];
$description = $_POST['description'];

$an->editAnnouncement($announcementID,$title,$position,$description);
