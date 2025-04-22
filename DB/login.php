<?php

session_start();
// Establish connection to the database
include '../db_connection.php';
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    // Sanitize input data to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query the database to check if the user exists
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, store user info in session
            $_SESSION['user_id'] = $row['id']; // Store user ID
            $_SESSION['username'] = $row['username']; // Store username
            $_SESSION['login'] = true; // Set login status
            $_SESSION['profile_path'] = $row['profile_picture'];
            echo "success";
            exit();
        } else {
            // Password is incorrect, send error message
            echo "Incorrect password. Please try again.";
        }
    } else { 
        // User does not exist, send error message
        echo "User does not exist. Please sign up.";
    }
}

// Close database connection
$conn->close();
