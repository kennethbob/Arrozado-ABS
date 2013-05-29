<?php
	
	include "BaseDAO.php";

	class UserDAO extends BaseDAO {
		
		function logIn($username, $password) {
			$this->open();
			$stmt = $this->dbh->prepare("SELECT * FROM anime_registered WHERE username = ? AND password = ?;");
	      $stmt->execute(array($username, $password));
			$found = false;
	 		if($stmt->fetch()) {
	    		$found = true;
	 		}
			$this->close(); 
		   return $found;
		}

		function authorized($firstname, $lastname, $address, $gender, $contact_number, $email_address, $username, $password, $password2) {
                  $this->open();
                  
                  $stmt= $this->dbh->prepare("INSERT INTO anime_registered (firstname, lastname, address, gender, contact_number, email_address, username, password, password2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                  $stmt->bindParam(1, $firstname);
                  $stmt->bindParam(2, $lastname);
                  $stmt->bindParam(3, $address);
		  				$stmt->bindParam(4, $gender);
                  $stmt->bindParam(5, $contact_number);
                  $stmt->bindParam(6, $email_address);
                  $stmt->bindParam(7, $username);
                  $stmt->bindParam(8, $password);
                  $stmt->bindParam(9, $password2);
                  $stmt->execute();
                  $anime_id = $this->dbh->lastInsertId();
                 
                  $stmt = $this->dbh->prepare("CREATE TABLE ".$username."(book_id INT auto_increment not null, book_title varchar(20), volume varchar(20), date_added varchar(30), primary key(book_id))");
                  $stmt->execute();
                  
                  $this->close(); 
    }
	}
