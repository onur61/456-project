<?php
class Database {
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $dbname = 'crs';
	
	function connect(){
		$this->conn = mysql_connect($this->host, $this->username, $this->password) or die('Something is wrong');
		
		@mysql_query("SET NAMES 'utf8'");
		@mysql_query("SET CHARACTER SET 'utf8'");
		@mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
			
		$select_db = @mysql_select_db($this->dbname) or die('No Database is selected');
	}
	
	function query($a){
		return 	mysql_query($a, mysql_connect($this->host, $this->username, $this->password));
	}
	
	function fetch_array($result){
		return mysql_fetch_array($result);
	}
	
	function fetch_assoc($result){
		return  mysql_fetch_assoc($result);
	}
	
	public function fetchObject($result) {
		return mysql_fetch_object ( $result );
	}
	
	function num_rows($result){
		return mysql_num_rows($result);
	}
	
	function affected_row(){
		return mysql_affected_rows();
	}
	
	function free_result($result){
		return mysql_free_result($result);
	}
	
	function insert_id() {
		return mysql_insert_id();
	}
	
	function result($result){
		return mysql_result($result,0);
	}
	
	function close(){
		return mysql_close($this->conn);
	}
	
	function escape($str){
		return mysql_real_escape_string($str);
	}
}

$db = new Database;
$db->connect();
