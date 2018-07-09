<?php

session_start();

$_SESSION['submission'] = $_POST;

if (isset($_POST['submit'])) {
  include 'database.php';

  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($connection, $_POST['confirm-password']);

  // If checkbox is checked
  if (isset($_POST['del-account'])) {
    // Delete user data from database
    $sql = "DELETE * FROM users INNER JOIN projects WHERE users.user_id = projects.user_id AND users.user_id = '".$_SESSION['u_id']."'";
    mysqli_query($connection, $sql);
    header("Location: ../system/logout.php");
    exit();
  }
}
