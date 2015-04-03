<div id="content" class="container well">
	<div class="centered-text">
<?php

	if(!isset($_GET["token"])) {
		$code = $_GET["code"];
		$oauth = json_decode(@file_get_contents("https://foursquare.com/oauth2/access_token?client_id=$clid&client_secret=$clse&code=$code&grant_type=authorization_code&redirect_uri=$url"),true);
		$token = $oauth["access_token"];
	} else {
		$token = $_GET["token"];
	}

	echo "<p>Token is $token</p>";
	

?>
		<div id="buttons" class="btn-group">
			<a class="btn btn-primary btn-lg lato-bold" role="button" href="./checkins.php?token=<?php echo $token; ?>"><span class="glyphicon glyphicon-cloud-download"></span>&nbsp;&nbsp;Download check-ins</a>
		</div>
	</div>
</div>
