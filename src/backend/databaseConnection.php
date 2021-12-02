<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// mysqli
$mysqli = new mysqli("localhost:5000", "root", "Gasm2910", "restaurante");

if($mysqli->connect_errno){
    echo 'Fallo al conectar a MySQL: ('.
    $mysqli->connect_errno - ') '.
    $mysqli->connect_errno;
} else {
    echo 'all good';
}
 
