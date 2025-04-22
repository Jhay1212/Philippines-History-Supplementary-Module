<?php
include('../UTILS/session_check.php');
include("../db_connection.php");

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['user_id']) && isset($_FILES['profilePicture'])) {
    $userId = $_SESSION['user_id'];
    $file = $_FILES['profilePicture'];
    
    $uploadDir = '../HOME1/uploads/profile_pictures'.$_SESSION['username'].'/';
    
    if (!is_dir($uploadDir)) {
        if (!mkdir($uploadDir, 0755, true)) {
            die('Failed to create upload directory.');
        }
    }
    
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($file['type'], $allowedTypes)) {
       echo "<script> alert('Invalid file type. Only JPEG, PNG, and GIF files are allowed.')</script>;";
    }

    $maxFileSize = 2 * 1024 * 1024;
    if ($file['size'] > $maxFileSize) {
        die('File size exceeds the maximum allowed size of 2MB.');
    }
    
    $fileName = uniqid() . '_' . preg_replace("/[^a-zA-Z0-9\._-]/", "", basename($file['name']));
    $uploadPath = $uploadDir . $fileName;
    
    if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
        $stmt = $conn->prepare("UPDATE users SET profile_picture = ? WHERE id = ?");
        $stmt->bind_param("si", $uploadPath, $userId);
        
        if ($stmt->execute()) {
            echo 'Profile picture updated successfully.';
            $_SESSION['profile_path'] = $uploadPath;
            echo 'skibidi';
            header('Location: default.php');
        } else {
            echo 'Failed to update profile picture in the database.';
        }
        
        $stmt->close();
    } else {
        echo "<script>alert('Failed to upload image.')</script>";
    }
} else {
    echo __DIR__ . '/uploads/guest/user.jpg';
}

if (isset($_SESSION['username'])) {
    $_SESSION['path'] = $uploadPath;
} else {
    $_SESSION['path'] = 'uploads/guest/user.jpg';
}

echo json_encode($_SESSION['path']);

$conn->close();

?>
