<?php

$servername ="MySQL-8.2";
$username ="root";
$password = "";
$dbname = "registerUser";

$conn = mysqli_connect($servername, $username,$password,$dbname);

if(!$conn){
    die("Connection Fialed". mysqli_connect_error());
} else {
    "Успех";
} ?>

