<?php
$name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $message=$_REQUEST['message'];
        $valid_captcha=$_REQUEST['g-recaptcha-response'];
        $message = "Phone:$phone \n $message";
        $formcontent="From: $name \n Message: $message";
        $recipient = "davinder@birkpainting.com";
        $subject = "Contact Form from website";
        $mailheader = "From: $email \r\n";
        
        
?>
<html lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Birk Painting</title>

<!-- Fav Icon -->


<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="rs-plugin/css/settings.css">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--header start-->
<div class="header-wrap">
  <div class="container">
    <div class="navigationwrape">
      <div class="navbar navbar-default" role="navigation">
        <div class="row">
          <div class="col-md-3 col-sm-12">
            <div class="logo"><a href="index.html"><img src="images/logo.jpg" alt=""></a></div>
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
          </div>
          <div class="col-md-1 col-sm-2 pull-right"> 
            
            <!-- Single button -->
            <div class="search-bar">
              <button type="button" class="search" data-toggle="dropdown"> <i class="fa fa-search" aria-hidden="true"></i> </button>
              <div class="dropdown-menu">
                <input type="text" class="form-control" placeholder="Search">
              </div>
            </div>
          </div>
          <div class="col-md-8 col-sm-10">
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown"> <a href="index.html"> HOME </a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                  
                </li>
                <li> <a href="about-us.html"> ABOUT US </a></li>
                <li class="dropdown"> <a href="services.html"> SERVICES </span></a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                 
                </li>
                <li class="dropdown"> <a href="portfolio.html"> PORTFOLIO </span></a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                  
                </li>
                <li class="dropdown"> <a href="testimonials.html"> TESTIMONIALS </a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                  
                </li>
                <li class="dropdown"> <a href="contact-us.html"> CONTACT US</span></a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                 
                </li>
               
              </ul>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!--header end-->

<!-- Revolution slider start -->
<div class="inner-heading">
  <div class="container">
    <h1>Contact Us</h1>
  </div>
</div>
<!-- Revolution slider end --> 
<div class="inner-content">
  <div class="container"> 
    <!--Contact Start-->
    <div class="contact-wrap">
      <div class="title-box">
        
        <div class="text">Thank you for visiting our site and we look forward to working with you.<br />

Birk Painting is now taking new clients! Hurry to make your appointment before we are booked for the season.
Call or fill out the form for a free quote, One of our estimators will setup an appointment at your convenience
</div>

<h2 style="font-size:20px; color:#F00;"><em>"PROFESSIONAL PAINTING SINCE 2001<!-- - SEE THE DIFFERENCE QUALITY MAKES!-->"</em></h2>

      </div>
      <div class="default-form contact-form">
        <!-- form action="mailto:davinder@birkpainting.com" method="post" enctype="text/plain">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="input-group">
                <input type="text" name="name" class="form-control" placeholder="Your name">
              </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
              <div class="input-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email">
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="input-group">
                <input type="text" name="phone" class="form-control" placeholder="Phone">
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="input-group">
                <textarea name="message" class="form-control" placeholder="Your Massage"></textarea>
              </div>
            </div>
            <div class="col-md-12 col-sm-12">
              <div class="input-group submitbtn">
                <input type="submit" class="sub" value="Send Massage">
              </div>
            </div>
          </div>
        </form !-->
        <?php
        if($valid_captcha != "")
        {
        mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
        echo "Thank You! Your message sent successfully";
        }
        else
           echo "Some validation error happened not able to send email!!!!"
?>
        
      </div>
      <section class="xs-contact-infomation xs-contact-info-1">
        <div class="container">
          <div class="row">
            
            <div class="col-lg-4 col-md-4 col-md-offset-2">
              <div class="contact-info-group"> <i class="fa fa-envelope-open" aria-hidden="true"></i>
                <h4>Mail us</h4>
                <a href="mailto:davinder@birkpainting.com">davinder@birkpainting.com</a> 
                 <a href="mailto:ashley@birkpainting.com">ashley@birkpainting.com</a></div>
              <!-- .contact-info-group END --> 
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="contact-info-group"> <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                <h4>Call us</h4>
                <span>519-573-2672</span> </div>
              <!-- .contact-info-group END --> 
            </div>
          </div>
        </div>
      </section>
    </div>
    <!--Contact End--> 
    
  </div>
</div>
<!--Furniture Start-->

<!--Furniture Start--> 

<!--Welcome Start-->

<!--Welcome End--> 

<!--Project Start-->

<!--Project End--> 

<!--Team Start-->

<!--Team End--> 


<!--News Start-->

<!--News End--> 

<!--Footer Start-->
<div class="footer-wrap">
  <div class="container">
    
    <div class="footerWrp">
      <div class="copyright">© 2019 Birk Painting. All Rights Reserved | Designed by Acadia Systems</div>
    </div>
  </div>
</div>
<!--Footer Start--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 

<!-- general script file --> 
<script src="js/owl.carousel.js"></script> 

<!-- Counter --> 
<script src="js/counter.js"></script> 

<!-- general script file --> 
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>