// Questions Array
const questions = [
    { question: "The Spanish colonization of the Philippines began in 1521.", answer: false },
    { question: "José Rizal's Noli Me Tangere and El Filibusterismo inspired the rise of nationalism among Filipinos.", answer: true },
    { question: "The Treaty of Paris in 1898 officially ended Spanish rule in the Philippines, ceding it to the United States.", answer: true },
    { question: "During the American period, English was introduced as the medium of instruction in schools.", answer: true },
    { question: "The Commonwealth government was established in 1935 as a transitional government before full independence.", answer: true },
    { question: "The Japanese occupation in the Philippines lasted from 1941 to 1945.", answer: true },
    { question: "Emilio Aguinaldo was the first president of the Philippine Republic.", answer: true },
    { question: "The independence of the Philippines from the United States was officially declared on July 4, 1946.", answer: true },
    { question: "The Marcos era began in 1965 and was characterized by significant economic growth and peace throughout the country.", answer: false },
    { question: "The People Power Revolution in 1986 led to the end of Ferdinand Marcos’s presidency.", answer: true },
    { question: "Manuel L. Quezon is known as the Father of the Philippine National Language.", answer: true },
    { question: "The Spanish period in the Philippines lasted for over 300 years.", answer: true },
    { question: "The 1935 Constitution established a fully independent Philippine government under President Manuel Roxas.", answer: false },
    { question: "Philippine independence is celebrated every June 12, commemorating the declaration of independence from Spanish rule in 1898.", answer: true },
    { question: "The Tydings–McDuffie Act promised independence to the Philippines after a ten-year transition period.", answer: true }
];

// Shuffle function to randomize questions array
function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

// Shuffle the questions array before starting
shuffle(questions);

// Variables to store current question, score, and answered questions count
let currentQuestionIndex = 0;
let score = 0;
let answeredQuestions = 0;  // Track how many questions have been answered

// Get HTML elements
const questionElement = document.getElementById('question');
const trueBtn = document.getElementById('trueBtn');
const falseBtn = document.getElementById('falseBtn');
const scoreElement = document.getElementById('score');
const totalElement = document.getElementById('total');
const resultMessageElement = document.getElementById('resultMessage');
const tryAgainBtn = document.getElementById('tryAgainBtn');
const exitBtn = document.getElementById('exitBtn');
const containerElement = document.querySelector('.container');
const progressElement = document.getElementById('progress');  // Progress indicator
const quizTitle = document.getElementById('quizTitle').textContent;
// Set total number of questions
totalElement.textContent = questions.length;

// Function to update progress indicator
function updateProgress() {
    progressElement.textContent = `Answered: ${answeredQuestions} / ${questions.length}`;
}

// Function to display the next question
function displayQuestion() {
    if (currentQuestionIndex < questions.length) {
        questionElement.textContent = questions[currentQuestionIndex].question;

        // Ensure the question is visible by setting its opacity to 1
        questionElement.style.opacity = '1';
        questionElement.style.animation = 'fadeIn 0.5s forwards ease';

        trueBtn.style.opacity = '0';
        falseBtn.style.opacity = '0';

        // Re-trigger button animations
        requestAnimationFrame(() => {
            trueBtn.style.animation = 'slideUpFadeIn 0.5s forwards ease 0.5s';
            falseBtn.style.animation = 'slideUpFadeIn 0.5s forwards ease 0.5s';
        });
    } else {
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
}

// Check answer function
function checkAnswer(userAnswer) {
    const correctAnswer = questions[currentQuestionIndex].answer;
    if (userAnswer === correctAnswer) {
        score++;
        scoreElement.textContent = score;
    }

    currentQuestionIndex++;
    answeredQuestions++;  // Increment answered questions count
    updateProgress();  // Update progress after each question is answered
    displayQuestion();
}

// End game and show result
function endGame() {
    trueBtn.style.display = 'none';
    falseBtn.style.display = 'none';

    // Hide the bottom exit button when the end buttons appear
    exitGameBtn.classList.add('hidden');

    if (score >= questions.length * .75) {
        resultMessageElement.textContent = "Congrats! You answered all correctly!";
        exitBtn.classList.remove('hidden');
    } else {
        resultMessageElement.textContent = "Failed! You missed some answers.";
        tryAgainBtn.classList.remove('hidden');
        exitBtn.classList.remove('hidden');
    }
    resultMessageElement.classList.add("show");
}

// Reset game function (for Try Again button)
function resetGame() {
    currentQuestionIndex = 0;
    score = 0;
    answeredQuestions = 0;  // Reset answered questions count
    scoreElement.textContent = score;
    resultMessageElement.classList.remove('show');
    tryAgainBtn.classList.add('hidden');
    exitBtn.classList.add('hidden');
    trueBtn.style.display = 'inline-block';
    falseBtn.style.display = 'inline-block';

// Show the bottom exit button again when the game restarts
exitGameBtn.classList.remove('hidden');

    // Restart container animation
    containerElement.style.animation = 'none';
    setTimeout(() => {
        containerElement.style.animation = '';
    }, 0);

    // Shuffle the questions again for a fresh start
    shuffle(questions);
    updateProgress();  // Reset progress indicator to 0
    displayQuestion();
}

// Exit game function (for Exit button)
function exitGame() {
    window.location.href = "../GAMES/games.php";  // Redirect to homepage or other page
}

// Event listeners for buttons
trueBtn.addEventListener('click', () => checkAnswer(true));
falseBtn.addEventListener('click', () => checkAnswer(false));
tryAgainBtn.addEventListener('click', resetGame);
exitBtn.addEventListener('click', exitGame);

// Initial display
updateProgress();  // Initialize progress display
displayQuestion();

// Exit game function for the new exit button
function exitGamePage() {
    window.location.href = "../GAMES/games.php";  // Redirect to homepage or other page
}

// Event listener for the new exit button
const exitGameBtn = document.getElementById('exitGameBtn');
exitGameBtn.addEventListener('click', exitGamePage);

// Get the audio element and the button
const sound = document.getElementById('sound');
sound.href = '../GAMES/GAMES MUSIC/BgGame1.mp3';
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
