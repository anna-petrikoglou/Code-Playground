<?php require 'includes/head.php'; ?>
<?php require 'includes/nav.php'; ?>
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
            <input type="text" autocomplete="off" class="form-control" id="first-name" placeholder="Enter your first name" name="first-name" required maxlength="50" autofocus>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="last-name">Last Name:</label>
          <div class="col-sm-6">
            <input type="text" autocomplete="off" class="form-control" id="last-name" placeholder="Enter your last name" name="last-name" required maxlength="70">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="email">Email:</label>
          <div class="col-sm-6">
            <input type="text" autocomplete="off" class="form-control" id="email" placeholder="Enter your email" name="email" required maxlength="100">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="username">Username:</label>
          <div class="col-sm-6">
            <input type="text" autocomplete="off" class="form-control" id="username" placeholder="Type your username" name="username" required maxlength="100">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="password">Password:</label>
          <div class="col-sm-6">
            <input type="password" autocomplete="off" class="form-control" id="password" placeholder="Type your password" name="password" required maxlength="256">
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
            <a href="index.php" class="btn btn-default cancel">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Image
  <div id="signupimagedown" class="container">
  </div>-->
  <?php require 'includes/footer.php'; ?>
