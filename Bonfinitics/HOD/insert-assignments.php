<!--
	Insertng posted data into assignment table.
-->
<?php require_once 'identification.php';?> 
<?php
	if(isset($_POST['submit'])){
		$assign_name = $_POST['assign_name'];
		$assign_subject = $_POST['assign_subject'];
		$assign_data = $_POST['assign_data'];
		
		if(empty($_FILES["assign_file"]["tmp_name"]){
			$query = "insert into assignment (assign_name,assign_subject,assign_data)
			values('$assign_name','$assign_subject','$assign_data')";
			mysqli_query($conn, $query);
			header('location:assignments.php');
			
		}
		$target_directory = "files/";
		$target_file = $target_directory.basename($_FILES["assign_file"]["name"]); 
		$filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$newfilename = $target_directory.uniqid('', true).".".$filetype;
		
		if(move_uploaded_file($_FILES["assign_file"]["tmp_name"],$newfilename)){
			$query = "insert into assignment (assign_name,assign_subject,assign_data,assign_file)
			values('$assign_name','$assign_subject','$assign_data','$newfilename')";
			mysqli_query($conn, $query);
			header('location:assignments.php');
		}
		else{
			echo "Invalid Activity";
		}
	}
?>