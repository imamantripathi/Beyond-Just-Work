<?php
if(isset($_POST['submit'])) {
    //Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //Recipient email
    $toEmail = 'beyondjustwork@gmail.com';
    
    //Email subject
    $subject = 'New message from website Registration form';
    
    //Email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Cc: admin@beyondjustwork.com, deepanshur213@gmail.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html\r\n";
    
    //Email body
    $body = "<h2>Registration Request</h2>
            <p><b>Name:</b> $name</p>
            <p><b>Email:</b> $email</p>
            <p><b>Phone:</b> $phone</p>
            <p><b>Message:</b></p>
            <p>$message</p>";
    
    //Send email
    if(mail($toEmail, $subject, $body, $headers)) {
        //Email sent successfully
        echo "<script>alert('Thank you for filling this form. We will get back to you soon.');</script>";
        echo "<script>window.location.href='index.html';</script>";
    } else {
        //Email sending failed
        echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
    }
}
?>
