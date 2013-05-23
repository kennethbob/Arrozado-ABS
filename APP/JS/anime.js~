$(document).ready(function(){

	$("#login").click(function(){
		$("#myModal1").modal('show');
	});
	$("#registration").click(function(){
		$("#myModal").modal('show');
	});
	$("#collect").click(function(){
		$(".collections").toggle();
	});
	$("#dvd-id").click(function(){
		$("#dvd-id").addClass("active-button");
		$("#manga-id").removeClass("active-button");
		$("#games-id").removeClass("active-button");
	});
	$("#manga-id").click(function(){
		$("#dvd-id").removeClass("active-button");
		$("#manga-id").addClass("active-button");
		$("#games-id").removeClass("active-button");
	});
	$("#games-id").click(function(){
		$("#dvd-id").removeClass("active-button");
		$("#manga-id").removeClass("active-button");
		$("#games-id").addClass("active-button");
	});

	$("#k-id2").hide();
	$("#span-message1").hide();
	
	$("#k-id").fadeIn(5000);
		$("#k-id").fadeOut(5000);
	$("#k-id2").fadeIn(25000);
	$("#span-message").fadeIn(5000);
		$("#span-message").fadeOut(5000);
	$("#span-message1").fadeIn(25000);
	$("#myReg_btn").click(function(){
		
		$firstname = $("#firstname").val();
		$lastname = $("#lastname").val();
		$address = $("#address").val();
		$gender = $("#gender").val();
		$contact_number = $("#contact_number").val();
		$email_address = $("#email_address").val();
		$username = $("#username").val();
		$password = $("#password").val();
		$password2 = $("#password2").val();

			if ($firstname != "" && $lastname != "" && $address != "" && $gender != "" && $contact_number != "" && $email_address != "" && $username != "" && $password != "" && $password2 != "") {
					
				var regObj = {
					
					"firstname":$("input[name = 'firstname']").val(),
					"lastname":$("input[name = 'lastname']").val(),
					"address":$("input[name = 'address']").val(),
					"gender":$("input[name = 'gender']").val(),
					"contact_number":$("input[name = 'contact_number']").val(),
					"email_address":$("input[name = 'email_address']").val(),
					"username":$("input[name = 'username']").val(),
					"password":$("input[name = 'password']").val(),
					"password2":$("input[name = 'password2']").val()
					
				};
					$.ajax({
						type: "POST",
						url: "anime_validate.php",
						data: regObj,
						success: function(data){
						},
						error: function(data){
						}
					});
			}else{
				alert("...oops! don't leave it blank ..");
			}
	});
});
