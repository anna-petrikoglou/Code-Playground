<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

?>

<main>
  <div class="container">
    <div class="row intro">
      <h1>Tools</h1>
      <h4>New tools added every so often.<br>Come back to check them out!</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <label for="colorPicker" class="tool-label">Color Picker</label>
      <p class="tool-p">Click on the box, pick a color and view its <strong>hsl</strong> & <strong>rgb</strong> numbers!</p>
      <input type="color" id="colorPicker" name="colorPicker" value="#62c9ba">
    </div>
    <div class="col-md-6">
      <label for="calculator" class="tool-label">Calculator</label>
      <p class="tool-p">Wanna make some rough calculations? You can use this one!</p>
      <input type="color" id="calculator" name="calculator" value="#62c9ba">
    </div>
  </div>
  <div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6"></div>
  </div>

<?php require 'includes/footer.php'; ?>

</body>
</html>
