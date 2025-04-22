let currentQuestionIndex = 0;
let score = 0; // Initialize score

const questions = [
    "What event in 1872 sparked Filipino nationalist sentiments and later influenced the revolutionary movement?",
    "Which three Filipino priests, collectively known as Gomburza, were executed by the Spanish in 1872 for their alleged role in the mutiny?",
    "The ilustrados were a class of Filipino elites who advocated for reforms. Where did many of them receive their education?",
    "What was the primary aim of the Propaganda Movement led by José Rizal, Marcelo H. del Pilar, and Graciano López Jaena?",
    "Which newspaper was the main platform for the Propaganda Movement, promoting Filipino reforms and equality?",

    "Who founded the Katipunan in 1892, which became the leading revolutionary group fighting for Philippine independence?",
    "What internal conflict occurred within the Katipunan during the Philippine Revolution, ultimately leading to the execution of Andrés Bonifacio?",
    "What event marked the formal declaration of Philippine independence from Spain on June 12, 1898?",
    "What agreement allowed Emilio Aguinaldo to go into exile in Hong Kong with financial compensation in 1897?",
    "Which act in 1902 set the foundation for limited self-governance in the Philippines during American colonial rule?"
];

const choices = [
    ["The Propaganda Movement", "The Cavite Mutiny", "The execution of José Rizal ", "The Spanish-American War"],
    ["José Burgos, Mariano Gómez, Jacinto Zamora", "José Rizal, Marcelo H. del Pilar, Graciano López Jaena", "Andrés Bonifacio, Emilio Aguinaldo, Apolinario Mabini", "Mariano Ponce, Antonio Luna, José Alejandrino"],
    ["Spain", "The United States", "Europe", "Mexico"],
    ["Complete independence from Spain", "Social reforms and equal rights under Spanish rule", "Immediate revolution", "Military alliances with other countries"],
    ["La Independencia ", "La Solidaridad", "El Ilustrado", "El Filibusterismo"],

    ["José Rizal", "Emilio Aguinaldo", "Andrés Bonifacio", "Apolinario Mabini"],
    ["The conflict between the Magdiwang and Magdalo factions", "The dispute over the Pact of Biak-na-Bato", "The debate over joining the U.S. forces against Spain", "A conflict between Bonifacio and José Rizal"],
    ["The signing of the Treaty of Paris", "The execution of José Rizal", "Aguinaldo’s proclamation in Kawit, Cavite", "The start of the Philippine-American War"],
    ["The Treaty of Paris", "The Pact of Biak-na-Bato", "The Jones Act", "The Malolos Constitution"],
    ["The Philippine Organic Act", "The Jones Act", "The Treaty of Paris", "The Philippine Constitution"]
];

const correctAnswers = [1, 0, 2, 1, 1, 2, 0, 2, 2, 0]; // Index of correct answers for each question

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
