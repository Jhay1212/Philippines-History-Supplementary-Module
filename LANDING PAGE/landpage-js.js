function togglePasswordVisibility(inputId) {
    var passwordInput = document.getElementById(inputId);
    var eyeIcon = passwordInput.nextElementSibling;
  
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.src = "../PICS/open.png";
    } else {
        passwordInput.type = "password";
        eyeIcon.src = "../PICS/close.png";
    }
  }
  
  function validatePassword() {
    var password = document.getElementById("signup-password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    var passwordMatchLabel = document.getElementById("password-match-label");
  
    if (password !== confirm_password) {
        passwordMatchLabel.style.display = "block";
    } else {
        passwordMatchLabel.style.display = "none";
    }
  }
  
  function validateForm() {
    var password = document.getElementById("signup-password").value;
    var confirm_password = document.getElementById("confirm_password").value;
  
    if (password !== confirm_password) {
        document.getElementById("password-match-label").style.display = "block";
        return false;
    }
    return true;
  }
  
  function showSignup() {
    document.getElementById('lgForm').style.display = 'none';
    document.getElementById('signupForm').style.display = 'block';
  }
  
  function showLogin() {
    document.getElementById('lgForm').style.display = 'block';
    document.getElementById('signupForm').style.display = 'none';
  }

  document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    var formData = new FormData(this);

    // Send form data to PHP script using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../DB/login.php", true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Check response from server
            if (xhr.responseText === "success") {
                // Redirect to success page
                window.location.href = "../HOME1/default.php";
            } else {
                // Display error message
                alert(xhr.responseText);
            }
        }
    };
    xhr.send(formData);
});


const favIcon = document.createElement('link');
favIcon.rel  = 'shortcut icon';
favIcon.href= '../PICS/icon/favicon.ico';
favIcon.type = 'image/x-icon';
document.head.appendChild(favIcon);