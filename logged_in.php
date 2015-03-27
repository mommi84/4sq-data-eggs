<div id="content" class="container well">
<?php

	if(!isset($_GET["token"])) {
		$code = $_GET["code"];
		$oauth = json_decode(@file_get_contents("https://foursquare.com/oauth2/access_token?client_id=$clid&client_secret=$clse&code=$code&grant_type=authorization_code&redirect_uri=$url"),true);
		$token = $oauth["access_token"];
	} else {
		$token = $_GET["token"];
	}

	echo "Token is $token";

?>
</div>
