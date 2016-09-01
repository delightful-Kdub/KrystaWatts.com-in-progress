
<!DOCTYPE html>
<html>
	<head>
		<!-- Document Settings -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons.ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons.ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons.ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons.ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons.ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons.ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons.ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons.ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons.ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicons.ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons.ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons.ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons.ico/favicon-16x16.png">
<link rel="manifest" href="assets/images/favicons.ico/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/images/favicons.ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
		<!-- Page Title -->
		<title>Krysta Watts&mdash;Contact</title>
		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
		<!-- Styles -->
		<link rel="stylesheet" href="/assets/css/bootstrap.css">
		<link rel="stylesheet" href="/assets/css/font-awesome.css">
		<link rel="stylesheet" href="/assets/css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="container">
				<header>
					<!--<div class="logo">
						<a href="index.html">
						<img src="http://placehold.it/95x20" alt="">
						</a>
					</div>-->
					<div class="mobile-menu">
						<span class="line"></span>
					</div>
					<nav>
						<ul>
							<li><a href="index.html">About</a></li>
							<li><a href="myportfolio.html">Portfolio</a>
							<!--<li><a href="journal.html">Journal</a></li>-->
							<li class="active"><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</header>
				<div class="page-title">
				<!--	<div class="row">
						<div class="col-md-9 col-xs-12">
							<h1><b>Get in touch with me</b><br>I'm interested in hearing about new opportunities, projects, and partnerships.</h1>
						</div>
					</div> -->
				</div>
				<div class="contact">
					<div class="row">
						<div class="col-md-9">




<?php
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "Krysta@krystawatts.com";
    $email_subject = "A new email from site";


    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if( !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['website']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name'];
    $email_from = $_POST['email'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(strlen($message) < 2) {
    $error_message .= 'The message you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Website: ".clean_string($website)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- include your own success html here -->

Thank you. Your message has been sent.



<?php

header('Refresh: 3;url=../contact.html');
}
?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
