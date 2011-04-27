<?php
include_once '/Applications/XAMPP/xamppfiles/htdocs/cs/config.php';

class announcement {
	
	public $announcementID;
	public $position;
	public $date;
	public $description;

	public function addAnnouncement() {
		$db = new Database();
		$query = "INSERT INTO announcement (date, position, description) values('".$this->date."','".$this->position."','".$this->description."')";
		$db->query($query);
		$msg = "Yeni i� ilan� ba�ar� ile eklendi.";
		echo $query;
		
		//return msg;
		
	}
	
	public function editAnnouncement($announcementID, $date, $position, $description) {
		$db = new Database();
		$query = "Update announcement set position = '".$position."',  date = '".$date."',  description = '".$description.
		"' where announcementID = ".$announcementID;
		$db->query($query);
		echo $query;
	}
	
	public function deleteAnnouncement($announcementID){
		$db = new Database();
		$query = "DELETE from announcement where announcementID = ".$announcementID;
		$db->query($query);
		echo $query;
	}
	
	public function listAnnouncement(){
		$db = new Database();
		$query = "SELECT * FROM announcement ";
		
		$announcementInfo = array();
		$announcements = array();
		$result = $db->query($query);
		//$num = $db->num_rows($result);
		while($row = $db->fetchObject($result)){
			$announcementInfo['announcementID']=$row->announcementID;
			$announcementInfo['position']=$row->position;
			$announcementInfo['date']=$row->date;
			$announcementInfo['description']=$row->description;
					
			$announcements[]=$announcementInfo;

		}
		print_r($announcements);
	return($announcements);		
	}
	
	public function announcementDetail($announcementID){
		$db = new Database();
		$query = "Select * from announcement where announcementID = ".$announcementID;
		$result = $db->query($query);
		
		while($row = $db->fetchObject($result)){
			$announcementInfo['announcementID']=$row->announcementID;
			$announcementInfo['position']=$row->position;
			$announcementInfo['date']=$row->date;
			$announcementInfo['description']=$row->description;
					
			$announcements[]=$announcementInfo;
		}
	return($announcements);	
	print_r($announcements);
	}
	
}	