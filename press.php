<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Solar SpeedRack | Press</title>
    <meta name= "description" content="Solar SpeedRack products are made universal to reduce the cost, time, and hardware used in the installation of solar systems.">
    <meta name="keywords" content="Solar Racking,Solar Installation, Solar Panels Installation, PV Racking">
    <meta name="viewport" content="width=960, minimum-scale=0.2, maximum-scale=1">
    <link href="stylesheet.css" rel="stylesheet">
    <meta name="robots" content="INDEX,FOLLOW" />
        <link rel="icon" 
      type="image/x-icon" 
      href="SSR_Favicon_32x32.ico">
	<meta name="google-site-verification" content="TTJWyE_bod7ROnKXlQPCgt6d9PRZ_rYW6qDAEVQeXbg" />
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->              
  </head>
  <body>
<header>
  <div id="logo">
<a href="index"><img src="images/logo.png" alt="logo" /></a></div>
<div id="menu">
<nav id="nav">
  <li><a href="speedlatch#content-center">Residential</a></li>
  <li><a href="speedbow#content-center">Commerical</a></li>
  <li><a href="speedmount#content-center">Utility</a></li>
  <li><a href="speedclips#content-center">Accessories</a></li>
  <li><a href="contact#content-center">Contact</a></li>
  <li><a href="press">News</a></li>
</nav>
</div>
</header>
<div id="press">
<h1>Solar SpeedRack News</h1>
<br />
<?PHP
error_reporting (E_ALL ^ E_NOTICE);

if($_GET['go'] == "" or $_GET['go'] == "news"){
   include("news/show_news.php");
}
?>

      <hr class="featurette-divider">
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 SolarSpeedRack, LLC &middot; <a href="index">About</a> &middot; <a href="contact#content-center">Contact</a></p>
      </footer>
    </div>
    <script src="//static.getclicky.com/js" type="text/javascript"></script>
    <script src="js/site.js"></script>
  </body>
</html>
