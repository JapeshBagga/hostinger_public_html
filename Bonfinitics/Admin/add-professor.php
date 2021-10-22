<?php require_once 'identification.php';?> 
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Professor | BonFinitics - Makos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require 'top-scripts.php';?>
	<style>
	.form-field{
		margin-left:20px;
		margin-right:20px;
		margin-top:20px;
	}
	</style>
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
                        <!-- <li>
                            <a class="has-arrow active" href="index.php">
                                    <span class="educate-icon educate-home icon-wrap"></span>
                                    <span class="mini-click-non">Dashboard</span>
                            </a>
                            <a title="Landing Page" href="index.php" aria-expanded="false"><span class="educate-icon educate-home icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                        </li> -->
                        <li>
                            <a title="Upcoming Events" href="index.php" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Events</span></a>
                        </li>
                        <li>
                            <a title="Attendance" href="attendance.php" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Attendance</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="department-list.php" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Departments</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Departments List" href="department-list.php"><span class="mini-sub-pro">Departments List</span></a></li>
                                <li><a title="Add Departments" href="add-department.php"><span class="mini-sub-pro">Add Departments</span></a></li>
                                <!-- <li><a title="Edit Departments" href="edit-department.php"><span class="mini-sub-pro">Edit Departments</span></a></li> -->
                            </ul>
                        </li>
                        <li class="active"> 
                            
                            <a class="has-arrow" href="professor-list.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professors</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="professor-list.php"><span class="mini-sub-pro">Professors List</span></a></li>
                                <li><a title="Add Professor" href="add-professor.php"><span class="mini-sub-pro">Add Professor</span></a></li>
                                <!-- <li><a title="Edit Professor" href="edit-professors.php"><span class="mini-sub-pro">Edit Professor</span></a></li>
                                <li><a title="Professor Profile" href="professor-profile.php"><span class="mini-sub-pro">Professor Profile</span></a></li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="subject-list.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Subjects</span></a>
                            <!-- <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="subject-list.php"><span class="mini-sub-pro">Subjects List</span></a></li> 
                                <li><a title="Add Courses" href="add-subject.php"><span class="mini-sub-pro">Add Subject</span></a></li>
                                <li><a title="Edit Courses" href="edit-subject.php"><span class="mini-sub-pro">Edit Subject</span></a></li> 
                            </ul>  -->
                        </li>
                        <li>
                            <a href="student-list.php" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Students</span></a>
                            <!-- <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="student-list.php"><span class="mini-sub-pro">Students List</span></a></li> 
                                <li><a title="Add Students" href="add-student.php"><span class="mini-sub-pro">Add Student</span></a></li> 
                                <li><a title="Edit Students" href="edit-student.php"><span class="mini-sub-pro">Edit Student</span></a></li>
                                <li><a title="Students Profile" href="student-profile.php"><span class="mini-sub-pro">Student Profile</span></a></li> 
                            </ul> -->
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Library</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="library-assets.php"><span class="mini-sub-pro">Library Assets</span></a></li>
                                <li><a title="Add Library" href="add-library-assets.php"><span class="mini-sub-pro">Add Library Asset</span></a></li>
                                <!-- <li><a title="Edit Library" href="edit-library-assets.html"><span class="mini-sub-pro">Edit Library Asset</span></a></li> -->
                            </ul>
                        </li>

                        <!-- <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a title="Login" href="login.php"><span class="mini-sub-pro">Login</span></a></li>
                                <li><a title="Register" href="register.php"><span class="mini-sub-pro">Register</span></a></li>
                                <li><a title="Lock" href="lock.php"><span class="mini-sub-pro">Lock</span></a></li>
                                <li><a title="Password Recovery" href="password-recovery.php"><span class="mini-sub-pro">Password Recovery</span></a></li>
                                <li><a title="404 Page" href="404.php"><span class="mini-sub-pro">404 Page</span></a></li>
                                <li><a title="500 Page" href="500.php"><span class="mini-sub-pro">500 Page</span></a></li>
                            </ul> -->
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

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add Professor</span>
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
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="payment-adress">
                            <h2>Add Professor</h2>
                        </div>
						<div class="row">
							<form action="insert-professor.php" method="post" enctype="multipart/form-data" class="form">
								<div class="row form-field">
									<div class="col-sm-6 ">
										<div class="form-group">
											<input name="prf_name" type="text" class="form-control" placeholder="Professor Full Name">
										</div>
										<div class="form-group">
											<input name="prf_address" type="text" class="form-control" placeholder="Address">
										</div>
										<div class="form-group">
											<input name="prf_contact" type="text" class="form-control" placeholder="Contact no.">
										</div>
										<div class="form-group">
											<input name="prf_dob" id="finish" type="text" class="form-control" placeholder="Date of Birth">
										</div>
										<div class="form-group">
											<input name="prf_email" id="" type="text" class="form-control" placeholder="E-Mail">
										</div>
										<div class="form-group">
											<input name="prf_joining_date" type="date" class="form-control" placeholder="Joining Date">
											<span>*Joining Date</span>
										</div>
										<div class="form-group">
											<input name="prf_image" class="form-control" placeholder="Profile Image"type="file" />
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input name="prf_dept" type="text" class="form-control" placeholder="Department">
										</div>
										<div class="form-group">
											<textarea name="prf_latest_qualification" placeholder="Qualification"></textarea>
										</div>
							
										<div class="form-group">
											<select name="prf_gender" class="form-control">
												<option value="none" selected="" disabled="">Select Gender</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>
										<div class="form-group">
											<select name="prf_country" class="form-control">
												<option value="none" selected="" disabled="">Select country</option>
												<option value="India">India</option>
												<option value="Pakistan">Pakistan</option>
												<option value="Amerika">Amerika</option>
												<option value="China">China</option>
												<option value="Dubai">Dubai</option>
												<option value="Nepal">Nepal</option>
											</select>
										</div>
										<div class="form-group">
											<select name="prf_state" class="form-control">
												<option value="none" selected="" disabled="">Select state</option>
												<option value="Punjab">Punjab</option>
												<option value="Tamil Nadu">Tamil Nadu</option>
												<option value="Chennai">Chennai</option>
												<option value="Maharastra">Maharastra</option>
												<option value="Rajastan">Rajastan</option>
												<option value="Gujarat">Gujarat</option>
											</select>
										</div>
										<div class="form-group">
											<select name="prf_city" class="form-control">
												<option value="none" selected="" disabled="">Select city</option>
												<option value="Surat">Surat</option>
												<option value="Baroda">Baroda</option>
												<option value="Navsari">Navsari</option>
												<option value="Baroda">Baroda</option>
												<option value="Surat">Surat</option>
											</select>
										</div>
										
									</div>
									<br/>
									  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
        
        <?php require 'footer.php';?> 
    </div>

    <?php require 'end-scripts.php';?> 
</body>

</html>

