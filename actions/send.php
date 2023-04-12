<?php
require 'PHPMailerAutoload.php';

if (!empty($_POST['website'])) die();

$name = $_POST['name'];
$email_from = $_POST['email'];
$message = $_POST['message'];

$email='info@omtuae.com';//change email to receipents email
  
$mail = new PHPMailer();
$mail->SMTPDebug = 0; 
$mail->SMTPAuth = false;//SMTP authentication should be false
$mail->SMTPSecure = 'none';// Security type should be none 
 
$mail->Host = 'localhost';// SMTP host name should be localhost
$mail->Port = 25;  
 
$mail->setFrom('omtuae.com', 'Message from website');     //Set who the message is to be sent from

$mail->addAddress($email);  // Add a recipient
$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = "Message from omtuae.com";
 
$mail->Body    = "Name: " . $name . "\n\n" . "Email: " . $email_from . "\n\n" . "Message: " . "\r\n" . $message;
if(!$mail->send()) {
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   echo 'Email Has not Sent';
   exit;
}
 else{
  echo "email sent";
}
?>