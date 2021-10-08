<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "myportfolio";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if(!$conn) {
    die("connection failed:" . mysqli_connect_error());
}