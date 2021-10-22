<!--
	Insertng posted data into exam table.
-->
<?php require_once 'identification.php';?> 
<?php
	if(isset($_POST['submit'])){
		$quiz_name = $_POST['quiz_name'];
		$quiz_subject = $_POST['quiz_subject'];
		$quiz_question = $_POST['quiz_question'];
		$quiz_opt1 = $_POST['quiz_opt1'];
		$quiz_opt2 = $_POST['quiz_opt2'];
		$quiz_opt3 = $_POST['quiz_opt3'];
		$quiz_opt4 = $_POST['quiz_opt4'];
		$quiz_correct_opt = $_POST['quiz_correct_opt'];
		
		$query = "insert into quiz (quiz_name,quiz_subject,quiz_question,quiz_opt1,quiz_opt2,quiz_opt3,quiz_opt4,quiz_correct_opt)
		values('$quiz_name','$quiz_subject','$quiz_question','$quiz_opt1','$quiz_opt2','$quiz_opt3','$quiz_opt4','$quiz_correct_opt')";
		mysqli_query($conn, $query);
		header('location:quiz.php');
	}
?>