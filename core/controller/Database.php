<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="fastness_ventas";$this->pass="ventas2016";$this->host="localhost";$this->ddbb="fastness_wtjjventas2016";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
