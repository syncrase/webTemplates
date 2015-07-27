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
    <title>Locations</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/contactform.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
    	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<div class="bg">
   <header>
       <div class="zerogrid main wrap">
       		<h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1> 
            <p>8901 Marmora, Glasgow <span>8 (800) 552 5975</span></p>
       </div>
       <nav>  
          <ul class="zerogrid menu">
              <li class="first-child"><a href="index.html" class="home"></a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="maintenance.html">Maintenance</a></li>
              <li><a href="repair.html">Repair</a></li>
              <li><a href="price-list.html">Price List</a></li>
              <li class="current"><a href="contact.html">Contact Us</a></li>
          </ul>
          <div class="clear"></div>
        </nav>
   </header>
   <!--==============================content================================-->
   <section id="content" class="zerogrid">
      <div class="sub-page">
      	<div class="col-2-3"><div class="sub-page-left box-9">
        	<h2>Contact Form</h2>
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
        </div></div>
        <div class="col-1-3"><div class="sub-page-right">
            <h2>Find Us</h2>
            <div class="map">
              <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
            </div>
            <dl class="adr">
                <dt>8901 Marmora Road, <br>Glasgow, D04 89GR.</dt>
                <dd><span>Telephone:</span>+1 800 603 6035</dd>
                <dd><span>E-mail:</span><a href="#" class="link">mail@demolink.org</a></dd>
            </dl> 
        </div></div>
      </div>  
   </section> 
  <!--==============================footer=================================-->
    <footer class="zerogrid">
    	<div class="wrapfooter">
        <a href="http://www.zerotheme.com/" class="link" rel="nofollow" target="_blank">Free Html5 Templates</a> designed by TemplateMonster.com | Zerotheme.com</a>
        </div>
    </footer>	
</div> 
</body>
</html>