<?php require 'includes/head.php'; ?>
<?php require 'includes/nav.php'; ?>
<main>
  <div class="container">
      <div class="col-md-12 intro">
        <h1>Welcome back dude</h1>
        <h4></h4>
      </div>
      <div class="container">
        <form class="form-horizontal" action="system/login.php" method="post">
          <div class="form-group">
            <label class="control-label col-sm-3" for="identification">Username:</label>
            <div class="col-sm-6">
              <input type="text" autocomplete="off" class="form-control" id="identification" placeholder="Enter your username" name="identification" required maxlength="100">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3" for="countersign">Password:</label>
            <div class="col-sm-6">
              <input type="password" autocomplete="off" class="form-control" id="countersign" placeholder="Type your password" name="countersign" required maxlength="256">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" name="submit" class="btn">Submit</button>
              <a href="index.php" class="btn btn-default cancel">Cancel</a>
            </div>
          </div>
        </form>
      </div>
  </div>
  <?php require 'includes/footer.php'; ?>
