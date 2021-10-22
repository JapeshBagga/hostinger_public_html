
<?php
require_once "identification.php";
$subrole = $row['subrole'];
/*
	$dm_query = "select dm_name from domain 
				 where (dm_name LIKE '%".$_POST['query']."%')";
	$dm_query_result = mysqli_query($conn,$dm_query);
	if(mysqli_num_rows($dm_query_result)>0){
		while($row=mysqli_fetch_array($dm_query_result)){
?>
		        <a href="#" id="dm" class="list-group-item list-group-item-action border-1"><?php echo $row['dm_name'];?></a>

<?php
		}
	}
	*/
	
		$dm_query = "select dm_name from domain 
				 where (dm_subrole='$subrole')";
		$dm_query_result = mysqli_query($conn,$dm_query);
		if(mysqli_num_rows($dm_query_result)>0){
			while($row=mysqli_fetch_array($dm_query_result)){
		?>
			<a href="#" id="dm" class="list-group-item list-group-item-action border-1"><?php echo $row['dm_name'];?></a>
		<?php
			}
		}
	
?>