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
      <?php
        echo eval($source.";");
        /*$ret = shell_exec("php -r '$tmp = tmpfile(); tmpf = file_put_contents($tmp, $source); $ret = include($tmp);' -d 'disable_functions = exec,passthru,shell_exec,system,proc_open,popen,curl_exec,curl_multi_exec,parse_ini_file,show_source'");
        echo $ret;*/
      ?>
    </code>
  </body>
</html>
