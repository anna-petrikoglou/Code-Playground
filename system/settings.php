<?php

  //date_default_timezone_set("Europe/Athens");

  //error_reporting(E_ERROR | E_WARNING | E_PARSE);
  error_reporting(E_ALL & ~E_NOTICE);

  session_start();

  if (isset($_SESSION['u_id'])) {
    // Set session lifetime period (in seconds)
    $session_lifetime = 3600;

    // Check to see if $_SESSION["time"] is set
    if (isset($_SESSION["time"])) {

      // Calculate the session's lifetime
      $duration = time() - $_SESSION["time"];

      if ($duration > $session_lifetime) {
        session_unset();
        session_destroy();
        // Page redirection
        header("Location: ../login.php");
      }

    } else {

      // Keep session alive
      $_SESSION["time"] = time();

    }
  }

  register_shutdown_function(function() {
    unset($_SESSION['submission']);
  });

?>
