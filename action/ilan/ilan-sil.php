<?php
extract($_POST);
include_once '../../config.php';

$an = new announcement();

$announcementID = $_POST['id'];

$an->deleteAnnouncement($announcementID);
