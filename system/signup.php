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

  // Error handlers
  if ( strlen($first_name) < 3) {
    unset($_SESSION['submission']['first-name']);
    header("Location: ../signup.php?signup=inadequate_name_length");
    exit();
  } elseif (!preg_match("/^[a-zA-Z]*$/", $first_name)) {
    // Check if input characters are valid
    unset($_SESSION['submission']['first-name']);
    header("Location: ../signup.php?signup=invalid_first_name");
    exit();
  } elseif (strlen($last_name) < 3) {
    unset($_SESSION['submission']['last-name']);
    header("Location: ../signup.php?signup=inadequate_surname_length");
    exit();
  } elseif(!preg_match("/^[a-zA-Z]*$/", $last_name)) {
    unset($_SESSION['submission']['last-name']);
    header("Location: ../signup.php?signup=invalid_last_name");
    exit();
  } elseif (strlen($username) < 3) {
    unset($_SESSION['submission']['username']);
    header("Location: ../signup.php?signup=inadequate_username_length");
    exit();
  } elseif (strlen($password) < 4) {
    header("Location: ../signup.php?signup=inadequate_password_length");
    exit();
  } else {
    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      unset($_SESSION['submission']['email']);
      header("Location: ../signup.php?signup=invalid_email_address");
      exit();
    } else {
      $sql = "SELECT * FROM users WHERE user_username = '$username' OR user_email = '$email'";
      $result = mysqli_query($connection, $sql);
      $resultCheck = mysqli_num_rows($result);
      // Check if user exists
      if ($resultCheck > 0) {
        header("Location: ../signup.php?signup=already_used_username_or_email");
        exit();
      } else {
        // Check passwords' matching
        if ($confirm_password !== $password) {
          header("Location: ../signup.php?signup=not_matching_passwords");
          exit();
        } else {
          // Hashing the Password
          $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
          // Insert user into database
          $sql = "INSERT INTO users (user_first_name, user_last_name, user_email, user_username, user_password, user_date) VALUES ('$first_name', '$last_name', '$email', '$username', '$hashedPassword', NOW());";
          mysqli_query($connection, $sql);

          if ($_SERVER['HTTP_HOST'] == 'codetrip.gr') {
            require_once '../../../create-database.php';
            $res = create_database($username);

            $build_db = file_get_contents('../playground/codetrip_gr_2.sql');

            $dbServername = "localhost";
            $dbTestUsername = 'codetrip_'.$username;
            $dbTestPassword = "feg53Hdf3a3";
            $dbTestName = 'codetrip_'.$username;

            $connectionTest = mysqli_connect($dbServername, $dbTestUsername, $dbTestPassword, $dbTestName);

            mysqli_multi_query($connectionTest, $build_db);
          }

          /*
          mysqli_query($connection, "CREATE DATABASE $username");
          mysqli_query($connection, "CREATE USER '$email'@'localhost' IDENTIFIED BY '1111111';");
          mysqli_query($connection, "GRANT ALL ON $username.* TO '$email'@'localhost'");
          mysqli_query($connection, "ALTER USER '$email'@'localhost' WITH MAX_QUERIES_PER_HOUR 50");

          $build_db = file_get_contents('../playground/codetrip_gr_2.sql');

          $dbServername = "localhost:3308";
          $dbTestUsername = $email;
          $dbTestPassword = "1111111";
          $dbTestName = $username;

          $connectionTest = mysqli_connect($dbServername, $dbTestUsername, $dbTestPassword, $dbTestName);

          mysqli_multi_query($connectionTest, $build_db);
          */

          header("Location: ../login.php?signup=success");
          exit();
        }
      }
    }
  }
}
