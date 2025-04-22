const baybayin = {
    'a': 'ᜀ', 'e': 'ᜁ', 'i': 'ᜁ', 'o': 'ᜂ', 'u': 'ᜂ',
    'b': 'ᜊ', 'k': 'ᜃ', 'd': 'ᜇ', 'g': 'ᜄ', 'h': 'ᜑ',
    'l': 'ᜎ', 'm': 'ᜋ', 'n': 'ᜈ', 'p': 'ᜉ', 's': 'ᜐ',
    't': 'ᜆ', 'w': 'ᜏ', 'y': 'ᜌ', 'f': 'ᜉ', 'z': 'ᜐ', 'v': 'ᜊ',
    'r': 'ᜟ᜔', 'c': 'ᜃ᜔'
};

const kudlitE = '\u1714'; 
const kudlitO = '\u1713'; 

function convertToBaybayin(text) {
    return text.split(' ').map(word => {
        return word.split('').map((char, index, arr) => {
            const lowerChar = char.toLowerCase();

            // If it's a Baybayin character with a vowel sound
            if (baybayin[lowerChar] && ['a', 'e', 'i', 'o', 'u'].includes(lowerChar)) {
                return `<span class="letter" data-text="${lowerChar}">${baybayin[lowerChar]}</span>`;
            }

            if (index + 1 < arr.length) {
                const nextChar = arr[index + 1].toLowerCase();

                // Handle 'e'/'i' kudlit combination
                if (['e', 'i'].includes(nextChar) && baybayin[lowerChar]) {
                    arr[index + 1] = ''; // Skip the next character
                    return `<span class="letter" data-text="${lowerChar + nextChar}">${baybayin[lowerChar]}<span class="kudlit">${kudlitE}</span></span>`;
                } 
                
                // Handle 'o'/'u' kudlit combination
                else if (['o', 'u'].includes(nextChar) && baybayin[lowerChar]) {
                    arr[index + 1] = ''; // Skip the next character
                    return `<span class="letter" data-text="${lowerChar + nextChar}">${baybayin[lowerChar]}<span class="kudlit">${kudlitO}</span></span>`;
                }
            }

            // Default return for other characters, including non-Baybayin
            return `<span class="letter" data-text="${lowerChar}">${baybayin[lowerChar] || char}</span>`;
        }).join('');
    }).join(' ');
}

document.getElementById('input').addEventListener('input', function(event) {
    const originalText = event.target.value;
    const translatedText = convertToBaybayin(originalText);
    document.getElementById('output').innerHTML = translatedText;
});



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