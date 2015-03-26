
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>4SQ Data Eggs | Get your Foursquare user data.</title>
<!-- <link rel="shortcut icon" href="venuecleaner-logo.jpg" type="image/x-icon"> -->
</head>
<body>

<?php

$url = urlencode("http://www.thesmartpuzzle.com/4sq-data-eggs/");

include "secret/app_codes.php";

if(!isset($_GET["code"]) && !isset($_GET["token"])) {
	echo '<div class="fields" style="position: absolute; top: 120px; left:50%; margin-left: -400px; width: 800px; height: 200px; background-color: #ffffff; border: 1px solid #888; box-shadow: 3px 3px 3px #888;"><div style="height: 40px;"></div>Are you a Foursquare user?<p><a href="'."https://foursquare.com/oauth2/authenticate?client_id=$clid&response_type=code&redirect_uri=$url".'"><img src="connect-blue.png" border="0" alt="Login with Foursquare"/></a></div><div style="position: absolute; top: 340px; left:50%; margin-left: -400px; width: 800px; height: 100px;">
4SQ Data Eggs &mdash; Developed by <a href="https://foursquare.com/mommi84">mommi84</a> for Easter 2015 &mdash; All content is &copy; foursquare
</div>';
	
} else {
	if(!isset($_GET["token"])) {
		$code = $_GET["code"];
		$oauth = json_decode(@file_get_contents("https://foursquare.com/oauth2/access_token?client_id=$clid&client_secret=$clse&code=$code&grant_type=authorization_code&redirect_uri=$url"),true);
		$token = $oauth["access_token"];
	} else {
		$token = $_GET["token"];
	}

echo "Token is $token";

?>

</body>
</html>

<?php
}
?>
