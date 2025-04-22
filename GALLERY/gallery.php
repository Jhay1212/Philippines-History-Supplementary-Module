<?php
include '../UTILS/session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=1024">

    <title>GALLERY</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../GALLERY/gall-css.css">
    
    
<style>
    /* Enlarged image modal */
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.8);
  display: none; /* Hidden by default */
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.modal-overlay img {
  max-width: 90%;
  max-height: 90%;
  border-radius: 10px;
  box-shadow: 0 8px 20px rgba(255, 255, 255, 0.3);
  animation: zoomIn 0.3s ease;
}

/* Keyframe for zoom animation */
@keyframes zoomIn {
  from {
    transform: scale(0.8);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}

/* Close button */
.modal-overlay .close-btn {
  position: absolute;
  top: 20px;
  right: 20px;
  font-size: 24px;
  color: #fff;
  background: none;
  border: none;
  cursor: pointer;
  z-index: 1001;
}

</style>
</head>
<body><br><br>
<form id="profile-picture-form" action="../HOME1/profile.php" method="POST" enctype="multipart/form-data" class='hidden'>
            <span class="close-btn" onclick="closeProfileForm()">X</span>

    <div>
        <label for="profilePicture">Change Profile Picture:</label><br>
        <img id="profilePicPreview" src="<?php echo $_SESSION['profile_path']?>" alt="Profile Picture"
 width="150" class='profile-pic'/>

        <input type="file" id="profilePicture" name="profilePicture" accept="image/*" onchange="previewImage(event)">
    </div>
    <button type="submit">Upload</button>
</form>

  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="user-info">
        <img src="<?php echo $profile_path?>" alt="User Icon" class="user-icon">
        <span class="username"><?php echo $_SESSION['username']?></span>
    </div>
    <nav class="sidebar-links">
        <a href="../HOME1/default.php"><i class="fas fa-home"></i> Home</a>
        <a href="../BOOKMARK/bookmark1.php"><i class="fas fa-bookmark"></i> Bookmarks</a>
        <a href="../GAMES/games.php"><i class="fas fa-gamepad"></i> Activities</a>
        <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
        <a href="../GALLERY/gallery.php" class="active"><i class="fas fa-image"></i> Gallery</a>
        <a href="../QUIZ1/quiz1.php"><i class="fas fa-question-circle"></i> Quiz</a>
        <a href="../TRIVIA & FACTS/trivfac.php"><i class="fas fa-lightbulb"></i> Trivia & Facts</a>
        <a href="../LANDING PAGE/landpage.php"><i class="fas fa-sign-out-alt"></i> <?php echo $logging ?></a>
    </nav>
</aside>

 <!-- Navbar -->
 <header class="navbar">
    <div class="navbar-left">
        <div class="navbar-logo">
            <img src="../PICS/logo1.png" alt="Website Logo" class="logo">
            <span class="website-name">DISCOVERING PHILIPPINE HISTORY</span>
        </div>
    </div>
    <div class="navbar-right">
        <input type="text" class="search-bar" placeholder="Search lessons...">
        <div id="toggleIcon" class="icon" onclick="toggleSidebar()">
        <a href="#" class="info-icon"><i class="fas fa-info-circle"></i></a>
    </div>
    </div>
</header>

<!-- Sidebar -->
<div id="sidebar2" class="sidebar2" style="z-index: 99999;"> 
<a href="#"><strong>About<br></strong>

    This website is an online learning module about Philippine history, offering lessons, quizzes, and fun games to make learning enjoyable. Its goal is to help users understand and appreciate the rich history of the Philippines in an engaging and easy way.

</a>
<a href="#"><strong>Developers<br></strong>

    <img class="devpic" src="../PICS/joan.jpg"><br>
    Joan Hermo<br><br><br>

    <img class="devpic" src="../PICS/allen.jpg"><br>
    Allen Candelaria<br><br><br>

    <img class="devpic" src="../PICS/jok3.jpg"><br>
    Jose Rivera<br><br><br>

    <img class="devpic" src="../PICS/jok2.jpg"><br>
    Mikas Viscayno

</a>
</div>
    <!-- Main Container -->
    <div class="gallery-container">

        <a href="../GALLERY/gallery.php"><button class="galler">IMAGES</button></a>
        <a href="../GALLERY/gallery2.php"><button class="gallervid">VIDEOS</button><br><br><br></a>

        <h1>PRE-COLONIAL PERIOD</h1>

        <!-- Static Gallery -->
        <div class="gallery-grid">
            <!-- Static Images with Captions -->
            <div class="gallery-item">
                <img src="../PICS/unit 1 pics/a.webp" alt="Barangay">
                <div class="caption">Barangay</div>
            </div>

            <div class="gallery-item">
                <img src="../PICS/unit 1 pics/b.webp" alt="Datu">
                <div class="caption">Datu</div>
            </div>

            <div class="gallery-item">
                <img src="../PICS/unit 1 pics/c.webp" alt="Cultivation of Rice">
                <div class="caption">Cultivation of Rice</div>
            </div>

            <div class="gallery-item">
                <img src="../PICS/unit 1 pics/d.webp" alt="Sacred Forest">
                <div class="caption">Sacred Forest</div>
            </div>

            <div class="gallery-item">
                <img src="../PICS/unit 1 pics/e.webp" alt="Pre-Colonial Legal Systems">
                <div class="caption">Pre-Colonial Legal Systems</div>
            </div>

            <div class="gallery-item">
                <img src="../PICS/unit 1 pics/f.webp" alt="Shore of Cebu">
                <div class="caption">Shore of Cebu</div>
            </div>

            <div class="gallery-item">
                <img src="../PICS/unit 1 pics/g.webp" alt="Cultural Adaptation">
                <div class="caption">Cultural Adaptation</div>
            </div>

        </div>
    </div><br><br>

<!-- Main Container -->
<div class="gallery-container">

    <h1>SPANISH COLONIZATION PERIOD</h1>


    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
            <img src="../PICS/unit 2 pics/1.png" alt="Spanish Arrival">
            <div class="caption">Spanish Arrival</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 2 pics/a.png" alt="Ferdinand Magellan">
            <div class="caption">Ferdinand Magellan</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 2 pics/b.png" alt="Church">
            <div class="caption">Church</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 2 pics/c.png" alt="Buddhism">
            <div class="caption">Buddhism</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 2 pics/d.png" alt="Jose Rizal's Works">
            <div class="caption">Jose Rizal's Works</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 2 pics/f.webp" alt="Jose Rizal">
            <div class="caption">Jose Rizal</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 2 pics/g.webp" alt="Andres Bonifacio">
            <div class="caption">Andres Bonifacio</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 2 pics/h.png" alt="Spanish Rule">
            <div class="caption">Spanish Rule</div>
        </div>

    </div>
</div>


<!-- Modal for Enlarged Image -->
<div class="modal-overlay">
  <button class="close-btn">&times;</button>
  <img src="" alt="Enlarged Image">
</div>

<!-- Main Container -->
<div class="gallery-container">
    <h1>AMERICAN COLONIALISM PERIOD</h1>

    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/1.png" alt="Announcing the start of war">
            <div class="caption">Announcing the start of war</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/2.png" alt="General George Dewey">
            <div class="caption">General George Dewey</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/3.png" alt="Shipwreck">
            <div class="caption">Shipwreck</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/4.png" alt="Spanish ships">
            <div class="caption">Spanish ships</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/5.png" alt="Aguinaldo talking to Consul">
            <div class="caption">Aguinaldo talking to Consul</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/6.png" alt="Filipinos volunteering ">
            <div class="caption">Filipinos volunteering </div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/7.png" alt="Emillio proclaiming independence">
            <div class="caption">Emillio proclaiming independence</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/8.png" alt="Governor-General Agustin">
            <div class="caption">Governor-General Agustin</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/9.png" alt="Mock battle">
            <div class="caption">Mock battle</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/10.png" alt="Troops on standby">
            <div class="caption">Troops on standby</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/11.png" alt="Spanish raising white flag">
            <div class="caption">Spanish raising white flag</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/12.png" alt="President William McKinley">
            <div class="caption">President William McKinley</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/13.png" alt="Treaty of paris">
            <div class="caption">Treaty of paris</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/15.png" alt="Aguinaldos counter proclamation">
            <div class="caption">Aguinaldos counter proclamation</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/16.png" alt="San Juan bridge">
            <div class="caption">San Juan bridge</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/17.png" alt="Soldier being shot">
            <div class="caption">Soldier being shot</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/18.png" alt="Hostilities">
            <div class="caption">Hostilities</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/19.png" alt="American troops">
            <div class="caption">American troops</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/20.png" alt="Aguinaldo troops retreating in mountains">
            <div class="caption">Aguinaldo troops retreating in mountains</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/21.png" alt="Guerilla tactics">
            <div class="caption">Guerilla tactics</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/22.png" alt="Filipinos being sick">
            <div class="caption">Filipinos being sick</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/23.png" alt="Aguinaldo being captured">
            <div class="caption">Aguinaldo being captured</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 3 pics/24.png" alt="Aftermath of war">
            <div class="caption">Aftermath of war</div>
        </div>

    </div>
</div>

<!-- Main Container -->
<div class="gallery-container">
    <h1>JAPANESE OCCUPATION PERIOD</h1>

    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/1.png" alt="Japanese Occupation">
            <div class="caption">Japanese Occupation</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/2.png" alt="Japan Flag">
            <div class="caption">Japan Flag</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/3.png" alt="Pearl harbor">
            <div class="caption">Pearl harbor</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/4.png" alt="Final cabinet meeting">
            <div class="caption">Final cabinet meeting</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/5.png" alt="MacArthur">
            <div class="caption">MacArthur</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/6.png" alt="Death march">
            <div class="caption">Death march</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/7.png" alt="Soldiers dying in malnutrition">
            <div class="caption">Soldiers dying in malnutrition</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/8.png" alt="Bahay na pula">
            <div class="caption">Bahay na pula</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/9.png" alt="Imprisoned womens">
            <div class="caption">Imprisoned womens</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 4 pics/10.png" alt=" General MacArthur return to Philippines">
            <div class="caption"> General MacArthur return to Philippines</div>
        </div>

    </div>
</div>

<!-- Main Container -->
<div class="gallery-container">
    <h1>Post Independence and Early Republic</h1>

    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/1.png" alt="Post Independence">
            <div class="caption">Post Independence</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/2.png" alt="Post-Colonial Struggle">
            <div class="caption">Post-Colonial Struggle</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/3.png" alt="Economic Dependence">
            <div class="caption">Economic Dependence</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/4.png" alt="The Struggle">
            <div class="caption">The Struggle</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/8.png" alt="True Democracy">
            <div class="caption">True Democracy</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/6.png" alt="The Death and Rebirth of Democracy">
            <div class="caption">The Death and Rebirth of Democracy</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 5 pics/7.png" alt="Quest for Sovereignty and Identity">
            <div class="caption">Quest for Sovereignty and Identity</div>
        </div>

    </div>
</div>

<!-- Main Container -->
<div class="gallery-container">
    <h1>THE PHILIPPINE REPUBLIC PERIOD</h1>

    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->
        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic0.avif" alt="Independence (1946)">
            <div class="caption">Independence (1946)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic1.jfif" alt="Manuel Roxas">
            <div class="caption">Manuel Roxas (1935-1944)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic2.jpg" alt="Elpidio Quirino">
            <div class="caption">Elpidio Quirino (1943-1945)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic3.jpg" alt="Ramon Magsaysay">
            <div class="caption">Ramon Magsaysay(1953-1955)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic4.jpg" alt="Carlos P. Garcia">
            <div class="caption">Carlos P. Garcia (1957-1961)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic5.jpg" alt="Diosdado Macapagal">
            <div class="caption">Diosdado Macapagal (1961-1965)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic6.webp" alt="Ferdinand Marcos">
            <div class="caption">Ferdinand Marcos (1965-1986)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic7.jpg" alt="Corazon Aquino">
            <div class="caption">Corazon Aquino (1986-1992)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic8.jpg" alt="Fidel Ramos">
            <div class="caption">Fidel Ramos (1992-1998)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic9.jpg" alt="Joseph Estrada">
            <div class="caption">Joseph Estrada (1998-2001)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic10.avif" alt="Gloria Macapagal Arroyo">
            <div class="caption">Gloria Macapagal Arroyo (2001-2010)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic11.jpg" alt="Benigno Aquino III">
            <div class="caption">Benigno Aquino III (2010-2016)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic12.jpg" alt="Rodrigo Duterte">
            <div class="caption">Rodrigo Duterte (2016-2022)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/unit 6 pics/6pic13.webp" alt="Bongbong Marcos">
            <div class="caption">Bongbong Marcos</div>
        </div>

    </div>
</div>

<!-- Main Container -->
<div class="gallery-container">
    <h1>FLAGS OF THE PHILIPPINES</h1>

    <!-- Static Gallery -->
    <div class="gallery-grid">
        <!-- Static Images with Captions -->

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k1.png" alt="The first Katipunan flag">
            <div class="caption">The "first Katipunan flag" (1896)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k2.png" alt="Variant of the Katipunan flag">
            <div class="caption">Variant of the Katipunan flag (1896)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k3.png" alt="Variant of the Katipunan flag">
            <div class="caption">Variant of the Katipunan flag (1896)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k4.png" alt="War standard by Andres Bonifacio">
            <div class="caption">War standard by Andres Bonifacio (1896)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k5.png" alt="Purported flag of the Magdiwang faction">
            <div class="caption">Purported flag of the Magdiwang faction (1896)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k6.png" alt="Purported flag of the Magdalo faction">
            <div class="caption">Purported flag of the Magdalo faction (1896)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k7.png" alt="Purported flag of the Magdalo faction">
            <div class="caption">Purported flag of the Magdalo faction (1896)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k8.png" alt="Purported flag of Republic of Biak-na-Bato">
            <div class="caption">Purported flag of Republic of Biak-na-Bato (1897)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k9.png" alt="Personal flag of Mariano Llanera">
            <div class="caption">Personal flag of Mariano Llanera (1896-1897)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k10.png" alt="Personal flag of Pio del Pilar">
            <div class="caption">Personal flag of Pio del Pilar (1896)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k11.png" alt="Personal flag of Gregorio del Pilar">
            <div class="caption">Personal flag of Gregorio del Pilar (1896-1897)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k12.png" alt="Personal flag of Emilio Aguinaldo">
            <div class="caption">Personal flag of Emilio Aguinaldo (1897)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k13.png" alt="Flag of the First Philippine Republic">
            <div class="caption">Flag of the First Philippine Republic (1898)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k14.png" alt="Flag of the First Philippine Republic">
            <div class="caption">Flag of the First Philippine Republic (1898-1901)</div>
        </div>

        <div class="gallery-item">
            <img src="../PICS/Flags pics/k15.png" alt="Flag of the First Philippine Republic">
            <div class="caption">Flag of the First Philippine Republic (1898-1901)</div>
        </div>

    </div>
</div>

<button class="sidebar-toggle" id="sidebar-toggle">☰</button>

 <!-- JavaScript -->
 <script src="../HOME1/home-js.js"></script>
 
 <script>
     document.addEventListener('DOMContentLoaded', () => {
  const galleryItems = document.querySelectorAll('.gallery-item img');
  const modalOverlay = document.querySelector('.modal-overlay');
  const modalImage = modalOverlay.querySelector('img');
  const closeButton = modalOverlay.querySelector('.close-btn');

  galleryItems.forEach(item => {
    item.addEventListener('click', () => {
      modalImage.src = item.src; // Set the clicked image as the modal image
      modalOverlay.style.display = 'flex'; // Show the modal
    });
  });

  closeButton.addEventListener('click', () => {
    modalOverlay.style.display = 'none'; // Hide the modal when close button is clicked
  });

  // Close modal when clicking outside the image
  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
      modalOverlay.style.display = 'none';
    }
  });
});

 </script>
</body>
</html>
