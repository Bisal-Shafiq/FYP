<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['useremail'];
$message= $_POST['message'];
$to = "ayesha1200000@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if(mail($to,$subject,$txt,$headers))
{
die("Mail sent");
}
else
{
die("Mail not sent");
}
//redirect
header("Location:CuraPets.html");
?>