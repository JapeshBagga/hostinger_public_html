<?php
// echo "working";
session_start();
//Variable to Store error message;
if(isset($_POST['submit'])){
 
 //Define $user and $pass
 $useremail=$_POST['useremail'];
 $pass=$_POST['pass'];

include 'connection.php';

 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM admin  WHERE useremail='$useremail' and pass='$pass' ");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 	while($row= mysqli_fetch_array($query))
  {
    $_SESSION['useremail']=$row['useremail'];
   
  }
 header("Location: index.php"); // Redirecting to other page
 }
 else
 {
 	echo ("<SCRIPT LANGUAGE='JavaScript'>
   		 	window.alert('Invalid Login Details.')
    		window.location.href='signin.php';
    		</SCRIPT>");
 // $error = "UserEmail or Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 } 
?>