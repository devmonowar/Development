<?php

// $ch = curl_init();
// // curl_setopt($ch, CURLOPT_URL, 'https://www.prothomalo.com');
// curl_setopt($ch, CURLOPT_URL, 'https://www.amazon.com/');

// // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// // curl_setopt($ch, CURLOPT_POST, 1);
// // curl_setopt($ch, CURLOPT_TIMEOUT, 30);
// // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
// // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));

// curl_exec($ch);




// $ch = curl_init("https://www.prothomalo.com");
// $fp = fopen("example_homepage.txt", "w");

// curl_setopt($ch, CURLOPT_FILE, $fp);
// curl_setopt($ch, CURLOPT_HEADER, 0);

// curl_exec($ch);
// if(curl_error($ch)) {
//     fwrite($fp, curl_error($ch));
// }
// curl_close($ch);
// fclose($fp);



$params=['name'=>'John', 'surname'=>'Doe', 'age'=>36];
$defaults = array(
CURLOPT_URL => 'http://myremoteservice/',
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => $params,
);
$ch = curl_init();
curl_setopt_array($ch, ($options + $defaults));
?>