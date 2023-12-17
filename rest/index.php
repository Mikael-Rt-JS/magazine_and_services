<?php
header("Access-");
header("Content-Type: application/json; charset-UTF-8");


$connect=@mysqli_connect($serverDB,$user,$password,$nameDB) or die("НЕТ ПОДКЛЮЧЕНИЕ С СЕРВЕРОМ");

if(!$connect){
    echo "I can not connect DB :0";
}

//$uri=explode('/',$_SERVER['REQUEST_URI']);
include './CRUD.php';
include './classes_have.php';
$method=$_SERVER['REQUEST_METHOD'];
if($method==='GET'){
    include "./get.php";
}elseif($method==='POST'){
    //$_POST = json_decode(file_get_contents('php://input'), true);
    include "./post.php";
}elseif($method==='PATCH'){
    include "./patch.php";
}elseif($method==='DELETE'){
    $deleter=explode('/',$_GET['p']);
    //echo json_encode([$_GET]);
    include "./delete.php";
}
/*
include "./get.php";
include "./post.php";
include "./patch.php";
include "./delete.php";
*/

//echo './rest/index.php 0o0';
?>
