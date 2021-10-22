<?php
require_once "identification.php";
$user_name=$row['name'];
	if(isset($_REQUEST["eid"]))
		$quiz_id=$_REQUEST["eid"];
	else
		header('location:../index.php');

	$query_quiz_time="select quiz_title,quiz_time from quiz_topic where quiz_id=$quiz_id";
	$quiz_time_result = mysqli_query($conn, $query_quiz_time);
	$quiz_time_row = mysqli_fetch_assoc($quiz_time_result);
	$quiz_time = $quiz_time_row['quiz_time'];
	$quiz_name = $quiz_time_row['quiz_title'];
  
	$query_score="select score_id from score where (score_quiz_id=$quiz_id and score_login_id=$login_id)";
	$result_score = mysqli_query($conn, $query_score);
	$row_score = mysqli_num_rows($result_score);
	if($row_score >=1 )
		header('location:leaderboard.php');
  /*
  if(isset($_POST["submit"])){
    $quiz_id=$_POST['quiz_id'];
    $query_quiz="select qust_id,question,opt1,opt2,opt3,opt4,correct1,correct2 from quiz_qust where quiz_id=$quiz_id";
    $quiz_result = mysqli_query($conn, $query_quiz);
    $count=0;
    while($quiz_row = mysqli_fetch_assoc($quiz_result)){
      if(!empty($_POST[$quiz_row['qust_id']])){
        if($quiz_row['correct1']==$_POST[$quiz_row['qust_id']]){
          $count=$count+10;
        }else if($quiz_row['correct2']==$_POST[$quiz_row['qust_id']]){
          $count=$count+7;
        }
        else
          continue;
      }else{
        header('location:aptitude-quizes.php');
      }
    }
    $query_score = "insert into score (score_data,score_quiz_id,score_login_id) values ('$count','$quiz_id','$login_id')";
    $score_result = mysqli_query($conn, $query_score);
    header('location:aptitude-quizes.php');
  }
  */
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title> Quiz | JoBaskit</title>
  <style>
      table, tr, td{
        border: solid;
        font-size:14px;
        padding:4px;
      }
      
  </style>

  <?php require_once 'requires/top-scripts.php' ?>

</head>
<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">

      <!----LOGO CODE or BRAND-->
      <?php require_once 'requires/logo.php' ?>

      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="leaderboard.php">
                <i class="ni ni-tv-2"></i>
                <span class="nav-link-text">Leaderboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="introduction.php">
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Self-Introduction</span>
              </a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="aptitude-quizes.php">
                <i class="ni ni-bullet-list-67"></i>
                <span class="nav-link-text">Aptitude Quiz</span>
              </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <i class="ni ni-single-02"></i>
                        <!-- <img alt="Image placeholder" src="img/theme/team-1.jpg" class="avatar rounded-circle"> -->
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Japesh</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                    <i class="ni ni-single-02"></i>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $user_name;?></span>
                  </div>
              </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <div class="header pb-2 d-flex align-items-center" style="background-image: url(img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
       <div class="container-fluid">
           <div class="row py-4">
              <div class="col-lg-8">
			  
			  <h2 class="h2 text-white"><?php echo $quiz_name;?></h2>
			  <!--<p class="h4 text-white" name="timer" id="demo"></p>-->
			  </div>
              <div class="col-lg-2">
              </div>
              <div class="col-lg-2"></div>
           </div>
       </div>
    </div>
    <br><br><br><br>

    <!-- Quiz content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-lg-9 order-xl-1">
				<form action="quiz-result.php" class="form" method="post">
					<?php
						$i=1;
						$qust_query = "select qust_id, question, opt1, opt2, opt3, opt4 from quiz_qust where quiz_id=$quiz_id";
						$qust_result = mysqli_query($conn, $qust_query);
						while($qust_row = mysqli_fetch_assoc($qust_result)){
					?>
					<div class="card">
						<div class="card-header">
							<h4  id="question"><?php echo $i; ?>. <?php echo $qust_row['question']; ?></h4>
						</div>
						<div class="card-body">
							<!-- <h6 class="heading-small text-muted mb-4">Introduce Yourself</h6> -->
							<div class="pl-lg-10">
								<!-- Description -->
								<div class="pl-lg-4">
									<div class="row" id="output">
										<div class="col-lg-6 col-6 mb-2">
											<input type="radio" id="a" name="<?php echo $qust_row['qust_id'];?>" value="a">
											<label id="a_text" for="a"><?php echo $qust_row['opt1']; ?></label>
										</div>
										<div class="col-lg-6 col-6 mb-2">
											<input type="radio" id="b" name="<?php echo $qust_row['qust_id'];?>" value="b">
											<label id="b_text" for="b"><?php echo $qust_row['opt2']; ?></label>
										</div>
										<div class="col-lg-6 col-6">
											<input type="radio" id="c" name="<?php echo $qust_row['qust_id'];?>" value="c">
											<label id="c_text" for="c"><?php echo $qust_row['opt3']; ?></label>
										</div>
										<div class="col-lg-6 col-6">
											<input type="radio" id="b" name="<?php echo $qust_row['qust_id'];?>" value="d">
											<label id="d_text" for="d"><?php echo $qust_row['opt4']; ?></label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
						$i=$i+1;
						}
					?>
					<div class="text-right">
						<input type="hidden" name="quiz_id" value="<?php echo $quiz_id;?>" >
						<button type="submit" name="submit" class="btn btn-custon-rounded-three btn-primary">Save</button>
					</div>					
			  </form>
               
            </div>
			

    <script >/*
        const quizData = [
            {
                question:
                "",
                a: "",
                b: "",
                c: "",
                d: "",
                correct: "",
				correct2: ""
            },
       
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
				else if (answer === quizData[currentQuiz].correct2) {
                score++;
                }

                currentQuiz++;
                if (currentQuiz < quizData.length) {
                loadQuiz();
                } else if (score === quizData.length) {
					
					$.ajax({
					  url: "quiz_result.php",
					  method: "post",
					  data: {
						score_data: score,
						quiz_id:"",
						login_id:"",
					  },
					  success: function (response) {
						quiz.innerHTML = "Successfully submitted your answers.";
                
					  },
					});
					
					} else {
                
				
				$.ajax({
					  url: "quiz_result.php",
					  method: "post",
					  data: {
						score_data: score,
						quiz_id:"<",
						login_id:"",
					  },
					  success: function (response) {
						quiz.innerHTML = "Successfully submitted your answers.";
					  },
					});
				
				}
            }
            });

  
    </script>
			
			
			
			
            <div class="col-lg-3 order-xl-1">
                <table style="border: solid">
                    <tr>
                        <td style="background-color:black; color:white; border: 1px black solid">Q1</td>
                        <td>Q2</td>
                        <td>Q3</td>
                        <td>Q4</td>
                        <td>Q5</td>
                        <td>Q6</td>

                    </tr>
                    <tr>
                        <td>Q1</td>
                        <td>Q2</td>
                        <td>Q3</td>
                        <td>Q4</td>
                        <td>Q5</td>
                        <td>Q6</td>

                    </tr>
                    <tr>
                        <td>Q1</td>
                        <td>Q2</td>
                        <td>Q3</td>
                        <td>Q4</td>
                        <td>Q5</td>
                        <td>Q6</td>

                    </tr>
                    <tr>
                        <td>Q1</td>
                        <td>Q2</td>
                        <td>Q3</td>
                        <td>Q4</td>
                        <td>Q5</td>
                        <td>Q6</td>

                    </tr>
                </table>
                <br/><br/>
                <div class="custom-control custom-checkbox mb-3">
                    <input class="custom-control-input" name="flag_qust" type="checkbox">
                    <label class="custom-control-label" for="customCheck1">Flag Question</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input class="custom-control-input" name="flag_completed" type="checkbox" checked >
                    <label class="custom-control-label" for="customCheck2">Mark as completed</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input class="custom-control-input" name="flag_wrong" type="checkbox" >
                    <label class="custom-control-label" for="customCheck2">Mark as wrong question</label>
                </div>
            </div>
			
        </div>       
    </div>
 </div>
		*/
		</script>
  <?php require_once 'requires/end-scripts.php' ?>
</body>

</html>