<?php

session_start();

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
  //extra style (e.g. red parts)
  if ( strlen($first_name) < 3) {
    unset($_SESSION['submission']['first-name']);
    header("Location: ../signup.php?signup=inadequate_input_length");
    exit('Inadequate input length!');
  } elseif (strlen($last_name) < 3) {
    unset($_SESSION['submission']['last-name']);
    header("Location: ../signup.php?signup=inadequate_input_length");
    exit('Inadequate input length!');
  } elseif (strlen($username) < 3) {
    unset($_SESSION['submission']['username']);
    header("Location: ../signup.php?signup=inadequate_input_length");
    exit('Inadequate input length!');
  } elseif (strlen($password) < 4) {
    header("Location: ../signup.php?signup=inadequate_input_length");
    exit('Inadequate input length!');
  } elseif (!preg_match("/^[a-zA-Z]*$/", $first_name)) {
    //Check if input characters are valid
    unset($_SESSION['submission']['first-name']);
    header("Location: ../signup.php?signup=invalid_first_name");
    exit('Invalid first name!');
  } elseif(!preg_match("/^[a-zA-Z]*$/", $last_name)) {
    unset($_SESSION['submission']['last-name']);
    header("Location: ../signup.php?signup=invalid_last_name");
    exit('Invalid last name!');
  }else {
    //Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      unset($_SESSION['submission']['email']);
      header("Location: ../signup.php?signup=invalid_email_address");
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
          $sql = "INSERT INTO users (user_first_name, user_last_name, user_email, user_username, user_password, user_date) VALUES ('$first_name', '$last_name', '$email', '$username', '$hashedPassword', NOW());";
          mysqli_query($connection, $sql); //or $result = mysqli_query($connection, $sql);
          header("Location: ../login.php?signup=success");
          exit('Successfully signed up!');
        }
      }
    }
  }
}
