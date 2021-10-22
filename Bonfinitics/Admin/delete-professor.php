<?php require_once 'identification.php';?> 
<?php
	if (isset($_REQUEST['delid'])){
		$delid = $_REQUEST['delid'];
		
		$query = "delete from professor where prf_id=$delid";
		mysqli_query($conn, $query);
		header('location:professor-list.php');
	}
?>