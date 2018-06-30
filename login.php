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
  <div id="loginpage">
    <div class="intro">
      <h1>Sign In</h1>
      <!--<h4>Enjoy more features!</h4>-->
    </div>
    <div class="container" id="login-form">
      <form class="form-horizontal" action="system/login.php" method="post">
        <div class="warnings">
          <?php
            if(isset($_GET['login']) and $_GET['login'] == 'username_and_password_required') {
              echo '<span id="warning1" class="blink"><i class="fa fa-exclamation-triangle"></i> Admission required</span>';
            } elseif(isset($_GET['login']) and $_GET['login'] == 'not_existing_user') {
              echo '<span id="warning2" class="blink"><i class="fa fa-exclamation-triangle"></i> User not found</span>';
            } elseif(isset($_GET['login']) and $_GET['login'] == 'invalid_password') {
              echo '<span id="warning3" class="blink"><i class="fa fa-exclamation-triangle"></i> Invalid password</span>';
            }
          ?>
        </div>
        <div class="form-group">
          <label for="identification">Username:<sup>*</sup></label>
          <input type="text" autocomplete="off" class="form-control" id="identification" placeholder="Username (or Email)" name="identification" required maxlength="100" value="<?php echo htmlspecialchars($_SESSION['submission']['identification']); ?>" autofocus>
        </div>
        <div class="form-group">
          <label for="countersign">Password:<sup>*</sup></label>
          <input type="password" autocomplete="off" class="form-control" id="countersign" placeholder="Password" name="countersign" required maxlength="256">
        </div>
        <div class="form-group">
          <p>Need an account? Sign up <a href="signup.php" class="basic-color">here</a>!</p>
          <!--<div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
          <p><strong>All fields with the (*) sign are required.</strong></p>-->
        </div>
        <div class="form-group">
          <button type="submit" name="submit" class="btn">Submit</button>
          <a href="index.php" class="btn btn-default cancel">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <?php require 'includes/footer.php'; ?>

</body>
</html>
