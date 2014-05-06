<?php
include_once('conf/conf.php');
class db{
	var $dbManager;

	public function __construct(){
		$this -> dbManager = mysqli_connect($GLOBALS["sql_host"],$GLOBALS["sql_username"],$GLOBALS["sql_password"],$GLOBALS["sql_db"]);
	}

	public function __destruct(){
		mysqli_close($this -> dbManager);
	}

	public function escape($str){
		return mysqli_real_escape_string($this-> dbManager,$str);
	}

	public function execute($query){
		$temp = explode(" ",$query);
		$result = mysqli_query($this-> dbManager,$query);
		if ($temp[0] == 'SELECT' or $temp[0] == 'select') {
			$data = array();
			while($row = mysqli_fetch_array($result)) {
				$data[sizeof($data)] = $row;
			}
			return $data;
		}
	}

}
