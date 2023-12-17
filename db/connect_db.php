<?php

$serverDB="localhost";
$user="mikaeltv_magazin";
$password="Mgev3336";
$nameDB="mikaeltv_magazin";

$connect=@mysqli_connect($serverDB,$user,$password,$nameDB) or die("НЕТ ПОДКЛЮЧЕНИЕ С СЕРВЕРОМ");

if(!$connect){
    echo "I can not connect DB :0";
}