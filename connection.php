<?php

$conn = mysqli_connect("database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com", "admin", "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou", "makos_quiz");
$mysqli = new mysqli("database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com", "admin", "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou", "makos_quiz");

if(!$conn){
    die("Connection Failed, Please Try Again !!".mysqli_connect_error());
}

?>