<!--
	Insertng posted data into exam table.
-->
<?php require_once 'identification.php';?> 
<?php
	if(isset($_POST['submit'])){
		$exam_name = $_POST['exam_name'];
		$exam_subject = $_POST['exam_subject'];
		$exam_data = $_POST['exam_data'];
		
		if(empty($_FILES["assign_file"]["tmp_name"]){
			$query = "insert into exam (exam_name,exam_subject,exam_data)
			values('$exam_name','$exam_subject','$exam_data')";
			mysqli_query($conn, $query);
			header('location:exam.php');
			
		}
		$target_directory = "files/";
		$target_file = $target_directory.basename($_FILES["exam_file"]["name"]); 
		$filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$newfilename = $target_directory.uniqid('', true).".".$filetype;
		
		if(move_uploaded_file($_FILES["exam_file"]["tmp_name"],$newfilename)){
			$query = "insert into exam (exam_name,exam_subject,exam_data,exam_file)
			values('$exam_name','$exam_subject','$exam_data','$newfilename')";
			mysqli_query($conn, $query);
			header('location:exam.php');
		}
		else{
			echo "Invalid Activity";
		}
	}
?>