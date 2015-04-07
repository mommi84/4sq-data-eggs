<?php

	include "secret/app_codes.php";
	include "commons.php";

	include "header.php";

	if(!isset($_GET["code"]) && !isset($_GET["token"]))
		include "logged_out.php";
	else
		include "logged_in.php";

	include "footer.php";
