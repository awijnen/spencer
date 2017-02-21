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
        <p>LOGO</p>
        <h2>Spencer helps us combine our critical applications into a single, easy-to-use mobile interface. The result: a more intiutive way-of-working, increased productivity and happier employees!</h2>
        <div class="testemonial-person">
          <b>Margaret Denis</b>
          <p>Director Digital Workplace Program</p>
        </div>
      </div>
      <div class="carousel-slide">
        <h1>TEST 2</h1>
      </div>
    </div>
	</div>

  <div class="content-container">
    <div id="oversaturated" class="content">
      <div class="oversat-container">
        <h3 class="h3-1">Large enterprises are oversaturated with tools</h3>
        <div class="col-left">
          <h4>They don't communicate</h4>
          <p>Your company spent time and energy selecting tools to get the job done – unfortunately, these tools don’t work together and fragmentize your information.</p>
        </div>
        <div class="col-right">
          <h4>They eat up time</h4>
          <p>A great tool can be an invaluable asset to your business. But making employees jump from tool to tool is a productivity killer – bringing you back to square one.</p>
        </div>
      </div>
      <div class="oversat-container">
        <h3 class="h3-2">Great consumer user experiences have raised the bar for business solutions</h3>
        <div class="col-left">
          <h4>Lack of conventions</h4>
          <p>Enterprise tools all have a different user experience, with few shared conventions. Each one asks fresh effort from your employees.</p>
        </div>
        <div class="col-right">
          <h4>Falling short of expectations</h4>
          <p>Employees personal tools and apps have given them high expectations regarding user experience. However, many business tools fall short, with complicated interfaces and inconsistent flows.</p>
        </div>
      </div>
    </div>

    <div class="content-container blue">
      TEST
    </div>

    <div class="content-container">
      <div id="cloud-layer" class="content">
        <div class="col-left">
          <h3>Spencer is an intelligent cloud layer that communicates with all your industry solutions.</h3>
          <p>Spencer is not an inventor: he taps into the data from your existing tools and presents that information in a more user-friendly way.</p>
        </div>  
        <div class="col-right">
          -- image --
        </div>
      </div>  
    </div>

    <div class="content-container grey">
      <div id="resume" class="content">
        <h3>Spencer’s resumé</h3>
      </div>
    </div>
  </div>
</div>

</body>
</html>
