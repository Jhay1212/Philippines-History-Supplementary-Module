<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    $profile_path = $_SESSION['profile_path'];
    

    // echo '<script>alert("Welcome, ' . $username . ' ' . $user_id . '!");</script>';
} else {
    // echo '<script>alert("Username is not set!");</script>';
    
    // Set default values if user is not logged in
    $_SESSION['username'] = "GUEST";
    $_SESSION['profile_path'] = '../HOME1/uploads/profile_pictures/guest/user.jpg';
    $_SESSION['user_id'] = 0; // Set the user_id to 0 for guests
    $username = "GUEST";
    $profile_path =  $_SESSION['profile_path'];
    $user_id = 0;

    
}

function sessionCheck($message, $fallback) {
    if ($_SESSION['username'] != 'GUEST' and isset($_SESSION['username']))   {
        return $message;
    }
    else if($_SESSION['username'] == 'GUEST'){
        return $fallback;
    }
    
}
$logging = sessionCheck("Logout", 'Login');
    echo "<script>let isUserLoggedIn = $user_id;</script>";