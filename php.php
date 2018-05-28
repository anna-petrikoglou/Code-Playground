<?php

require 'system/database.php';
require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

if (!isset($_SESSION['u_id'])) {
  header("Location: web.php");
  exit();
}

$php = 'echo "You are learning really fast!"';
$project_name = 'Untitled';
$project_id = 0;

if (isset($_GET['project_id']) && isset($_SESSION['u_id'])) {
  $sql = "SELECT * FROM projects WHERE project_id = '".$_GET['project_id']."' && user_id = '".$_SESSION['u_id']."'";
  $result = mysqli_query($connection, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    $row = mysqli_fetch_assoc($result);

    $php = $row['project_php'];
    $project_name = $row['project_name'];
    $project_id = $row['project_id'];
    header("Location: ./php.php?project_id=$project_id");
    exit();
  }
}

?>

<div class="container practice-area">
  <div class="row intro">
    <h1>Let's practice</h1>
  </div>
  <form id="phpform" method="post" target="iframe-result" action="playground/php.php">
    <div class="button-options">
      <button type="button" name="action" value="here" id="run-code-button" class="btn"><i class="fa fa-play"></i> Run</button>
      <button type="button" name="action" value="there" id="new-page-preview-button" class="btn"><i class="fa fa-file"></i> Preview</button>
      <button type="reset" id="reset-editors-button" class="btn"><i class="fa fa-undo"></i> Reset</button>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="form-group" id="project-title">
          <label class="control-label basic-color" for="project-name">Title:</label>
          <div>
            <input type="text" autocomplete="project-name" class="form-control" id="project-name" value="<?php echo htmlspecialchars($project_name) ?>" placeholder="Name this project" name="project-name" required maxlength="100">
          </div>
      </div>
      <div>
        <input type="hidden" id="project-id" name="project-id" value="<?php echo $project_id; ?>">
        </div>
      </div>
    </div>
    <div class="row">
      <div id="phpeditor" class="col-md-12">
        <h2>PHP</h2>
        <textarea class="form-control textarea-code" name="php" rows="18" autofocus><?php echo htmlspecialchars($php); ?></textarea>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <button type="button" name="save" id="save-project-button" class="btn"><i class="fa fa-save"></i> Save</button>
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

<script src="assets/php.js" type="text/javascript"></script>

</body>
</html>
