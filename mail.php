<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if(isset( $_POST['thoughts']))
$thoughts = $_POST['thoughts'];

$content="From: $name \n Email: $email \n Message: $thoughts";
$recipient = "nikos.evo@hotmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $thoughts, $mailheader) or die("Error!");
echo "Email sent!";
?>