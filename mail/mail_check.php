<?php
	
date_default_timezone_set('Etc/UTC');
require_once 'PHPMailerAutoload.php';	
						
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "mail2cloudin@gmail.com";
$mail->Password = "9003683111"; 
$mail->SetFrom("mail2cloudin@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("thiruvarank@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "<br/><br/><h1>Message has been sent<h1><br/><br/>";
 }						
?>