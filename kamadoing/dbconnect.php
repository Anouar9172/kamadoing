<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "kamadoing";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection gefaald: ". $conn->connect_error);
}


?>
