<?php

session_start();

//if (isset($_POST['save'])) {

  include 'database.php';
  $html = mysqli_real_escape_string($connection, $_POST['html']);
  $css = mysqli_real_escape_string($connection, $_POST['css']);
  $javascript = mysqli_real_escape_string($connection, $_POST['javascript']);
  $php = mysqli_real_escape_string($connection, $_POST['php']);
  $mysql = mysqli_real_escape_string($connection, $_POST['mysql']);
  $project_name = mysqli_real_escape_string($connection, $_POST['project-name']);
  $project_id = mysqli_real_escape_string($connection, $_POST['project-id']);
  $u_id = $_SESSION['u_id'];


  $sql = "SELECT * FROM projects WHERE project_id = '$project_id'";
  $result = mysqli_query($connection, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck == 0) {

    if (($html) || ($css) || ($javascript)) {
      $type = 'web';
    } elseif ($php) {
      $type = 'php';
    } elseif ($mysql) {
      $type = 'sql';
    }

    $sql = "INSERT INTO projects (user_id, project_html, project_css, project_javascript, project_php, project_sql, project_name, project_date, project_type) VALUES ('$u_id', '$html', '$css', '$javascript', '$php', '$mysql', '$project_name', NOW(), '$type');";
    $result = mysqli_query($connection, $sql);
    //var_dump(mysqli_error($connection));
    http_response_code(200);
    $new_project_id = mysqli_insert_id($connection);
    echo $new_project_id;
    exit();
  } elseif ($resultCheck == 1) {
    //echo $message = "Project will be replaced.";
    $sql = "UPDATE projects SET project_html = '$html', project_css = '$css', project_javascript = '$javascript', project_php = '$php', project_sql = '$mysql', project_name = '$project_name', project_date = NOW() WHERE project_id = '$project_id';";
    $result = mysqli_query($connection, $sql);
    http_response_code(200);
    echo $project_id;
    exit();
  } else {
    http_response_code(400);
    exit();
  }

/*} else {
  header("Location: ../web.php?save=failed3");
  exit();
}
*/
