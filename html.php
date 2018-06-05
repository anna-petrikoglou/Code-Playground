<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

$html = '<!DOCTYPE html>
<html>
  <head>
    <title>Basic HTML Structure</title>
  </head>
  <body>
    <div>
      <h1>Hello World!</h1>
      <p>I am learning HTML.</p>
    </div>
  </body>
</html>';

?>

<main class="playground-general">
  <div class="container practice-area">
    <div class="row intro">
      <h1>Let's practice</h1>
    </div>
    <form id="webform" method="post" target="iframe-result" action="playground/html.php">
      <div class="button-options">
        <button type="button" name="action" value="here" id="run-code-button" class="btn"><i class="fa fa-play"></i> Run</button>
        <button type="button" name="action" value="there" id="new-page-preview-button" class="btn"><i class="fa fa-file"></i> Preview</button>
        <button type="reset" id="reset-editors-button" class="btn"><i class="fa fa-undo"></i> Reset</button>
      </div>
      <div class="row">
        <div id="htmleditor" class="col-md-12">
          <h2>HyperText Markup Language</h2>
          <textarea class="form-control textarea-code" name="html" rows="18" autofocus><?php echo htmlspecialchars($html); ?></textarea>
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col-md-12 preview">
        <h2>Output</h2>
        <iframe class="form-control iframe-code" name="iframe-result"></iframe>
      </div>
    </div>
    <div class="playground-nav">
      <a href="css.php"><span class="glyphicon glyphicon-menu-left"></span> Practice CSS </a>
      <a href="web.php"> Practice JavaScript <span class="glyphicon glyphicon-menu-right"></span></a>
    </div>
  </div>

  <?php require 'includes/footer.php'; ?>

  <script src="assets/web.js" type="text/javascript"></script>

</body>
</html>
