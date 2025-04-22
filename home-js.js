// script.js

document.addEventListener("DOMContentLoaded", function() {
    const searchBar = document.querySelector(".search-bar");

    // Optional: you can implement logic to display suggestions here
    searchBar.addEventListener("input", function() {
        console.log("User is typing:", searchBar.value);
        // Show search suggestions dynamically
    });
});

// script.js

document.addEventListener("DOMContentLoaded", function() {
    const sidebar = document.getElementById("sidebar");
    const openSidebarBtn = document.getElementById("openSidebar");
    const closeSidebarBtn = document.getElementById("closeSidebar");

    // Open sidebar when clicking the toggle button
    openSidebarBtn.addEventListener("click", function() {
        sidebar.style.width = "250px"; // Sidebar expands to 250px width
    });

    // Close sidebar when clicking the close button (X)
    closeSidebarBtn.addEventListener("click", function() {
        sidebar.style.width = "0"; // Sidebar collapses back to 0 width
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const usernameElement = document.querySelector(".username");

    // Example: Set the username dynamically (e.g., based on a logged-in user)
    // const username = "GUEST"; // Replace with dynamic username if needed
    usernameElement.textContent = `<?php echo $_SESSION['username']; ?>`;
});

// script.js

document.addEventListener("DOMContentLoaded", function() {
    const searchBar = document.querySelector(".search-bar");

    // Sidebar toggle functionality
    const sidebar = document.getElementById("sidebar");
    const openSidebarBtn = document.getElementById("openSidebar");
    const closeSidebarBtn = document.getElementById("closeSidebar");

    openSidebarBtn.addEventListener("click", function() {
        sidebar.style.width = "250px"; // Sidebar expands to 250px width
    });

    closeSidebarBtn.addEventListener("click", function() {
        sidebar.style.width = "0"; // Sidebar collapses back to 0 width
    });

    // Function to show content for the clicked lesson
    window.showContent = function(lessonId) {
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
});

// JavaScript to handle bookmark click
document.addEventListener("DOMContentLoaded", function() {
    const bookmarkIcon = document.getElementById("bookmarkIcon");

    bookmarkIcon.addEventListener("click", function(e) {
        e.preventDefault(); // Prevent default anchor behavior
        // Toggle the 'clicked' class
        bookmarkIcon.classList.toggle("clicked");
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

