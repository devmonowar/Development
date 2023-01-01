<?php
$url =$_POST['url'];

include('simple_html_dom.php');

$get_title=file_get_html($url);

//var_dump($get_title);

echo $get_title->find('#a7fbc6f2-e32f-48a5-8ca8-bd69dd198578', 0)->plaintext;

