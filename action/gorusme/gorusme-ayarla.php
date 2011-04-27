<?php
include_once '../../config.php';

$meeting = new Meeting();


$meeting->place = $_POST['place'];
$meeting->person_to_interview = $_POST['person'];
$meeting->applicantId = $_POST['id'];

$hour = $_POST['hour'];
$minute = $_POST['minute'];

$meeting->time = $hour.":".$minute.":00";

$day = $_POST['day'];
$year = $_POST['year'];
$month = $_POST['month'];
$meeting->date = $year."-".$month."-".$day;

$meeting->arrangeMeeting();