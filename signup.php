<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

if (isset($_SESSION['u_id'])) {
  header("Location: index.php");
  exit();
}

?>

<main>
  <div id="signuppage" class="container">
    <div class="row intro">
      <h1>Create account</h1>
      <h4>Gain access to more features, additional functionalities and powerful tools!</h4>
    </div>
    <div class="container">
      <form class="form-horizontal" action="system/signup.php" method="post">
        <div class="form-group">
          <label class="control-label col-sm-3" for="first-name">First Name:</label>
          <div class="col-sm-6">
            <input type="text" autocomplete="first-name" class="form-control" id="first-name" placeholder="Enter your first name" name="first-name" required maxlength="50" value="<?php echo htmlspecialchars($_SESSION['submission']['first-name']); ?>" autofocus>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="last-name">Last Name:</label>
          <div class="col-sm-6">
            <input type="text" autocomplete="last-name" class="form-control" id="last-name" placeholder="Enter your last name" name="last-name" required maxlength="70" value="<?php echo htmlspecialchars($_SESSION['submission']['last-name']); ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="email">Email:</label>
          <div class="col-sm-6">
            <input type="text" autocomplete="email" class="form-control" id="email" placeholder="Enter your email" name="email" required maxlength="100" value="<?php echo htmlspecialchars($_SESSION['submission']['email']); ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="username">Username:</label>
          <div class="col-sm-6">
            <input type="text" autocomplete="username" class="form-control" id="username" placeholder="Type your username" name="username" required maxlength="100" value="<?php echo htmlspecialchars($_SESSION['submission']['username']); ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="password">Password:</label>
          <div class="col-sm-6">
            <input type="password" autocomplete="password" class="form-control" id="password" placeholder="Type your password" name="password" required maxlength="256">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="confirm-password">Password:</label>
          <div class="col-sm-6">
            <input type="password" autocomplete="confirm-password" class="form-control" id="confirm-password" placeholder="Confirm your password" name="confirm-password" required maxlength="256">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <p>Already have an account? <a href="login.php" class="basic-color">Login</a>.</p>
            <div class="checkbox">
              <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn" name="submit">Submit</button>
            <a href="login.php" class="btn btn-default cancel">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Image
  <div id="signupimagedown" class="container">
  </div>-->

  <?php require 'includes/footer.php'; ?>
