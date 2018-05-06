<?php

session_start();

if (isset($_POST['submit'])) {
  include 'database.php';

  $username = mysqli_real_escape_string($connection, $_POST['identification']);
  $password = mysqli_real_escape_string($connection, $_POST['countersign']);

  //Error handlers
  //Check if inputs are empty
  if (empty($username) || empty($password)) {
    header("Location: ../login.php?login=empty");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE user_username = '$username'"; //OR user_email = '$username'
    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
      header("Location: ../login.php?login=error1");
      exit();
    } else {
      if ($row = mysqli_fetch_assoc($result)) {
        //echo $row['user_username'];
        //De-hashing the password
        $hashedPwdCheck = password_verify($password, $row['user_password']);
        if ($hashedPwdCheck == false) {
          header("Location: ../login.php?login=error2");
          exit();
        } elseif ($hashedPwdCheck == true) {
          //Log in the user here
          $_SESSION['u_id'] = $row['user_id'];
          $_SESSION['u_first_name'] = $row['user_first_name'];
          $_SESSION['u_last_name'] = $row['user_last_name'];
          $_SESSION['u_email'] = $row['user_email'];
          $_SESSION['u_username'] = $row['user_username'];
          header("Location: ../index.php?login=success");
          exit();
        }
      }
    }
  }
} else {
  header("Location: ../login.php?login=error3");
  exit();
}
