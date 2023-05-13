<?php
if(isset($_POST['submit'])) {
    //Get form data
   $name = $_POST["name"];
   $email = $_POST["email"];
   $company = $_POST["company"];
   $phone = $_POST["phone"];
   $product = $_POST["product"];
   $website = $_POST["website"];
   $gstin = $_POST["gstin"];
   $location = $_POST["location"];
    
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
            <p><b>Company:</b> $company</p>
            <p><b>Product:</b> $product</p>
            <p><b>Website:</b> $website</p>
            <p><b>GSTIN:</b> $gstin</p>
            <p><b>Location:</b> $location</p>";
            
    
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
