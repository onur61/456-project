<?php

include_once '../../config.php';
extract($_POST);

$an = new announcement();
$an->title = $_POST['title'];
$an->position = $_POST['position'];
$an->description = $_POST['description'];

$an->addAnnouncement();
