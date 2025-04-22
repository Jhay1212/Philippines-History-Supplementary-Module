<?php
include '../UTILS/session_check.php';
include '../db_connection.php';

if (isset($_POST['save_bookmark'])) {
    include_once('../HOME1/save_bookmark.php'); // Only save the bookmark
} elseif (isset($_POST['save_note'])) {
    include '../NOTES/save_notes.php'; // Only save the note
}elseif (isset($_POST['change_profile'])) {
     include_once('../HOME1/profile.php');
}




// // Check if the user is logged in
// if (!isset($_SESSION['id'])) {
//     // If not logged in, redirect to the login page
//     $_SESSION['username'] = "GUEST";
//     exit;
// }

// // If logged in, display user-specific content
// echo "Welcome, " . $_SESSION['username'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024">
    <title>PHILIPPINES HISTORY MODULE</title>
    <link rel="stylesheet" href="../HOME1/home-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../HOME1/new_home.css">
    <link rel="shortcut icon" href="../PICS/icon/favicon.ico" type="image/x-icon">

    <style>
        .navbar-right {
    display: flex;
    align-items: center;
}

.search-bar {
    margin-right: 10px;
}

#searchFormBtn {
    background: none;
    border: none;
    cursor: pointer;
}
#userCount {
    
    position: absolute;
    top: 15%;
    left: 90%;
    transform: translate(-50%, -50%);
    background: white;
    color: black;
}
    </style>
</head>
<body>
    <?php
    echo <<<EOD


    <div class='userCount' id="userCount">Current User: </div>
    <input  type="checkbox" id="uname" class="hidden" name="usernamej"  value=" $username">
    <input  type="checkbox" id="uid" class="hidden" name="useridj"  value=" $user_id">
<form id="profile-picture-form" action="../HOME1/profile.php" method="POST" enctype="multipart/form-data" class='hidden'>
            <span class="close-btn" onclick="closeProfileForm()">X</span>

    <div>
        <label for="profilePicture">Change Profile Picture:</label><br>
        <img id="profilePicPreview" src="$_SESSION[profile_path]" alt="Profile Picture"
 width="150" class='profile-pic'/>

        <input type="file" id="profilePicture" name="profilePicture" accept="image/*" onchange="previewImage(event)">
    </div>
    <button type="submit" name="change_profile">Upload</button>
</form>

<!-- Sidebar -->
     <aside class="sidebar">
    <div class="user-info">
        <img src="$profile_path" alt="User Icon" class="user-icon">
        <span class="username">$_SESSION[username]</span>
    </div>
    <nav class="sidebar-links">
        <a href="../HOME1/default.php"><i class="fas fa-bookmark"></i> HOME</a>
        <a href="../BOOKMARK/bookmark1.php"><i class="fas fa-bookmark"></i> Bookmarks</a>
        <a href="../GAMES/games.php"><i class="fas fa-gamepad"></i> Activities</a>
        <a href="../NOTES/notes-box.php"><i class="fas fa-sticky-note"></i> Notes</a>
        <a href="../GALLERY/gallery.php"><i class="fas fa-image"></i> Gallery</a>
        <a href="../QUIZ1/quiz1.php"><i class="fas fa-question-circle"></i> Quiz</a>
        <a href="../TRIVIA & FACTS/trivfac.php"><i class="fas fa-lightbulb"></i> Trivia & Facts</a>
        <a href="../LANDING PAGE/landpage.php"><i class="fas fa-sign-out-alt"></i>  $logging</a>
    </nav>
</aside>
   

   <!-- Main Content -->
<div class="main-content">

     <!-- Navbar -->
     <header class="navbar">
        <div class="navbar-left">
            <div class="navbar-logo">
                <img src="../PICS/logo1.png" alt="Website Logo" class="logo">
                <span class="website-name">DISCOVERING PHILIPPINE HISTORY</span>
            </div>
        </div>
        <div class="navbar-right">
        <form method="post" id='searchForm'>
            <input type="text" class="search-bar" placeholder="Search lessons..." id="searchInput">
            </form>
            <div id="toggleIcon" class="icon" onclick="toggleSidebar()">
            <a href="#" class="info-icon"><i class="fas fa-info-circle"></i></a>
            </div>
        </div>
    </header>

<!-- Sidebar -->
<div id="sidebar2" class="sidebar2">
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

     <!-- Gallery Section -->
     <main class="gallery-section">
        <h2 id='title'>Periods of Philippine History</h2>
        <div id='searchResults'></div>
        <div class="gallery-container">
            <!-- Lesson Card Example -->
            <div class="card" onclick="showContent('lesson1')">
                <img src="../PICS/unit 1 pics/1.webp" alt="Pre-Historic Philippines">
                <div class="card-content">
                    <h3>Pre-Colonial Period</h3>
                    <p>Explore the early history and civilizations of the Philippines.</p>
                    <a class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- Repeat similar cards for other lessons -->
            <div class="card" onclick="showContent('lesson2')">
                <img src="../PICS/unit 2 pics/1.png" alt="Spanish Colonialism">
                <div class="card-content">
                    <h3>Spanish Colonization Period</h3>
                    <p>Dive into the era of Spanish rule and its impact on Philippine society.</p>
                    <a class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- Add more cards as needed -->
            <div class="card" onclick="showContent('lesson3')">
                <img src="../PICS/unit 3 pics/1.png" alt="Filipino Nationalism">
                <div class="card-content">
                    <h3>American Period</h3>
                    <p>Analyze the influence of American governance and culture in the Philippines.</p>
                    <a class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="card"onclick="showContent('lesson4')">
                <img src="../PICS/unit 4 pics/1.png" alt="American Period">
                <div class="card-content">
                    <h3>Japanese Occupation Period</h3>
                    <p>Examine the challenges and changes during Japanese occupation.</p>
                    <a class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="card" onclick="showContent('lesson5')">
                <img src="../PICS/unit 5 pics/1.png" alt="Japanese Occupation">
                <div class="card-content">
                    <h3>Post Independence and Early Republic</h3>
                    <p>Study the journey towards independence and the formation of the early republic.</p>
                    <a class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="card" onclick="showContent('lesson6')">
                <img src="../PICS/unit 6 pics/6pic0.avif" alt="Philippine Independence">
                <div class="card-content">
                    <h3>Philippine Presidential Period</h3>
                    <p>Understand the rise of nationalism and its role in shaping the nation.</p>
                    <a class="learn-more">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </main>
    </div>

     <!-- Content sections for lessons -->
     <div id="lesson1" class="content hidden">

        <!-- Back Button in Top Left Corner -->
<button class="back-btn" onclick="hideContent()"><i class="fas fa-arrow-left"></i></button>

        <!-- CONTENTS -->	
			<main id="mainContent">

                <section class="content-section">
                 
                     <h2 id="sbt1"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> PRE COLONIAL PERIOD<br></h2>

            <video controls autoplay muted loop>
                <source src="../HOME1/LESSON VIDS/vid1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video><br><br><br><br><br>
      
  

                     <h1 id="sb1"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Barangay System and Political Organization</h1>
                     <img src="../PICS/unit 1 pics/a.webp" alt="Image Description"><p>

            In Pre-Colonial Philippine society, the barangay was the fundamental political unit, typically consisting of 30 to 100 families, though some larger communities could house up to 1,000 people. These small, independent settlements were usually located along rivers or coastal areas, positioning them well for trade and interaction with neighboring regions.
            <br><br><br>
            At the center of each barangay was the datu, a leader whose authority stemmed from heredity, wealth, and military prowess. The datu governed, protected the community, led during times of war, and acted as a mediator. Though each barangay operated autonomously, temporary alliances between them were not uncommon, especially for mutual defense or trade.
            <br><br>
            Unlike the centralized empires of Southeast Asia, such as those in Indonesia or Thailand, the Philippines had no large kingdoms. However, Corpuz highlights that the barangay system was sophisticated in its own right, fostering strong local governance and community bonds. These structures persisted into the Spanish colonial period, with the Spanish adapting the system rather than dismantling it entirely.
            
            </p><br><br><h1 id="sb1"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>Social Stratification</h1>
            <img src="../PICS/unit 1 pics/b.webp" alt="Image Description"><br><p>

                In the time before the Philippines came under colonial rule, its society was intricately structured, a system described in vivid detail by historian Onofre Corpuz. Life in this era moved to the rhythm of its social classes, with power and influence concentrated in the hands of a privileged few while the lower classes supported the needs of the barangays—the small, independent communities that dotted the islands.
                <br><br>
                At the peak of this hierarchy were the datus, the community’s leaders, whose authority stemmed from both bloodline and achievements. They ruled with wisdom and valor, ensuring the welfare of their people while commanding respect in return. Alongside them were the maharlika, a class of nobility and warriors. These were men and women born to defend and protect the barangay, bound by honor and duty. Their status was not just inherited; it was earned through acts of courage and service. In times of conflict, the maharlika rose as the shield of the community, their loyalty to the datu unwavering. Below them were the timawa, the freemen. These were the farmers, artisans, and tradespeople who made the everyday life of the barangay flourish. While they were not nobles, they held significant autonomy, enjoying the freedom to own land and live without the burden of tribute. The timawa were the backbone of the local economy, their labor ensuring the survival and prosperity of the barangay. Though they did not hold the same influence as the datu or maharlika, their contributions were deeply respected.
                <br><br>
                At the bottom of this system were the alipin, but even here, the distinctions were nuanced. These were not slaves in the harsh sense of later colonial times, where humanity was stripped away. Instead, alipin were individuals bound to service, either through debt, war capture, or economic hardship. Yet, even within this class, there was fluidity. The aliping namamahay lived separately from their masters, often working as farm hands or craftsmen. They had their own homes and some degree of independence, able to marry and start families, provided they met the obligations of their service.
                <br><br>
                In contrast, the aliping sagigilid had fewer rights, living within their master’s household and tied to them more intimately. They served in closer quarters, doing daily household tasks and laboring under more direct supervision. Despite their lower status, even they had a chance to improve their position. An alipin could, in time, rise above their station, either by paying off their debts, being rewarded for meritorious service, or marrying into a higher class.
                <br><br>
                Corpuz emphasizes that unlike the rigid feudal systems of Europe and other parts of Asia, the stratification in pre-colonial Philippine society was far more flexible. It allowed for social mobility, and while wealth or achievement could elevate an individual, misfortune or loss could just as easily bring someone down. The ability to shift between classes created a dynamic society where political power was not solely determined by birthright but also by an individual’s resourcefulness, valor, and sometimes, fate. This fluidity shaped the political landscape of the barangays, where alliances and loyalty often shifted, and the bonds of leadership were constantly negotiated.
                In this way, the pre-colonial Philippine social structure wasn’t just a hierarchy—it was a living, breathing system that reflected the ebb and flow of life in the archipelago, where honor, duty, and destiny played as much a role as wealth and bloodline.
                

            </p><br><br><h1 id="sb1"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>Economic Systems and Trade</h1>
            <img src="../PICS/unit 1 pics/c.webp" alt="Image Description"><br><p>

                At the heart of many communities, especially in the rich plains of Luzon, was the cultivation of rice. Rice, the life-giving grain, was not just food—it was a symbol of survival, wealth, and even status. In areas with access to rivers and lakes, the people mastered the art of wet-rice agriculture, creating intricate irrigation systems that allowed them to cultivate fertile fields year after year. These banaue-like terraces, carved into mountain sides, stood as testaments to their ingenuity. On the other hand, in forested areas or places where flatland was scarce, the people practiced swidden agriculture, also known as slash-and-burn farming. By clearing small patches of forest, they could temporarily enrich the soil, growing crops such as rice, sweet potatoes, and yams before moving on to let the land recover.
                <br><br>
                But their livelihoods extended far beyond the rice fields. The forests surrounding their communities offered more than just wood; they were a source of life. In their shadows, skilled hunters tracked deer and wild pigs, providing valuable meat for their families. Fishing too was essential, especially in the coastal villages where the sea brought an endless harvest. Fishermen cast their nets into the sparkling waters, pulling in fish that would feed their families and be traded with neighbors.
                <br><br>
                The Filipinos were also craftsmen, their hands shaped by centuries of tradition. In bustling villages, potters spun clay into delicate jars and bowls, essential for cooking and storing food. Weavers took fiber from the abaca plant and turned it into fine textiles, creating patterns passed down through generations. There were blacksmiths as well, working with gold, copper, and iron, which they forged into tools, weapons, and beautiful ornaments. Gold, in particular, was abundant in certain regions, and the people crafted intricate jewelry that adorned their bodies, a reflection of both status and beauty.
                <br><br>
                But it wasn’t just what they produced locally that shaped their lives. Far beyond their shores, a great maritime trade network wove the islands into the fabric of Southeast Asian commerce. Chinese junks, their sails catching the warm winds of the South China Sea, arrived on the coasts of Luzon, bearing fine porcelain, silk, and glassware. These precious goods were traded for Filipino gold, pearls, and other natural resources that were highly prized in the courts of China. The trade wasn’t limited to the Chinese. Arab merchants from the west brought with them rare spices and influenced the archipelago’s spiritual and cultural life. Indian traders, too, with their colorful clothes and knowledge of maritime navigation, shaped the region’s commerce. Even the Japanese, with their skilled craftsmanship in swords and silver, found their way to Philippine shores.
                <br><br>
                The people of the Philippines became not only farmers, fishermen, and craftsmen but also skilled traders, their ports buzzing with activity. Tondo, a flourishing kingdom along the Pasig River, became a vital trading hub where merchants from across the seas would gather to exchange goods. Here, the language of barter flowed easily, and the influence of foreign ideas and products began to shape the everyday lives of the locals. It was a time of prosperity, where each barangay had its own role in a larger, interconnected world.
                <br><br>
                In this exchange of goods, ideas flowed as well. From the Chinese, the Filipinos learned about more advanced agricultural techniques and the artistry of fine pottery. From the Malay Archipelago, the people absorbed cultural practices, languages, and even the tools for governance, as seafaring Malays navigated the same waters. The Arabs brought with them knowledge of Islam, which began to spread in parts of the southern Philippines, laying the groundwork for the Sultanates that would later rise in Sulu and Maguindanao.
                <br><br>
                As the ships from foreign lands came and went, the islands became a meeting place of cultures, a crossroads where East met Southeast Asia. The pre-colonial Filipino economy was thus not an isolated or simple subsistence system, but one deeply tied to the thriving maritime trade routes that spanned across oceans. As Corpuz describes, these trade networks didn’t just exchange goods; they wove the Philippines into the fabric of a global economy long before the arrival of European colonizers. These interactions shaped the islands in profound ways, from the goods in their markets to the clothes they wore and the ideas they began to embrace.
                

            </p><br><br><h1 id="sbt3"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>Cultural and Religious Life</h1>
            <img src="../PICS/unit 1 pics/d.webp" alt="Image Description"><br><p>
            
                Long before the echoes of church bells and the songs of colonizers filled the air, the people of the Philippines lived in a world alive with spirits, gods, and ancestors. Their existence was woven into the fabric of nature, where every tree, river, and mountain held a divine presence. In the lush forests and along the sunlit shores, animism was the guiding belief, and the Filipinos' connection to the spiritual world was as natural as the land itself.
                <br><br>
                The forests were sacred, with anitos, spirits of ancestors, residing in ancient trees. The mountains were home to deities, and the rivers carried the blessings of the gods. Life was a constant conversation with the unseen. To ensure prosperity, peace, and protection, the people turned to those who knew how to bridge the gap between the physical and the spiritual—the babaylan o katalonan, depending on where you were in the archipelago.
                <br><br>
                The babaylan, often women but sometimes men, where the heart of the community’s spiritual life. Their influence extended beyond mere religious duties; they were healers, shamans, and wise leaders. Clad in flowing robes, they could be seen in moments of ritual, dancing and chanting to summon the spirits. They wielded not just herbs for healing but words of power, using incantations to call upon deities for guidance and protection. The people revered them, knowing that the babaylan had the gift of seeing beyond the veil that separated the mortal world from the supernatural.
                <br><br>
                For every occasion, from the smallest harvest to the grandest battle, the babaylan led ceremonies that called upon the spirits for favor. Before rice was planted, a ritual was held, offerings laid at the feet of the rice god for a plentiful yield. When warriors prepared for battle, they sought blessings to protect them from harm, leaving offerings at shrines dedicated to the God of war. It was not just about the fight but the spiritual balance—without proper rituals, the warriors risked offending the gods and spirits, dooming them to failure.
                <br><br>
                These beliefs were not confined to the fields or the battlefield—they permeated every part of life. Even in building a home, it was essential to ask permission from the earth spirits before digging into the ground. Failure to do so could bring misfortune. The very way homes were designed, with elevated floors and bamboo walls, was a reflection of a respect for the land, and the belief that spirits needed their own space to move freely. The idea of harmony with nature wasn’t just practical; it was sacred.
                <br><br>
                Corpuz described how this reverence for the supernatural shaped warfare, too. Before battle, warriors didn't merely sharpen their spears or prepare their shields—they first invoked the protection of the spirits, seeking strength and luck from the gods. The babaylan performed rituals to ensure their success, reading the signs in the flight of birds or the patterns in the stars to see if the gods favored them.
                <br><br>
                As the people of the north and central islands lived according to these beliefs, a different kind of spiritual influence was slowly seeping into the south. By the 14th century, Islam had begun to take root in Sulu and Mindanao, brought by Malay and Arab merchants who sailed into the islands’ ports. These traders not only brought goods but also the teachings of a single God, Allah, and the wisdom of the Prophet Muhammad. The people of these southern islands, always attuned to the currents of the world, began to embrace this new faith.
                <br><br>
                In the courts of the Sulu Sultanate, a new religious and political order began to form. Sultans emerged, leaders who ruled not just by the sword but by the divine will of Allah. Under their guidance, Islamic teachings started to shape the laws and customs of these southern communities. The spread of Islam was swift, but not forceful; it moved through trade and diplomacy, bringing with it new ideas about governance, justice, and spirituality. Mosques began to rise where animist shrines once stood, and the sound of the adhan—the call to prayer—echoed through the coastal towns of Mindanao.
                <br><br>
                For a time, the animist traditions of the north and the Islamic faith of the south existed in parallel, with each region following its own path. But when the Spanish arrived in the 16th century, bearing Christianity and conquest, they found a formidable challenge in the southern islands. The Islamic sultanates, with their faith and their tightly-knit political structures, would resist Spanish colonization with a fierceness that lasted centuries.
                <br><br>
                In the end, the cultural and religious tapestry of the pre-colonial Philippines was as diverse as the islands themselves. In the north, the spirits of nature reigned, and the babaylan guided their people with wisdom drawn from the earth and sky. In the south, Islam brought a new way of seeing the world, one that would shape the destiny of Mindanao and Sulu for generations. These ancient beliefs, whether rooted in animism or Islam, created a cultural landscape rich in faith, resilience, and a deep connection to both the seen and unseen worlds.

            </p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>Pre-Colonial Legal Systems</h1>	 
            <img src="../PICS/unit 1 pics/e.webp" alt="Image Description"><br><p>	 
            
                Justice was woven deeply into the fabric of everyday life. Long before the arrival of foreign laws and codes, the people lived by rules that had been passed down through generations, shaping their sense of right and wrong. These ancient laws, known as "batas" in some regions and "adat" in others, were not written in books or etched in stone. Instead, they lived in the memories of the elders and were passed on through word of mouth—stories, proverbs, and rituals that carried the weight of tradition.
                <br><br>
                At the heart of each barangay, the local community, stood the datu, the leader, whose authority was as much spiritual as it was political. The datu’s wisdom and fairness were essential to maintaining order and harmony. When disputes arose or wrongs were committed, it was to the datu that the people turned. But he did not judge alone. Surrounding him was a council of elders, respected men and women who had lived long enough to see many seasons and knew the ways of the ancestors. Together, they interpreted the laws, using not just the words of tradition but their deep understanding of the community’s needs and values.
                <br><br>
                Unlike in many societies where justice was harsh and retribution swift, the legal traditions of pre-colonial Filipinos leaned toward restoration and compensation. The goal was not to destroy or exile a wrongdoer but to mend the broken bonds within the community. When someone committed a crime, they were not seen as simply a criminal to be punished; they were a member of the barangay who had strayed from the path of righteousness, and the task of justice was to guide them back.
                <br><br>
                Take, for example, the case of theft. If a man was found guilty of stealing, the first course of action was not to imprison or harm him. Instead, the datu and the elders would ask him to return what he had taken, restoring the balance. If he could not repay the stolen goods in full, he might be required to offer services to the wronged party, laboring in their fields or crafting goods until the debt was settled. This way, the wrong was made right not through punishment but through action—a system of recompense that allowed the thief to redeem himself, while also providing justice to the victim.
                <br><br>
                The people believed that community was everything, and every person within the barangay had a role to play in its survival and success. Thus, to exile or harshly punish someone for a lesser crime would only weaken the whole. Justice had to preserve harmony. It wasn’t about punishment for punishment’s sake, but about restoring balance and ensuring that everyone continued to play their part.
                <br><br>
                Of course, not all crimes were so easily forgiven. Some acts struck at the heart of the community's well-being—crimes like murder or treason, which threatened not just individuals but the very fabric of society. In such cases, the datu’s role became far heavier, for here the consequences were grave. When a person took the life of another, the council might consider the seriousness of the offense, weighing the impact on the community. If the crime was deemed beyond redemption, the ultimate punishment—the death penalty—could be invoked, though this was rare and only reserved for the gravest of offenses.
                <br><br>
                For lesser but still serious crimes, such as adultery or slander, the punishment could involve fines or public acts of atonement. A man caught in adultery, for instance, might be required to pay a substantial fine to the aggrieved party or offer valuable goods, like gold or livestock, as a means of reparation. In cases where words had caused harm—like insults or false accusations—a public apology or a symbolic offering to the offended family might be enough to heal the rift.
                <br><br>
                But the law was not just about dealing with offenses; it was also a framework for life. Marriage, inheritance, and land ownership were all governed by the same oral traditions, with the datu and elders guiding families through disputes and decisions. If a family had no heir, the barangay council might decide how their land should be divided or passed down. If two families were to join in marriage, the elders would help negotiate the bride price or dowry, ensuring that both sides left the agreement with honor.
                <br><br>
                There was a profound respect for these laws, not just because they were old, but because they were fair. The people believed that justice was not about revenge but restoration—about healing the wounds within the community so that it could remain strong and whole. This way of justice was a living thing, adaptable to the circumstances, shaped by the wisdom of those who had lived long enough to understand that true peace came not from fear but from fairness.
                <br><br>
                And as Corpuz points out, this legal system was rooted in the collective memory of the people. It was communal, passed down from generation to generation, and always attuned to the needs of the time. Though the datu held power, his rule was not absolute. The elders, and sometimes the community itself, had a say in how justice was meted out, creating a balance of power that kept leaders accountable.
                <br><br>
                In the end, the pre-colonial Filipino justice system wasn’t just about keeping order—it was about preserving the web of relationships that tied people together, ensuring that every person had a place, a purpose, and a chance for redemption. Through batas and adat, they maintained peace, not by fear, but by the wisdom of their ancestors and the collective strength of their community.
                   
                
            </p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>Absence of National Unity</h1>	 
            <img src="../PICS/unit 1 pics/f.webp" alt="Image Description"><br><p>	 
            
                The islands we now know as the Philippines were not one nation but a vast mosaic of independent communities. The archipelago stretched across seas, dotted with thousands of islands, each home to distinct barangays, small yet self-sufficient villages, and larger politics ruled by powerful leaders. It was a land rich in diversity, where people spoke different languages, followed unique customs, and swore allegiance not to a single ruler, but to their local datu, rajah, or sultan.
                <br><br>
                The barangay was the heart of pre-colonial society. Led by the datu, each barangay was an autonomous community, governing itself through the wisdom of its elders and the strength of its leader. Some barangays were small, nestled along rivers or in coastal coves, while others grew into thriving centers of trade, diplomacy, and culture. These barangays often interacted, forming alliances or rivalries with their neighbors, but they operated as independent units. There was no single king or empire to unite them under one flag.
                <br><br>
                In some regions, however, these barangays coalesced into larger, more complex political entities. Cebu and Butuan, for example, became thriving Rajahnates, ruled by powerful rajahs who controlled vast networks of trade and influence. Cebu, in particular, was a bustling hub of commerce, where merchants from across Asia came to trade goods like spices, gold, and textiles. Butuan, with its strategic location along the Agusan River, became a center for gold and regional diplomacy, its rulers respected by traders from distant lands.
                <br><br>
                Further south, the islands of Mindanao and the Sulu Archipelago were home to the mighty Sultanates of Sulu and Maguindanao. These sultanates were far more centralized and powerful, their rulers drawing strength from both Islam and the loyalty of their people. The Sultans commanded large armies and fleets, making them formidable forces, not only in battle but also in trade and diplomacy. The Sultanate of Sulu, in particular, controlled strategic trade routes that linked the Philippines to Borneo, Malaysia, and Indonesia, making it a significant player in regional politics.
                <br><br>
                Yet, despite the strength of these larger polities, the archipelago remained fragmented. The rulers of Cebu, Butuan, Sulu, and Maguindanao might have commanded respect within their territories, but they had no authority over the thousands of barangays scattered across the islands. Each barangay had its own laws, its own customs, and its own sense of identity. This fierce independence, while a source of local pride, also prevented the islands from forming a unified front against outside threats.
                <br><br>
                This lack of political cohesion, as Corpuz and other scholars have emphasized, became one of the most significant factors that made the Philippines vulnerable to foreign invasion. The barangays, so used to their autonomy, often saw themselves as separate entities rather than parts of a larger whole. While alliances were sometimes formed, they were often temporary, driven by immediate needs rather than a shared vision of unity. When faced with external threats, such as raids from neighboring kingdoms or the arrival of foreign powers, each barangay or polity acted alone, defending its own interests rather than coming together for a common cause.
                <br><br>
                In 1521, when Ferdinand Magellan first arrived on the shores of Cebu, he encountered not a nation but a patchwork of independent leaders. Rajah Humabon of Cebu welcomed Magellan, hoping to use this new alliance to gain an advantage over his local rivals. This was the nature of politics in the pre-colonial Philippines—leaders often saw foreign powers as opportunities to strengthen their own position rather than as threats to their independence.
                <br><br>
                By the time the Spanish returned decades later, led by Miguel López de Legazpi in 1565, the same divisions that had defined pre-colonial society for centuries continued to exist. The Spaniards, though few in number, quickly realized that the fragmented nature of the islands played to their advantage. They forged alliances with certain local rulers, offering promises of protection or shared wealth in exchange for loyalty. For those who resisted, the Spanish used their superior weapons and military tactics to swiftly conquer individual barangays or polities, one by one.
                <br><br>
                Without a unified defense, the Spanish were able to conquer the islands relatively easily. The barangays, with their local loyalties and lack of a central leadership, were not equipped to fight off an enemy that came with the ambition of empire. Though some regions, particularly in the southern sultanates, put up fierce resistance, the lack of a unified front across the islands made conquest inevitable.
                <br><br>
                Yet, this fragmentation was not just a weakness. Corpuz argues that it was also a source of strength in its own way. The independence of each barangay allowed for a rich diversity of cultures and traditions to flourish. Each community had the freedom to govern itself, to develop its own laws, its own way of life. Local autonomy allowed the people to adapt to their unique environments, whether they lived in the highlands, by the sea, or deep in the forest. And it was this fierce independence that would later fuel resistance movements against colonial rule, as the people of the islands, though fragmented, were never truly subjugated in spirit.
                <br><br>
                So, the story of Pre-Colonial Philippines is one of diversity and division, where local autonomy gave way to external vulnerability. The barangays, rajahnates, and sultanates lived by their own rules, their leaders driven by the needs of their people and the rhythms of trade and survival. But when the winds of colonization swept across the seas, it was the absence of a unified political entity that left the islands open to conquest, even as their rich traditions and cultures remained resilient beneath the surface.
                 
            </p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>External Influences and Cultural Adaptation</h1>	 
            <img src="../PICS/unit 1 pics/g.webp" alt="Image Description"><br><p>	 
            
                In the islands of the pre-colonial Philippines, the people lived at the crossroads of the sea, a place where winds carried ships from distant lands and brought with them new ideas, new faces, and new ways of life. The people of these islands were not strangers to the outside world. They were traders, navigators, and diplomats who welcomed the currents of change but knew how to make these influences their own. As Corpuz observed, the Filipinos of this time were not passive recipients of foreign influence; rather, they had a remarkable ability to absorb what came from afar and weave it seamlessly into the fabric of their local traditions.
                <br><br>
                For centuries, Chinese junks had sailed into the harbors of Luzon and the Visayas, their hulls heavy with porcelain, silk, and spices. In exchange, the islanders offered gold, pearls, and the rare, precious products of their lands. The Chinese merchants who came and went left more than just goods behind. They left pieces of their culture—delicate ceramics, intricate textiles, and the art of weaving silk. Yet, as these foreign objects entered Filipino homes, they did not overshadow the islanders' own craftsmanship. The people of the archipelago took these influences and infused them with their own spirit, blending them into their vibrant way of life.
                <br><br>
                Filipino potters continued to mold their own earthenware—simple yet beautiful—while incorporating some of the finer techniques they learned from Chinese artisans. In their weaving, they adopted the patterns of silk, but used their own abaca fibers, crafting fabrics that were uniquely Filipino. The influences from China didn’t erase the old ways; they simply added another layer to an already rich cultural tapestry.
                <br><br>
                Further west, the Indians arrived, bringing not just goods, but ideas—philosophies of governance, religion, and art. From the Indian subcontinent came the influence of Hinduism and Buddhism, which touched the minds of the ruling classes in certain parts of the archipelago. Rajah and Maharajah, titles used by rulers in places like Cebu and Butuan, were borrowed from the Indian Sanskrit language, but they took on meanings specific to the local context.
                <br><br>
                Indian influences also found their way into the spiritual practices of the islands. In some regions, Hindu-Buddhist symbols of power, like the Garuda, the mythical bird, or the lotus flower, became part of local iconography. But, once again, these foreign elements were not imposed; they were adapted. The people of the Philippines incorporated these symbols into their own belief systems, finding ways to make them resonate with the spirits, ancestors, and deities that had always guided them.
                <br><br>
                As Malay traders from the sprawling kingdoms of Srivijaya and Majapahit sailed through the islands, they brought with them not just commerce but their own systems of governance. The barangay system, already in place, found echoes in the ways the Malay kingdoms organized their societies. Leaders adopted the title "datu," a term that came from Malay roots, and in time, it became synonymous with local chieftaincy in many parts of the archipelago. But while the title was borrowed, the power and role of the datu remained deeply embedded in Filipino culture—leading with authority tempered by the wisdom of the elders and the traditions of their people.
                <br><br>
                But perhaps the most profound adaptation occurred in the southern islands, where Islam began to spread through the trade routes linking the Philippines with Malaysia, Indonesia, and the Middle East. By the 14th century, Arab and Malay merchants had brought not only spices and textiles but also the teachings of Islam. In the courts of Sulu and Maguindanao, the sound of the adhan, the call to prayer, began to mingle with the rhythms of everyday life.
                <br><br>
                Yet even as Islamic law and governance made their way into the Sultanates, they did not completely displace the indigenous systems that had long been in place. The Sultans of Sulu and Maguindanao embraced Islam, adopting its laws of Sharia and its customs of leadership, but they also retained elements of their pre-Islamic governance. The barangay councils continued to play a role in decision-making, and local traditions surrounding land, inheritance, and justice blended with the new religious principles. Islam was woven into the existing fabric of society, not as an outside force that eradicated the old ways, but as a new thread that strengthened the whole.
                <br><br>
                In these sultanates, Corpuz noted, the process of integrating Islamic governance was one of adaptation rather than replacement. The Sultans were not just spiritual leaders but also political ones, drawing from both their Islamic faith and the wisdom of their ancestors. The people continued to follow many of their older traditions, and the new faith provided a sense of unity that transcended the boundaries of their islands. The Islamic legal system, which valued community and justice, fit well with the local customs that also prioritized balance and harmony in resolving disputes.
                <br><br>
                As Islam spread, mosques rose in place of old shrines, and the people adopted new rituals of prayer and fasting, yet even these practices were touched by local flavor. In the festivals of the southern islands, the kulintang drums and gongs played, as they had for centuries, but now they accompanied songs praising Allah and the Prophet Muhammad. The people of the Philippines took the new faith and shaped it to fit their world, as they had done with every other influence that came before.
                <br><br>
                So, the story of the Pre-Colonial Filipinos is not one of isolation but of adaptation and resilience. The people of these islands were connected to a larger world, a world that brought with it Chinese ceramics, Indian titles, Malay governance, and Arab faith. But they never let these influences overshadow their own identity. Instead, they absorbed what was useful, blended it with their own traditions, and made it something uniquely Filipino. They were open to the world, yet always grounded in the land, the sea, and the spirits that had guided them for generations. In their hands, external influences became new tools, not to replace what came before but to enrich their already vibrant culture, creating a society that was both diverse and deeply rooted in its own traditions.
            </p>

                 </section>
                 <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">⬆️</button>
            </main>
        <button onclick="hideContent()">Back</button>
        <!-- Scroll to Top Button -->

    </div>


    <div id="lesson2" class="content hidden">

<!-- Back Button in Top Left Corner -->
<button class="back-btn" onclick="hideContent()"><i class="fas fa-arrow-left"></i></button>


        <main id="mainContent">
            <section class="content-section">
             
                 <h2 id="sbt2"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> SPANISH COLONIZATION <br></h2><p>
                 
                  <video controls autoplay muted loop>
                <source src="../HOME1/LESSON VIDS/vid2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video><br><br><br>
                 
                 <img src="../PICS/unit 2 pics/1.png" alt="Image Description">

        <h1 id="sb1"><span class="bookmark-icon"></span>The Arrival of the Spanish <br>(1521–1565)</h1><p>	 

            Portuguese explorer Ferdinand Magellan efficiently led the European day trip to the Philippines within the carrier of the King of Spain. On March 31, 1521, at Limasawa Island in Southern Leyte, as stated in Pigafetta's Primo Viaggio Intorno El Mondo (First Voyage Around the World), Magellan solemnly planted a move on the summit of a hill overlooking the ocean and claimed ownership of the islands for the king of Spain, naming them the Archipelago of Saint Lazarus. However, the invasion of the Philippines by using overseas powers did no longer start in earnest till 1564. Following Magellan's voyage, several subsequent expeditions have been dispatched to the islands. Spain sent 4 main expeditions: Loaisa in 1525, Cabot in 1526, Saavedra in 1527 and Villalobos in 1542, culminating inside the Legazpi excursion in 1564. This very last day trip changed into a hit, mainly to the invention of the tornaviaje, or return experience to Mexico across the Pacific, with the aid of Andrés de Urdaneta. This discovery initiated the Manila galleon exchange, which lasted for two and a half centuries.
            <br><br>
            In 1570, Martín de Goiti, dispatched by means of Legazpi to Luzon, conquered the Kingdom of Maynila. Legazpi finally mounted Maynila as the capital of the Philippines, simplifying its spelling to Manila. His excursion also renamed Luzon Nueva Castilla. Legazpi has become the country’s first governor-fashionable, and the archipelago served as Spain's outpost in the Orient, with Manila the capital of the whole Spanish East Indies. The colony became administered through the Viceroyalty of New Spain till 1821, whilst Mexico achieved independence from Spain. After 1821, the colony was ruled at once from Spain.
            <br><br>
            Spain had three predominant objectives in its coverage closer to the Philippines, it is the simplest colony in Asia: to collect a percentage inside the spice change, to expand contacts with China and Japan to further Christian missionary efforts there, and to transform the Filipinos to Christianity. Only the 0.33 objective changed into ultimately found out, even though no longer absolutely, due to the active resistance of the Muslims within the south and the Igorot, the upland tribal peoples in the north. Philip II, King of Spain, explicitly ordered that the pacification of the Philippines be cold to avoid a repetition of Spain's sanguinary conquests inside the Americas. The career of the islands began with quite little bloodshed, partially due to the fact that the majority of the population presented little armed resistance to begin with. However, numerous incidents of atrocities had been dedicated by means of Spanish authorities, one of the maximum infamous being the heinous torture that befell in the Fortress of Sebastian Intramuros in Manila, wherein a dungeon called the Black Hole turned into placed. This jail had simplest two small apertures: one three feet square inside the ceiling and another little gated hollow inside the ground via which the ocean might be visible washing underneath. The Spanish authorities might confine nation prisoners on this hole, filling it to the brim with water, depriving them of food and water, and allowing just sufficient air to save you instantaneous death. Physical torture became additionally inflicted upon unmanageable prisoners. Renato Constantino highlights this transformation in A Past Revisited, stating, "The arrival of the Spaniards was not merely an encounter of different cultures; it heralded the subjugation of the Filipino people and the imposition of foreign rule". This foreshadowed the profound changes that would engulf Filipino society.
        
        </p><br><br><h1 id="sbt2"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>The Establishment of Spanish Rule (1565–1600)</h1>
        <img src="../PICS/unit 2 pics/a.png" alt="Image Description">
        <p>
           
            The establishment of Spanish colonial rule in the Philippines brought sweeping changes, reshaping the islands' political, economic, and cultural landscapes. The Spanish government, under the authority of the governor-general appointed by the Spanish crown, operated with a highly centralized structure. This centralized governance meant that decisions affecting the entire archipelago were often made in Manila, the seat of Spanish power. The governor-general wielded immense control, supported by a bureaucracy of Spanish officials who managed local provinces, often with little regard for the well-being of the indigenous population.
            <br><br>
            Spanish colonial rule also introduced a new legal and administrative framework, which replaced the traditional systems of governance that had been in place before their arrival. The Spanish legal system imposed European laws and customs, often clashing with indigenous practices. This was part of a broader colonial strategy that sought to subdue local resistance and assert Spanish dominance. An important part of this system was the introduction of new tax structures, such as the "tribute" system, where local inhabitants were required to pay taxes to the colonial government. These taxes were often burdensome, especially on the rural populace, leading to economic hardships and sparking occasional revolts.
            <br><br>
            One of the most significant and enduring impacts of Spanish colonialism in the Philippines was the widespread religious conversion of the Filipino people to Christianity, particularly Catholicism. The Spanish crown saw the conversion of the indigenous population as a primary mission, and this goal was vigorously pursued by religious orders such as the Franciscans, Dominicans, Augustinians, and Jesuits. These missionaries played a critical role in establishing the church as a powerful institution in colonial society. Through the construction of churches, monasteries, and schools, the Spanish religious orders aimed to root Catholicism in Filipino culture.
            <br><br>
            The religious orders were not just concerned with conversion but also with shaping the social fabric of the islands. They built massive stone churches that became the center of community life, both spiritually and socially. These churches, like San Agustin Church in Manila, were grand architectural projects that symbolized the dominance of Catholicism and the permanence of Spanish rule. The church also introduced new traditions, such as Catholic sacraments, saints' feast days, and religious festivals that gradually became integral to Filipino culture.
            <br><br>
            As historian Agoncillo observes, "The Spanish conquest was not solely military; it involved the systematic conversion of the indigenous population to Christianity, which became the cornerstone of Spanish colonial policy." This cultural imposition through religion was a deliberate strategy to unite the islands under Spanish control, making religion not just a spiritual pursuit but a political tool for consolidation. Over time, Catholicism became deeply embedded in Filipino society, influencing family structures, gender roles, and community norms.
            <br><br>
            Moreover, the intertwining of religion and governance blurred the lines between the state and the church in colonial life. The Catholic Church wields significant power in both religious and political spheres, becoming a vital partner in maintaining colonial order. As a result, the colonial government relied on the church to help pacify the population, using religion as a means to legitimize Spanish rule and suppress dissent. The church also controlled vast tracts of land, further solidifying its influence over both the economic and social lives of Filipinos. 
            <br><br>
            Catholicism's lasting influence can still be seen in contemporary Filipino society, where it continues to shape values, practices, and traditions. The deep roots of Catholicism, planted during the Spanish colonial era, have made the Philippines one of the largest Catholic countries in the world today, reflecting the profound impact of the Spanish conquest on the nation’s religious and cultural identity.

        
        </p><br><br><h1 id="sbt3"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>Societal Changes and Economic Structures (1600–1800)</h1>
        <img src="../PICS/unit 2 pics/b.png" alt="Image Description">
        <p>
            As Spanish rule solidified its hold over the Philippines, the islands experienced profound social, economic, and political transformations, many of which shaped the foundations of Philippine society for centuries to come. One of the key systems introduced during this period was the encomienda system, a Spanish colonial practice intended to manage the indigenous labor force while extracting tribute from the local population. Under this system, Spanish colonizers, known as encomenderos, were granted control over specific territories, allowing them to collect tribute—often in the form of agricultural products, labor, or gold—from the native inhabitants in exchange for supposed protection and religious instruction.
            <br><br>
            While the encomienda system was presented as a means of civilizing the local population and integrating them into Spanish society, it quickly devolved into a mechanism for exploitation. The encomenderos frequently abused their power, overtaxing the locals and forcing them to work under harsh conditions. The encomienda became a source of widespread discontent, as it contributed to the impoverishment of the majority of Filipinos. As historian Gregorio Zaide notes, "The encomienda system exploited native labor, leading to widespread discontent and laying the groundwork for future resistance." The system entrenched a rigid social hierarchy in which the indigenous population was subjugated to serve the needs of Spanish colonizers, perpetuating a cycle of poverty and disenfranchisement.
            <br><br>
            Within this social hierarchy, a small native elite class known as the principalia emerged. These were local chieftains, or datus, who had been co-opted by the Spanish authorities to serve as intermediaries between the colonial government and the broader Filipino population. In exchange for their loyalty, the principalia were allowed to maintain a degree of social and economic privilege. They were often granted land and other resources, as well as a certain level of political power at the local level, which they used to further entrench their influence. As a result, the principalia became collaborators in the colonial project, benefiting from the system even as the majority of Filipinos faced severe oppression and poverty.
            <br><br>
            The principalia collaboration with the Spanish authorities created a dual dynamic: while they were the bridge between the colonizers and the local populace, their privileged position often alienated them from the majority of Filipinos, who saw them as part of the colonial machinery that perpetuated their suffering. The alliance between the Spanish and the native elite thus reinforced the social stratification that marked colonial Philippine society.
            <br><br>
            At the same time, the Philippines became part of a global economic network through the Manila-Acapulco galleon trade, which began in 1565. This trade route connected the Philippines to the vast Spanish empire, particularly linking it to Mexico and the larger network of European-controlled commerce. The galleon trade facilitated the exchange of goods such as silk, spices, porcelain, and other luxury items from Asia, which were shipped from Manila to Mexico and eventually to Europe. In return, silver from the Americas flowed into the Philippines, stimulating the local economy, at least for the Spanish elite.
            <br><br>
            However, while the galleon trade introduced new goods and ideas to the Philippines, it primarily benefited the Spanish ruling class and their local allies, including the principalia. The profits from the trade rarely trickled down to the majority of Filipinos, who remained engaged in subsistence agriculture and local trade. The peasants and rural poor saw little improvement in their economic conditions, as the wealth generated by the trade was concentrated in the hands of a small, powerful elite. Moreover, the focus on the galleon trade often disrupted local industries, as agricultural resources were diverted to support the needs of Spanish commerce rather than the local population.
            <br><br>
            The economic inequalities exacerbated by the galleon trade and the encomienda system created a volatile social environment, where the majority of the population faced increasing hardships while a small elite, both Spanish and Filipino, amassed wealth and power. This growing disparity, coupled with the exploitation of native labor and resources, laid the groundwork for future resistance movements against Spanish colonial rule.
            <br><br>
            Over time, the economic and social stratification fostered by these colonial policies contributed to the development of a distinct Filipino identity, as various groups within society began to unite in opposition to the injustices imposed by Spanish rule. The seeds of discontent down by the encomienda system and the galleon trade would later bear fruit in the form of uprisings and revolutionary movements that sought to challenge the colonial order and assert Filipino autonomy.
            <br><br>
            Thus, while Spanish colonial rule brought new economic opportunities through global trade and established a political framework that included local elites, it also entrenched social inequalities and economic exploitation that defined the colonial experience for most Filipinos. These tensions would eventually play a crucial role in the emergence of nationalist sentiments and the drive for independence.
            
        </p><br><br><h1 id="sbt3"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>Cultural and Intellectual Developments (1800–1896)</h1>
        <img src="../PICS/unit 2 pics/c.png" alt="Image Description">
        <p>
            
            The late Spanish colonial period in the Philippines marked a significant cultural and intellectual awakening, characterized by a flourishing of literature and the arts. This period was heavily influenced by the rise of the ilustrados, a class of educated Filipinos who had access to European ideas, Enlightenment philosophies, and revolutionary literature. Many of these ilustrados, coming from affluent families, were able to study in Spain and other European countries, where they were exposed to liberal and nationalist ideas that challenged the authoritarian nature of Spanish colonialism. This exposure had a profound impact on their views and laid the groundwork for the development of a national consciousness in the Philippines.
            <br><br>
            The increasing education of the ilustrados was a turning point in the intellectual and cultural history of the Philippines. While Spanish authorities maintained a tight grip on political power, the ilustrados used literature, journalism, and art as platforms to voice their criticisms of colonial abuses and advocate for reforms. José Rizal, the most famous ilustrado, embodied this intellectual awakening. His novels, Noli Me Tangere (1887) and El Filibusterismo (1891), exposed the corruption and injustices perpetrated by both the Spanish colonial government and the friars who dominated religious and political life in the Philippines. Through his writings, Rizal highlighted the exploitation, social inequality, and lack of justice that the Filipino people endured, stirring national consciousness and inspiring others to challenge the colonial system.
            <br><br>
            Rizal's works, in particular, were revolutionary in their ability to articulate a shared sense of identity among Filipinos, helping to unite diverse ethnic and linguistic groups under the idea of a single, cohesive nation. His writings played a central role in the formation of the Propaganda Movement, a group of reform-minded ilustrados who sought political and social reforms through peaceful and legal means. Their platform included demands for the representation of Filipinos in the Spanish Cortes , freedom of the press, and the secularization of the clergy.
            <br><br>
            Other notable figures in this intellectual movement included Marcelo H. del Pilar, who founded the newspaper La Solidaridad in Spain, which became the primary vehicle for the Propaganda Movement’s ideas. Through this publication, del Pilar and others, including Graciano López Jaena, advocated for the rights of Filipinos and exposed the abuses of the colonial government, particularly the friars. These ilustrados believed in peaceful reform rather than violent revolution, but their writings contributed to the growing national consciousness and the realization that Filipinos were capable of self-governance.
            <br><br>
            The arts also flourished during this period. Filipino artists, inspired by European styles, began to explore themes related to national identity and colonial oppression. Juan Luna and Félix Resurrección Hidalgo, two of the most prominent Filipino painters of the era, gained international recognition for their works. Luna’s famous painting Spoliarium, which depicts the bodies of gladiators being dragged into a chamber in ancient Rome, was seen as a powerful metaphor for the suffering of the Filipino people under Spanish rule. Similarly, Hidalgo’s works, such as Las Virgenes Cristianas Expuestas al Populacho addressed themes of colonial exploitation and religious hypocrisy.
            <br><br>
            These intellectual and artistic developments were significant because they reflected a broader shift in the consciousness of Filipinos. For the first time, a segment of the population began to imagine themselves not simply as subjects of a colonial power but as members of a distinct nation with its own identity, rights, and destiny. This burgeoning sense of nationalism was fueled by a growing dissatisfaction with the colonial system and the desire for reforms that would grant Filipinos greater autonomy and participation in their own governance.
            <br><br>
            Moreover, the spread of liberal ideas from Europe, particularly those associated with the French and American revolutions, resonated deeply with the ilustrados. Concepts such as equality, liberty, and fraternity were incorporated into the intellectual discourse of the time, leading to calls for freedom of speech, the end of abuses by the clergy, and, eventually, the independence of the Philippines from Spanish rule. This period also saw the rise of literary works in the native languages, particularly Tagalog, which helped foster a sense of unity among Filipinos from different regions.
            <br><br>
            While the ilustrados primarily sought reform through peaceful means, their efforts laid the intellectual and cultural foundations for the eventual revolution against Spanish colonial rule. The spread of nationalist ideas, combined with the abuses of the colonial government, fueled the growing discontent that would culminate in the Philippine Revolution of 1896. Though the ilustrados were initially cautious in their approach, their works inspired a new generation of Filipinos who were willing to take up arms to fight for independence.

        </p><br><br><h1 id="sbt3"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>Francisco Balagtas and Florante at Laura</h1>
        <img src="../PICS/unit 2 pics/d.png" alt="Image Description">
        <p>
            
            One of the most significant literary works from the early 19th century in the Philippines is Francisco Balagtas’s  Florante at Laura, written in the 1830s. This narrative poem, considered a cornerstone of Filipino literature, transcends its simple love story between the characters Florante and Laura to become a profound allegory for the social and political struggles experienced by Filipinos under Spanish colonial rule. Through this work, Balagtas subtly critiqued the oppressive colonial system, embedding themes of resistance and national consciousness within the framework of a classical romance and adventure tale.
            <br><br>
            At its heart, Florante at Laura tells the story of Florante, a nobleman who suffers betrayal, imprisonment, and war, all while remaining loyal to his beloved Laura. However, beneath the surface of this romantic and heroic narrative lies a powerful metaphor for the plight of the Filipino people. Florante's suffering and struggles represent the oppression faced by Filipinos under the harsh rule of the Spanish colonizers, while Laura, who remains a symbol of love, justice, and integrity, reflects the ideals that the Filipino people aspired to—freedom, equality, and self-determination.
            <br><br>
            Through his use of allegory, Balagtas was able to craft a subtle yet powerful critique of the colonial regime. Ambeth Ocampo, a noted Filipino historian and literary critic, describes Florante at Laura as "an allegory of Filipino suffering and the yearning for freedom". The struggles of Florante resonated deeply with Filipinos who experienced the daily injustices of colonial rule, such as excessive taxation, forced labor, and the loss of autonomy. The betrayal Florante experiences within the poem, particularly by figures of power, reflects the treachery and corruption of colonial authorities, as well as the disillusionment many Filipinos felt toward the leadership of their country under Spain.
            <br><br>
            The poem also touches on broader themes of loyalty, betrayal, and patriotism. Florante’s steadfastness in the face of suffering, along with his loyalty to Laura, symbolizes the resilience of the Filipino people and their determination to hold onto their ideals, even in the face of oppression. The betrayal Florante endures from those close to him mirrors the political betrayal felt by many Filipinos who had been deceived by corrupt local leaders and Spanish officials who promised protection but delivered exploitation.
            <br><br>
            Moreover, Florante at Laura is written in Tagalog, a significant choice at a time when the Spanish colonial government promoted Spanish as the language of education and governance. By writing in the native language, Balagtas not only reached a wider Filipino audience but also affirmed the value of local culture, which was often diminished by colonial rule. His use of Tagalog contributed to a sense of pride in Filipino identity and cultural heritage, helping to foster a collective sense of belonging among his readers.
            <br><br>
            In terms of literary style, Balagtas drew inspiration from European epics, yet he infused his poem with Filipino values, concerns, and struggles. His work stood out because it seamlessly blended Western literary forms with local themes, creating a uniquely Filipino voice that resonated with a broad audience. This combination made *Florante at Laura* accessible to ordinary Filipinos while also speaking to the intellectual elite, including the emerging class of ilustrados—educated Filipinos who would later lead the movement for independence.
            <br><br>
            The themes and narrative of Florante at Laura played an essential role in inspiring a sense of national identity among Filipinos during a time of growing unrest. While not overtly political, the poem’s exploration of suffering, justice, and the fight against oppression provided a framework for understanding the colonial experience in a way that connected with Filipinos on both an emotional and intellectual level. Its allegorical critique of Spanish rule resonated with readers who, like Florante, were yearning for a better, more just society. In this way, the poem became more than a literary work—it was a form of cultural and political resistance. Florante at Laura continues to hold a central place in Filipino literature and is often regarded as a precursor to the more direct political writings of later Filipino authors, such as José Rizal, whose works would eventually call for outright reform and revolution against the Spanish regime. Through the power of his narrative and the depth of his allegory, Francisco Balagtas crafted a timeless work that not only captured the struggles of his time but also contributed to the shaping of a national consciousness that would eventually lead to the Philippines’ quest for independence.
            
        </p><br><br><h1 id="sbt3"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>José Rizal and the Rise of Nationalism</h1>
        <img src="../PICS/unit 2 pics/f.webp" alt="Image Description">
        <p>
            
            A towering figure in Filipino literature and nationalism, José Rizal used his intellect and writings to expose the injustices of Spanish colonial rule and inspire a movement toward reform and independence. His seminal novels, Noli Me Tangere and El Filibusterismo, are widely regarded as two of the most important works in Philippine literature, both for their literary merit and for the impact they had on the development of Filipino national consciousness.
            <br><br>
            In Noli Me Tangere (Touch Me Not), Rizal illustrated the struggles of the Filipino people through the story of Crisostomo Ibarra, a young Filipino who returns home after studying abroad, filled with hopes of reforming his country. However, upon his return, Ibarra confronts the grim realities of colonial oppression—corruption in the Church, abuses by the friars, and the systemic exploitation of the Filipino people. Through Ibarra’s journey, Rizal brings to life the daily sufferings of the Filipino populace under Spanish rule, as well as the pervasive social inequalities that kept them impoverished and powerless.
            <br><br>    
            The characters in Noli Me Tangere are symbolic representations of different sectors of Filipino society. Padre Damaso, for instance, is the corrupt friar who wields his power to oppress the poor, and Maria Clara, Ibarra’s love interest, represents the Filipina who, like her country, is caught between the conflicting powers of colonialism and her own identity. The novel paints a vivid picture of the "social cancer" plaguing Philippine society, as Rizal himself referred to it, and calls for moral and political reform. The narrative is at once a moving love story and a bold critique of colonial rule, using the personal struggles of its characters to reflect the broader national struggle.
            <br><br>
            Ambeth Ocampo, a historian and scholar of Rizal’s works, remarks that Noli Me Tangere was "more than a novel; it was a mirror held up to society, exposing the rot beneath the surface" . It stirred the hearts and minds of many Filipinos, who saw their own suffering reflected in the experiences of Ibarra and the oppressed villagers in the novel.
            <br><br>
            Rizal’s second novel, El Filibusterismo (The Reign of Greed), takes on a darker, more revolutionary tone. In this sequel to Noli Me Tangere, Ibarra reappears under the guise of Simoun, a wealthy jeweler bent on exacting revenge against the Spanish colonial regime. Disillusioned by the failure of his earlier attempts at peaceful reform, Simoun now seeks to incite a revolution and overthrow the oppressive system by violent means. The novel delves deeply into the themes of revolution, sacrifice, and the moral complexities of pursuing freedom through violent resistance.
            <br><br>
            While Noli Me Tangere focuses on the need for reform and dialogue, El Filibusterismo reflects Rizal’s growing disillusionment with the possibility of peaceful change. The novel is a powerful exploration of the tensions between idealism and radicalism, as Simoun’s quest for vengeance leads to personal tragedy and the recognition that violence may not always lead to justice. This shift in tone reflects the growing frustration of Filipinos at the time, as hopes for reform were continuously thwarted by the intransigence of the colonial government and the clergy.
            <br><br>
            Rizal’s novels had an undeniable impact on Filipino society. They brought to light the abuses of the colonial system and the clergy, creating an awareness of the need for change. Rizal's portrayal of the Filipino experience resonated deeply with both the educated elite and the broader populace, inspiring many to take a more active stance against colonial rule.
            <br><br>
            Ambeth Ocampo emphasizes that "Rizal’s writings galvanized the Filipino spirit and inspired a new generation to aspire for freedom and reform". The publication of Noli Me Tangere and El Filibusterismo provided Filipinos with a sense of collective identity, one rooted in shared suffering and the desire for liberation. While Rizal advocated for peaceful reforms, his works planted the seeds for the eventual revolution against Spain by awakening Filipinos to the possibility of a future free from colonial domination.
            <br><br>
            Rizal’s activism extended beyond his literary work. He became a leading figure in the Propaganda Movement, a group of reformist Filipinos, or ilustrados, who sought political and social reforms from Spain. They lobbied for greater representation in the Spanish Cortes, the secularization of the clergy, and an end to colonial abuses. Rizal’s essays and speeches, alongside those of other ilustrados like Marcelo H. del Pilar and Graciano López Jaena, helped spread the movement’s ideas both in the Philippines and abroad.
            <br><br>
            Despite his commitment to peaceful reform, Rizal’s growing influence and his critique of the colonial system made him a target of the Spanish authorities. On December 30, 1896, he was executed by firing squad in Bagumbayan, charged with inciting rebellion. Rizal’s execution was a pivotal moment in Philippine history. His martyrdom ignited widespread anger and became a rallying cry for revolutionaries, particularly the Katipunan, a revolutionary group led by Andrés Bonifacio, who sought to overthrow Spanish rule by armed rebellion.
            <br><br>
            Rizal’s death solidified his status as a national hero and a martyr for the cause of independence. The revolutionaries who took up arms against Spain saw him as a symbol of sacrifice and the ultimate expression of the Filipino desire for freedom. His legacy is honored every December 30, celebrated as Rizal Day, a national holiday in the Philippines.
            
        </p><br><br><h1 id="sbt3"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>The Rise of Nationalism (1892–1896)</h1>
        <img src="../PICS/unit 2 pics/g.webp" alt="Image Description">
        <p>
            
            The period between 1892 and 1896 was marked by a profound transformation in the Philippine struggle for independence, with the formation of the Katipunan led by Andrés Bonifacio serving as a pivotal moment. The Katipunan was not just a revolutionary organization; it was a symbol of Filipino unity and collective action against Spanish colonial rule. Bonifacio’s vision for the organization was deeply rooted in the ideals of freedom, equality, and national identity. He sought to awaken the masses, who had long suffered under oppressive colonial governance, and to inspire them to take up arms for their liberation.
            <br><br>
            William Henry Scott observes, "The emergence of the Katipunan represented the culmination of Filipino discontent, as the masses began to unite against their colonial oppressors". This assertion underscores the role of the Katipunan as a catalyst for mobilization among Filipinos from diverse backgrounds. The organization effectively drew support from various sectors of society, including the ilustrados , workers, and peasants, all of whom were weary of exploitation and oppression. The Katipunan’s commitment to revolutionary ideals galvanized the populace, leading to a burgeoning national consciousness that transcended regional and class differences.
            <br><br>
            The revolution began in August 1896 when Spanish authorities uncovered the Katipunan’s plans for revolt. This discovery led to a series of uprisings across the islands, marking the start of an armed struggle against colonial rule. The initial phases of the revolution were characterized by fierce and bloody battles, including the Battle of San Juan del Monte and the Battle of Imus. Despite being poorly armed and lacking formal military training, the Filipino revolutionaries displayed remarkable bravery, resilience, and ingenuity in their fight against the better-equipped Spanish forces.
            <br><br>
            The revolutionary spirit that fueled these early battles was rooted in a deep sense of injustice. The revolutionaries fought not only for independence but also for recognition of their rights as human beings and citizens of the nation. They were motivated by a desire to overthrow the oppressive systems that had long subjugated them, and their courage in the face of adversity laid the groundwork for future successes in the struggle for independence.
            <br><br>
            A key turning point in the revolution came with the execution of José Rizal on December 30, 1896. Rizal’s execution acted as a catalyst for the revolutionary movement, transforming him into a symbol of the fight for freedom and justice. Although Rizal advocated for reform through peaceful means, his martyrdom resonated deeply with the Filipino people, igniting widespread outrage and galvanizing support for the revolutionary cause. His life and work were seen as embodying the aspirations of the nation, and his death prompted many individuals, previously hesitant to join the revolution, to take up arms.
            <br><br>
            In the wake of Rizal’s execution, the struggle for independence took on new urgency. His death became a rallying cry that inspired Filipinos from all walks of life to join the ranks of the revolutionaries. The sentiment of sacrifice and collective struggle permeated the movement, as the desire for freedom grew stronger. The revolutionaries rallied around Rizal’s memory, viewing their fight as a moral obligation to honor his legacy and the ideals he represented.
            <br><br>
            This new wave of fervor led to intensified military engagements and strategic maneuvers by revolutionary leaders. The Katipunan evolved from a clandestine organization into a formidable revolutionary force, uniting various factions and creating a more organized resistance against the Spanish. The leadership of figures like Bonifacio and later Emilio Aguinaldo was instrumental in mobilizing troops and resources, coordinating efforts across different regions.
            <br><br>
            As the revolution progressed, the Filipino forces gained momentum, capturing key towns and territories. This not only boosted the morale of the revolutionaries but also attracted further support from the Filipino populace, who were inspired by the successes of their fellow countrymen. The revolutionaries established temporary local governments in liberated areas, further asserting their autonomy and capability to govern without colonial oversight.
            <br><br>
            The struggle also caught the attention of the international community. Filipinos sought to garner support from other nations sympathetic to their cause, framing their fight for independence as a quest for justice and self-determination. This international interest, combined with the escalating conflict between the revolutionaries and Spanish forces, set the stage for a broader confrontation that would ultimately lead to significant changes in the Philippines.

        </p><br><br><h1 id="sbt3"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>The End of Spanish Rule (1898)</h1>
        <img src="../PICS/unit 2 pics/h.png" alt="Image Description">
        <p>
            
            The year 1898 marked a significant turning point in Philippine history with the onset of the Spanish-American War, a conflict that drastically altered the dynamics of colonial control in the archipelago. As tensions between the United States and Spain escalated, the U.S. sought to expand its influence in the Pacific. The American intervention in the Philippines, initially framed as support for the Filipinos in their fight for independence, soon revealed the complexities of imperial ambitions.
            <br><br>
            A decisive moment in the struggle for Filipino independence occurred on May 1, 1898, during the Battle of Manila Bay, where American naval forces, under the command of Commodore George Dewey, decisively defeated the Spanish fleet. This victory not only showcased the military might of the United States but also marked the beginning of the end for Spanish colonial rule in the Philippines. For the Filipino revolutionaries, this victory ignited hope that their own aspirations for independence would finally be realized.
            <br><br>
            However, the end of the Spanish-American War did not align with the expectations of the Filipino people. On December 10, 1898, the Treaty of Paris was signed, formally concluding the conflict. In this treaty, Spain ceded the Philippines to the United States for $20 million, a financial transaction that shocked and disheartened Filipino leaders who had fought valiantly for their independence. The transfer of power was perceived not as a liberation but as a betrayal of the promises of freedom that had fueled the revolution against Spain.
            <br><br>
            Historian Teodoro Agoncillo poignantly captures this sentiment, stating, "The end of Spanish rule did not bring the desired freedom for Filipinos but rather set the stage for a new colonial master". This transition revealed the complexity of colonial dynamics, as the aspirations of the Filipino people for true independence were met with the imposition of American imperialism.
            <br><br>
            The American administration presented itself as a benevolent force, claiming to bring progress and modernization to the Philippines. However, this narrative was met with skepticism and resistance by many Filipinos, who recognized that they were exchanging one colonial master for another. The initial goodwill towards the Americans quickly dissipated as it became clear that the U.S. intended to establish a colonial regime rather than support genuine self-governance.
            <br><br>
            As discontent grew, Filipino leaders and revolutionaries rallied to defend their hard-won aspirations for independence. The conflict escalated into a new struggle, this time against American rule. Emilio Aguinaldo, who had initially welcomed American support, now found himself at the forefront of the resistance against the new colonial power. The Philippine-American War erupted in 1899, with Aguinaldo leading the fight for independence.
            <br><br>
            The Philippine-American War was characterized by intense and brutal conflict, with both sides suffering significant casualties. The Filipino revolutionaries, emboldened by a deep sense of nationalism and the desire to assert their rights, engaged in guerilla warfare against American forces. The struggle highlighted the complexities of colonialism and the challenges faced by a nation fighting for its identity and sovereignty.
            <br><br>
            The aspirations of the Filipino people for self-determination faced tremendous challenges as they navigated the realities of American imperialism. The promise of democracy and progress touted by the United States clashed with the lived experiences of many Filipinos, who found themselves caught in a cycle of oppression and resistance. The struggle against American colonial rule would persist for years, shaping the trajectory of the Philippines as it sought to assert its identity on the world stage.
            </p>
            
             </section>
             <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">⬆️</button>
        </main>
        <button onclick="hideContent()">Back</button>
    </div>

    <div id="lesson3" class="content hidden">

<!-- Back Button in Top Left Corner -->
<button class="back-btn" onclick="hideContent()"><i class="fas fa-arrow-left"></i></button>

        <main id="mainContent">
    <section class="content-section">
	 
		 <h2 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> American Colonialism Period<br>&nbsp;&nbsp;&nbsp;1898-1946</h2>
		
          <video controls autoplay muted loop>
                <source src="../HOME1/LESSON VIDS/vid3.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video><br><br><br><br><br>

<h1 id="sbt1"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Prelude to war</h1>
<img src="../PICS/unit 3 pics/1.png" alt="Image Description">
<p>
In the mid-19th century, as the United States sought to expand its territory, Spain’s control over its colonies weakened, particularly in the Philippines. The signing of the Pact of Biak na Bato sparked reform efforts among Filipinos. A new Governor General, unfamiliar with the local situation, took charge as tensions rose due to the Cuban rebellion against Spain. The U.S., with interests in Cuba, allied with the rebels and prepared to confront Spain.
<br><br>
An intercepted letter from the Spanish ambassador, calling President McKinley weak, fueled American outrage. Additionally, allegations of mistreatment of Americans in Cuba contributed to negative sentiments toward Spain. The explosion of the U.S. warship Maine in Havana Harbor, which killed 246 people, served as the catalyst for the Spanish-American War, further straining relations between the two nations.
<br><br><img src="../PICS/unit 3 pics/2.png" alt="Image Description">

On April 25, 1898, General George Dewey received a telegram announcing the start of war between Spain and the United States. He then sailed from Mears Bay, near Hong Kong, to Manila Bay, arriving on May 1, where he found Spanish forces at Sangley Point, Cavite.
<br><br>

</p><br><br><h1 id="sbt2"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Battle of Manila Bay</h1><p>
Dewey directed his forces toward Sangley Point and, upon confirming they were ready to attack, instructed the captain of the flagship Olympia to open fire:
<br><br>

<strong>“Start firing if you’re ready!”</strong></p>
<div class="toggle-container">
<audio id="audio" src="../HOME1/unit 3 voice/1Stop Firing.mp3"></audio>
    <input type="checkbox" id="audio-toggle" class="toggle-checkbox">
    <label for="audio-toggle" class="toggle-label">
        <span class="toggle-text">🔈</span>
        <span class="toggle-text toggle-text-muted">🔇</span>
    </label>
</div>

<br><br><img src="../PICS/unit 3 pics/3.png" alt="Image Description"><p>

The battle was nearly one-sided, as Spanish forces were unprepared for American weaponry. This victory ignited enthusiasm among Americans, many of whom were unfamiliar with the Philippines' location. After defeating the Spanish fleet in the Battle of Manila Bay, Dewey blockaded Intramuros to prevent any Spanish ships from escaping or entering.
<br><br>


</p><br><br><h1 id="sbt3"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Aguinaldo’s Return</h1><p>
During his exile in Hong Kong, Emilio Aguinaldo and his government became aware of the conflict between Spain and the United States. They viewed this situation as a crucial opportunity to remove Spanish control from the Philippines. However, tensions within Aguinaldo's government arose regarding the distribution of funds received from the Spanish government after the signing of a pact. This disagreement led Isabelo Artacho to file a lawsuit against Aguinaldo, who evaded the court hearing by fleeing to Singapore with his associates, Gregorio del Pilar and Jay Leyva.
<br><br><img src="../PICS/unit 3 pics/5.png" alt="Image Description">

While in Singapore, American Consul E. Spencer Pratt advised Aguinaldo to place his trust in the United States and join them in the fight against Spain. Aguinaldo expressed his desire to return to the Philippines to continue the revolution.
<br><br>

Pratt communicated with Admiral George Dewey, who agreed to facilitate Aguinaldo’s return to Hong Kong. However, by the time Aguinaldo arrived, Dewey had already departed. Aguinaldo met with the American Consul in Hong Kong, Roon Zeville Wildman, who informed him that Dewey had issued orders for Aguinaldo to return to the Philippines. Wildman also advised Aguinaldo to establish a military government upon his arrival, which would reflect the structure of the U.S. government following the war. Aguinaldo then instructed Wildman to purchase weapons for the revolutionary forces. While he was able to acquire an initial batch of weapons, the subsequent order was not fulfilled, and Wildman failed to return the funds to Aguinaldo.
<br><br><img src="../PICS/unit 3 pics/6.png" alt="Image Description">

Before returning to the Philippines, the Hong Kong Junta, which was Aguinaldo's government, decided to rejoin the struggle for independence. Aguinaldo successfully arrived in Cavite in May 1898. After his arrival, he conferred with General Dewey aboard the USS Olympia, where Dewey reassured him that the United States had no plans to establish a colonial regime in the Philippines, which he believed. 
<br><br>

Aguinaldo's return sparked a resurgence of enthusiasm among Filipinos, leading many to volunteer for the revolution. During this time, various provinces were captured by Filipino rebels, significantly diminishing Spanish control in the region. Almost all of Luzon was under Filipino command, with the exceptions of Cavite and the Port of Manila.
<br><br><img src="../PICS/unit 3 pics/7.png" alt="Image Description">

On June 12, 1898, Emilio Aguinaldo proclaimed the independence of the Philippines at his residence in Cavite El Viejo. During this event, the "Acta de la Proclamación de Independencia del Pueblo Filipino," penned by Ambrosio Rianzares Bautista, was signed by 98 Filipino nationals. The sole surviving copy of this document, referred to as "The Birth Certificate of the Filipino Nation," was handwritten by Lieutenant Colonel Jose Bañuelo. Following this proclamation, Aguinaldo issued a decree on June 18 to formally establish his dictatorial government. Subsequently, on June 23, he replaced the dictatorial regime with a revolutionary government, designating himself as president. On July 15, Aguinaldo further solidified his authority by issuing three organic decrees that assumed civil governance over the Philippines.
<br><br><img src="../PICS/unit 3 pics/8.png" alt="Image Description"><br>

However, the situation for the Filipinos took an unexpected turn. The Americans did not plan to attack Intramuros due to a lack of troops. In response, Aguinaldo's forces surrounded Intramuros, cutting off food and water supplies. This resulted in severe suffering for the residents, who faced hunger and thirst. Aguinaldo urged Governor-General Agustin to surrender, but Agustin refused, citing his commitment to their Code of Honor.
<br><br><br>

	 
</p><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Mock Battle</h1>
<img src="../PICS/unit 3 pics/9.png" alt="Image Description">
<p>	 
When American reinforcements arrived, preparations for an assault on Manila began. Meanwhile, Admiral Dewey sought to persuade General Agustin to surrender through the Belgian Consul. Although Agustin was considering surrender, he was replaced by General Haudene, who negotiated a mock battle with Dewey and General Merritt to save face.
<br><br>

Dewey agreed, but Haudene insisted that Filipino rebels should not participate, which Dewey accepted, believing the Filipinos were allies. At that time, the Filipinos had nearly complete control over Manila and were monitoring the Spanish in Intramuros.
<br>

Filipinos were ordered to vacate the Bayside in Intramuros for the Americans to take over. Aguinaldo requested that General Merritt provide a written order, which Merritt agreed to after leaving Bayside, and the Filipinos complied.
<br><br><img src="../PICS/unit 3 pics/10.png" alt="Image Description"><br>

The steady arrival of American troops surprised Aguinaldo's government, which began to question America's true intentions. Meanwhile, the Americans prepared for the mock battle, and General Anderson sent a warning to Aguinaldo not to position troops along the Pasig River due to impending gunfire.
<br><br><img src="../PICS/unit 3 pics/11.png" alt="Image Description">

On August 13, despite warnings, the mock battle occurred after negotiations with Haudene. Aguinaldo positioned Filipino forces on General MacArthur's left flank. The mock battle lasted several hours, and around 11:30, the Spaniards raised a white flag, signaling their surrender.
<br><br>
	
</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> America’s True Intention </h1>
<img src="../PICS/unit 3 pics/12.png" alt="Image Description">
<p>
The Filipinos had initially seen the Americans as aiding them in their independence from Spain, but the Americans did not see things this way. For  them, it was an opportunity, as President William McKinley put it : 
<br><br><br><br><br><br>

<strong>“to uplift and civilize and Christianize them”</strong></p>
<div class="toggle-container">
<audio id="audio2" src="../HOME1/unit 3 voice/2To uplift.mp3"></audio>
    <input type="checkbox" id="audio-toggle2" class="toggle-checkbox2">
    <label for="audio-toggle2" class="toggle-label2">
        <span class="toggle-text2">🔈</span>
        <span class="toggle-text2 toggle-text-muted2">🔇</span>
    </label>
</div>
<br><br><p>

Americans established a military government at Manila In August 1898. With this self-created authority, they set up local governments, including schools and courts, with the American model. 
<br><br>

On August 12, 1898, the United States and Spain entered into a peace protocol in Washington, D.C. Although the complete text of the protocol was not disclosed to the public until November 5, Article III explicitly stated that "The United States will occupy and hold the City, Bay, and Harbor of Manila, pending the conclusion of a treaty of peace that shall determine the control, disposition, and government of the Philippines." General Merritt was informed of this protocol on August 16, shortly after the surrender of Manila. A subsequent telegram, dated August 17, communicated to Admiral Dewey and General Merritt that the United States was to maintain full control over Manila, prohibiting any joint occupation. Following additional negotiations, insurgent forces withdrew from the city on September 15, thereby marking the end of Filipino-American collaboration.
<br><br>

<strong>"We must conquer the Philippines if we are to have peace."</strong>
General Thomas M. Anderson, American military leader</p>
<div class="toggle-container">
<audio id="audio3" src="../HOME1/unit 3 voice/3We must conquer.mp3"></audio>
    <input type="checkbox" id="audio-toggle3" class="toggle-checkbox3">
    <label for="audio-toggle3" class="toggle-label3">
        <span class="toggle-text3">🔈</span>
        <span class="toggle-text3 toggle-text-muted3">🔇</span>
    </label>
</div><br><p>
<br><br><img src="../PICS/unit 3 pics/13.png" alt="Image Description">

President McKinley subsequently issued a directive demanding the full cession of the Philippine archipelago. This led to the signing of the Treaty of Paris in December 1898, which officially ended the Spanish-American War. A key provision of the treaty was the transfer of the archipelago to the United States in exchange for $20 million in compensation. In 1900, the Treaty of Washington further clarified this agreement, stating that any Spanish territories in the archipelago not specifically included in the geographical boundaries outlined in the Treaty of Paris were also ceded to the United States.
<br><br>

After the Treaty of Paris was signed, President McKinley issued the Benevolent Assimilation proclamation on December 21, outlining America’s true intentions in the Philippines, stating that the US would control the Philippine government. General Otis, upon reading it, saw that it might have a negative impact on Filipinos. The US aimed to win the hearts of the Filipinos, so they needed to feel they were not being colonized.
<br><br><img src="../PICS/unit 3 pics/14.png" alt="Image Description">

Thus, when the Benevolent Assimilation was published, Otis modified parts to suggest that America was there to help the Filipinos. However, General Miller in Iloilo published the original version, leading to outrage among revolutionaries who realized America’s true intentions. Luna criticized this in the newspaper La Independencia.
<br><br>
<br><br><br><br><br><br><br><br>
<img src="../PICS/unit 3 pics/15.png" alt="Image Description">
In response, Aguinaldo issued a counter-proclamation against this. His intentions were clear, but to Otis, this counter-proclamation indicated that Aguinaldo was seeking war. Aguinaldo's government tried to ease tensions between the two sides.
<br><br><br><br><br><br><br><br><br><br><img src="../PICS/unit 3 pics/16.png" alt="Image Description">
<img src="../PICS/unit 3 pics/17.png" alt="Image Description">

They held a conference with the Americans, who convinced them that they would listen to Filipino grievances. However, it was just a tactic to delay fighting, as they awaited reinforcements. Growing tensions between America and the Philippines erupted on February 4, 1899, when American and Filipino soldiers faced each other at San Juan Bridge. The encounter happened by chance, as Filipino troops stationed near the Americans came into contact with them. According to Private William Grayson, when he spotted armed Filipino soldiers, he shouted, 

<br><br><strong>"Halt,"</strong></p> 
<div class="toggle-container">
<audio id="audio4" src="../HOME1/unit 3 voice/4Halt.mp3"></audio>
    <input type="checkbox" id="audio-toggle4" class="toggle-checkbox4">
    <label for="audio-toggle4" class="toggle-label4">
        <span class="toggle-text4">🔈</span>
        <span class="toggle-text4 toggle-text-muted4">🔇</span>
    </label>
</div><p>

but they kept moving forward. He called out again, and the Filipino soldier replied with 

<br><br><strong>"Halto."</strong> </p>
<div class="toggle-container">
<audio id="audio5" src="../HOME1/unit 3 voice/5Halto.mp3"></audio>
    <input type="checkbox" id="audio-toggle5" class="toggle-checkbox5">
    <label for="audio-toggle5" class="toggle-label5">
        <span class="toggle-text5">🔈</span>
        <span class="toggle-text5 toggle-text-muted5">🔇</span>
    </label>
</div><p>

Grayson then fired his weapon, hitting the Filipino soldier, who fell to the ground.
<br><br>

</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> War of America and Filipino</h1>
<img src="../PICS/unit 3 pics/18.png" alt="Image Description">
<p>
The news of the confrontation reached General MacArthur, who promptly declared the beginning of war between American and Filipino forces. In an attempt to clarify the situation, Aguinaldo sent a letter to General Ores, insisting that the chaos was not instigated by him. However, Otis suggested that, since hostilities had already commenced, they should continue their efforts.
<br><br><img src="../PICS/unit 3 pics/19.png" alt="Image Description">

As Aguinaldo sought to investigate the incident, American troops launched attacks on various locations in Manila, capturing Pasig and other cities. After taking La Loma, the Americans set their sights on Kalookan, where General Luna was stationed. Although the Americans secured victory there, Luna devised a plan to retake Manila but was ultimately defeated.
<br><br>

Luna retreated to Pulo, where he established his headquarters. When American reinforcements arrived, they captured Pulo and advanced to Malolos, where Aguinaldo's government was located. Faced with growing danger, Aguinaldo fled to San Isidro, Nueva Ecija.
<br><br>

After a brief stay in Malolos, MacArthur pursued them to Kalumpit. The defense was expected to be strong, as the Americans needed to cross the Bagbag River. However, this defense failed because the hot-headed Luna had gone to Pampanga to confront General Mascardo, leaving only General Gregorio del Pilar to defend the position. Their defeat marked the beginning of the rapid fall of provinces and cities to American control.

<br><br><strong>"We are fighting for our independence!"</strong> - Emilio Aguinaldo, 1899</p>
<div class="toggle-container">
<audio id="audio6" src="../HOME1/unit 3 voice/6We are fighting.mp3"></audio>
    <input type="checkbox" id="audio-toggle6" class="toggle-checkbox6">
    <label for="audio-toggle6" class="toggle-label6">
        <span class="toggle-text6">🔈</span>
        <span class="toggle-text6 toggle-text-muted6">🔇</span>
    </label>
</div><p>

<br><br><img src="../PICS/unit 3 pics/20.png" alt="Image Description">

Amid this turmoil, tensions within Aguinaldo's cabinet led to Luna's assassination, a significant loss for the Filipino resistance. Luna’s plans were not followed through. In other parts of the Philippines, it was increasingly challenging for Filipino troops to maintain their struggle against the Americans. Aguinaldo hoped to continue the resistance, but fighting was becoming impossible as American control expanded.
<br><br><img src="../PICS/unit 3 pics/21.png" alt="Image Description">

With new American strategies, Aguinaldo was forced to retreat further into the mountains, where access to resources became a significant challenge. His troops struggled with a lack of food, leading to the deterioration of their strength. Aguinaldo's strategy was to strengthen his defenses, making it difficult for the Americans to advance. In many skirmishes, the Americans suffered losses due to their tendency to be in the open, while Aguinaldo and his men effectively used the terrain to their advantage.
<br><br><img src="../PICS/unit 3 pics/22.png" alt="Image Description">

The Filipinos were poorly equipped for conventional warfare against a modern state, often relying on bows, arrows, and spears instead of firearms. After several months of direct conflict, they adopted guerrilla tactics to inflict consistent losses on American forces rather than attempting a complete military takeover. In response, the United States adjusted its strategies, establishing concentration camps to segregate civilians for their supposed protection from guerrilla activities.
<br><br>

Prisoners of war camps suffered from inadequate supplies, leading to rampant diseases that caused more Filipino deaths than the fighting itself. The insurgency continued, prompting General Arthur MacArthur to declare martial law on December 20, 1900. Meanwhile, an American Commission led by future President William Howard Taft began developing a new government structure, aiming to persuade some resistance leaders to abandon their anti-American efforts.
<br><br><img src="../PICS/unit 3 pics/23.png" alt="Image Description">

Hostilities waned significantly after President Aguinaldo's capture in March 1901.
<br><br>

<strong>"I am still the president of the Republic of the Philippines."</strong></p>
<div class="toggle-container">
<audio id="audio7" src="../HOME1/unit 3 voice/7Im Still.mp3"></audio>
    <input type="checkbox" id="audio-toggle7" class="toggle-checkbox7">
    <label for="audio-toggle7" class="toggle-label7">
        <span class="toggle-text7">🔈</span>
        <span class="toggle-text7 toggle-text-muted7">🔇</span>
    </label>
</div><p>

<br><br>

He officially surrendered on April 19 and called on his people to lay down their arms, though some local leaders, like Miguel Malvar and Vicente Lukban, continued to resist until April 1902, with isolated pockets of resistance lingering until 1913.
<br><br>
 
The war ultimately resulted in greater costs in lives and resources for the U.S. than the Spanish-American War, with at least 200,000 Filipino civilians perishing due to disease and famine. The U.S. employed a scorched-earth policy in guerrilla-infested areas and resorted to extreme measures for information extraction, while Filipino fighters also used brutal tactics against captured Americans.
<br><br><img src="../PICS/unit 3 pics/24.png" alt="Image Description">

The casualties during the Philippine-American War were disproportionately higher among Filipinos compared to Americans. Nearly 4,000 American soldiers died out of approximately 125,000 who served in the conflict. In contrast, around 20,000 Filipino combatants lost their lives, along with an estimated 250,000 to 1 million non-combatants. The non-combatant deaths were attributed to several factors, including a severe cholera epidemic and violence perpetrated by U.S. military forces. This violence included targeted attacks on civilians and the establishment of concentration camps, which significantly contributed to the high death toll.
<br><br>

</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Insular Government</h1>
<img src="../PICS/unit 3 pics/25.png" alt="Image Description">
<p>
After the war, the Philippines were placed under the Insular Government, a territorial administration accountable to the United States, aimed at guiding the country toward independence. In 1907, elections were held for an assembly that served as the lower house of a bicameral legislature, with the U.S.-appointed Philippine Commission as the upper house. This assembly regularly passed resolutions calling for independence.
<br><br>

The Philippine Autonomy Act, or Jones Law, enacted in 1916, replaced the Commission with an elected Senate and asserted U.S. support for Philippine independence, although no specific timeline was provided. Efforts toward independence stalled during World War I, but after the war, a Philippine delegation sought support in Washington. President Woodrow Wilson indicated that the Philippines were ready for independence in 1921, though his successors disagreed.
<br><br>

In January 1933, the U.S. established a timeline for independence through the Philippine Independence Act of 1934, which outlined the process for drafting a constitution and forming a commonwealth. The new constitution took effect on November 15, 1935, setting July 4, 1946, as the date for the Philippines to gain independence from U.S. oversight.
<br><br>

</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Philippine Commonwealth</h1>
<img src="../PICS/unit 3 pics/26.png" alt="Image Description">
<p>
The period from 1935 to 1946 was intended for the Philippines to transition to full independence, allowing for significant autonomy. However, the outbreak of war with Japan disrupted these plans.
<br><br>

On May 14, 1935, Manuel L. Quezon of the Nacionalista Party was elected the first president of the Commonwealth of the Philippines, establishing a government inspired by the U.S. Constitution. The new commonwealth featured a strong executive, a unicameral assembly, and a Supreme Court composed entirely of Filipinos for the first time since 1901.
<br><br>

Quezon prioritized defense, social justice, economic diversification, and the promotion of national identity. Tagalog was declared the national language, women gained the right to vote, and land reform was proposed. The government aimed to strengthen national defense, gain economic control, reform education, improve transportation, colonize Mindanao, and encourage local industry. However, it faced agrarian unrest, an unstable diplomatic situation, and doubts about U.S. commitment to Philippine independence. Amid landless peasant protests, public lands were opened for resettlement.
<br><br>

In 1939–1940, the Constitution was amended to restore a bicameral Congress and allow Quezon to seek re-election. From 1940 to 1941, with U.S. support, several mayors in Pampanga advocating for land reform were removed from office. After the 1946 election, some legislators opposing special economic treatment from the U.S. were barred from taking their positions.
<br><br></p>

	
	
	 </section>
     <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">⬆️</button>
</main>
        <button onclick="hideContent()">Back</button>
    </div>

    <div id="lesson4" class="content hidden">

        <!-- Back Button in Top Left Corner -->
<button class="back-btn" onclick="hideContent()"><i class="fas fa-arrow-left"></i></button>

        <main id="mainContent">
            <section class="content-section">
             
                 <h2 id="sbt5"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Japanese Occupation Period<br>1942-1945</h2>
                 
                  <video controls autoplay muted loop>
                <source src="../HOME1/LESSON VIDS/vid4.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video><br><br><br><br><br>
                 
                 <img src="../PICS/unit 4 pics/1.png" alt="Image Description">
                 <p>

        The period of Japanese occupation in the Philippines, from 1942 to 1945, marked a dark and tragic era in the nation’s history. Throughout this time, Filipinos faced great suffering and hardship, yet they showed extraordinary bravery and determination in their resistance against the invaders.
        <br><br><img src="../PICS/unit 4 pics/2.png" alt="Image Description">
        
        Japan sought access to Southeast Asia's natural resources—oil, rubber, and minerals—to support its growing economy and military. Japan wanted to remove U.S. influence in Southeast Asia to access natural resources and make it easier to defend its territories. They planned to destroy the American Pacific Fleet at Pearl Harbor, thinking the U.S. would not react. Recognizing the Philippines' importance, the U.S. grew worried as Japan's power increased, leading to the National Defense Act, which combined U.S. and Filipino forces into the United States Army Forces in the Far East (USAFE). Despite diplomatic efforts to prevent conflict in the late 1930s, these attempts failed.
        <br><br><img src="../PICS/unit 4 pics/3.png" alt="Image Description">
        
        In December 1941, Japan launched a surprise attack on the US naval base at Pearl Harbor in Hawaii. The U.S. was furious and declared war on Japan. Four hours after the Japanese weakened American forces in the Pacific by bombing Pearl Harbor, Japan bombed various locations in the Philippines.
        <br><br>
        
        On December 8, 1941, Clark Field was attacked, along with Davao, Baguio, Apari, Nichols Field, and Sangley Point. By the end of December, the Japanese targeted Manila, which General MacArthur declared an open city to reduce destruction, but bombings continued.
        <br><br>
        
        Japanese forces landed at Bataan and quickly advanced to Apari, Pandan, and Legaspi. With few military defenses, resistance was minimal. Rumors of U.S. warplanes arriving were false; Japan had already destroyed American aircraft at Clark and Nichols. By December 22, the Japanese had landed in Lingayen, and by January 2, 1942, they had captured Manila.
        <br><br><img src="../PICS/unit 4 pics/4.png" alt="Image Description">
        
        On December 24, MacArthur told President Quezon to evacuate to Corregidor. Quezon held a final cabinet meeting, confirming that several officials, including Justice Secretary Jose Abad Santos and Vice President Sergio Osmeña, would accompany him. Chief Justice Jose Laurel also wanted to join.
        <br><br>
        
        But Quezon insisted, <strong>“Not you, Laurel; someone must face the Japanese. The people need protection. Tough times are ahead.” </strong>
        </p><div class="toggle-container">
        <audio id="audio8" src="../HOME1/unit 4 voice/1Not you Laurel.mp3"></audio>
            <input type="checkbox" id="audio-toggle8" class="toggle-checkbox8">
            <label for="audio-toggle8" class="toggle-label8">
                <span class="toggle-text8">🔈</span>
                <span class="toggle-text8 toggle-text-muted8">🔇</span>
            </label>
        </div><p>
        
        <br><br>
        
        Laurel understood the challenges ahead and asked, <strong>“How can I negotiate with them?”</strong> MacArthur replied, <strong>“You can do anything, just don’t swear allegiance to the Japanese flag. If anyone does, I will shoot them myself upon my return.”</strong> Laurel then took his oath as the new Secretary of Justice.
        </p><div class="toggle-container">
        <audio id="audio9" src="../HOME1/unit 4 voice/2How can I.mp3"></audio>
            <input type="checkbox" id="audio-toggle9" class="toggle-checkbox9">
            <label for="audio-toggle9" class="toggle-label9">
                <span class="toggle-text9">🔈</span>
                <span class="toggle-text9 toggle-text-muted9">🔇</span>
            </label>
        </div><p>
        <br><br>
        
        Quezon's last instructions to the Commonwealth officials were clear:
        <br><br>
        
        <strong>“Do everything. Plead with them if you can. Do all you can to keep the Philippines united. Protect the Filipinos from Japanese brutality. You will face tough decisions, but do everything for the future of the Philippines.”</strong>
        </p><div class="toggle-container">
        <audio id="audio10" src="../HOME1/unit 4 voice/3Do everything.mp3"></audio>
            <input type="checkbox" id="audio-toggle10" class="toggle-checkbox10">
            <label for="audio-toggle10" class="toggle-label10">
                <span class="toggle-text10">🔈</span>
                <span class="toggle-text10 toggle-text-muted10">🔇</span>
            </label>
        </div><p>
        
        <br><br>
        
        On December 30, Quezon took his oath for a second term as President in Corregidor. His escape with American forces succeeded, and the Japanese struggled to capture the USAFFE due to Corregidor's defenses.
        <br><br>
        
        
        </p><br><br><h1 id="sbt2"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Bataan Death March</h1>
        <img src="../PICS/unit 4 pics/5.png" alt="Image Description">
        <p>
        As time passed, U.S. assistance arrived for the soldiers, impacted by the Europe First Policy. The weakening of USAFFE intensified with MacArthur’s departure to Australia on March 11, 1942 with his famous line
        <br><br><br><br><br>
        
    <strong>“I shall return”</strong></p>
        <div class="toggle-container">
        <audio id="audio11" src="../HOME1/unit 4 voice/4I shall.mp3"></audio>
            <input type="checkbox" id="audio-toggle11" class="toggle-checkbox11">
            <label for="audio-toggle11" class="toggle-label11">
                <span class="toggle-text11">🔈</span>
                <span class="toggle-text11 toggle-text-muted11">🔇</span>
            </label>
        </div><p>
        <br><br>
        
        He made this promise to the Filipino people, vowing to return and liberate the islands. 
        <br><br>
        
        Quezon left on February 18 aboard the submarine Swordfish. General Jonathan Wainwright took over from MacArthur, but on April 9, General Edward P. King decided to surrender his troops in Bataan.
        <br><br><img src="../PICS/unit 4 pics/6.png" alt="Image Description">
        <img src="../PICS/unit 4 pics/7.png" alt="Image Description">
        
        Most of the 80,000 prisoners of war taken by the Japanese at Bataan were compelled to participate in the "Bataan Death March" to Camp O'Donnell in Capas, Tarlac, located 105 kilometers north of Mariveles. Thousands of soldiers, already weakened by illness and malnutrition, suffered brutal treatment from their captors and died before reaching the camp. Upon reaching Capas, they were imprisoned like animals, starved, and fell ill. In fact, more men perished from Japanese mistreatment in the first four months in the camps than during the four months of combat prior.
        <br><br>
        
        
        </p><br><br><h1 id="sbt3"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Occupation</h1><p>
        Despite their promise of independence for the islands, the Japanese military authorities immediately began organizing a new government structure, with the Council of State in charge of civil affairs until October 1943, when they declared the Philippines an independent republic. However, the Japanese were not content with just political control. They also implemented a brutal system of sexual slavery, taking more than 1,000 Filipinos, including mothers, girls, and gay men, as comfort women for their military personnel.
        <br><br><img src="../PICS/unit 4 pics/8.png" alt="Image Description">
        <img src="../PICS/unit 4 pics/9.png" alt="Image Description">
        
        These victims, some as young as 10 years old, were imprisoned and subjected to unthinkable horrors. The Japanese military installations in the Philippines each had a comfort station, where women were held as sex slaves. Bahay Napula was just one of the many locations where women were forcibly taken and subjected to gang rape, torture, and humiliation.
        <br><br>
        
        Many suffered injuries, had their breasts cut off, or were killed if they resisted the soldier's sexual advances. The victims were treated like animals, with many being murdered and disposed of without dignity. In addition to the sexual enslavement of women and girls, Japanese doctors and surgeons conducted grotesque human experiments on their victims.
        <br><br>
        
        These experiments included amputations, dissections, and suturing blood vessels of live humans, with some victims being forced to dig their own graves before the procedure. Vivisections, the dissection of the stomach, were performed on live Filipinos, with some left with gaping stomachs and intestines spilled out before being dumped in their graves to die. The perpetrators of these heinous acts, many of whom remained at large in Japan until their comfortable retirement, attempted to cover up their crimes for decades.
        <br><br>
        
        Those who spoke out faced harassment from Japanese ultra-nationalists intent on protecting their country's image. Despite this, the Japanese occupation of the Philippines sparked fierce resistance from guerrilla fighters and underground groups. These brave individuals risked their lives to combat oppression, and by the end of the war, Japan controlled only 12 out of 48 provinces.
        <br><br>
        
             
        </p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> End of Occupation</h1>
        <img src="../PICS/unit 4 pics/10.png" alt="Image Description">
        <p>	 
        When General MacArthur returned to the Philippines in late 1944, he arrived well-informed, having gathered extensive intelligence, but faced a formidable Japanese defense determined to halt the American advance. The Japanese military poured every available resource into protecting the islands, including creating the kamikaze corps. The Battle of Leyte Gulf marked the largest naval clash of World War II and ended in disaster for Japan. 
        <br><br>
        
        MacArthur's Allied forces landed on Leyte on October 20, 1944, with Sergio Osmeña, who succeeded Quezon as president. Subsequent landings occurred at Mindoro and Lingayen Gulf as they pushed toward Manila. Fierce fighting erupted, especially in northern Luzon and Manila, where Japanese forces made their last stand. Filipino guerrillas played a critical role, supplementing American units and aiding in logistics and civil administration.
        <br><br>
        
        The guerrilla fighters were well-organized, communicating with each other and relaying information to the US Army. Recognizing their crucial role, General MacArthur initiated covert operations to support them, with Lieutenant Commander Charles Chick Parsons smuggling weapons and supplies. Guerrilla forces accumulated arms and planned sabotage against Japanese communications.
        <br><br><img src="../PICS/unit 4 pics/11.png" alt="Image Description">
        
        By war's end, 277 guerrilla units, comprising over 260,000 fighters, had bravely opposed Japanese forces. As Allied forces advanced, fighting intensified, especially in northern Luzon's mountains, culminating in Japan's surrender on September 2, 1945. The conflict resulted in an estimated 527,000 Filipino deaths, with 141,000 massacred, 22,500 dying from forced labor, and 336,500 succumbing to war-related famine.
        <br><br>
        
        Following the war, select resistance units were integrated into the Philippine Army, bringing valuable combat experience that would shape the military's future. The legacy of these resistance fighters serves as a testament to the resilience and strength of the Filipino people. The war left a devastating toll, with significant casualties for both U.S. and Japanese forces, but the suffering of the Filipino population was especially tragic, marked by famine and disease in the years that followed.
        <br><br></p>
        
    
    </section>
    <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">⬆️</button>
        </main>
        <button onclick="hideContent()">Back</button>
    </div>

    <div id="lesson5" class="content hidden">

        <!-- Back Button in Top Left Corner -->
<button class="back-btn" onclick="hideContent()"><i class="fas fa-arrow-left"></i></button>

        <main id="mainContent">
            <section class="content-section">
             
                 <h2 id="sbt5"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>Post Independence and Early Republic</h2>
               
                <video controls autoplay muted loop>
                <source src="../HOME1/LESSON VIDS/vid5.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video><br><br><br><br><br>
                 
                 <h1 id="sbt2"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>The Post-Colonial Struggle: A Nation in Chains of its Past</h1>
                 <img src="../PICS/unit 5 pics/1.png" alt="Image Description">
                 <p>
                 
                    On July 4, 1946, the Philippines officially gained independence from the United States, marking the end of almost five decades of American colonization. The Filipino people, weary from centuries of foreign domination, were optimistic about this newfound freedom. Yet, beneath the jubilant celebrations, a complex reality was unfolding. Independence, while symbolically achieved, had not freed the nation from the long-reaching shadows of its colonial past.
                    <br><br>
                    As historian Renato Constantino reflected, 
                    <br><br>
                    <strong>“The past cannot be changed, but it can be understood in ways that reveal the causes of present problems.”
                    </strong><br><br>
                     For Constantino, the post-colonial period was not a simple story of liberation and progress. Rather, it was a continuation of the old struggles, now cloaked in the trappings of sovereignty. The Philippines, though free in name, remained bound by economic dependence, political instability, and an entrenched elite class that had long benefited from colonial rule.
                    
        
        </p><br><br><h1 id="sbt2"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>Economic Dependence and Neocolonialism</h1>
        <img src="../PICS/unit 5 pics/2.png" alt="Image Description">
        <p>
        
            In the years following independence, the Philippines struggled to define its economic future. While the Americans had left, they had not fully relinquished control. Through the Bell Trade Act, signed in 1946, the U.S. ensured that American businesses retained access to the Philippine market, continuing the export of raw materials like sugar and copra while flooding the country with American products. The act tied the Filipino economy closely to that of the United States, limiting the country's ability to develop its own industries.
            <br><br>
            <strong>“Neocolonialism is the continuation of foreign domination without the need for physical control”</strong>,  Constantino wrote, emphasizing how economic policies kept the Philippines under the influence of its former colonizers. The elites, who had cooperated with the Americans during their rule, profited immensely from this arrangement. Large landowners and business magnates controlled vast amounts of wealth while the majority of Filipinos remained impoverished, struggling to make a living in a system that favored the few.
            <br><br>
            In "The History of the Filipino People," Teodoro A. Agoncillo adds, <strong>“The economic ties established by the Americans created a dependency that left the Philippines vulnerable to external pressures.”</strong> He elaborates on how this dependency prevented genuine economic progress, forcing the country into a cycle of underdevelopment. The dream of a self-sufficient nation seemed distant. Constantino was critical of this post-colonial reality, noting how <strong>“The Filipino people were not truly independent; they were still held captive by foreign interests and the old colonial economy.”</strong> The economic inequality that began during Spanish rule and worsened under American tutelage continued to define the lives of ordinary Filipinos.
        
        </p><br><br><h1 id="sbt2"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Political Power and the Entrenched Elite</h1>
        <img src="../PICS/unit 5 pics/3.png" alt="Image Description">
        <p>
        
            Politically, the Philippines in the post-colonial period was ruled by a narrow elite class, composed of families that had long dominated the country's landscape. These were the same elites who had benefited from land reforms under the Americans and maintained their power after independence. In many ways, independence had merely transferred control from foreign rulers to a small Filipino oligarchy.
            <br><br>
            Presidents like Manuel Roxas and Elpidio Quirino, while celebrated as national leaders, were heavily influenced by American interests. This political class had little incentive to enact reforms that would uplift the poor or address the growing gap between rich and poor. Constantino criticized these leaders, stating, <strong>“The Filipino people have always been the main agents of their own history, but their leaders often failed to act in their best interests.”</strong>
            <br><br>
            Even in the early years of independence, dissent began to grow. The Hukbalahap Rebellion, which had its roots in the Japanese occupation, continued into the post-war period. The Huk rebels, composed largely of peasants, sought land reform and an end to the concentration of wealth in the hands of a few. The government’s response was brutal, with military campaigns designed to crush the movement. This period of unrest showed how disconnected the government was from the struggles of the rural poor, many of whom still labored under oppressive tenancy systems.
            <br><br>
            In "An Anarchy of Families: State and Family in the Philippines," Alfred W. McCoy highlights how familial ties often influenced political power, stating, <strong>“Political authority was historically embedded in the family structure, allowing elite families to maintain their influence across generations.”</strong> This deep-rooted patronage system stifled democratic processes and perpetuated inequality.
            
        </p><br><br><h1 id="sbt2"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>The Struggle for True Democracy</h1>
        <img src="../PICS/unit 5 pics/4.png" alt="Image Description">
        <p>
        
            The 1950s and 60s saw the Philippines grappling with the balance between its democratic ideals and the realities of governance. While elections were held regularly, they were often marred by corruption, violence, and vote-buying. Constantino observed how the “illusion of democracy” kept the masses hopeful, even as their choices were limited to members of the elite. Political power remained concentrated in Manila, far removed from the rural provinces where most Filipinos lived.
            <br><br>
            Education, once heralded as the key to progress, also became a tool of control. The American-designed educational system promoted Western values, shaping Filipino minds to view their history through a colonial lens. As Constantino famously noted, “A people without a sense of history is a people condemned to remain underdeveloped.” The lack of a true national consciousness, fostered by years of colonial education, made it difficult for Filipinos to challenge the status quo.
            <br><br>
            Benedict Anderson, in his seminal work "Imagined Communities," examines the role of education in forming national identities. He argues, <strong>“The imagination of a community is often rooted in the shared histories and narratives taught in schools.”</strong> Yet, the narratives presented in Philippine schools often minimized local histories, focusing instead on colonial achievements, thus distorting the collective memory of the people.
            <br><br>
            Despite these challenges, the seeds of resistance continued to grow. By the late 1960s, a new generation of activists, students, and intellectuals began to question the country’s direction. Inspired by global movements for civil rights and independence, they sought to reclaim their history and their future.

        </p><br><br><h1 id="sbt2"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>Martial Law: The Death and Rebirth of Democracy</h1>
        <img src="../PICS/unit 5 pics/8.png" alt="Image Description">
        <p>
        
            In 1972, President Ferdinand Marcos Sr. declared Martial Law, plunging the country into one of its darkest periods. Under the guise of restoring order and fighting communist insurgencies, Marcos dismantled democratic institutions and silenced opposition. The elites who had long ruled the country now shared power with a dictatorial regime. Civil liberties were suspended, the media was censored, and the military was used to suppress dissent.
            <br><br>
            Constantino viewed Martial Law as a continuation of the colonial mindset, where power was concentrated in the hands of a few and used to control the many. He described the Marcos regime as <strong>“a reflection of the failure of post-colonial leadership to address the fundamental problems of the Filipino people.”</strong> The dictatorship intensified the struggles of the poor, deepened economic inequality, and made it clear that independence had not yet brought true freedom.
            <br><br>
            In "The Philippine Revolution: A Historical Perspective,"  E. San Juan Jr. argues that <strong>“Martial Law represented a betrayal of the ideals of the revolution, turning the state into a tool for oppression rather than liberation.”</strong> The regime's use of violence and coercion against its own citizens starkly contrasted with the promises of democracy and social justice that had been made during the struggle for independence.
            <br><br>
            But as history often shows, the Filipino spirit of resistance could not be crushed. The years of Martial Law saw the rise of a broad opposition movement, culminating in the <strong>Power Revolution of 1986</strong>. Millions of Filipinos took to the streets, peacefully demanding the end of Marcos’ regime. This moment, a triumph of popular will, marked the fall of a dictator and the restoration of democracy.
            <br><br>
            Yet, even as the Marcos family fled into exile, the challenges of the post-colonial period remained. “The fight for democracy does not end with one revolution,” Constantino might have written.  “It is a continuing struggle, one that requires constant vigilance, participation, and an understanding of the forces that shape our society.”
            
        </p><br><br><h1 id="sbt2"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>Continuing the Struggle for National Identity</h1>
        <img src="../PICS/unit 5 pics/6.png" alt="Image Description">
        <p>
        
            As the Philippines transitioned into the post-Marcos era, Constantino’s reflections on the post-colonial period remained relevant. The economic and political structures built during colonial times, reinforced by decades of elite rule and foreign influence, were still intact. The true challenge for the Filipino people was not just removing a dictator but dismantling the systems of exploitation that had persisted for centuries.
            <br><br>
            <strong>“The past is not something to be forgotten, but something to be learned from,”</strong> Constantino believed. The post-colonial period, for him, was not just a chapter in the nation’s history but a reminder that the fight for true independence—economic, political, and cultural—was ongoing. <strong>Our history</strong>, he wrote, <strong>a continuing past</strong>.
            
        </p><br><br><h1 id="sbt2"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span>The Continuing Quest for Sovereignty and Identity</h1>
        <img src="../PICS/unit 5 pics/7.png" alt="Image Description">
        <p>
        
            The post-colonial narrative of the Philippines is one of resilience and struggle. It reflects the challenges faced by a nation striving to define its identity in the shadow of its colonial past. The interplay of foreign influence, elite control, and popular movements has shaped the country's history since independence.
            <br><br>
            Renato Constantino’s insights remind us that the journey towards true independence is ongoing. As he wrote, <strong>“The struggle for a just and equitable society continues; it is a task that demands the active participation of every Filipino.”</strong> The story of the Philippines is not just about its leaders or political events; it is a testament to the enduring spirit of its people who continue to seek justice, equality, and genuine sovereignty.
            <br><br>
            In this ongoing quest, the lessons of the past remain crucial, as Filipinos navigate the complexities of their national identity, striving to build a better future for generations to come. The voices of the people, echoed through protests, movements, and grassroots efforts, serve as a reminder that the fight for genuine freedom and justice is a shared responsibility, a collective journey towards a brighter tomorrow.
            </p>

             </section>
             <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">⬆️</button>
        </main>
        <button onclick="hideContent()">Back</button>
    </div>

    <div id="lesson6" class="content hidden">

<!-- Back Button in Top Left Corner -->
<button class="back-btn" onclick="hideContent()"><i class="fas fa-arrow-left"></i></button>
        
        <main id="mainContent">
    <section class="content-section">
	 
		 <h2 id="sbt6"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Period of Philippine Republic<br>&nbsp;&nbsp;&nbsp;1946 - Present</h2>
         <p>
		
<h1 id="sb1"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Independence (1946)</h1>
<img src="../PICS/unit 6 pics/6pic0.avif" alt="Image Description">
<p>		
The Philippines joined the United Nations as a founding member on October 11, 1945. Consequently, the Treaty of Manila, which was signed on July 4, 1946, during Manuel Roxas's administration, allowed the United States to formally recognize the Philippines as an independent country. With this pact, American rule over the islands was terminated and the independence of the Republic of the Philippines was recognized. Independence Day was observed on July 4 from 1946 until 1961. On the other hand, June 12, 1962 was designated as a special public holiday by President Macapagal on May 12, 1962. Independence Day was formally rescheduled to June 12 by Republic Act No. 4166 in 1964, which also declared July 4 to be Philippine Republic Day.
<br><br>

The post-war history of the Philippines reflects a delicate balance between the successful attainment of independence and ongoing internal struggles. Following liberation from Japanese occupation by the United States in the summer of 1945, the Republic of the Philippines was established on July 4, 1946. The early decades of this new nation were characterized by a blend of economic and social reforms, as well as an effort to place the Philippines on the global stage.
<br><br>

The challenges faced by the nascent republic began even before independence. President Manuel Quezon passed away in 1944 while leading his government in exile in the United States, and his Vice President, Sergio Azmeña, succeeded him. Azmeña was relatively unknown to the public, and his political party had lost popularity during the Japanese occupation. The first presidential elections for the new republic took place in April 1946, prior to formal independence, to avoid a lame duck period in case of a change in leadership. Azmeña's rival was Manuel Roxas, a populist candidate backed by General Douglas MacArthur. 
<br><br>


</p><br><br><h1 id="sbt2"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Roxas Administration (1946–1948)</h1>
<img src="../PICS/unit 6 pics/6pic1.jfif" alt="Image Description">
<p>
When the Congress of the Philippines was convened in 1945, the legislators elected in 1941 chose Manuel Roxas as Senate President. In the national elections of 1946, Roxas ran for president as the nominee of the liberal wing of the Nacionalista Party, bolstered by the strong support of General MacArthur. His opponent, Sergio Osmeña, chose not to campaign, believing that his reputation was well-known among the Filipino people. On April 23, 1946, Roxas won 54 percent of the vote, leading the Liberal Party to a majority in the legislature. When the Philippines gained independence from the United States on July 4, 1946, Roxas became the first president of the new republic.
<br><br>

Roxas aimed to rebuild the nation not only after the difficult years of Japanese occupation but also to address nearly four centuries of foreign domination endured by the Filipino people. He sought to bring the Philippines into the United Nations and open the archipelago to the world. However, the rebuilding of his country depended heavily on substantial loans from the United States. To secure these funds, his administration signed 99-year lease agreements with the U.S. for major military bases, tying the Philippine and American economies closely together.
<br><br>

While Roxas successfully obtained rehabilitation funds, he was forced to concede military bases, impose trade restrictions on Filipino citizens, and grant special privileges to U.S. property owners and investors. His presidency was marred by allegations of graft and corruption, and the abuses of provincial military police contributed to the rise of the left-wing Hukbalahap (Huk) movement in the countryside. His heavy-handed attempts to suppress the Huks led to widespread discontent among peasants.
<br><br>

During his term, the administration of the Turtle Islands and Mangsee Islands was transferred from the United Kingdom to the Philippines, in accordance with treaties established between the U.S. and the U.K. in 1930. Although these islands were recognized as part of the Philippine archipelago, they were initially administered by the British North Borneo Company until a formal transfer occurred on October 16, 1947.
<br><br>

Tragically, Roxas's presidency was cut short when he suffered a fatal heart attack while speaking at Clark Air Base on April 15, 1948. He was succeeded by his vice president, Elpidio Quirino.
<br><br>


</p><br><br><h1 id="sbt3"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Quirino Administration (1948–1953)</h1>
<img src="../PICS/unit 6 pics/6pic2.jpg" alt="Image Description">
<p>
Quirino assumed the presidency on April 17, 1948, just two days after Manuel Roxas's death. His administration began amidst accusations of corruption, particularly during the 1949 election against former wartime president Jose P. Laurel, who was widely believed to have won but did not contest Quirino's declared victory.
<br><br>

As a widower, Quirino's daughter, Vicky, took on the role of official hostess. During his presidency, Quirino implemented various social reforms, including health insurance, old-age pensions, and unemployment insurance. He also established agencies to provide economic aid and loans to marginalized Filipinos.
<br><br>

However, his term was marked by significant challenges, including the rise of the communist Hukbalahap movement, which posed a direct threat to his government. Following failed negotiations with Huk commander Luis Taruc, who openly declared his communist allegiance, the movement gained traction.
<br><br>

While Quirino's presidency saw some economic improvements and increased U.S. aid, pervasive graft and unresolved rural issues marred his administration. In 1953, during his second term, the Korean War led to the deployment of over 7,450 Filipino soldiers as part of the Philippine Expeditionary Forces to Korea (PEFTOK). Despite his efforts, Quirino was overwhelmingly defeated by Ramon Magsaysay in the 1953 election.
<br><br>

	 
</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Magsaysay Administration (1953–1957)</h1>
<img src="../PICS/unit 6 pics/6pic3.jpg" alt="Image Description">
<p>	 
In the 1953 election, Ramon Magsaysay emerged victorious over incumbent Elpidio Quirino, aided by American officials and funds. Sworn in wearing the barong tagalog, Magsaysay became known for his close ties to the United States and his strong anti-communist stance during the Cold War. He played a pivotal role in founding the Southeast Asia Treaty Organization (Manila Pact) in 1954, aimed at countering Marxist-Leninist movements across Southeast Asia, South Asia, and Oceania.

Magsaysay opened Malacañang Palace to the public, embodying his vision of a "house of the people." His integrity was exemplified when he personally covered the operating costs for a flight aboard a new Philippine Air Force plane.
<br><br>

Tragically, on March 16, 1957, Magsaysay's plane, the "Mt. Pinatubo," went missing after a trip to Cebu City. The following day, it was reported that the aircraft had crashed on Mount Manunggal, resulting in the deaths of 25 out of 26 passengers and crew. Only newspaperman Nestor Mata survived. Vice President Carlos P. Garcia, who was abroad at the time, succeeded Magsaysay and completed the remaining months of his term.
<br><br>

Magsaysay's presidency is often celebrated as a period of honest governance, dubbed the "Golden Years," and he left a lasting legacy in promoting the Philippines as a bulwark against communism. An estimated 2 million people attended his burial on March 22, 1957.
<br><br>


</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Garcia Administration (1957–1961)</h1>
<img src="../PICS/unit 6 pics/6pic4.jpg" alt="Image Description">
<p>	 
Garcia took office after Ramón Magsaysay's tragic death in a plane crash on March 17, 1957, and he was elected to a full term later that same year during the 1957 elections.
<br><br>

During his presidency, he implemented the Bohlen–Serrano Agreement, which reduced the lease on U.S. military bases from 99 years to 25 years, with the option to renew every five years.
<br><br>

He became well-known for his Filipino First policy, which prioritized Filipino businesses over foreign investors. This policy also brought significant changes to retail trade, impacting Chinese businessmen in the country, and he initiated programs aimed at promoting thriftiness.
<br><br>

At the end of his second term, he sought re-election in the November 1961 elections but was defeated by Diosdado Macapagal, who had served as his vice president but was affiliated with the opposing Liberal Party—highlighting that in the Philippines, the president and vice president are elected separately.
<br><br>


</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Macapagal Administration (1961–1965)</h1>
<img src="../PICS/unit 6 pics/6pic5.jpg" alt="Image Description">
<p>	 
In the 1961 presidential election, Diosdado Macapagal defeated incumbent president Carlos Garcia with a 55% to 45% margin. His administration aimed to stimulate economic development, allowing the Philippine peso to float on the free market, though his reform efforts faced opposition from the Nacionalista-dominated legislature. Notable achievements included the abolition of tenancy through the Agricultural Land Reform Code of 1963 and changing the celebration of Philippine independence from July 4 to June 12, marking Emilio Aguinaldo's declaration in 1898.
<br><br>

Macapagal's tenure was marked by significant reforms, but he lost the 1965 election to Ferdinand Marcos, a former ally who had switched to the Nacionalista Party.
<br><br>


</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Marcos Administration (1965–1972)</h1>
<img src="../PICS/unit 6 pics/6pic6.webp" alt="Image Description">
<p>	 
In 1965, Ferdinand Marcos Sr. was elected as the 10th president of the Philippines, prioritizing industrial growth and infrastructure projects, such as the North Luzon Expressway. However, Senator Benigno Aquino Jr. raised concerns in 1968, warning that Marcos was steering the country towards a "garrison state," citing increases in the military budget and the militarization of civilian life. During the Vietnam War, Marcos chose not to send combat troops, instead deploying the Philippine Civic Action Group (PHILCAG) in 1966, which he withdrew in November 1969 due to rising unpopularity.
<br><br>

In 1969, Marcos sought re-election and won decisively, bolstered by significant campaign spending. This led to public unrest and a balance of payments crisis, prompting his administration to seek assistance from the International Monetary Fund (IMF). The resulting policies contributed to inflation and social upheaval.
<br><br>

By February 1971, student activists had taken over the University of the Philippines, declaring it a free commune. Protests escalated during the First Quarter Storm in 1970, blurring distinctions between leftist groups and the Communist Party. Large demonstrations against Marcos turned violent, resulting in injuries and fatalities, and further igniting weekly protests led by students.
<br><br>

Rumors of a coup d'état surfaced after the 1969 election, with a U.S. Senate Foreign Relations Committee report revealing a plot by retired military officials to undermine and possibly assassinate Marcos. This included notable figures like Vice President Fernando Lopez and Sergio Osmeña Jr. To counter claims of U.S. support for the coup, Marcos visited the U.S. embassy, while a U.S. ambassador noted that much of the revolutionary sentiment stemmed from opposition groups.
<br><br>

In January 1970, Marcos documented his thoughts on the crisis in his diary, contemplating the arrest of the alleged coup plotters but fearing unpopularity. He ultimately leaned toward allowing the situation to escalate into violence, which could justify a declaration of martial law to suppress dissent.
<br><br>

The political climate took a turn on August 21, 1971, when a bombing at a Liberal Party rally in Plaza Miranda injured numerous attendees. In response, Marcos suspended the writ of habeas corpus, targeting suspects to eliminate political rivals and blaming the communists for the attack. Declassified CIA documents hinted at possible Marcos involvement in the bombings that year, while historian Joseph Scalice noted that, despite the Communist Party's alliance with the Liberal Party, they might have viewed the bombing as a means to provoke repression.
<br><br>

On September 22, 1972, Defense Minister Juan Ponce Enrile reported being ambushed, an event many suspected was staged. Although he initially acknowledged this, he later recanted.
<br><br>

The incidents at Plaza Miranda, along with the alleged ambush of Enrile and the MV Karagatan landing, were used as justifications for declaring martial law. On September 21, 1972, Marcos issued Presidential Proclamation No. 1081, claiming support from prominent figures, which was later refuted.
<br><br>

Once in power, Marcos curtailed press freedoms, dissolved Congress, and arrested opposition leaders, effectively establishing a totalitarian regime. While initial reactions to martial law were mixed, given the decline in crime rates, the military's abuses led to widespread human rights violations, with over 3,200 extrajudicial killings and tens of thousands of arrests and instances of torture.
<br><br>

As discontent grew, Marcos sought to legitimize his actions through the 1973 Constitution, which allowed for emergency powers. He promised to lift martial law by January 1981, but even after its official end, he maintained significant control and the ability to suppress dissent.
<br><br>

The martial law era was marked by severe human rights violations, with estimates of 3,257 murders, 35,000 instances of torture, and 70,000 illegal detentions. One journalist described the regime as a "grisly one-stop shop for human rights abuses," where constitutional protections were ignored, and citizens became victims of state violence.
<br><br>

From 1972 to 1980, the Philippines' GDP quadrupled from $8 billion to $32.45 billion, reflecting an average growth rate of 6% per year despite global oil crises. However, this economic growth concealed a deepening debt crisis, as external debt soared from $2.3 billion in 1970 to $26.2 billion by 1985, driven by corruption and mismanagement. By the end of Marcos’ rule, poverty incidence had increased from 41% in the 1960s to 59%, underscoring the disparity between economic indicators and the realities faced by many Filipinos.
<br><br>

During this turbulent period, around 300,000 Filipinos emigrated to the United States from 1965 to 1986, seeking better opportunities and stability away from the oppressive regime.
<br><br>

The Marcos administration was notorious for widespread corruption, with estimates of the family's stolen wealth reaching $10 billion. This plunder was facilitated through the creation of monopolies, awarding loans to political allies, and diverting public funds via various means, including the use of dummy corporations and skimming from international aid. Such practices entrenched a system of crony capitalism that benefited a select few while undermining the national economy.
<br><br>

On April 7, 1978, the first formal elections for the interim Batasang Pambansa were held. Despite significant public support, Senator Benigno Aquino Jr., who was imprisoned at the time, and his Lakas ng Bayan party failed to secure any seats. Their supporters demonstrated through a "noise barrage" in Manila the night before the elections, yet the results reflected ongoing electoral manipulation and repression of dissenting voices.
<br><br>

The presidential election on June 16, 1981, was boycotted by the opposition. Marcos faced retired General Alejo Santos of the Nacionalista Party and won decisively, securing another six-year term, while Finance Minister Cesar Virata was elected as prime minister by the Batasang Pambansa.
<br><br>

The political landscape shifted dramatically in 1983 when opposition leader Benigno "Ninoy" Aquino Jr. was assassinated at Manila International Airport upon his return from exile in the United States. This event ignited widespread dissatisfaction with Marcos and set in motion events leading to a snap presidential election on February 7, 1986. The opposition united behind Aquino’s widow, Corazon Aquino, and Salvador Laurel, head of the United Nationalists Democratic Organizations (UNIDO). However, the election was marred by reports of violence and result tampering from both sides.
<br><br>

Despite the turmoil, the Commission on Elections (COMELEC) declared Marcos the winner, with a final tally of 10,807,197 votes for Marcos and 9,291,761 for Aquino. In contrast, the National Citizens' Movement for Free Elections reported that Aquino had actually won, highlighting widespread beliefs of electoral fraud.
<br><br>

International observers, including a U.S. delegation led by Senator Richard Lugar, condemned the election results. Corazon Aquino rejected the outcome and organized the "Tagumpay ng Bayan" (People's Victory) rally at Luneta Park on February 16, 1986, where she announced a civil disobedience campaign against Marcos. This rally drew around two million attendees, galvanizing her supporters.
<br><br>

In the aftermath, Defense Minister Juan Ponce Enrile and the Reform the Armed Forces Movement (RAM) initiated a coup attempt against Marcos. When their plan was discovered, Enrile sought help from then-AFP Vice Chief of Staff Lt. Gen. Fidel Ramos, who withdrew his support for the government. The two forces barricaded themselves in Camp Crame and Camp Aguinaldo, but soon found themselves trapped by Marcos’ loyalist forces.
<br><br>

A small group of Aquino supporters, led by her brother-in-law Butz Aquino, went to EDSA to show solidarity with Enrile and Ramos. They contacted Cardinal Jaime Sin, who urged the public to rally in support of the coup plotters. This call to action drew massive crowds to EDSA, leading to the largely peaceful 1986 EDSA Revolution. The movement culminated in Marcos fleeing to Hawaii, while Corazon Aquino became the 11th president of the Philippines on February 25, 1986. Under her leadership, the Philippines adopted a new constitution, marking the end of the Fourth Republic and the beginning of the Fifth Republic.
<br><br>


</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Corazon Aquino Administration (1986–1992)</h1>
<img src="../PICS/unit 6 pics/6pic7.jpg" alt="Image Description">
<p>	 
Corazon Aquino's rise to power following the People Power Revolution marked a significant restoration of democracy in the Philippines. Upon assuming the presidency in 1986, she swiftly established a revolutionary government aimed at stabilizing the nation after Ferdinand Marcos's regime. Aquino introduced a transitional "Freedom Constitution," which restored civil liberties, dismantled the entrenched Marcos bureaucracy, and abolished the Batasang Pambansa, relieving all public officials of their duties.
<br><br>

Her administration also appointed a constitutional commission that drafted a new permanent constitution, ratified in February 1987. This constitution significantly limited presidential powers, particularly regarding the declaration of martial law, proposed the creation of autonomous regions in the Cordilleras and Muslim Mindanao, and reinstated a presidential system alongside a bicameral Congress.
<br><br>

Despite these advancements, Aquino's presidency (1986-1992) was characterized by instability and several coup attempts from disaffected military factions. Economic recovery was further challenged by natural disasters, most notably the eruption of Mount Pinatubo in June 1991, which was one of the largest volcanic eruptions of the 20th century. This disaster caused significant destruction, including damage to Clark Air Base, resulting in around 700 deaths and displacing over 200,000 people.
<br><br>

In September 1991, despite Aquino's efforts, the Philippine Senate rejected a treaty that would have extended the presence of U.S. military bases, leading to the turnover of Clark Air Base in November and Subic Bay Naval Base in December 1992, effectively ending nearly a century of U.S. military presence in the Philippines.
<br><br>

Aquino’s administration faced significant challenges, including internal conflicts and natural disasters, which hindered economic and social reforms. Nonetheless, her leadership laid the groundwork for a renewed democratic framework in the Philippines.
<br><br>


</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Fidel Ramos Administration (1992–1998)</h1>
<img src="../PICS/unit 6 pics/6pic8.jpg" alt="Image Description">
<p>	 
In the 1992 elections, Defense Secretary Fidel V. Ramos, with the endorsement of Corazon Aquino, secured the presidency with 23.6% of the vote, beating competitors such as Miriam Defensor Santiago and Imelda Marcos. Early in his term, Ramos focused on "national reconciliation," legalizing the Communist Party and forming the National Unification Commission to foster peace talks with various insurgent groups. In June 1994, he enacted a general conditional amnesty for rebels and military personnel involved in conflicts, leading to a peace agreement with the military insurgency by October 1995.
<br><br>

Ramos also confronted challenges, including a standoff with China in 1995 over Mischief Reef in the Spratly Islands. His liberal economic policies, particularly the oil-deregulation law, faced criticism for raising fuel prices, along with allegations of corruption tied to the Philippine Centennial Exposition and the PEA-AMARI land deal.
<br><br>

In 1996, he signed a peace agreement with the Moro National Liberation Front (MNLF), effectively ending a 24-year conflict. However, a splinter group, the Moro Islamic Liberation Front (MILF), continued to fight for an independent Islamic state.
<br><br>

The 1998 elections resulted in a victory for former movie actor Joseph Estrada, who garnered nearly 11 million votes, defeating House Speaker Jose De Venecia, who received 4.4 million votes, among other candidates.
<br><br>


</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Joseph Estrada Administration (1998–2001)</h1>
<img src="../PICS/unit 6 pics/6pic9.jpg" alt="Image Description">
<p>	 
Joseph Estrada took office during the Asian Financial Crisis but managed to steer the economy toward recovery, achieving a growth rate of 3.4% by 1999 after a low of −0.6% in 1998. He attempted to amend the 1987 Constitution through the CONCORD initiative, aimed at liberalizing economic provisions to attract foreign investments, but was unsuccessful.
<br><br>

On March 21, 2000, Estrada declared an "all-out-war" against the Moro Islamic Liberation Front (MILF) amid escalating secessionist tensions in Mindanao, leading to the capture of 46 MILF camps, including their headquarters.
<br><br>

In October 2000, Estrada was implicated in a corruption scandal involving illegal gambling, which prompted the House of Representatives to impeach him on November 13 for bribery, graft, and constitutional violations. His impeachment trial began on December 7 but stalled on January 17, 2001, when senators allied with him blocked the opening of crucial evidence.
<br><br>

This led to widespread protests, known as "EDSA II," demanding his resignation. With the support of the military and police withdrawn, Estrada's cabinet resigned en masse. On January 20, the Supreme Court declared the presidency vacant, swearing in Vice President Gloria Macapagal Arroyo as the 14th President. Estrada claimed he did not resign but took a leave of absence, though the Supreme Court upheld Arroyo's legitimacy on March 2, 2001.
<br><br>

</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Gloria Macapagal Arroyo Administration &nbsp;&nbsp;&nbsp;(2001–2010)</h1>
<img src="../PICS/unit 6 pics/6pic10.avif" alt="Image Description">
<p>	 
Vice President Gloria Macapagal Arroyo was sworn in as president following Estrada's departure, despite his allies challenging the legitimacy of her government. The Supreme Court upheld her presidency twice. After Estrada's arrest on plunder charges in April 2001, thousands rallied in "EDSA III" to demand his reinstatement, attempting to storm Malacañang Palace on May 1, but were stopped by authorities. Arroyo's position was further solidified by her coalition's overwhelming victory in the May 2001 elections.
<br><br>

Her early presidency faced challenges, including coalition conflicts and a military mutiny in July 2003, leading to a month-long nationwide state of rebellion. Initially announcing she wouldn’t run in the May 2004 elections, Arroyo reversed her decision and was re-elected for a six-year term starting June 30, 2004.
<br><br>

In 2005, a wiretapped conversation emerged, seemingly revealing Arroyo discussing election results with an official, sparking protests demanding her resignation. While she admitted to the conversation, she denied any electoral fraud. Efforts to impeach her failed that year. Towards the end of her term, Arroyo proposed a controversial constitutional overhaul to shift from a unitary presidential republic to a federal parliamentary government.
<br><br>

</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Benigno Aquino III Administration (2010–&nbsp;&nbsp;&nbsp;2016)</h1>
<img src="../PICS/unit 6 pics/6pic11.jpg" alt="Image Description">
<p>	 
On June 9, 2010, the Congress of the Philippines proclaimed Benigno Aquino III as President-elect, having secured 15,208,678 votes. Jejomar Binay was declared Vice President-elect with 14,645,574 votes, defeating Mar Roxas.
<br><br>

Following his victory, Aquino initiated the presidential transition process, which involved organizing his cabinet and coordinating with the outgoing administration. Outgoing President Gloria Macapagal Arroyo established a Presidential Transition Cooperation Team to ensure an orderly transition.
<br><br>

Aquino appointed key members to his transition team, including Mar Roxas and Paquito Ochoa, Jr. He chose Bahay Pangarap in Malacañang Park as his official residence, opting not to live in the traditional Malacañang Palace due to its size.
<br><br>

Aquino named Paquito Ochoa, Jr. as Executive Secretary and Corazon Soliman as Secretary of Social Welfare and Development. He also appointed Leila de Lima as Secretary of Justice and established a truth commission to investigate corruption under Arroyo, headed by former Chief Justice Hilario Davide, Jr.
<br><br>

Aquino and Binay were inaugurated on June 30, 2010, at Quirino Grandstand in Luneta Park. Associate Justice Conchita Carpio-Morales administered the oath, as Aquino declined to have Chief Justice Renato Corona, appointed by Arroyo, officiate.
<br><br>

In 2013, the Aquino administration began formulating a new framework for peace talks with the New People's Army. However, a deadly clash in Mamasapano, Maguindanao, in 2015, which resulted in the deaths of 44 police commandos, stalled progress on the Bangsamoro Basic Law.
<br><br>

</p><br><br><h1 id="sbt4"><span class="bookmark-icon" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Rodrigo Duterte Administration (2016–2022)</h1>
<img src="../PICS/unit 6 pics/6pic12.jpg" alt="Image Description">
<p>	 
Rodrigo Duterte won the 2016 presidential election with 39.01% of the votes, becoming the first president from Mindanao. Leni Robredo was elected vice president. Duterte's presidency began on June 30, 2016, with his inauguration at Malacañang Palace.
<br><br>

A major aspect of his administration was the controversial drug war, which resulted in a death toll exceeding 5,000 by early 2019. The campaign faced significant criticism for alleged human rights violations, leading to international scrutiny and protests.
<br><br>

Duterte also shifted foreign relations toward China and Russia while criticizing the United States. In November 2016, the Supreme Court approved the burial of Ferdinand Marcos Sr. at the Libingan ng mga Bayani, which sparked protests.
<br><br>

In 2017, Duterte launched the "Build, Build, Build" program to enhance infrastructure with a budget of $160 to $180 billion through 2022. He enacted the Universal Access to Quality Tertiary Education Act, providing free tuition in public universities, and signed laws for health care, urban development, and economic reforms to attract foreign investment.
<br><br>

Duterte initiated measures to combat corruption, improve agricultural policies, and implement various health and safety laws. His administration faced challenges during the COVID-19 pandemic, resulting in a GDP contraction of 9.5% in 2020, followed by a recovery to 5.6% in 2021. Throughout his presidency, Duterte maintained a relatively high domestic approval rating.
<br><br>

</p>

	</section>
    <button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">⬆️</button>
</main>

<button onclick="hideContent()">Back</button>


    </div>
</div>


 <!-- Add Note Button as an Icon -->
 <button class="note-btn" onclick="openForm()">
    <i class="fas fa-plus"></i>
</button>

<!-- Note Form -->
<div id="noteForm" class="note-form">
    <form action="" method="post">


        <div class="form-header">
            <h3>Add a Note</h3>
            <span class="close-btn" onclick="closeForm()">X</span>
        </div>
        <textarea placeholder="Write your note here..." class="note-text" name="note"></textarea>
        <button class="add-btn" type="submit" name='save_note'>Add</button>
    </form>
</div>


EOD;
?>
    <!-- JavaScript -->
    <script src="../HOME1/home-js.js"></script>
    <script src="./gome.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

function updateUserCount() {
    fetch('../updateActiveUser.php')
        .then(response => response.json())
        .then(data => {
            document.getElementById('userCount').innerText = "Current Users Online: " + data.count;
        })
        .catch(error => console.error('Error:', error));
}

// Update every 5 seconds
setInterval(updateUserCount, 5000);

searchBar.style.display = 'block';
 
let bookmarksArray = [];

let mainBookmarks = document.querySelectorAll('.content-section h2 span'); // Adjust the selector if needed

mainBookmarks.forEach(bookmark => {
    let title = bookmark.parentNode.textContent.trim();
    
    bookmarksArray.push({
        type: 'main',
        title: title
    });
});

let subBookmarks = document.querySelectorAll('.content-section h1 span, .content-section h3 span');

subBookmarks.forEach(subBookmark => {
    let title = subBookmark.parentNode.textContent.trim();
    
    bookmarksArray.push({
        type: 'sub',
        title: title
    });
});

localStorage.setItem('bookmarks', JSON.stringify(bookmarksArray));
console.log(localStorage.getItem('bookmarks'))
// alert(bookmarksArray.length);
  
    // alert('this')
    function saveBookmark(element) {
    if (checkSession()) {
        var title = $(element).closest('span').parent().text().trim();

        if (title === "") {
            console.error("Title not found.");
            return;
        }
        
        $.ajax({
            url: '../HOME1/save_bookmark.php',  // PHP script to handle the database insertion
            type: 'POST',
            data: { title: title },  // Send the title dynamically
            success: function(response) {
                alert('Bookmark saved successfully!');
                console.log(response);
            },
            error: function(error) {
                console.error('Error saving bookmark:', error);
            }
        });
    }
    console.log('title:', title);
};

function saveMiniBookmark(element) {
    var title = $(element).closest('h2, h1').text().trim();

    if (title === "") {
        console.error("Title not found.");
        return;
    }

    $.ajax({
        url: '../HOME1/save_bookmark.php',
        type: 'POST',
        data: { title: title },
        success: function(response) {
            alert('Bookmark saved successfully');
            console.log(response);
        },
        error: function(error) {
            console.error('Error saving bookmark:', error);
        }
    });

}

function saveH1Bookmark(element) {
    if (checkSession()) {
        // Traverse up to the nearest h1 and get its text
        var title = $(element).closest('h1').clone() 
                     .children()                 
                     .remove()                 
                     .end()                       
                     .text().trim();                

        if (title === "") {
            console.error("Title not found for h1.");
            return;
        }

        // Send the title to the PHP script for saving in the database
        $.ajax({
            url: '../HOME1/save_bookmark.php',  // PHP script to handle the database insertion
            type: 'POST',
            data: { title: title },  // Send the title dynamically
            success: function(response) {
                alert('Bookmark saved successfully!');
                console.log(response);
            },
            error: function(error) {
                console.error('Error saving bookmark:', error);
            }
        });
    }
    console.log('h1 title:', title);
}


// Attach event listeners to the <h1> bookmark icons
const bookmarkH1 = document.querySelectorAll('#bookmarkIcon i');
bookmarkH1.forEach(bm => {
    bm.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default action for the icon click
        saveH1Bookmark(bm);
    });
});

// Attach event listeners to bookmark elements
const bookmark = document.querySelectorAll('#sbt1');
bookmark.forEach(bm => {
    bm.addEventListener('click', (event) => {
        event.preventDefault();
        saveBookmark(bm)
    });
});

// const bookmarkKKK = document.querySelectorAll('#sb1');
// bookmarkKKK.forEach(bm => {
//     bm.addEventListener('click', (event) => saveBookmark(bm));
// });

// const bookmarksMini = document.querySelectorAll('#sbt2, #sbt3, #sbt4, #sbt5, #sbt6');
// bookmarksMini.forEach(function(bms) {
//     bms.addEventListener('click', (event) => {
//         // bms.style.backgroundColor = 'orange';
//         event.preventDefault();
//         saveMiniBookmark(bms);
//     });
// });

</script>
</body>
</html>