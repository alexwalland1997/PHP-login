<?php

$host = 'localhost';
$user = 'root';
$password = 'root';
$db = 'users';

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>