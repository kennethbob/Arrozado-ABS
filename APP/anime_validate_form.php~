<?php
        
	 session_start();
		
	include 'DAO/UserDAO.php';
        
   
    		$firstname = $_POST['firstname'];
     		$lastname = $_POST['lastname'];
     		$address = $_POST['address'];
     		$gender = $_POST['gender'];
     		$contact_number  = $_POST['contact_number'];
     		$email_address = $_POST['email_address'];
     		$username  = $_POST['username'];
			$password = $_POST['password'];
			$password2  = $_POST['password2'];
      

        	$action = new UserDAO();
	                
	     	$action->authorized($firstname, $lastname, $address, $gender, $contact_number, $email_address, $username, $password, $password2);       

		
		session_destroy();

		echo "Successfully registered";
?>

