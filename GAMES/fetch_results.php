<?php
// Database connection
include '../db_connection.php'; // Ensure this connects properly to your database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the JSON input
$input = json_decode(file_get_contents("php://input"), true);
$quizTitle = isset($input['quizTitle']) ? trim($input['quizTitle']) : '';

// Start session to get the logged-in user ID
session_start();
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

// Check if user is logged in
if (!$user_id) {
    echo json_encode(['error' => 'User not logged in.']);
    exit;
}

// Prepare the SQL query based on the selected quiz title
if ($quizTitle === "all") {
    $sql = "SELECT quiz_title, score, quiz_date FROM activity_scores WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
} else {
    $sql = "SELECT quiz_title, score, quiz_date FROM activity_scores WHERE quiz_title = ? AND user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $quizTitle, $user_id);
}

// Execute the query
$stmt->execute();
$result = $stmt->get_result();

// Generate results table
if ($result->num_rows > 0) {
    echo "<table style='width: 100%; border-collapse: collapse; margin-top: 20px;'>
            <tr style='background-color: #4CAF50; color: white;'>
                        <th style='padding: 12px; border: 1px solid #ddd;'>Use</th>
                <th style='padding: 12px; border: 1px solid #ddd;'>Game </th>
                <th style='padding: 12px; border: 1px solid #ddd;'>Score</th>
                <th style='padding: 12px; border: 1px solid #ddd;'>Date Taken</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td style='padding: 12px; border: 1px solid #ddd;'>" .$_SESSION['username'] . "</td>

                <td style='padding: 12px; border: 1px solid #ddd;'>" . htmlspecialchars($row['quiz_title']) . "</td>
                <td style='padding: 12px; border: 1px solid #ddd;'>" . htmlspecialchars($row['score']) . "</td>
                <td style='padding: 12px; border: 1px solid #ddd;'>" . htmlspecialchars($row['quiz_date']) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No results found for this quiz.</p>";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
