<?php

session_start();

if(!isset($_POST['del-account'])) {
  header("Location: ../account.php");
  exit();
}

$_SESSION['submission'] = $_POST;

if (isset($_POST['submit'])) {
  include 'database.php';

  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($connection, $_POST['confirm-password']);

  // If checkbox is checked
  if (isset($_POST['del-account'])) {
    // Delete user data from database
    $sql_1 = "DELETE FROM users WHERE user_id = '".$_SESSION['u_id']."'";
    $sql_2 = "DELETE FROM projects WHERE user_id = '".$_SESSION['u_id']."'";
    mysqli_query($connection, $sql_1);
    mysqli_query($connection, $sql_2);
    header("Location: ../system/logout.php");
    exit();
  }
}
