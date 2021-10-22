
<?php
require_once "connection.php";
	$quiz_query = "select quiz_title from quiz_topic 
				 where (quiz_title LIKE '%".$_POST['query']."%')";
	$quiz_query_result = mysqli_query($conn,$quiz_query);
	if(mysqli_num_rows($quiz_query_result)>0){
		while($row=mysqli_fetch_array($quiz_query_result)){
?>
		        <a href="#" id="tc" class="list-group-item list-group-item-action border-1"><?php echo $row['quiz_title'];?></a>

<?php
		}
	}
?>