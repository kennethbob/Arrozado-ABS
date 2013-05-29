<?php

	class BaseDAO {

		protected $user = "student1";
		protected $pass = "password";
		protected $dbname = "registered";
		protected $dbh;

		function open(){
			$this->dbh = new PDO("mysql:host=student1.e2ps;dbname=".$this->dbname, $this->user, $this->pass);
		}
	
		function close(){
			$this->dbh = null;
		}	
	}
