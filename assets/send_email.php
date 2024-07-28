<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email address
    $to = 'mhaque.tuc@gmail.com';
    $headers = "From: $email";

    // Construct the email
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from the user $name.\n\n".
                  "Here is the message:\n$message";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Failed to send message.';
    }
} else {
    echo 'Invalid request method.';
}
?>
