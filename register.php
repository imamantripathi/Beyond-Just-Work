<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $phone = $_POST['phone'];
    $product = $_POST['product'];
    $website = $_POST['website'];

    // Construct email message
    $to = 'deepanshur213@gmail.com';
    $subject = 'New form submission from Beyond Just Work';
    $message = "Name: $name\nEmail: $email\nCompany: $company\nPhone: $phone\nProduct: $product\nWebsite: $website";

    // Send email
    if (mail($to, $subject, $message)) {
        echo 'Thank you for your submission!';
    } else {
        echo 'An error occurred. Please try again later.';
    }
}

?>
