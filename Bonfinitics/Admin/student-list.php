<?php require_once 'identification.php';?> 
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student List | BonFinitics - Makos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <?php require 'top-scripts.php';?> 
</head>
<body>

    <!-- Start Left menu area -->
    <?php require 'side-nav.php';?> 
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <!-- logo area starts -->
            <?php require 'logo.php';?> 
        <!-- logo area ends  -->

        <div class="header-advance-area">
            <!-- header top area starts -->
            <?php require 'top-nav.php';?> 
            <!-- header top area ends --> 

            <!-- Mobile Menu start -->
                <?php require 'mobile-nav.php';?> 
            <!-- Mobile Menu end -->
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input id="search" type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Student List</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Single pro tab review Start-->
        <div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row" id="output">
				<?php
					require_once "connection.php";
					$st_query = "select st_id,st_first_name,st_last_name,st_dept,st_roll_no from student";
					$st_query_result = mysqli_query($conn,$st_query);
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
				?>
                </div>
            </div>
        </div>
        
        <?php require 'footer.php';?> 
    </div>

    <?php require 'end-scripts.php';?>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#search").keyup(function(){
			$('#output').html('')
		  $.ajax({
			type:'POST',
			url:'search-student.php',
			data:{
			  name:$("#search").val(),
			},
			success:function(data){
			  $("#output").html(data);
			}
		  });
		});
	});
	</script>
</body>

</html>

