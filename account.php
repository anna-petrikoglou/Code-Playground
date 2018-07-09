<?php

require 'system/database.php';
require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

if (!isset($_SESSION['u_id'])) {
  header("Location: login.php");
  exit();
}

?>

<main class="account-area">
<div class="container" id="full-width-account-header">
  <div class="intro">
    <h1>My Account</h1>
    <h4><i class="fa fa-info-circle"></i></h4><h6>Update your personal data or change your password.</h6>
  </div>
</div>
<div class="container">
    <!--<div class="col-md-2">

    </div>-->
    <!--<div class="col-md-2 dashes-separator">
      <div></div>
    </div>-->
    <div class="col-md-12">
      <form method="post" class="dashboard-info" action="system/update_data.php">
        <h2>Personal Information</h2>
        <p>Check and edit your personal data.</p>
        <div class="warnings">
          <?php
            if(isset($_GET['update']) and $_GET['update'] == 'inadequate_input_length') {
              echo '<span id="warning4" class="blink"><i class="fa fa-exclamation-triangle"></i> Too short name</span>';
            } elseif(isset($_GET['update']) and $_GET['update'] == 'invalid_first_name') {
              echo '<span id="warning5" class="blink"><i class="fa fa-exclamation-triangle"></i> Invalid first name</span>';
            } elseif(isset($_GET['update']) and $_GET['update'] == 'invalid_last_name') {
              echo '<span id="warning6" class="blink"><i class="fa fa-exclamation-triangle"></i> Invalid last name</span>';
            } elseif(isset($_GET['update']) and $_GET['update'] == 'invalid_email_address') {
              echo '<span id="warning7" class="blink"><i class="fa fa-exclamation-triangle"></i> Invalid e-mail address</span>';
            } elseif(isset($_GET['update']) and $_GET['update'] == 'already_used_username_or_email') {
              echo '<span id="warning8" class="blink"><i class="fa fa-exclamation-triangle"></i> Existing user</span>';
            } elseif(isset($_GET['update']) and $_GET['update'] == 'profile_success') {
              echo '<span id="warning10" class="blink"><i class="fa fa-check-square"></i> Profile updated</span>';
            }
          ?>
        </div>
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" autocomplete="first-name" class="form-control" id="first-name" name="first-name" placeholder="Name" required maxlength="50" value="<?php echo htmlspecialchars($_SESSION['u_first_name']); ?>" autofocus>
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" autocomplete="last-name" class="form-control" id="last-name" name="last-name" placeholder="Surname" required maxlength="70" value="<?php echo htmlspecialchars($_SESSION['u_last_name']); ?>">
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" autocomplete="email" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required maxlength="100" value="<?php echo htmlspecialchars($_SESSION['u_email']); ?>">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" autocomplete="username" class="form-control" id="username" name="username" placeholder="Username" required maxlength="100" value="<?php echo htmlspecialchars($_SESSION['u_username']); ?>">
        </div>
        <button type="submit" class="btn" name="submit">Update</button>
      </form>
      <form method="post" class="dashboard-info" action="system/update_password.php">
        <h2>Security</h2>
        <p>Generate a new password.</p>
        <div class="warnings">
          <?php
            if(isset($_GET['update']) and $_GET['update'] == 'inadequate_password_length') {
              echo '<span id="warning0" class="blink"><i class="fa fa-exclamation-triangle"></i> Too short password</span>';
            } elseif(isset($_GET['update']) and $_GET['update'] == 'not_matching_passwords') {
              echo '<span id="warning9" class="blink"><i class="fa fa-exclamation-triangle"></i> Passwords do not match</span>';
            } elseif(isset($_GET['update']) and $_GET['update'] == 'password_success') {
              echo '<span id="warning11" class="blink"><i class="fa fa-check-square"></i> Password changed</span>';
            }
          ?>
        </div>
        <div class="form-group">
          <label for="password">New Password</label>
          <input type="password" autocomplete="password" class="form-control" id="password" name="password" placeholder="Password" required maxlength="256">
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" autocomplete="confirm-password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Password" required maxlength="256">
        </div>
        <button type="submit" class="btn" name="submit">Change</button>
      </form>
      <form method="post" class="dashboard-info" action="system/delete.php">
        <h2>Membership</h2>
        <p>Delete your account.<br><br><span class="basic-color"><i class="fa fa-exclamation-triangle"></i></span>  Caution! This action is irreversible.</p>
        <div>
          <input type="checkbox" id="del-account" name="del-account" value="Definitely, delete my account.">
          <label for="del-account" id="del-account-label">Definitely, delete my account.</label>
        </div>
        <button type="submit" class="btn" name="submit">Delete</button>
      </form>
    </div>
    <!--<div class="col-md-2">
      <div class="list-group">
        <a href="#" class="list-group-item">Go to</a>
        <a href="blog.php" class="list-group-item">Blog</a>
        <a href="tools.php" class="list-group-item">Tools</a>
        <a href="dashboard.php" class="list-group-item disabled">Dashboard</a>
        <a href="projects.php" class="list-group-item">Projects <span class="badge"></span></a>
        <a href="settings.php" class="list-group-item active-tab">Settings</a>
        <a href="help.php" class="list-group-item">Help</a>
        <a href="system/logout.php" class="list-group-item">Logout</a>
      </div>
      <div class="box-aside box-aside-1"></div>
      <div class="box-aside box-aside-2"></div>
    </div>-->

</div>

<?php require 'includes/footer.php'; ?>

</body>
</html>
