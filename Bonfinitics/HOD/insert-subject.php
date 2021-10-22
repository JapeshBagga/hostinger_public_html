<!--
	Insertng posted data into subject table.
-->
<?php require_once 'identification.php';?> 
<?php
	if(isset($_POST['submit'])){
		$subject_code = $_POST['subject_code'];
		$subject_name = $_POST['subject_name'];
		$subject_dept = $_POST['subject_dept'];
		$subject_semester = $_POST['subject_semester'];
		$type = $_POST['type'];
		$credits = $_POST['credits'];
		$subject_student = $_POST['subject_student'];
		$subject_professor = $_POST['subject_professor'];
		
		$query = "insert into subject (subject_code,subject_name,subject_dept,subject_semester,subject_professor,type,credits,subject_student)
		values('$subject_code','$subject_name','$subject_dept','$subject_semester','$subject_professor','$type','$credits','$subject_student')";
		mysqli_query($conn, $query);
		header('location:subject-list.php');
	}
	else{
		echo "Invalid Activity";
	}
?>