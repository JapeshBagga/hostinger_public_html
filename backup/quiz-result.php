<?php
require_once "identification.php";
if(isset($_POST["submit"])){
	$quiz_id=$_POST['quiz_id'];
	$query="select qust_id,correct1,correct2 from quiz_qust where quiz_id=$quiz_id";
	$result = mysqli_query($conn, $query);
	$count=0;
	while($row = mysqli_fetch_assoc($result)){
		if(!empty($_POST[$row['qust_id']])){
			if($row['correct1']==$_POST[$row['qust_id']]){
				$count=$count+10;
			}else if($row['correct2']==$_POST[$row['qust_id']]) {
				$count=$count+10;
			}
		}else{
			continue;
		}
	}
	$score =$count;
	$login_id =$login_id;
	$query = "insert into score (score_data,score_quiz_id,score_login_id) values ('$score','$quiz_id','$login_id')";
	mysqli_query($conn, $query);
	header('location:leaderboard.php');
}else{
	header('location:leaderboard.php');
}
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