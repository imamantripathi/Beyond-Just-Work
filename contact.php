<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the form fields
    $name = $_POST["name"];
    $email = $_POST["email"];
    $company = $_POST["company"];
    $phone = $_POST["phone"];
    $location = $_POST["locations"];
    $team_size = $_POST["team_size"];

    // Set the recipient email address
    $to = "deepanshur213@gmail.com";

    // Set the email subject
    $subject = "New form submission from your website";

    // Set the email message
    $message = "Name: $name\n\n";
    $message .= "Email: $email\n\n";
    $message .= "Company: $company\n\n";
    $message .= "Phone Number: $phone\n\n";
    $message .= "Location: $location\n\n";
    $message .= "Team Size: $team_size\n\n";

    // Set the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "CC: imamantripathi@gmail.com\r\n"; // Optional: add CC recipient
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // If email sent successfully
        echo "<p>Your message has been sent successfully. We will contact you shortly.</p>";
    } else {
        // If email sending failed
        echo "<p>Sorry, we encountered an error while sending your message. Please try again later.</p>";
    }

}
?>