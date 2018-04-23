<?php require 'includes/head.php'; ?>
<?php require 'includes/nav.php'; ?>

<!-- CodeMirror -->

<script src="lib/codemirror.js"></script>
<link rel="stylesheet" href="lib/codemirror.css">
<script src="mode/javascript/javascript.js"></script>

var myCodeMirror = CodeMirror(document.body, {
  value: "function myScript(){return 100;}\n",
  mode:  "javascript"
});

<?php require 'includes/footer.php'; ?>
