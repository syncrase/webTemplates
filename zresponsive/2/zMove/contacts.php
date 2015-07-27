<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px;'>Error! Please try again.</span>";

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
	  $text = "<span style='color:blue; font-size: 35px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/contactform.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/TMForm.js"></script>
<script src="js/modal.js"></script>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
 });
</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="" id="top">
<!--==============================
              header
=================================-->
<div class="main">
<header>
  <div class="zerogrid">
    <div class="col-full"><div class="wrap-col">
      <h1 class="logo">
        <a href="index.html">MOVE<span>your dance school</span>
        </a>
      </h1>
    </div></div>
  </div>
  <section id="stuck_container">
  <!--==============================
              Stuck menu
  =================================-->
    <div class="zerogrid">
        <div class="col-full"><div class="wrap-col">
          <div class="row navigation">
            <nav>
              <ul class="sf-menu">
               <li><a href="index.html">Home</a></li>
               <li><a href="about.html">About</a></li>
               <li><a href="classes.html">Classes</a></li>
               <li><a href="staff.html">Staff</a></li>
               <li class="current"><a href="contacts.html">Contacts</a></li>
             </ul>
            </nav>
          </div>
     </div></div>
    </div>
  </section>
</header>
<!--=====================
          Content
======================-->
<section id="content">
  <div class="zerogrid">
    <div class="col-full">
      <h2 class="inset__1">Find Us</h2>
      <div class="map">
        <figure class="">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
        </figure>
      </div>
    </div>
    <div class="row">
	    <div class="col-2-5"><div class="wrap-col">
	      <h4 class="color1 inset__1">Contact Info</h4>
	      <p>Lorem ipsum dolor sit amet, consecteturpiscinger elit um dolor sit amet, consecteturpiscing. </p>
	      <p>24/7 support is available for all <a class="color1" href="http://www.templatemonster.com/ rel="nofollow">premium templates</a>.</p>
	      <p><a class="color1" href="http://www.templatetuning.com/" rel="nofollow">TemplateTuning</a> will assist with customization of the chosen templates.</p>
	      The Company Name Inc. <br>
	      9870 St Vincent Place, <br>
	      Glasgow, DC 45 Fr 45. <br>
	      Telephone: +1 800 603 6035 <br>
	      FAX: +1 800 889 9898 <br>
	      E-mail: <a href="mailto:mail@demolink.org">mail@demolink.org</a>
	    </div></div>
	    <div class="col-3-5"><div class="wrap-col">
	      <h4 class="color1 inset__1">Contact Form</h4>
	        <div id="contact_form">
	        
	        	<!--Warning-->
				<center><?php echo $text;?></center>
				<!---->
				
				<strong>Hello !! You can send message to us.</strong>
				<form name="form1" id="ff" method="post" action="contacts.php">
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
    </div>
  </div>
</section>
<!--==============================
              footer_top
=================================-->
<div class="footer-top">
  <div class="zerogrid">
    <div class="col-full">
      <div class="sep-1"></div>
    </div>
    <div class="row">
	    <div class="col-1-3"><div class="wrap-col">
	      <address class="address-1"> <div class="fa fa-home"></div>28 Jackson Blvd Ste 1020 Chicago,  <br>
	IL 60604-2340</address>
	    </div></div>
	    <div class="col-1-3"><div class="wrap-col">
	      <a href="#" class="mail-1"><span class="fa fa-envelope"></span>info@demolink.org</a>
	    </div></div>
	    <div class="col-1-3"><div class="wrap-col">
	      <div class="socials">
	        <a href="#">facebook</a>
	        <a href="#">twitter</a>
	        <a href="#">google+</a>
	      </div>
	    </div></div>
    </div>
  </div>
</div>
<!--==============================
              footer
=================================-->
</div>
<footer id="footer">
  <div class="zerogrid">
    <div class="col-full"><div class="wrap-col">
      <div class="sub-copy">zMOVE &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br> <a href="http://www.zerotheme.com/" rel="nofollow">Html5 Templates</a> by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster</a> - <a href="http://www.zerotheme.com/" rel="nofollow">Zerotheme</a> </div>
    </div></div>
  </div>
</footer>
<a href="#" id="toTop" class="fa fa-angle-up"></a>
</body>
</html>