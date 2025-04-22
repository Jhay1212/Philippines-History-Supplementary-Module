<?php 
include "../UTILS/session_check.php";





// 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// $sql = "SELECT * FROM bookmark WHERE user_id = '$_SESSION[user_id]'";
// $count = "SELECT COUNT(*) as total FROM bookmark";
// $count_res = $conn->query($sql);
// $result = $conn->query($sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../BOOKMARK/bookmark-css.css">
    <title>SEARCH</title>
</head>

<body>
 

<!-- Sidebar on the Right -->
<div id="sidebar" class="sidebar">

    <!-- User Info Section -->
    <div class="user-info">
        <img src="<?php echo $profile_path ?>" alt="User Icon" class="user-icon">
        <span class="username"><?php echo $_SESSION['username']  ?></span>
    </div>

    <a href="../HOME1/default.php"><i class="fas fa-home"></i> Home</a>
    <a href="../BOOKMARK/bookmark1.php"><i class="fas fa-bookmark"></i> Bookmark</a>
    <a href="../GAMES/games.php"><i class="fas fa-gamepad"></i> Games</a>
    <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
    <a href="../GALLERY/gallery.php"><i class="fas fa-image"></i> Gallery</a>
    <a href="../QUIZ1/quiz1.php"><i class="fas fa-question-circle"></i> Quiz</a>
    <a href="../TRIVIA & FACTS/trivfac.php"><i class="fas fa-lightbulb"></i> Trivias & Facts</a>
    <a href="../LANDING PAGE/landpage.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<!-- Navbar Section -->
<nav class="navbar">
    <!-- Sidebar Toggle Button -->
    <div class="navbar-left">
        <!-- Website Logo and Name -->
        <div class="navbar-logo">
            <img src="../PICS/logo1.png" alt="Website Logo" class="logo">
            <span class="website-name">DISCOVERING PHILIPPINE HISTORY</span>
        </div>
    </div>

    <!-- Search and Info Section -->
    <div class="navbar-right">
        <input type="text" class="search-bar" placeholder="Search...">
        <a href="#" class="info-icon">ℹ️</a>
    </div>
</nav>

<!-- CONTENTS -->
    <main id="mainContent">
    
</main>

<script src="../HOME1/home-js.js"></script>
<script src="./search.js"></script>
<!-- <script src="../HOME1/home-js.js"></script> -->

</body>
</html>
