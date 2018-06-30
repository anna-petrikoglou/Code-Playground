<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';
require 'includes/header.php';

if (!isset($_SESSION['u_id'])) {
  header("Location: index.php");
  exit();
}

?>

<main>
  <!--<div class="user-home-options">
    <div class="col-md-3 user-options">

    </div>
    <div class="col-md-3 user-options">

    </div>
    <div class="col-md-3 user-options">

    </div>
    <div class="col-md-3 user-options">

    </div>
  </div>-->
  
  <!--<div class="user-steps">
    <div class="col-md-3 step-one">
      <p>Practice on existing projects or create new ones.</p>
    </div>
    <div class="col-md-3 step-two">
      <p>Learn more about web technologies in use.</p>
    </div>
    <div class="col-md-3 step-three">
      <p>Utilize handy tools, constantly expanding.</p>
    </div>
    <div class="col-md-3 step-four">
      <p>Study on samples, save time and rehearse.</p>
    </div>
  </div>-->
  <form id="searchform" method="get" target="_blank" action="https://www.google.com/search">
    <div class="col-md-12">
      <div class="form-group" id="search-google">
        <label for="search">Search Google:</label>
        <div id="search-area">
          <input type="search" name="q" autocomplete="search" class="form-control" id="search" placeholder="What are you looking for?" maxlength="10000" required autofocus><a href="#" onclick="document.getElementById('searchform').submit();"><span><i class="fa fa-search"></i></span></a>
        </div>
      </div>
    </div>
  </form>
  <div class="user-home-page">
    <div>
      <div class="col-md-6 presentation user-parts" id="project-part">
        <h1>Projects</h1>
        <div>
          <img src="img/lamp.png" alt="desk lamp">
          <p>Browse and edit projects you have created, save changes or delete the ones you do not need anymore. </p>
          <a href="projects.php">View Projects</a>
        </div>
      </div>
      <div class="col-md-6 presentation user-parts" id="blog-part">
        <h1>Blog</h1>
        <div>
          <img src="img/blog.png" alt="typewriter">
          <p class="light">Browse and edit projects you have created, save changes or delete the ones you do not need anymore. </p>
          <a href="blog.php" class="dark" style="color:#424242;">View articles</a>
        </div>
      </div>
    </div>
    <div>
      <div class="col-md-6 presentation user-parts" id="tool-part">
        <h1>Tools</h1>
        <div>
          <img src="img/calculator.png" alt="calculator">
          <p class="light">Browse and edit projects you have created, save changes or delete the ones you do not need anymore. </p>
          <a href="tools.php" class="dark">View Tools</a>
        </div>
      </div>
      <div class="col-md-6 presentation user-parts" id="template-part">
        <h1>Settings</h1>
        <div>
          <img src="img/settings.png" alt="Three adjustment bars">
          <p>Browse and edit projects you have created, save changes or delete the ones you do not need anymore. </p>
          <a href="settings.php">View Settings</a>
        </div>
      </div>
    </div>
  </div>

<?php require 'includes/footer.php'; ?>

</body>
</html>
