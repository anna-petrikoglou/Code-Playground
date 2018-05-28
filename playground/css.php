<?php

if(!isset($_POST['html']) or !isset($_POST['css'])){
  header("Location: ../css.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      <?php echo $_POST['css']; ?>
    </style>
  </head>
  <body>
    <?php echo $_POST['html']; ?>
  </body>
</html>
