<?php

	set_time_limit(0);

	include "commons.php";

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

function deleteDirectory($dir) {
	if (!file_exists($dir)) {
		return true;
	}

	if (!is_dir($dir)) {
		return unlink($dir);
	}

	foreach (scandir($dir) as $item) {
		if ($item == '.' || $item == '..') {
			continue;
		}

		if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
			return false;
		}
	}

	return rmdir($dir);
}

if(!isset($_GET["token"]))
	die("Unauthorized.");
else
	$token = $_GET["token"];

mkdir($token);

$fgt = file_get_contents("$home/checkins.php?token=$token");

file_put_contents("$token/index.html", $fgt);

# create new zip opbject
$zip = new ZipArchive();

# create a temp file & open it
$tmp_file = tempnam(sys_get_temp_dir(), '');
$zip->open($tmp_file, ZipArchive::CREATE);

$zip->addFromString("index.html", $fgt);

# loop through each file
foreach(scandir($token) as $file) {

	if ($file == '.' || $file == '..' || $file == 'index.html') {
	    continue;
	}

	# download file
	$download_file = file_get_contents($home.$token."/".$file);

	#add it to the zip
	$zip->addFromString(basename($file), $download_file);

}

# close zip
$zip->close();

# send the file to the browser as a download
header('Content-disposition: attachment; filename=checkins-html.zip');
header('Content-type: application/zip');
readfile($tmp_file);

deleteDirectory($token);
