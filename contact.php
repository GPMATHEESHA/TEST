<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $to = "info@ceylongoldenbee.com";
    $subject = "New Inquiry from $name";
    $body = "Name: $name
Email: $email

Message:
$message";
    $headers = "From: $email";
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
}
?>
