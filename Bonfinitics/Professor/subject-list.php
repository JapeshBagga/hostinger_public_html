<?php require_once 'identification.php';?> 
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Subject List | BonFinitics - Makos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <?php require 'top-scripts.php';?> 
</head>
<body>

    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.php"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <!-- <a class="has-arrow active" href="index.php">
                                    <span class="educate-icon educate-home icon-wrap"></span>
                                    <span class="mini-click-non">Dashboard</span>
                            </a> -->
                            <a title="Home" href="index.php" aria-expanded="false"><span class="educate-icon educate-home icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                        </li>
                        <li>
                            <a title="Time Table" href="timetable.php" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Time Table</span></a>
                        </li>
                        <li>
                            <a title="Attendance" href="attendance.php" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Attendance</span></a>
                        </li>
                        <li class="active">
                            <a class="has-arrow" href="all-subject.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Subjects</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Subject" href="subject-list.php"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-sub-pro">Subjects List</span></a></li>

                                <li><a title="Quizes Summary" href="quizes.php" aria-expanded="false"><span class="educate-icon educate-message icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Quizes</span></a></li>    
                                
                                <li> <a title="Assignments" href="assignments.php" aria-expanded="false"><span class="educate-icon educate-message icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Assignments</span></a></li> 

                                <li><a title="Exam" href="exams.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"  aria-hidden="true"></span> <span class="mini-click-non">Exam</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
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
                                            <li><span class="bread-blod">Subject List</span>
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
        <div class="courses-area">
            <div class="container-fluid">
                <div class="row" id="output">
				<?php
					require_once "connection.php";
					$sub_query = "select subject_id,subject_name,subject_dept,subject_student from subject";
					$sub_query_result = mysqli_query($conn,$sub_query);
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
			url:'search-subject.php',
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

