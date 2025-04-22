<?php
// Database connection
include '../db_connection.php'; // Ensure this file connects to your database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get the JSON input
$input = json_decode(file_get_contents("php://input"), true);
$quizTitle = $input['quizTitle'];

// Start session to get the logged-in user ID
include('../UTILS/session_check.php');
$user_id = $_SESSION['user_id']; // Assuming `user_id` is stored in the session

// Query the quiz_scores table to fetch results based on quiz title and user ID
$sql = "SELECT score, quiz_date FROM quiz_scores WHERE quiz_title = ? AND user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $quizTitle, $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Generate results table
if ($result->num_rows > 0) {
  echo "<table style='width: 100%; border-collapse: collapse; margin-top: 20px;'>
          <tr style='background-color: #4CAF50; color: white;'>
           <th style='padding: 12px; border: 1px solid #ddd;'>User</th>
            <th style='padding: 12px; border: 1px solid #ddd;'>Score</th>
            <th style='padding: 12px; border: 1px solid #ddd;'>Date Taken</th>
          </tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td style='padding: 12px; border: 1px solid #ddd;'>" . $_SESSION['username']. "</td>
            <td style='padding: 12px; border: 1px solid #ddd;'>" . $row['score'] . "</td>
            <td style='padding: 12px; border: 1px solid #ddd;'>" . $row['quiz_date'] . "</td>
          </tr>";
  }
  echo "</table>";
} else {
  echo "<p>No results found for this quiz.</p>";
}

$stmt->close();
$conn->close();
?>
