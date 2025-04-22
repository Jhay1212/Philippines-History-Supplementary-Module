<?php
include "../UTILS/session_check.php";
include "../db_connection.php";

$user_id = $_SESSION['user_id'];
$quiz_title = $_POST['quiz_title'];
$current_score = $_POST['score'];
if ($user_id != 0) {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=kasaysayan", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Correct column name to match the table schema
        $stmt = $pdo->prepare("INSERT INTO quiz_scores (user_id, quiz_title, score) VALUES (:user_id, :quiz_title, :score)");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':quiz_title', $quiz_title);
        $stmt->bindParam(':score', $current_score);
        $stmt->execute();
    
        echo "Score for $quiz_title saved successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    
    
}
