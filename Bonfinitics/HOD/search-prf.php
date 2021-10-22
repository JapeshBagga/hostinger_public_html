<?php require_once 'identification.php';?> 
<?php
	$prf_query = "select prf_id,prf_name,prf_dept,prf_image,prf_latest_qualification from professor 
	where (prf_name LIKE '%".$_POST['name']."%' or prf_dept LIKE '%".$_POST['name']."%' or prf_latest_qualification LIKE '%".$_POST['name']."%')";
	$prf_query_result = mysqli_query($conn,$prf_query);
	if(mysqli_num_rows($prf_query_result)>0){
		while($row=mysqli_fetch_array($prf_query_result)){
?>
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
			<div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
				<div class="panel-body custom-panel-jw">
					<div class="social-media-in">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div>
					<img alt="logo" class="img-circle m-b" src="img/contact/1.jpg">
					<h3><a href=""><?php echo $row['prf_name'];?></a></h3>
					<p class="all-pro-ad"><?php echo $row['prf_dept'];?></p>
					<p>
					   <?php echo $row['prf_latest_qualification'];?>
					</p>
				</div>
			</div>
		</div>
<?php
}
	}
	else
		echo "<center>No Data Found.</center>";
?>