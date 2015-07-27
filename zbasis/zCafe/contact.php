<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contacts</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/contactform.css">
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/cufon-replace.js" type="text/javascript"></script>
	<script src="js/Vegur_500.font.js" type="text/javascript"></script>
	<script src="js/Ropa_Sans_400.font.js" type="text/javascript"></script> 
	<script src="js/FF-cash.js" type="text/javascript"></script>	
	<script src="js/script.js" type="text/javascript"></script>  
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
			<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
		</a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
 		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page5">
	<!--==============================header=================================-->
	<header>
		<div class="border-bot">
			<div class="main zerogrid">
				<h1><a href="index.html">InternetCafe</a></h1>
				<nav>
					<ul class="menu">
						<li><a href="index.html">Home</a></li>
						<li><a href="index-1.html">Events</a></li>
						<li><a href="index-2.html">Services</a></li>
						<li><a href="index-3.html">Jobs</a></li>
						<li><a class="active" href="contact.html">Contacts</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
			</div>
		</div>
	</header>
	<!--==============================content================================-->
	<section id="content">
		<div class="main">
			<div class="zerogrid">
				<div class="wrapper">
					<article class="col-2-3"><div class="wrap-col">
						<h3>Contact Form</h3>
						<div id="contact_form">
	        
				        	<!--Warning-->
							<center><?php echo $text;?></center>
							<!---->
							
							<strong>Hello !! You can send message to us.</strong>
							<form name="form1" id="ff" method="post" action="contact.php">
								 <label>
								 Name*:
								 <input type="text" placeholder="Please enter your name" name="name" id="name" required>
								 </label>
							 
								 <label>
								 Email*:
								 <input type="email" placeholder="youremail@gmail.com" name="email" id="email" required>
								 </label>
									
								 <label>
								 Message*:
								 <textarea name="message" id="message">Please enter your message</textarea>
								 </label>
							 
								 <input class="sendButton" type="submit" name="Submit" value="Send">
								 
							</form>
						</div>
					</div></article>
					<article class="col-1-3"><div class="wrap-col">
						<div class="indent-top indent-left">
							<div class="wrapper p3">
								<figure class="img-indent-r"><a href="#"><img src="images/page1-img1.png" alt=""></a></figure>
								<div class="extra-wrap">
									<strong class="title-1">Tell Your<strong>Friends</strong><em>About</em><em>Our Cafe</em></strong>
								</div>
							</div>
							<h3 class="p1">Latest News</h3>
							<p class="prev-indent-bot">24 Hour Emergency Towing</p>
							<p class="p0">Monday - Friday: 7:30 am - 6:00</p>
							<p class="prev-indent-bot">Saturday: 7:30 am - Noon</p>
							<p class="img-indent-bot">Night Drop Available</p>
							<dl>
								<dt class="prev-indent-bot">Demolink.org 8901 Marmora Road, Glasgow, D04 89GR.</dt>
								<dd><span>Telephone:</span>+1 959 552 5963;</dd>
								<dd><span>FAX:</span>+1 959 552 5963</dd>
								<dd><span>E-mail:</span><a href="#">mail@demolink.org</a></dd>
							</dl>
						</div>
					</div></article>
				</div>
			</div>
		</div>
	</section>
	<!--==============================footer=================================-->
	<footer>
		<div class="main">
			<div class="zerogrid">
				<div class="wrapper">
					<div class="col-1-4">
						<div class="wrap-col spacer-1">
							<a href="index.html"><img src="images/footer-logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-2-4">
						<div class="wrap-col indent-top2">
							<p class="prev-indent-bot">&copy; 2014 Interior <a rel="nofollow" href="http://www.templatemonster.com/" target="_blank">TemplateMonster.com</a> | <a rel="nofollow" href="http://www.zerotheme.com">Zerotheme.com</a></p>
							Phone: +1 800 559 6580 Email: <a href="#">info@internetcafe.com</a>
						</div>
					</div>
					<div class="col-1-4">
						<ul class="wrap-col list-services">
							<li><a class="item-1" href="#"></a></li>
							<li><a class="item-2" href="#"></a></li>
							<li><a class="item-3" href="#"></a></li>
							<li><a class="item-4" href="#"></a></li>
						</ul>
						<span class="footer-text">&copy; 2012 <a class="link color-2" href="#">Privacy Policy</a></span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>