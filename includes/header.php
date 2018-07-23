<header>
  <div class="container">
    <!--<time datetime="2018-04-20T12:15:50+00:00">April 20, 2018</time>-->
      <div class="col-md-12 intro">
        <?php
          if (isset($_SESSION['u_id'])) {
            echo '<h1>Study</h1><h4><i class="fa fa-info-circle"></i></h4><h6>Explore all the available options or visit your <a href="account.php" class="basic-color">account</a> page.</h6>';
          } else {
            echo '<h1>Hey there!</h1><h4>Got a great idea? About to create something new? Just practising?<br>Join us! Learn more <a href="about.php" class="basic-color">here</a>.</h4>';
          }
        ?>
      </div>
  </div>
</header>
