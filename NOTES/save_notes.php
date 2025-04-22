<?php

include '../db_connection.php';
// Ensure session is started

if (!isset($_SESSION['user_id'])) {
    // die("User ID not found in session. Please log in.");
} else {
    // echo "Current User ID from Session: " . $_SESSION['user_id'];
}

$user_id = $_SESSION['user_id'];



// 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $note = $_POST['note'];
    $user_id = $_SESSION['user_id']; // Retrieve user_id from session

    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("INSERT INTO notes (user_id, note_text) VALUES (?, ?)");

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind the parameters (s = string, i = integer)
    $stmt->bind_param("is", $user_id, $note); // 'i' for user_id (assuming it's an integer), 's' for note

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Note Saved Successfully);</script>";
    } else {
        echo "Error saving note: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

