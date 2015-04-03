<?php
	if(!isset($_GET["token"]))
		die("Unauthorized.");
	else
		$token = $_GET["token"];
	
	$offset = 0;
	$asd = array();

	do {
		$checkins = json_decode(@file_get_contents("https://api.foursquare.com/v2/users/self/checkins?oauth_token=$token&sort=oldestfirst&limit=250&offset=$offset&v=20150327"), true);
		// echo str_replace("\n", "<br>", print_r($checkins, true));
		
		$items = $checkins["response"]["checkins"]["items"];
		foreach($items as $item) {
			$asd[] = $item["venue"]["name"];
		}

		$offset += 250;
 		
	} while(count($items) == 250);
	
	foreach($asd as $a)
		echo "$a<br/>";

?>
