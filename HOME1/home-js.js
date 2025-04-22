// script.js

let noteText = '';
const user_name = document.querySelector('#uname');
const defaultIcon = '../PICS/user.jpg'; // Default user icon path
const icon = document.querySelector('.user-icon');
const searchBar = document.querySelector('.search-bar');
const favIcon = document.createElement('link');

favIcon.rel  = 'shortcut icon';
favIcon.href= '../PICS/icon/favicon.ico';
favIcon.type = 'image/x-icon';
document.head.appendChild(favIcon);
icon.setAttribute('id', 'userIcon');
searchBar.style.display = 'none';


document.addEventListener("DOMContentLoaded", function() {
    const formCss = document.createElement('link');

    formCss.rel = 'stylesheet';
    formCss.href = '../HOME1/form.css';
    document.head.appendChild(formCss);

    const iconX = document.getElementById('userIcon');
    // setDefaultUserIcon();sear

    // Toggle profile form visibility when the icon is clicked
    iconX.addEventListener('click', function () {
        const profileForm = document.querySelector('form.hidden');
        profileForm.classList.toggle('hidden');
    });
    if (isUserLoggedIn !== 0){
    icon.addEventListener('click', function() {
        const profileForm = document.querySelector('#profile-picture-form');
        profileForm.style.display = 'flex';
        })};
        
        ;
    // Handle the image upload and change the user icon
    // iconX.addEventListener('change', changeUserIcon);



    const s_username = document.querySelector("span.username");
    const uid = document.querySelector('#uid').value;
    // Function to show content for the clicked lesson
    window.showContent = function(lessonId) {
        icon.addEventListener('click', function() {
            const profileForm = document.querySelector('#profile-picture-form');
            profileForm.style.display = 'flex';
        });
        // Hide all lesson rectangles
        const rectangles = document.querySelectorAll('.rectangle');
        rectangles.forEach(rectangle => {
            rectangle.style.display = 'none'; // Hide rectangles
        });

        // Show the clicked lesson content
        const lessonContent = document.getElementById(lessonId);
        lessonContent.classList.remove('hidden');
    };

    // Function to hide lesson content and show rectangles again
    window.hideContent = function() {
        // Show all lesson rectangles again
        const rectangles = document.querySelectorAll('.rectangle');
        rectangles.forEach(rectangle => {
            rectangle.style.display = 'block'; // Show rectangles
        });

        // Hide all lesson content
        const lessonContents = document.querySelectorAll('.content');
        lessonContents.forEach(content => {
            content.classList.add('hidden');
        });
    };



// for gettin all of the title in boonmark and sub bookmarks
function searchContent() {
    // Get search query from input
    const rectangleContainer = document.querySelector('.rectangle-container');
    const title = document.querySelector('h2#title');
    let query = document.getElementById('searchInput').value.toLowerCase();

    // Clear previous search results
    let searchResults = document.getElementById('searchResults');
    searchResults.innerHTML = '';

    // Get all sections of content
    let sections = document.querySelectorAll('.content-section');

    // Loop through each section and search for the query
    let found = false;
    sections.forEach(section => {
        let sectionText = section.innerText.toLowerCase();

        // If the query is found inside the section, display the section
        if (sectionText.includes(query)) {
            const gallerySection = document.querySelector('.gallery-container');
            gallerySection.style.display = 'none';

            // Clone the section and modify it for highlighting
            let result = section.cloneNode(true);
            let innerHTML = result.innerHTML;

            // Highlight the matched query
            let regex = new RegExp(`(${query})`, 'gi');
            innerHTML = innerHTML.replace(regex, '<span class="highlight">$1</span>');
            result.innerHTML = innerHTML;

            searchResults.appendChild(result); // Append it to the search results div

            title.textContent = `Result for query "${query.toUpperCase()}"`;
            rectangleContainer.style.display = 'none';
            found = true;
        }
    });

    if (!found) {
        title.textContent = 'No result found';
    }

    // Store the query for later use (if necessary)
    localStorage.setItem('searchQuery', query);

    // Prevent form submission redirect
    return false;
}

// Prevent form submission default behavior and perform search
document.getElementById('searchForm').addEventListener('submit', function(e) {
    e.preventDefault();
    searchContent();
});

// Add listener for Enter key on the search input field
document.getElementById('searchInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        searchContent();
    }
});

// Add listener for the click event on the search button
document.getElementById('searchFormButton').addEventListener('click', function(e) {
    e.preventDefault();
    searchContent();
});


    


});

// JavaScript to handle bookmark click
document.addEventListener("DOMContentLoaded", function() {
    const bookmarkIcon = document.getElementById("bookmarkIcon");
    
    bookmarkIcon.addEventListener("click", function(e) {
        e.preventDefault(); // Prevent default anchor behavior
        // Toggle the 'clicked' class
        bookmarkIcon.classList.toggle("clicked");
        checkSession();
    });
});

document.querySelectorAll('.rectangle').forEach(rectangle => {
    const dropdown = rectangle.querySelector('.dropdown');
    
    // Show dropdown on hover
    rectangle.addEventListener('mouseenter', () => {
        dropdown.style.display = 'block';
    });
    
    // Hide dropdown when mouse leaves the rectangle
    rectangle.addEventListener('mouseleave', () => {
        dropdown.style.display = 'none';
    });
});



var xhr = new XMLHttpRequest();
xhr.open("GET", "../HOME1/profile.php", true);
xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            try {
                var response = JSON.parse(xhr.responseText);
                console.log(response);
            } catch (e) {
                console.error("Invalid JSON response", e);
            }
        } else {
            console.log("Error: " + xhr.statusText);
        }
    }
};



function checkSession(){
    console.log(`uid ${uid.value}  ${typeof uid.value}`)
    if (uid.value == 0) {
        alert('Please login first');
        window.location.href = '../LANDING PAGE/landpage.php';
        
        return false;
    };
    return true;
};

function openForm() {
    if (checkSession()) {
        const form = document.getElementById('noteForm');
        if (noteText) {
            form.querySelector('textarea').value = noteText;
        }
        form.classList.add('show');
        form.classList.remove('hidden');
    }
    
}

function closeProfileForm() {
    const formProfile = document.getElementById('profile-picture-form');
    formProfile.classList.add('hidden');
    formProfile.classList.remove('show');
    formProfile.style.display ='none'
    preventDefault();
}


function closeForm() {
    const form = document.getElementById('noteForm');
    form.classList.add('hidden');
    noteText = form.querySelector('textarea').value;
    form.classList.remove('show');
    preventDefault();
    
    return false;
}

// Make the form draggable
dragElement(document.getElementById('noteForm'));

function dragElement(el) {
    let pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
    if (document.querySelector('.form-header')) {
        document.querySelector('.form-header').onmousedown = dragMouseDown;
    } else {
        el.onmousedown =this. dragMouseDown;
    }
    
    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        el.style.top = (el.offsetTop - pos2) + "px";
        el.style.left = (el.offsetLeft - pos1) + "px";
    }

    function closeDragElement() {
        document.onmouseup = null;
        document.onmousemove = null;
    }
}

const audio = document.getElementById('audio');
const toggleCheckbox = document.getElementById('audio-toggle');

// Event listener for the toggle
toggleCheckbox.addEventListener('change', () => {
    if (toggleCheckbox.checked) {
        audio.play(); // Play audio when toggled on
    } else {
        audio.pause(); // Pause audio when toggled off
        audio.currentTime = 0; // Reset audio to start
    }
});

// Optional: Reset the toggle state when the audio ends
audio.addEventListener('ended', () => {
    toggleCheckbox.checked = false;
});

const audio2 = document.getElementById('audio2');
const toggleCheckbox2 = document.getElementById('audio-toggle2');

// Event listener for the toggle
toggleCheckbox2.addEventListener('change', () => {
    if (toggleCheckbox2.checked) {
        audio2.play(); // Play audio when toggled on
    } else {
        audio2.pause(); // Pause audio when toggled off
        audio2.currentTime = 0; // Reset audio to start
    }
});

// Optional: Reset the toggle state when the audio ends
audio2.addEventListener('ended', () => {
    toggleCheckbox2.checked = false;
});

const audio3 = document.getElementById('audio3');
const toggleCheckbox3 = document.getElementById('audio-toggle3');

// Event listener for the toggle
toggleCheckbox3.addEventListener('change', () => {
    if (toggleCheckbox3.checked) {
        audio3.play(); // Play audio when toggled on
    } else {
        audio3.pause(); // Pause audio when toggled off
        audio3.currentTime = 0; // Reset audio to start
    }
});

// Optional: Reset the toggle state when the audio ends
audio3.addEventListener('ended', () => {
    toggleCheckbox3.checked = false;
});

const audio4 = document.getElementById('audio4');
const toggleCheckbox4 = document.getElementById('audio-toggle4');

// Event listener for the toggle
toggleCheckbox4.addEventListener('change', () => {
    if (toggleCheckbox4.checked) {
        audio4.play(); // Play audio when toggled on
    } else {
        audio4.pause(); // Pause audio when toggled off
        audio4.currentTime = 0; // Reset audio to start
    }
});

// Optional: Reset the toggle state when the audio ends
audio4.addEventListener('ended', () => {
    toggleCheckbox4.checked = false;
});

const audio5 = document.getElementById('audio5');
const toggleCheckbox5 = document.getElementById('audio-toggle5');

// Event listener for the toggle
toggleCheckbox5.addEventListener('change', () => {
    if (toggleCheckbox5.checked) {
        audio5.play(); // Play audio when toggled on
    } else {
        audio5.pause(); // Pause audio when toggled off
        audio5.currentTime = 0; // Reset audio to start
    }
});

// Optional: Reset the toggle state when the audio ends
audio5.addEventListener('ended', () => {
    toggleCheckbox5.checked = false;
});

const audio6 = document.getElementById('audio6');
const toggleCheckbox6 = document.getElementById('audio-toggle6');

// Event listener for the toggle
toggleCheckbox6.addEventListener('change', () => {
    if (toggleCheckbox6.checked) {
        audio6.play(); // Play audio when toggled on
    } else {
        audio6.pause(); // Pause audio when toggled off
        audio6.currentTime = 0; // Reset audio to start
    }
});

// Optional: Reset the toggle state when the audio ends
audio6.addEventListener('ended', () => {
    toggleCheckbox6.checked = false;
});

const audio7 = document.getElementById('audio7');
const toggleCheckbox7 = document.getElementById('audio-toggle7');

// Event listener for the toggle
toggleCheckbox7.addEventListener('change', () => {
    if (toggleCheckbox7.checked) {
        audio7.play(); // Play audio when toggled on
    } else {
        audio7.pause(); // Pause audio when toggled off
        audio7.currentTime = 0; // Reset audio to start
    }
});

// Optional: Reset the toggle state when the audio ends
audio7.addEventListener('ended', () => {
    toggleCheckbox7.checked = false;
});

const audio8 = document.getElementById('audio8');
const toggleCheckbox8 = document.getElementById('audio-toggle8');

// Event listener for the toggle
toggleCheckbox8.addEventListener('change', () => {
    if (toggleCheckbox8.checked) {
        audio8.play(); // Play audio when toggled on
    } else {
        audio8.pause(); // Pause audio when toggled off
        audio8.currentTime = 0; // Reset audio to start
    }
});

// Optional: Reset the toggle state when the audio ends
audio8.addEventListener('ended', () => {
    toggleCheckbox8.checked = false;
});

const audio9 = document.getElementById('audio9');
const toggleCheckbox9 = document.getElementById('audio-toggle9');

// Event listener for the toggle
toggleCheckbox9.addEventListener('change', () => {
    if (toggleCheckbox9.checked) {
        audio9.play(); // Play audio when toggled on
    } else {
        audio9.pause(); // Pause audio when toggled off
        audio9.currentTime = 0; // Reset audio to start
    }
});

// Optional: Reset the toggle state when the audio ends
audio9.addEventListener('ended', () => {
    toggleCheckbox9.checked = false;
});

const audio10 = document.getElementById('audio10');
const toggleCheckbox10 = document.getElementById('audio-toggle10');

// Event listener for the toggle
toggleCheckbox10.addEventListener('change', () => {
    if (toggleCheckbox10.checked) {
        audio10.play(); // Play audio when toggled on
    } else {
        audio10.pause(); // Pause audio when toggled off
        audio10.currentTime = 0; // Reset audio to start
    }
});

// Optional: Reset the toggle state when the audio ends
audio10.addEventListener('ended', () => {
    toggleCheckbox10.checked = false;
});

const audio11 = document.getElementById('audio11');
const toggleCheckbox11 = document.getElementById('audio-toggle11');

// Event listener for the toggle
toggleCheckbox11.addEventListener('change', () => {
    if (toggleCheckbox11.checked) {
        audio11.play(); // Play audio when toggled on
    } else {
        audio11.pause(); // Pause audio when toggled off
        audio11.currentTime = 0; // Reset audio to start
    }
});

// Optional: Reset the toggle state when the audio ends
audio11.addEventListener('ended', () => {
    toggleCheckbox.checked = false;
});



// Example: Set the username dynamically (e.g., based on a logged-in user)
// username.innerHTML = "<?php echo $_SESSION['username']; ?>";



function toggleSidebar() {
    document.body.classList.toggle('active');
  }
  
  s_username.innerHTML = user_name.value;




  function setDefaultUserIcon() {
    const defaultIcon = "../PICS/user.jpg"; // Default user icon path
    const storedIcon = localStorage.getItem('userIcon');

    // Check if there's a stored user icon
    if (storedIcon) {
        document.getElementById('userIcon').src = storedIcon;
    } else {
        document.getElementById('userIcon').src = defaultIcon;
    }
}

// Function to handle changing the user icon
function changeUserIcon(event) {
    // Get the selected file
    const file = event.target.files[0];
    
    // Check if a file is selected
    if (file) {
        const reader = new FileReader();

        // When the file is read, set it as the user icon and save it in local storage
        reader.onload = function (e) {
            const newIcon = e.target.result;
            document.getElementById('userIcon').src = newIcon;

            // Store the selected image in local storage
            localStorage.setItem('userIcon', newIcon);
        };

        reader.readAsDataURL(file); // Read the file as a data URL
    }
}
icon.addEventListener('click', function() {
    const profileForm = document.querySelector('#profile-picture-form');
    profileForm.style.display = 'flex';
});

// Animate video container on page load
window.addEventListener("load", () => {
    const videoWrapper = document.getElementById("videoWrapper");
    videoWrapper.style.opacity = 1;
    videoWrapper.style.transform = "translateY(0)";
    const sidebar = document.getElementById('sidebar2');

sidebar.style.zIndex = 9999999;
});

 document.getElementById("sidebar-toggle").addEventListener("click", function() {
    document.getElementById("sidebar").classList.toggle("active");
});


const devpic = document.querySelectorAll('.devpic')
const picSrc = ['../PICS/joan.jpg', '../PICS/allen.jpg', 'jok3.jpg', 'k1.png'];
devpic.forEach((pic, index) => {
    pic.src = picSrc[index]
})

const sidebar = document.getElementById('sidebar2');

sidebar.style.zIndex = 9999999;