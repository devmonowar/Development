<?php

// https://www.youtube.com/watch?v=nWA6PXuJpb0
// create a new cURL resource


$headers = [
    'Accept: application/json',
    'Content-Type: application/json'
];


$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");
curl_setopt($ch, CURLOPT_POST, false);
// curl_setopt($ch, CURLOPT_POSTFIELDS, "userId=10&title=tis is title&body=my sample bodyg data");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// grab URL and pass it to the browser
$result = curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);
$result = json_decode($result);

foreach($result as $row){
	
	echo $row->title."<br><br>";
	
}
