<?php
// Get Data	
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$phone = strip_tags($_POST['phone']);
$url = strip_tags($_POST['url']);
$message = strip_tags($_POST['message']);

include 'config.php';

// Send Message
mail( $simpliEmail, "Contact Form Submission",
"Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $url\nMessage: $message\n", 
"From: $simpliName <$simpliEmail>");
?>