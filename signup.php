<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

if (isset($_SESSION['u_id'])) {
  header("Location: home.php");
  exit();
}

?>

<main>
  <div id="signuppage">
    <div class="intro">
      <h1>Create your account</h1>
      <!--<h4>Gain access to additional functionalities. Use powerful tools!</h4>
      <h6>Please, read input requirements in the <a href="help.php" class="basic-color">Help</a> section of the website.<br>In case you are facing issues, you may also contact us at <span class="basic-color">info@codetrip.gr</span>.</h6>-->
    </div>
    <div class="container" id="signup-form">
      <form class="form-horizontal" action="system/signup.php" method="post">
        <div class="warnings">
          <?php
            if(isset($_GET['signup']) and $_GET['signup'] == 'inadequate_input_length') {
              echo '<span id="warning4" class="blink"><i class="fa fa-exclamation-triangle"></i> Too short name</span>';
            } elseif(isset($_GET['signup']) and $_GET['signup'] == 'invalid_first_name') {
              echo '<span id="warning5" class="blink"><i class="fa fa-exclamation-triangle"></i> Invalid first name</span>';
            } elseif(isset($_GET['signup']) and $_GET['signup'] == 'inadequate_password_length') {
              echo '<span id="warning0" class="blink"><i class="fa fa-exclamation-triangle"></i> Too short password</span>';
            } elseif(isset($_GET['signup']) and $_GET['signup'] == 'invalid_last_name') {
              echo '<span id="warning6" class="blink"><i class="fa fa-exclamation-triangle"></i> Invalid last name</span>';
            } elseif(isset($_GET['signup']) and $_GET['signup'] == 'invalid_email_address') {
              echo '<span id="warning7" class="blink"><i class="fa fa-exclamation-triangle"></i> Invalid e-mail address</span>';
            } elseif(isset($_GET['signup']) and $_GET['signup'] == 'already_used_username_or_email') {
              echo '<span id="warning8" class="blink"><i class="fa fa-exclamation-triangle"></i> Existing username or email</span>';
            } elseif(isset($_GET['signup']) and $_GET['signup'] == 'not_matching_passwords') {
              echo '<span id="warning9" class="blink"><i class="fa fa-exclamation-triangle"></i> Passwords do not match</span>';
            }
          ?>
        </div>
        <div class="form-group">
          <div class="shortway-left">
            <label for="first-name">First Name <sup>*</sup></label>
            <input type="text" autocomplete="first-name" class="form-control" id="first-name" placeholder="Name" name="first-name" required maxlength="50" value="<?php if (isset($_SESSION['submission'])) { echo htmlspecialchars($_SESSION['submission']['first-name']); } ?>" autofocus>
          </div>
          <div class="longway-right">
            <label for="last-name">Last Name <sup>*</sup></label>
            <input type="text" autocomplete="last-name" class="form-control" id="last-name" placeholder="Surname" name="last-name" required maxlength="70" value="<?php if (isset($_SESSION['submission'])) { echo htmlspecialchars($_SESSION['submission']['last-name']); } ?>">
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email Address <sup>*</sup></label>
          <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" autocomplete="email" class="form-control" id="email" placeholder="Email" name="email" required maxlength="100" value="<?php if (isset($_SESSION['submission'])) { echo htmlspecialchars($_SESSION['submission']['email']); } ?>">
        </div>
        <div class="form-group">
          <label for="username">Username <sup>*</sup></label>
          <input type="text" autocomplete="username" class="form-control" id="username" placeholder="Username" name="username" required maxlength="100" value="<?php if (isset($_SESSION['submission'])) { echo htmlspecialchars($_SESSION['submission']['username']); } ?>">
        </div>
        <div class="form-group">
          <div class="halfway-left">
            <label for="password">Password <sup>*</sup></label>
            <input type="password" autocomplete="password" class="form-control" id="password" placeholder="Password" name="password" required maxlength="256">
          </div>
          <div class="halfway-right">
            <label for="confirm-password">Confirmation <sup>*</sup></label>
            <input type="password" autocomplete="confirm-password" class="form-control" id="confirm-password" placeholder="Password" name="confirm-password" required maxlength="256">
          </div>
        </div>
        <div class="form-group">
          <p>Already have an account? Login <a href="login.php" class="basic-color">here</a>!</p>
          <!--<div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>-->
        </div>
        <div class="form-group">
          <button type="submit" class="btn" name="submit">Submit</button>
          <a href="login.php" class="btn btn-default cancel">Cancel</a>
        </div>
      </form>
    </div>
    <h6 class="width-limit"><span class="basic-color">Note!</span> Your personal information is safe. We do not publish or share any kind of data.</h6>
    <div class="container">
      <div  class="width-limit"><hr>
      </div>
    </div>
  </div>

  <!-- Image
  <div id="signupimagedown" class="container">
  </div>-->

  <?php require 'includes/footer.php'; ?>

</body>
</html>
