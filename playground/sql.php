<?php

if(!isset($_POST['sql'])) {
  header("Location: ../sql.php");
  exit();
}

$command = $_POST['mysql'];

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php

    $dbServername = "localhost:3308";
    $dbTestUsername = "guest";
    $dbTestPassword = "12345";
    $dbTestName = "codie";

    $connectionTest = mysqli_connect($dbServername, $dbTestUsername, $dbTestPassword, $dbTestName);

    if(strtolower($command) == 'select') {

    }

    ?>
  </body>
</html>
