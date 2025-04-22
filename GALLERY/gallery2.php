<?php
include '../UTILS/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=1024">

    <title>GALLERY</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../GALLERY/gall-css.css">
</head>
<body><br><br>
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
        <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
        <a href="../GALLERY/gallery.php" class="active"><i class="fas fa-image"></i> Gallery</a>
        <a href="../QUIZ1/quiz1.php"><i class="fas fa-question-circle"></i> Quiz</a>
        <a href="../TRIVIA & FACTS/trivfac.php"><i class="fas fa-lightbulb"></i> Trivia & Facts</a>
        <a href="../LANDING PAGE/landpage.php"><i class="fas fa-sign-out-alt"></i> <?php echo $logging ?></a>
    </nav>
</aside>

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
</div>
    <!-- Main Container -->
    <div class="gallery-container">

        <a href="../GALLERY/gallery.php"><button class="galler">IMAGES</button></a>
        <a href="../GALLERY/gallery2.php"><button class="gallervid">VIDEOS</button><br><br><br></a>

        <h1>PRE-COLONIAL PERIOD</h1>

        <!-- Static Gallery -->
        <div class="gallery-grid">
            <!-- Static Images with Captions -->
            <div class="gallery-item">
            <video controls muted loop>
                <source src="../HOME1/LESSON VIDS/vid1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video><br><br><br><br><br>
                <div class="caption">Pre-Colonial Period Trailer</div>
            </div>

        </div>
    </div><br><br>

<!-- Main Container -->
<div class="gallery-container">

    <h1>SPANISH COLONIZATION PERIOD</h1>


    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
        <video controls muted loop>
                <source src="../HOME1/LESSON VIDS/vid2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video><br><br><br><br><br>
                <div class="caption">Spanish Colonization Period Trailer</div>
        </div>

    </div>
</div>

<!-- Main Container -->
<div class="gallery-container">
    <h1>AMERICAN COLONIALISM PERIOD</h1>

    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
        <video controls muted loop>
                <source src="../HOME1/LESSON VIDS/vid3.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video><br><br><br><br><br>
                <div class="caption">American Colonialism Period Trailer</div>
        </div>

    </div>
</div>

<!-- Main Container -->
<div class="gallery-container">
    <h1>JAPANESE OCCUPATION PERIOD</h1>

    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
        <video controls muted loop>
                <source src="../HOME1/LESSON VIDS/vid4.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video><br><br><br><br><br>
            <div class="caption">Japanese Occupatiom Period Trailer</div>
        </div>

    </div>
</div>

<!-- Main Container -->
<div class="gallery-container">
    <h1>Post Independence and Early Republic</h1>

    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
        <video controls muted loop>
                <source src="../HOME1/LESSON VIDS/vid5.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video><br><br><br><br><br>
                <div class="caption">Post Independence and Early Republic Trailer</div>
        </div>

    </div>
</div>>

 <!-- JavaScript -->
 <script src="../HOME1/home-js.js"></script>

</body>
</html>
