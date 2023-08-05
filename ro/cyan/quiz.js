var questionBank= [
    {
        question : 'Cate curse de tip sprint sunt in sezonul 2022?',
        option : ['2','4','3'],
        answer : '3'
    },
    {
        question : 'Sunt obligatorii opririle la boxe pe timpul unei curse de tip sprint?',
        option : ['Da','Nu','Nu se specifica'],
        answer : 'Nu'
    },
    {
        question : 'Cine a castigat Marele Premiu al Argentinei in 1958?',
        option : ['Manuel Fangio','Stirling Moss','Luigi Musso'],
        answer : 'Stirling Moss'
    },
    {
        question : 'Cine a castigat Marele Premiu al Mexicului in 1986?',
        option : ['Ayrton Senna','Nelson Piquet','Gerhard Berger'],
        answer : 'Gerhard Berger'
    },
    {
        question : 'Pe ce loc a terminat Mika Salo in Marele Premiu al Monacoului din 1997?',
        option : ['1','5','3'],
        answer : '5'
    },
    {
        question : 'Cine a castigat Marele Premiu al Braziliei din 2003?',
        option : ['Giancarlo Fisichella','Kimi Raikkonen','Mark Webber'],
        answer : 'Giancarlo Fisichella'
    },
    {
        question : 'Pe ce loc a terminat Michael Schumacher in Marele Premiu al Frantei din 2004?',
        option : ['1','3','2'],
        answer : '1'
    },
    {
        question : 'Pe ce loc a terminat Sebastian Vettel in Marele Premiu al Italiei din 2010?',
        option : ['2','3','4'],
        answer : '4'
    }
]

var question= document.getElementById('question');
var quizContainer= document.getElementById('quiz-container');
var scorecard= document.getElementById('scorecard');
var option0= document.getElementById('option0');
var option1= document.getElementById('option1');
var option2= document.getElementById('option2');
var next= document.querySelector('.next');
var points= document.getElementById('score');
var span= document.querySelectorAll('.options');
var i=0;
var score= 0;

function displayQuestion(){
    for(var a=0;a<span.length;a++){
        span[a].style.background='none';
    }
    question.innerHTML= questionBank[i].question;
    option0.innerHTML= questionBank[i].option[0];
    option1.innerHTML= questionBank[i].option[1];
    option2.innerHTML= questionBank[i].option[2];
    stat.innerHTML= "Intrebarea"+' '+(i+1)+' '+'din'+' '+questionBank.length;
}

function calcScore(e){
    if(e.innerHTML===questionBank[i].answer && score<questionBank.length)
    {
        score= score+1;
        document.getElementById(e.id).style.background= 'green';
    }
    else{
        document.getElementById(e.id).style.background= 'black';
    }
    setTimeout(nextQuestion,300);
}

function nextQuestion(){
    if(i<questionBank.length-1)
    {
        i=i+1;
        displayQuestion();
    }
    else{
        points.innerHTML= score+ '/'+ questionBank.length;
        quizContainer.style.display= 'none';
        scoreboard.style.display= 'block'
    }
}

next.addEventListener('click',nextQuestion);

function backToQuiz(){
    location.reload();
}

function checkAnswer(){
    var answerBank= document.getElementById('answerBank');
    var answers= document.getElementById('answers');
    answerBank.style.display= 'block';
    scoreboard.style.display= 'none';
    for(var a=0;a<questionBank.length;a++)
    {
        var list= document.createElement('li');
        list.innerHTML= questionBank[a].answer;
        answers.appendChild(list);
    }
}


displayQuestion();