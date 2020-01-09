<?php

require 'config.php';
require 'register.php';

if(isset($_POST['register'])) {
    $newuser = "INSERT INTO users (firstname, email, newpassword, passwordconfirm) VALUES 
    ("$_POST['newname']", 
    "$_POST['email']", 
    "$_POST['newpassword']", 
    "$_POST['passwordconfirm']";";
    mysqli_query($newuser, $conn);
}