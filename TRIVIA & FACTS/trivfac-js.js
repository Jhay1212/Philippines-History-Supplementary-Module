const triviaList = [
    "Did you know that the Philippines is the texting capital of the world? Filipinos send billions of text messages daily, leading the world in SMS usage!",
    "Did you know that almost all Filipinos are great singers? The love for music runs deep in the Philippines, and karaoke is a favorite pastime for Filipinos of all ages.",
    "Did you know that the Philippines is home to over 175 languages? This linguistic diversity showcases the country's rich cultural heritage.",
    "Did you know that the Philippines is predominantly Roman Catholic? About 80% of Filipinos are Catholic, making the Philippines the third-largest Catholic nation globally.",
    "Did you know that Filipino talent is recognized worldwide? Many Filipinos have found success on the global stage, from singers like Lea Salonga to boxing icon Manny Pacquiao.",
    "Did you know that the Philippine national flower is the Sampaguita? This small, fragrant flower symbolizes purity and is a source of national pride.",
    "Did you know that Filipinos celebrate the world’s longest Christmas season? The festive spirit begins in September and lasts well into January, filled with love and family gatherings.",
    "Did you know that jeepneys are a Filipino invention? These colorful vehicles are iconic symbols of Filipino creativity and resilience, repurposing American military jeeps after World War II.",
    "Did you know that the Philippines is the only Asian country with English as one of its official languages? Filipinos are known for their proficiency in English, making them valuable contributors in global industries.",
    "Did you know that the spirit of Bayanihan is uniquely Filipino? This communal tradition, where neighbors come together to help each other, is a beautiful example of the Filipino spirit of togetherness.",
    "Did you know that the Philippines is home to the Tinikling dance? This traditional folk dance is known worldwide and is often performed to represent Filipino culture.",
    "Did you know that Filipino fiestas are world-famous for their color and joy? These festivals, celebrated across the country, bring communities together in grand and vibrant celebrations.",
    "Did you know that the Philippines is home to the world’s smallest volcano, Taal Volcano? Despite its size, it is one of the most active and famous volcanoes in the world.",
    "Did you know that “Harana” is a traditional Filipino serenade? This romantic gesture of singing love songs under a woman’s window is a beautiful expression of Filipino courtship.",
    "Did you know that Filipino beliefs are a unique mix of indigenous, Catholic, and superstitious traditions? This fusion creates a rich cultural identity that is distinctly Filipino.",
    "Did you know that Filipinos are known for their love of karaoke? Whether at a party or home, singing is a favorite activity, with many Filipinos possessing incredible vocal talent.",
    "Did you know that the world’s largest pearl was found in the Philippines? The Pearl of Lao Tzu weighs around 14 pounds and was discovered off the coast of Palawan.",
    "Did you know that the Philippines has a matriarchal society? Women play a central role in Filipino families and are highly respected in both social and professional settings.",
    "Did you know that “Mano po” is a traditional Filipino gesture of respect? This practice, where younger people take the hand of an elder and place it on their forehead, is a sign of deep respect.",
    "Did you know that the Philippines has one of the richest and most diverse ecosystems in the world? The country is a biodiversity hotspot, with thousands of species of plants and animals unique to the region.",
    "Did you know that the Philippines has a rich film industry history? In 1919, the first Filipino silent film Dalagang Bukid was released, marking the start of the country’s cinematic journey.",
    "Did you know that basketball is the most popular sport in the Philippines? Filipinos’ love for basketball is so strong that courts can be found in every neighborhood, and the national team is competitive on the global stage.",
    "Did you know that Filipino hospitality is world-renowned? Filipinos are known for their warmth, and guests are always treated like family in Filipino homes.",
    "Did you know that the Philippines is one of the most linguistically diverse countries in the world? With over 7,000 islands and more than 175 languages spoken, the Philippines is a cultural and linguistic hub.",
    "Did you know that Lechon, a whole roasted pig, is considered one of the best dishes in the world? Famous for its crispy skin and flavorful meat, it’s often served at special Filipino gatherings.",
    "Did you know that the Banaue Rice Terraces are a UNESCO World Heritage Site? These terraces, carved into the mountains of Ifugao over 2,000 years ago, are a testament to the ingenuity and hard work of the Filipino people.",
    "Did you know that Filipinos have strong family values? Family is at the center of Filipino life, with close-knit relationships and respect for elders being core elements of Filipino society.",
    "Did you know that Filipino beauty queens are renowned worldwide? The Philippines has produced numerous Miss Universe, Miss World, and other international beauty pageant winners, showcasing Filipino beauty and grace.",
    "Did you know that Filipino children are taught to respect their elders from a young age? They use respectful terms like “po” and “opo” when speaking to older people, a practice that reflects deep cultural values.",
    "Did you know that the Philippines is known for its resilient and joyful people? Despite facing challenges, Filipinos are known for their positivity, warmth, and ability to rise above difficulties with a smile.",
    "Did you know that the national animal of the Philippines is the carabao? It is a water buffalo, revered for its strength and hard work in Filipino agriculture, especially in rice farming.",
    'Did you know that the national print of the Philippines is the “T’nalak”? This traditional woven fabric is made by the T’boli people of Mindanao and symbolizes their cultural heritage and craftsmanship.',
    "Did you know that the national hero of the Philippines is José Rizal? His writings and efforts against Spanish colonization sparked the Philippine Revolution, making him a symbol of freedom and patriotism.",
    "Did you know that the national tree of the Philippines is the narra tree? Known for its durable and beautiful wood, the narra is also celebrated for its vibrant yellow flowers and symbolic meaning of strength.",
    "Did you know that the Philippines is known for its beautiful beaches? Places like Boracay and Palawan are renowned worldwide for their crystal-clear waters and white sandy shores.",
    "Did you know that Filipino cuisine is influenced by several cultures? Dishes like adobo, lechon, and sinigang show the fusion of indigenous, Spanish, Chinese, and American influences in Filipino food.",
     "Did you know the Philippines was the first country in Asia to gain independence from colonial rule, declaring its independence from Spain on June 12, 1898, symbolizing the start of self-rule in Asia?",
    "Did you know the Philippines has the only 'living' national treasure: the traditional art of weaving called 'Inabel,' practiced by the Ilocano people and still passed down from generation to generation?",
    "Did you know the Philippines is the world's largest exporter of coconuts? Filipino farmers produce coconut products such as oil, milk, and copra.",
    "Did you know the Philippines is the origin of the world-famous Jeepney? This colorful and unique form of public transportation was originally made from surplus military jeeps after World War II.",
    "Did you know the Philippines has a rich tradition of balikbayan boxes, sent by Filipinos abroad to their families in the Philippines, filled with goods, souvenirs, and gifts of love?",
    "Did you know the national bird of the Philippines is the Philippine eagle, known for its size and strength, and considered one of the largest and most powerful eagles in the world?",
    "Did you know the Philippine flag is the only flag in the world that can be displayed upside down in times of war? The flag’s red portion signifies a state of war, making it a distinctive feature of Philippine symbolism.",
    "Did you know the Philippines is the world’s largest producer of mangoes, famous for the Carabao variety, which is recognized as the sweetest mango in the world?"
];

const triviaImages = [
    "../PICS/trivfac pics/1.jpg", // Corresponding image for the first trivia
    "../PICS/trivfac pics/2.jpg", // Corresponding image for the second trivia
    "../PICS/trivfac pics/3.jpg",
    "../PICS/trivfac pics/4.jpg",
    "../PICS/trivfac pics/5.jpg",
    "../PICS/trivfac pics/6.jpg",
    "../PICS/trivfac pics/7.jpg",
    "../PICS/trivfac pics/8.jpg",
    "../PICS/trivfac pics/9.jpg",
    "../PICS/trivfac pics/10.jpg",
    "../PICS/trivfac pics/11.jpg",
    "../PICS/trivfac pics/12.jpg",
    "../PICS/trivfac pics/13.jpg",
    "../PICS/trivfac pics/14.jpg",
    "../PICS/trivfac pics/15.jpg",
    "../PICS/trivfac pics/16.jpg",
    "../PICS/trivfac pics/17.jpg",
    "../PICS/trivfac pics/18.jpg",
    "../PICS/trivfac pics/19.jpg",
    "../PICS/trivfac pics/20.jpg",
    "../PICS/trivfac pics/21.jpg",
    "../PICS/trivfac pics/22.jpg",
    "../PICS/trivfac pics/23.jpg",
    "../PICS/trivfac pics/24.jpg",
    "../PICS/trivfac pics/25.jpg",
    "../PICS/trivfac pics/26.jpg",
    "../PICS/trivfac pics/27.jpg",
    "../PICS/trivfac pics/28.jpg",
    "../PICS/trivfac pics/29.jpg",
    "../PICS/trivfac pics/30.jpg",
    "./1.jpeg",
    "./2.jpeg",
    "./3.jpg",
        "./4.jpeg",
            "./5.webp",
            "./6.webp",
            "./7.webp",
            "./8.webp",
            "./9.webp",
            "./10.webp",
            "./11.webp",
            "./12.webp",
            "./13.webp",
            "./14.webp",
    // Add corresponding images for all trivia facts...
];

let currentTriviaIndex = 0;

const triviaText = document.getElementById('trivia-text');
const triviaImage = document.querySelector('.trivia-image'); // Get the image element
const backBtn = document.getElementById('back-btn');
const nextBtn = document.getElementById('next-btn');

// Function to shuffle two arrays in the same order
function shuffleTrivia() {
    for (let i = triviaList.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        // Swap trivia facts
        [triviaList[i], triviaList[j]] = [triviaList[j], triviaList[i]];
        // Swap corresponding images
        [triviaImages[i], triviaImages[j]] = [triviaImages[j], triviaImages[i]];
    }
}

// Call shuffle function before displaying any trivia
shuffleTrivia();

// Function to display trivia
function displayTrivia(index) {
    triviaText.textContent = triviaList[index];
    triviaImage.src = triviaImages[index]; // Change the image source
    triviaText.classList.remove('fade-in'); // Reset animation
    void triviaText.offsetWidth; // Trigger reflow to restart animation
    triviaText.classList.add('fade-in'); // Add class for animation
}

// Disable/enable buttons based on index
function updateButtonState() {
    backBtn.disabled = currentTriviaIndex === 0;
    nextBtn.disabled = currentTriviaIndex === triviaList.length - 1;
}

// Back button event listener
backBtn.addEventListener('click', () => {
    if (currentTriviaIndex > 0) {
        currentTriviaIndex--;
        displayTrivia(currentTriviaIndex);
        updateButtonState();
    }
});

// Next button event listener
nextBtn.addEventListener('click', () => {
    if (currentTriviaIndex < triviaList.length - 1) {
        currentTriviaIndex++;
        displayTrivia(currentTriviaIndex);
        updateButtonState();
    }
});

// Initial setup
displayTrivia(currentTriviaIndex);
updateButtonState();