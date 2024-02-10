
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Email parameters
        $to = "jgomezz@gmail.com";  // Replace with your email address
        $subject = "New Contact Form Submission";

        // Compose the email message
        $email_message = "Name: $name\n";
        $email_message .= "Email: $email\n\n";
        $email_message .= "Message:\n$message";

        echo $email_message ;

        // Additional headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Send email
        /*
        if (mail($to, $subject, $email_message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email. Please try again.";
        }
        */
    } else {
        // If not a POST request, redirect to the form page
        header("Location: index.html");
        exit();
    }
?> 