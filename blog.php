<?php

require 'system/settings.php';
require 'includes/head.php';
require 'includes/nav.php';

?>

<main id="article-page">
  <div class="container" id="home-menu">
    <div class="row intro">
      <h1>Blog</h1>
      <h4><!--Becoming a web developer...--><i class="fa fa-info-circle"></i></h4><h6>Articles, links, notes & step-by-step guides!</h6>
    </div>
  </div>
  <div class="white-area">
    <div class="container">
      <div class="col-md-3">
        <div class="color-box-black"></div><h2> HTML</h2>
      </div>
      <div class="col-md-6">
          <div class="color-box color-box-yellow"></div><div class="color-box color-box-grey"></div><div class="color-box color-box-orange"></div><h2> CSS</h2>

      </div>
      <div class="col-md-3">
        <div class="color-box-white"></div><h2> JS</h2>
      </div>
    </div>
  </div>
  <div class="in-the-middle">
  </div>
  <div class="container all-article-section">
    <div class="row">
      <div class="col-md-4">
        <div class="article article-black">
          <a href="#"><h3>Font Styles</h3></a>
          <img src="img/articles/font.png" alt="A to Z font">
          <p>Explore awesome fonts and enhance your web page's appearance, by applying the coolest and cross-browser & device compatible typefaces.</p>
          <span class="glyphicon glyphicon-calendar"></span><span> Mon, 4 June</span><span class="read-article"><a href="#">Read This</a></span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="article article-orange">
          <a href="#"><h3>Grid VS Flexbox</h3></a>
          <img src="img/articles/example.png" alt="W3C Validator">
          <p>Get familiar with both grid and flexbox elements, notice the advantages of each layout and opt for the best one, depending on the case.</p>
          <span class="glyphicon glyphicon-calendar"></span><span> Fri, 1 June</span><span class="read-article"><a href="#">Read This</a></span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="article article-yellow">
          <a href="#"><h3>The Box Model</h3></a>
          <img src="img/articles/css-border-syntax.png" alt="W3C Validator">
          <p>Clarify the areas of content, padding, border and margin of an HTML element. Apply separate styles and fix its position into the document.</p>
          <span class="glyphicon glyphicon-calendar"></span><span> Wed, 23 May</span><span class="read-article"><a href="#">Read This</a></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="article article-white">
          <a href="#"><h3>JavaScript Loops</h3></a>
          <img src="img/articles/break-for-loop.jpg" alt="Furious user is going to break the loop with a hammer">
          <p>View all several kinds of JavaScript loops. Go through their parameters and syntax, find out their utility and learn how to avoid common mistakes. </p>
          <span class="glyphicon glyphicon-calendar"></span><span> Thu, 10 May</span><span class="read-article"><a href="#">Read This</a></span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="article article-grey">
          <a href="#"><h3>A CSS Statement</h3></a>
          <img src="img/articles/css-selectors.png" alt="CSS selectors">
          <p>See the format of a rule, with accurate and concise diagrams and templates. Distinguish selectors and check their validity, from specific to general.</p>
          <span class="glyphicon glyphicon-calendar"></span><span> Sat, 5 May</span><span class="read-article"><a href="#">Read This</a></span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="article article-black" id="last-article">
          <a href="#"><h3>HTML Structure</h3></a>
          <img src="img/articles/html.png" alt="HTML basic structure">
          <p>Learn about the most widely used HTML tags, the basic structure of an HTML document and how to validate it according to the W3C standards.</p>
          <span class="glyphicon glyphicon-calendar"></span><span> Tue, 17 April</span><span class="read-article"><a href="#">Read This</a></span>
        </div>
      </div>
    </div>
  </div>

<?php require 'includes/footer.php'; ?>

</body>
</html>
