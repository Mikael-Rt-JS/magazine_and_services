<?php

$serverDB="";
$user="";
$password="";
$nameDB="";

$connect=@mysqli_connect($serverDB,$user,$password,$nameDB) or die("НЕТ ПОДКЛЮЧЕНИЕ С СЕРВЕРОМ");

if(!$connect){
    echo "I can not connect DB :0";
}
