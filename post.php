<?php
  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted name and email
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Display a success message
    echo "Thank you for submitting your information, $name. Your email is $email.";
  }
?>

<!-- HTML form -->
<form method="post">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name">
  
  <label for="email">Email:</label>
  <input type="email" name="email" id="email">
  
  <button type="submit">Submit</button>
</form>
