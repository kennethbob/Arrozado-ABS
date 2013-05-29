<!DOCTYPE html>
<html>
<head>
<title>Anime Master|Welcome</title>
<script src = "JS/jquery-1.8.2.min.js"></script>
<script src = "JS/jquery-ui-1.9.0.custom.min.js"></script>
<script src = "JS/jquery-ui-1.10.2.custom.js"></script>
<script src = "JS/jquery-ui-1.10.2.custom.min.js"></script>
<script src = "JS/anime.js"></script>
<script src = "bootstrap/js/bootstrap.js"></script>
<script src = "bootstrap/js/bootstrap.min.js"></script>
<link rel = "stylesheet" href = "CSS/jquery-ui-1.10.2.custom.css"/>
<link rel = "stylesheet" href = "CSS/jquery-ui-1.9.0.custom.min.css"/>
<link rel = "stylesheet" href = "CSS/anime.css"/>
<link rel = "shortcut icon" href = "ICONS/am_logo.jpg"/>
<link rel = "stylesheet" href = "bootstrap/css/bootstrap.css"/>
<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css"/>
<link rel = "stylesheet" href = "bootstrap/css/bootstrap-responsive.css"/>
<link rel = "stylesheet" href = "bootstrap/css/bootstrap-responsive.min.css"/>
</head>
<body>
	<div class = "myTabs1">
		<i class = "icon-home icon-white"></i>
		<h10 id = "home">Home</h10>
		<i class = "icon-briefcase icon-white"></i>
		<h10 id = "collect">Collections</h10>
		<h10 id = "me"><a href="#myModal2" role="button" class="btn" data-toggle="modal"><i class = "icon-user icon-black"></i>&nbsp;Me</a></h10>
		<i class = "icon-arrow-up icon-white"></i>
		<h10 id = "logout"><a id = "logout-href" href = "anime_home.php">Logout</a></h10>
	<a href = "anime_index.php" id = "hrefCode1"><h5 id = "animeCode1">ANIME<span id = "masterCode1">master</span></h5></a>
	<img id = "myLogo" src = "IMG/afro.png"/>		
	</div>
<div class = "wholeDiv">
<fieldset class = "carousel-field1">
	<img id = "account-image" src = "IMG/blank_person.jpg"/>
	<strong><?php if(isset($Username)) echo $Username;?></br></strong>
	<strong><?php if(isset($email_address)) echo $email_address;?></br></strong>
	<strong><?php if(isset($address)) echo $address;?></br></strong>	
	<strong><?php if(isset($gender)) echo $gender;?></strong>
</fieldset>
<hr id = "hr-img"/>
<hr id = "hr-img"/>
<div class = "div-content">
	<button id = "most-popular-anime">Most Popular Animes</button></br></br>
	<button id = "least-popular-anime">Least Popular Animes</button></br></br>
	<button id = "most-read-books">Most Read Books</button></br></br>
	<button id = "least-read-books">Least Read Books</button>

	<fieldset class = "items-field">
	<div class = "most-pop-div">
		<fieldset class = "history-field1">
			<img id = "history-img" src = "IMG/nar-sas.jpg"/>
			<p id = "history-title">NARUTO SHIPPUDEN</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong>bt. year 1999</strong></em>
			<em id = "history-message">Writer : <strong>Mashahi Kishimoto</strong></em>
			<em id = "history-message">Publisher : <strong>Shueisha</strong></em>
			<em id = "history-message">Producer : <strong>Studio Pierrot</strong></em>
		</fieldset>
		<fieldset class = "history-field2">
			<img id = "history-img" src = "IMG/bleach.jpg"/>
			<p id = "history-title">BLEACH</p>
			<hr id = "history-hr"/>	
			<em id = "history-message">Created : <strong>January 5, 2002</strong></em>
			<em id = "history-message">Writer : <strong>Tite Kubo.</strong></em>
			<em id = "history-message">Publisher : <strong>Shueisha</strong></em>
			<em id = "history-message">Producer : <strong>Studio Pierrot</strong></em>
		</fieldset>
		<fieldset class = "history-field3">
			<img id = "history-img1" src = "IMG/FT1.jpg"/>
			<p id = "history-title1">FAIRYTAIL</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong>December 15, 2006</strong></em>
			<em id = "history-message">Writer : <strong>Hiro Mashima</strong></em>
			<em id = "history-message">Publisher : <strong>Kodansha</strong></em>
			<em id = "history-message">Producer : <strong>A-1 Pictures</strong></em>
		</fieldset>
		<fieldset class = "history-field4">
			<img id = "history-img1" src = "IMG/suoh2.jpg"/>
			<p id = "history-title1">K PROJECT</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong>October 4, 2012</strong></em>
			<em id = "history-message">Writer : <strong>GoRA</strong></em>
			<em id = "history-message">Publisher : <strong>Animax Asia</strong></em>
			<em id = "history-message">Producer : <strong>Studio GoHands</strong></em>
		</fieldset>
	</div>
	<div class = "least-pop-div">
		<fieldset class = "history-field1">
			<img id = "history-img" src = "IMG/nar-sas.jpg"/>
			<p id = "history-title">NARUTO SHIPPUDEN</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
		<fieldset class = "history-field2">
			<img id = "history-img" src = "IMG/bleach.jpg"/>
			<p id = "history-title">BLEACH</p>
			<hr id = "history-hr"/>	
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
		<fieldset class = "history-field3">
			<img id = "history-img1" src = "IMG/FT1.jpg"/>
			<p id = "history-title1">FAIRYTAIL</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
		<fieldset class = "history-field4">
			<img id = "history-img1" src = "IMG/suoh2.jpg"/>
			<p id = "history-title1">K PROJECT</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
	</div>
	<div class = "most-read-div">
		<fieldset class = "history-field1">
			<img id = "history-img" src = "IMG/nar-sas.jpg"/>
			<p id = "history-title">asdafgdg</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
		<fieldset class = "history-field2">
			<img id = "history-img" src = "IMG/bleach.jpg"/>
			<p id = "history-title">asdasdasd</p>
			<hr id = "history-hr"/>	
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
		<fieldset class = "history-field3">
			<img id = "history-img1" src = "IMG/FT1.jpg"/>
			<p id = "history-title1">dgzcxvxc</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
		<fieldset class = "history-field4">
			<img id = "history-img1" src = "IMG/suoh2.jpg"/>
			<p id = "history-title1">dgsysf</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
	</div>
	</fieldset>
</div></br>
<div class = "added-collect-table">
	<table class="table table-condensed">
		<tr>
			<td>#</td>
			<td>BOOK TITLE</td>
			<td>VOLUME</td>
			<td>DATE ADDED</td>
		</tr>
	</table>
</div>
<div class = "collect-table">
	<table class="table table-condensed">
		<tr>
			<td>ID</td>
			<td>BOOK TITLE</td>
			<td>VOLUME</td>
			<td>DATE GET</td>
		</tr>
	</table>
</div>
</div>		
<div id="accountModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabelme" aria-hidden="true" data-backdrop="static">
	<div class = "modal-header">	
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class = "icon-remove icon-white"></i></button>
	<h3 id="myModalLabelme">My Information ..</h3></br>
	</div>
		</br>
	<div class="modal-body">
		<form method = "POST">
			<strong id = "info-label">Firstname</strong> <li id = "info-li"> <?php if(isset($Firstname)) echo $Firstname;?></li><hr/><p id = "edit-info">Edit</p>
			<strong id = "info-label">Lastname</strong> <li id = "info-li"> <?php if(isset($Lastname)) echo $Lastname;?></li><hr/><p id = "edit-info">Edit</p>
			<strong id = "info-label">Address</strong> <li id = "info-li"> <?php if(isset($Address)) echo $Address;?></li><hr/><p id = "edit-info">Edit</p>
			<strong id = "info-label">Gender</strong> <li id = "info-li"> <?php if(isset($Gender)) echo $Gender;?></li><hr/><p id = "edit-info">Edit</p>
			<strong id = "info-label">Contact Number</strong> <li id = "info-li"> <?php if(isset($Contact_number)) echo $Contact_number;?></li><hr/><p id = "edit-info">Edit</p>
			<strong id = "info-label">Email Address</strong> <li id = "info-li"> <?php if(isset($Email_address)) echo $Email_address;?></li><hr/><p id = "edit-info">Edit</p>
			<strong id = "info-label">Username</strong> <li id = "info-li"> <?php if(isset($Username)) echo $Username;?></li><hr/><p id = "edit-info">Edit</p>
			<strong id = "info-label">Password</strong> <li id = "info-li"> <?php if(isset($Password)) echo $Password;?></li><hr/><p id = "edit-info">Edit</p>
 			
		</form>
	</div>
	<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>
</body>
</html>
