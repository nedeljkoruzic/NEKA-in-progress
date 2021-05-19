<?php

$host="localhost";
$dbUser="root";
$dbPass="";
$db="domaci";

$conn=mysqli_connect($host,$dbUser,$dbPass,$db);

if(!$conn){
    echo "connection failed!";
}