<?php
$sito = $_POST;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if (!empty($sito)):

if (!empty($nome) || !empty($email) || !empty($text)){
    header('Location: index.php?error=Campi+vuoti!!');
    exit;
}else{
    $nome = $sito['nome'];
    $email = $sito['email'];
    $testo = $sito['text'];
}

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'd263f3fc984d16';                     //SMTP username
    $mail->Password   = '4c371e7235ff87';                               //SMTP password
//    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $nome);
    $mail->addAddress('niki@motoimco.it', 'Joe User');     //Add a recipient
    $mail->addReplyTo($email, $nome);


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $testo;
    $mail->AltBody = $testo;

    $mail->send();
    echo 'Message has been sent';
    header('Location: index.php');
    exit;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
endif;
