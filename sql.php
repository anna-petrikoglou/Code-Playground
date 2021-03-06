<?php

require 'system/database.php';
require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

if (!isset($_SESSION['u_id'])) {
  header("Location: login.php");
  exit();
}

$mysql = 'SELECT * FROM users;';
$project_name = 'Untitled';
$project_id = 0;

if (isset($_GET['project_id']) && isset($_SESSION['u_id'])) {
  $sql = "SELECT * FROM projects WHERE project_id = '".$_GET['project_id']."' AND project_type = 'sql' AND user_id = '".$_SESSION['u_id']."'";
  $result = mysqli_query($connection, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    $row = mysqli_fetch_assoc($result);

    $mysql = $row['project_sql'];
    $project_name = $row['project_name'];
    $project_id = $row['project_id'];
  }
}

?>

<?php
  if (isset($_GET['project_id']) && isset($_SESSION['u_id'])) {
    echo '<div class="playground-top-message" id="sql-playground-top-message"><span id="close-notification"><i class="fa fa-times-circle" style="float: right;"></i></span><h6 class="blink"><span class="basic-color" style="font-size: 15px; vertical-align: baseline;"><i class="fa fa-exclamation-triangle"></i></span> You are editing an existing project. If you press <span class="basic-color">"Reset"</span> and <span class="basic-color">"Save"</span> everything will be lost. Click <a href="sql.php">here</a> to create a new one!</h6></div><div class="playground-save-message invisible" id="sql-playground-save-message"><span id="close-save-note"><i class="fa fa-times-circle" style="float: right;"></i></span><h6 class="blink"><span class="basic-color" style="font-size: 15px; vertical-align: baseline;"><i class="fa fa-check"></i></span> All changes have been saved successfully.</h6></div>';
  }
?>

<main  class="playground-general">
  <div class="container practice-area">
    <form id="sqlform" method="post" target="iframe-result" action="playground/sql.php">
      <div class="row"><div class="col-md-12">
        <div id="project-title">
          <!--<label class="control-label" for="project-name">Title:</label>-->
          <input type="text" autocomplete="project-name" class="form-control" id="project-name" value="<?php echo htmlspecialchars($project_name) ?>" placeholder="Name this project" name="project-name" required maxlength="100">
        </div>
        <div>
          <input type="hidden" id="project-id" name="project-id" value="<?php echo $project_id; ?>">
        </div>
        <div class="button-options">
          <button type="button" name="action" value="" id="table-groups-button" class="btn"><i class="fa fa-group"></i> Groups</button>
          <button type="button" name="action" value="" id="table-users-button" class="btn"><i class="fa fa-address-book-o"></i> Users</button>
          <button type="button" name="action" value="" id="restore-db-button" class="btn"><i class="fa fa-database"></i> Database</button>
          <button type="button" name="save" id="save-project-button" class="btn"><i class="fa fa-save"></i> Save</button>
          <button type="reset" id="reset-editors-button" class="btn"><i class="fa fa-undo"></i> Reset</button>
          <button type="button" name="action" value="there" id="new-page-preview-button" class="btn"><i class="fa fa-file"></i> Preview</button>
          <button type="button" name="action" value="here" id="run-code-button" class="btn"><i class="fa fa-play"></i> Run</button>
        </div>
      </div></div>
      <div class="row">
        <div id="sqleditor" class="col-md-12">
          <h2>Structured Query Language</h2>
          <textarea class="form-control textarea-code" name="mysql" id="mysql" rows="18" autofocus><?php echo htmlspecialchars($mysql); ?></textarea>
        </div>
      </div>
    </form>
    <div class="row">
      <div id="php-preview" class="col-md-12 preview">
        <h2>Output</h2>
        <iframe class="form-control iframe-code" name="iframe-result"></iframe>
      </div>
    </div>
  </div>

<?php require 'includes/footer.php'; ?>

<script src="assets/sql.js" type="text/javascript"></script>

</body>
</html>
