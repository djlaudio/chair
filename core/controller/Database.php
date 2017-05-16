<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="wtjjventas2018";$this->pass="wtjjventas2018";$this->host="localhost";$this->ddbb="fastness_wtjjventas2016";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	//$link=mysqli_connect("localhost","wtjjventas2018","wtjjventas2018","fastness_wtjjventas2016");

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
