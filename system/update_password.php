<?php

session_start();

$_SESSION['submission'] = $_POST;

if (isset($_POST['submit'])) {
  include 'database.php';

  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($connection, $_POST['confirm-password']);

  // Error handlers
  if (strlen($password) < 4) {
    header("Location: ../account.php?update=inadequate_password_length");
    exit();
  } else {
    // Check passwords' matching
    if ($confirm_password !== $password) {
      header("Location: ../account.php?update=not_matching_passwords");
      exit();
    } else {
      // Hashing the Password
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      // Change user password into database
      $sql = "UPDATE users SET user_password = '$hashedPassword' WHERE user_id = '".$_SESSION['u_id']."'";
      mysqli_query($connection, $sql);
      header("Location: ../account.php?update=password_success");
      exit();
    }
  }
}
