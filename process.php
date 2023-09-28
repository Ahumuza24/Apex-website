<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Set the recipient's email address
    $to = "ahumuzacedric@gmail.com";

    // Create email headers
    $headers = "From: $email" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    // Build the email content
    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Subject: $subject\n\n";
    $mailBody .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you for your message! We'll get back to you soon.";
    } else {

        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
