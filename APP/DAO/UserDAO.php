<?php
	
	include 'BaseDAO.php';

	class UserDAO extends BaseDAO {
		
		function logIn {
			
			$this->open();
				
				$stmt = $this->dbh->prepare("SELECT username, password FROM registered");
		      $stmt->execute();
		      
				$found = false;   		
		      while($row = $stmt->fetch()){
			 		if($row[0]==$username && $row[1] == $password){
			    		$found = true;
			    //return true;
			 		}
			 
		      }	
		      	return $found;
			$this->close(); 
		}

		function registered ($firstname, $lastname, $address, $gender, $contact_number, $email_address, $username, $password, $password2){
                  $this->open();
                  
                  $stmt= $this->dbh->prepare("INSERT INTO registered (firstname, lastname, address, gender, contact_number, email_address, username, password, password2)values (?,?,?,?,?,?,?,?,?)");
                  $stmt->bindParam(1, $firstname);
                  $stmt->bindParam(2, $lastname);
                  $stmt->bindParam(3, $address);
		  				$stmt->bindParam(4, $gender);
                  $stmt->bindParam(5, $contact_number);
                  $stmt->bindParam(6, $email_ddress);
                  $stmt->bindParam(7, $username);
                  $stmt->bindParam(8, $password);
                  $stmt->bindParam(9, $password2);
                  $stmt->execute();
                  $id = $this->dbh->lastInsertId();
                 
                
                  
                  $stmt = $this->dbh->prepare("CREATE TABLE ".$username."(book_id INT auto_increment not null, book_title varchar(20), volume varchar(20), date date, primary key(book_id))");
                  $stmt->execute();
                  
                  $this->close(); 
              }
	}
?>
