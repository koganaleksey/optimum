<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$name = $_GET['name'] ?? $_POST['name'];
$email = $_GET['email'] ?? $_POST['email'];
$message = $_GET['message'] ?? $_POST['message'];

// Формирование самого письма
$title = "Заголовок письма";
$body = "
<h2>Новое письмо</h2>
<b>Имя:</b> $name<br>
<b>Почта:</b> $email<br><br>
<b>Сообщение:</b><br>$message
";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;

    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru';
    $mail->Username   = 'info@omtuae.com';
    $mail->Password   = 'DAfiKYAMQJvSL4PJsyXw';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    // Username и этот адресс должен совпадать
    $mail->setFrom('info@omtuae.com', 'Message from website');

    // Получатель письма
    $mail->addAddress('info@omtuae.com');
    // $mail->addAddress('youremail@gmail.com'); // Ещё один, если нужен

    // Отправка сообщения
    $mail->isHTML(true);

    $mail->Subject = $title;
    $mail->Body = $body;

    $mail->send();

    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
