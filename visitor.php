<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $host_name = $_POST['host_name'];
  $phone = $_POST['phone'];
  $purpose_of_visit = $_POST['purpose_of_visit'];

  // Construct the email message
  $to = 'beyondjustwork@gmail.com';
  $subject = 'New Visitor Form Submission';
  $message = "Name: $name\nEmail: $email\nHost Name: $host_name\nPhone: $phone\nPurpose of Visit: $purpose_of_visit";
  $headers = "From: $email\r\n";
  $headers .= "Cc: admin@beyondjustwork.com, deepanshur213@gmail.com\r\n";

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    // Redirect to index.html with success message
    echo "<script>alert('Thank you for submitting the form!')</script>";
    echo "<script>window.location.href = 'index.html';</script>";
    exit;
  } else {
    // Redirect to index.html with error message
    echo "<script>alert('There was an error submitting the form. Please try again later.')</script>";
    echo "<script>window.location.href = 'index.html';</script>";
    exit;
  }
} else {
  // Redirect to index.html if accessed directly
  header('Location: index.html');
  exit;
}
?>
