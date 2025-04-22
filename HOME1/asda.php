<!-- <?php
include_once ('./save_bookmark.php');
include_once('../NOTES/save_notes.php');


session_start();  // Start the session

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHILIPPINES HISTORY MODULE</title>
    <link rel="stylesheet" href="../HOME1/home-css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php
    echo <<<EOD
    <div id="sidebar" class="sidebar">

        <!-- User Info Section -->
        <div class="user-info">
            <img src="../PICS/user.jpg" alt="User Icon" class="user-icon">
            <span class="username">USERNAME</span>
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

   <!-- Main Content -->
<div class="main-content">

    <h1 class="rectangle" onclick="showContent">PHILIPPINE HISTORY</h1>
    <p class="rectangle" onclick="showContent">Choose your period lesson to tackle.</p>

    <!-- New Container for 6 Clickable Rectangles -->
    <div class="rectangle-container">
        <div class="rectangle" onclick="showContent('lesson1')" onclick="showContent('navSidebar')">
            <img src="../PICS/unit 1 pics/1.webp" alt="Image 1">
            <div class="label">EARLY PHILIPPINES</div>
        </div>
        <div class="rectangle" onclick="showContent('lesson2')">
            <img src="../PICS/unit 2 pics/1.png" alt="Image 2">
            <div class="label">SPANISH COLONIALISM</div>
        </div>
        <div class="rectangle" onclick="showContent('lesson3')">
            <img src="../PICS/unit 3 pics/1.png" alt="Image 3">
            <div class="label">FILIPINO NATIONALISM</div>
        </div>
        <div class="rectangle" onclick="showContent('lesson4')">
            <img src="../PICS/unit 4 pics/1.png" alt="Image 4">
            <div class="label">AMERICAN COLONIALISM</div>
        </div>
        <div class="rectangle" onclick="showContent('lesson5')">
            <img src="../PICS/unit 5 pics/1.png" alt="Image 5">
            <div class="label">JAPANESE OCCUPATION</div>
        </div>
        <div class="rectangle" onclick="showContent('lesson6')">
            <img src="../PICS/unit 6 pics/6pic0.avif" alt="Image 6">
            <div class="label">THE PHILIPPINE REPUBLIC</div>
        </div>
    </div>

     <!-- Content sections for lessons -->
     <div id="lesson1" class="content hidden">

        <!-- Back Button in Top Left Corner -->
<button class="back-btn" onclick="hideContent()"><i class="fas fa-arrow-left"></i></button>

        <!-- CONTENTS -->	
			<main id="mainContent">

                <section class="content-section">
                 
                     <h2 id="sbt1"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> EARLY PHILIPPINES PERIOD<br>(22,000 BCE -1521 AD)</h2>
                     <img src="../PICS/unit 1 pics/1.webp" alt="Image Description">
                     <p>The early period of the Philippines from 22,000 BCE to 1521 AD can be further broken 
                     down into detailed sections that explore a variety of different aspects, including prehistoric 
                     migrations, the development of societies, the trade networks, religious and cultural influences, and the arrival of the Spanish.</p>
            
            </p><br><br><h1 id="sb1"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> 22,000 BCE – Pre- Historic Philippines</h1>
            <img src="../PICS/unit 1 pics/2.jfif" alt="Image Description"><h3>Early Human Settlements (22,000 BCE - 5,000 BCE)</h3><br><p>
            The earliest known human remains in the Philippines, dating back to roughly 22,000 BCE, indicate a long history of human habitation in the archipelago. These remains, known as the "Tabon Man," were discovered in the Tabon Caves in Palawan in 1962. Though initially thought to be a single individual, additional discoveries revealed that the remains represented numerous individuals, providing insight into early human existence in the region.<br><br>
            
            Tabon Man is one of Southeast Asia's oldest human fossils, and it is thought that these early people were part of the first wave of human migrations into the region. These migrations were probably linked to larger movements out of Africa and across mainland Asia. The tools and artifacts discovered alongside the Tabon Man bones indicate that the early settlers were hunter-gatherers who relied on stone tools to survive.<br><br>
            
            As the millennia passed, these early people transitioned from hunter-gatherers to more settled agricultural societies. Climate change and the development of new technologies, such as plant and animal domestication, are thought to have affected this transition. It is thought that early Filipinos farmed rice, root crops, and other foods. Archaeological evidence suggests that these people lived in caves or built temporary shelters as they traveled around looking for food.
            
            </p><br><br>
            <h3>Stone Tools and Early Cultures</h3><br><p>
            Stone tools discovered in sites such as Palawan suggest early human activity in the Philippines. The finding of "Callao Man" in the Cagayan Valley, which dates back around 67,000 years, precedes the Tabon Man and demonstrates much older human presence in the region. Callao Man, likely a member of the species Homo luzonensis, 
            shows that early human migration and settlement in the Philippines occurred far earlier than previously thought, adding to our understanding of ancient human history in Southeast Asia.
            
            </p><br><br><h1 id="sb1"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> 5,000 BCE - 1,000 BCE</h1>
            <h3><img src="../PICS/unit 1 pics/3.jfif" alt="Image Description">Austronesian Migration (circa 3,000 BCE)</h3><br><p>
            Austronesian-speaking peoples came from Taiwan to the Philippines between 3,000 and 2,000 BCE, bringing extensive knowledge of agriculture, boatbuilding, and pottery. They introduced rice cultivation, domesticated animals, and the use of metal tools, resulting in the development of established populations and increasingly complex societies. Their contributions, which included maritime abilities and the use of metal, influenced early Filipino culture and facilitated the formation of trade networks and established governmental systems.<br><br>
            
            <h3>Development of Early Societies</h3><br><p>
            Early Filipino towns developed near riverbanks, coastal locations, and fertile plains, thriving on agriculture, fishing, and maritime trade. These settlements evolved into small, independent communities known as barangays, which were led by datus. The reliance on fishing and trade with nearby regions aided the growth of these barangays, resulting in interconnected but self-sufficient societies. This paved the way for increasingly complex social and political systems in the Philippines.
            
            </p><br><br><h1 id="sbt3"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> 1,000 BCE - 1000 AD</h1>
            <h3><img src="../PICS/unit 1 pics/4.jfif" alt="Image Description">Iron Age (500 BCE - 1000 AD)</h3><br><p>
            By the Iron Age in the Philippines, metalworking using bronze and iron had spread, resulting in advanced tools, weapons, and artifacts that benefited agriculture, defense, and trade. This period also saw the formation of social strata, with datus (chieftains) controlling communities and being supported by nobles and soldiers. A distinction between commoners and dependent classes, such as slaves or alipin, arose, resulting in a highly stratified society. These developments paved the way for more organized chiefdoms and complicated political structures in the future.<br><br>
            
            <h3>Trade with Neighboring Regions (200 BCE - 900 AD)</h3><br><p>
            During this time, marine commerce networks expanded, connecting the Philippines to China, India, and the Malay Archipelago. This enormous trade facilitated substantial cultural interactions, influencing Philippine languages, customs, and religious activities.<br><br>
            The Chinese and Indian textiles became extremely popular on the islands, reflecting the increased desire for luxury items. By the ninth century, foreign traders were making regular visits to the Philippines, allowing for not just economic exchanges but also the sharing of ideas, technology, and ideologies. These exchanges enhanced local cultures, adding to the diversity of Philippine society while also laying the framework for increasingly complex social systems and cultural identities. The infusion of new goods and influences shaped the islands into a thriving center of trade and cultural interchange in Southeast Asia.
                 
            </p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> 900 AD - 1521 AD: Pre-colonial Philippines</h1>	 
            <h3><img src="../PICS/unit 1 pics/5.jfif" alt="Image Description">Laguna Copperplate Inscription (900 AD)</h3><br><p>	 
            The oldest known written document in the Philippines is an inscription in Kawi script that records a debt repayment. This record suggests that a highly literate culture with established and intricate political processes existed at the time.<br><br>
            Furthermore, the impact of Indianized cultures, as well as Hindu and Buddhist traditions, grew widespread in certain regions of the Philippines, notably in the south, such as Mindanao. These influences were brought by traders and migrants, resulting in the introduction of new ideas, art forms, and religious beliefs that enhanced the cultural landscape. This combination of local and foreign components helped the Philippines build a distinct identity, reflecting the archipelago's role as a hub of trade and cultural interchange in Southeast Asia.<br><br>	
            
            <h3>Emergence of Kingdoms and Sultanates (1000 AD - 1521 AD)</h3><br><p>
            During this time, various tiny kingdoms and sultanates arose in the Philippines, each adding to the political scene. Notable among them were the Rajahnate of Butuan in Mindanao, the Rajahnate of Cebu, and the Kingdom of Tondo on Luzon. These governments played important roles in local governance, trade, and cultural interaction.<br><br>
            The Sultanates of Sulu and Maguindanao were created in the southern Philippines during the 13th and 14th centuries, bringing Islam to the region. Muslim missionaries and traders helped spread Islamic doctrines and practices, which had a significant impact on local culture, governance, and social institutions.<br><br>
            
            <h3>Trade Networks and Contact with China and Southeast Asia:</h3><br><p>
            During the Song, Yuan, and Ming dynasties, the Philippines traded with China actively, trading luxury commodities like porcelain and silk for gold, pearls, and local products. Trade with Brunei, Indonesia, and Malaysia also thrived, helping to develop the region's maritime cultures. These trading networks helped shape the Philippines' economy and culture.<br><br>
                
            <h3>Religious and Cultural Influences</h3><br><p>
            By the 14th century, Islam had expanded to the southern Philippines through trade and missionary operations, particularly among the Tausug, Maranao, and Maguindanaon peoples. This resulted in the foundation of Islamic sultanates and a long-term cultural and theological impact in the region.<br><br>
            At the same time, early Philippine kingdoms were heavily influenced by Hindu and Buddhist culture, as seen by art, architecture, and local folklore. These influences were spread through regional trade networks, combining with local beliefs and influencing early Filipino culture.<br><br>
                
            <h3>The Arrival of the Spanish (1521 AD)</h3><br><p>	
            The first European to make meaningful contact with the Philippines occurred in 1521, when Portuguese adventurer Ferdinand Magellan was traveling to Spain. His presence signaled the start of Spanish interest in colonizing the islands, which began officially in 1565 under Miguel López de Legazpi.<br><br>	
            Magellan's presence provoked confrontation with native chieftains, particularly Lapu-Lapu, the ruler of Mactan, who resisted Spanish attempts to establish dominance. Lapu-Lapu's soldiers killed Magellan at the Battle of Mactan, marking the beginning of Filipino resistance to European colonization.<br><br>	
                
                
                
                 </section>
            </main>
        <button onclick="hideContent()">Back</button>
    </div>


    <div id="lesson2" class="content hidden">

<!-- Back Button in Top Left Corner -->
<button class="back-btn" onclick="hideContent()"><i class="fas fa-arrow-left"></i></button>

        <main id="mainContent">
            <section class="content-section">
             
                 <h2 id="sbt2"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> SPANISH COLONIZATION <br>PERIOD(1521- 1898)</h2><p>
                 <img src="../PICS/unit 2 pics/1.png" alt="Image Description">
        
        <h1 id="sb1"><span class="bookmark-icon" onclick="saveBookmark(this)"></span>Early Spanish Expeditions</h1><p>	 
            Ferdinand Magellan arrived in the Philippines in 1521 during a Spanish expedition he led as a Portuguese explorer. His landing on the island of Cebu marked the first significant European contact with the islands, which he claimed for Spain, naming them the Islas de San Lazaro. Magellan established friendly ties with some local chiefs and converted a few to Roman Catholicism. However, he was later killed by a group of natives led by Chief Lapu-Lapu, who resisted foreign domination.
            <br><br>
        
            In the following decades, other Spanish expeditions were sent to the islands. In 1543, Ruy López de Villalobos led one such expedition, naming the islands of Samar and Leyte Las Islas Filipinasin honor of Spain’s Prince Philip (later King Philip II). This name was eventually applied to the entire Philippine archipelago.
            <br><br>
        
        
        </p><br><br><h1 id="sbt2"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Spanish Colonization</h1>
        <img src="../PICS/unit 2 pics/2.png" alt="Image Description">
        <p>
            The Spanish conquest of the Philippines did not fully begin until 1564, when an expedition from New Spain, led by Miguel López de Legazpi, arrived. Permanent Spanish settlement was established in 1565 when Legazpi, the first Governor-General of the Philippines, arrived in Cebu. Spanish authority was soon imposed over many small, independent communities that had previously lacked any central government. Six years later, after defeating a local Muslim ruler, Legazpi founded the capital in Manila, attracted by its excellent harbor in Manila Bay, large population, and proximity to the fertile rice lands of central Luzon. Manila quickly became the hub of Spanish civil, military, religious, and commercial activities in the Philippines. By 1571, Legazpi had established the Spanish city of Manila on the site of a former Moro town he had conquered a year earlier, solidifying Spain's control over the islands. Despite resistance from the Portuguese, who sought to maintain their monopoly over East Asian trade, the Philippines became a strategic outpost in the East Indies under Spanish rule. The islands were governed as a province of New Spain (Mexico) until Mexico gained independence in 1821.
            <br><br>
            In 1574, Manila repelled an attack by the Chinese pirate Limahong. Although the Chinese had traded with the Filipinos for centuries before the arrival of the Spanish, it wasn't until after the conquest that they began settling in the islands. Chinese labor and trade were crucial to the early development of the Spanish colony, but the growing Chinese population led to fear and resentment among the Spanish. In 1603, the Spanish massacred thousands of Chinese settlers, and there were smaller-scale massacres in subsequent years.
            <br><br>
            In 1589, the Spanish governor was elevated to the status of a viceroy, ruling with the advice of the powerful royal audiencia. Frequent uprisings occurred as Filipinos resisted the encomienda system, a system of forced labor and tribute. By the end of the 16th century, Manila had become a major commercial hub in East Asia, engaging in prosperous trade with China, India, and the East Indies. While the Philippines did provide some wealth, including gold, for Spain, its galleons, which transported valuable cargo between the islands and New Spain, were often targeted by English pirates.
            <br><br>
            The period from 1600 to 1663 saw continued warfare with the Dutch, who were establishing their empire in the East Indies, as well as with Moro pirates. One of Spain's greatest challenges was dealing with the Moros (Muslims) of Mindanao and the Sulu Archipelago, who carried out raids on Luzon and the Visayas in retaliation for Spanish and allied native attacks. The Spanish launched sporadic campaigns against the Muslims, but they only achieved significant success in the mid-19th century.
            <br><br>
            Spanish occupation of the Philippines was relatively bloodless, in part because most of the population, except for the Muslims, did not initially offer much armed resistance. The invasion of Mindanao and the Sulu Archipelago by the Muslims, however, presented a persistent problem, as they frequently raided Spanish-controlled areas. The Spanish waged irregular military campaigns against the Muslims, achieving no decisive results until much later in the colonial period.
            <br><br>
            In Spain's colonial policy, church and state were tightly intertwined, with the state taking responsibility for religious institutions. One of Spain's primary goals in colonizing the Philippines was to convert the local population to Catholicism. The absence of other organized religions, aside from Islam in the south, facilitated this process. The grandeur of the Catholic Church's rituals and its incorporation of local customs made it widely appealing. As a result, a Christian majority emerged among the lowland Malay population, while the Muslims in the south and the tribal peoples in the mountains remained largely detached.
            <br><br>
            At the local level, the Spanish adapted traditional village governance by co-opting local leaders, creating a principalía, or Filipino upper class, which held local power, wealth, and privileges. This system of indirect rule allowed the Spanish to maintain control through a local oligarchy. One of the major changes under Spanish rule was the introduction of private land ownership, replacing the Filipino practice of communal land use. Land titles were granted to members of the principalía, further entrenching their status.
            <br><br>
            Despite its strategic location, the Philippines was not a highly profitable colony for Spain. A long war with the Dutch in the 17th century, combined with ongoing conflicts with the Muslims, strained the colonial treasury. Most of the colony's income came from entrepôt trade. The Manila Galleons brought silver from Acapulco (Mexico), which was traded for Chinese goods, but there was no direct trade with Spain itself.
            <br><br>
        
        
        </p><br><br><h1 id="sbt3"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Decline of Spanish Rule</h1>
        <img src="../PICS/unit 2 pics/3.png" alt="Image Description">
        <p>
            Spanish rule in the Philippines was briefly interrupted in 1762 when British forces invaded and occupied the islands during Spain’s involvement in the Seven Years’ War. However, the Treaty of Paris in 1763 restored Spanish control, and the British withdrew by 1764. Although brief, the British occupation weakened Spain’s hold on the Philippines, sparking rebellions and growing demands for independence.
            <br><br>
            In 1781, Governor-General José Basco y Vargas established the Economic Society of Friends of the Country to promote economic development. By this time, the Philippines was directly governed by Spain. The opening of the Suez Canal in 1869 significantly reduced travel time to Spain, bringing new ideas to the Philippines and allowing many young Filipinos, known as ilustrados, to study in Europe. These ilustrados became an enlightened upper class and were key to the rise of Filipino nationalism.
            <br><br>
            Inspired by the Propaganda Movement, the ilustrados initially sought representation in the Spanish Cortes but later advocated for independence. The most notable of these intellectuals was José Riza, whose novels, Noli Me Tangere and El Filibusterismo, exposed the abuses of the Spanish colonial government and clergy, fueling the independence movement. Around this time, Andrés Bonifacio founded the Katipunan, a secret society dedicated to overthrow Spanish rule.
            <br><br>
            The Philippine Revolution began in 1896. Although Rizal did not support the armed uprising, he was implicated and executed for treason that same year. The Katipunan then split into two factions: the Magdiwang, led by Bonifacio, and the Magdalo, led by Emilio Aguinaldo. The rivalry between Bonifacio and Aguinaldo ended with Bonifacio's execution by Aguinaldo’s forces. Aguinaldo later negotiated the Pact of Biak-na-Bato, which resulted in his exile to Hong Kong along with other revolutionaries.
            <br><br>
            Opposition to the Spanish clergy's power was a major factor in the growing demand for independence. Widespread Spanish injustices, prejudice, and economic oppression also contributed to the movement, which was further inspired by Rizal’s writings. After his execution in December 1896, the revolution spread across the Philippines. Under Aguinaldo’s leadership, Filipino forces achieved several victories, but a temporary peace with Spain was short-lived. Hostilities resumed with the outbreak of the Spanish-American War in 1898.
            <br><br>
            The Spanish-American War began after the USS Maine was sunk in Havana Harbor amid efforts to mediate between Cuban independence and Spanish colonial rule. On May 1, 1898, Commodore George Dewey led the U.S. Navy to a decisive victory over the Spanish fleet at Manila Bay. The U.S. invited Emilio Aguinaldo to return to the Philippines, hoping he would unite the Filipinos against Spanish colonial forces. By the time U.S. ground troops arrived, Filipino forces had already taken control of most of Luzon, except for the walled city of Intramuros in Manila, which they were besieging.
            <br><br>
            On June 12, 1898, Aguinaldo declared the Philippines' independence in Kawit, Cavite, and established the First Philippine Republic under Asia’s first democratic constitution. However, hopes for independence were dashed when, under the Treaty of Paris (1898), Spain ceded the Philippines to the United States, along with Guam and Puerto Rico, in exchange for $20 million. This treaty officially ended the Spanish-American War.
            <br><br>
            Meanwhile, a German squadron under Admiral Diedrichs arrived in Manila, asserting that if the U.S. did not claim the Philippines, Germany would. Filipino representative Felipe Agoncillo was ignored in the Treaty of Paris negotiations, and some believe the Battle of Manila between Spain and the U.S. was an effort to exclude Filipinos from the occupation of the city. Despite opposition in the U.S., the decision was made not to return the Philippines to Spain or allow German control. The first Philippine Republic, led by Aguinaldo, resisted the American occupation, leading to the Philippine-American War(1899–1913).
            <br><br></p>
        
            
             </section>
        </main>
        <button onclick="hideContent()">Back</button>
    </div>

    <div id="lesson3" class="content hidden">

<!-- Back Button in Top Left Corner -->
<button class="back-btn" onclick="hideContent()"><i class="fas fa-arrow-left"></i></button>

        <main id="mainContent">
            <section class="content-section">
             
                 <h2 id="sbt3"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> FILIPINO NATIONALISM <br>1872- 1913</h2><p>
                 <img src="../PICS/unit 3 pics/1.png" alt="Image Description">
        
            The period of Filipino nationalism, from 1872 to 1913, was a crucial era in Philippine history marked by the beginning of the national movement against Spanish colonial powers and the US later after we had to change from Spain. It was marked by growing restiveness against Spanish rule, the appearance of genuine nationalist sentiment or national consciousness and a more militant and organized agitation for political & social reforms that led to Philippine Revolution and the ensuing Declaration of independence. All in all, this is the era that would one day influence both the fate of a Philippines no longer comfortable under Spanish domination and an identity waiting to be forged.
            <br><br>
        
        <br><h1 id="sbt1"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The 1872 Cavite Mutiny and Gomburza Execution</h1>
        <img src="../PICS/unit 3 pics/2.png" alt="Image Description">
        <p>
            The 1872 Cavite Mutiny was one of the significant events in Philippine history. Wars and InsurrectionsIn 1872, Filipino workers marched upon the Cavite arsenal to protest work conditions; specifically, concerns related to tax exemptions were abolished and forced labor were subject of a series of worker uprisings. The mutiny was easily put down, but the Spanish government would thereafter utilize it as an excuse to exert a tighter control over perceived insurgent movements.
            <br><br><img src="../PICS/unit 3 pics/3.png" alt="Image Description">
            The mutiny was blamed on the equalizing – such as it was – of rights by the three Filipino priests Mariano Gómez, José Burgos and Jacinto Zamora, collectively known as Gomburza because they advocated for secularization of the clergy. The two were executed by firing squad in 1872, an event that inspired a new crop of ilustrado nationalists.
            <br><br>
        
        </p><br><br><h1 id="sbt2"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Rise of the Ilustrados and the Propaganda Movement</h1>
        <img src="../PICS/unit 3 pics/4.png" alt="Image Description">
        <p>
            Nationalism also flourished through the works of the ilustrados, a class of an educated Filipino elite. Most of them had received their education in Europe and were exposed to liberal, democratic and enlightened ideas, significantly affecting the way they would take a stand in colonial administration.
            <br><br>
            Another period followed before the Propaganda Movement developed, with ilustrados such as José Rizal, Marcelo H. del Pilar and Graciano López Jaena taking to the streets in the 1880s. Initially they demanded political reforms rather than full independence, claiming to be:
            <br><br>
            Due representation in the Spanish Cortes (parliament)
            <br><br>
            Secularization of the clergy
            <br><br>
            Filipinos and Spaniards were given the same treatment
            <br><br>
            Freedom of speech and press
            <br><br><img src="../PICS/unit 3 pics/5.png" alt="Image Description">
            The movement had several periodicals, but the most important was La Solidaridad where they complained and promoted reforms. The most well-known figure of the movement was José Rizal. His novels, Noli Me Tangere (1887) and El Filibusterismo (1891), were crucial in shedding light on the suffering of Filipinos under Spanish colonial rule and general abuse of its friars which had galvanized many into the freedom struggle.
            <br><br>
        
        
        </p><br><br><h1 id="sbt3"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Execution of José Rizal (1896)</h1><p>
            Nationalist feeling emerged and the Filipinos became increasingly angered against their colonial masters. The invention of the growing revolutionary was used to suggest that former President José Rizal had been arrested in 1896. He had already moved away from armed rebellion when he was tried for sedition on December 30, 1896 and executed. His death was a turning point: one which inflamed the fires of rebellion and an even greater resistance against Spanish tyranny.
            <br><br>
         
        
        </p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Katipunan and the Philippine Revolution (1896)</h1>
        <img src="../PICS/unit 3 pics/6.png" alt="Image Description">
        <p>	 
            The Propaganda Movement led by Jose Rizal, Marcelo H.del Pilar primarily aimed for reforms and the foundation of KATIPUNAN in 1892 under Andrés Bonifacio, a secret society that aims for total Philippine independence, this is referred to as the armed revolution. The Katipunan expanded rapidly specifically in Manila and, by 1896, had started the Philippine Revolution. 
            <br><br>
            Initially, the revolutionaries were divided between two groups:Magdiwang, led by Bonifacio and Magdalo- Emilio Aguinaldo. This eventually ended in Bonifacio being overthrown and executed by Aguinaldo´s forces in 1897. Aguinaldo later took over the revolutionary leadership.
            <br><br>
            
        
        </p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Pact of Biak-na-Bato and Exile of Aguinaldo (1897)</h1><p>
            It took a theoretically long hiatus in 1897 with the Pact of Biak-na-Bato, which allowed Aguinaldo and his fellow revolutionaries to go into exile in Hong Kong for financial compensation from the Spanish government. Nevertheless, the agreement was not fully adhered to by either side and shortly afterwards revolutionary activities were renewed.<br><br>
            <br><br>
        
        
        </p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Spanish-American War and Declaration of Philippine Independence (1898)</h1>
        <img src="../PICS/unit 3 pics/7.png" alt="Image Description">
        <p>
            It was because of the forces of tension undergoing in Cuba that the Spanish-American War broke out in 1898. Commodore George Dewey won the Spanish fleet in Manila Bay on May 1, 1898, which turned out to be a turning point of the war. The U.S. had invited Aguinaldo to come back to the Philippines so that he could join the fight against the Spanish.
            <br><br>
            Aguinaldo proclaimed the First Philippine Republic on June 12, 1898 in Kawit, Cavite, based on the Constitution of Malolos. At the same time, Spain ceded the Philippines to the United States under the Treaty of Paris that year after the Spanish-American War took away the last transpacific colony from them.
            <br><br>
        
        
        </p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Philippine-American War (1899–1913)</h1><p>
            With the Philippines now an American protectorate, Filipino nationalists and United States forces clashed immediately, even igniting the Philippine-American War in 1899. At first, Aguinaldo fought against the United States's occupation for the newly declared republic, but the Filipinos were no match for the superior military strength of the Americans.
            <br><br>
            By 1901, Aguinaldo had been captured, and in effect, all organized resistance was over. Still, the fighting continued to struggle along, especially in Mindanao and other guerrilla groups, well into 1913. The fighting in this war was brutal, with heavy casualties on both sides and atrocities committed by both American and Filipino forces.
            <br><br>
        
        </p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> American Colonial Rule and the Transition to Civil Government</h1>
        <img src="../PICS/unit 3 pics/8.png" alt="Image Description">
        <p>
            The U.S. established a colonial government in the Philippines after the war. Filipino resistance was crushed, but the seeds of nationalism sown then continued to grow. The Philippine Commission under William Howard Taft led this integration effort, including reforms in education, infrastructure, and governance.
            <br><br>
            The Philippine Organic Act of 1902 gave the Islands a limited amount of self-governance, setting the stage for eventual independence. The Jones Act of 1916 merely promised Filipino independence, to be realized after World War II.
            <br><br></p>
            
             </section>
        </main>
        <button onclick="hideContent()">Back</button>
    </div>

    <div id="lesson4" class="content hidden">

<!-- Back Button in Top Left Corner -->
<button class="back-btn" onclick="hideContent()"><i class="fas fa-arrow-left"></i></button>

        <main id="mainContent">
    <section class="content-section">
	 
		 <h2 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> American Colonialism Period<br>1898-1946</h2>
		 
<br><h1 id="sbt1"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Prelude to war</h1>
<img src="../PICS/unit 4 pics/1.png" alt="Image Description">
<p>
In the mid-19th century, as the United States sought to expand its territory, Spain’s control over its colonies weakened, particularly in the Philippines. The signing of the Pact of Biak na Bato sparked reform efforts among Filipinos. A new Governor General, unfamiliar with the local situation, took charge as tensions rose due to the Cuban rebellion against Spain. The U.S., with interests in Cuba, allied with the rebels and prepared to confront Spain.
<br><br>
An intercepted letter from the Spanish ambassador, calling President McKinley weak, fueled American outrage. Additionally, allegations of mistreatment of Americans in Cuba contributed to negative sentiments toward Spain. The explosion of the U.S. warship Maine in Havana Harbor, which killed 246 people, served as the catalyst for the Spanish-American War, further straining relations between the two nations.
<br><br><img src="../PICS/unit 4 pics/2.png" alt="Image Description">

On April 25, 1898, General George Dewey received a telegram announcing the start of war between Spain and the United States. He then sailed from Mears Bay, near Hong Kong, to Manila Bay, arriving on May 1, where he found Spanish forces at Sangley Point, Cavite.
<br><br>

</p><br><br><h1 id="sbt2"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Battle of Manila Bay</h1><p>
Dewey directed his forces toward Sangley Point and, upon confirming they were ready to attack, instructed the captain of the flagship Olympia to open fire:
<br><br>

“Start firing if you’re ready!”</p>
<div class="toggle-container">
    <input type="checkbox" id="audio-toggle" class="toggle-checkbox">
    <label for="audio-toggle" class="toggle-label">
        <span class="toggle-text">🔈</span>
        <span class="toggle-text toggle-text-muted">🔇</span>
    </label>
</div>

<br><br><img src="../PICS/unit 4 pics/3.png" alt="Image Description"><p>

The battle was nearly one-sided, as Spanish forces were unprepared for American weaponry. This victory ignited enthusiasm among Americans, many of whom were unfamiliar with the Philippines' location. After defeating the Spanish fleet in the Battle of Manila Bay, Dewey blockaded Intramuros to prevent any Spanish ships from escaping or entering.
<br><br>


</p><br><br><h1 id="sbt3"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Aguinaldo’s Return</h1><p>
During his exile in Hong Kong, Emilio Aguinaldo and his government became aware of the conflict between Spain and the United States. They viewed this situation as a crucial opportunity to remove Spanish control from the Philippines. However, tensions within Aguinaldo's government arose regarding the distribution of funds received from the Spanish government after the signing of a pact. This disagreement led Isabelo Artacho to file a lawsuit against Aguinaldo, who evaded the court hearing by fleeing to Singapore with his associates, Gregorio del Pilar and Jay Leyva.
<br><br><img src="../PICS/unit 4 pics/5.png" alt="Image Description">

While in Singapore, American Consul E. Spencer Pratt advised Aguinaldo to place his trust in the United States and join them in the fight against Spain. Aguinaldo expressed his desire to return to the Philippines to continue the revolution.
<br><br>

Pratt communicated with Admiral George Dewey, who agreed to facilitate Aguinaldo’s return to Hong Kong. However, by the time Aguinaldo arrived, Dewey had already departed. Aguinaldo met with the American Consul in Hong Kong, Roon Zeville Wildman, who informed him that Dewey had issued orders for Aguinaldo to return to the Philippines. Wildman also advised Aguinaldo to establish a military government upon his arrival, which would reflect the structure of the U.S. government following the war. Aguinaldo then instructed Wildman to purchase weapons for the revolutionary forces. While he was able to acquire an initial batch of weapons, the subsequent order was not fulfilled, and Wildman failed to return the funds to Aguinaldo.
<br><br><img src="../PICS/unit 4 pics/6.png" alt="Image Description">

Before returning to the Philippines, the Hong Kong Junta, which was Aguinaldo's government, decided to rejoin the struggle for independence. Aguinaldo successfully arrived in Cavite in May 1898. After his arrival, he conferred with General Dewey aboard the USS Olympia, where Dewey reassured him that the United States had no plans to establish a colonial regime in the Philippines, which he believed. 
<br><br>

Aguinaldo's return sparked a resurgence of enthusiasm among Filipinos, leading many to volunteer for the revolution. During this time, various provinces were captured by Filipino rebels, significantly diminishing Spanish control in the region. Almost all of Luzon was under Filipino command, with the exceptions of Cavite and the Port of Manila.
<br><br><img src="../PICS/unit 4 pics/7.png" alt="Image Description">

On June 12, 1898, Emilio Aguinaldo proclaimed the independence of the Philippines at his residence in Cavite El Viejo. During this event, the "Acta de la Proclamación de Independencia del Pueblo Filipino," penned by Ambrosio Rianzares Bautista, was signed by 98 Filipino nationals. The sole surviving copy of this document, referred to as "The Birth Certificate of the Filipino Nation," was handwritten by Lieutenant Colonel Jose Bañuelo. Following this proclamation, Aguinaldo issued a decree on June 18 to formally establish his dictatorial government. Subsequently, on June 23, he replaced the dictatorial regime with a revolutionary government, designating himself as president. On July 15, Aguinaldo further solidified his authority by issuing three organic decrees that assumed civil governance over the Philippines.
<br><br><img src="../PICS/unit 4 pics/8.png" alt="Image Description"><br>

However, the situation for the Filipinos took an unexpected turn. The Americans did not plan to attack Intramuros due to a lack of troops. In response, Aguinaldo's forces surrounded Intramuros, cutting off food and water supplies. This resulted in severe suffering for the residents, who faced hunger and thirst. Aguinaldo urged Governor-General Agustin to surrender, but Agustin refused, citing his commitment to their Code of Honor.
<br><br><br>

	 
</p><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Mock Battle</h1>
<img src="../PICS/unit 4 pics/9.png" alt="Image Description">
<p>	 
When American reinforcements arrived, preparations for an assault on Manila began. Meanwhile, Admiral Dewey sought to persuade General Agustin to surrender through the Belgian Consul. Although Agustin was considering surrender, he was replaced by General Haudene, who negotiated a mock battle with Dewey and General Merritt to save face.
<br><br>

Dewey agreed, but Haudene insisted that Filipino rebels should not participate, which Dewey accepted, believing the Filipinos were allies. At that time, the Filipinos had nearly complete control over Manila and were monitoring the Spanish in Intramuros.
<br>

Filipinos were ordered to vacate the Bayside in Intramuros for the Americans to take over. Aguinaldo requested that General Merritt provide a written order, which Merritt agreed to after leaving Bayside, and the Filipinos complied.
<br><br><img src="../PICS/unit 4 pics/10.png" alt="Image Description"><br>

The steady arrival of American troops surprised Aguinaldo's government, which began to question America's true intentions. Meanwhile, the Americans prepared for the mock battle, and General Anderson sent a warning to Aguinaldo not to position troops along the Pasig River due to impending gunfire.
<br><br><img src="../PICS/unit 4 pics/11.png" alt="Image Description">

On August 13, despite warnings, the mock battle occurred after negotiations with Haudene. Aguinaldo positioned Filipino forces on General MacArthur's left flank. The mock battle lasted several hours, and around 11:30, the Spaniards raised a white flag, signaling their surrender.
<br><br>
	
</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> America’s True Intention </h1>
<img src="../PICS/unit 4 pics/12.png" alt="Image Description">
<p>
The Filipinos had initially seen the Americans as aiding them in their independence from Spain, but the Americans did not see things this way. For  them, it was an opportunity, as President William McKinley put it : 
<br><br><br><br><br><br>

“to uplift and civilize and Christianize them”</p>
<div class="toggle-container">
    <input type="checkbox" id="audio-toggle" class="toggle-checkbox">
    <label for="audio-toggle" class="toggle-label">
        <span class="toggle-text">🔈</span>
        <span class="toggle-text toggle-text-muted">🔇</span>
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
    <input type="checkbox" id="audio-toggle" class="toggle-checkbox">
    <label for="audio-toggle" class="toggle-label">
        <span class="toggle-text">🔈</span>
        <span class="toggle-text toggle-text-muted">🔇</span>
    </label>
</div><br><p>
<br><br><img src="../PICS/unit 4 pics/13.png" alt="Image Description">

President McKinley subsequently issued a directive demanding the full cession of the Philippine archipelago. This led to the signing of the Treaty of Paris in December 1898, which officially ended the Spanish-American War. A key provision of the treaty was the transfer of the archipelago to the United States in exchange for $20 million in compensation. In 1900, the Treaty of Washington further clarified this agreement, stating that any Spanish territories in the archipelago not specifically included in the geographical boundaries outlined in the Treaty of Paris were also ceded to the United States.
<br><br>

After the Treaty of Paris was signed, President McKinley issued the Benevolent Assimilation proclamation on December 21, outlining America’s true intentions in the Philippines, stating that the US would control the Philippine government. General Otis, upon reading it, saw that it might have a negative impact on Filipinos. The US aimed to win the hearts of the Filipinos, so they needed to feel they were not being colonized.
<br><br><img src="../PICS/unit 4 pics/14.png" alt="Image Description">

Thus, when the Benevolent Assimilation was published, Otis modified parts to suggest that America was there to help the Filipinos. However, General Miller in Iloilo published the original version, leading to outrage among revolutionaries who realized America’s true intentions. Luna criticized this in the newspaper La Independencia.
<br><br>
<br><br><br><br><br><br><br><br>
<img src="../PICS/unit 4 pics/15.png" alt="Image Description">
In response, Aguinaldo issued a counter-proclamation against this. His intentions were clear, but to Otis, this counter-proclamation indicated that Aguinaldo was seeking war. Aguinaldo's government tried to ease tensions between the two sides.
<br><br><br><br><br><br><br><br><br><br><img src="../PICS/unit 4 pics/16.png" alt="Image Description">
<img src="../PICS/unit 4 pics/17.png" alt="Image Description">

They held a conference with the Americans, who convinced them that they would listen to Filipino grievances. However, it was just a tactic to delay fighting, as they awaited reinforcements. Growing tensions between America and the Philippines erupted on February 4, 1899, when American and Filipino soldiers faced each other at San Juan Bridge. The encounter happened by chance, as Filipino troops stationed near the Americans came into contact with them. According to Private William Grayson, when he spotted armed Filipino soldiers, he shouted, 

<br><br>"Halt,"</p> 
<div class="toggle-container">
    <input type="checkbox" id="audio-toggle" class="toggle-checkbox">
    <label for="audio-toggle" class="toggle-label">
        <span class="toggle-text">🔈</span>
        <span class="toggle-text toggle-text-muted">🔇</span>
    </label>
</div><p>

but they kept moving forward. He called out again, and the Filipino soldier replied with 

<br><br>"Halto." </p>
<div class="toggle-container">
    <input type="checkbox" id="audio-toggle" class="toggle-checkbox">
    <label for="audio-toggle" class="toggle-label">
        <span class="toggle-text">🔈</span>
        <span class="toggle-text toggle-text-muted">🔇</span>
    </label>
</div><p>

Grayson then fired his weapon, hitting the Filipino soldier, who fell to the ground.
<br><br>

</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> War of America and Filipino</h1>
<img src="../PICS/unit 4 pics/18.png" alt="Image Description">
<p>
The news of the confrontation reached General MacArthur, who promptly declared the beginning of war between American and Filipino forces. In an attempt to clarify the situation, Aguinaldo sent a letter to General Ores, insisting that the chaos was not instigated by him. However, Otis suggested that, since hostilities had already commenced, they should continue their efforts.
<br><br><img src="../PICS/unit 4 pics/19.png" alt="Image Description">

As Aguinaldo sought to investigate the incident, American troops launched attacks on various locations in Manila, capturing Pasig and other cities. After taking La Loma, the Americans set their sights on Kalookan, where General Luna was stationed. Although the Americans secured victory there, Luna devised a plan to retake Manila but was ultimately defeated.
<br><br>

Luna retreated to Pulo, where he established his headquarters. When American reinforcements arrived, they captured Pulo and advanced to Malolos, where Aguinaldo's government was located. Faced with growing danger, Aguinaldo fled to San Isidro, Nueva Ecija.
<br><br>

After a brief stay in Malolos, MacArthur pursued them to Kalumpit. The defense was expected to be strong, as the Americans needed to cross the Bagbag River. However, this defense failed because the hot-headed Luna had gone to Pampanga to confront General Mascardo, leaving only General Gregorio del Pilar to defend the position. Their defeat marked the beginning of the rapid fall of provinces and cities to American control.

<br><br>"We are fighting for our independence!" - Emilio Aguinaldo, 1899</p>
<div class="toggle-container">
    <input type="checkbox" id="audio-toggle" class="toggle-checkbox">
    <label for="audio-toggle" class="toggle-label">
        <span class="toggle-text">🔈</span>
        <span class="toggle-text toggle-text-muted">🔇</span>
    </label>
</div><p>

<br><br><img src="../PICS/unit 4 pics/20.png" alt="Image Description">

Amid this turmoil, tensions within Aguinaldo's cabinet led to Luna's assassination, a significant loss for the Filipino resistance. Luna’s plans were not followed through. In other parts of the Philippines, it was increasingly challenging for Filipino troops to maintain their struggle against the Americans. Aguinaldo hoped to continue the resistance, but fighting was becoming impossible as American control expanded.
<br><br><img src="../PICS/unit 4 pics/21.png" alt="Image Description">

With new American strategies, Aguinaldo was forced to retreat further into the mountains, where access to resources became a significant challenge. His troops struggled with a lack of food, leading to the deterioration of their strength. Aguinaldo's strategy was to strengthen his defenses, making it difficult for the Americans to advance. In many skirmishes, the Americans suffered losses due to their tendency to be in the open, while Aguinaldo and his men effectively used the terrain to their advantage.
<br><br><img src="../PICS/unit 4 pics/22.png" alt="Image Description">

The Filipinos were poorly equipped for conventional warfare against a modern state, often relying on bows, arrows, and spears instead of firearms. After several months of direct conflict, they adopted guerrilla tactics to inflict consistent losses on American forces rather than attempting a complete military takeover. In response, the United States adjusted its strategies, establishing concentration camps to segregate civilians for their supposed protection from guerrilla activities.
<br><br>

Prisoners of war camps suffered from inadequate supplies, leading to rampant diseases that caused more Filipino deaths than the fighting itself. The insurgency continued, prompting General Arthur MacArthur to declare martial law on December 20, 1900. Meanwhile, an American Commission led by future President William Howard Taft began developing a new government structure, aiming to persuade some resistance leaders to abandon their anti-American efforts.
<br><br><img src="../PICS/unit 4 pics/23.png" alt="Image Description">

Hostilities waned significantly after President Aguinaldo's capture in March 1901.
<br><br>

"I am still the president of the Republic of the Philippines."</p>
<div class="toggle-container">
    <input type="checkbox" id="audio-toggle" class="toggle-checkbox">
    <label for="audio-toggle" class="toggle-label">
        <span class="toggle-text">🔈</span>
        <span class="toggle-text toggle-text-muted">🔇</span>
    </label>
</div><p>

<br><br>

He officially surrendered on April 19 and called on his people to lay down their arms, though some local leaders, like Miguel Malvar and Vicente Lukban, continued to resist until April 1902, with isolated pockets of resistance lingering until 1913.
<br><br>
 
The war ultimately resulted in greater costs in lives and resources for the U.S. than the Spanish-American War, with at least 200,000 Filipino civilians perishing due to disease and famine. The U.S. employed a scorched-earth policy in guerrilla-infested areas and resorted to extreme measures for information extraction, while Filipino fighters also used brutal tactics against captured Americans.
<br><br><img src="../PICS/unit 4 pics/24.png" alt="Image Description">

The casualties during the Philippine-American War were disproportionately higher among Filipinos compared to Americans. Nearly 4,000 American soldiers died out of approximately 125,000 who served in the conflict. In contrast, around 20,000 Filipino combatants lost their lives, along with an estimated 250,000 to 1 million non-combatants. The non-combatant deaths were attributed to several factors, including a severe cholera epidemic and violence perpetrated by U.S. military forces. This violence included targeted attacks on civilians and the establishment of concentration camps, which significantly contributed to the high death toll.
<br><br>

</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Insular Government</h1>
<img src="../PICS/unit 4 pics/25.png" alt="Image Description">
<p>
After the war, the Philippines were placed under the Insular Government, a territorial administration accountable to the United States, aimed at guiding the country toward independence. In 1907, elections were held for an assembly that served as the lower house of a bicameral legislature, with the U.S.-appointed Philippine Commission as the upper house. This assembly regularly passed resolutions calling for independence.
<br><br>

The Philippine Autonomy Act, or Jones Law, enacted in 1916, replaced the Commission with an elected Senate and asserted U.S. support for Philippine independence, although no specific timeline was provided. Efforts toward independence stalled during World War I, but after the war, a Philippine delegation sought support in Washington. President Woodrow Wilson indicated that the Philippines were ready for independence in 1921, though his successors disagreed.
<br><br>

In January 1933, the U.S. established a timeline for independence through the Philippine Independence Act of 1934, which outlined the process for drafting a constitution and forming a commonwealth. The new constitution took effect on November 15, 1935, setting July 4, 1946, as the date for the Philippines to gain independence from U.S. oversight.
<br><br>

</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Philippine Commonwealth</h1>
<img src="../PICS/unit 4 pics/26.png" alt="Image Description">
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
</main>
        <button onclick="hideContent()">Back</button>
    </div>

    <div id="lesson5" class="content hidden">

        <!-- Back Button in Top Left Corner -->
<button class="back-btn" onclick="hideContent()"><i class="fas fa-arrow-left"></i></button>

        <main id="mainContent">
            <section class="content-section">
             
                 <h2 id="sbt5"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Japanese Occupation Period<br>1942-1945</h2>
                 <img src="../PICS/unit 5 pics/1.png" alt="Image Description">
                 <p>
                 
        The period of Japanese occupation in the Philippines, from 1942 to 1945, marked a dark and tragic era in the nation’s history. Throughout this time, Filipinos faced great suffering and hardship, yet they showed extraordinary bravery and determination in their resistance against the invaders.
        <br><br><img src="../PICS/unit 5 pics/2.png" alt="Image Description">
        
        Japan sought access to Southeast Asia's natural resources—oil, rubber, and minerals—to support its growing economy and military. Japan wanted to remove U.S. influence in Southeast Asia to access natural resources and make it easier to defend its territories. They planned to destroy the American Pacific Fleet at Pearl Harbor, thinking the U.S. would not react. Recognizing the Philippines' importance, the U.S. grew worried as Japan's power increased, leading to the National Defense Act, which combined U.S. and Filipino forces into the United States Army Forces in the Far East (USAFE). Despite diplomatic efforts to prevent conflict in the late 1930s, these attempts failed.
        <br><br><img src="../PICS/unit 5 pics/3.png" alt="Image Description">
        
        In December 1941, Japan launched a surprise attack on the US naval base at Pearl Harbor in Hawaii. The U.S. was furious and declared war on Japan. Four hours after the Japanese weakened American forces in the Pacific by bombing Pearl Harbor, Japan bombed various locations in the Philippines.
        <br><br>
        
        On December 8, 1941, Clark Field was attacked, along with Davao, Baguio, Apari, Nichols Field, and Sangley Point. By the end of December, the Japanese targeted Manila, which General MacArthur declared an open city to reduce destruction, but bombings continued.
        <br><br>
        
        Japanese forces landed at Bataan and quickly advanced to Apari, Pandan, and Legaspi. With few military defenses, resistance was minimal. Rumors of U.S. warplanes arriving were false; Japan had already destroyed American aircraft at Clark and Nichols. By December 22, the Japanese had landed in Lingayen, and by January 2, 1942, they had captured Manila.
        <br><br><img src="../PICS/unit 5 pics/4.png" alt="Image Description">
        
        On December 24, MacArthur told President Quezon to evacuate to Corregidor. Quezon held a final cabinet meeting, confirming that several officials, including Justice Secretary Jose Abad Santos and Vice President Sergio Osmeña, would accompany him. Chief Justice Jose Laurel also wanted to join.
        <br><br>
        
        But Quezon insisted, <strong>“Not you, Laurel; someone must face the Japanese. The people need protection. Tough times are ahead.” </strong>
        </p><div class="toggle-container">
            <input type="checkbox" id="audio-toggle" class="toggle-checkbox">
            <label for="audio-toggle" class="toggle-label">
                <span class="toggle-text">🔈</span>
                <span class="toggle-text toggle-text-muted">🔇</span>
            </label>
        </div><p>
        
        <br><br>
        
        Laurel understood the challenges ahead and asked, <strong>“How can I negotiate with them?”</strong> MacArthur replied, <strong>“You can do anything, just don’t swear allegiance to the Japanese flag. If anyone does, I will shoot them myself upon my return.”</strong> Laurel then took his oath as the new Secretary of Justice.
        </p><div class="toggle-container">
            <input type="checkbox" id="audio-toggle" class="toggle-checkbox">
            <label for="audio-toggle" class="toggle-label">
                <span class="toggle-text">🔈</span>
                <span class="toggle-text toggle-text-muted">🔇</span>
            </label>
        </div><p>
        <br><br>
        
        Quezon's last instructions to the Commonwealth officials were clear:
        <br><br>
        
        <strong>“Do everything. Plead with them if you can. Do all you can to keep the Philippines united. Protect the Filipinos from Japanese brutality. You will face tough decisions, but do everything for the future of the Philippines.”</strong>
        </p><div class="toggle-container">
            <input type="checkbox" id="audio-toggle" class="toggle-checkbox">
            <label for="audio-toggle" class="toggle-label">
                <span class="toggle-text">🔈</span>
                <span class="toggle-text toggle-text-muted">🔇</span>
            </label>
        </div><p>
        
        <br><br>
        
        On December 30, Quezon took his oath for a second term as President in Corregidor. His escape with American forces succeeded, and the Japanese struggled to capture the USAFFE due to Corregidor's defenses.
        <br><br>
        
        
        </p><br><br><h1 id="sbt2"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Bataan Death March</h1>
        <img src="../PICS/unit 5 pics/5.png" alt="Image Description">
        <p>
        As time passed, U.S. assistance arrived for the soldiers, impacted by the Europe First Policy. The weakening of USAFFE intensified with MacArthur’s departure to Australia on March 11, 1942 with his famous line
        <br><br><br><br><br>
        
        “I shall return”</p>
        <div class="toggle-container">
            <input type="checkbox" id="audio-toggle" class="toggle-checkbox">
            <label for="audio-toggle" class="toggle-label">
                <span class="toggle-text">🔈</span>
                <span class="toggle-text toggle-text-muted">🔇</span>
            </label>
        </div><p>
        <br><br>
        
        He made this promise to the Filipino people, vowing to return and liberate the islands. 
        <br><br>
        
        Quezon left on February 18 aboard the submarine Swordfish. General Jonathan Wainwright took over from MacArthur, but on April 9, General Edward P. King decided to surrender his troops in Bataan.
        <br><br><img src="../PICS/unit 5 pics/6.png" alt="Image Description">
        <img src="../PICS/unit 5 pics/7.png" alt="Image Description">
        
        Most of the 80,000 prisoners of war taken by the Japanese at Bataan were compelled to participate in the "Bataan Death March" to Camp O'Donnell in Capas, Tarlac, located 105 kilometers north of Mariveles. Thousands of soldiers, already weakened by illness and malnutrition, suffered brutal treatment from their captors and died before reaching the camp. Upon reaching Capas, they were imprisoned like animals, starved, and fell ill. In fact, more men perished from Japanese mistreatment in the first four months in the camps than during the four months of combat prior.
        <br><br>
        
        
        </p><br><br><h1 id="sbt3"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Occupation</h1><p>
        Despite their promise of independence for the islands, the Japanese military authorities immediately began organizing a new government structure, with the Council of State in charge of civil affairs until October 1943, when they declared the Philippines an independent republic. However, the Japanese were not content with just political control. They also implemented a brutal system of sexual slavery, taking more than 1,000 Filipinos, including mothers, girls, and gay men, as comfort women for their military personnel.
        <br><br><img src="../PICS/unit 5 pics/8.png" alt="Image Description">
        <img src="../PICS/unit 5 pics/9.png" alt="Image Description">
        
        These victims, some as young as 10 years old, were imprisoned and subjected to unthinkable horrors. The Japanese military installations in the Philippines each had a comfort station, where women were held as sex slaves. Bahay Napula was just one of the many locations where women were forcibly taken and subjected to gang rape, torture, and humiliation.
        <br><br>
        
        Many suffered injuries, had their breasts cut off, or were killed if they resisted the soldier's sexual advances. The victims were treated like animals, with many being murdered and disposed of without dignity. In addition to the sexual enslavement of women and girls, Japanese doctors and surgeons conducted grotesque human experiments on their victims.
        <br><br>
        
        These experiments included amputations, dissections, and suturing blood vessels of live humans, with some victims being forced to dig their own graves before the procedure. Vivisections, the dissection of the stomach, were performed on live Filipinos, with some left with gaping stomachs and intestines spilled out before being dumped in their graves to die. The perpetrators of these heinous acts, many of whom remained at large in Japan until their comfortable retirement, attempted to cover up their crimes for decades.
        <br><br>
        
        Those who spoke out faced harassment from Japanese ultra-nationalists intent on protecting their country's image. Despite this, the Japanese occupation of the Philippines sparked fierce resistance from guerrilla fighters and underground groups. These brave individuals risked their lives to combat oppression, and by the end of the war, Japan controlled only 12 out of 48 provinces.
        <br><br>
        
             
        </p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> End of Occupation</h1>
        <img src="../PICS/unit 5 pics/10.png" alt="Image Description">
        <p>	 
        When General MacArthur returned to the Philippines in late 1944, he arrived well-informed, having gathered extensive intelligence, but faced a formidable Japanese defense determined to halt the American advance. The Japanese military poured every available resource into protecting the islands, including creating the kamikaze corps. The Battle of Leyte Gulf marked the largest naval clash of World War II and ended in disaster for Japan. 
        <br><br>
        
        MacArthur's Allied forces landed on Leyte on October 20, 1944, with Sergio Osmeña, who succeeded Quezon as president. Subsequent landings occurred at Mindoro and Lingayen Gulf as they pushed toward Manila. Fierce fighting erupted, especially in northern Luzon and Manila, where Japanese forces made their last stand. Filipino guerrillas played a critical role, supplementing American units and aiding in logistics and civil administration.
        <br><br>
        
        The guerrilla fighters were well-organized, communicating with each other and relaying information to the US Army. Recognizing their crucial role, General MacArthur initiated covert operations to support them, with Lieutenant Commander Charles Chick Parsons smuggling weapons and supplies. Guerrilla forces accumulated arms and planned sabotage against Japanese communications.
        <br><br><img src="../PICS/unit 5 pics/11.png" alt="Image Description">
        
        By war's end, 277 guerrilla units, comprising over 260,000 fighters, had bravely opposed Japanese forces. As Allied forces advanced, fighting intensified, especially in northern Luzon's mountains, culminating in Japan's surrender on September 2, 1945. The conflict resulted in an estimated 527,000 Filipino deaths, with 141,000 massacred, 22,500 dying from forced labor, and 336,500 succumbing to war-related famine.
        <br><br>
        
        Following the war, select resistance units were integrated into the Philippine Army, bringing valuable combat experience that would shape the military's future. The legacy of these resistance fighters serves as a testament to the resilience and strength of the Filipino people. The war left a devastating toll, with significant casualties for both U.S. and Japanese forces, but the suffering of the Filipino population was especially tragic, marked by famine and disease in the years that followed.
        <br><br></p>
        
            
            
             </section>
        </main>
        <button onclick="hideContent()">Back</button>
    </div>

    <div id="lesson6" class="content hidden">

<!-- Back Button in Top Left Corner -->
<button class="back-btn" onclick="hideContent()"><i class="fas fa-arrow-left"></i></button>
        
        <main id="mainContent">
    <section class="content-section">
	 
		 <h2 id="sbt6"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Period of Philippine Republic<br>1946 - Present</h2>
         <p>
		
<h1 id="sb1"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Independence (1946)</h1>
<img src="../PICS/unit 6 pics/6pic0.avif" alt="Image Description">
<p>		
The Philippines joined the United Nations as a founding member on October 11, 1945. Consequently, the Treaty of Manila, which was signed on July 4, 1946, during Manuel Roxas's administration, allowed the United States to formally recognize the Philippines as an independent country. With this pact, American rule over the islands was terminated and the independence of the Republic of the Philippines was recognized. Independence Day was observed on July 4 from 1946 until 1961. On the other hand, June 12, 1962 was designated as a special public holiday by President Macapagal on May 12, 1962. Independence Day was formally rescheduled to June 12 by Republic Act No. 4166 in 1964, which also declared July 4 to be Philippine Republic Day.
<br><br>

The post-war history of the Philippines reflects a delicate balance between the successful attainment of independence and ongoing internal struggles. Following liberation from Japanese occupation by the United States in the summer of 1945, the Republic of the Philippines was established on July 4, 1946. The early decades of this new nation were characterized by a blend of economic and social reforms, as well as an effort to place the Philippines on the global stage.
<br><br>

The challenges faced by the nascent republic began even before independence. President Manuel Quezon passed away in 1944 while leading his government in exile in the United States, and his Vice President, Sergio Azmeña, succeeded him. Azmeña was relatively unknown to the public, and his political party had lost popularity during the Japanese occupation. The first presidential elections for the new republic took place in April 1946, prior to formal independence, to avoid a lame duck period in case of a change in leadership. Azmeña's rival was Manuel Roxas, a populist candidate backed by General Douglas MacArthur. 
<br><br>


</p><br><br><h1 id="sbt2"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Roxas Administration (1946–1948)</h1>
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


</p><br><br><h1 id="sbt3"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Quirino Administration (1948–1953)</h1>
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

	 
</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Magsaysay Administration (1953–1957)</h1>
<img src="../PICS/unit 6 pics/6pic3.jpg" alt="Image Description">
<p>	 
In the 1953 election, Ramon Magsaysay emerged victorious over incumbent Elpidio Quirino, aided by American officials and funds. Sworn in wearing the barong tagalog, Magsaysay became known for his close ties to the United States and his strong anti-communist stance during the Cold War. He played a pivotal role in founding the Southeast Asia Treaty Organization (Manila Pact) in 1954, aimed at countering Marxist-Leninist movements across Southeast Asia, South Asia, and Oceania.

Magsaysay opened Malacañang Palace to the public, embodying his vision of a "house of the people." His integrity was exemplified when he personally covered the operating costs for a flight aboard a new Philippine Air Force plane.
<br><br>

Tragically, on March 16, 1957, Magsaysay's plane, the "Mt. Pinatubo," went missing after a trip to Cebu City. The following day, it was reported that the aircraft had crashed on Mount Manunggal, resulting in the deaths of 25 out of 26 passengers and crew. Only newspaperman Nestor Mata survived. Vice President Carlos P. Garcia, who was abroad at the time, succeeded Magsaysay and completed the remaining months of his term.
<br><br>

Magsaysay's presidency is often celebrated as a period of honest governance, dubbed the "Golden Years," and he left a lasting legacy in promoting the Philippines as a bulwark against communism. An estimated 2 million people attended his burial on March 22, 1957.
<br><br>


</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Garcia Administration (1957–1961)</h1>
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


</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Macapagal Administration (1961–1965)</h1>
<img src="../PICS/unit 6 pics/6pic5.jpg" alt="Image Description">
<p>	 
In the 1961 presidential election, Diosdado Macapagal defeated incumbent president Carlos Garcia with a 55% to 45% margin. His administration aimed to stimulate economic development, allowing the Philippine peso to float on the free market, though his reform efforts faced opposition from the Nacionalista-dominated legislature. Notable achievements included the abolition of tenancy through the Agricultural Land Reform Code of 1963 and changing the celebration of Philippine independence from July 4 to June 12, marking Emilio Aguinaldo's declaration in 1898.
<br><br>

Macapagal's tenure was marked by significant reforms, but he lost the 1965 election to Ferdinand Marcos, a former ally who had switched to the Nacionalista Party.
<br><br>


</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> The Marcos Administration (1965–1972)</h1>
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


</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Corazon Aquino Administration (1986–1992)</h1>
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


</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Fidel Ramos Administration (1992–1998)</h1>
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


</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Joseph Estrada Administration (1998–2001)</h1>
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

</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Gloria Macapagal Arroyo Administration (2001–2010)</h1>
<img src="../PICS/unit 6 pics/6pic10.avif" alt="Image Description">
<p>	 
Vice President Gloria Macapagal Arroyo was sworn in as president following Estrada's departure, despite his allies challenging the legitimacy of her government. The Supreme Court upheld her presidency twice. After Estrada's arrest on plunder charges in April 2001, thousands rallied in "EDSA III" to demand his reinstatement, attempting to storm Malacañang Palace on May 1, but were stopped by authorities. Arroyo's position was further solidified by her coalition's overwhelming victory in the May 2001 elections.
<br><br>

Her early presidency faced challenges, including coalition conflicts and a military mutiny in July 2003, leading to a month-long nationwide state of rebellion. Initially announcing she wouldn’t run in the May 2004 elections, Arroyo reversed her decision and was re-elected for a six-year term starting June 30, 2004.
<br><br>

In 2005, a wiretapped conversation emerged, seemingly revealing Arroyo discussing election results with an official, sparking protests demanding her resignation. While she admitted to the conversation, she denied any electoral fraud. Efforts to impeach her failed that year. Towards the end of her term, Arroyo proposed a controversial constitutional overhaul to shift from a unitary presidential republic to a federal parliamentary government.
<br><br>

</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Benigno Aquino III Administration (2010–2016)</h1>
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

</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)" id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Rodrigo Duterte Administration (2016–2022)</h1>
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

</p><br><br><h1 id="sbt4"><span class="bookmark-icon" onclick="saveBookmark(this)"  id="bookmarkIcon"><i id="bookmark" class="fas fa-bookmark"></i></span> Bongbong Marcos Administration (2022–present)</h1>
<img src="../PICS/unit 6 pics/6pic13.webp" alt="Image Description">
<p>	 
Ferdinand Marcos Sr. Jr., popularly known as Bongbong, assumed the presidency in 2022, aiming to distinguish his administration from the controversial policies of his predecessor, Rodrigo Duterte. His election followed a period marked by geopolitical tensions, particularly regarding the South China Sea, where China's ambitions created friction.
<br><br>

Marcos Jr. won the presidential election by a landslide, with Sara Duterte, daughter of Rodrigo Duterte, as his vice presidential running mate. Both were sworn in on June 30, 2022. However, his campaign faced criticism for its lack of transparency, as he avoided public debates and relied heavily on social media, often sidestepping tough questions about his policies and his father's dictatorship.
<br><br>

Critics have expressed concern over his leadership, pointing to a lack of clear vision in addressing pressing issues like inflation and food security. Additionally, fears of political dynasties and historical revisionism have resurfaced, with many worried that the human rights abuses during his father's regime are being downplayed or overlooked.
<br><br>
	
	</section>
</main>


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
            <button class="close-btn" onclick="closeForm()">X</button>
        </div>
        <input type="text" name="title" id="" placeholder="Title">
        <textarea placeholder="Write your note here..." class="note-text" name="note"></textarea>
        <button class="add-btn" type="submit">Add</button>
    </form>
</div>


EOD;
?>
    <!-- JavaScript -->
    <script src="../HOME1/home-js.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // alert('this')
function saveBookmark(element) {
    alert('bookmartk clicked');
    // Get the title text from the parent <h2> element
    var title = $(element).closest('h2').text().trim();
    console.log('title:', title);

    $.ajax({
        url: '../HOME1/save_bookmark.php',  // PHP script to handle the database insertion
        type: 'POST',
        data: { title: title },  // Send the title dynamically
        success: function(response) {
            alert('Bookmark saved successfully!');
            alert(response);
        },
        error: function(error) {
            console.error('Error saving bookmark:', error);
        }
    });
}
function setCookie(cname, cvalue, cdate) {
    const d = new Date();
    const val = document.querySelector('.note-text')
    const title = document.querySelector("input[type='text']");

    d.setTime(d.getTime() + (cdate * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = title.value  +"=" + value + ";" + expires + ";path=/";
}





</script>
</body>
</html> -->