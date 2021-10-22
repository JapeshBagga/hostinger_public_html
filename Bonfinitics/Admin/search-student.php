<?php require_once 'identification.php';?> 
<?php
	$st_query = "select st_first_name,st_last_name,st_dept, st_roll_no from student 
	where (st_first_name LIKE '%".$_POST['name']."%' or st_last_name LIKE '%".$_POST['name']."%' or st_dept LIKE '%".$_POST['name']."%' or st_roll_no LIKE '%".$_POST['name']."%')";
	$st_query_result = mysqli_query($conn,$st_query);
	if(mysqli_num_rows($st_query_result)>0){
		while($row=mysqli_fetch_array($st_query_result)){
?>
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<div class="student-inner-std res-mg-b-30">
				<div class="student-img">
					<img src="img/student/1.jpg" alt="" />
				</div>
				<div class="student-dtl">
					<a href="student-info.php"><h2><?php echo $row['st_first_name'];?> <?php echo $row['st_last_name'];?></h2></a>
					<p class="dp"><b>Department : </b><?php echo $row['st_dept'];?></p>
					<p class="dp-ag"><b>Roll No.</b> <?php echo $row['st_roll_no'];?></p>
				</div>
			</div>
		</div>
<?php
}
	}
	else
		echo "<center>No Data Found.</center>";
?>