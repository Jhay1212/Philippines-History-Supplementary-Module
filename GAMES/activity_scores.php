<?php
include "../UTILS/session_check.php"; // Checks user session
include "../db_connection.php"; // Database connection details

// Get user inputs from the session and POST data
$user_id = $_SESSION['user_id'];
$quiz_title = $_POST['quiz_title'];
$current_score = $_POST['score'];

if ($user_id != 0) { // Ensure the user is logged in
    try {
        // Establish a connection to the database
        $pdo = new PDO("mysql:host=localhost;dbname=kasaysayan", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert data into the activity_scores table
        $stmt = $pdo->prepare("
            INSERT INTO activity_scores (user_id, quiz_title, score, quiz_date)
            VALUES (:user_id, :quiz_title, :score, NOW())
        ");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':quiz_title', $quiz_title);
        $stmt->bindParam(':score', $current_score);
        $stmt->execute();

        // Return a success message
        echo "Score for '$quiz_title' saved successfully!";
    } catch (PDOException $e) {
        // Return an error message
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Error: User not logged in.";
}
