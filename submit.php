<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    // Set recipient email address
    $to = "shaina.rebello18@gmail.com";

    // Set email subject
    $subject = "New message from $name";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Message: $message\n";

    // Set headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>