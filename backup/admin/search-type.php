
<?php
require_once "connection.php";
	$type_query = "select type_name from type 
	where (type_name LIKE '%".$_POST['query']."%')";
	$type_query_result = mysqli_query($conn,$type_query);
	if(mysqli_num_rows($type_query_result)>0){
		while($row=mysqli_fetch_array($type_query_result)){
?>
		        <a href="#" id="tp" class="list-group-item list-group-item-action border-1"><?php echo $row['type_name'];?></a>

<?php
		}
	}
?>