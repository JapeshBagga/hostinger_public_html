<?php
  if(!isset($_SESSION)) { 
    session_start(); 
  } 

  if(!(isset($_SESSION["verified"]) && $_SESSION["verified"] == "YE")) {
    header("Location: login.php");
    exit;
}
?>