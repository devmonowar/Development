<?php
// https://www.youtube.com/watch?v=RxkT_ZxYef0&list=PLbC4KRSNcMnr9Aj9mvZOWMZ0pbfWLVtRC&index=8
header('content-type: application/json');

$request=$_SERVER["REQUEST_METHOD"];

switch ($request){
    case "GET":
        getmethod();
    break;
    case "PUT":
        $data=json_decode(file_get_contents('php://input'), true);
        putmethod($data);
       break;
    case "POST":
        $data=json_decode(file_get_contents('php://input'), true);
        postmethod($data);
       break;
    case 'DELETE';
        $data=json_decode(file_get_contents('php://input'), true);
        deletemethod($data);
       break;
    
    default:
    echo '{"name": "data not found"}';
      break;
}


function getmethod(){
    include "db.php";
    $sql = "SELECT * FROM apitable";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        $rows=array();
        while ($r = mysqli_fetch_assoc($result)){
            $rows["result"][] = $r;
        }

        echo json_encode($rows);
    
    } else {
        echo '{"result": "no data found"}';
    }

}

function postmethod($data){
    include "db.php";
    $name=$data["name"];
    $email=$data["email"];

    $sql= "INSERT INTO apitable (name, email, created) VALUES ('$name', '$email', NOW() )";

    if ( mysqli_query($conn, $sql)){
        echo '{"result": "data inserted"}';
    } else{
        echo '{"result": data not inserted}';
    }
    
}


function putmethod($data){
    include "db.php";
    $id=$data["id"];
    $name=$data["name"];
    $email=$data["email"];

    $sql= "UPDATE apitable SET name='$name', email='$email', created=NOW() where id='$id'";

    if ( mysqli_query($conn, $sql)){
        echo '{"result": "update succesfully"}';
    } else{
        echo '{"result": not update}';
    }
    
}


function deletemethod($data){
    include "db.php";
    $id=$data["id"];

    $sql= "DELETE FROM apitable where id='$id'";

    if ( mysqli_query($conn, $sql)){
        echo '{"result": "Delete succesfully"}';
    } else{
        echo '{"result": not Delete}';
    }
    
}

