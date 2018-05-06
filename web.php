<?php require 'includes/head.php'; ?>
<?php require 'includes/nav.php'; ?>

<?php
$html = '<h1>Press "Ctrl + Shift + i"!</h1>';
$css = 'h1 {color: #62c9ba;}';
$javascript = 'console.log("Welcome computer ninja!");';
?>

<main>
  <div class="container practice-area">
    <div class="row intro">
      <h1>Let's practice</h1>
    </div>
    <form method="post" target="iframe-result" action="playground/web.php">
      <div class="button-options">
        <button type="button" name="action" value="here" id="run-code-button" class="btn"><i class="fa fa-play"></i> Run</button>
        <button type="button" name="action" value="there" id="new-page-preview-button" class="btn"><i class="fa fa-file"></i> Preview</button>
        <button type="reset" id="reset-editors-button" class="btn"><i class="fa fa-undo"></i> Reset</button>
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
    </form>
    <div class="row">
      <div id="preview" class="col-md-12">
        <h2>Result</h2>
        <iframe class="form-control iframe-code" name="iframe-result"></iframe>
      </div>
    </div>
    <form id="saveForm" method="post" target="iframe-result" action="system/web.php">
      <div class="button-options">
      <?php
        if (isset($_SESSION['u_id'])) {
          echo '<button type="button" id="save-project-button" class="btn"><i class="fa       fa-save"></i> Save</button>';
        }
      ?>
      </div>
    </form>
  </div>
  <script src="assets/web.js" type="text/javascript"></script>
  <?php require 'includes/footer.php'; ?>
