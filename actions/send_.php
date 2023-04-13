<?php

if (!empty($_POST['website']))
  die();

$name = $_POST['name'];
$email_from = $_POST['email'];
$message = $_POST['message'];
$success_message = '<div class="d-flex justify-content-center align-items-center text-center" style="width:100vw;height:100vh">
<h3 style="width:400px;"><span class="font-weight-bold text-success">Thank you for contacting us.</span><br><br><span class="font-weight-light">We will contact you shortly.<br>You will now be redirected back to <a href="https://omtuae.com">omtuae.com.</a></span></h3>
</div>';

$mail = array(
  'to' => "info@omtuae.com",
  'subject' => "Message from omtuae.com",
  'message' => "Name: " . $name . "\n\n" . "Email: " . $email_from . "\n\n" . "Message: " . "\r\n" . $message,
  'headers' => "MIME-Version: 1.0\r\n" . "Content-type: text/plain; charset=utf-8\r\n" . "From: <omtuae.com>\r\n"
);

mail($mail['to'], $mail['subject'], $mail['message'], iconv('utf-8', 'windows-1251', $mail['headers']));

echo iconv('utf-8', 'windows-1251', $success_message);

?>

<head>
  <meta http-equiv="refresh" content="7;URL=https://omtuae.com">
  <link rel="stylesheet" href="../assets/css/main.min.css">
</head>

<?php
die();
?>