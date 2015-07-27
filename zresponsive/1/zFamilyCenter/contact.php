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
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">  
	<link rel="stylesheet" href="css/contactform.css">  
	<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/cufon-replace.js" type="text/javascript"></script>
	<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
	<script src="js/Open_Sans_italic_400.font.js" type="text/javascript"></script> 
	<script src="js/FF-cash.js" type="text/javascript"></script>	
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>    
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->
	<!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page6">
<!-- header -->
	<header>
		<div class="row-top">
			<div class="main zerogrid">
				<div class="wrapper">
					<div class="col-2-3">
						<h1><a class="logo" href="index.html"><img src="images/logo.png" /></a></h1>  
					</div>
					<div class="col-1-3">
						<form id="search-form" method="post" enctype="multipart/form-data">
							<fieldset>	
								<div class="search-field">
									<input name="search" type="text" value="Search" onFocus="if(this.value=='Search'){this.value=''}" onBlur="if(this.value==''){this.value='Search'}" />
								</div>
								<a class="search-button" href="#" onClick="document.getElementById('search-form').submit()"><span>search</span></a>							
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row-bot">
			<div class="row-bot-shadow">
				<div class="main zerogrid">
					<div class="col-full">
						<nav>
							<ul class="menu">
								<li><a href="index.html">Home Page</a><strong></strong></li>
								<li><a href="health.html">Health Care</a><strong></strong></li>
								<li><a href="advices.html">Advices</a><strong></strong></li>
								<li><a href="staff.html">Our Staff</a><strong></strong></li>
								<li><a href="news.html">News</a><strong></strong></li>
								<li class="last active"><a href="contact.html">Contacts</a><strong></strong></li>
							</ul>
						</nav>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</header>
<!-- content -->
	<section id="content">
		<div class="main zerogrid">
				<div class="border-bot margin-bot">
					<article class="col-full"><div class="wrap-col">
						<div class="aligncenter inner-top">
							<strong class="title-1">&quot;Bring harmony to your family!&quot;</strong>
							<strong class="title-2">You have to be persistent to establish and maintain healthy, two-way communication. We can help.</strong>
						</div>
					</div></article>
					<div class="clear"></div>
				</div>
				<div class="wrapper">
					<article class="col-2-3"><div class="wrap-col">
						<h2>Get in Touch</h2>
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
					<article class="col-1-3"><div class="wrap-col mag-1">
						<h2>Find Us</h2>
						<figure class="img-indent-bot">
							<iframe width="300" height="210" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
						</figure>
						<dl>
							<dt class="indent-bot">8901 Marmora Road,<br>Glasgow, D04 89GR.</dt>
							<dd><span>Freephone:</span>  +1 800 559 6580</dd>
							<dd><span>Telephone:</span>  +1 959 603 6035</dd>
							<dd><span>FAX:</span>  +1 504 889 9898</dd>
							<dd><span>E-mail:</span> <a href="#">mail@demolink.org</a></dd>
						</dl>
					</div></article>
				</div>
		</div>
	</section>
<!-- footer -->
	<footer>
		<div class="main zerogrid">
			<div class="wrapper">
				<div class="col-1-3"><div class="wrap-col">
					<span class="footer-text">
						<span>Family Center &copy; 2014 Privacy Policy</span>
						<a rel="nofollow" href="http://www.templatemonster.com/">TemplateMonster</a> | <a rel="nofollow" href="http://www.zerotheme.com/">Zerotheme</a>
					</span>
					<div><!-- {%FOOTER_LINK} --></div>
				</div></div>
				<div class="col-1-3"><div class="wrap-col">
					<strong class="support-phone"><strong>+1(800)</strong> 123-1234</strong>
				</div></div>
				<div class="col-1-3"><div class="wrap-col">
					<ul class="list-services">
						<li><a class="l-1" href="#"></a></li>
						<li><a class="l-2" href="#"></a></li>
						<li><a class="l-3" href="#"></a></li>
						<li><a class="l-4" href="#"></a></li>
					</ul>
				</div></div>
			</div>
		</div>
	</footer>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>