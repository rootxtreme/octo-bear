<?php
include_once('../conf/conf.php');
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

/*try to add this part at a later time :p*/
//	public function insert($table,$data){
//		$keys = array_keys($data);
//		$col = ' ';
//		$val = ' ';
//
//		for ($i=0; $i < sizeof($data); $i++) { 
//			$keys[$i] = $this -> escape($keys[$i]);
//			$data[$keys[$i]] = $this -> escape($data[$keys[$i]]);
//			if ($i == sizeof($data)-1) {
//				$col = $col . $keys[$i];
//				$val = $val . "'".$data[$keys[$i]]."'";
//			}else{
//				$col = $col . $keys[$i].',';
//				$val = $val . "'".$data[$keys[$i]]."'".',';
//			}
//			// print $val;
//		}
//		$sql = "insert into $table ($col) values($val);";
//		print $sql;
//	}

}
