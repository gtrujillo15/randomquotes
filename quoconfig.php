<?php 

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBQuoList = "quotes";


$quoConn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBQuoList);


if (!$quoConn == true ) {
    die("Connection failed: " .mysqli_connect_error());
}

