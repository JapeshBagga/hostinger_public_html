<?php
    $servername = "database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com";
	$username = "admin";
	$password = "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou";	
	$conn = new mysqli($servername, $username, $password,'CollegeCompanyDashboard');
		// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$collegeID = 1;
?>