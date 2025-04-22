<?php
include "../UTILS/session_check.php";

include '../db_connection.php';




if (isset($_SESSION['user_id'])) {
    // var_dump($_SESSION['user_id']);  // Check if user_id is set and correct
    
} else {
    // echo "User ID not set in session.";
}


try {
    // Create a new PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Initialize $notes as an empty array
    $notes = [];

    // Prepare and execute the SELECT query to get all notes for the user, ordered by creation time (DESC)
    $sql = "SELECT * FROM notes WHERE user_id = :user_id ORDER BY created_at DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['user_id' => $_SESSION['user_id']]);

    // Fetch all results
    $notes = $stmt->fetchAll(PDO::FETCH_ASSOC); // Store the fetched notes in $notes

    // Store the notes in session to pass to the other page
    $_SESSION['notes'] = $notes;

    // Close the connection
    $conn = null;

    if (empty($notes)) {
        // echo "No notes found for the current user./";
    }
    
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
