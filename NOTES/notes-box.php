<?php
// session_start();

include_once "../NOTES/view_notes.php";

if (isset($_SESSION['username']) && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
} else {
    
    // Set default values if user is not logged in
    $_SESSION['username'] = "GUEST";
    $_SESSION['user_id'] = 0; // Set the user_id to 0 for guests
    $username = "GUEST";
    $user_id = 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="../NOTES/notesbx-css.css">
    <title>NOTES</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .content-section {
    padding: 20px;
    /* font-family: Arial, sans-serif;x */
}

.square-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 columns */
    gap: 20px; /* space between the grid items */
}

.square {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 15px;
    text-align: center;
    transition: transform 0.2s;
}

.square:hover {
    transform: scale(1.05); /* subtle hover effect */
}

.inner-box p {
    font-size: 16px;
    color: #333;
    margin-bottom: 10px;
}

.inner-box small {
    font-size: 14px;
    color: #666;
}

.nonotes {
    font-size: 18px;
    color: #999;
    text-align: center;
    margin-top: 20px;
}

    </style>
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

  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="user-info">
        <img src="<?php echo $profile_path?>" alt="User Icon" class="user-icon">
        <span class="username"><?php echo $_SESSION['username']?></span>
    </div>
    <nav class="sidebar-links">
        <a href="../HOME1/default.php"><i class="fas fa-home"></i> Home</a>
        <a href="../BOOKMARK/bookmark1.php"><i class="fas fa-bookmark"></i> Bookmarks</a>
        <a href="../GAMES/games.php"><i class="fas fa-gamepad"></i> Activities</a>
        <a href="../NOTES/notes-box.php" class="active"><i class="fas fa-sticky-note"></i> Notes</a>
        <a href="../GALLERY/gallery.php"><i class="fas fa-image"></i> Gallery</a>
        <a href="../QUIZ1/quiz1.php"><i class="fas fa-question-circle"></i> Quiz</a>
        <a href="../TRIVIA & FACTS/trivfac.php"><i class="fas fa-lightbulb"></i> Trivia & Facts</a>
        <a href="../LANDING PAGE/landpage.php"><i class="fas fa-sign-out-alt"></i> <?php echo $logging ?></a>
    </nav>
</aside>
	
<!-- CONTENTS -->	
			<main id="mainContent">

 <!-- Navbar -->
 <header class="navbar">
    <div class="navbar-left">
        <div class="navbar-logo">
            <img src="../PICS/logo1.png" alt="Website Logo" class="logo">
            <span class="website-name">DISCOVERING PHILIPPINE HISTORY</span>
        </div>
    </div>
    <div class="navbar-right">
        <input type="text" class="search-bar" placeholder="Search lessons...">
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
</div><section class="content-section">
    <h2>Notes</h2>
    <div class="square-container">
        <!-- Box 1 -->
        <?php
        if (isset($_SESSION['notes']) && count($_SESSION['notes']) > 0) {
            $notes = $_SESSION['notes'];

            // Loop through each note and create a square div
            foreach ($notes as $row) {
                echo '<div class="square">';
                echo '<div class="inner-box">';
                echo '<p>' . htmlspecialchars($row['note_text']) . '</p>';
                echo '<small>Created on: ' . htmlspecialchars($row['created_at']) . '</small>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p class="nonotes">No notes found.</p>';
        }
        ?>
    </div>
</section>
</main>

    <script src="../HOME1/home-js.js"></script>
</body>
</html>