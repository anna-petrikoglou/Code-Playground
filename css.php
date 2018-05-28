<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

$html = '<div>
  <p>Basic CSS Structure</p>
</div>
<div>
  <span>Stylesheet</span>
</div>';

$css = '* {
  text-align: center;
}

p {
  margin: 50px;
}

span {
  color: #62c9ba;
  font-family: "Montserrat";
  font-size: 50px;
  margin-top: 70px;
  padding: 30px;
  border: 1px solid #62c9ba;
  border-radius: 1%;
}';

?>

<main>
  <div class="container practice-area">
    <div class="row intro">
      <h1>Let's practice</h1>
    </div>
    <form id="webform" method="post" target="iframe-result" action="playground/css.php">
      <div class="button-options">
        <button type="button" name="action" value="here" id="run-code-button" class="btn"><i class="fa fa-play"></i> Run</button>
        <button type="button" name="action" value="there" id="new-page-preview-button" class="btn"><i class="fa fa-file"></i> Preview</button>
        <button type="reset" id="reset-editors-button" class="btn"><i class="fa fa-undo"></i> Reset</button>
      </div>
      <div class="row">
        <div id="htmleditor" class="col-md-6">
          <h2>HTML</h2>
          <textarea class="form-control textarea-code" name="html" rows="18" autofocus><?php echo htmlspecialchars($html); ?></textarea>
        </div>
        <div id="csseditor" class="col-md-6">
          <h2>CSS</h2>
          <textarea class="form-control textarea-code" name="css" rows="18"><?php echo htmlspecialchars($css); ?></textarea>
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
      <a href="html.php"><span class="glyphicon glyphicon-menu-left"></span> Practice HTML </a>
      <a href="web.php"> Practice JavaScript <span class="glyphicon glyphicon-menu-right"></span></a>
    </div>
  </div>

  <?php require 'includes/footer.php'; ?>

  <script src="assets/web.js" type="text/javascript"></script>

</body>
</html>
