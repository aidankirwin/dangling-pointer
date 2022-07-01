<?php

$serverName = "db";
$dbUser = "root";
$dbPwd = "example";
$dbName = "danglingpointer";

$conn = mysqli_connect($serverName, $dbUser, $dbPwd, $dbName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}