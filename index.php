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
        <li><a href="#">Problem</a></li>
        <li><a href="#">Solution</a></li>
        <li><a href="#">References</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Jobs</a></li>
        <li><a href="#">Contact</a></li>
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
        <div id="intro-buttons">
          <a id="play-video" href="#">PLAY VIDEO</a>
          <a id="read-announcement" href="#">READ ANNOUNCEMENT</a>
        </div>
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
      <div class="content">
        <h3>Spencer’s resumé</h3>
        <div id="resume" class="resume-container">
          <div class="col-left">
            <div class="col-content">
              <h4>Modular approach</h4>
              <p>Spencer is modular. He adapts to the tools your company uses, with a fair pricing approach to make sure you only pay for what you need.</p>
            </div>
          </div>
          <div class="col-right">
            <div class="col-content">
              <h4>Smart, personal, contextual</h4>
              <p>Spencer is every employee’s indispensable personal assistant. He knows what they want before they do, and presents them with the info they need, when they need it.</p>
            </div>
          </div>

          <div class="col-left">
            <div class="col-content">
              <h4>Streamlined workflows</h4>
              <p>Spencer is an assistant, not a dictator. He functions as a layer between a team and its tools to streamline the flow of actions and information – he can’t make important decisions on his own.</p>
            </div>
          </div>
          <div class="col-right">
            <div class="col-content">
              <h4>Always available</h4>
              <p>Spencer never lets you down. We have duplicated all system-critical components – VPN, application servers, our internal staging and production environments, etc. – to make sure that downtime becomes a thing of the past.</p>
            </div>
          </div>

          <div class="col-left">
            <div class="col-content">
              <h4>Secure infrastructure</h4>
              <p>Spencer respects your sensitive data, and your employees’ privacy. Everything is secured and encrypted according to industry standards.</p>
            </div>
          </div>
          <div class="col-right">
            <div class="col-content">
              <h4>Tailored to your organization</h4>
              <p>Spencer adapts to the needs of your enterprise, respecting operational flows and procedures – and your style manual.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="content-container">
      <div class="content references">
        <div id="references">
          <div id="references-navigation">
            <div class="col-1">
              <a href="#" id="ref-proximus" class="active"></a>
            </div>
            <div class="col-2">
              <a href="#" id="ref-telenet"></a>
            </div>
            <div class="col-3">
              <a href="#" id="ref-deme"></a>
            </div>
          </div>
          <div id="references-body">
             <div class="col-1">
              proximus
            </div>
            <div class="col-2">
              img
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="content-container blue">
      <div class="content">
        <h3>A five-step plan to get Spencer integrated in your enterprise</h3>
        <div id="five-step" class="five-step-container">
          <div class="col-left">
            <div class="col-content">
              <h4>Existing architecture & roadmap</h4>
              <p>Spencer hooks into your company’s existing toolchain. To do this properly, we will assess together what services you use and create a roadmap to determine which ones Spencer should support, and when.</p>
            </div>
          </div>
          <div class="col-right">
            <div class="col-content">
              <h4>Technical assessment</h4>
              <p>We’ll sit together to discuss how Spencer can be optimally integrated with the company’s existing security measures and on-premise infrastructure.</p>
            </div>
          </div>

          <div class="col-left">
            <div class="col-content">
              <h4>Implementation & branding</h4>
              <p>Using the roadmap that we defined early in the process, we’ll select the modules that Spencer will activate first and start designing the app to fit your brand.</p>
            </div>
          </div>
          <div class="col-right">
            <div class="col-content">
              <h4>Deployment & testing</h4>
              <p>When the necessary modules are in place, we can move on to User Acceptance Testing to ensure everything works smoothly, before deploying the finished application.</p>
            </div>
          </div>

          <div class="col-left">
            <div class="col-content">
              <h4>Maintenance & support</h4>
              <p>After the application is released to your employees, Spencer will follow up on its usage. We’ll measure both the performance increase of the employees that use Spencer, and the impact this might have on your infrastructure.</p>
            </div>
          </div>
          <div class="col-right">
            <div class="col-content">
              <h4></h4>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="content-container">
      <div class="content">
        <h3>Hatched & nurtured at November Five, Spencer is ready to fly!</h3>
        <p>Spencer can count on his team. We’re a perfect mix: highly skilled developers, excited to bring their tech chops to the modern workplace; designers and customer experts who know how to put the user first; and a leadership team with the entrepreneurial and corporate experience to take Spencer to the top. And of course, we can always count on the solid expertise of November Five’s directors.</p>
        <div id="team" class="container-2">
          <div class="col-1 maarten">
            <div class="team-name">Maarten Raemdonck</div>
            <div class="team-position">co-CEO - Product Director</div>
          </div>
          <div class="col-2">
            <div class="team-name">Tom Vroemans</div>
            <div class="team-position">co-CEO - Founder & Chairman</div>
          </div>
          <div class="col-1">
            <div class="team-name">Robin Van Den Bergh</div>
            <div class="team-position">Client Services Manager</div>
          </div>
          <div class="col-2">
            <div class="team-name">Anthony Wijnen</div>
            <div class="team-position">Senior Product Manager</div>
          </div>
          <div class="col-1">
            <div class="team-name">Yannick Bontemps</div>
            <div class="team-position">Senior iOS Developer</div>
          </div>
          <div class="col-2">
            <div class="team-name">Christophe Smet</div>
            <div class="team-position">Senior Android Developer</div>
          </div>
          <div class="col-1">
            <div class="team-name">Kevin T’Syen</div>
            <div class="team-position">Senior Back-end Developer</div>
          </div>
          <div class="col-2">
            <div class="team-name">Tom De Laet</div>
            <div class="team-position">Senior Experience Designer</div>
          </div>
          <div class="col-1">
            <div class="team-name">Maarten Raemdonck</div>
            <div class="team-position">co-CEO - Product Director</div>
          </div>
          <div class="col-2">
            <div class="team-name">Tom Vroemans</div>
            <div class="team-position">co-CEO - Founder & Chairman</div>
          </div>

        </div>
      </div>
    </div>
    <div class="content-container dark">
      <div class="content">
        <h3>Spencer is hiring!</h3>
        <p>Does this sound like your kind of team? Spencer is looking for more help! Take a look at our openings, and get in touch...</p>
        <a href="#">JOIN THE TEAM</a>
      </div>
    </div>

    <div class="content-container blue">
      <div id="contact" class="content">
        <h3>Want to meet Spencer?</h3>
        <p>Do you think your company could use Spencer’s help? Fill out the form below and he’ll get in touch with you to go over all the details. We’d love to hear from you!</p>
        <div class="container-2">
          <div class="col-1">
            <label>Name</label>
            <input name="input-name" type="text">
          </div>
          <div class="col-2">
            <div class="container-2 clean">
              <div class="col-1">
                <label>Company</label>
                <input name="input-company" type="text">
              </div>
              <div class="col-2">
                <label>Number of employees</label>
                <input name="input-employees" type="text">
              </div>
            </div>
          </div>
          <div class="col-1">
            <label>Function</label>
            <input name="input-function" type="text">
          </div>
          <div class="col-2">
            <label>Email address</label>
            <input name="input-mail" type="text">
          </div>
        </div>
        <a href="#">SEND DEMO REQUEST</div>
      </div>
    </div>

    <div class="content-container">
      <div class="content">
        <div id="footer">
          <div class="col-1">
            --logo
          </div>
          <div class="col-2">
            Antwerp HQ
          </div>
          <div class="col-3">
            Nordics
          </div>
          <div class="col-4">
            --social
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
