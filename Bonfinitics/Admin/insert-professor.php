<!--
	Insertng posted data into department table.
-->
<?php require_once 'identification.php';?> 
<?php
if(isset($_POST['submit'])){
	$prf_name = $_POST['prf_name'];
	$prf_address = $_POST['prf_address'];
	$prf_joining_date = $_POST['prf_joining_date'];
	$prf_email = $_POST['prf_email'];
	$prf_dept = $_POST['prf_dept'];
	$prf_gender = $_POST['prf_gender'];
	$prf_dob = $_POST['prf_dob'];
	$prf_contact = $_POST['prf_contact'];
	$prf_latest_qualification = $_POST['prf_latest_qualification'];
	$prf_country = $_POST['prf_country'];
	$prf_state = $_POST['prf_state'];
	$prf_city = $_POST['prf_city'];
	
	$target_directory = "../files/";
	$target_file = $target_directory.basename($_FILES["prf_image"]["name"]); 
	$filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$newfilename = $target_directory.uniqid('', true).".".$filetype;
	
	if(move_uploaded_file($_FILES["prf_image"]["tmp_name"],$newfilename)){
		
		$query = "insert into professor 
		(prf_name,prf_address,prf_joining_date,prf_email,prf_dept,prf_gender,prf_image,prf_dob,prf_contact,
		prf_latest_qualification,prf_country,prf_state,prf_city) 
		values
		('$prf_name','$prf_address','$prf_joining_date','$prf_email','$prf_dept','$prf_gender','$newfilename','$prf_dob',
		'$prf_contact','$prf_latest_qualification','$prf_country','$prf_state','$prf_city')";
		mysqli_query($conn, $query);
		header('location:professor-list.php');
	}
}
?>