<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $email = $_POST['email'];

  // Email configuration
  $to = 'henryandshape@gmail.com'; // Replace with your email address
  $subject = 'New form submission';
  $body = "Name: $email\;
  $headers = "From: $email";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo 'Email sent successfully!';
  } else {
    echo 'An error occurred while sending the email.';
  }
}
?>
