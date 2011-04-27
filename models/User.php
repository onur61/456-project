<?php
include_once '../config.php';

class User {
	
	public $userID;
	public $uname;
	public $usurname;
	public $uemail;
	public $password;
	public $type;
	
	
	public function login() {
		ob_start();
		$db = new Database();
		$mail = stripslashes($this->uemail);
		$pass = stripslashes($this->password);
		
		$query = "select * from user where uemail = '".$db->escape($mail)."' and password = '".$db->escape($pass)."'";
		$result = $db->query($query);
		echo $query;
		$num = $db->num_rows($result);
		if($num == 1){
			if($row = $db->fetchObject($result)){
				$_SESSION['uname'] = $row->uname;
				$_SESSION['usurname'] = $row->usurname;
				$_SESSION['type']= $row->type;
				$_SESSION['login']=1;
				$msg = "Oturum başarı ile açıldı";
				
				
			}
			
		else{
			$msg="Oturum acilmadi.";
		}
		}
		
		return $msg;
		
	}
	
	public function getName(){
		if($this->isLogined())
			$name = $_SESSION['uname'];
			return $name;
		
	}
	
	public function getAuthorization(){
		if($this->isLogined())
		$authorize = $_SESSION['type'];
		
		return $authorize;
	}
	
	public function getSurname(){
		if($this->isLogined())
		$surname = $_SESSION['usurname'];
		return $surname;
	}
	
	public function isLogined(){
		
		ob_start();
		if($_SESSION['login'] == 1){
			return true;
		}
		else
			return false;
		
	}
	
	public function logout(){
		ob_start();
		$_SESSION['login']=0;
		session_destroy();
		header("Refresh: 2;url=../giris.php");
	}
	
	public function addUser() {
		
		 $db = new database();
		 $query = "select * from user where uemail = ".$this->uemail;
		 $result = $db->query($query);
		 echo $this->uemail;
		 $num = $db->num_rows($result);
		 if ($num == 0) {
		 	
		 	$query2 = "INSERT INTO user(uname, usurname, uemail, password, type) values('".$this->uname."','".$this->usurname."','".$this->uemail."','"
		 	.$this->password."','".$this->type."')";
		 	
		 	$db->query($query2);
		 	
		 	echo $query2;
		 	
		 	return 'Yeni kullanici başarıyla eklendi.';
		 }
		 
		 else {
		 	
		 	return 'The same email recorded our database <br><br>';
		 }
	}
 	public function loadUsers($page=0,$step=4){
        $db = new Database();
        $sql = "select * from user order by uname asc ";
        $sql .= " limit ".$page.",".$step;
        $result = $db->query($sql); 
        //$users = self::dataToObjectArray($res);
        $users = $this->dataToArray($result);
        echo $sql;
        return $users;
        
    }
    
    
    public function totalUser(){
    		 $db = new database();
    		 $sql = "select * from user";
    		 $result = $db->query($sql);
    		 $num = $db->num_rows($result);
    		 return $num;
    }
    
      public function dataToArray($result){
        $db = new Database();
        $users = array();        
        $i = 0;
        
        while($row = $db->fetchObject($result)) {
        	$userInfo['userID']=$row->userID;
			$userInfo['uname']=$row->uname;
			$userInfo['usurname']=$row->usurname;
			$userInfo['uemail']=$row->uemail;
			$userInfo['type']=$row->type;
		
			$users[]=$userInfo;           
        }
        
        return $users;
    }   
    
	
	public function editUser($userID, $uname, $usurname, $uemail, $type) {
		$db = new Database();
		$query = "Update user set uname = '".$uname."',  usurname = '".$usurname."',  uemail = '".$uemail."', 
		 type = ".$type." where userID = ".$userID;
		$db->query($query);
		echo $query;
	}
	
	public function deleteUser($userID){
		$db = new Database();
		$query = "DELETE from user where userID = ".$userID;
		$db->query($query);
		echo $query;
	}
	
	public function userProfile($userID){
		$db = new Database();
		$query = "Select * from user where userID = ".$userID;
		$result = $db->query($query);
		 $users = $this->dataToArray($result);
     
        return $users;
		
	}
	
	
}