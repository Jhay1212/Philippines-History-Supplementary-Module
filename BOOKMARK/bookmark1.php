<?php 

include "../UTILS/session_check.php";
include '../db_connection.php';



// 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM bookmark WHERE user_id = '$_SESSION[user_id]'";
$count = "SELECT COUNT(*) as total FROM bookmark";
$count_res = $conn->query($sql);
$result = $conn->query($sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=1024">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../BOOKMARK/bookmark-css.css">
     <!--<link rel="stylesheet" href="../HOME1/new_home.css"> -->


    <title>BOOKMARK</title>
</head>

<body>
<form id="profile-picture-form" action="../HOME1/profile.php" method="POST" enctype="multipart/form-data" class='hidden'>
            <span class="close-btn" onclick="closeProfileForm()">X</span>

    <div>
        <label for="profilePicture">Change Profile Picture:</label><br>
        <img id="profilePicPreview" src="<?php echo $_SESSION['profile_path']?>" alt="Profile Picture"
 width="150" class='profile-pic'/>
        <input type="file" id="profilePicture" name="profilePicture" accept="image/*" onchange="previewImage(event)">
    </div>
    <button type="submit">Upload</button>
</form>
<aside class="sidebar">
    <div class="user-info">
        <img src="<?php echo $profile_path?>" alt="User Icon" class="user-icon">
        <span class="username"><?php echo $_SESSION['username']?></span>
    </div>
    <nav class="sidebar-links">
        <a href="../HOME1/default.php" class="active"><i class="fas fa-home"></i> Home</a>
        <a href="../BOOKMARK/bookmark1.php" class="active"><i class="fas fa-bookmark"></i> Bookmarks</a>
        <a href="../GAMES/games.php"><i class="fas fa-gamepad"></i> Activities</a>
        <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
        <a href="../GALLERY/gallery.php"><i class="fas fa-image"></i> Gallery</a>
        <a href="../QUIZ1/quiz1.php"><i class="fas fa-question-circle"></i> Quiz</a>
        <a href="../TRIVIA & FACTS/trivfac.php"><i class="fas fa-lightbulb"></i> Trivia & Facts</a>
        <a href="../LANDING PAGE/landpage.php"><i class="fas fa-sign-out-alt"></i> <?php echo $logging ?></a>
    </nav>
</aside>

<!-- CONTENTS -->

     <!-- Navbar -->
     <div class='main-content'>
     <header class="navbar">
        <div class="navbar-left">
            <div class="navbar-logo">
                <img src="../PICS/logo1.png" alt="Website Logo" class="logo">
                <span class="website-name">DISCOVERING PHILIPPINE HISTORY</span>
            </div>
        </div>
        <div class="navbar-right">
        <form method="post" id='searchForm'>
            <input type="text" class="search-bar" placeholder="Search lessons..." id="searchInput">
            </form>
            <div id="toggleIcon" class="icon" onclick="toggleSidebar()">
            <a href="#" class="info-icon"><i class="fas fa-info-circle"></i></a>
            </div>
        </div>
    </header>
<!-- Sidebar -->
<div id="sidebar2" class="sidebar2" style="z-index: 99999;"> 
<a href="#"><strong>About<br></strong>

    This website is an online learning module about Philippine history, offering lessons, quizzes, and fun games to make learning enjoyable. Its goal is to help users understand and appreciate the rich history of the Philippines in an engaging and easy way.

</a>
<a href="#"><strong>Developers<br></strong>

    <img class="devpic" src="../PICS/joan.jpg"><br>
    Joan Hermo<br><br><br>

    <img class="devpic" src="../PICS/allen.jpg"><br>
    Allen Candelaria<br><br><br>

    <img class="devpic" src="../PICS/jok3.jpg"><br>
    Jose Rivera<br><br><br>

    <img class="devpic" src="../PICS/jok2.jpg"><br>
    Mikas Viscayno

</a>
</div>


    <section class="content-section">
        <h2>Bookmarks</h2>


        <div class="container-flex">
        <div class="bookmarks">

            <?php 
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Get the title from the database
        $title = htmlspecialchars($row['title']);
        
        // Remove numbers, parentheses, and their contents
        $sanitizedTitle = preg_replace('/\s*\([^)]*\)|[0-9]/', '', $title);
        
        // Replace multiple spaces with a single space
        $sanitizedTitle = preg_replace('/\s+/', ' ', $sanitizedTitle);
        
        // Trim leading and trailing whitespace
        $sanitizedTitle = trim($sanitizedTitle);
        
        // Replace spaces with underscores and convert to lowercase
        $formattedTitle = strtolower(str_replace(' ', '_', $sanitizedTitle));
        
        // Use the formatted title as the data-title attribute
        echo('<div class="square" data-title="'.htmlspecialchars($formattedTitle).'">');
        echo('<img src="../PICS/bookmark.svg" alt="Bookmark Image">');
        echo('<h3 class="pamagat">'.htmlspecialchars($row['title']).'</h3>');
        echo('</div>');
    }
}
?>
</div>


        

<!-- Bookmark Preview Section -->
<div class="preview-container">
    
<section id="bookmarkPreview" class="preview-section">
    <h2>Bookmark Preview</h2>
    <div id="previewContent">
        <p class="'inst">Select a bookmark to see details here.</p>
            <p class="desc"></p>
        </div>
    </section>
    </div>


</div>
<script src="../HOME1/home-js.js"></script>
<script src="./bookmark.js"></script>


</body>
</html>
