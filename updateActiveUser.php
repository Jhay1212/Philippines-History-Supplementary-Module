<?php
session_start();
include './db_connection.php'; // Include your database connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Update last activity time for the user
    $stmt = $conn->prepare("INSERT INTO active_users (user_id) VALUES (?) ON DUPLICATE KEY UPDATE last_activity = NOW()");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();

    // Get current active user count
    $result = $conn->query("SELECT COUNT(DISTINCT user_id) AS user_count FROM active_users");
    $row = $result->fetch_assoc();
    
    echo json_encode(['count' => $row['user_count']]);
}
?>
