<?php require_once 'identification.php';?> 
<?php
	$sub_query = "select subject_name,subject_semester,subject_dept,subject_student from subject 
	where (subject_name LIKE '%".$_POST['name']."%' or subject_semester LIKE '%".$_POST['name']."%' or subject_dept LIKE '%".$_POST['name']."%' or subject_student LIKE '%".$_POST['name']."%')";
	$sub_query_result = mysqli_query($conn,$sub_query);
	if(mysqli_num_rows($sub_query_result)>0){
	while($row=mysqli_fetch_array($sub_query_result)){
?>
	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
		<div class="courses-inner res-mg-b-30">
			<div class="courses-title">
				<a href="#"><img src="img/courses/1.jpg" alt=""></a>
				<h2><?php echo $row['subject_name'];?></h2>
			</div>
			
			<div class="course-des">
				
				<p><span><i class="fa fa-clock"></i></span> <b>Department:</b> <?php echo $row['subject_dept'];?></p>
				<p><span><i class="fa fa-clock"></i></span> <b>Students:</b> <?php echo $row['subject_student'];?>+</p>
			</div><br>
			<div class="product-buttons">
				<a href="add-subject-info.php"><button type="button" class="btn btn-custon-rounded-three btn-primary"> Add  Contents </button> </a>
			</div>
		</div>
	</div>
<?php
}
}
	else
		echo "<center>No Data Found.</center>";
?>