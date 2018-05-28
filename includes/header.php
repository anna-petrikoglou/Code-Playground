<header>
  <div class="container">
    <!--<time datetime="2018-04-20T12:15:50+00:00">April 20, 2018</time>-->
      <div class="col-md-12 intro">
        <h1>Hey there!</h1>
        <?php
          if (isset($_SESSION['u_id'])) {
            echo '<h4>Welcome back! How are your projects going? Anything new to add?</h4>';
          } else {
            echo '<h4>Got a great idea? About to create something new? Just practicing?<br>Join us! Learn more <a href="about.php" class="basic-color">here</a>.</h4>';
          }
        ?>
      </div>
  </div>
</header>
