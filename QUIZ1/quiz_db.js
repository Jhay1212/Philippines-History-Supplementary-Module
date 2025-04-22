const quizTitle = $('#quiz-title').val();

console.log(quizTitle);

document.querySelector('#submitButton').addEventListener('click', (event) => {

    event.preventDefault();
    
    $.ajax({
        url: '../QUIZ1/quiz_db.php',
        type: 'POST',
        data: {score: score, 'quiz_title': quizTitle},
        success: function(response) {
            console.log(response);
        },
        error: function(error) {
            console.error('Error:', error);
        }
    })


    })

