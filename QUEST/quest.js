const timeline = [
    { event: 'First Cry of the Philippine Revolution', date: new Date(1896, 7, 23), ranking: 1 },
    { event: 'Death of José Rizal', date: new Date(1896, 11, 30), ranking: 2 },
    { event: 'Declaration of Philippine Independence', date: new Date(1898, 5, 12), ranking: 3 },
    { event: 'Inauguration of the First Philippine Republic', date: new Date(1899, 0, 23), ranking: 4 },
    { event: 'Philippine-American War Begins', date: new Date(1899, 1, 4), ranking: 5 },
    { event: 'Capture of Emilio Aguinaldo', date: new Date(1901, 2, 23), ranking: 6 },
    { event: 'Tydings–McDuffie Act Signed', date: new Date(1934, 2, 24), ranking: 7 },
    { event: 'Commonwealth of the Philippines Inaugurated', date: new Date(1935, 10, 15), ranking: 8 },
    { event: 'Japanese Occupation of the Philippines', date: new Date(1942, 0, 2), ranking: 9 },
    { event: 'Bataan Death March', date: new Date(1942, 3, 9), ranking: 10 },
    { event: 'The Fall of Corregidor', date: new Date(1942, 4, 6), ranking: 11 },
    { event: 'Leyte Landing', date: new Date(1944, 9, 20), ranking: 12 },
    { event: 'Battle of Manila', date: new Date(1945, 1, 3), ranking: 13 },
    { event: 'Independence from the United States', date: new Date(1946, 6, 4), ranking: 14 },
    { event: 'Proclamation of Martial Law', date: new Date(1972, 8, 21), ranking: 16 },
    { event: 'Assassination of Benigno Aquino Jr.', date: new Date(1983, 7, 21), ranking: 17 },
    { event: 'EDSA People Power Revolution', date: new Date(1986, 1, 25), ranking: 18 },
    { event: 'Mount Pinatubo Eruption', date: new Date(1991, 5, 15), ranking: 19 },
    { event: 'People Power 2', date: new Date(2001, 0, 20), ranking: 20 },
    { event: 'Typhoon Yolanda', date: new Date(2013, 10, 8), ranking: 21 },
    { event: 'COVID-19 Pandemic', date: new Date(2020, 2, 15), ranking: 22 },
    { event: 'Typhoon Paeng', date: new Date(2022, 9, 29), ranking: 23 }
];

function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}

const selectedEvents = shuffleArray([...timeline]).slice(0, 5);
const eventsContainer = document.getElementById('events');
const dropzone = document.getElementById('dropzone');
const checkOrderBtn = document.getElementById('check-order');
const result = document.getElementById('result');
const reset = document.getElementById('reset');

let selectedOrder = [];
let originalPositions = [];

// Populate the event elements
selectedEvents.forEach(event => {
    const clickableDiv = document.createElement('div');
    clickableDiv.className = 'clickable';
    clickableDiv.setAttribute('data-ranking', event.ranking); // Store ranking
    clickableDiv.textContent = event.event;
    eventsContainer.appendChild(clickableDiv);
});

// Event listener for the clickable events
eventsContainer.addEventListener('click', (e) => {
    if (e.target.classList.contains('clickable')) {
        const clickedRanking = parseInt(e.target.getAttribute('data-ranking'));

        if (!selectedOrder.includes(clickedRanking)) {
            selectedOrder.push(clickedRanking);
            const clonedItem = e.target.cloneNode(true);
            clonedItem.addEventListener('click', handleDropzoneClick);
            dropzone.appendChild(clonedItem);

            // Record the original position for resetting
            originalPositions.push({ item: e.target, index: [...eventsContainer.children].indexOf(e.target) });
            e.target.remove(); // Remove the item from its original container
        }
    }
});

// Handle removing an item from the dropzone and restoring to the event container
function handleDropzoneClick(e) {
    const clickedRanking = parseInt(e.target.getAttribute('data-ranking'));
    selectedOrder = selectedOrder.filter(ranking => ranking !== clickedRanking);
    e.target.remove(); // Remove from dropzone

    // Return the item to its original position in the events container
    const original = originalPositions.find(pos => pos.item.getAttribute('data-ranking') == clickedRanking);
    if (original) {
        eventsContainer.insertBefore(original.item, eventsContainer.children[original.index]);
        originalPositions = originalPositions.filter(pos => pos.item.getAttribute('data-ranking') !== clickedRanking);
    }
}

// Check if the selected events are in the correct ranking order
checkOrderBtn.addEventListener('click', () => {
    let correct = true;

    // Check if the user has selected all events
    if (selectedOrder.length !== selectedEvents.length) {
        correct = false;
    } else {
        // Check if the selected rankings are in ascending order
        for (let i = 0; i < selectedOrder.length - 1; i++) {
            if (selectedOrder[i] > selectedOrder[i + 1]) {
                correct = false;
                break;
            }
        }
    }

    // Provide feedback to the user
    if (correct) {
        result.textContent = "Correct! You arranged the timeline perfectly!";
        result.style.color = 'green';
    } else {
        result.textContent = "Oops! The order is not correct. Try again.";
        result.style.color = 'red';
    }
});

// Reset the timeline for a new try
reset.addEventListener('click', resetTimeline);

function resetTimeline() {
    selectedOrder = [];

    // Clear the dropzone and return all items to their original positions
    while (dropzone.firstChild) {
        dropzone.removeChild(dropzone.firstChild);
    }

    // Return all items to the events container
    originalPositions.forEach(pos => {
        if (![...eventsContainer.children].includes(pos.item)) {
            eventsContainer.insertBefore(pos.item, eventsContainer.children[pos.index]);
        }
    });

    originalPositions = []; // Clear out the originalPositions for future interactions
}

// Get the audio element and the button
const sound = document.getElementById('sound');
sound.href = '../GAMES/GAMES MUSIC/BgGame3.mp3';
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