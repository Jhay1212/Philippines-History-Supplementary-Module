<?php
session_start();

$_SESSION['username'] = 'GUEST';
$_SESSION['user_id'] = 0;
$_SESSION['profile_path'] = '../HOME1/uploads/profile_pictures/guest/user.jpg';




if (isset($_POST['guest_btn'])) {
 
$_SESSION['username'] = 'GUEST';
$_SESSION['user_id'] = 0;
$_SESSION['profile_path'] = '../HOME1/uploads/profile_pictures/guest/user.jpg';


   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=1024">

    <title>PHILIPPINES HISTORY MODULE</title>
    <link rel="stylesheet" href="../LANDING PAGE/landpage-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../PICS/icon/favicon.icon" type="image/x-icon">

    <style>
        #guest_btn {
            
            border: none;
            background: transparent;
        }
        .hidden {
            display: none;
        }

        select{
            background: transparent;
            width : 100%;
            width: calc(100% - 40px);
    padding: 12px;
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 18px;
    /* color: #ffffff; */
    background: rgba(255, 255, 255, 0.1);
    transition: background-color 0.3s, box-shadow 0.3s;
        }
    </style>
</head>
<body>
    
<div class="container">
        <!-- Left Side: Welcome Section -->
        <div class="welcome-section">
            <div class="content">
                <h1 class="title">Welcome to the Philippines' <br> Past and Beyond</h1>
                <p class="description">An interactive platform for your learning journey</p>
                <div class="button-container">

                    <button type="submit" id="guest_btn"  name="guest_btn">
                    <a href="../HOME1/default.php" class="button enter-btn">Guest</a>
                    </button>
                </div>
            </div>
        </div>

        <!-- Right Side: Login and Signup Section -->
        <div class="auth-section">
            <!-- Login Section -->
            <div class="login-container animate-fade-in" id="lgForm">
                <h2>MABUHAY!</h2>
                <form method="post" id="loginForm" name="loginForm">
                    <input type="text" name="username" placeholder="Username" required aria-label="Username">
                    <div class="password-input">
                        <input type="password" name="password" id="password" placeholder="Password" required aria-label="Password">
                        <img class="eye" src="../PICS/close.png" alt="Toggle Password Visibility" onclick="togglePasswordVisibility('password')">
                    </div>
                    <button type="button" class="forgot-password-btn">Forgot Password?</button>
                    <input type="submit" value="Login" name="'login">
                </form>
                <p>No Account? <a href="#" onclick="showSignup()">Signup here</a></p>
            </div>

            <!-- Signup Section -->
            <div id="signupForm" class="signup-container" style="display: none;">
                <h2>Create an Account</h2>
                <form action="../DB/register.php" method="post" onsubmit="return validateForm()">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <form action="../DB/register.php" method="post" onsubmit="return validateForm()">
                    <div class="form-group">
                        <input type="text" name="firstname" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <div class="password-input">
                            <input type="password" name="password" id="signup-password" placeholder="Password" required>
                            <img class="eye" src="../PICS/close.png" alt="Toggle Password Visibility" onclick="togglePasswordVisibility('signup-password')">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="password-input">
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required onkeyup="validatePassword()">
                            <img class="eye" src="../PICS/close.png" alt="Toggle Password Visibility" onclick="togglePasswordVisibility('confirm_password')">
                        </div>
                        <label id="password-match-label">Passwords do not match</label>
                    </div>
                    <div class="form-group">
    <label for="role">Role:</label>
    <select id="role">
        <option value="">Select...</option>
        <option value="teacher">Teacher</option>
        <option value="student">Student</option>
    </select>

    <div id="teacher-section" class="hidden">
        <p>Your unique code: <strong id="classroom-code"></strong></p>
    </div>

    <div id="student-section" class="hidden">
        <label for="classroom-code">Enter Classroom Code:</label>
        <input type="text" id="classroom-code" placeholder="Classroom Code">
    </div>

                    </div>
                    <div class="form-group">
                        <input type="submit" value="Sign Up" id="'signup">
                    </div>
                </form>
                <p>Already have an account? <a href="#" onclick="showLogin()"><br>Login here</a></p>
            </div>
        </div>
    </div>
    <script src="../LANDING PAGE/landpage-js.js"></script>
    <script>
          function classroom() {
            if (roleStatus === 'teacher') {
                // Create a classroom and upload it to the database
                // You can use a PHP script here to create the classroom
            }
          }
        const roleDropdown = document.getElementById('role');
        const teacherSection = document.getElementById('teacher-section');
        const code = document.querySelector('#classroom-code');
        const studentSection = document.getElementById('student-section');
          let roleStatus = ''
        roleDropdown.addEventListener('change', function () {
            roleStatus = this.value
            
            if (this.value === 'teacher') {
                teacherSection.classList.remove('hidden');
                studentSection.classList.add('hidden');

           
            } else if (this.value === 'student') {
                studentSection.classList.remove('hidden');
                teacherSection.classList.add('hidden');
            } else {
                teacherSection.classList.add('hidden');
                studentSection.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
