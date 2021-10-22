<?php
    session_start();
    $name = $_SESSION["name"];
    $org_name = $_SESSION["org_name"];
    $login_id = $_SESSION["login_id"];
    
    $conn1 =  new mysqli("database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com", "admin", "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou", "makos_quiz");
    if(!$conn1){
        die("Connection Failed, Please Try Again !!".mysqli_connect_error());
    }
    
    if(empty($_SESSION["email"])){
    	    header("location: ../sign-in.php");
    }
    else{
    	$email = $_SESSION["email"];
    	$query1 = "select login_id, name, org_name, email, role from login where (email='$email' and role='company')";
    	$result = mysqli_query($conn1, $query1);
    	$row = mysqli_fetch_assoc($result);
    	if($row<1 ) header('location:../sign-in.php');
    }
?>