<?php

if(!isset($_POST['html'])){
  header("Location: ../html.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <?php echo $_POST['html']; ?>
  </body>
</html>
