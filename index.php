<?php

	include "secret/app_codes.php";
	$url = urlencode("http://www.thesmartpuzzle.com/4sq-data-eggs/");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>4SQ Data Eggs | Get your Foursquare user data.</title>
	<!-- <link rel="shortcut icon" href="dataeggs-logo.png" type="image/x-icon"> -->
		<script>
				// insert Analytics
		</script>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<style type="text/css">
	#content { margin-top: 60px; }
	.centered-text { text-align: center; }
	.jumbotron {
		background-size: cover;
		background-image: url("background.png");
		background-position: bottom;
		/* The url is relative to the document, not to the css file! */
		/* Prefer absolute urls to avoid confusion. */
		-ms-behavior: url("css/backgroundsize.min.htc");
		color: #ffffff;
		text-shadow: 1px 1px 0px #333333;
		box-shadow: 0px -3px 7px rgba(0, 0, 0, 0.2) inset;
		height: 300px;
	}
	#heading h2 { padding-top: 40px; }
	</style>
		<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
				<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/bootstrap-slider.js"></script>
</head>
<body>

	<div class="navbar navbar-fixed-top" role="navigation" id="header">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.php">(&#x2b2e;&#x2b2f;) 4SQ Data Eggs</span></a>
		</div>
		<div class="navbar-collapse collapse">
			  <ul class="nav navbar-nav">
				<li><a class="align-text" href="index.php">Home</a></li>
				<li><a class="align-text" href="https://github.com/mommi84/4sq-data-eggs">Source code</a></li>
				<li><a class="align-text" href="about.php">About</a></li>
			  </ul>
		</div><!--/.navbar-collapse -->
	  </div>
	</div>

<?php

	if(!isset($_GET["code"]) && !isset($_GET["token"]))
		include "logged_out.php";
	else
		include "logged_in.php";

?>

<div class="container">
	  <hr>
	  <footer>
		<p><a href="https://github.com/mommi84/4sq-data-eggs" target="_blank">4SQ Data Eggs</a> &mdash; Developed by <a href="http://tommaso-soru.it" target="_blank">mommi84</a> during Easter 2015 &mdash; All content is &copy; foursquare</p>
	  </footer>
</div><!-- end #content -->

</body>
</html>

