<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HolidayInn</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<!-- FAVICON -->
<link rel="shortcut icon" href="favicon1.png" type="image/x-icon">
<link rel="icon" href="favicon1.png" type="image/x-icon">


<!-- GOOGLE FONTS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800%7COswald:400,300,700' rel='stylesheet' type='text/css' >
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
</head>
<body>
 
<!-- MAIN MENU -->
<nav id="bt-menu" class="bt-menu"><a href="#" class="bt-menu-trigger"><span>Menu</span></a>
  <ul>
    <li><a href="#welcome"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="#about-us"><i class="fa fa-user"></i>About us</a></li>
    <li><a href="#contact-us"><i class="fa fa-phone"></i>Contact</a></li>
    <li class="nav-contact"><strong>HolidayInn</strong><br>    
      Azikiwe Street TZ,<br>
      Upanga Rd,  <br>
      Dar Es Salaam 11105<span><strong>contact.&nbsp;<br></strong><a href="tel:+255222139250">+255 222 139 250</a></span><span><strong>Email.&nbsp;<br></strong><a href="mailto:reservations@Holidayinn.Co.Tz">reservations@Holidayinn.Co.Tz</a> </span></li>

  </ul>
</nav>
<!-- END MAIN MENU -->
<div id="fullpage"> 
  <!-- HOME SECTION -->
  <section id="home" class="section pull-center">
    <div class="main">
      <div class="page">
        <div class="container">
          <div class="logo"><img src="images/logo2.png" alt="" /></div>
          <div id="counter"></div>
          <div class="home">
            <h1 class="align-center">We are a Hotel loacted at the City Centre </h1>
            <p class="text">Our website is under Maintainance. We'll be here soon with our new awesome site, subscribe to be notified.</p>
            <div class="notify-by-email align-center">
              <div class="row form-notify">
              <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // Validate form data
    if ($email === false) {
        // If email is invalid, display an error message
        echo "Invalid email format. Please enter a valid email address.";
    } elseif (empty($email)) {
        // If email field is empty, display an error message
        echo "Please enter your email address.";
    } else {
        // Set email parameters
        $to = "Reservations@Holidayinn.Co.Tz"; // Change this to your email address
        $subject = "Customers Inquiries";
        $body = "Email: $email";

        // Send email
        if (mail($to, $subject, $body)) {
            echo "Thank you for signing up! We'll notify you at $email.";
        } else {
            echo "Sorry, there was an error processing your request. Please try again later.";
        }
    }
}
?>

                <form  method="POST" class="center-block align-center" action="">
                  <div class="input-group">
                    <input type="text" class="form-control email-add" id="email" name="email" placeholder="Enter your email address">
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-default notify-button" id="submitbutton" name="submitbutton"><span>Get Notified</span></button>
                    </span> </div>
                  <div id="successmsg"></div>
                </form>
              </div>
            </div>
            <div class="social">
              <ul class="socials-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END HOME SECTION --> 
  <!-- ABOUT SECTION -->
  <section id="about" class="section pull-center">
    <div class="main">
      <div class="page">
        <div class="container">
          <div class="logo"><img src="images/logo2.png" alt="" /></div>
          <div class="about">
            <h2>About</h2>
            <p>Indulge in refined luxury at Holiday Inn Dar Es Salaam. With 124 elegantly appointed rooms and suites, our hotel offers a tranquil escape in the heart of the city. From our rooftop helipad beer garden to our infinity pool and Om Shanti Spa, every moment is designed for pure relaxation. Experience unparalleled hospitality and sophistication with us.</p>
            <div class="icon-text">
              <div class="about-icon"><i class="fa fa-send-o"></i></div>
              <div class="about-text">
                <h3>Facilities</h3>
                <pstyle="color: black;>Discover a haven of luxury and relaxation at our facility, where a wealth of amenities cater to your every need. From tranquil spaces for unwinding to invigorating facilities for wellness, immerse yourself in a world of comfort and rejuvenation. Experience the epitome of sophistication and indulge in a memorable stay with us.</p>
            </div>
            </div>
           
            <div class="social">
              <ul class="socials-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END ABOUT SECTION --> 
  <!-- CONTACT SECTION  -->
  <section id="contact" class="section pull-center">
    <div class="main">
      <div class="page">
        <div class="container">
          <div class="logo"><img src="images/logo2.png" alt="" /></div>
          <div class="contact">
            <h2>Contact</h2>
            <h4>Do you have a question?</h4>
            <div class="contact-form">
              <p class="in-text  align-center nopadding-left nopadding-right">Just say “Hello”. We’ll get back to you in business hours.</p>
              <!-- CONTACT FORM -->
              
              <div id="response_msg" style="display: none;"></div> <!-- Response message div -->
              <?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email1", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

    // Check if all required fields are filled
    if ($name && $email && $message) {
        // Set recipient email
        $to = "Reservations@Holidayinn.Co.Tz"; 
        // Set email headers
        $headers = "From: $email" . "\r\n" .
                   "Reply-To: $email" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // Compose email message
        $email_message = "Name: $name\n";
        $email_message .= "Email: $email\n";
        $email_message .= "Phone: $phone\n";
        $email_message .= "Message:\n$message\n";

        // Send email
        if (mail($to, "Customer Inquiry", $email_message, $headers)) {
            // Set session message
            $_SESSION['success_message'] = 'Your message was successfully sent.';
        } else {
            $_SESSION['error_message'] = 'Failed to send message. Please try again later.';
        }
    } else {
        $_SESSION['error_message'] = 'Please fill out all required fields.';
    }

   ?>

<!-- HTML Form -->
<form method="post" action="" id="contact-form"> 
    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="text" name="name" placeholder="Name" id="name" required="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
            <input type="email" name="email" placeholder="Email" id="email" required="">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
            <input type="text" name="phone" required="" id="phone" placeholder="Phone Number">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 form-group">
            <input type="text" name="subject" required="" id="subject" placeholder="Subject">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
            <textarea name="message" id="message" placeholder="Message"></textarea>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
            <button class="btn btn-default"  type="submit" name="submit-form">Send Message </button>
        </div>
    </div>
</form>
<?php
 // Redirect to the page with alert message

 exit; // Ensure that no further code is executed after the redirect
}
?>



              <!-- END CONTACT FORM -->
             <!-- <div class="social">
                <ul class="socials-icons">
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- END CONTACT SECTION --> 
 

</div>
<!-- JS/Javascript/Jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.js"></script> 
<script type="text/javascript" src="js/classie.js"></script> 
<!-- Menu --> 
<script type="text/javascript" src="js/borderMenu.js"></script> 
<script type="text/javascript" src="js/jquery-ui.min.js"></script> 
<!-- jQuery Fullpage --> 
<script type="text/javascript" src="js/jquery.fullPage.js"></script> 
<!-- Counter -->
<script type="text/javascript" src="js/counter.js"></script> 
<!-- All Setting -->
<script type="text/javascript" src="js/setting.js"></script>
</body>

</html>