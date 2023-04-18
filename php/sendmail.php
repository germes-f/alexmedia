<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require $_SERVER["DOCUMENT_ROOT"] . '/vendor/autoload.php';

if ($_POST["phone"] === '' || $_POST["comment"] === '') {
    exit('Заполните все поля');
}

$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.mail.ru';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'slavmart37@mail.ru';                     //SMTP username
    $mail->Password = 'hzdbW9rBWAeA7cuwy1g8';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('slavmart37@mail.ru', 'Mailer');
    $mail->addAddress('slavmart37@mail.ru', 'Joe User');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Письмо с сайта';
    $mail->Body = 'Телефон: <b>' . $_POST["phone"] . '</b><br>Комментарий: <b>' . $_POST["comment"] . '</b>';

    $mail->send();
    echo 'Сообщение отправлено';
} catch (Exception $e) {
    echo "Не могу отправить. Ошибка: {$mail->ErrorInfo}";
}
