let currentQuestionIndex = 0;
let score = 0; // Initialize score

const questions = [
    "Who was the first European to arrive in the Philippines and claim the islands for Spain?",
    "In what year did Miguel López de Legazpi establish the first permanent Spanish settlement in the Philippines?",
    "What city did Legazpi establish as the capital of Spanish colonial rule in the Philippines?",
    "Which group frequently resisted Spanish colonization, launching raids from Mindanao and the Sulu Archipelago?",
    "The name Las Islas Filipinas was given to the islands by which Spanish explorer?",

    "What significant event briefly interrupted Spanish rule in the Philippines between 1762 and 1764?",
    "Which Filipino leader declared Philippine independence from Spain on June 12, 1898?",
    "What agreement ended the Spanish-American War and ceded the Philippines to the United States?",
    "What Filipino secret society was founded by Andrés Bonifacio to overthrow Spanish rule?",
    "Which Filipino nationalist wrote Noli Me Tangere and El Filibusterismo, fueling the independence movement?"
];

const choices = [
    ["Miguel López de Legazpi", "Ferdinand Magellan", "Ruy López de Villalobos", "Andrés Bonifacio"],
    ["1521", "1543", "1565", "1571"],
    ["Cebu", "Manila", "Iloilo", "Vigan"],
    ["The Chinese", "The Muslims (Moros)", "The Portuguese", "The Ilustrados"],
    ["Ferdinand Magellan", "Miguel López de Legazpi", "Ruy López de Villalobos", "José Basco y Vargas"],

    ["The British invasion during the Seven Years’ War", "The Moro raids", "The Philippine Revolution", "The arrival of the Dutch"],
    ["José Rizal", "Andrés Bonifacio", "Emilio Aguinaldo", "Apolinario Mabini"],
    ["Pact of Biak-na-Bato", "Treaty of Manila", "Treaty of Paris", "Treaty of Tordesillas"],
    ["Ilustrados", "Katipunan", "Propaganda Movement", "Principalía"],
    ["Emilio Aguinaldo", "Apolinario Mabini", "José Rizal", "Marcelo H. del Pilar"]
];

const correctAnswers = [1, 2, 1, 1, 2, 0, 2, 2, 1, 2]; // Index of correct answers for each question

// Shuffle questions and align choices and correctAnswers
function shuffleQuiz() {
    const shuffledIndexes = [...Array(questions.length).keys()].sort(() => Math.random() - 0.5);
    
    const shuffledQuestions = shuffledIndexes.map(index => questions[index]);
    const shuffledChoices = shuffledIndexes.map(index => choices[index]);
    const shuffledCorrectAnswers = shuffledIndexes.map(index => correctAnswers[index]);

    questions.length = 0;
    choices.length = 0;
    correctAnswers.length = 0;

    shuffledQuestions.forEach(q => questions.push(q));
    shuffledChoices.forEach(c => choices.push(c));
    shuffledCorrectAnswers.forEach(a => correctAnswers.push(a));
}

// Initialize total questions and answered questions
document.getElementById('totalQuestions').textContent = questions.length;
document.getElementById('answeredQuestions').textContent = currentQuestionIndex;

// Load the first question when the page is loaded
window.onload = () => {
    shuffleQuiz(); // Shuffle the quiz questions and choices
    loadQuestion();
};

function loadQuestion() {
    const questionElement = document.getElementById('question');
    const choiceElements = document.querySelectorAll('.choice-group');
    
    questionElement.textContent = questions[currentQuestionIndex];
    
    choiceElements.forEach((element, index) => {
        element.textContent = choices[currentQuestionIndex][index];
        element.classList.remove('selected'); // Clear previous selection
    });
    
    document.getElementById('submitButton').style.display = currentQuestionIndex === questions.length - 1 ? 'block' : 'none';
    
    // Update the question indicator
    document.getElementById('answeredQuestions').textContent = currentQuestionIndex;
}

function selectChoice(choiceElement, choiceIndex) {
    const choiceElements = document.querySelectorAll('.choice-group');
    
    choiceElements.forEach(element => {
        element.classList.remove('selected');
    });
    
    choiceElement.classList.add('selected');
    
    // Store the user's choice
    choiceElement.dataset.selectedIndex = choiceIndex;
}

function nextQuestion() {
    const selectedChoice = document.querySelector('.choice-group.selected');
    
    if (selectedChoice) {
        const selectedIndex = parseInt(selectedChoice.dataset.selectedIndex);
        if (selectedIndex === correctAnswers[currentQuestionIndex]) {
            ++score; // Increase score if correct
        }
        
        if (currentQuestionIndex < questions.length - 1) {
            currentQuestionIndex++;
            loadQuestion();
        }

        // Update the question indicator
        document.getElementById('answeredQuestions').textContent = currentQuestionIndex + 1; // Since 1-based
    }
}

function submitQuiz() {
    // Update score display
    const op = score + 1;
    document.getElementById('finalScore').textContent = op + " out of " + questions.length;
    const resultMessage = score >=  questions.length  % .75  ?"Good job! You completed the quiz." : "You fail the quiz. Try again!";
    document.getElementById('resultMessage').textContent = resultMessage;

    // Show balloons
    showBalloons();

    // Show modal
    document.getElementById('resultModal').style.display = "block";
}

// Function to show balloons animation
function showBalloons() {
    const balloons = document.querySelectorAll('.balloon');
    balloons.forEach((balloon, index) => {
        setTimeout(() => {
            balloon.style.animation = "rise 3s ease-in forwards"; // Trigger animation
        }, index * 300); // Stagger the animations
    });
}

// Close the modal
function closeModal() {
    document.getElementById('resultModal').style.display = "none";
}

// Function to go back to home (you can replace the location with your home page)
function goHome() {
    window.location.href = "../QUIZ1/quiz1.php"; // Adjust the link to your home page
}

// Update score display
function updateScoreDisplay() {
    document.getElementById('score').textContent = score;
}

// Get the audio element and the button
const sound = document.getElementById('sound');
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
