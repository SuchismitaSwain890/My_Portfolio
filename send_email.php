<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set up the recipient email address
    $to = "swainsuchismita890@gmail.com"; // Replace with your email address

    // Set up email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Compose the email message
    $email_body = "
    <html>
    <body>
        <h2>New Message from Contact Form</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong> $message</p>
    </body>
    </html>
    ";

    // Send email
   // Attempt to send email
if (mail($to, $subject, $email_body, $headers)) {
    // Email sent successfully
    echo "Your message has been sent successfully.";
} else {
    // Email sending failed
    echo "Sorry, your message could not be sent. Please try again later.";
    // Display error message
    echo error_get_last()['message'];
}

} else {
    // If the form is not submitted, redirect back to the contact page
    header("Location: contact.html");
}
?>
