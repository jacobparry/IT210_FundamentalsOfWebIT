<?php

require 'PHPMailer/PHPMailerAutoload.php';

$firstname = $_POST['fname'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer;

#$mail->SMTPDebug = 3;     // Enable verbose debug output
#$mail->SMTPDebug = 2;

$mail->isSMTP();              // Set mailer to use SMTP
$mail->SMTPAuth = true;          // Enable SMTP authentication


$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->Username = 'jacobparryit210@gmail.com';    // SMTP username
$mail->Password = '123456';              // SMTP password
$mail->SMTPSecure = 'tls';  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;           // TCP port to connect to

$mail->setFrom($email, $firstname);   //This is who the email is going to be from
$mail->addAddress('jacobparryit210@gmail.com', 'Jacob Parry');// Add a recipient who the email is sent.
$mail->addReplyTo($email, $firstname);


$mail->Subject = 'IT210 Contact Me Email';
$mail->Body    = $message;
$mail->AltBody = $message;

#var_dump($mail->send());

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    header("refresh:3;url=contact.php");
} else {
    echo 'Message has been sent';

    header("refresh:3;url=contact.php");
}

?>