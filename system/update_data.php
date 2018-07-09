<?php

session_start();

$_SESSION['submission'] = $_POST;

if (isset($_POST['submit'])) {
  include 'database.php';

  $first_name = mysqli_real_escape_string($connection, $_POST['first-name']);
  $last_name = mysqli_real_escape_string($connection, $_POST['last-name']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $username = mysqli_real_escape_string($connection, $_POST['username']);

  // Error handlers
  if ( strlen($first_name) < 3) {
    unset($_SESSION['submission']['first-name']);
    header("Location: ../account.php?update=inadequate_input_length");
    exit();
  } elseif (strlen($last_name) < 3) {
    unset($_SESSION['submission']['last-name']);
    header("Location: ../account.php?update=inadequate_input_length");
    exit();
  } elseif (strlen($username) < 3) {
    unset($_SESSION['submission']['username']);
    header("Location: ../account.php?update=inadequate_input_length");
    exit();
  } elseif (!preg_match("/^[a-zA-Z]*$/", $first_name)) {
    // Check if input characters are valid
    unset($_SESSION['submission']['first-name']);
    header("Location: ../account.php?update=invalid_first_name");
    exit();
  } elseif(!preg_match("/^[a-zA-Z]*$/", $last_name)) {
    unset($_SESSION['submission']['last-name']);
    header("Location: ../account.php?update=invalid_last_name");
    exit();
  } else {
    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      unset($_SESSION['submission']['email']);
      header("Location: ../account.php?update=invalid_email_address");
      exit();
    } else {
      // Update user data into database
      $sql = "UPDATE users SET user_first_name = '$first_name', user_last_name = '$last_name', user_email = '$email', user_username = '$username' WHERE user_id = '".$_SESSION['u_id']."'";
      mysqli_query($connection, $sql);
      header("Location: ../account.php?update=profile_success");
      exit();
    }
  }
}
