<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "sachins.kumar11@gmail.com";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=utf-8";

    $body = "You have received a new message from your website contact form.\n\n".
            "Here are the details:\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Subject: $subject\n".
            "Message:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Message failed to send.";
    }
} else {
    echo "Invalid request method.";
}
?>
