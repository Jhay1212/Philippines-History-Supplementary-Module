<?php
// Establish connection to the database

include '../db_connection.php';

// 
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
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    // Sanitize input data to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Check if the username already exists in the database
    $checkUsernameQuery = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($checkUsernameQuery);

    if ($result->num_rows > 0) {
        // Username is already taken, alert the user
        echo "<script>alert('Username is already taken. Please choose a different one.'); window.location.href = '../LANDING PAGE/landpage.php';</script>";
    } else {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $sql = "INSERT INTO users (username, password, `first name`, `last name`) VALUES ('$username', '$hashed_password', '$firstname', '$lastname')";

        if ($conn->query($sql) === TRUE) {
            // Registration successful, redirect to login page
            header("Location: ../LANDING PAGE/landpage.php");
            exit();
        } else {
            // Registration failed, display error message
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close database connection
$conn->close();
?>
