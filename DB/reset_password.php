<?php
session_start();
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "kasaysayan"; // Name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    
    // Check if the username exists in the database
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generate a new password
        $new_password = bin2hex(random_bytes(4)); // Example: 8-char random password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT); // Hash the new password
        
        // Update the password for the existing user
        $update_query = "UPDATE users SET password = ? WHERE username = ?";
        $update_stmt = $conn->prepare($update_query);
        $update_stmt->bind_param("ss", $hashed_password, $username);

        if ($update_stmt->execute()) {
            echo "Your password has been reset. Your new password is: " . $new_password;
        } else {
            echo "Error updating the password.";
        }
    } else {
        echo "Username not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./reset.css">
    <title>Sign Up - PH KASAYSAYAN</title>
</head>

<body>
    <div class="signup-container">
        <h2>Create an Account</h2>
        <form action="../DB/register.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <div class="password-input">
                    <input type="password" name="password" id="password" placeholder="New Password" required>
                    <img class="eye" src="../PICS/close.png" onclick="togglePasswordVisibility('password')">
                </div>
            </div>
            <div class="form-group">
                <div class="password-input">
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm  New Password" required onkeyup="validatePassword()">
                    <img class="eye" src="../PICS/close.png" onclick="togglePasswordVisibility('confirm_password')">
                </div>
                <label id="password-match-label">Passwords do not match</label>
            </div>
            <div class="form-group">
                <input type="submit" value="Sign Up">
            </div>
        </form>
        <p>Already have an account? <a href="../LOGIN1/Login1.html">Login here</a>.</p>
    </div>


    <script>
        function togglePasswordVisibility(inputId) {
            var passwordInput = document.getElementById(inputId);
            var eyeIcon = passwordInput.nextElementSibling; // Get the next sibling, which is the eye icon

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.src = "../PICS/open.png"; // Change to open eye image
            } else {
                passwordInput.type = "password";
                eyeIcon.src = "../PICS/close.png"; // Change to closed eye image
            }
        }

        function validatePassword() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
            var passwordMatchLabel = document.getElementById("password-match-label");

            if (password !== confirm_password) {
                passwordMatchLabel.style.display = "block";
            } else {
                passwordMatchLabel.style.display = "none";
            }
        }

        function validateForm() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;

            if (password !== confirm_password) {
                document.getElementById("password-match-label").style.display = "block";
                return false;
            }
            return true;
        }
    </script>
    </body>
    </html>