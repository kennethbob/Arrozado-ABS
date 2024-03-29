<?php
	session_start();
	include 'DAO/UserDAO.php';
	$action = new UserDAO();
		if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){	
			$verrify = $action->logIn($_REQUEST['username'],$_REQUEST['password']);	
		if($verrify){
				$_SESSION['username'] = $_REQUEST['username'];
				
				
				header('Location: pmook_index.php');	
			}else{
					$errMsg = "<div id = 'myphp'><img id = 'war' src = 'icons/warning-icon.png'>Username and Password didn't match</div>";
			}
			
		}

?>
<!DOCTYPE html>
<html>
<head>
<title>Anime Master|Home</title>
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
	<div class = "myTabs">
		<i class = "icon-home icon-white"></i>
		<h10 id = "home"><a id = "home-href" href = "anime_home.php">Home</a></h10>
		<i class = "icon-book icon-white"></i>
		<h10 id = "about">About</h10>
		<i class = "icon-briefcase icon-white"></i>
		<h10 id = "collect">Collections</h10>
		<h10 id = "registration"><a href="#myModal" role="button" class="btn" data-toggle="modal"><i class = "icon-list-alt icon-black"></i>&nbsp;Register</a></h10>&nbsp;
		<h10 id = "login"><a href="#loginModal" role="button" class="btn" data-toggle="modal"><i class = "icon-arrow-down icon-black"></i>&nbsp;Login</a></h10>
	<a href = "anime_home.php" id = "hrefCode"><h5 id = "animeCode">ANIME<span id = "masterCode">master</span></h5></a>
	<img id = "myLogo" src = "IMG/afro.png"/>		
	</div>
<div class = "wholeDiv">
<div class = "field-div">
<fieldset class = "carousel-field">
	<div id="myCarousel" class="carousel slide">
   	<ol class="carousel-indicators">
    		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    		<li data-target="#myCarousel" data-slide-to="1"></li>
    		<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
  		</ol>
  	<div class="carousel-inner">
    	<div class="active item"><img src = "IMG/naruto.jpeg" id = "carIMG" /></div>
    	<div class="item"><img  src = "IMG/pein.png" id = "carIMG"></div>
    	<div class="item"><img src = "IMG/naruto1.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/kakashi.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/akatsuki.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/naruto-2.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/all.jpg" id = "carIMG"/></div>
  	</div>
	</br>
	<div class = "carousel-footer">
		<img id = "naruto-id" src = "IMG/naruto1.png"/>
	</div>
  		<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  		<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
	</div>
	<div id="myCarousel1" class="carousel slide">
   	<ol class="carousel-indicators">
    		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    		<li data-target="#myCarousel" data-slide-to="1"></li>
    		<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
  		</ol>
  	<div class="carousel-inner">
    	<div class="active item"><img src = "IMG/op.jpg" id = "carIMG" /></div>
    	<div class="item"><img  src = "IMG/allp.jpg" id = "carIMG"></div>
    	<div class="item"><img src = "IMG/logoOP.gif" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/AL.png" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/reload.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/luffy.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/robin.jpg" id = "carIMG"/></div>
  	</div>
	</br>
	<div class = "carousel-footer">
		<img id = "one-piece-id" src = "IMG/op.png"/>
	</div>
  		<a class="carousel-control left" href="#myCarousel1" data-slide="prev">&lsaquo;</a>
  		<a class="carousel-control right" href="#myCarousel1" data-slide="next">&rsaquo;</a>
	</div>
	<div id="myCarousel2" class="carousel slide">
   	<ol class="carousel-indicators">
    		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    		<li data-target="#myCarousel" data-slide-to="1"></li>
    		<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
  		</ol>
  	<div class="carousel-inner">
    	<div class="active item"><img src = "IMG/all-bleach.jpg" id = "carIMG" /></div>
    	<div class="item"><img  src = "IMG/final.jpg" id = "carIMG"></div>
    	<div class="item"><img src = "IMG/ichigo.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/bleach1.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/soul.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/el.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/to.jpg" id = "carIMG"/></div>
  	</div>
	</br>
	<div class = "carousel-footer">
		<img id = "bleach-id" src = "IMG/bleach1.png"/>
	</div>
  		<a class="carousel-control left" href="#myCarousel2" data-slide="prev">&lsaquo;</a>
  		<a class="carousel-control right" href="#myCarousel2" data-slide="next">&rsaquo;</a>
	</div>
	<div id="myCarousel3" class="carousel slide">
   	<ol class="carousel-indicators">
    		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    		<li data-target="#myCarousel" data-slide-to="1"></li>
    		<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
  		</ol>
  	<div class="carousel-inner">
    	<div class="active item"><img src = "IMG/logoFT.jpg" id = "carIMG" /></div>
    	<div class="item"><img  src = "IMG/tail.jpg" id = "carIMG"></div>
    	<div class="item"><img src = "IMG/armor.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/happy.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/fight.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/other.jpg" id = "carIMG"/></div>
		<div class="item"><img src = "IMG/natsu.jpg" id = "carIMG"/></div>
  	</div>
	</br>
	<div class = "carousel-footer">
		<img id = "fairy-id" src = "IMG/fairy.png"/>
	</div>
  		<a class="carousel-control left" href="#myCarousel3" data-slide="prev">&lsaquo;</a>
  		<a class="carousel-control right" href="#myCarousel3" data-slide="next">&rsaquo;</a>
	</div>
</fieldset>
</div>
<div class = "news-anime">
	<a href = "anime_news_details.php"><img id = "news-button" src = "IMG/news_button.png"/></a> <a id = "k-id" href = "k.php">&nbsp;K-anime is now on our list ! A First Look </a> <span id = "span-message">&nbsp;&nbsp;ANIMEmaster is inviting you to join us to get more anime stories and know more about us ..</span>
	<a id = "k-id2" href = "k.php">&nbsp;asdadasdasddasdasd</a> <span id = "span-message1">&nbsp;&nbsp;asdasdasdasdassdgjfj hdhd sgsgsgsdsdfsdfsf.</span> 
</div></br>
<div class = "div-content">
	<button id = "most-popular-anime">Most Popular Animes</button></br></br>
	<button id = "least-popular-anime">Least Popular Animes</button></br></br>
	<button id = "most-read-books">Most Read Books</button></br></br>
	<button id = "least-read-books">Least Read Books</button>

	<fieldset class = "items-field">
	<div class = "most-pop-div">
		<fieldset class = "history-field1">
			<img id = "history-image" src = "IMG/nar-sas.jpg"/>
			<p id = "history-title">NARUTO SHIPPUDEN</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong>bt. year 1999</strong></em>
			<em id = "history-message">Writer : <strong>Mashahi Kishimoto</strong></em>
			<em id = "history-message">Publisher : <strong>Shueisha</strong></em>
			<em id = "history-message">Producer : <strong>Studio Pierrot</strong></em>
		</fieldset>
		<fieldset class = "history-field2">
			<img id = "history-image" src = "IMG/bleach.jpg"/>
			<p id = "history-title">BLEACH</p>
			<hr id = "history-hr"/>	
			<em id = "history-message">Created : <strong>January 5, 2002</strong></em>
			<em id = "history-message">Writer : <strong>Tite Kubo.</strong></em>
			<em id = "history-message">Publisher : <strong>Shueisha</strong></em>
			<em id = "history-message">Producer : <strong>Studio Pierrot</strong></em>
		</fieldset>
		<fieldset class = "history-field3">
			<img id = "history-image1" src = "IMG/FT1.jpg"/>
			<p id = "history-title1">FAIRYTAIL</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong>December 15, 2006</strong></em>
			<em id = "history-message">Writer : <strong>Hiro Mashima</strong></em>
			<em id = "history-message">Publisher : <strong>Kodansha</strong></em>
			<em id = "history-message">Producer : <strong>A-1 Pictures</strong></em>
		</fieldset>
		<fieldset class = "history-field4">
			<img id = "history-image1" src = "IMG/suoh2.jpg"/>
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
			<img id = "history-image" src = "IMG/nar-sas.jpg"/>
			<p id = "history-title">NARUTO SHIPPUDEN</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
		<fieldset class = "history-field2">
			<img id = "history-image" src = "IMG/bleach.jpg"/>
			<p id = "history-title">BLEACH</p>
			<hr id = "history-hr"/>	
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
		<fieldset class = "history-field3">
			<img id = "history-image1" src = "IMG/FT1.jpg"/>
			<p id = "history-title1">FAIRYTAIL</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
		<fieldset class = "history-field4">
			<img id = "history-image1" src = "IMG/suoh2.jpg"/>
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
			<img id = "history-image" src = "IMG/nar-sas.jpg"/>
			<p id = "history-title">asdafgdg</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
		<fieldset class = "history-field2">
			<img id = "history-image" src = "IMG/bleach.jpg"/>
			<p id = "history-title">asdasdasd</p>
			<hr id = "history-hr"/>	
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
		<fieldset class = "history-field3">
			<img id = "history-image1" src = "IMG/FT1.jpg"/>
			<p id = "history-title1">dgzcxvxc</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
		<fieldset class = "history-field4">
			<img id = "history-image1" src = "IMG/suoh2.jpg"/>
			<p id = "history-title1">dgsysf</p>
			<hr id = "history-hr"/>
			<em id = "history-message">Created : <strong></strong></em>
			<em id = "history-message">Writer : <strong></strong></em>
			<em id = "history-message">Publisher : <strong></strong></em>
			<em id = "history-message">Producer : <strong></strong></em>
		</fieldset>
	</div>
	
	</fieldset>
</div>
<div class = "btn-left-right">
	<div class = "section-divider">
		<span id = "div-title">FEATURED PRODUCTS</span><hr id = "hr-id"/>
	</div>
	<fieldset class = "btn-field">
		<button type = "button" id = "dvd-id"><span class = "inner">DVD</span></button>
		<button type = "button" id = "manga-id"><span class = "inner">MANGA</span></button>
		<button type = "button" id = "games-id"><span class = "inner">GAMES</span></button>	
		<fieldset class = "buttons-class">
			<img id = "btn_left_arrow" src = "IMG/Button-Previous-icon.png"/>&nbsp;
			<img id = "btn_right_arrow" src = "IMG/Button-Next-icon.png"/>
		</fieldset>
	</fieldset>
<div class = "products-class">
	<div class = "dvd-class">
		<img id = "FPDVDnar-id" src = "IMG/narDVD.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id = "FPDVDble-id" src = "IMG/bleDVD.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id = "FPDVDkek-id" src = "IMG/kekDVD.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id = "FPDVDinu-id" src = "IMG/inuDVD1.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id = "FPDVDvkn-id" src = "IMG/vknDVD.jpg"/>
	</div>
	<div class = "manga-class">
		<img id = "FPDVDnar-id" src = "IMG/narDVD.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id = "FPDVDnar-id" src = "IMG/narDVD.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id = "FPDVDnar-id" src = "IMG/narDVD.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id = "FPDVDnar-id" src = "IMG/narDVD.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id = "FPDVDnar-id" src = "IMG/narDVD.jpg"/>
	</div>
	<div class = "games-class">
		<img id = "FPDVDnar-id" src = "IMG/bleDVD.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id = "FPDVDnar-id" src = "IMG/bleDVD.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id = "FPDVDnar-id" src = "IMG/bleDVD.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id = "FPDVDnar-id" src = "IMG/bleDVD.jpg"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img id = "FPDVDnar-id" src = "IMG/bleDVD.jpg"/>
	</div>
</div>
	<div class = "sales-div">
		<fieldset class = "products-details">
			<p>asdasasf</p>
		</fieldset>
	</div>
<div class = "dialog-sales" title = "Buy">
	<p id = "message-dialog">Transaction ..</p>
	<form class = "buying_form">
		Pieces: <input type = "text" id = "pieces" name = "pieces"></br>
					<input type = "hidden" name = "id"/></br>
				
			<button type = "submit" id = "buy-btn">Buy</button>
			<button id = "close-btn">Cancel</button>	
	</form>
</div>
<div id="loginModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	
	<div class="modal-header">	
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class = "icon-remove icon-white"></i></button>
    	<h3 id="myModalLabelme">Login</h3>	
	</div>
	<div class="modal-body">
		<form method = "POST" action = "anime_index.php">
			Username:</br> <input type = "text" id = "user" name = "username_entered"/></br>
			Password:</br> <input type = "password" id = "pass" name = "password_entered"/>
			<?php 
				if (isset($errMsg)) {
					echo $errMsg;
				}
			 ?>
			<div class="modal-footer">
			 	<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
			 	<button class="btn btn-primary">Ok</button>
		 	</div>
		</form>
		
	</div>
	
</div>
<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	<div class = "modal-header">	
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class = "icon-remove icon-black"></i></button>
	<h3 id="myModalLabel">Register for free ..</h3></br>
	</div>
		</br>
	<div class="modal-body">
		<form id = "register_form">
			Firstname:</br> <input type = "text" id = "fname" name = "firstname"/></br>
			Lastname:</br> <input type = "text" id = "lname" name = "lastname"/></br>
			Address:</br> <input type = "text" id = "address" name = "address"/></br>
			Gender:</br> <input type = "text" id = "gender" name = "gender"/></br>
			Contact Number:</br> <input type = "text" id = "CN" name = "contact_number"/></br>
			Email Address:</br> <input type = "text" id = "email" name = "email_ddress"/></br>
			Username:</br> <input type = "text" id = "user" name = "username"/></br>
			Password:</br> <input type = "password" id = "pass" name = "password"/></br>
			Re-enter password:</br> <input type = "password" id = "pass2" name = "password2"/></br>
									 <input type = "hidden" name = "id"/></br>
 				
				
		</form>
	</div>
	<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    		<button id = "myReg" data-dismiss = "modal" aria-hidden = "true" class="btn btn-primary">Submit</button>
	</div>
</div><!-- modal ends -->			
	<div class = "collections">
		<ul class = "firstList">
			<li id = "li-info"><a href = "#" id = "href">Naruto Shippuden</a></li>
			<li id = "li-info"><a href = "#" id = "href">One Piece</a></li>
			<li id = "li-info"><a href = "#" id = "href">Bleach</a></li>
			<li id = "li-info"><a href = "#" id = "href">Fairytail</a></li>
			<li id = "li-info"><a href = "#" id = "href">Fullmetal Alchemist</a></li>
			<li id = "li-info"><a href = "#" id = "href">K Anime Project</a></li>
			<li id = "li-info"><a href = "#" id = "href">Dragon Ball</a></li>
			<li id = "li-info"><a href = "#" id = "href">Magi</a></li>
			<li id = "li-info"><a href = "#" id = "href">Tiger & Bunny</a></li>
			<li id = "li-info"><a href = "#" id = "href">Reborn</a></li>
		</ul>
		<ul class = "secondList">
			<li id = "li-info"><a href = "#" id = "href">Zetman</a></li>
			<li id = "li-info"><a href = "#" id = "href">Neuro</a></li>
			<li id = "li-info"><a href = "#" id = "href">Accel World</a></li>
			<li id = "li-info"><a href = "#" id = "href">Buso Renkin</a></li>
			<li id = "li-info"><a href = "#" id = "href">Hikaru No Go</a></li>
			<li id = "li-info"><a href = "#" id = "href">Blue Exorcist</a></li>
			<li id = "li-info"><a href = "#" id = "href">Death Note</a></li>
			<li id = "li-info"><a href = "#" id = "href">I"s</a></li>
			<li id = "li-info"><a href = "#" id = "href">Strawberry 100%</a></li>
			<li id = "li-info"><a href = "#" id = "href">Full Moon</a></li>
		</ul>
		<ul class = "thirdList">			
			<li id = "li-info"><a href = "#" id = "href">Honey and Clover II</a></li>
			<li id = "li-info"><a href = "#" id = "href">The Prince of Tennis</a></li>
			<li id = "li-info"><a href = "#" id = "href">Nana</a></li>
			<li id = "li-info"><a href = "#" id = "href">Ultra Maniac</a></li>
			<li id = "li-info"><a href = "#" id = "href">Cross Game</a></li>
			<li id = "li-info"><a href = "#" id = "href">Inuyasha</a></li>
			<li id = "li-info"><a href = "#" id = "href">Vampire Knight</li>
			<li id = "li-info"><a href = "#" id = "href">Kekkaishi</a></li>
			<li id = "li-info"><a href = "#" id = "href">MAR</a></li>
			<li id = "li-info"><a href = "#" id = "href">Blue Dragon: Trials of the 7 Shadows</a></li>
		</ul>
		<ul class = "fourthList">	
			<li><a href = "#" id = "href">Naoki Urasawa's Monster</a></li>
			<li><a href = "#" id = "href">Blue Dragon Uncut</a></li>
			<li><a href = "#" id = "href">LAGRANGE The flower of Rin-ne</a></li>
			<li><a href = "#" id = "href">Gintama</a></li>
			<li><a href = "#" id = "href">Detective Conan</a></li>
			<li><a href = "#" id = "href">Ghost Fighter</a></li>
			<li><a href = "#" id = "href">Slam Dunk</a></li>
			<li><a href = "#" id = "href">Great Teacher Onizuka</a></li>
			<li><a href = "#" id = "href">Hotarubi no Mori e</a></li>
			<li><a href = "#" id = "href">Hellsing Ultimate</a></li>
		</ul>
	</div>
	<div class = "about">
	</div>
</div>
</body>
</html>


