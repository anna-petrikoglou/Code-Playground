<?php
if(!isset($_POST['html']) or !isset($_POST['css']) or !isset($_POST['javascript'])){
    die();
}
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
      <?php echo $_POST['css']; ?>
    </style>
  </head>
  <body>
    <?php echo $_POST['html']; ?>
    <script>
      <?php echo $_POST['javascript']; ?>
    </script>
  </body>
</html>
