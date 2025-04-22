<?php
include '../UTILS/session_check.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=1024">

    <title>GAME 2: TRUE OR FALSE</title>
    <link rel="stylesheet" href="../GAMES/game2-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
  <style>
        body {
  font-family: system-ui;
  background: #fff;
  text-align: center;
}

.timer {
    margin-top: 10px;
}
  
.timer > svg {
    width: 200px;
    height: 200px;
}

.timer > svg > circle {
    fill: none;
    stroke-opacity: 0.3;
    stroke: #0d6efd;
    stroke-width: 10;
    transform-origin: center center;
    transform: rotate(-90deg);
}

.timer > svg > circle + circle {
    stroke-dasharray: 1;
    stroke-dashoffset: 1;
    stroke-linecap: round;
    stroke-opacity: 1;
}

.timer.animatable > svg > circle + circle {
    transition: stroke-dashoffset 0.3s ease;
}

.timer > svg > text {
    font-size: 2rem;
}

.timer > svg > text + text {
    font-size: 1rem;
}
.timer-wrapper {
    position: absolute;
    top: 10%;
    left: 80vw;
}
.hidden {
    display: none;
}

    </style>
</head>
<body>
        <input type="text" name="quiz_title" id="quizTitle" class="hidden" value="Game 2">

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
        <a href="../GAMES/games.php" class="active"><i class="fas fa-gamepad"></i> Activities</a>
        <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
        <a href="../GALLERY/gallery.php"><i class="fas fa-image"></i> Gallery</a>
        <a href="../QUIZ1/quiz1.php"><i class="fas fa-question-circle"></i> Quiz</a>
        <a href="../TRIVIA & FACTS/trivfac.php"><i class="fas fa-lightbulb"></i> Trivia & Facts</a>
        <a href="../LANDING PAGE/landpage.php"><i class="fas fa-sign-out-alt"></i> <?php echo $logging ?></a>
    </nav>
</aside>
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


  <div class="timer-wrapper">
    <h2>Time Left</h2>
        
<div class="timer animatable">
  <svg>
    <circle cx="50%" cy="50%" r="90"/>
    <circle cx="50%" cy="50%" r="90" pathLength="1" />
    <text x="100" y="100" text-anchor="middle"><tspan id="timeLeft"></tspan></text>
    <text x="100" y="120" text-anchor="middle">seconds</text>
  </svg>
</div>
    </div>
    <h1>TRUE OR FALSE</h1>
    <div class="container">
        
      

        
 
<!-- Progress Indicator -->
<div id="progress" class="progress-indicator">Answered: 0 / 5</div>

        <!-- Question Section -->
        <div class="quiz-container">
            <div id="question" class="question"></div>

            <!-- Buttons for True/False -->
            <div class="button-container">
                <button id="trueBtn" class="btn">True</button>
                <button id="falseBtn" class="btn">False</button>
            </div>

            <!-- Score Display -->
            <div class="score-container">
                Score: <span id="score">0</span> / <span id="total"></span>
            </div>

            <!-- Final Result Message -->
            <div id="resultMessage" class="result-message"></div>

           <!-- Try Again / Exit Buttons -->
<div id="endButtons" class="end-buttons">
    <button id="tryAgainBtn" class="btn hidden">Try Again</button>
    <button id="exitBtn" class="btn hidden">Exit</button>
</div>

<!-- Exit button below the game -->
<div class="exit-container">
    <button id="exitGameBtn" class="btn">Exit</button>
</div>

        </div>
    </div>

     <!-- Audio element -->
     <audio id="sound" src="../GAMES/GAMES MUSIC/BgGame1.mp3"></audio>

     <!-- Button for sound control -->
     <button id="soundButton">🔊</button>

     <button class="sidebar-toggle" id="sidebar-toggle">☰</button>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../HOME1/home-js.js"></script>
    <script src="../GAMES/game2-js.js"></script>
    <script src="../GAMES/activity_scores.js"></script>
    <script>
        let timeLeft = 30;
let timer = document.getElementById('timeLeft');

function isTimeLeft() {
  return timeLeft > -1;
}

function runTimer(timerElement) {
	const timerCircle = timerElement.querySelector('svg > circle + circle');
	timerElement.classList.add('animatable');
	timerCircle.style.strokeDashoffset = 1;
    
	let countdownTimer = setInterval(function(){
		if(isTimeLeft()){
			const timeRemaining = timeLeft--;
			const normalizedTime = (60 - timeRemaining) / 60;
      // for clockwise animation
      // const normalizedTime = (timeRemaining - 60) / 60;
			timerCircle.style.strokeDashoffset = normalizedTime;
      timer.innerHTML = timeRemaining;
		} else {
		    const quizTitle = $('#quiz-title').val();

            console.log(quizTitle);

			clearInterval(countdownTimer);
			timerElement.classList.remove('animatable');
            const te = document.getElementById('question');
            te.innerHTML = "<h1 style='transform: translateX(-20px);'>Times Up</h1>";
            endGame();
			 $.ajax({
        url: '../GAMES/activity_scores.php',
        type: 'POST',
        data: {score: score, 'quiz_title': quizTitle},
        success: function(response) {
            console.log(response);
        },
        error: function(error) {
            console.error('Error:', error);
        }
    })
		}  
	}, 1000);
}

runTimer(document.querySelector('.timer'));
    </script>
</body>
</html>