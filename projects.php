<?php

require 'system/database.php';
require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

if (!isset($_SESSION['u_id'])) {
  header("Location: index.php");
  exit();
}

$user_id = $_SESSION['u_id'];

$sql = "SELECT project_id, project_name, project_date FROM projects WHERE user_id = '$user_id'";
$result = mysqli_query($connection, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["project_id"]. " - Name: " . $row["project_name"]. " " . $row["project_date"]. "<br>";
    }
} else {
    echo "You have no saved projects yet.";
}

?>

<main>
  <div class="container research-area">
    <div class="fancy-header">
      <div class="row intro">
        <h1>Projects</h1>
        <h4>See your work listed below.</h4><h6>Come over again!</h6>
      </div>
    </div>
  </div>


<?php require 'includes/footer.php'; ?>

</body>
</html>
