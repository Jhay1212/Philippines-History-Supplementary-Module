<?php
include "../UTILS/session_check.php";
include '../db_connection.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT score,  quiz_title, quiz_date FROM quiz_scores WHERE user_id = $_SESSION[user_id]";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $scores = array();
    $quiz_title = array();
    $quiz_date = array();
    while($row = $result->fetch_assoc()) {
        array_push($scores, $row['score']);
        array_push($quiz_title, $row['quiz_title']);
        array_push($quiz_date, $row['quiz_date']);
    }
    $_SESSION['scores'] = $scores;
    $_SESSION['quiz_title'] = $quiz_title;
    $_SESSION['quiz_date'] = $quiz_date;
    // echo $_SESSION['scores'][0];
    foreach($_SESSION['scores'] as $score) {
        echo "<script>console.log($score);</script>";
    }
    foreach($_SESSION['quiz_title'] as $quiz) {
        echo "<script>console.log('$quiz');</script>";
    }
    foreach($_SESSION['quiz_date'] as $quiz_date) {
        echo "<script>console.log('$quiz_date');</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=1024">

    <link rel="stylesheet" href="../QUIZ1/quiz1-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>QUIZ TIME</title>

    <style>
         #quiz-category {
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      background-color: #f4f4f4;
      border: 1px solid #ddd;
      margin-bottom: 20px;
      cursor: pointer;
      color: #333;
      outline: none;
    }
    #quiz-results {
        
        margin-left: 1rem;
        width: 40%;
    }

    /* Table Styling */
    #quiz-results table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    #quiz-results th, #quiz-results td {
      padding: 12px 15px;
      border: 1px solid #ddd;
      text-align: left;
    }

    #quiz-results th {
      background-color: #4CAF50;
      color: white;
      font-weight: bold;
    }

    #quiz-results tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    #quiz-results tr:hover {
      background-color: #f1f1f1;
    }

    #close-results {
    background-color: #FF4C4C; 
    color: white; 
    border: none; 
    border-radius: 5px; 
    padding: 10px 20px; 
    font-size: 16px; 
    cursor: pointer; 
    transition: background-color 0.3s ease; 
}

#close-results:hover {
    background-color: #FF0000; /* Darker red on hover */
}

#close-results:active {
    background-color: #CC0000; /* Even darker red on click */
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
        <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
        <a href="../GALLERY/gallery.php"><i class="fas fa-image"></i> Gallery</a>
        <a href="../QUIZ1/quiz1.php" class="active"><i class="fas fa-question-circle"></i> Quiz</a>
        <a href="../TRIVIA & FACTS/trivfac.php"><i class="fas fa-lightbulb"></i> Trivia & Facts</a>
        <a href="../LANDING PAGE/landpage.php"><i class="fas fa-sign-out-alt"></i> <?php echo $logging ?></a>
    </nav>
</aside>

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
</div>
	
<!-- CONTENTS -->	
    <section class="content-section">
        <h2>Quiz Time</h2>

        <select id="quiz-category" onchange="fetchQuizResults()">
  <option value="all">All</option>
  <option value="Pre-Colonial">Pre-Colonial</option>
  <option value="Spanish Colonization">Spanish Period</option>
  <option value="American Period">American Period</option>
  <option value="japanese Period">Japanese Period</option>
  <option value="Post Independce">Post Independence</option>
  <option value="Philippines Presidential">Philippines Presidential</option>
</select>
<button type="button" id="close-results">Close Result</button>
<div id="quiz-results"></div>
        <div class="rectangle-container">
		
            <!-- 15 rectangle boxes -->
           <div class="rectangle">
			<a href="../QUIZ1/q1.php"> <img src="../PICS/unit 1 pics/1.webp" alt="Image"></a>
			<div class="dropdown">
        <a href="../QUIZ1/q1.php">Pre-Colonial Period</a>
    </div>
			</div>
			
            <div class="rectangle">
			<a href="../QUIZ1/q2.php"><img src="../PICS/unit 2 pics/1.png" alt="Image"></a>
			<div class="dropdown">
        <a href="../QUIZ1/q2.php">Spanish Colonization Period</a>
    </div>
			</div>
			
			<div class="rectangle">
			<a href="../QUIZ1/q3.php"><img src="../PICS/unit 3 pics/1.png" alt="Image"></a>
			<div class="dropdown">
        <a href="../QUIZ1/q3.php">American Period</a>
    </div>
			</div>
			
			<div class="rectangle">
			<a href="../QUIZ1/q4.php"><img src="../PICS/unit 4 pics/1.png" alt="Image"></a>
			<div class="dropdown">
        <a href="../QUIZ1/q4.php">Japanese Occupation Period</a>
    </div>
			</div>
			
			<div class="rectangle">
			<a href="../QUIZ1/q5.php"><img src="../PICS/unit 5 pics/1.png" alt="Image"></a>
			<div class="dropdown">
        <a href="../QUIZ1/q5.php">Post Independence and Early Republic</a>
    </div>
			</div>
			
			<div class="rectangle">
			<a href="../QUIZ1/q6.php"><img src="../PICS/unit 6 pics/6pic0.avif" alt="Image"></a>
			<div class="dropdown">
        <a href="../QUIZ1/q6.php">Philippine Presidential Period</a>
    </div>
			</div>
			
				 </div>
    </section>


</main>

 <!-- Audio element -->
 <audio id="sound" src="../GAMES/GAMES MUSIC/newbg1.wav"></audio>

 <!-- Button for sound control -->
 <button id="soundButton">🔊</button>

    <script src="../HOME1/home-js.js"></script>
    <script src="./quiz_result.js"></script>

    <script>
        const sidebar2 = document.getElementById('sidebar2');
        sidebar2.style.zIndex = '999999999';

        const devpic = document.querySelectorAll('.devpic')
const picSrc = ['../PICS/joan.jpg', '../PICS/allen.jpg', 'jok3.jpg', 'k1.png'];
devpic.forEach((pic, index) => {
    pic.src = picSrc[index]
})

    </script>


</body>
</html>