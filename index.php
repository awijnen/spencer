<?php include 'classes.inc'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<link href="/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="/stylesheets/spencer.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
  <!--[if IE]>
  	<link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <![endif]-->
	<link rel="stylesheet" type="text/css" href="js/slick/slick.css" />
  <title>Spencer | Your mobile workplace assistant</title>
  <link rel="shortcut icon" href="favicon.ico" />
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/spencer.js"></script>
</head>
<body>
<?php 
  $image = new Image;
  echo $image->getImages();
?>
<header> 
  <div id="navigation-wrapper">
    <div id="logo">
      <svg class="icon logo-spencer" data-0="fill:rgb(255,255,255);" data-300="fill:rgb(58,172,210);">
        <use xlink:href="#logo-spencer">
      </svg>
    </div>
    <nav id="navigation">
      <ul>
        <li><a href="#">problem</a></li>
        <li><a href="#">solution</a></li>
        <li><a href="#">references</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">jobs</a></li>
        <li><a href="#">contact</a></li>
      </ul>
    </nav>
  </div>
</header>

<div id="body-wrapper">
  <div class="content-container blue">
    <div id="intro" class="content">
      <div class="col-left">
        <h1>Spencer is your mobile workplace assistant</h1>
        <p>Making your workplace community more engaged, efficient and productive by making the tools you trust work together.</p>
      </div>
      <div class="col-right">
        <img src="images/smartphone.png" alt="smartphone">
      </div>
    </div>
  </div>
	<div class="content-container grey">
		<div id="testimonials" class="carousel content">
      <div class="carousel-slide">
        <h1>TEST 1</h1>
      </div>
      <div class="carousel-slide">
        <h1>TEST 2</h1>
      </div>
    </div>
	</div>
</div>

</body>
</html>
