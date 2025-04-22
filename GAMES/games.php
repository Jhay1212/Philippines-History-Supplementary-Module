<?php 
include '../UTILS/session_check.php';   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=1024">

    <title>ACTIVITIES</title>
    <link rel="stylesheet" href="../GAMES/games-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

<aside class="sidebar">
    <div class="user-info">
        <img src="<?php echo $profile_path?>" alt="User Icon" class="user-icon">
        <span class="username"><?php echo $_SESSION['username']?></span>
    </div>
    <nav class="sidebar-links">
        <a href="../HOME1/default.php"><i class="fas fa-home"></i> Home</a>
        <a href="../BOOKMARK/bookmark1.php"><i class="fas fa-bookmark"></i> Bookmarks</a>
        <a href="../GAMES/games.php" class="active"><i class="fas fa-gamepad"></i> Activities</a>
        <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
        <a href="../GALLERY/gallery.php"><i class="fas fa-image"></i> Gallery</a>
        <a href="../QUIZ1/quiz1.php"><i class="fas fa-question-circle"></i> Quiz</a>
        <a href="../TRIVIA & FACTS/trivfac.php"><i class="fas fa-lightbulb"></i> Trivia & Facts</a>
        <a href="../LANDING PAGE/landpage.php"><i class="fas fa-sign-out-alt"></i> <?php echo $logging ?></a>
    </nav>
</aside>

    <!-- Game Selection Section -->
    <div class="main-content">

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
</div><form id="profile-picture-form" action="../HOME1/profile.php" method="POST" enctype="multipart/form-data" class='hidden'>
            <span class="close-btn" onclick="closeProfileForm()">X</span>

    <div>
        <label for="profilePicture">Change Profile Picture:</label><br>
        <img id="profilePicPreview" src="<?php echo $_SESSION['profile_path']?>" alt="Profile Picture"
 width="150" class='profile-pic'/>

        <input type="file" id="profilePicture" name="profilePicture" accept="image/*" onchange="previewImage(event)">
    </div>
    <button type="submit">Upload</button>
</form>
   <select id="quiz-category" onchange="fetchQuizResults()">
  <option value="all">All</option>
  <option value="Game 1">Game 1</option>
  <option value="Game 2">Game 2</option>

</select>
<div id="quiz-results"></div>
<button type="button" id="close-results">Close Result</button>
        <h1>Choose Your Activity</h1>
        <p>Select one of the exciting activities below to start playing!</p>
        <div class="game-container">
            <div class="game-card" onclick="location.href='../GAMES/game1.php';">
                <img src="../PICS/GAMES PICS/1.png" alt="Game 1">
                <div class="game-title">WHO AM I?</div>
            </div>
            <div class="game-card" onclick="location.href='../GAMES/game2.php';">
                <img src="../PICS/GAMES PICS/2.png" alt="Game 2">
                <div class="game-title">TRUE or FALSE</div>
            </div>
            <div class="game-card" onclick="location.href='../QUEST/quest.php';">
                <img src="../PICS/GAMES PICS/3.png" alt="Game 3">
                <div class="game-title">HISTORY IN ORDER</div>
            </div>
            <div class="game-card" onclick="location.href='../BAYBAYIN/baybayin.php';">
                <img src="../PICS/GAMES PICS/4.jpg" alt="Game 4">
                <div class="game-title">Baybayin Translator</div>
            </div>
        </div>
    </div>

    <button class="sidebar-toggle" id="sidebar-toggle">☰</button>

    <!-- JavaScript -->
    <script src="../HOME1/home-js.js"></script>
    <script>
        
function fetchQuizResults() {
    const category = document.getElementById("quiz-category").value;
    
    fetch('../GAMES/fetch_results.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ quizTitle: category })
    })
    .then(response => {
      console.log(response)
      return response.text();
    })
    .then(data => {
      document.getElementById("quiz-results").innerHTML = data;
      console.log(data);
    })
    .catch(error => console.error('Error:', error));
  }
  const closeBtn = document.getElementById("close-results");
const selects = document.querySelector('select');
const quizRes = document.getElementById("quiz-results");

selects.addEventListener('change', function() {
  quizRes.style.display = 'block';
})

  closeBtn.addEventListener("click", () => {
    quizRes.style.display = "none";
  });

    </script>
</body>
</html>
