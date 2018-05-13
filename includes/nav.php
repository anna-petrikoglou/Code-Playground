<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Code Playground</a>
    </div>
    <div id="myNavbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="web.php">Web</a></li>
        <?php
          if (isset($_SESSION['u_id'])) {
            echo '<li><a href="#">PHP</a></li>
                  <li><a href="#">MySQL</a></li>';
          } else {
            echo '<li class="disabled"><a href="#">PHP</a></li>
                  <li class="disabled"><a href="#">MySQL</a></li>';
          }
        ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if (isset($_SESSION['u_id'])) {
            //Use this same isset() function to change any content on any page, when a user is logged in.
            //echo "You are logged in!";
            // <input id="logoutInput" type="hidden" name="logoutInput" value="N/A"/> value attribute?
            echo '<li><a href="account.php">My Account</a></li>
                  <li><a href="system/logout.php">Logout</a></li>';
          } else {
            echo '<li><a href="signup.php">Sign up</a></li>
                  <li><a href="login.php">Login</a></li>';
          }
          ?>
        <li><a href="#">About</a></li>
      </ul>
    </div>
  </div>
</nav>
