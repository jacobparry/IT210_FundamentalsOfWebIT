<?php
session_start();
include "settings.php";

require_once "/usr/share/php/Mail.php";

$from = $_SESSION["Email"];
$name = $_SESSION["Name"];
$to = '<kurtischadchristensen@gmail.com>';
$subject = $_POST["subject"] . " " . $name;
$body = $_POST["sendEmail"] . "\n" . $name;

 $headers = array(
 	'From' => $from,
    'To' => $to,
    'Reply-To' => $from,
    'Subject' => $subject
    );

 $smtp = Mail::factory('smtp', array(
 	 'host' => 'ssl://smtp.gmail.com',
 	 'port' => '465',
     'auth' => true,
     'username' => 'kurtischadchristensen@gmail.com',
     'password' => 'Sneechaleech1989'
     ));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   header("location:contact_me.php");
  }
 ?>