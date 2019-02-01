<?php
/*
Name: 			Contact Form
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	7.1.0
*/

namespace PortoContactForm;

session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

//header('Content-type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

// Step 1 - Enter your email address below.
$email = 'you@domain.com';

// If the e-mail is not working, change the debug option to 2 | $debug = 2;
//$debug = 2;

// If contact form don't has the subject input change the value of subject here
$subject = ( isset($_POST['subject']) ) ? $_POST['subject'] : 'Define subject in php/contact-form.php line 29';

$message = '';

foreach($_POST as $label => $value) {
	$label = ucwords($label);

	// Use the commented code below to change label texts. On this example will change "Email" to "Email Address"

	// if( $label == 'Email' ) {               
	// 	$label = 'Email Address';              
	// }

	// Checkboxes
	if( is_array($value) ) {
		// Store new value
		$value = implode(', ', $value);
	}

	$message .= $label.": " . htmlspecialchars($value, ENT_QUOTES) . "<br>\n";
}

$mail = new PHPMailer(true);

$response_rc = $_POST['g-recaptcha-response'];
$secret_key = "6Le5R44UAAAAAFQDMpF_VReOdPYRrYUnoouzOIiH";

$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret_key."&response=".$response_rc."&remoteip=".$_SERVER['REMOTE_ADDR'], false);
$captcha_success = json_decode($verify);

if($captcha_success->success == false) {
	$error = true;

	$arrResult = array ('response'=>'error');
} else {
	try {
	

		$mail->SMTPDebug = $debug;                                 // Debug Mode
	
		// Step 2 (Optional) - If you don't receive the email, try to configure the parameters below:
	
		//$mail->IsSMTP();                                         // Set mailer to use SMTP
		//$mail->Host = 'mail.yourserver.com';				       // Specify main and backup server
		//$mail->SMTPAuth = true;                                  // Enable SMTP authentication
		//$mail->Username = 'user@example.com';                    // SMTP username
		//$mail->Password = 'secret';                              // SMTP password
		//$mail->SMTPSecure = 'tls';                               // Enable encryption, 'ssl' also accepted
		//$mail->Port = 587;   								       // TCP port to connect to
	
		$mail->isSMTP();
		$mail->Host = 'localhost';
		$mail->SMTPAuth = false;
		$mail->Port = 1025;
	
		$mail->AddAddress($email);	 						       // Add another recipient
	
		//$mail->AddAddress('person2@domain.com', 'Person 2');     // Add a secondary recipient
		//$mail->AddCC('person3@domain.com', 'Person 3');          // Add a "Cc" address. 
		//$mail->AddBCC('person4@domain.com', 'Person 4');         // Add a "Bcc" address. 
	
		// From - Name
		$fromName = ( isset($_POST['name']) ) ? $_POST['name'] : 'Website User';
		$mail->SetFrom($email, $fromName);
	
		// Repply To
		if( isset($_POST['email']) ) {
			$mail->AddReplyTo($_POST['email'], $fromName);
		}
	
		$mail->IsHTML(true);                                       // Set email format to HTML
	
		$mail->CharSet = 'UTF-8';
	
		$mail->Subject = $subject;
		$mail->Body    = $message;
		
		$mail->Send();
		$arrResult = array ('response'=>'success');
	
	} catch (Exception $e) {
		$arrResult = array ('response'=>'error','errorMessage'=>$e->errorMessage());
	} 
}

if ($debug == 0) {
	echo json_encode($arrResult);
}