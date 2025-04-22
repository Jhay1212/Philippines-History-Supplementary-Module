<?php
include './db_connection.php'; // Include your database connection
$conn = new mysqli($servername, $username, $password, $dbname);

$timeout = 300; // Set timeout to 5 minutes (300 seconds)

$conn->query("DELETE FROM active_users WHERE last_activity < NOW() - INTERVAL $timeout SECOND");
?>
