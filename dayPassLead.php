<?php

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get form data
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $location = $_POST['location'];
  $team_size = $_POST['team_size'];

  // Validate form data
  $errors = [];

  if (empty($firstName)) {
    $errors[] = 'First name is required.';
  }

  if (empty($lastName)) {
    $errors[] = 'Last name is required.';
  }

  if (empty($email)) {
    $errors[] = 'Email is required.';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format.';
  }

  if (empty($phone)) {
    $errors[] = 'Phone number is required.';
  }

  if (empty($location)) {
    $errors[] = 'Location is required.';
  }

  if (empty($team_size)) {
    $errors[] = 'Number of seats is required.';
  }

  // If there are errors, display them
  if (!empty($errors)) {
    echo '<div class="alert alert-danger"><ul>';
    foreach ($errors as $error) {
      echo '<li>' . $error . '</li>';
    }
    echo '</ul></div>';
  } else {

    // If there are no errors, send email or save data to database
    // You can replace this with your own code to process the form data

    // Send email example using PHP mail function
    $to = 'deepanshur213@gmail.com';
    $subject = 'New Workspace Inquiry';
    $message = "First Name: $firstName\n"
      . "Last Name: $lastName\n"
      . "Email: $email\n"
      . "Phone: $phone\n"
      . "Location: $location\n"
      . "Number of Seats: $team_size\n";
    $headers = 'From: deepanshur213@gmail.com' . "\r\n" .
      'Reply-To: deepanshur213@gmail.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    // Redirect to thank you page
    header('Location: thankyou.html');
    exit;
  }
}

?>
