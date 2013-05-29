$(document).ready(function(){


/******for viewing****/
	$("#registration").click(function(){
		$("#myModal1").modal('show');
	});	
	$("#login").click(function(){
		$("#loginModal1").modal('show');
	});	
	$("#me").click(function(){
		$("#accountModal").modal('show');
	});
	$("#collections").click(function(){
		$(".collections").show('fadeIn');
		$(".div-content").hide('fadeOut');
	});
	$("#dvd-id").click(function(){
		$("#dvd-id").addClass("active-button");
		$("#manga-id").removeClass("active-button");
		$("#games-id").removeClass("active-button");
		$(".dvd-class").show('slide');
		$(".manga-class").hide();
		$(".games-class").hide();
	});
	$("#manga-id").click(function(){
		$("#dvd-id").removeClass("active-button");
		$("#manga-id").addClass("active-button");
		$("#games-id").removeClass("active-button");
		$(".manga-class").show('slide');
		$(".dvd-class").hide();
		$(".games-class").hide();
	});
	$("#games-id").click(function(){
		$("#dvd-id").removeClass("active-button");
		$("#manga-id").removeClass("active-button");
		$("#games-id").addClass("active-button");
		$(".games-class").show('slide');
		$(".manga-class").hide();	
		$(".dvd-class").hide();
	});
	$("#FPDVD-id").mouseover(function(){
		$(".sales-div").show();
	});	
	$("#FPDVD-id").mouseout(function(){
		$(".sales-div").hide();
	});
		
	$(".manga-class").hide();
	$(".games-class").hide();

	$("#k-id2").hide();
	$("#span-message1").hide();
	
	$("#k-id").fadeIn(5000);
		$("#k-id").fadeOut(5000);
	$("#k-id2").fadeIn(25000);
	$("#span-message").fadeIn(5000);
		$("#span-message").fadeOut(5000);
	$("#span-message1").fadeIn(25000);
	$("#FPDVDnar-id, #FPDVDble-id, #FPDVDkek-id, #FPDVDinu-id, #FPDVDvkn-id").click(function(){
		$(".dialog-sales").dialog();
	});
	$("#close-btn").click(function(){
		$(".dialog-message").fadeOut();
	});
	$("#btn_left_arrow").click(function(){
		$(".dvd-class").show('slide');
		$(".manga-class").hide('slide');
		$(".games-class").show('slide');
		$(".dvd-class").hide('slide');
		$(".manga-class").show('slide');
		$(".games-class").hide('slide');
	});
	$("#btn_right_arrow").click(function(){
		$(".dvd-class").show('slide');
		$(".manga-class").hide('slide');
		$(".games-class").show('slide');
		$(".dvd-class").hide('slide');
		$(".manga-class").show('slide');
		$(".games-class").hide('slide');
	});
	$("#most-popular-anime").click(function(){
		$("#most-popular-anime").addClass("button-active");
		$("#least-popular-anime").removeClass("button-active");
		$("#most-read-books").removeClass("button-active");
		$("#least-read-books").removeClass("button-active");
	});
	$("#least-popular-anime").click(function(){
		$("#least-popular-anime").addClass("button-active");
		$("#most-popular-anime").removeClass("button-active");
		$("#most-read-books").removeClass("button-active");
		$("#least-read-books").removeClass("button-active");
	});
	$("#most-read-books").click(function(){
		$("#most-read-books").addClass("button-active");
		$("#least-read-books").removeClass("button-active");
		$("#most-popular-books").removeClass("button-active");
		$("#least-popular-anime").removeClass("button-active");
	});
	$("#least-read-books").click(function(){
		$("#least-read-books").addClass("button-active");
		$("#most-read-books").removeClass("button-active");
		$("#least-popular-anime").removeClass("button-active");
		$("#most-popular-anime").removeClass("button-active");
	});
	$("#most-popular-anime").click(function(){
		$(".most-pop-div").show();
		$(".least-pop-div").hide();
		$(".most-read-div").hide();
		$(".least-read-div").hide();
	});
	$("#least-popular-anime").click(function(){
		$(".least-pop-div").show();
		$(".most-pop-div").hide();
		$(".most-read-div").hide();
		$(".least-read-div").hide();
	});
	$("#most-read-books").click(function(){
		$(".most-read-div").show();
		$(".least-read-div").hide();
		$(".least-pop-div").hide();
		$(".most-pop-div").hide();
	});
	$("#least-read-books").click(function(){
		$(".least-read-div").show();
		$(".most-read-div").hide();
		$(".most-pop-div").hide();
		$(".least-pop-div").hide();
	});
	$("#history-image, #history-image1").click(function(){
		$("#loginModal1").modal('show');
	});
	$("#myReg").click(function(){
		
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
					/*
			
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
				*/
					alert(JSON.stringify($("#register_form").serializeArray()));
					$.ajax({
						type: "POST",
						url: "anime_validate.php",
						data: {"user_data": JSON.stringify($("#register_form").serializeArray())},
						success: function(data){
							alert('wewewew !');
						},
						error: function(data){
							alert('wew ! ' + JSON.stringify(data));
						}
					});
			}else{
				alert("...oops! don't leave it blank ..");
			} 
	});

	
		/*$.ajax ({
			type: "POST",
			url: "#",
			data: Obj,
			success: function(data) {
				display-products;
			},
			error: function(data) {
			}
		});*/
	

});

/*	
	function display_products {

		$.ajax ({
			type: "POST",
			url: "viewProducts.php",
			data: prodObj,
			success: function(data) {
			},
			error: function(data) {
			}
	   });		
		
	}
	
	function addBooks(book_id) {
		
		$.ajax ({
			type: "POST",
			url: "viewProducts.php",
			data: Obj,
			success: function(data) {
				display_products();
			},
			error: function(data) {
			}
		});
	}

*/	
