<?php
include './db/connect_db.php';
include './citadel/Router.php';
include './citadel/Blocks_control.php';

//global $connect;
//$uri=explode('/',$_SERVER['REQUEST_URI']);
//$gets=explode('/',$_GET['p']);

//var_dump(Router::uriNow());
$method=$_SERVER['REQUEST_METHOD'];
Router::what_method($method);
//var_dump($method);
?>
