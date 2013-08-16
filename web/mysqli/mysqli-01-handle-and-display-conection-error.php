<?php

$server = 'localhost';
$username = 'root';
$password = 'WRONG_PW';
$database = 'php-schulung-demos';
$mysqli = new mysqli($server,$username,$password,$database);

if ($mysqli->connect_error) {
    echo 'Error connecting to database: ' . $mysqli->connect_error;
    exit();
}
