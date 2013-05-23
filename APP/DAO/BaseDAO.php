<?php

	class BaseDAO {

		protected $user = "student1";
		protected $pass = "password";
		protected $dbname = "registered";
		protected $dbh = null;

			function open(){
				$this->dbh = new PDO("mysql:host=localhost;dbname=".$this->dbname, $this->user, $this->pass);
			}
		
			function close(){
				$this->dbh = null;
			}	
	}
?>
