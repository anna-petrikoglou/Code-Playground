<?php

require 'system/database.php';
require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

$html = '<h1>Press "Ctrl + Shift + i"!</h1>';
$css = 'h1 {color: #62c9ba;}';
$javascript = 'console.log("Welcome computer ninja!");';
$project_name = 'Untitled';
$project_id = 0;

if (isset($_GET['project_id']) && isset($_SESSION['u_id'])) {
  $sql = "SELECT * FROM projects WHERE project_id = '".$_GET['project_id']."' AND project_type = 'web' AND user_id = '".$_SESSION['u_id']."'";
  $result = mysqli_query($connection, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    $row = mysqli_fetch_assoc($result);

    $html = $row['project_html'];
    $css = $row['project_css'];
    $javascript = $row['project_javascript'];
    $project_name = $row['project_name'];
    $project_id = $row['project_id'];
  }
}

?>

<?php
  if (isset($_GET['project_id']) && isset($_SESSION['u_id'])) {
    echo '<div class="playground-top-message" id="web-playground-top-message"><span id="close-notification"><i class="fa fa-times-circle" style="float: right;"></i></span><h6 class="blink"><span class="basic-color" style="font-size: 15px; vertical-align: baseline;"><i class="fa fa-exclamation-triangle"></i></span> You are editing an existing project. If you press <span class="basic-color">"Reset"</span> and <span class="basic-color">"Save"</span> everything will be lost. Click <a href="web.php">here</a> to create a new one!</h6></div><div class="playground-save-message invisible" id="web-playground-save-message"><span id="close-save-note"><i class="fa fa-times-circle" style="float: right;"></i></span><h6 class="blink"><span class="basic-color" style="font-size: 15px; vertical-align: baseline;"><i class="fa fa-check"></i></span> All changes have been saved successfully.</h6></div>';
  }
?>

<main class="playground-general">
  <div class="container practice-area">
    <form id="webform" method="post" target="iframe-result" action="playground/web.php">
      <div class="row"><div class="col-md-12">
        <div>
          <?php
            if (isset($_SESSION['u_id'])) {
              echo '<div id="project-title">
                    <!--<label class="control-label" for="project-name">Title:</label>-->
                    <input type="text" autocomplete="project-name" class="form-control" id="project-name" value="'.$project_name.'" placeholder="Name this project" name="project-name" required maxlength="100">
                    </div><div><input type="hidden" id="project-id" name="project-id" value="'.$project_id.'"></div>';
            }
          ?>
        </div>
        <div class="button-options">
          <?php
            if (isset($_SESSION['u_id'])) {
              echo '<button type="button" name="save" id="save-project-button" class="btn"><i class="fa fa-save"></i> Save</button>';
            }
          ?>
          <button type="reset" id="reset-editors-button" class="btn"><i class="fa fa-undo"></i> Reset</button>
          <button type="button" name="action" value="there" id="new-page-preview-button" class="btn"><i class="fa fa-file"></i> Preview</button>
          <button type="button" name="action" value="here" id="run-code-button" class="btn"><i class="fa fa-play"></i> Run</button>
        </div>
      </div></div>
      <div class="row">
        <div id="htmleditor" class="col-md-4">
          <h2>HyperText Markup Language</h2>
          <textarea class="form-control textarea-code" id="htmleditor-html" name="html" rows="18" autofocus><?php echo htmlspecialchars($html); ?></textarea>
        </div>
        <script>
          var e = ace.edit("htmleditor-html");
          e.getSession().setMode("ace/mode/html");
          e.setTheme("ace/theme/xcode");
          e.getSession().setTabSize(2);
        </script>
        <div id="csseditor" class="col-md-4">
          <h2>Cascading Style Sheets</h2>
          <textarea class="form-control textarea-code" id="csseditor-css" name="css" rows="18"><?php echo htmlspecialchars($css); ?></textarea>
        </div>
        <script>
          var e = ace.edit("csseditor-css");
          e.getSession().setMode("ace/mode/css");
          e.setTheme("ace/theme/xcode");
          e.getSession().setTabSize(2);
          e.setOption(minLines, 25);
          e.setOption(maxLines, 25);
          e.setDisplayIndentGuides(true);
        </script>
        <div id="jseditor" class="col-md-4">
          <h2>JavaScript</h2>
          <textarea class="form-control textarea-code" id="jseditor-js" name="javascript" rows="18"><?php echo htmlspecialchars($javascript); ?></textarea>
        </div>
        <script>
          var e = ace.edit("jseditor-js");
          e.getSession().setMode("ace/mode/javascript_expression");
          e.setTheme("ace/theme/xcode");
          e.getSession().setTabSize(2);
        </script>
        <!--<script>
          require(["ace/ace"], function(ace) {
          var editor1 = ace.edit("htmleditor-html");
          editor1.setOptions({
              theme: "ace/theme/xcode",
              mode: "ace/mode/html",
              minLines: 25,
              maxLines: 25,
              wrap: true,
              autoScrollEditorIntoView: true,
              tabSize: 2
          });

          var editor2 = ace.edit("csseditor-css");
          editor2.setOptions({
              theme: "ace/theme/css",
              mode: "ace/mode/css",
              autoScrollEditorIntoView: true,
              wrap: true,
              maxLines: 25,
              minLines: 25,
              tabSize: 2
          });

          var editor3 = ace.edit("jseditor-js");
          editor3.setOptions({
            theme: "ace/theme/xcode",
            mode: "ace/mode/javascript",
            minLines: 25,
            maxLines: 25,
            wrap: true,
            autoScrollEditorIntoView: true
          });
          editor.renderer.setScrollMargin(10, 10, 10, 10);

          var editor = ace.edit("editor");
          editor.setTheme("ace/theme/xcode");
          editor.session.setMode("ace/mode/html");
          editor.setAutoScrollEditorIntoView(true);
          editor.setOption("maxLines", 100);
          });
        </script>-->
      </div>
    </form>
    <div class="row">
      <div class="col-md-12 preview">
        <h2>Output</h2>
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
  <!--<div class="in-the-background">
    <div>
    </div>
  </div>-->

  <?php require 'includes/footer.php'; ?>

  <script src="assets/web.js" type="text/javascript"></script>

</body>
</html>
