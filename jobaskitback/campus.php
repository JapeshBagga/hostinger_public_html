<?php
// include("C:/xampp/htdocs/makos/jobaskit/Colleg/connection.php");
// If form submitted, insert values into the database.

if (isset($_REQUEST['submit'])){
        // removes backslashes

	$name=$_POST["name"];
	$email=$_POST["email"];
	$college=$_POST["college"];
	$phone=$_POST["phone"];
	$location=$_POST["location"];
	$specialization=$_POST["specialization"];


	// $domain='jobaskitcollege'; 
	// var_dump($domain);die();
	$servername = "database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com";
	$username = "admin";
	$password = "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou";


	// Create connection
	$conn = new mysqli($servername, $username, $password,'jobaskit');
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
    
    
    
        $query = "INSERT  INTO Ambassador(name, email, college,phone, location, specialization) VALUES ('$name','$email','$college','$phone','$location','$specialization')";
        $result = mysqli_query($conn,$query);
        if($result){
//             echo "<div class='form'>
// <h3>You are registered successfully.</h3>
// <br/>Click here to <a href='login.php'>Login</a></div>";
            header("Location: index.php");
        }

    }