<?php

	set_time_limit(0);

	include "commons.php";

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

	function saveImage($name, $u) {
		file_put_contents($name, file_get_contents($u));
	}

	if(!isset($_GET["token"]))
		die("Unauthorized.");
	else
		$token = $_GET["token"];

	$offset = 0;
	$asd = array();
	require('export/template_head.php');

	do {
		// DEBUG OPTION: &afterTimestamp=1420416000
		$checkins = json_decode(@file_get_contents("https://api.foursquare.com/v2/users/self/checkins?oauth_token=$token&sort=newestfirst&limit=250&offset=$offset&v=20150327"), true);
		// echo str_replace("\n", "<br>", print_r($checkins, true));

		$items = $checkins["response"]["checkins"]["items"];
		foreach($items as $checkin) {
			$photos = array();
			foreach($checkin["photos"]["items"] as $photo) {
				$imgurl = substr($photo["suffix"], 1);
				saveImage("$token/$imgurl", $photo["prefix"]."original".$photo["suffix"]);
				$photos[] = $imgurl;
			}
			$checkin["photos"]["items"] = $photos;

			require("export/template_checkin.php");
		}

		//break; //DEBUG!

		$offset += 250;

	} while(count($items) == 250);

	require('export/template_foot.php');
