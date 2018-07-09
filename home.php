<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

if (!isset($_SESSION['u_id'])) {
  header("Location: index.php");
  exit();
}

?>

<header class="home-header">
    <div class="intro" id="full-width-home-header">
      <h1>Hello, <?php echo $_SESSION['u_first_name']; ?>!</h1>
      <h4><i class="fa fa-info-circle"></i></h4>
      <h6>Explore all the available options here or visit our help page.</h6>
    </div>
</header>
<main>
  <!--<div class="col-md-12 behind-search">
    <img src="img/study.jpg" alt="Boy sitting on desk and studying">
  </div>-->
  <div class="col-md-12 full-width">
    <form id="searchform" method="get" target="_blank" action="https://www.google.com/search">
      <div class="col-md-12 presentation user-parts" id="search-part">
        <h4><i class="fa fa-info-circle"></i></h4><h6>A web developer's most favorite tool is Google's search engine!<br>So, go for whatever you want...</h6>
        <div class="form-group" id="search-google">
          <div id="search-area">
            <input type="search" name="q" autocomplete="search" class="form-control" id="search" placeholder="What are you looking for?" maxlength="10000" required>
            <div>
              <a href="#" id="search-link" onclick="document.getElementById('searchform').submit();"><span><i class="fa fa-search"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="user-home-page">
    <div class="col-md-12 zero-padding">
      <div class="presentation user-parts" id="blog-part">
        <div class="container">
          <div class="col-md-6">
            <h1>Blog</h1>
            <p class="light">We do the hard work for you, gathering the most precious, essential resources on the internet. Find useful material, rules, concepts, guidelines, tips and tricks to enhance your web development skills!</p>
            <a href="blog.php" class="dark" style="color: #424242">View articles</a>
          </div>
          <div class="col-md-6">
            <img src="img/blog.png" alt="typewriter">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 user-steps">
      <div class="col-md-3 step-one">
        <p>Search</p>
        <div class="beginning-circle"><i class="fa fa-circle"></i></div>
      </div>
      <div class="col-md-3 step-two">
        <p>Read</p>
      </div>
      <div class="col-md-3 step-three">
        <p>Practice</p>
      </div>
      <div class="col-md-3 step-four">
        <p>Repeat</p>
        <div class="ending-pin"><i class="fa fa-map-marker"></i></div>
      </div>
    </div>
    <div class="col-md-12 zero-padding">
      <div class="presentation user-parts" id="project-part">
        <div class="container">
          <div class="col-md-6">
            <img src="img/lamp.png" alt="desk lamp">
          </div>
          <div class="col-md-6">
            <h1>Projects</h1>
            <p>Browse and edit the projects you have created. Save your changes or delete the ones, that you do not need anymore. Prettily organized by the type of the technologies you have used, are awaiting for you to shine!</p>
            <a href="projects.php">View Projects</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 zero-padding">
      <div class="presentation user-parts" id="tool-part">
        <div class="container">
          <div class="col-md-6">
            <h1>Tools & Samples</h1>
            <p class="light story">One step at a time. Here is how to create meaningful stuff starting with the basics. Utilize handy tools, that are regularly expanding and practice on samples.</p>
            <a href="tools.php" class="dark">View Tools</a>
          </div>
          <div class="col-md-6">
            <img src="img/calculator.png" alt="calculator">
          </div>
        </div>
      </div>
    </div>
    <!--<div class="col-md-12 zero-padding">
      <div class="presentation user-parts" id="setting-part">
        <div class="container">
          <div class="col-md-6">
            <h1>Settings</h1>
            <p class="light">Visit your account page, check your personal information stored and displayed or update it. You can also change your admission countersign, just in case!</p>
            <a href="account.php" class="dark" style="color: #424242">View Settings</a>
          </div>
          <div class="col-md-6">
            <img src="img/settings.png" alt="Three adjustment bars">
          </div>
        </div>
      </div>
    </div>-->
  </div>

<?php require 'includes/footer.php'; ?>

</body>
</html>
