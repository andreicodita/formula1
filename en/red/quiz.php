<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz-uri</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
<?php include('header.php'); ?>
    <div id="quiz-container">
        <div class="questions">
            <h2 id="question"></h2>
            <ol type="A">
                <li class="option"><span class="options" id="option0" onclick="calcScore(this)"></span></li>
                <li class="option"><span class="options" id="option1" onclick="calcScore(this)"></span></li>
                <li class="option"><span class="options" id="option2" onclick="calcScore(this)"></span></li>
            </ol>
            <h4 id="stat"></h4>
        </div>

        <div class="buttons">
            <button type="button" class="next">Next</button>
        </div>

    </div>

    <div id="scoreboard">
        <h2 id="score-title">Your score</h2>
        <h2 id="score"></h2>
        <button type="button" id="score-btn" onclick="backToQuiz()">Back to quiz</button>
        <button type="button" id="check-answer" onclick="checkAnswer()">Verify answers</button>
    </div>

    <div id="answerBank">
        <h2>Answers:</h2>
        <ol type="1" id="answers">

        </ol>
        <button type="button" id="score-btn" onclick="backToQuiz()">Back to quiz</button>
    </div>
    <script src="quiz.js"></script>
</body>
</html>