<!DOCTYPE html>
<html lang="en-US">
  <head>
    <!-- Καθολική ετικέτα ιστοτόπου (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-122151990-1');
    </script>
    <meta charset="utf-8">
    <title>CodeTrip</title>
    <meta name="author" content="Anna Petrikoglou">
    <meta name="description" content="A code playground for practising on the web technologies HTML, CSS, JavaScript, PHP and MySQL, providing additional support material, such as articles, examples, notes and illustrative graphics.">
    <meta name="keywords" content="HTML, CSS, JavaScript, js, php, mySQL, code playground">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge"> ???
    <link href="https://codetrip.gr" rel="canonical">-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <!--<link rel="shortcut icon" type="image/x-icon href="favicon.ico"">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/style.css">
    <!--<script src="lib/codemirror.js"></script>
    <link rel="stylesheet" href="lib/codemirror.css">
    <script src="mode/javascript/javascript.js"></script>
    <script src="mode/css/css.js"></script>-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ace.js"></script>
    <script src="ace/ext-language_tools.js"></script>
    <script src="https://ajaxorg.github.io/ace-builds/src/ace.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">CodeTrip</a>
        </div>
        <div id="myNavbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../web.php">Web</a></li>
            <?php
              if (isset($_SESSION['u_id'])) {
                echo '<li><a href="../php.php">PHP</a></li>
                      <li><a href="../sql.php">MySQL</a></li>';
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
                echo '<li><a href="../projects.php">Projects</a></li>
                      <li><a href="../account.php">Account</a></li>
                      <li><a href="system/logout.php">Logout</a></li>';
              } else {
                echo '<li><a href="../signup.php">Sign Up</a></li>
                      <li><a href="../login.php">Login</a></li>';
              }
              ?>
              <li><a href="../about.php">Info</a></li>
          </ul>
        </div>
      </div>
    </nav>
