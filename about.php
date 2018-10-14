<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

?>

<script>
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
      document.getElementById("scroll-to-top").style.display = "block";
      document.getElementById("go-to-blog").style.display = "block";
      document.getElementById("go-to-tools").style.display = "block";
      document.getElementById("go-to-help").style.display = "block";
    } else {
      document.getElementById("scroll-to-top").style.display = "none";
      document.getElementById("go-to-blog").style.display = "none";
      document.getElementById("go-to-tools").style.display = "none";
      document.getElementById("go-to-help").style.display = "none";
    }
  }
</script>

<main>
  <div class="container" id="home-menu">
    <div class="row intro">
      <h1>Info</h1>
      <h4><!--Let us introduce <span class="basic-color">codeTrip</span>!--><i class="fa fa-info-circle"></i></h4><h6 style="line-height:1.5em">Anything you're gonna need to know is stated here.<br>And <a href="/help.php">there</a>!</h4>
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
        <p>It all started as a master thesis. Back in 2018, a complete novice computer science student had to elaborate an educational environment, which would be used by others, interested in getting familiar with web technologies. It is what we call, in other words, a code playground.</p>
        <p>Both client-side and server-side technologies?! Uh-huh. In order to make that feasible, there was a desperate need to cut it down into smaller parts and divide functionalities. This is how every complicated problem should be solved. Research and development. One step at a time. Somehow that way, we came to this outcome. Good or bad, this is it!</p>
        <?php
          if (empty($_SESSION['u_id'])) {
            echo '<p>Are you a newbie, too?<a href="signup.php" class="basic-color"> Sign up</a> and discover the map to codeland!</p>';
          } else {
            echo '<p>Are you a newbie, too? Create your first project<a href="web.php" class="basic-color"> here</a>! Or get some ideas<a href="blog.php" class="basic-color"> here</a>!</p>';
          }
        ?>
      </div>
      <div class="col-md-4 about rotate">
        <img src="img/magnifier.png" alt="Magnifying glass" id="magnifier">
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
  <div class="move-to" id="go-to-tools" style="display: none;"><a href="account.php"><img src="img/tool.png" alt="Tool icon" title="Settings"></a></div>
  <div class="move-to" id="go-to-blog" style="display: none;"><a href="blog.php"><img src="img/chat.png" alt="Chat icon" title="Blog"></a></div>
  <div class="move-to" id="go-to-help" style="display: none;"><a href="help.php"><img src="img/help.png" alt="Question mark" title="Help"></a></div>
  <div class="move-to" id="scroll-to-top" style="display: none;"><a href="#home-menu"><img src="img/arrow.png" alt="Top arrow" title="Top"></a></div>
  <div class="presentation about-services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Services</h1>
        </div>
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
            <p> View explanatory animations.</p>
          </div>
      </div>
      </div>
      <div class="col-md-6 about">
        <img src="img/puzzle.png" alt="Puzzle pieces" >
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
        <p>We aim to provide efficient services and consistent access to the up-to-date material. For these reasons, we maintain, debug and renew the website on a regular basis. However, there may still be lots of malfunctions. We highly recommend that you use the Google Chrome, the Opera or the Mozilla Firefox browser, which have already been tested.</p><p>Security scores do not denote vulnerabilities, regarding sensitive data. We would like to assure you that any personal information we store is highly protected and safe. To report issues while running the app, please complete the contact form provided below or click <a href="https://docs.google.com/forms/d/e/1FAIpQLScKWPsrGPX-fWZ3qgZBKEKuW0FMkb4vWP9WZcjwZufBwmdx1Q/viewform?usp=sf_link" target="_blank" class="basic-color">here</a>.</p>
        <p><span class="basic-color">Secret! </span>As a matter of fact, we have never taken these tests. (Oops!) The following scores simply represent our perception and estimations on the satisfaction level of each aspect. But, trust me. We are not that indulgent!</p>
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
        <img src="img/study.png" alt="A pencil, a clock, a lamp, a screen, a document, a magnifier and a loudspeaker" style="opacity: 1;">
      </div>
      <div class="col-md-6 story">
        <p>Here we go! You may have come across plenty of code playgrounds. Our goal is to offer you a comprehensive understanding of how fundamental web technologies operate, interact and shape entire applications and websites. Ok, you have to do most of it by yourself. But, you have valuable development tools!</p>
        <p>Learn how to create static and dynamic web pages, add functionalities, enhance content, make responsive designs and much more. Savvy client - server communication and database management.</p>
        <p>Find useful articles and links to valuable resources. Experiment with various methods and styles. Discover cool tricks and techniques. Get used to searching, reading and practising new things!</p>
        <!-- Additional material | Blog -->
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
        <p>If you still have unanswered questions you can also visit the <a href="./help.php">help</a> section or contact us at <span class="basic-color">info@codetrip.gr</span>! We will be happy to serve you. We love to receive your remarks on CodeTrip and your suggestions for further improvements.</p>
        <p>By the way, we would like to apologise in advance for any inconvenience and urge you to report any problems you may encounter. Help us to become better! Don't forget to sign up and enjoy the whole CodeTrip experience. Have fun and build awesome stuff!</p>
        <p id="signature">
          Kind thanks,<br><i style="font-size: 10px;">The CodeTrip Team</i>
        </p>
        <p>PS: We could review together some of the following points, or else!</p>
        <!--<div class="service-checkboxes" style="padding: 10px; 0; height: 310px;">-->
          <div class="row service-checkbox" style="padding-left: 10px;">
            <img src="img/check.png" alt="checkbox">
            <p> UI & UX</p>
          </div>
          <div class="row service-checkbox" style="padding-left: 10px;">
            <img src="img/check.png" alt="checkbox">
            <p> Services & Enhancement</p>
          </div>
          <div class="row service-checkbox" style="padding-left: 10px;">
            <img src="img/check.png" alt="checkbox">
            <p> Performance & Error Handling</p>
          </div>
          <div class="row service-checkbox" style="padding-left: 10px;">
            <img src="img/check.png" alt="checkbox">
            <p> Efficiency & Effectiveness</p>
          </div>
          <div class="row service-checkbox" style="padding-left: 10px;">
            <img src="img/check.png" alt="checkbox">
            <p> Security Issues</p>
          </div>
        <!--</div>-->
      </div>
      <div class="col-md-6 about">
        <img src="img/company.png" alt="Four colleagues hi five">
      </div>
    </div>
  </div>

<?php require 'includes/footer.php'; ?>

</body>
</html>
