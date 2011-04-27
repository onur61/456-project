<?php

include_once '../config.php';

class Meeting{
	
	public $meetingID;
	public $applicantId;
	public $place;
	public $date;
	public $time;
	public $person_to_interview;
	
	public function arrangeMeeting(){
			 $db = new database();
		 		 	
		 	$query = "INSERT INTO meeting(applicantID, place, date, time, person_to_interview)
		 	 values('".$this->applicantId."','".$this->place."','".$this->date."','"
		 	.$this->time."','".$this->person_to_interview."')";
		 	
		 	$db->query($query);
		 	
		 	echo $query;
		 	
		 	echo 'Yeni kullan˝c˝ ba˛ar˝yla eklendi.';
		 
		
	}
	
	public function sendMail($applicantId,$meetingID){
		$db = new Database();
		$applicant = new Applicant();
		$query = "select name,surname,email from applicant where applicantId = '".$applicantId."'";
		$result = $db->query($query);
		
		if($row = $db->fetch_assoc($result)){
			$name = $row->name;
			$surname = $row->surname;
			$email = $row->email;
			}
		$sql = "select * from meeting where meetingID = '".$meetingID."'";
		$result2 = $db->query($query);
		
		if($row2 = $db->fetchObject($result2)){
			$place = $row2->place;
			$date = $row2->date;
			$time = $row2->time;
			$person = $row2->person_to_interview;
		}
		
		$receiver = $email;
		$subject = 'Cybersoft '.$date.' tarihli iş görüşmesi';
		$message = 'Sayın '.$name.' '.$surname.'';
		mail($receiver,$subject,$message);
	}
	
}