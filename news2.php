<?php
	// create a new cURL resource
	$ch = curl_init();

	$string="Earthquake India";
	$url = "https://ajax.googleapis.com/ajax/services/search/news?v=1.0&q=".urlencode($string);
	// set URL and other appropriate options
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);

	// grab URL and pass it to the browser
	$body=curl_exec($ch);

	$json = json_decode($body);

	// close cURL resource, and free up system resources
	curl_close($ch);
	echo $json;
?>