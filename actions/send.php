<?php
$to = 'info@omtuae.com'; // <– replace with your address here
$subject = 'Письмо от ';
$message = 'Hello! This is a simple test email message.';
$from = 'sender@emailaddress.here';
$headers = 'From:' . $from;
mail($to, $subject, $message, $headers);
echo 'Mail Sent.';
?>