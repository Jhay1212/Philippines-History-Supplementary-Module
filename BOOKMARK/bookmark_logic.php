<?php

session_start();


include '../db_connection.php';
// 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['username'])) {
    $username = "GUEST";
} else {
    $username = $_SESSION['username'];
}



