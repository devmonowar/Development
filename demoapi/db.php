<?php
// https://www.youtube.com/watch?v=RxkT_ZxYef0&list=PLbC4KRSNcMnr9Aj9mvZOWMZ0pbfWLVtRC&index=8
$server="localhost";
$username= "root";
$password= "";
$dbname= "my_api";

$conn = new mysqli( $server, $username, $password, $dbname);

// if( $conn->connect_error){
//     die("connect failed" . $conn->connect_error);
// }
// echo "Connect successfully done";