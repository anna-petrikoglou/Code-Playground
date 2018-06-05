<?php

if(!isset($_POST['php'])) {
  header("Location: ../php.php");
  exit();
}

$source = $_POST['php'];

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <code>
      <?php echo eval($source.";"); ?>
    </code>
  </body>
</html>
