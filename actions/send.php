<?php
require 'PHPMailer/class.phpmailer.php';

if (isset($_POST['send'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $msg = $_POST['message'];
   $subject = 'Message from omtuae.com';

   $mail = new PHPMailer(true);

   $mail->IsSMTP();
   $mail->SMTPAuth = false;
   $mail->Port = 25;
   $mail->Host = "localhost";
   $mail->Username = "info@omtuae.com";
   $mail->Password = "UiYYiiPae21%";

   $mail->IsSendmail();

   $mail->From = "omtuae.com";
   $mail->FromName = $name;

   $mail->AddAddress($email);
   $mail->Subject = $subject;
   $mail->WordWrap = 80;

   $mail->MsgHTML($msg);
   $mail->IsHTML(true);

   if (!$mail->Send()) {
      echo "Mail Not Sent";
   } else {
      echo '<script language="javascript">';
      echo 'alert("Thank You Contacting Us We Will Response You As Early Possible")';
      echo '</script>';

   }

}