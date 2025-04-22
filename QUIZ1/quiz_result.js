
function fetchQuizResults() {
    const category = document.getElementById("quiz-category").value;
    
    fetch('../QUIZ1/fetch_results.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ quizTitle: category })
    })
    .then(response => {
      console.log(response)
      return response.text();
    })
    .then(data => {
      document.getElementById("quiz-results").innerHTML = data;
      console.log(data);
    })
    .catch(error => console.error('Error:', error));
  }
  const closeBtn = document.getElementById("close-results");
const selects = document.querySelector('select');
const quizRes = document.getElementById("quiz-results");

selects.addEventListener('change', function() {
  quizRes.style.display = 'block';
})

  closeBtn.addEventListener("click", () => {
    quizRes.style.display = "none";
  });
