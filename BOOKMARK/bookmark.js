const historyMap = {

  early_philippines_period: {
    era: 'Early philippne period',
    description: 'Focuses on system and culture of Filipino before Ferdinand Magellan discover the Spice Island Philippine'
  },
  "pre_colonial_period": {
    era: "Pre-Colonial Period",
    description: "The Philippines before colonial rule was characterized by independent barangays, a stratified society, trade relations across Asia, and a rich cultural and religious life influenced by local traditions and external influences."
  },
  "spanish_colonization": {
    era: "Spanish Colonization",
    description: "Beginning in 1521, Spanish colonization reshaped the Philippines over the next three centuries, with changes in politics, society, economy, and religion, setting the stage for the eventual rise of nationalism."
  },
  "american_colonialism_period": {
    era: "American Colonialism Period (1898-1946)",
    description: "After Spain ceded the Philippines to the U.S. in 1898, American colonial rule introduced new political systems, education, and economic structures, culminating in the Commonwealth era and eventual independence."
  },
  "japanese_occupation_period": {
    era: "Japanese Occupation Period (1942-1945)",
    description: "During World War II, the Philippines endured brutal occupation by Japan, marked by the Bataan Death March and widespread suffering, before liberation in 1945."
  },
  "post_independence_early_republic": {
    era: "Post Independence and Early Republic",
    description: "After gaining independence in 1946, the Philippines faced challenges of rebuilding and asserting its national identity amid economic dependence and political struggles."
  },
  "period_of_philippine_republic": {
    era: "Period of Philippine Republic (1946 - Present)",
    description: "Since independence, the Philippines has navigated through various political administrations, social upheavals, and economic transformations, continuing its quest for true democracy and national identity."
  },
  "barangay_system_and_political_organization": {
    era: "Barangay System and Political Organization",
    description: "In the pre-colonial era, barangays were the fundamental political units, ruled by local chieftains or datus, who led both governance and community organization."
  },
  "social_stratification": {
    era: "Social Stratification",
    description: "Pre-colonial Philippine society was divided into classes such as the ruling class (maharlika), freemen (timawa), and slaves (alipin), with mobility within this hierarchy."
  },
  "economic_systems_and_trade": {
    era: "Economic Systems and Trade",
    description: "Pre-colonial Filipinos engaged in both subsistence agriculture and extensive trade with neighboring regions like China, India, and the Middle East."
  },
  "cultural_and_religious_life": {
    era: "Cultural and Religious Life",
    description: "The religious beliefs of pre-colonial Filipinos were rooted in animism, with a pantheon of deities and spirits, and the community was deeply influenced by oral traditions, rituals, and local arts."
  },
  "pre_colonial_legal_systems": {
    era: "Pre-Colonial Legal Systems",
    description: "Justice in pre-colonial Philippines was based on customary laws and adjudicated by the datu, with sanctions ranging from fines to servitude depending on the crime."
  },
  "absence_of_national_unity": {
    era: "Absence of National Unity",
    description: "Before colonization, the Philippines lacked national unity, with barangays functioning independently and often in conflict with one another."
  },
  "external_influences_and_cultural_adaptation": {
    era: "External Influences and Cultural Adaptation",
    description: "Trade and migration brought external influences to the Philippines, shaping its language, religion, and cultural practices."
  },
  "the_arrival_of_the_spanish": {
    era: "The Arrival of the Spanish (1521–1565)",
    description: "The arrival of Ferdinand Magellan in 1521 marked the beginning of European presence, leading to initial conflicts with local rulers and the introduction of Christianity."
  },
  "the_establishment_of_spanish_rule": {
    era: "The Establishment of Spanish Rule (1565–1600)",
    description: "Spanish rule formally began with the conquest of Cebu in 1565 by Miguel López de Legazpi, ushering in widespread conversion to Christianity and the colonial system."
  },
  "societal_changes_and_economic_structures": {
    era: "Societal Changes and Economic Structures (1600–1800)",
    description: "During this period, Spanish rule transformed Philippine society, introducing the encomienda system, land ownership policies, and new religious orders."
  },
  "cultural_and_intellectual_developments": {
    era: "Cultural and Intellectual Developments (1800–1896)",
    description: "This period saw the rise of Filipino intellectuals and writers, such as José Rizal and Francisco Balagtas, whose works challenged colonial oppression and inspired national consciousness."
  },
  "francisco_balagtas_florante_at_laura": {
    era: "Francisco Balagtas and Florante at Laura",
    description: "Francisco Balagtas wrote the epic 'Florante at Laura,' a significant work in Philippine literature that highlighted societal issues under Spanish rule."
  },
  "jose_rizal_and_the_rise_of_nationalism": {
    era: "José Rizal and the Rise of Nationalism",
    description: "José Rizal, through his novels and activism, became a leading figure in the Filipino nationalist movement that sought reforms and independence from Spanish rule."
  },
  "the_rise_of_nationalism": {
    era: "The Rise of Nationalism (1892–1896)",
    description: "The late 19th century witnessed the birth of organized nationalist movements like the Katipunan, aiming to overthrow Spanish colonial rule."
  },
  "the_end_of_spanish_rule": {
    era: "The End of Spanish Rule (1898)",
    description: "The Spanish-American War of 1898 marked the end of over 300 years of Spanish rule in the Philippines, with the country ceded to the United States."
  },
  "prelude_to_war": {
    era: "Prelude to War",
    description: "The tensions between the Filipino revolutionary forces and the Americans escalated after the Treaty of Paris, leading to the Philippine-American War."
  },
  "battle_of_manila_bay": {
    era: "Battle of Manila Bay",
    description: "The Battle of Manila Bay in 1898 was a decisive victory for the U.S. Navy over Spain, signaling the start of American control over the Philippines."
  },
  "aguinaldos_return": {
    era: "Aguinaldo’s Return",
    description: "Emilio Aguinaldo, the Filipino revolutionary leader, returned from exile in 1898 to lead the fight against both Spanish and American colonizers."
  },
  "mock_battle": {
    era: "Mock Battle",
    description: "The Mock Battle of Manila in 1898 was a staged conflict between Spanish and American forces, allowing Spain to surrender the city to the U.S. without involving Filipino forces."
  },
  "americas_true_intention": {
    era: "America’s True Intention",
    description: "Despite initial cooperation with Filipino revolutionaries, it became clear that the U.S. intended to establish colonial control over the Philippines."
  },
  "war_of_america_and_filipino": {
    era: "War of America and Filipino",
    description: "The Philippine-American War (1899–1902) was a brutal conflict between the newly established U.S. colonial government and Filipino forces fighting for independence."
  },
  "insular_government": {
    era: "Insular Government",
    description: "After the Philippine-American War, the U.S. established the Insular Government, marking the beginning of direct American colonial rule."
  },
  "philippine_commonwealth": {
    era: "Philippine Commonwealth",
    description: "The Commonwealth era (1935–1946) provided Filipinos limited self-governance in preparation for full independence, which was delayed due to World War II."
  },
  "bataan_death_march": {
    era: "Bataan Death March",
    description: "The Bataan Death March was one of the most harrowing events of the Japanese occupation, where thousands of Filipino and American POWs were forced to march under brutal conditions."
  },
  "occupation": {
    era: "Occupation",
    description: "The Japanese occupation of the Philippines was marked by harsh military rule, economic exploitation, and the rise of Filipino guerilla resistance."
  },
  "end_of_occupation": {
    era: "End of Occupation",
    description: "The Japanese occupation ended in 1945 when Allied forces, with the help of Filipino guerrillas, liberated the Philippines."
  },
  "the_post-colonial_struggle:_a_nation_in_chains_of_its_past": {
    era: "The Post-Colonial Struggle: A Nation in Chains of its Past",
    description: "After gaining independence, the Philippines struggled to overcome the legacies of colonialism, including economic dependence and political instability."
  },
  "economic_dependence_and_neocolonialism": {
    era: "Economic Dependence and Neocolonialism",
    description: "Even after independence, the Philippines remained economically dependent on foreign powers, leading to a form of neocolonialism."
  },
  "political_power_and_entrenched_elite": {
    era: "Political Power and the Entrenched Elite",
    description: "The political landscape of post-colonial Philippines was dominated by an entrenched elite, leading to inequalities and challenges in achieving true democracy."
  },
  "struggle_for_true_democracy": {
    era: "The Struggle for True Democracy",
    description: "Post-colonial history has been marked by ongoing efforts to establish a more inclusive and representative democracy."
  },
  "martial_law_death_rebirth_of_democracy": {
    era: "Martial Law: The Death and Rebirth of Democracy",
    description: "The Marcos regime (1972–1986) was characterized by authoritarian rule under Martial Law, leading to widespread human rights abuses and the eventual People Power Revolution that restored democracy."
  },
  "continuing_struggle_national_identity": {
    era: "Continuing the Struggle for National Identity",
    description: "The quest for a cohesive national identity continues to be a central theme in Philippine history, reflecting the diverse cultural heritage of its people."
  },
  "continuing_quest_sovereignty_identity": {
    era: "The Continuing Quest for Sovereignty and Identity",
    description: "The Philippines continues to navigate its relationship with global powers while asserting its sovereignty and cultural identity."
  },
  "independence_1946": {
    era: "Independence (1946)",
    description: "On July 4, 1946, the Philippines was granted independence by the United States, marking the birth of the Third Republic."
  },
  "the_roxas_administration": {
    era: "The Roxas Administration (1946–1948)",
    description: "Manuel Roxas, the first President of the independent Philippines, led the nation through the early years of reconstruction and recovery."
  },
  "the_quirino_administration": {
    era: "The Quirino Administration (1948–1953)",
    description: "Elpidio Quirino's presidency was marked by efforts to maintain stability, counter-insurgency, and economic development."
  },
  "the_magsaysay_administration": {
    era: "The Magsaysay Administration (1953–1957)",
    description: "President Ramon Magsaysay is remembered for his populist policies, focus on rural development, and efforts to combat corruption."
  },
  "the_garcia_administration": {
    era: "The Garcia Administration (1957–1961)",
    description: "Carlos P. Garcia's presidency was characterized by the Filipino First Policy, aimed at reducing foreign influence in the economy."
  },
  "the_macapagal_administration": {
    era: "The Macapagal Administration (1961–1965)",
    description: "Diosdado Macapagal focused on land reform and shifted Independence Day celebrations from July 4 to June 12, reflecting a nationalist sentiment."
  },
  "the_marcos_administration": {
    era: "The Marcos Administration (1965–1972)",
    description: "Ferdinand Marcos’s rule before Martial Law was characterized by infrastructure development, but also increasing political unrest."
  },
  "the_corazon_aquino_administration": {
    era: "Corazon Aquino Administration (1986–1992)",
    description: "Corazon Aquino, the first female president of the Philippines, restored democracy after the People Power Revolution."
  },
  "the_fidel_ramos_administration": {
    era: "Fidel Ramos Administration (1992–1998)",
    description: "Fidel Ramos's presidency was marked by economic reforms, peace negotiations, and efforts to promote political stability."
  },
  "the_joseph_estrada_administration": {
    era: "Joseph Estrada Administration (1998–2001)",
    description: "Joseph Estrada’s short-lived presidency ended in a second People Power movement due to accusations of corruption."
  },
  "the_gloria_macapagal_arroyo_administration": {
    era: "Gloria Macapagal Arroyo Administration (2001–2010)",
    description: "Gloria Macapagal Arroyo’s presidency was marked by economic growth, political controversies, and efforts to address poverty."
  },
  "the_benigno_aquino_iii_administration": {
    era: "Benigno Aquino III Administration (2010–2016)",
    description: "Benigno Aquino III focused on anti-corruption efforts, economic stability, and infrastructure development."
  },
  "the_rodrigo_duterte_administration": {
    era: "Rodrigo Duterte Administration (2016–2022)",
    description: "Rodrigo Duterte’s administration was known for its war on drugs, controversial policies, and strong stance on foreign relations."
  },
  "the_bongbong_marcos_administration": {
    era: "Bongbong Marcos Administration (2022–present)",
    description: "The current administration under Bongbong Marcos focuses on continuity, economic development, and addressing contemporary challenges."
  }
};


// alert(Object.keys(historyMap).length)

const desc = document.querySelector('.desc');
const squares = document.querySelectorAll('.square');
const inst = document.querySelector('.inst');
squares.forEach(square => {
  square.addEventListener('click', (e) => {
      // Ensure the title is consistently formatted
      const title = e.currentTarget.dataset.title.toLowerCase().replace(/[\s\-.]/g, '_'); 
      const content = historyMap[title]; // Find corresponding history data by title
      console.log(title, content);
      
      if (content) {
          // Update the description section with the matching history data
          desc.innerHTML = `<h3>${content.era}</h3><p>${content.description}</p>`;
          inst.style.display = "none";
      } else {
          // If no matching content is found, show a default message
          desc.textContent = "No preview available for this bookmark.";
      }
  });
});

