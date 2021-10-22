<?php
session_start();
session_unset();//san
session_destroy();
header("location:index.php");
//echo "<script language='javascript'>window.location='login.php';</script>";
//san
?>

