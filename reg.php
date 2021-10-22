<?php
if(isset($_POST["submit"])){
    $role=$_POST["roleNew_id"]; 
	if ($role=="Institute") {
		$name=$_POST["name"]; 
		$role=$_POST["roleNew_id"]; 
		$institute_name=$_POST["institute"];
		$select1=$_POST["select1"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$location=$_POST["location"];	
		$servername = "database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com";
		$username = "admin";
		$password = "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou";	
        // var_dump($select1);die('working');
	
		$conn = new mysqli($servername, $username, $password,'jobaskit');
		
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		
		$query = "INSERT INTO register_details(username,role,name,dashboard,email,phone,location) VALUES ('$name','$role','$institute_name','$select1','$email','$phone','$location')";
		$result = mysqli_query($conn,$query);
		if($result){				
			if($select1=='Student'){
                header("Location: https://jobaskit.com/college/student"); 
			}
             if($select1=='student_placment_coordinator'){
                header("Location: http://jobaskit.com/college/student-coordinator"); 
            }
            if($select1=='faculty'){
                header("Location: https://jobaskit.com/college/"); 
            }
		}
    }

	if ($role=="Company") {
		$name=$_POST["name"];
		$role=$_POST["roleNew_id"]; 
		$company_name=$_POST["company"];
		$select2=$_POST["select2"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$location=$_POST["location"];
		$servername = "database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com";
		$username = "admin";
		$password = "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou";	
		
		$conn = new mysqli($servername, $username, $password,'jobaskit');
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		
		$query = "INSERT  INTO register_details(username,role,name,dashboard,email,phone,location) VALUES ('$name','$role','$company_name','$select2','$email','$phone','$location')";
		$result = mysqli_query($conn,$query);
		if($result){
			echo "Dashboard is getting ready";
		}
	}
}