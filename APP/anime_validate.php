<?php

	include 'DAO/UserDAO.php';
	$action = new UserDAO();
		if(isset($_REQUEST['firstname']) && isset($_REQUEST['lastname']) && isset($_REQUEST['address']) && isset($_REQUEST['gender']) isset($_REQUEST['contact_number']) && isset($_REQUEST['email_address']) && isset($_REQUEST['username']) && isset($_REQUEST['password']) && isset($_REQUEST['password2'])){	
			$verrify = $action->registered($_REQUEST['firstname'], $_REQUEST['lastname'], $_REQUEST['address'], $_REQUEST['gender'], $_REQUEST['contact_number'], $_REQUEST['email_address'] $_REQUEST['username'], $_REQUEST['password'], $_REQUEST['password2']);
		
		header('Location: anime_home.php'); 
			
		}
?>
