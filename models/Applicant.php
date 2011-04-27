<?php

include_once '../config.php';

class Applicant{
	
	public $applicantId;
	public $tcNo;
	public $name;
	public $surname;
	public $birth_date;
	public $gender;
	public $telephone_no;
	public $cell_no;
	public $email;
	public $city;
	public $army_status;
	public $marriage_status;
	public $cv;
	public $position;
	
	
	public function addApplicant(){
		$db = new Database();
		$sql = "select tcNo from applicant where tcNo = '".$this->tcNo;
		$result = $db->query($sql);
		$num = $db->num_rows($result);
		
		if($num==0){
			$query = "INSERT INTO applicant(tcNo, name , surname , birth_date , marriage_status , army_status , gender , telephone_no , cell_no,
			 email , city , cv, position) values(".$this->tcNo.",'".$this->name."','".$this->surname."','".$this->birth_date."','"
			.$this->marriage_status."','".$this->army_status."','".$this->gender."',".
			$this->telephone_no.",".$this->cell_no.",'".$this->email."','".$this->city."','".$this->cv."','".$this->position."')";
			
			echo "$query2";
			$db->query($query);
			
			echo 'kayıt başarıyla eklendi.';
		}
		else
			echo 'aynı tc no database de kayıtlı';
	}
	

    public function loadApplicants($page=0,$step=10){
    	$db = new Database();
        $sql = "select * from applicant order by applicantId desc ";
        $sql .= " limit ".$page.",".$step;
        $result = $db->query($sql); 
        
        $applicants = $this->dataToArray($result);
        echo $sql;
        return $applicants;
    }
    
    public function dataToArray($result){
        $db = new Database();
        $applicants = array();        
        $i = 0;
        
        while($row = $db->fetchObject($result)) {
        	$appInfo['applicantId']=$row->applicantId;
			$appInfo['tcNo']=$row->tcNo;
			$appInfo['name']=$row->name;
			$appInfo['surname']=$row->surname;
			$appInfo['birth_date']=$row->birth_date;
			$appInfo['gender']=$row->gender;
			$appInfo['telephone_no']=$row->telephone_no;
			$appInfo['cell_no']=$row->cell_no;
			$appInfo['email']=$row->email;
			$appInfo['city']=$row->city;
			$appInfo['army_status']=$row->army_status;
			$appInfo['marriage_status']=$row->marriage_status;
			$appInfo['cv']=$row->cv;
			$appInfo['position']=$row->position;
		
		
			$applicants[]=$appInfo;           
        }
        
        return $applicants;
    }   
    
    
    public function totalApplicant(){
   		 $db = new database();
    	 $sql = "select applicantId from applicant";
    	 $result = $db->query($sql);
    	 $num = $db->num_rows($result);
    	 return $num;
    }
    
	public function editApplicant($userID, $uname, $usurname, $uemail, $type) {
		$db = new Database();
		$query = "Update user set uname = '".$uname."',  usurname = '".$usurname."',  uemail = '".$uemail."', 
		 type = ".$type." where userID = ".$userID;
		$db->query($query);
		echo $query;
	}
	
	public function deleteApplicant($applicantId){
		$db = new Database();
		$query = "DELETE from applicant where applicantId = ".$applicantId;
		$db->query($query);
		echo $query;
	}
	
	public function applicantProfile($applicantId){
		$db = new Database();
		$query = "Select * from applicant where applicantId = ".$applicantId;
		$result = $db->query($query);
		$applicants = $this->dataToArray($result);
     
        return $applicants;
		
	}
    
    
    public function positionOptionsID(){
		$db = new Database();
		$ids = array();
		$sql = "select announcementID from announcement";
		$result = $db->query($sql);
		while($row = $db->fetch_array($result)) {
			$ids[] = $row['announcementID'];
		}
		return $ids;
	}
	
	public function positionOptionsValue(){
		$db = new Database();
		$values = array();
		$sql = "select position from announcement";
		$result = $db->query($sql);
		while($row = $db->fetch_array($result)){
			$values[] = $row['position'];
		}
		return $values;
	}
	
    public static function createSmartyDateCombo(&$smartyObject){
        $smartyObject->assign('mid', array(null,"01","02","03","04","05","06","07","08","09","10","11","12"));
        $smartyObject->assign('months',
        array('Ay','Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık'));

        $days = array();
        $dayVals = array();
        $years = array();
        $days[0] = 'Gün';
        for($i=1;$i<32;$i++){
            $value = $i;
            if($i<10)            
                $value = "0".$i;
            $days [] = $value;
        }
        $smartyObject->assign('did',$days);
        $years[date('Y')+1] = 'Yıl';
        for($i=date('Y');$i>1950;$i--){
            $years[] = $i;
        }
        $smartyObject->assign('yid',$years);
    }
    
    public static function createSmartyHourCombo(&$smartyObject){
    	$hours = array();
    	$hours[0]='saat';
    	for($i=0;$i<24;$i++){
    		$value = $i;
    		if($i<10)
    			$value = "0".$i;
    		$hours[] = $value;
    	}
    	$smartyObject->assign('hours',$hours);
    	$smartyObject->assign('minutes',array('dakika','00','05','10','15','20','25','30','35','40','45','50','55'));
    }
    
	
}
