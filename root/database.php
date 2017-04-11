<?php

$server = 'localhost';
$username = 'root';
$password = 'usbw';
$database = 'lijst';


// Create connection
$conn = new mysqli($server, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}