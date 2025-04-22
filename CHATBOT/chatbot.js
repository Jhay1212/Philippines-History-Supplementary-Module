
document.addEventListener('DOMContentLoaded', () => {
    const sendButton = document.getElementById('sendButton');
    const userInput = document.getElementById('userInput');
    const messageContainer = document.getElementById('messageContainer');

    const responses = {
        "hello": "Hi there! How can I assist you today?",
        "hi": "Hi there! How can I assist you today?",
        "hi there": "Hi there! How can I assist you today?",
        "how are you": "I'm just a program, but I'm doing well! How about you?",
        "what is your name": "I'm a bot. I don't have a personal name, but you can name me. What do you want to call me?",
        "goal": "My goal is to help you understand the history of the Philippines. What would you like to know?",
        "what is your goal": "My goal is to help you understand Philippines history better.",
        "default": "I'm not sure how to respond to that. Can you ask something else?",
        "what are you": "I'm an AI program designed to assist you with Philippine history, but I can help with other topics too. What do you want to do?",
        "what can you do": "I'm an AI program that can assist you with learning about Philippine history, or any other information you might need. What would you like to know?",
        
        // Additional responses about Philippine history
        "who is jose rizal": "José Rizal is considered the national hero of the Philippines. He was a writer and intellectual who fought for reform during the Spanish colonization.",
        "who is andres bonifacio": "Andrés Bonifacio was a revolutionary leader and the founder of the Katipunan, an organization that sought Philippine independence from Spain.",
        "who is emilio aguinaldo": "Emilio Aguinaldo was the first President of the Philippines and led the country during the Philippine Revolution against Spain and the subsequent Philippine-American War.",
        "what is the katipunan": "The Katipunan was a revolutionary society founded by Andrés Bonifacio that aimed for Philippine independence from Spanish rule.",
        "when did the philippines gain independence": "The Philippines gained independence from Spain on June 12, 1898, but full independence from American colonial rule was recognized on July 4, 1946.",
        
        // More history-related responses
        "who is manuel quezon": "Manuel Quezon was the second President of the Philippines and is known as the 'Father of the National Language' for promoting Filipino as the national language.",
        "who is corazon aquino": "Corazon Aquino was the first female President of the Philippines and led the country after the People Power Revolution that ousted dictator Ferdinand Marcos.",
        "who is ferdinand marcos": "Ferdinand Marcos Sr. was the President of the Philippines from 1965 to 1986, ruling under martial law for much of his tenure."
      };
      

    sendButton.addEventListener('click', () => {
        sendMessage();
    });

    userInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });

    function sendMessage() {
        const messageText = userInput.value.trim().toLowerCase();
        if (messageText === '') return;

        addMessageToChat('user', messageText);
        userInput.value = '';

        // Simulate AI typing indicator
        addMessageToChat('ai', '...', true);
        setTimeout(() => {
            const aiResponse = responses[messageText] || responses['default'];
            updateAIResponse(aiResponse);
        }, 1000);
    }

    function addMessageToChat(sender, text, isTyping = false) {
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('message', sender);
        if (isTyping) {
            messageDiv.classList.add('typing-indicator');
            messageDiv.textContent = text;
        } else {
            messageDiv.textContent = text;
        }
        messageContainer.appendChild(messageDiv);
        messageContainer.scrollTop = messageContainer.scrollHeight;
    }

    function updateAIResponse(text) {
        const typingMessage = document.querySelector('.message.ai.typing-indicator');
        if (typingMessage) {
            typingMessage.textContent = text;
            typingMessage.classList.remove('typing-indicator');
        } else {
            addMessageToChat('ai', text);
        }
    }
});
