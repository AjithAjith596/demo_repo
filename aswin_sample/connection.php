<?php


$servername = "localhost";
$username = "root";
$password = "qwerty";
$dbname = "login";
$dbname1= "";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?>
