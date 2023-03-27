<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "BE18_CR4_ChristineWeidhofer_BigLibrary";

$connect = mysqli_connect($hostname, $username, $password, $dbname);

if(!$connect) {
  die("connection failed" . mysqli_connect_error());
} else {
  //echo "CONNECTED!!!";
}