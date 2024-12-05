<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    
    $to = "support@techbay.com";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    $email_subject = "Contact Form Submission: $subject";

    
    $email_body = "You have received a new message from the user $name.\n\n".
                  "Subject: $subject\n".
                  "Email: $email\n\n".
                  "Message:\n$message";

    
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Thank you for contacting us, we will get back to you shortly.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
