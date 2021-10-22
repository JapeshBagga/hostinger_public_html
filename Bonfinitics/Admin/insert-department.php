<!--
	Insertng posted data into department table.
-->
<?php require_once 'identification.php';?> 
<?php
	
	if (isset($_POST['submit'])){
		$dept_name = $_POST['dept_name'];
		$dept_code = $_POST['dept_code'];
		$dept_hod = $_POST['dept_hod'];
		$dept_email = $_POST['dept_email'];
		$dept_phone = $_POST['dept_phone'];
		$no_of_sem = $_POST['no_of_sem'];
		
		$query = "insert into department (dept_name,dept_code,dept_hod,dept_email,dept_phone,no_of_sem) values('$dept_name','$dept_code','$dept_hod','$dept_email','$dept_phone','$no_of_sem')";
		mysqli_query($conn, $query);
		header('location:department-list.php');
	}
	else{
		echo "Invalid Activity";
	}
?>