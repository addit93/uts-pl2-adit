<?php

// Class database (koneksi database)
class Database2{
 
    // Property
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "uts-pl2_adit";
    var $connection;

    // Method koneksi kedalam database
	function Connect(){
		$this->connection=mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
        return $this->connection;
	}
 
} 


?>