<?php require 'includes/head.php'; ?>
<?php require 'includes/nav.php'; ?>
<main>
  <div id="signuppage" class="container">
    <div class="row intro">
      <h1>Create account</h1>
      <h4>Gain access to more features, additional functionalities and powerful tools!</h4>
    </div>
    <div class="container">
      <form class="form-horizontal" action="/action_page.php">
        <div class="form-group">
          <label class="control-label col-sm-3" for="name">Name:</label>
          <div class="col-sm-6">
            <input type="text" autocomplete="user-name" class="form-control" id="name" placeholder="Enter your name" name="name" required maxlength="60">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="email">Email:</label>
          <div class="col-sm-6">
            <input type="email" autocomplete="user-email" class="form-control" id="email" placeholder="Enter your email" name="email" required maxlength="60">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Password:</label>
          <div class="col-sm-6">
            <input type="password" autocomplete="user-password" class="form-control" id="pwd" placeholder="Type your password" name="pwd" required maxlength="60">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="re-pwd">Password:</label>
          <div class="col-sm-6">
            <input type="password" autocomplete="user-password-repeat" class="form-control" id="re-pwd" placeholder="Retype your password" name="pwd" required maxlength="60">
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
            <button type="submit" class="btn">Submit</button>
            <a href="index.php" class="btn btn-default cancel">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Image
  <div id="signupimagedown" class="container">
  </div>-->
  <script src="assets/script-sign-up.js" type="text/javascript"></script>
  <?php require 'includes/footer.php'; ?>
