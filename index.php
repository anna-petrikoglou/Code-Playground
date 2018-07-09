<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

if (isset($_SESSION['u_id'])) {
  header("Location: home.php");
  exit();
}

?>

<header>
  <div class="container">
    <div class="col-md-12 intro">
      <h1>Hey there!</h1>
      <h4>Got a great idea? About to create something new? Just practicing?<br>Join us! Learn more <a href="about.php" class="basic-color">here</a>.</h4>
    </div>
  </div>
</header>
<main>
  <div class="presentation client-side">
    <div class="container">
      <div class="col-md-6">
        <img src="img/client.png" class="big-image" alt="Two kids programming a robot, using a computer">
      </div>
      <div class="col-md-6 story">
        <h2>Let's Get Started</h2>
        <p>Imagine you have got some common materials. Lots of metal and plastic or wooden parts, screws or nails and cables or ropes. Now, you would like to make something out of these. But, you don't know how. Would it be simple or complex, colorful or black-and-white, big or small, static or dynamic? <br><br>Thank God, there are also some handy tools! Hammers, screwdrivers, pliers etc.. Not to mention, handbooks and instruction notes. Everything seems more feasible that way, don't you think? <br><br>It works like this with our web technologies. Your common materials are like the HTML elements. Your operating tools are the JS scripts. And guess what! You've got a great bunch of styling options to transmute this into an astonishing work of art! That's obviously CSS. </p>
      </div>
    </div>
  </div>
  <div class="courses">
    <div class="container">
        <div class="col-md-12 intro">
          <h1>Basics</h1>
          <h4>Experiment with client-side technologies and build awesome stuff! Need more? <a href="signup.php" class="basic-color">Sign up</a> for free.</h4>
        </div>
    </div>
    <div class="container">
      <div class="col-md-4 course">
        <img class="course-image" src="img/document.png" alt="HTML document" height="200" width="200">
        <h1>HTML</h1>
        <h6>HyperText Markup Language</h6>
        <p class="information">Forms the basic structure of a website, by determining the position of semantics and creating a reasonable sequence of elements. The HTML document includes the whole content of the page, such as texts, images or videos, without any additional style or formatting.</p>
        <p><a class="btn btn-danger" href="html.php">Practice <i class="fa fa-arrow-right"></i></a></p>
      </div>
      <div class="col-md-4 course">
        <img class="course-image" src="img/stylize.png" alt="Ruler and pencil" height="200" width="200">
        <h1>CSS</h1>
        <h6>Cascading Style Sheets</h6>
        <p class="information">Includes all the rules used for applying styles to the HTML document. It provides numerous and impressive formatting capabilities. CSS configures individual or grouped elements of the document, in order to create engaging content and optimize a page's presentation.</p>
        <p><a class="btn btn-primary" href="css.php">Practice <i class="fa fa-arrow-right"></i></a></p>
      </div>
      <div class="col-md-4 course">
        <img class="course-image" src="img/screwdriver.png" alt="Screwdriver" height="200" width="200">
        <h1>JavaScript</h1>
        <h6>or ECMAScript</h6>
        <p class="information">One of the most popular, object-oriented, programming languages​​. Predominantly used for manipulating a page's behaviour. JS includes a set of commands that provide access to the document and allow interaction, changes and browsing among related documents.</p>
        <p><a class="btn btn-warning" href="web.php">Practice <i class="fa fa-arrow-right"></i></a></p>
      </div>
    </div>
  </div>
  <div class="presentation server-side">
    <div class="container">
      <div class="col-md-6 story">
        <h2>What Comes Next</h2>
        <p>Supposing that you have completed your creation, you found it quite easy to accomplish, so you decided to make plenty of them and run a profitable business. Good for you, great idea! <br><br>I have to inform you that you are going to need an accountant. He will keep the files of your purchases, sales etc. safe, so that you get organized, don't get into trouble, but also access all the critical information at any time.<br><br>Ta-da! Let me introduce you to your accountant, Mr Server! This program running on a computer keeps and serves all the data needed. PHP helps to communicate with the server. It's just like the accountant's mobile device. Last but not least, use MySQL to get access to the accountant's bookcase! </p>
      </div>
      <div class="col-md-6">
        <img src="img/server.png" class="big-image" alt="A business man keeping files on several computer servers">
      </div>
    </div>
  </div>
  <div class="courses">
    <div class="container">
        <div class="col-md-12 intro">
          <h1>Premium</h1>
          <h4><span class="basic-color">Admission required!</span> Work your magic with server-side technologies. <a href="signup.php" class="basic-color">Sign up</a> here.</h4>
        </div>
    </div>
    <div class="container">
      <div class="col-md-6 course">
        <img class="course-image" src="img/servers.png" alt="Web servers" height="200" width="200">
        <h1>PHP</h1>
        <h6>Hypertext Preprocessor</h6>
        <p class="information">A scripting language, which runs on a web server. Data are interpreted and then served to the browser. A powerful tool for making dynamic and interactive web pages.</p>
        <p><a class="btn btn-danger" href="login.php">Practice <i class="fa fa-arrow-right"></i></a></p>
      </div>
      <div class="col-md-6 course">
        <img class="course-image" src="img/database.png" alt="Database icon" height="200" width="200">
        <h1>MySQL</h1>
        <h6>Structured Query Language</h6>
        <p class="information">A standard language for storing, manipulating and retrieving data in databases.</p>
        <p><a class="btn btn-primary" href="login.php">Practice <i class="fa fa-arrow-right"></i></a></p>
      </div>
    </div>
  </div>

  <?php require 'includes/footer.php'; ?>

</body>
</html>
