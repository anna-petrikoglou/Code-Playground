<?php

session_start();

register_shutdown_function(function() {
  unset($_SESSION['submission']);
});

$_SESSION['submission'] = $_POST;

if (isset($_POST['submit'])) {
  include 'database.php';

  $first_name = mysqli_real_escape_string($connection, $_POST['first-name']);
  $last_name = mysqli_real_escape_string($connection, $_POST['last-name']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($connection, $_POST['confirm-password']);

  //Error handlers
  //Check for empty fields
  if (empty($first_name) || empty($last_name) || empty($email) || empty($username) || empty($password) || strlen($first_name) < 3 || strlen($last_name) < 3 || strlen($username) < 3 || strlen($password) < 4) {
    //extra style (e.g. red parts)
    header("Location: ../signup.php?signup=indequate_input_length");
    exit('Inadequate input length!');
  } else {
    //Check if input characters are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name)) {
      header("Location: ../signup.php?signup=invalid_first_or_last_name");
      exit('Invalid user data!');
    } else {
      //Check if email is valid
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?signup=invalid_email");
        exit('Invalid e-mail address!');
      } else {
        $sql = "SELECT * FROM users WHERE user_username = '$username' OR user_email = '$email'";
        $result = mysqli_query($connection, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header("Location: ../signup.php?signup=already_used_username_or_email");
          exit('Username or e-mail already used!');
        } else {
          if ($confirm_password !== $password) {
            header("Location: ../signup.php?signup=not_matching_passwords");
            exit('Two passwords do not match!');
          } else {
            //Hashing the Password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            //Insert the user into the database
            $sql = "INSERT INTO users (user_first_name, user_last_name, user_email, user_username, user_password) VALUES ('$first_name', '$last_name', '$email', '$username', '$hashedPassword');";
            mysqli_query($connection, $sql); //or $result = mysqli_query($connection, $sql);

            header("Location: ../index.php?signup=success");
            exit('Successfully signed up!');
          }
        }
      }
    }
  }

} else {
  header("Location: ../signup.php");
  exit('Error');
}
