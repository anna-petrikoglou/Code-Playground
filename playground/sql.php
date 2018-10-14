<?php

session_start();

if(!isset($_POST['mysql'])) {
  header("Location: ../sql.php");
  exit();
}

if(isset($_POST['restore-db-button'])) {

  $new_sql = file_get_contents('./codetrip_gr_2.sql');

  if ($_SERVER['HTTP_HOST'] == 'codetrip.gr') {
    $dbServername = "localhost";
    $dbTestUsername = 'codetrip_'.$_SESSION['u_username'];
    $dbTestPassword = "feg53Hdf3a3";
    $dbTestName = 'codetrip_'.$_SESSION['u_username'];
  } else {
    $dbServername = "localhost:3308";
    $dbTestUsername = "guest";
    $dbTestPassword = "12345";
    $dbTestName = "codie";
  }

  $connectionTest = mysqli_connect($dbServername, $dbTestUsername, $dbTestPassword, $dbTestName);

  mysqli_multi_query($connectionTest, $new_sql);
}

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

    if ($_SERVER['HTTP_HOST'] == 'codetrip.gr') {
      $dbServername = "localhost";
      $dbTestUsername = 'codetrip_'.$_SESSION['u_username'];
      $dbTestPassword = "feg53Hdf3a3";
      $dbTestName = 'codetrip_'.$_SESSION['u_username'];
    } else {
      $dbServername = "localhost:3308";
      $dbTestUsername = "guest";
      $dbTestPassword = "12345";
      $dbTestName = "codie";
    }

    $connectionTest = mysqli_connect($dbServername, $dbTestUsername, $dbTestPassword, $dbTestName);

    $sql = $_POST['mysql'];

    if (!empty($sql)) {

    $result = mysqli_query($connectionTest, $sql);

     if (($result !== TRUE) && ($result !== FALSE)) {
      $rowsChanged = "";
      $resultCheck = mysqli_num_rows($result);
      // output data of each row ... help source: http://razorsql.com/articles/mysql_column_names_values.html
      $i = 0;
      echo '<table class="table table-striped"><thead><tr>';
      while($i < mysqli_num_fields($result)) {
        $tag = mysqli_fetch_field($result);
        echo '<th>' . $tag->name . '</th>';
        $i = $i + 1;
      }
      echo '</tr></thead><tbody>';

      $i = 0;
      while($row = mysqli_fetch_row($result)) {
        echo '<tr>';
        $count = count($row);
        $z = 0;
        while($z < $count) {
          $entry = current($row);
          echo '<td>' . $entry . '</td>';
          next($row);
          $z = $z + 1;
        }
        echo '</tr>';
        $i = $i + 1;
      }
      echo '</tbody></table>';
      // free the memory associated with the result
      mysqli_free_result($result);
    } elseif ($result == TRUE) {
      $rowsChanged = "Affected rows: " . mysqli_affected_rows($connectionTest);
      echo $rowsChanged;

    } elseif ($result == FALSE) {
      echo '<p>There is an error in your code!</p>';
      echo mysqli_error($connectionTest);
    }
  }
  ?>
  </body>
</html>
