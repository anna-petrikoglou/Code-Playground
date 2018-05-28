<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

?>

<main>
  <div class="container" id="home-menu">
    <div class="row intro">
      <h1>About</h1>
      <h4>Everything you need to know!</h4>
    </div>
    <!--<p>A code map for the codeland!</p>-->
  </div>
  <!--
  https://www.w3schools.com/howto/howto_js_scroll_to_top.asp
  <a href="#home-menu"><span class="glyphicon glyphicon-menu-up move-up-button basic-color"></span></a>-->
  <div class="presentation about-start">
    <div class="container">
      <div class="col-md-6 story">
          <p>It all started as a master thesis. This code playground was the subject of the desired dissertation. A complete novice computer science student (with a bachelor degree on economics) had to elaborate an educational environment, which would be used by others, insterested in getting familiar with web technologies. In other words, </p>
          <?php
            if (empty($_SESSION['u_id'])) {
              echo '<p>Are you a newbie, too?<a href="signup.php" class="basic-color"> Sign up</a> to discover the map to codeland!</p>';
            }
          ?>
      </div>
      <div class="col-md-3 about rotate">
        <img src="img/magnifier.png" alt="A magnifying glass.">
      </div>
      <div class="col-md-3">
        <ul class="nav about-control-panel">
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
      <div class="col-md-6 about">
        <img src="img/slide.png" alt="A chart with connected dots.">
      </div>
      <div class="col-md-6">
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
  <div class="presentation about-performance" id="performance">
    <div class="container">
      <div class="col-md-6 story">
          <p>We aim to provide efficient services and consistent access to up to date material. For these reasons, we maintain, debug and renew the website on a regular basis. However, there may still be a lot of malfunctions. We highly recommend that you use the Google Chrome or the Mozilla Firefox browser.</p><p>In order to report issues while running the app, please complete the contact form provided below or click <a href="https://docs.google.com/forms/d/e/1FAIpQLScKWPsrGPX-fWZ3qgZBKEKuW0FMkb4vWP9WZcjwZufBwmdx1Q/viewform?usp=sf_link" target="_blank" class="basic-color">here</a>.</p>
      </div>
      <div class="col-md-6 about">
        <img src="img/analytics.png" alt="Bars of analysis and arrows.">
      </div>
    </div>
  </div>
  <div class="presentation about-functionalities" id="functionalities">
    <div class="container">
      <div class="col-md-6 about">
        <img src="img/web-dev.png" alt="Fixing a code editor.">
      </div>
      <div class="col-md-6">
      </div>
    </div>
  </div>
  <div class="presentation about-support" id="support">
    <div class="container">
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
