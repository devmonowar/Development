<?php
// https://www.youtube.com/watch?v=ZIsdbVOQJNc&t=490s
$url = "https://reqres.in/api/users/2";

$data_array = array(

	'name' => 'john Doe',
	'job' => 'Web Developer'
);
$data = http_build_query($data_array);

$header = array(
	'Authorization: monwoarauthor'
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

$resp = curl_exec($ch);

if($e = curl_error($ch)){
	echo $e;	
}else {
	$decoded = json_decode($resp, true);
	//foreach($decoded as $key => $val){
	//	echo $key . ': ' . $val . '<br>';
	//}
	
	
	echo "<pre>";
	
	var_dump($resp);
	print_r($decoded);
	echo "<br>";
	
	$encoded = json_encode($decoded);
	var_dump($encoded);
}

curl_close($ch);