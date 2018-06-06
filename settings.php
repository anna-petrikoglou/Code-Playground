<?php

require 'system/database.php';
require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

?>

<main>
<div class="container practice-area">
  <div class="row intro">
    <h1>My account</h1>
    <h4>You are successfully logged in!</h4>
  </div>
  <div class="row">
    <div class="col-md-2">
      <div class="list-group">
        <a href="#" class="list-group-item">Go to</a>
        <a href="dashboard.php" class="list-group-item">Dashboard</a>
        <a href="projects.php" class="list-group-item">Projects <span class="badge"></span></a>
        <a href="account.php" class="list-group-item">Settings</a>
        <a href="help.php" class="list-group-item">Help</a>
        <a href="system/logout.php" class="list-group-item">Logout</a>
      </div>
    </div>
    <div class="col-md-1 dashes-separator">
    </div>
    <div class="col-md-6">
      <form method="post" class="dashboard-info">
        <h2>Personal Information</h2>
        <p>Check and edit your personal data.</p>
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" class="form-control" id="first-name" name="name" placeholder="Name" required maxlength="50" value="<?php echo $_SESSION['u_first_name']; ?>">
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" class="form-control" id="last-name" name="name" placeholder="Surname" required maxlength="70" value="<?php echo $_SESSION['u_last_name']; ?>">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required maxlength="100" value="<?php echo $_SESSION['u_email']; ?>">
        </div>
        <h2>Security</h2>
        <p>Generate a new password.</p>
        <div class="form-group">
          <label for="password">New Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required maxlength="256">
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Password" required maxlength="256">
        </div>
        <button type="submit" class="btn" name="update">Update</button>
      </form>
    </div>
    <div class="col-md-3 box-aside">
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>

</body>
</html>
