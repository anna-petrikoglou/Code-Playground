<?php

  //error_reporting(E_ERROR | E_WARNING | E_PARSE);
  error_reporting(E_ALL & ~E_NOTICE);

  session_start();

  register_shutdown_function(function() {
    unset($_SESSION['submission']);
  });

?>
