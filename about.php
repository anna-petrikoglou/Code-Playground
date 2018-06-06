<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

?>

<main>
  <div class="container" id="home-menu">
    <div class="row intro">
      <h1>About</h1>
      <h4>Let us introduce the code playground!<br>Anything you're gonna need is stated here.</h4>
    </div>
    <!--<p>A code map for the codeland!</p>-->
  </div>
  <!--
  https://www.w3schools.com/howto/howto_js_scroll_to_top.asp
  <a href="#home-menu"><span class="glyphicon glyphicon-menu-up move-up-button basic-color"></span></a>-->
  <div class="presentation about-start">
    <div class="container">
      <div class="col-md-6 story">
        <h2>A Little Story</h2>
        <p>It all started as a master thesis. Back in 2015, a complete novice computer science student had to elaborate an educational environment, which would be used by others, insterested in getting familiar with web technologies. It is what we call, in other words, a code playground...</p>
        <p>Both client-side and server side technologies?! Uh-huh. In order to make that feasible, there was a desperate need to cut it down into smaller parts and divide functionalities. This is how every complicated problem should be solved. Research and development. One step at a time. Somehow that way, we came to this outcome. Good or bad, this is it!</p>
        <?php
          if (empty($_SESSION['u_id'])) {
            echo '<p>Are you a newbie, too?<a href="signup.php" class="basic-color"> Sign up</a> and discover the map to codeland!</p>';
          } else {
            echo '<p>Are you a newbie, too? Create your first project<a href="web.php" class="basic-color"> here</a>! Or get some ideas<a href="blog.php" class="basic-color"> here</a>!</p>';
          }
        ?>
      </div>
      <div class="col-md-4 about rotate">
        <img src="img/magnifier.png" alt="A magnifying glass." id="magnifier">
      </div>
      <div class="col-md-2 about-control-panel">
        <ul class="nav">
          <li><a href="#services" class="basic-color"> Services</a></li>
          <li><a href="#performance" class="basic-color"> Performance</a></li>
          <li><a href="#functionalities" class="basic-color"> Functionalities</a></li>
          <li><a href="#support" class="basic-color"> Support</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="presentation about-services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Services</h1>
        </div>
      </div>
      <div class="col-md-6 about">
        <img src="img/slide.png" alt="A chart with connected dots.">
      </div>
      <div class="col-md-6">
        <div class="service-checkboxes">
          <div class="row service-checkbox">
            <img src="img/check.png" alt="checkbox">
            <p> Use both client-side and server-side technologies.</p>
          </div>
          <div class="row service-checkbox">
            <img src="img/check.png" alt="checkbox">
            <p> Save and retrieve multiple projects.</p>
          </div>
          <div class="row service-checkbox">
            <img src="img/check.png" alt="checkbox">
            <p> Edit existing templates just for practice.</p>
          </div>
          <div class="row service-checkbox">
            <img src="img/check.png" alt="checkbox">
            <p> Find helpful notes and articles.</p>
          </div>
          <div class="row service-checkbox">
            <img src="img/check.png" alt="checkbox">
            <p> Also, available in the greek language.</p>
          </div>
      </div>
      </div>
    </div>
  </div>
  <div class="presentation about-performance" id="performance">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Performance</h1>
        </div>
      </div>
      <div class="col-md-6 story">
        <p>We aim to provide efficient services and consistent access to up to date material. For these reasons, we maintain, debug and renew the website on a regular basis. However, there may still be a lot of malfunctions. We highly recommend that you use the Google Chrome or the Mozilla Firefox browser.</p><p>Security scores do not denote vulnerabilities, regarding sensitive data. We would like to assure you that any personal information we store is highly protected and safe. In order to report issues while running the app, please complete the contact form provided below or click <a href="https://docs.google.com/forms/d/e/1FAIpQLScKWPsrGPX-fWZ3qgZBKEKuW0FMkb4vWP9WZcjwZufBwmdx1Q/viewform?usp=sf_link" target="_blank" class="basic-color">here</a>.</p>
        <p><span class="basic-color">Secret! </span>As a matter of fact, we have never taken these tests... (Oops!) The following scores simply represent our perception and our estimations on the satisfaction level of each aspect.</p>
        <!--<img src="img/analytics.png" alt="Bars of analysis and arrows.">-->
      </div>
      <div class="col-md-6">
        <div class="test-bars">
          <h2 id="test-scores">Test Scores</h2>
          <div><p>Velocity<span class="basic-color percentage">62%</span></p></div><div class="perform-bars"><div class="perform-bar" id="perform-bar-1a"></div><div class="perform-bar" id="perform-bar-1b"></div></div>
          <div><p>Trustworthiness<span class="basic-color percentage">85%</span></p></div><div class="perform-bars"><div class="perform-bar" id="perform-bar-2a"></div><div class="perform-bar" id="perform-bar-2b"></div></div>
          <div><p>Browser Compatibility<span class="basic-color percentage">71%</span></p></div><div class="perform-bars"><div class="perform-bar" id="perform-bar-3a"></div><div class="perform-bar" id="perform-bar-3b"></div></div>
          <div><p>Security<span class="basic-color percentage">53%</span></p></div><div class="perform-bars"><div class="perform-bar" id="perform-bar-4a"></div><div class="perform-bar" id="perform-bar-4b"></div></div>
          <p></p>
        </div>
      </div>
    </div>
  </div>
  <div class="presentation about-functionalities" id="functionalities">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Functionalities</h1>
        </div>
      </div>
      <div class="col-md-6 about">
        <img src="img/web-dev.png" alt="Fixing a code editor.">
      </div>
      <div class="col-md-6 story">
        <p>Here we go! You may have come across plenty of code playgrounds. Our goal is to</p>
        <p>Find useful articles and links to valiable resources. Experiment with various methods and styles. Discover cool tricks and techniques.</p>
      </div>
    </div>
  </div>
  <div class="presentation about-support" id="support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Support</h1>
        </div>
      </div>
      <div class="col-md-6 story">
          <p>Imagine you have got some plain materials... lots of metal and plastic or wooden parts, screws or nails and cables or ropes. Now, you would like to make something out of these. But, you don't know how. Would it be simple or complicated, colorful or black-and-white, big or small, static or active?</p>
          <p class="signature"></p>
      </div>
      <div class="col-md-6 about">
        <img src="img/user.png" alt="A targeted user.">
      </div>
    </div>
  </div>

<?php require 'includes/footer.php'; ?>

</body>
</html>
