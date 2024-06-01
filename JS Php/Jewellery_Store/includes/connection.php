<?php

Class DbConnect
{

var $host = "localhost";

var $user = "root";

var $password = "";

var $database = "bbjewels";

var $persistent = false;

var $conn;

var $error_reporting = false;

/*constructor function this will run when we call the class */

function DbConnect () {

}

function open(){

$func = 'mysql_connect';


/* Connect to the MySQl Server */

$this->conn = $func($this->host, $this->user, $this->password,$this->database);
if (!$this->conn) {
return false;
}
/* Select the requested DB */

if (@!mysqli_select_db($this->database, $this->conn)) {
return false;
}
return true;
}

/*close the connection */

function close() {
return (@mysqli_close($this->conn));
}

/* report error if error_reporting set to true */

function error() {
if ($this->error_reporting) {
return (mysqli_connect_error()) ;
}

}
}

/* Class to perform query*/
class DbQuery extends DbConnect
{
	var $result = '';
	var $sql;
	
	function DbQuery($sql1)
	{
	$this->sql = $sql1;
	}
	
	function query() {
	
	return $this->result = mysqli_query($this->sql);
	//return($this->result != false);
	}
	
	function affectedrows() {
	return(@mysqli_affected_rows($this->conn));
	}
	
	function numrows() {
	return(@mysqli_num_rows($this->result));
	}
	function fetchobject() {
	return(@mysqli_fetch_object($this->result, MYSQL_ASSOC));
	}
	function fetcharray() {
	return(@mysqli_fetch_array($this->result));
	}
	
	function fetchassoc() {
	return(@mysqli_fetch_assoc($this->result));
	}
	
	function freeresult() {
	return(@mysqli_free_result($this->result));
	}

} 

?>