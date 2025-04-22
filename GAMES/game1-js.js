// Shuffle function to randomize the gameData array
function shuffleQuestions(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]]; // Swap elements
    }
    return array;
}

// Game Data: Array of questions with images, hints, options, and correct answer
const gameData = shuffleQuestions([
    {
        image: "../PICS/GAMES PICS/game1 pics/1 Andres Bonifacio.jpg",
        hint: "Hint: I am known as the Father of the Philippine Revolution and I founded the Katipunan, the secret society that launched the revolution against Spain.",
        options: ["José Rizal", "Emilio Aguinaldo", "Andrés Bonifacio", "Apolinario Mabini"],
        correct: 2
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/2 Jose Rizal.png",
        hint: "Hint: I am the national hero of the Philippines, known for my novels Noli Me Tangere and El Filibusterismo, which exposed the abuses of the Spanish colonizers.",
        options: ["José Rizal", "Marcelo H. del Pilar", "Graciano López Jaena", "Gregorio del Pilar"],
        correct: 0
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/3 Emilio Aguinaldo.jpg",
        hint: "Hint: I was the first President of the Philippines and led the Filipino forces during the Philippine Revolution and later during the Philippine-American War.",
        options: ["Emilio Aguinaldo", "Manuel L. Quezon", "Sergio Osmeña", "Andres Bonifacio"],
        correct: 0
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/4 Manuel Quezon.jpg",
        hint: "Hint: I became the President of the Commonwealth of the Philippines and was known for advocating the national language.",
        options: ["José P. Laurel", "Manuel L. Quezon", "Sergio Osmeña", "Ramon Magsaysay"],
        correct: 1
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/5 Ferdinand Marcos.jpg",
        hint: "Hint: I declared Martial Law in the Philippines in 1972 and served as president for 21 years, becoming one of the longest-serving leaders in the country's history.",
        options: ["Corazon Aquino", "Ferdinand Marcos", "Diosdado Macapagal", "Benigno Aquino III"],
        correct: 1
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/6 Corazon Aquino.jpg",
        hint: "Hint: I am the first female president of the Philippines, rising to power after the People Power Revolution in 1986, which ousted a dictator.",
        options: ["Gloria Macapagal Arroyo", "Miriam Defensor Santiago", "Corazon Aquino", "Imelda Marcos"],
        correct: 2
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/7 Gregorio Del Pilar.jpg",
        hint: "Hint: I am a hero who became the youngest Filipino general in the Philippine Revolutionary Army, and I died heroically during the Battle of Tirad Pass.",
        options: ["Gregorio del Pilar", "Antonio Luna", "Miguel Malvar", "Juan Luna"],
        correct: 0
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/8 Apolinario Mabini.jpg",
        hint: "Hint: I am a paralytic revolutionary known as the Brains of the Revolution. My intellectual contributions shaped the ideals of the Philippine Revolution.",
        options: ["Jose Rizal", "Emilio Aguinaldo", "Apolinario Mabini", "Antonio Luna"],
        correct: 2
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/9 Manual Roxas.jpg",
        hint: "Hint: I was a prominent lawyer and diplomat who became the first president of the independent Third Republic of the Philippines after World War II.",
        options: ["Manuel Roxas", "Elpidio Quirino", "Sergio Osmeña", "Jose P. Laurel"],
        correct: 0
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/10 Antonio Luna.jpg",
        hint: "Hint: I am a military leader known for my tactical brilliance and strict discipline. I was assassinated during the Philippine-American War, and my death weakened the revolution.",
        options: ["Andres Bonifacio", "Antonio Luna", " Emilio Aguinaldo", "Miguel Malvar"],
        correct: 1
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/11 Rodrigo Duterte.jpg",
        hint: "Hint: I am 16th president of the Philippines from 2016 to 2022.",
        options: ["Gloria Macapagal Arroyo", "Rodrigo Duterte", "Corazon Aquino", "Imelda Marcos"],
        correct: 1
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/12 Carlos P. Garcia.jpg",
        hint: "Hint: I am the sixth president of the Philippines and was known for my Filipino First Policy, which prioritized the interests of Filipino businesses and the economy.",
        options: ["Diosdado Macapagal", "Carlos P. Garcia", "Ferdinand Marcos", "Elpidio Quirino"],
        correct: 1
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/13 Diosdado Macapagal.jpg",
        hint: "Hint: I served as the President of the Philippines from 1961 to 1965 and I worked on reclaiming Sabah for the Philippines. I am also the father of another future president.",
        options: ["Diosdado Macapagal", "Manuel Roxas", "Sergio Osmeña", "AJose P. Laurel"],
        correct: 0
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/14 Elpidio Quirino.jpg",
        hint: "Hint: I am the youngest person to ever become President of the Philippines, ascending to the position at just 46 years old after the death of President Manuel Roxas in 1948.",
        options: ["Elpidio Quirino", "Sergio Osmeña", "Ramon Magsaysay", "Ferdinand Marcos"],
        correct: 0
    },
    {
        image: "../PICS/GAMES PICS/game1 pics/15 Gabriela Silang.jpg",
        hint: "Hint: I am the wife of Diego Silang and continued leading the Ilocano revolt against the Spanish after my husband’s assassination, making me a symbol of Filipino women’s courage.",
        options: ["Gregoria de Jesus", "Melchora Aquino", "Gabriela Silang", "Teresa Magbanua"],
        correct: 2
    }
    

]);

let currentQuestion = 0;
let timeLeft = 30;
let timerExpired = false;
let timer = document.getElementById('timeLeft');

// Load the first question
function loadQuestion() {
    const question = gameData[currentQuestion];
    document.getElementById('person-image').src = question.image;
    document.getElementById('hint').textContent = question.hint;

    const options = document.querySelectorAll('.option-btn');
    options.forEach((btn, index) => {
        if (!timerExpired) {
        btn.textContent = question.options[index];
        btn.addEventListener('click', function() {
            // btn.classList.add('highlighted');
            let xismis;
            
        })
        }

    });

    document.getElementById('feedback').textContent = ''; // Clear feedback
    document.getElementById('next-btn').style.visibility = 'hidden'; // Hide next button

    // Update the question progress indicator
    document.getElementById('question-indicator').textContent = `Question ${currentQuestion + 1} of ${gameData.length}`;
}

// Check if the selected answer is correct
function checkAnswer(selected) {
    const question = gameData[currentQuestion];
    const feedback = document.getElementById('feedback');

    if (selected === question.correct) {
        score++; // Increase score for a correct answer
        feedback.textContent = "Correct!";
        feedback.style.color = "green";
    } else {
        feedback.textContent = "Wrong!";
        feedback.style.color = "red";
    }

    // Update the score display
    document.getElementById('score').innerText = score;

    // Always show the next button regardless of whether the answer is right or wrong
    document.getElementById('next-btn').style.visibility = 'visible'; 
}

// Load the next question
function nextQuestion() {
    currentQuestion++;
    if (currentQuestion < gameData.length) {
        loadQuestion(); // Load the next question
    } else {
        // When game is complete, show the animated congrats message
        const gameContainer = document.querySelector('.game-container');
        const congratsMessage = document.getElementById('congrats-message');
        
        gameContainer.innerHTML = ''; // Clear the game container
        congratsMessage.style.display = 'block'; // Show the message

        $.ajax({
            url: '../GAMES/activity_scores.php',
            type: 'POST',
            data: {score: score, 'quiz_title': quizTitle},
            success: function(response) {
                console.log(response);
            },
            error: function(error) {
                console.error('Error:', error);
            }})
    }
}




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
			timerExpired = true;
			
			clearInterval(countdownTimer);
			timerElement.classList.remove('animatable');

            const gameContainer = document.querySelector('.game-container');
            const congratsMessage = document.getElementById('times-up');
            
            gameContainer.innerHTML = ''; // Clear the game container
            congratsMessage.style.display = 'block'; // Show the message
			
			const quizTitle = $('#quiz-title').val();

            console.log(quizTitle);

			clearInterval(countdownTimer);
			timerElement.classList.remove('animatable');
			 $.ajax({
        url: '../GAMES/activity_scores.php',
        type: 'POST',
        data: {score: score, 'quiz_title': quizTitle},
        success: function(response) {
            console.log(response);
        },
        error: function(error) {
            console.error('Error:', error);
        }})
			
			return;
		}  
	}, 1000);
}

if (timerExpired ){
    alert("Timer ran out");
}

runTimer(document.querySelector('.timer'));

// Exit the game
function exitGame() {
    if (confirm("Are you sure you want to exit the game?")) {
        window.location.href = '../GAMES/games.php'; // Redirect to exit page or another URL
    }
}

// Initial call to load the first question
loadQuestion();

let score = 0; // Initialize the score variable

// Get the audio element and the button
const sound = document.getElementById('sound');
sound.href = '../GAMES/GAMES MUSIC/BgGame2.mp3';
const soundButton = document.getElementById('soundButton');

// Boolean to track the sound state
let isPlaying = false;

// Event listener to toggle sound
soundButton.addEventListener('click', () => {
    if (isPlaying) {
        sound.pause();
        soundButton.textContent = '🔇'; // Change icon to mute
    } else {
        sound.play();
        soundButton.textContent = '🔊'; // Change icon to speaker
    }
    isPlaying = !isPlaying;
});

