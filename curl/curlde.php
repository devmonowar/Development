<?php
// https://www.youtube.com/watch?v=1X2-UEUqrd8&list=PLAcPTXLI2Y-ziOS0ZZKXB6LOxglJRohqZ
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/');
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($curl, CURLOPT_HEADER, 0);

curl_exec($curl);

curl_close($curl);
