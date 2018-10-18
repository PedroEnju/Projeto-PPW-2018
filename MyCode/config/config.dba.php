<?php

error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$base = "projetoppw";
$user = "root";
$pass = "enju";
$host = "localhost";

$conn = new mysqli($host, $user, $pass, $base);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
