<?php


$to_email = "email";
$subject = "Blood Donation";
$body = "Thank you!!! for helping us.... Donate Blood Save Life!!!     “Never feel yourself weak, you have the ability to save a life. Just donate blood.”";
$headers = "From: supriyaraj2029@gmail.com";

if (mail($to_email, $subject, $body)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
