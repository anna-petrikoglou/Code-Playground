<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';


if (isset($_GET[project_id]) && isset($_SESSION['u_id'])) {
  $sql = "SELECT * FROM projects WHERE project_id = '".$_GET['project_id']."' && user_id = '".$_SESSION['u_id']."'";
  $result = mysqli_query($connection, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    $row = mysqli_fetch_assoc($result);
  }
} else {
  $html = '<h1>Press "Ctrl + Shift + i"!</h1>';
  $css = 'h1 {color: #62c9ba;}';
  $javascript = 'console.log("Welcome computer ninja!");';
  $project_name = 'Untitled';
  }

?>

<main>
  <div class="container practice-area">
    <div class="row intro">
      <h1>Let's practice</h1>
    </div>
    <form id="webform" method="post" target="iframe-result" action="playground/web.php">
      <div class="button-options">
        <button type="button" name="action" value="here" id="run-code-button" class="btn"><i class="fa fa-play"></i> Run</button>
        <button type="button" name="action" value="there" id="new-page-preview-button" class="btn"><i class="fa fa-file"></i> Preview</button>
        <button type="reset" id="reset-editors-button" class="btn"><i class="fa fa-undo"></i> Reset</button>
      </div>
      <div class="col-md-12">
        <?php
          if (isset($_SESSION['u_id'])) {
            echo '<div class="row"><div class="form-group" id="project-title">
                  <label class="control-label basic-color" for="project-name">Title:</label>
                  <div><input type="text" autocomplete="project-name" class="form-control" id="project-name" placeholder="Name this project" name="project-name" required maxlength="100">
                  </div></div><div><input type="hidden" id="project-id" name="project-id" value="<?php echo htmlspecialchars($row->project_id); ?>"></div></div>';
          }
        ?>
      </div>
      <div class="row">
        <div id="htmleditor" class="col-md-4">
          <h2>HTML</h2>
          <textarea class="form-control textarea-code" name="html" rows="18" autofocus><?php echo htmlspecialchars($html); ?></textarea>
        </div>
        <div id="csseditor" class="col-md-4">
          <h2>CSS</h2>
          <textarea class="form-control textarea-code" name="css" rows="18"><?php echo htmlspecialchars($css); ?></textarea>
        </div>
        <div id="jseditor" class="col-md-4">
          <h2>JavaScript</h2>
          <textarea class="form-control textarea-code" name="javascript" rows="18"><?php echo htmlspecialchars($javascript); ?></textarea>
        </div>
      </div>
      <div class="col-md-12">
        <?php
          if (isset($_SESSION['u_id'])) {
            echo '<div class="row"><button type="button" name="save" id="save-project-button" class="btn"><i class="fa fa-save"></i> Save</button></div>';
          }
        ?>
      </div>
    </form>
    <div class="row">
      <div id="preview" class="col-md-12">
        <h2>Result</h2>
        <iframe class="form-control iframe-code" name="iframe-result"></iframe>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 playground-nav">
        <a href="html.php"><span class="glyphicon glyphicon-menu-left"></span> Practice HTML </a>
        <a href="css.php"> Practice CSS <span class="glyphicon glyphicon-menu-right"></span></a>
      </div>
    </div>
  </div>

  <script src="assets/web.js" type="text/javascript"></script>

  <?php require 'includes/footer.php'; ?>
