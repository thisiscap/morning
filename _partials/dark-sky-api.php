<?php
	// Pull in your private API key to echo
	include('_partials/api-keys.php');

	// Define the following variables:
	$latitude = "50.822530"; // Brighton, UK
	$longitude = "-0.137163";
	$excludeList = "alerts,flags"; // Comma separated list, no spaces
	$units = "uk2"; // Outputs units as mph, degrees celsius, etc

	// Use above variables to build the url
	$url = "https://api.darksky.net/forecast/$darkSkyApiKey/$latitude,$longitude?exclude=$excludeList/units=$units";

	$data = file_get_contents($url); // Put the contents of the file into a variable
	$weather = json_decode($data, true); // Decode the JSON feed

?>
