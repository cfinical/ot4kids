<?php

$showMessage = false;
$error = false;

 if( isset($_POST["address"]))
 {
 	if(empty($_POST["firstName"]) || empty($_POST["lastName"]) || empty($_POST["address"]) || empty($_POST["phone"]) || empty($_POST["subject"]) || empty($_POST["message"]))
 	{
 		$error = true;
 	}
 	else
 	{
 	// then do this
 	$firstName = $_POST["firstName"];
 	$lastName = $_POST["lastName"];	
 	$address = $_POST["address"];
 	$phone = $_POST["phone"];
 	$subject = $_POST["subject"];
 	$message = $_POST["message"];

 	$recipient = "info@ot4kidstlc.com";

 	$mailBody = "This Mail Is From: $firstName \n $lastName \n $address \n $phone \n $message";

 	mail($recipient, $subject, $mailBody);

 	$showMessage = true;
 	}
 }

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OT 4 KIDS AND THERAPEUTIC CENTER LOS ANGELES</title>
	<link rel="stylesheet" type="text/css" href="_css/styles.css">
	<link rel="icon" href="_images/icon.png">
	<style type="text/css">

	@media only screen and (max-width: 1200px){
		#contactPage .col-2{
			width: 12.333%;
		}
		#contactPage .col-8{
			width: 75.333%;
		}
		#contactPage p{
			font-size: 12.5px;
		}
		iframe{
			height: 360px;
		}
	}
	@media only screen and (max-width: 1150px){
		#contactPage .col-4 h2{
			font-size: 28px;
		}
	}
	@media only screen and (max-width: 1100px){
		#contactPage .col-2{
			width: 8.333%;
		}
		#contactPage .col-8{
			width: 83.333%;
		}
		#contactPage p{
			font-size: 12px;
		}
		h2#whiteText{
			font-size: 28px;
		}
		h2#normalForm{
			font-size: 28px;
		}
		.map{
			width: 85%;
			right: 7%;
		}
		iframe{
			height: 320px;
		}
	}
	@media only screen and (max-width: 1050px){
		#contactPage .col-4 h2{
			font-size: 26px;
		}
		#contactPage p{
			font-size: 11.5px;
		}
	}
	@media only screen and (max-width: 1000px){
		h2#whiteText{
			font-size: 26px;
		}
		h2#normalForm{
			font-size: 26px;
		}
		#contactPage .col-4 h2{
			font-size: 22px;
		}
		#contactPage p{
			font-size: 11px;
		}
		iframe{
			height: 280px;
		}
	}
	@media only screen and (max-width: 900px){
		#contactPage .col-4 h2{
			font-size: 20px;
		}
		#contactPage p{
			font-size: 10.5px;
		}
		h2#whiteText{
			font-size: 22px;
		}
		h2#normalForm{
			font-size: 22px;
		}
		iframe{
			height: 260px;
		}
	}
	@media only screen and (max-width: 800px){
		#contactPage .col-4 h2{
			font-size: 18px;
		}
		#contactPage p{
			font-size: 10px;
		}
		h2#whiteText{
			font-size: 20px;
		}
		h2#normalForm{
			font-size: 22px;
		}
		iframe{
			height: 240px;
		}
	}
	@media only screen and (max-width: 750px){
		iframe{
			height: 220px;
		}
	}
	@media only screen and (max-width: 700px){
		iframe{
			height: 210px;
		}
	}
	@media only screen and (max-width: 670px){
		#contactPage .col-4{
			width: 100%;
			margin: 0px;
			padding: 0px;
		}
		#officeContactInfo{
			display: none;
		}
		#officeContactInfo_mobile{
			display: inline;
		}
		#officeContactInfo_mobile h2{
			font-size: 22px;
		}
		#officeContactInfo_mobile p{
			font-size: 11px;
			text-align: center;
		}
		#mobileGreyContact{
			background-color: #e3ebef;
		}
		#mobileMap{
			display: inline;
		}
		#mobileMapTitle{
			display: inline;
		}
		#fullmap{
			display: none;
		}
		#formTitle{
			display: inline;
		}
		#normalForm{
			display: none;
		}
		iframe{
			height: 250px;
		}
	}
	@media only screen and (max-width: 570px){
		#formTitle h2{
			font-size: 22px;
		}
		#mobileMapTitle h2{
			font-size: 22px;
		}
	}
		@media only screen and (max-width: 500px){
		#formTitle h2{
			font-size: 20px;
		}
		#mobileMapTitle h2{
			font-size: 20px;
		}
		#officeContactInfo_mobile h2{
			font-size: 18px;
		}
		#officeContactInfo_mobile p{
			font-size: 10px;
		}
	}

	</style>
</head>
<body>
<div id="container">
<header>
		<div id="boxRight">
			<div class="phone">
				<p> 310-344-2276</p>
			</div>	

			<div class="phoneicons">
					<img src="_imgs/phone.png">
			</div>	
		</div>


		<div id="boxLeft">
			<div class="mobileIcons">
				<a href="https://www.facebook.com/ot4kidstlc/" target="blank">
					<img src="_imgs/facebook.png">
				</a>
			</div>		
			<div class="mobileIcons">
				<a href="https://www.instagram.com/ot4kidstlc/" target="blank">
					<img src="_imgs/insta.png">
				</a>
			</div>
			<div class="mobileIcons">
				<a href="https://www.linkedin.com/company/ot-4-kids-&-the-therapeutic-learning-center" target="blank">
					<img src="_imgs/linkedin.png">
				</a>
			</div>															
			<div class="mobileIcons">
				<a href="https://www.yelp.com/biz/ot-4-kids-and-the-therapeutic-learning-center-santa-monica" target="blank">
					<img src="_imgs/yelp.png">
				</a>
			</div>	
		</div>


		<div id="normalNavigation">

			<div id="logo" class="full">
				<a href="index.html">
					<h1>OT 4 KIDS</h1>
					<h3>& Therapeutic Learning Center</h3>
				</a>	
			</div>

			<div class="full">
				<div id="mainMenu">
					<div id="margins" class="col-1_noMargin">.</div>
					<div class="col-10_noMargin">
							<nav>
								<ul>
									<li class="top">
										<a class="hvr-underline-from-center" href="aboutus.html">WHY<br>OT 4 KIDS?</a>
											<ul class="sub">
												<li><a href="aboutus.html">About Us</a></li>
												<li><a href="aboutus.html#owner">About the Owner</a></li>
												<li><a href="aboutus.html#reviews">Testimonials</a></li>
											</ul>
									</li>
									<li class="top">
										<a class="hvr-underline-from-center" href="programs.html">SYMPTOMS<br>& SERVICES</a>
											<ul class="sub">
												<li><a href="programs.html#fineMotor">Fine Motor Skills</a></li>
												<li><a href="programs.html#grossMotor">Gross Motor Skills</a></li>
												<li><a href="programs.html#dailyLiving">Dail Living Skills</a></li>
												<li><a href="programs.html#visualSkills">Ocular Motor Skills</a></li>
												<li><a href="programs.html#socialSkills">Social Skills</a></li>
												<li><a href="programs.html#executiveFunctioning">Executive Functioning</a></li>
												<li><a href="programs.html#oralMotor">Oral Motor Skills</a></li>
												<li><a href="programs.html#Listening">Listening Therapy</a></li>
											</ul>
									</li>
									<li class="top"><a class="hvr-underline-from-center" href="resources.html">RESOURCES<br>FOR PARENTS</a>
									</li>
									<li class="top"><a class="hvr-underline-from-center" href="blog.html" target="blank">OT 4 KIDS<br>BLOG</a>
									</li>
									<li class="top"><a class="hvr-underline-from-center" href="contact.php"><br>CONTACT US</a>
									</li>
								</ul>
								<div class="clear"></div>
							</nav>
						</div>
						<div id="margins" class="col-1_noMargin">.</div>	
				</div>
			</div>
			<div class="clear"></div>
		</div>
		


		<div id="mobileNavigation">
				
			<div id="mobileLogo" class="full">
				<h1>OT 4 KIDS</h1>
				<h3>& Therapeutic Learning Center</h3>
			</div>
			<div class="full">
				<div id="mobileMenu">
					<nav>
						<h3>MENU</h3>
							<div id="dropDown">		
								<a href="index.html"><p>Home</p></a>
								<a href="aboutus.html"><p>WHY<br>OT 4 KIDS?</p></a>
								<a href="programs.html"><p>SYMPTOMS<br>& SERVICES</p></a>
								<a href="resources.html"><p>RESOURCES<br>FOR PARENTS</p></a>
								<a href="blog.html"><p>OT 4 KIDS<br>BLOG</p></a>
								<a href="contact.php"><p>CONTACT US</p></a>
							</div>		
					</nav>
				</div>	
			</div>
			<div class="clear"></div>
		</div>	
		<div class="clear"></div>
	</header>

	<div id="contactPage">
		<div id="officeContactInfo" class="aboutFull">
			<div class="col-2">
				<!-- doesnt contain anything -->
			</div>
			<div class="col-8">
				<div class="col-4">
					<h2>OUR ADDRESS</h2>
					<p>1932 14th St.<br>Santa Monica, CA 90404</p>
				</div>
				<div class="col-4">
					<h2>CONTACT US</h2>
					<p>(310)344-2276<br>Info@ot4kidstlc.com</p>
				</div>
				<div class="col-4">
					<h2>OUR HOURS</h2>
					<p> Monday- Friday 8AM - 6PM<br>Weekends by Appointment Only</p>
				</div>
			</div>	
			<div class="col-2">
				<!-- doesnt contain anything -->
			</div>
		</div>	

		<div id="officeContactInfo_mobile">
				<div class="aboutFull">
					<h2>OUR ADDRESS</h2>
					<p>1932 14th St.<br>Santa Monica, CA 90404</p>
				</div>
				<div id="mobileGreyContact" class="aboutFull">
					<h2>CONTACT US</h2>
					<p>(310)344-2276<br>Info@ot4kidstlc.com</p>
				</div>
				<div class="aboutFull">
					<h2>OUR HOURS</h2>
					<p> Monday- Friday 8AM - 6PM<br>Weekends by Appointment Only</p>
					<br>
				</div>
		</div>

			<div id="fullmap" class="aboutFull">
				<img class="imgSizer" src="_imgs/map_background.jpg">
				<div class="mapTitle">
					<h2 id="whiteText">Where We Are Located</h2>
				</div>
				<div class="map">
				<div class="clear"></div>
							<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.0659592456764!2d-118.47955624838796!3d34.01651782696254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bb2f03480391%3A0xaa6f37f1a82a4d9!2s1932+14th+St%2C+Santa+Monica%2C+CA+90404!5e0!3m2!1sen!2sus!4v1464226363230" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
							<div class="clear"></div>
				</div>
			</div>
			<div id="mobileMapTitle" class="aboutFull">
					<h2> Where We Are Located</h2>
			</div>		
					<iframe id="mobileMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.0659592456764!2d-118.47955624838796!3d34.01651782696254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bb2f03480391%3A0xaa6f37f1a82a4d9!2s1932+14th+St%2C+Santa+Monica%2C+CA+90404!5e0!3m2!1sen!2sus!4v1464226363230" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
			
			<div id="formTitle" class="aboutFull">
					<h2>Have Further Questions?</h2>
			</div>	
				<div class="col-2"></div>
				<div class="col-8">
					<h2 id="normalForm">Have Further Questions?</h2>
					<p>
						To allow us to contact you for immediate answers and guidance, please complete the form and indicate your perferred method of communication. One of our specialist will get back to you by the next business day. 
					</p>	
					<?php 
					if($showMessage)
					{
						echo"<h2>Your Email Has Been Sent, Thank You</h2>";
					}
					if($error)
					{
						echo"<h2>Please Fill Out All Required Info</h2>";
					}


					?>
					<form action="contact.php" method="post">
						<div class="parentfield col-6">
							<label for="firstName"> First Name: </label>
							<input class="fieldsmall" type="text" name="firstName" placeholder="Kellie">
						</div>
						<div class="parentfield col-6">
							<label for="lastName"> Last Name: </label>
							<input class="fieldsmall" type="text" name="lastName" placeholder="Marie">
						</div>
						<div class="parentfield col-6">
							<label for="address"> E-mail: </label>
							<input class="fieldsmall" type="text" name="address" placeholder="you@example.com">
						</div>
						<div class="parentfield col-6">
							<label for="phone"> Phone Number: </label>
							<input class="fieldsmall" type="text" name="phone" placeholder="(999)999-9999">
						</div>
						<div class="parentfield full">
							<label for="subject"> Subject: </label>
							<input class="fieldsmall" type="text" name="subject" placeholder="What's on your mind?">
						</div>
						<div class="clear"></div>
						<div class="parentfield">
							<label for="message"> Tell Us Whats On Your Mind</label>
							<textarea class="fieldlarge" name="message" cols="70" rows="8"></textarea>
						</div>
						<div class="parentfield">
							<input class="fieldbutton" type="submit" value="Submit">
						</div>
					</form>			
				</div>	
				<div class="col-2"></div>
			<div class="clear"></div>
	</div>	


<footer>
		<div class="aboutFull footer_nav">
			<div id="margins" class="col-1">
				.
			</div>
			<div class="col-10">
				<div>
					<div id="footer_menu">
						<nav>
							<ul>
								<li class="top">
									<a href="index.html">HOME
									</a>
								</li>
								<li class="top">
									<a href="aboutus.html">ABOUT
									</a>
								</li>
								<li class="top">
									<a href="programs.html">PROGRAMS
									</a>
								</li>
								<li class="top">
									<a href="resources.html">RESOURCES
									</a>
								</li>
								<li class="top">
									<a href="blog.html">BLOG
									</a>
								</li>
								<li class="top">
									<a href="contact.php">CONTACT
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>	
			<div id="margins" class="col-1">
				.
			</div>
		</div>	

		<div id="footer_info" class="aboutFull">
			<div id="margins" class="col-1">
				.
			</div>
			<div class="col-10">	
					<div class="aboutFull">
						<div id="margins" class="footerMargin">.</div>
						<div class="footerInfo">
							<h2>Follow Us</h2>
							<div class="iconGroup">
								<div class="icons">
									<a href="https://www.facebook.com/ot4kidstlc/" target="blank">
										<img src="_imgs/facebook.png">
									</a>
								</div>
								<div class="icons">
									<a href="https://www.instagram.com/ot4kidstlc/" target="blank">
										<img src="_imgs/insta.png">
									</a>
								</div>
								<div class="icons">
									<a href="https://www.linkedin.com/company/ot-4-kids-&-the-therapeutic-learning-center" target="blank">
										<img src="_imgs/linkedin.png">
									</a>
								</div>
								<div class="icons">
									<a href="https://www.yelp.com/biz/ot-4-kids-and-the-therapeutic-learning-center-santa-monica" target="blank">
										<img src="_imgs/yelp.png">
									</a>
								</div>
							</div>
						</div>
						<div class="footerInfo">
							<h2>Contact Us</h2>
							<p>(310)344-2276</p>
						</div>
						<div class="footerInfo">
							<h2>E-mail Us</h2>
							<p>Service@ot4kidstlc.com</p>
						</div>
						<div class="footerInfo">
							<h2>Visit Us</h2>
							<p>1932 14th Street</p>
							<p>Santa Monica, CA</p>
						</div>	
					</div>	
					<div class="clear"></div>		
			</div>
			<div id="margins" class="col-1">
				.
			</div>
		</div>	
		
		<div class="aboutFull">
				<br>
				<h1>OT 4 KIDS </h1>
				<h3> & Theraputic Learning Center</h3>
				<br>
				<br>
				<p class="copyright"> © Copyright 2015 OT 4 Kids - All Rights Reserved</p>
		</div>
		<div class="clear"></div>

	</footer>
	
	
</div>


<script type="text/javascript" src="_js/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
		$(document).ready(function (){
			console.log("working?");

				var tops = $('#mainMenu .top');

		function drop_down(){

			var subs = $(this).find('.sub');

			function sub_show(){
				// console.log(this);
				subs.show();
			}
			function sub_hide(){
				subs.hide();
			}

			$(this).mouseover(sub_show);
			$(this).mouseout(sub_hide);

		}

		tops.each(drop_down);	

		function showSmall(){
			$("#mobileMenu #dropDown").toggle();
		}

		$("#mobileMenu").click(showSmall);
	

	});

</script>




</body>
</html>