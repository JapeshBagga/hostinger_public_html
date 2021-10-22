<?php
    $servername = "database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com";
	$username = "admin";
	$password = "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou";	
	$conn = new mysqli($servername, $username, $password,'CollegeCompanyDashboard');
		// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$studentID = 1;
	$collegeID = 0;
	$query = "SELECT coll_id FROM CollegeCompanyDashboard.students WHERE id = $studentID";
	// $query->execute();
	// $result = $query->get_result();
	$result = mysqli_query($conn, $query );
	//var_dump($result);
	if(!$result)
	die("ERROR: Couldn't fetch Jobs");
	$rows = mysqli_num_rows($result);
	if($rows == 0)
	echo "<h2 align='center'>No Jobs available</h2>";
	else
	{
	// row 0 is company id
	$collegeID = (int)mysqli_fetch_array($result);
	}                            
	// var_dump("hiii".$collegeID);
?>