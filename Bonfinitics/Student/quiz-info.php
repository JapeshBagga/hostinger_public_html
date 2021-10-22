<?php require_once 'identification.php';?> 
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">   
    <title>Quiz | BonFinitics - Makos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .quiz-container {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 10px 6px -6px #777;
        width: 600px;
        max-width: 100%;
        overflow: hidden;
        }

        .quiz-header {
        padding: 4rem;
        }

        .quiz-container  h4 {
        margin: 0;
        text-align: center;
        padding: 1rem;
        }

        .quiz-container  ul {
        list-style-type: none;
        padding: 0;
        }

        .quiz-container  ul li {
        margin: 1rem 0;
        font-size: 1rem;
        font-weight: 400;
        }

        .quiz-container  ul li label {
        cursor: pointer;
        }

        .quiz-container  button {
        background-color: #1e90ff;
        display: block;
        width: 100%;
        font-family: inherit;
        border: none;
        font-size: 1.3rem;
        padding: 1rem;
        color: #fff;
        cursor: pointer;
        }

        .quiz-container  button:hover {
        background-color: #1460ac;
        }

        .quiz-container  button:focus {
        outline: none;
        background-color: #1460ac;
        }
    </style>

    
    <?php require 'top-scripts.php';?> 
</head>
<body>

    <!-- Start Left menu area -->
    <?php require 'side-nav.php';?> 
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <!-- logo area starts -->
            <?php require 'logo.php';?> 
        <!-- logo area ends  -->

        <div class="header-advance-area">
            <!-- header top area starts -->
            <?php require 'top-nav.php';?> 
            <!-- header top area ends --> 

            <!-- Mobile Menu start -->
                <?php require 'mobile-nav.php';?> 
            <!-- Mobile Menu end -->

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Quiz Info</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- quiz start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="quiz-container" id="quiz">
                        <div class="quiz-header">
                            <h4 id="question">Question Text</h4>
                            <ul>
                            <li>
                                <input type="radio" id="a" name="answer" class="answer">
                                <label id="a_text" for="a"></label>
                            </li>
                            <li>
                                <input type="radio" id="b" name="answer" class="answer">
                                <label id="b_text" for="b"></label>
                            </li>
                            <li>
                                <input type="radio" id="c" name="answer" class="answer">
                                <label id="c_text" for="c"></label>
                            </li>
                            <li>
                                <input type="radio" id="d" name="answer" class="answer">
                                <label id="d_text" for="d"></label>
                            </li>
                            </ul>
                        </div>
                            <button id="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  quiz ends -->
        
        <br><br><br>
    
        <?php require 'footer.php';?> 
    </div>

    <script >
        const quizData = [
            {
                question:
                "What is the HTML tag under which one can write the JavaScript code?",
                a: "<javascript>",
                b: "<scripted>",
                c: "<script>",
                d: "<js>",
                correct: "c"
            },
            {
                question:
                'Choose the correct JavaScript syntax to change the content of the following HTML code. \n \n <h1 id="hello">HelloWorld</h1>',
                a: 'document.getElement("hello").innerHTML="Hello World!";',
                b: 'document.getElementById("hello").innerHTML="Hello World!";',
                c: 'document.getId("hello)="Hello World!";',
                d: 'document.getElementById("hello").innerHTML=Hello World!;',
                correct: "b"
            },
            {
                question:
                'Which of the following is the correct syntax to display "Hello World" in an alert box using JavaScript?',
                a: 'alertbox("Hello World!");',
                b: 'msg("Hello World!");',
                c: 'msgbox("Hello World!");',
                d: 'alert("Hello World!");',
                correct: "d"
            },

            {
                question:
                'What is the correct syntax for referring to external script called "script.js"?',
                a: '<script src="script.js">',
                b: '<script href="script.js">',
                c: '<script ref="script.js">',
                d: '<script name="script.js">',
                correct: "a"
            },
            {
                question:
                'Predict the output of the following JavaScript code.\n \n a = 8 + "8"; \n document.write(a); \n',
                a: "16",
                b: "Complication Error",
                c: "88",
                d: "Run Time Error",
                correct: "c"
            },
            {
                question:
                "Predict the output of the following JavaScript code.\n \n let nums [110, 15, 25]; \n let sum = nums[1] + nums.sort()[1]; \n console.log(sum);",
                a: "30",
                b: "40",
                c: "220",
                d: "22",
                correct: "a"
            },
            {
                question:
                "Predict the output of the following JavaScript code.\n \n let a = 10; \n let b = a % 4; \n let c = b / 2 \n let d = a + c;\n \n console.log(a);",
                a: "11",
                b: "undefined",
                c: "30",
                d: "10",
                correct: "d"
            },
            {
                question: "Which of the following is not reserved word in JavaScript?",
                a: "interface",
                b: "throws",
                c: "program",
                d: "short",
                correct: "c"
            }
        ];

            const questionEl = document.getElementById("question");
            const answersEls = document.querySelectorAll(".answer");
            const quiz = document.getElementById("quiz");

            const a_text = document.getElementById("a_text");
            const b_text = document.getElementById("b_text");
            const c_text = document.getElementById("c_text");
            const d_text = document.getElementById("d_text");
            const submitBtn = document.getElementById("submit");

            let currentQuiz = 0;
            let score = 0;

            loadQuiz();

            function loadQuiz() {
                deselectAnswers();

                const currentQuizData = quizData[currentQuiz];

                questionEl.innerText = currentQuizData.question;

                a_text.innerText = currentQuizData.a;
                b_text.innerText = currentQuizData.b;
                c_text.innerText = currentQuizData.c;
                d_text.innerText = currentQuizData.d;
            }

            function getSelected() {
            let answer = undefined;

            answersEls.forEach((answersEl) => {
                if (answersEl.checked) {
                answer = answersEl.id;
                }
            });

            return answer;
            }

            function deselectAnswers() {
            answersEls.forEach((answersEl) => {
                if (answersEl.checked) {
                answersEl.checked = false;
                }
            });
            }

            submitBtn.addEventListener("click", () => {
            // Check to see the answer
            const answer = getSelected();

            if (answer) {
                if (answer === quizData[currentQuiz].correct) {
                score++;
                }

                currentQuiz++;
                if (currentQuiz < quizData.length) {
                loadQuiz();
                } else if (score === quizData.length) {
                quiz.innerHTML = `<h4>You answered correctly ${score}/${quizData.length} questions. You really know your Subject! Great Job!</h4> <a href="subject-info.php"><button type="button"> Okay </button> </a>`;
                } else {
                quiz.innerHTML = `<h4>You answered only correctly ${score}/${quizData.length} questions. Keep Studying more, you need more improvement!<a href="subject-info.php"><button type="button"> Okay </button> </a>`;
                }
            }
            });

  
    </script>
    <?php require 'end-scripts.php';?> 
</body>

</html>

