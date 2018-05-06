<?php

if (isset($_POST['submit'])) {

  include_once 'database.php';
  $first_name = mysqli_real_escape_string($connection, $_POST['first-name']);
  $last_name = mysqli_real_escape_string($connection, $_POST['last-name']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);

  //Error handlers
  //Check for empty fields
  if (empty($first_name) || empty($last_name) || empty($email) || empty($username) || empty($password)) {
    header("Location: ../signup.php?signup=empty"); // extra style e.g. red parts
    exit();
  } else {
    //Check if input characters are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name)) {
      header("Location: ../signup.php?signup=invalid");
      exit();
    } else {
      //Check if email is valid
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?signup=email");
        exit();
      } else {
        $sql = "SELECT * FROM users WHERE user_username = '$username'";
        $result = mysqli_query($connection, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header("Location: ../signup.php?signup=usertaken");
          exit();
        } else {
          //Hashing the Password
          $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
          //Insert the user into the database
          $sql = "INSERT INTO users (user_first_name, user_last_name, user_email, user_username, user_password) VALUES ('$first_name', '$last_name', '$email', '$username', '$hashedPassword');";
          mysqli_query($connection, $sql); //or $result = mysqli_query($connection, $sql);
          header("Location: ../signup.php?signup=success");
          exit();
        }
      }
    }
  }

} else {
  header("Location: ../signup.php");
  exit();
}
