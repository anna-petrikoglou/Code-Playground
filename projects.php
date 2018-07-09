<?php

require 'system/database.php';
require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

if (!isset($_SESSION['u_id'])) {
  header("Location: login.php");
  exit();
}

$user_id = $_SESSION['u_id'];

if (isset($_GET['trash']) and is_numeric($_GET['trash'])) {
  $stmt = "DELETE FROM projects WHERE user_id = '$user_id' AND project_id = '".$_GET['trash']."'";
  $del = mysqli_query($connection, $stmt);
  header("Location: projects.php");
  exit();
}

?>

<main class="project-area">
  <div class="container" id="full-width-project-header">
    <div class="intro">
      <h1>Projects</h1>
      <h4><i class="fa fa-info-circle"></i></h4><h6>All of your work is listed below.<br>Review, modify or delete the projects you have created.</h6>
    </div>
  </div>
  <div class="container">
    <!--<h6><i class="fa fa-exclamation-triangle"></i> Caution! Once deleted projects cannot be retrieved.</h6>-->
  <?php

  $sql = "SELECT project_id, project_name, project_date, project_type FROM projects WHERE user_id = '$user_id' AND project_type = 'web' ORDER BY project_date DESC";
  $result = mysqli_query($connection, $sql);
  $resultCheck = mysqli_num_rows($result);

  $sql2 = "SELECT * FROM projects WHERE user_id = '$user_id' AND project_type = 'web'";
  $result2 = mysqli_query($connection, $sql2);
  $result2Check = mysqli_num_rows($result2);

  if ($resultCheck > 0) {
    // output data of each row
    echo '<div class="container project-data"><h1 class="project-type-heading"><i class="fa fa-chevron-circle-right"></i> Web<span class="project-count"># '. $result2Check.'</span></h1><table class="table"><thead><tr><th>ID</th><th>Title</th><th>Edit</th><th>Last Modified</th><th>Type</th><th>Delete</th></tr></thead><tbody>';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row["project_id"] . '</td><td><a href="http://localhost:8080/code-playground/'. $row["project_type"] . '.php?project_id='. $row["project_id"] . '">' . $row["project_name"] . '</a></td><td><a href="http://localhost:8080/code-playground/'. $row["project_type"] . '.php?project_id='. $row["project_id"] . '"><i class="fa fa-edit"></i></a></td><td>' . $row["project_date"] . '</td><td>' . $row["project_type"] . '</td><td class="basic-color"><a href="projects.php?trash='. $row["project_id"] .'"><i class="fa fa-trash"></i></a></td></tr>';
    }
    echo '</tbody></table></div>';

  } else {
      echo '<div class="container project-data"><h1 class="project-type-heading"><i class="fa fa-chevron-circle-right"></i> Web<span class="project-count"># 0</span></h1><p>You have not saved any WEB projects yet. Never too late...<br>You can start from <a href="web.php">here</a>!</p></div>';
  }

  ?>

  <?php

  $sql = "SELECT project_id, project_name, project_date, project_type FROM projects WHERE user_id = '$user_id' AND project_type = 'php' ORDER BY project_date DESC";
  $result = mysqli_query($connection, $sql);
  $resultCheck = mysqli_num_rows($result);

  $sql2 = "SELECT * FROM projects WHERE user_id = '$user_id' AND project_type = 'php'";
  $result2 = mysqli_query($connection, $sql2);
  $result2Check = mysqli_num_rows($result2);

  if ($resultCheck > 0) {
    // output data of each row
    echo '<div class="container project-data"><h1 class="project-type-heading"><i class="fa fa-chevron-circle-right"></i> PHP<span class="project-count"># '. $result2Check.'</span></h1><table class="table"><thead><tr><th>ID</th><th>Title</th><th>Edit</th><th>Last Modified</th><th>Type</th><th>Delete</th></tr></thead><tbody>';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row["project_id"] . '</td><td><a href="http://localhost:8080/code-playground/'. $row["project_type"] . '.php?project_id='. $row["project_id"] . '">' . $row["project_name"] . '</a></td><td><a href="http://localhost:8080/code-playground/'. $row["project_type"] . '.php?project_id='. $row["project_id"] . '"><i class="fa fa-edit"></i></a></td><td>' . $row["project_date"] . '</td><td>' . $row["project_type"] . '</td><td class="basic-color"><a href="projects.php?trash='. $row["project_id"] .'"><i class="fa fa-trash"></i></a></td></tr>';
    }
    echo '</tbody></table></div>';
  } else {
      echo '<div class="container project-data"><h1 class="project-type-heading"><i class="fa fa-chevron-circle-right"></i> PHP<span class="project-count"># 0</span></h1><p>You have not saved any PHP projects yet. Never too late...<br>You can start from <a href="php.php">here</a>!</p></div>';
  }

  ?>

  <?php

  $sql = "SELECT project_id, project_name, project_date, project_type FROM projects WHERE user_id = '$user_id' AND project_type = 'sql' ORDER BY project_date DESC";
  $result = mysqli_query($connection, $sql);
  $resultCheck = mysqli_num_rows($result);

  $sql2 = "SELECT * FROM projects WHERE user_id = '$user_id' AND project_type = 'sql'";
  $result2 = mysqli_query($connection, $sql2);
  $result2Check = mysqli_num_rows($result2);

  if ($resultCheck > 0) {
    // output data of each row
    echo '<div class="container project-data"><h1 class="project-type-heading"><i class="fa fa-chevron-circle-right"></i> SQL<span class="project-count"># '. $result2Check.'</span></h1><table class="table"><thead><tr><th>ID</th><th>Title</th><th>Edit</th><th>Last Modified</th><th>Type</th><th>Delete</th></tr></thead><tbody>';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row["project_id"] . '</td><td><a href="http://localhost:8080/code-playground/'. $row["project_type"] . '.php?project_id='. $row["project_id"] . '">' . $row["project_name"] . '</a></td><td><a href="http://localhost:8080/code-playground/'. $row["project_type"] . '.php?project_id='. $row["project_id"] . '"><i class="fa fa-edit"></i></a></td><td>' . $row["project_date"] . '</td><td>' . $row["project_type"] . '</td><td class="basic-color"><a href="projects.php?trash='. $row["project_id"] .'"><i class="fa fa-trash"></i></a></td></tr>';
    }
    echo '</tbody></table></div>';
  } else {
      echo '<div class="container project-data"><h1 class="project-type-heading"><i class="fa fa-chevron-circle-right"></i> SQL<span class="project-count"># 0</span></h1><p>You have not saved any SQL projects yet. Never too late...<br>You can start from <a href="sql.php">here</a>!</p></div>';
  }

  ?>

  </div>


<?php require 'includes/footer.php'; ?>

</body>
</html>
