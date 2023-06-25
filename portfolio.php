<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "sheezasayyed111@gmail.com";

$Subject = "mail from portfolio";
$txt ="Name = ". $name . "\r\n Email = ". $email ."\r\n Subject = ". $subject ."\r\n Message =" . $message;

$headers = "From: noreply@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("portfolio.html");
?>