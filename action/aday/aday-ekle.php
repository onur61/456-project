<?php

include_once '../../config.php';

$applicant = new Applicant();

$applicant->name = $_POST['name'];
$applicant->surname = $_POST['surname'];
$applicant->tcNo = $_POST['tcNo'];
$day = $_POST['day'];
$year = $_POST['year'];
$month = $_POST['month'];
$applicant->birth_date = $year."-".$month."-".$day;

$applicant->gender = $_POST['gender'];
$applicant->telephone_no = $_POST['telNo'];
$applicant->cell_no = $_POST['cellNo'];
$applicant->email = $_POST['email'];
$applicant->city = $_POST['city'];
$applicant->army_status = $_POST['army_status'];
$applicant->marriage_status = $_POST['marriage_status'];
$applicant->position = $_POST['position'];



if(isset($_FILES['cv'])){
echo $cv;
 	$target = "../../upload/"; 
	 $target = $target . basename( $_FILES['cv']['name']) ; 
	 $ok=1; 
	 
	 //This is our size condition 
	 if ($uploaded_size > 350000) 
	 { 
	 echo "Your file is too large.<br>"; 
	 $ok=0; 
	 } 
	 
	 //This is our limit file type condition 
	 if ($uploaded_type =="text/php") 
	 { 
	 echo "No PHP files<br>"; 
	 $ok=0; 
	 } 
	 
	 //Here we check that $ok was not set to 0 by an error 
	 if ($ok==0) 
	 { 
	 Echo "Sorry your file was not uploaded"; 
	 } 
	 
	 //If everything is ok we try to upload it 
	 else 
	 { 
	 if(move_uploaded_file($_FILES['cv']['tmp_name'], $target)) 
	 { 
	 echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded <br><br>"; 
	 } 
	 else 
	 { 
	 echo "Sorry, there was a problem uploading your file."; 
	 } 
	 $applicant->cv = $_FILES['cv']['name'];
	 $applicant->addApplicant();
	 
 } }
 else 
 {	
 	$applicant->cv = null;
 	$applicant->addApplicant();
 }

