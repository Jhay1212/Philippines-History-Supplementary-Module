<?php
include "../UTILS/session_check.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLAGS</title>
    <link rel="stylesheet" href="../GAMES/games-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>

h1.gradient-text {
    text-align: center;
    background: linear-gradient(45deg, #ff8a00, #da1b60);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.c-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

..slider-wrapper {
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 400px;
    border-radius: 20px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    margin-bottom: 20px;
}

.slider {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: 100%;
    height: 100%;
}

.slider img {
    min-width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.slider img:hover {
    transform: scale(1.05);
    cursor: pointer;
}

.slider-nav {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 10px;
}

.slider-nav .btn {
    width: 15px;
    height: 15px;
    background-color: #ccc;
    border-radius: 50%;
    cursor: pointer;
    transition: background-color 0.3s;
}

.slider-nav .btn.active {
    background-color: #ff8a00;
}

.text-box {
    text-align: center;
    background: #fff;
    padding: 20px;
    margin: 0 auto;
    max-width: 800px;
    border-radius: 15px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
}

.text-box h1.title {
    font-size: 1.8rem;
    margin-bottom: 10px;
    color: #333;
    text-transform: uppercase;
}

.text-box p#description {
    font-size: 1.2rem;
    color: #666;
    line-height: 1.6;
}

/* Animations */
.slide-anim {
    animation: fadeIn 0.5s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* Responsive styling */
@media (max-width: 768px) {
    .slider-wrapper {
        height: 250px;
    }

    h1.gradient-text {
        font-size: 1.8rem;
    }

    .text-box h1.title {
        font-size: 1.4rem;
    }

    .text-box p#description {
        font-size: 1rem;
    }
}
    </style>
</head>
<body>

   <!-- Sidebar on the Right -->
   <div id="sidebar" class="sidebar">

    <!-- User Info Section -->
    <div class="user-info">
            <img src="<?php echo $profile_path?>" alt="User Icon" class="user-icon profile-pic" id="userIcon">
            <span class="username"><?php echo $_SESSION['username']?></span>
        </div>

    <a href="../HOME1/default.php"><i class="fas fa-home"></i> Home</a>
    <a href="../BOOKMARK/bookmark1.php"><i class="fas fa-bookmark"></i> Bookmark</a>
    <a href="../GAMES/games.html"><i class="fas fa-gamepad"></i> Games</a>
    <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
    <a href="../GALLERY/gallery.html"><i class="fas fa-image"></i> Gallery</a>
    <a href="../QUIZ1/quiz1.html"><i class="fas fa-question-circle"></i> Quiz</a>
    <a href="../TRIVIA & FACTS/trivfac.html"><i class="fas fa-lightbulb"></i> Trivias & Facts</a>
    <a href="../LANDING PAGE/landpage.html"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

    <!-- Navbar Section -->
    <nav class="navbar">
        <!-- Sidebar Toggle Button -->
        <div class="navbar-left">

            <!-- Website Logo and Name -->
            <div class="navbar-logo">
                <img src="../PICS/logo1.png" alt="Website Logo" class="logo">
                <span class="website-name">DISCOVERING PHILIPPINE HISTORY</span>
            </div>
        </div>

        <!-- Search and Info Section -->
        <div class="navbar-right">
            <input type="text" class="search-bar" placeholder="Search...">
            <a href="#" class="info-icon">ℹ️</a>
        </div>
    </nav>

    <!-- Game Selection Section -->
    <div class="main-content">
        <div class="c-container">
            <h1 class="gradient-text">History of Philippine Flag</h1>
            <div class="slider-wrapper">
                <div class="slider">
                    <!-- Images will be dynamically injected here by JavaScript -->
                </div>
        
                <div class="slider-nav">
                    <!-- Navigation buttons will be dynamically injected here by JavaScript -->
                </div>
            </div>
        </div>
        
        <div class="text-box animated-border">
            <h1 class="title"></h1>
            <p id="description"></p>
        </div>
        
        
        
    <!-- JavaScript -->
    <script src="../HOME1/home-js.js"></script>


    <script>
        // Flag image base path
     // Flag image base path
const basePath = '../PICS/hd/';

// Number of flags
const numberOfFlags = 12;

// Description texts for each flag (already provided in your code)
const descriptions = [
            {
                title: 'The "FIRST" Katipunan flag',
                desc: "The first Filipino flag can be traced from the time of Andres Bonifacio's secret society named: Kataastaasang Kagalanggalang Katipunan ng mga Anak ng Bayan (Highest and Most Honorable Society of the Sons of the Nation) or the Katipunan or KKK for short. Benita Rodriquez and Bonifacio's wife, Gregoria de Jesus, made the first Filipino flag."
            },
            {
                title: 'First Variant of Katipunan Flag',
                desc: 'The first Philippine flags were made of red cloth with white KKK initials sewn in white. The red color symbolized the blood of the members of the Katipunan in which inductees to the society signed their names with their own blood.'
            },
            {
                title: 'Second Variant of Katipunan Flag',
                desc: 'The Filipino flag had variations (from 1892 to 1896). Some members arranged the KKK in a triangle while some generals of the revolution designed their own flags.'
            },
            // {
            //     title: Personal Flag of Mariano Lanera,
            //     desc: Of note is the black banner of General Mariano Llanera in Nueva Ecija with a letter K and a skull with two cross bones underneath.
            // },
            // {
            //     title: Personal Flag of General Pio del Pilar,
            //     desc: Another variation of the Filipino flag was that of General Pio del Pilar. It had an equilateral triangle with a K at each angle with a rising sun behind a mountain.
            // },
            // {
            //     title: War Standard Flag by Andres Bonifacio,
            //     desc: In this Philippine flag picture, the Sun with the KKK underneath was also a derivative of previous Filipino flags.
            // },
            // {
            //     title: Purported flag of the Magdalo faction.,
            //     desc: In 1896, the Magdalo faction of the Katipunan in Cavite headed by General Emilio Aguinaldo had a red ensign with a sun and at the center of the sun is the letter K written in the ancient Filipino alphabet.
            // }, 
            // {
            //     title: Purported flag of Republic of Biak-na-Bato. Sometimes described as the "first official revision".,
            //     desc: Another variation is the Sun of Liberty of the Naic Assembly in 1897 and the flag used by the Republic of Biak-na-Bato.
            // },
            // {
            //     title: Personal flag of Gregorio del Pilar,
            //     desc: General Gregorio del Pilar also used another flag during the Battle of Pasong Balite and at the Battle of Tirad Pass. This Filipino flag is similar to the flag of Cuba, according to del Pilar.
            // },
            // {
            //     title: Personal flag of General Emilio Aguinaldo,
            //     desc: In 1898 Emilio Aguinaldo while in exile in Hong Kong had a banner sewn with the triangle of the Masonry with the mythical sun and face with 8 rays representing the 8 provinces that revolted against the Spanish rule (Manila, Cavite, Bulacan, Nueva Ecija, Pampanga, Bataan, Laguna, and Batangas) and 3 stars representing the main island groups: Luzon, Visayas and Mindanao.
            // },
            // {
            //     title: Philippine Flag Variation,
            //     desc: Flag of the First Philippine Republic with an anthropomorphic sun. The flag itself is not part of the "Evolution of the Philippine Flag" but is often displayed alongside the other flags. Sometimes the more contemporary national flag without the anthropomorphic sun is used.
            // },
            // {
            //     title: Philippine Flag Variation,
            //     desc: Flag of the First Philippine Republic with an anthropomorphic sun. The flag itself is not part of the "Evolution of the Philippine Flag" but is often displayed alongside the other flags. Sometimes the more contemporary national flag without the anthropomorphic sun is used.
            // }
        ];
// Get the DOM elements
const slider = document.querySelector('.slider');
const sliderNav = document.querySelector('.slider-nav');
const descriptionElement = document.getElementById('description');
const titleElement = document.querySelector('.title');

// Track current slide
let currentSlide = 0;

// Dynamically generate flag images and navigation buttons
for (let i = 1; i <= numberOfFlags; i++) {
    // Create image element
    const img = document.createElement('img');
    img.src = `${basePath}flag${i}.png`;
    slider.appendChild(img);

    // Create navigation button
    const btn = document.createElement('div');
    btn.classList.add('btn');
    if (i === 1) btn.classList.add('active');  // Set the first button as active
    btn.dataset.index = i - 1;  // Assign index to the button
    sliderNav.appendChild(btn);

    // Add click event listener to navigate to the corresponding slide
    btn.addEventListener('click', () => {
        currentSlide = parseInt(btn.dataset.index);
        updateSlider();
    });
}

// Update slider position and descriptions
function updateSlider() {
    // Move the slider to show the current image
    slider.style.transform = `translateX(-${currentSlide * 100}%)`;

    // Update description and title
    titleElement.textContent = descriptions[currentSlide].title;
    descriptionElement.textContent = descriptions[currentSlide].desc;

    // Highlight the active navigation button
    document.querySelectorAll('.btn').forEach((button, index) => {
        button.classList.toggle('active', index === currentSlide);
    });
}

// Initial description load
titleElement.textContent = descriptions[0].title;
descriptionElement.textContent = descriptions[0].desc;

        </script>
</body>
</html>