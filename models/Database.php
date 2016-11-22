<?php

require_once("./includes/config.php");

class Database {

	private $connection;
	

	public function __construct() {
		$this->connection = new mysqli(SERVER,USER,PASSWORD,DATABASE);
		if($this->connection->connect_errno) {
			die("Database connection failed: ".mysqli_error());
		}
	}
	

	public function getAll() {
		$sql = "SELECT * FROM tbl_employees ORDER BY emp_lname ASC";
		$results = mysqli_query($this->connection, $sql);
		return $results;
	}
	

	public function getOne($id) {
		$sql = "SELECT * FROM tbl_employees WHERE emp_id=".$id;
		$result = mysqli_query($this->connection, $sql);
		return $result;
	}
	public function searchEmp($str) {
		$sql = "SELECT * FROM tbl_employees WHERE emp_lname LIKE '$str%' ORDER BY emp_lname ASC";
		$result = mysqli_query($this->connection, $sql);
		return $result;
	}
	

	//SQL for search
	//$sql = "SELECT * FROM tbl_employees WHERE emp_lname LIKE '%$str%' ORDER BY emp_lname ASC";


}