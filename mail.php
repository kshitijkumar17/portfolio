<?php

$name = $_POST['name'];
$email= $_POST['email'];
$subject_mail = $_POST['subject'];
$message= $_POST['message'];

$to = "kshitij1999@gmail.com";
$subject = "New Message";
$txt = "You have a new message:\r\n\r\nName: ". $name . "\r\nEmail: " . $email . "\r\nSubject: " . $subject_mail . "\r\nMessage:" . $message;

$headers = "From: noreply@kshitijkumar.tech";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:index.html");

?>