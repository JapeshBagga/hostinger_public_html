<?php
require_once "identification.php";
$user_name=$row['name'];
if(isset($_POST['submit'])){
	$up_fullname = mysqli_real_escape_string($conn, $_POST['up_fullname']);
	$up_father = mysqli_real_escape_string($conn, $_POST['up_father']);
	$up_mother = mysqli_real_escape_string($conn, $_POST['up_mother']);
	$up_email = mysqli_real_escape_string($conn, $_POST['up_email']);
	$up_age = mysqli_real_escape_string($conn, $_POST['up_age']);
	$up_gender	= mysqli_real_escape_string($conn, $_POST['up_gender']);
	$up_height = mysqli_real_escape_string($conn, $_POST['up_height']);
	$up_hobbies = mysqli_real_escape_string($conn, $_POST['up_hobbies']);
	$up_dob = mysqli_real_escape_string($conn, $_POST['up_dob']);
	$up_phone = mysqli_real_escape_string($conn, $_POST['up_phone']);
	$up_married = mysqli_real_escape_string($conn, $_POST['up_married']);
	$up_religion = mysqli_real_escape_string($conn, $_POST['up_religion']);
	$up_about = mysqli_real_escape_string($conn, $_POST['up_about']);
	
	$up_address = mysqli_real_escape_string($conn, $_POST['up_address']);
	$up_city = mysqli_real_escape_string($conn, $_POST['up_city']);
	$up_state = mysqli_real_escape_string($conn, $_POST['up_state']);
	$up_postcode = mysqli_real_escape_string($conn, $_POST['up_postcode']);
	$up_nationality = mysqli_real_escape_string($conn, $_POST['up_nationality']);
	
	$up_10_school = mysqli_real_escape_string($conn, $_POST['up_10_school']);
	$up_10_city = mysqli_real_escape_string($conn, $_POST['up_10_city']);
	$up_10_state = mysqli_real_escape_string($conn, $_POST['up_10_state']);
	$up_10_cgpa = mysqli_real_escape_string($conn, $_POST['up_10_cgpa']);
	$up_10_board = mysqli_real_escape_string($conn, $_POST['up_10_board']);
	$up_10_yop = mysqli_real_escape_string($conn, $_POST['up_10_yop']);
	
	$up_12_school = mysqli_real_escape_string($conn, $_POST['up_12_school']);
	$up_12_city = mysqli_real_escape_string($conn, $_POST['up_12_city']);
	$up_12_state = mysqli_real_escape_string($conn, $_POST['up_12_state']);
	$up_12_cgpa = mysqli_real_escape_string($conn, $_POST['up_12_cgpa']);
	$up_12_board = mysqli_real_escape_string($conn, $_POST['up_12_board']);
	$up_12_yop = mysqli_real_escape_string($conn, $_POST['up_12_yop']);
	
	$up_ug_college = mysqli_real_escape_string($conn, $_POST['up_ug_college']);
	$up_ug_city = mysqli_real_escape_string($conn, $_POST['up_ug_city']);
	$up_ug_state = mysqli_real_escape_string($conn, $_POST['up_ug_state']);
	$up_ug_cgpa = mysqli_real_escape_string($conn, $_POST['up_ug_cgpa']);
	$up_ug_university = mysqli_real_escape_string($conn, $_POST['up_ug_university']);
	$up_ug_yop = mysqli_real_escape_string($conn, $_POST['up_ug_yop']);
	
	$up_pg_college = mysqli_real_escape_string($conn, $_POST['up_pg_college']);
	$up_pg_city = mysqli_real_escape_string($conn, $_POST['up_pg_city']);
	$up_pg_state = mysqli_real_escape_string($conn, $_POST['up_pg_state']);
	$up_pg_cgpa = mysqli_real_escape_string($conn, $_POST['up_pg_cgpa']);
	$up_pg_university = mysqli_real_escape_string($conn, $_POST['up_pg_university']);
	$up_pg_yop = mysqli_real_escape_string($conn, $_POST['up_pg_yop']);
	
	$up_work_designation = mysqli_real_escape_string($conn, $_POST['up_work_designation']);
	$up_work_company = mysqli_real_escape_string($conn, $_POST['up_work_company']);
	$up_work_address = mysqli_real_escape_string($conn, $_POST['up_work_address']);
	$up_work_start = mysqli_real_escape_string($conn, $_POST['up_work_start']);
	$up_work_end = mysqli_real_escape_string($conn, $_POST['up_work_end']);
	$up_work_desc = mysqli_real_escape_string($conn, $_POST['up_work_desc']);
	
	$up_career = mysqli_real_escape_string($conn, $_POST['up_career']);
	$up_por = mysqli_real_escape_string($conn, $_POST['up_por']);
	$up_interest = mysqli_real_escape_string($conn, $_POST['up_interest']);
	
	// Setting up the timezone.
	date_default_timezone_set('Asia/Calcutta');
	$date=date("d M Y");
	$time=date("H:i A");
	$up_date = $time." ".$date;
		

	if(empty($_FILES['up_image']['tmp_name']) or empty($_FILES['up_work_resume']['tmp_name'])){
	
		$up_query = "insert into user_profile (
		up_login_id,up_fullname,up_father,up_mother,up_email,up_age,up_gender,up_height,up_hobbies,up_dob,up_phone,up_married,up_religion,up_about,
		up_address,up_city,up_state,up_postcode,up_nationality,
		up_10_school,up_10_city,up_10_state,up_10_cgpa,up_10_board,up_10_yop,
		up_12_school,up_12_city,up_12_state,up_12_cgpa,up_12_board,up_12_yop,
		up_ug_college,up_ug_city,up_ug_state,up_ug_cgpa,up_ug_university,up_ug_yop,
		up_pg_college,up_pg_city,up_pg_state,up_pg_cgpa,up_pg_university,up_pg_yop,
		up_work_designation,up_work_company,up_work_address,up_work_start,up_work_end,up_work_desc,
		up_career,up_por,up_interest,
		up_date
		)
		values (
		'$login_id','$up_fullname','$up_father','$up_mother','$up_email','$up_age','$up_gender','$up_height','$up_hobbies','$up_dob','$up_phone','$up_married','$up_religion','$up_about',
		'$up_address','$up_city','$up_state','$up_postcode','$up_nationality',
		'$up_10_school','$up_10_city','$up_10_state','$up_10_cgpa','$up_10_board','$up_10_yop',
		'$up_12_school','$up_12_city','$up_12_state','$up_12_cgpa','$up_12_board','$up_12_yop',
		'$up_ug_college','$up_ug_city','$up_ug_state','$up_ug_cgpa','$up_ug_university','$up_ug_yop',
		'$up_pg_college','$up_pg_city','$up_pg_state','$up_pg_cgpa','$up_pg_university','$up_pg_yop',
		'$up_work_designation','$up_work_company','$up_work_address','$up_work_start','$up_work_end','$up_work_desc',
		'$up_career','$up_por','$up_interest',
		'$up_date'
		)";
		if(mysqli_query($conn, $up_query)){
			$query_first_entry = "select entry from login where (email='$email' and password='$password' and role='$role')";
			$query_first_result = mysqli_query($conn, $query_first_entry);
			$query_first_row = mysqli_fetch_assoc($query_first_result);
			$new_entry = $query_first_row['entry']+1;
			$quer_update = "update login set entry = '$new_entry' where (email='$email' and password='$password' and role='$role')";
			mysqli_query($conn,$quer_update);
			header('location:leaderboard.php');
		}
	}
	else{
		$target_directory = "files/";
		$target_file = $target_directory.basename($_FILES["up_image"]["name"]);
		$filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$up_image = $target_directory.uniqid('', true).".".$filetype;
		
		$target_file = $target_directory.basename($_FILES["up_work_resume"]["name"]);
		$filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$up_work_resume = $target_directory.uniqid('', true).".".$filetype;
		move_uploaded_file($_FILES["up_image"]["tmp_name"],$st_image);
		move_uploaded_file($_FILES["up_work_resume"]["tmp_name"],$st_resume);
		
		$up_query = "insert into user_profile (
		up_login_id,up_fullname,up_father,up_mother,up_email,up_age,up_gender,up_height,up_dob,up_phone,up_married,up_religion,up_about,up_image,
		up_address,up_city,up_state,up_postcode,up_nationality,
		up_10_school,up_10_city,up_10_state,up_10_cgpa,up_10_board,up_10_yop,
		up_12_school,up_12_city,up_12_state,up_12_cgpa,up_12_board,up_12_yop,
		up_ug_college,up_ug_city,up_ug_state,up_ug_cgpa,up_ug_university,up_ug_yop,
		up_pg_college,up_pg_city,up_pg_state,up_pg_cgpa,up_pg_university,up_pg_yop,
		up_work_designation,up_work_company,up_work_address,up_work_start,up_work_end,up_work_desc,up_work_resume,
		up_career,up_por,up_interest,
		up_date
		)
		values (
		'$login_id','$up_fullname','$up_father','$up_mother','$up_email','$up_age','$up_gender','$up_height','$up_dob','$up_phone','$up_married','$up_religion','$up_about','$up_image',
		'$up_address','$up_city','$up_state','$up_postcode','$up_nationality',
		'$up_10_school','$up_10_city','$up_10_state','$up_10_cgpa','$up_10_board','$up_10_yop',
		'$up_12_school','$up_12_city','$up_12_state','$up_12_cgpa','$up_12_board','$up_12_yop',
		'$up_ug_college','$up_ug_city','$up_ug_state','$up_ug_cgpa','$up_ug_university','$up_ug_yop',
		'$up_pg_college','$up_pg_city','$up_pg_state','$up_pg_cgpa','$up_pg_university','$up_pg_yop',
		'$up_work_designation','$up_work_company','$up_work_address','$up_work_start','$up_work_end','$up_work_desc','$up_work_resume',
		'$up_career','$up_por','$up_interest',
		'$up_date'
		)";
		if(mysqli_query($conn, $up_query)){
			$query_first_entry = "select entry from login where (email='$email' and password='$password' and role='$role')";
			$query_first_result = mysqli_query($conn, $query_first_entry);
			$query_first_row = mysqli_fetch_assoc($query_first_result);
			$new_entry = $query_first_row['entry']+1;
			$quer_update = "update login set entry = '$new_entry' where (email='$email' and password='$password' and role='$role')";
			mysqli_query($conn,$quer_update);
			header('location:leaderboard.php');
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Registeration | JoBaskit</title>

  <?php require_once 'requires/top-scripts.php' ?>
  <style>
    .dz-message {
      padding:2rem 1rem;
    }

  </style>
  
</head>
<body>
   <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      
      <!----LOGO CODE or BRAND-->
      <?php require_once 'requires/logo.php' ?>

      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="leaderboard.php">
                <i class="ni ni-tv-2"></i>
                <span class="nav-link-text">Leaderboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="introduction.php">
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Self-Introduction</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="aptitude-quizes.php">
                <i class="ni ni-bullet-list-67"></i>
                <span class="nav-link-text">Quizes</span>
              </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Japesh</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                    <i class="ni ni-single-02"></i>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $user_name;?></span>
                  </div>
              </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 150px; background-image: url(img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <!-- <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello Jesse</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#!" class="btn btn-neutral">Edit profile</a>
          </div>
        </div>
      </div> -->
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12 order-xl-2">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Student Performa </h3>
                </div>
                <!-- <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
              </div>
            </div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <h6 class="heading-small text-muted mb-4">Personal information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Full Name</label>
                        <input name="up_fullname" type="text" id="input-username" class="form-control" placeholder="Full Name" value="<?php echo $user_name;?>">
                        <div class="valid-feedback">
                            Looks good!
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Father Name</label>
                        <input name="up_father" type="text" id="input-username" class="form-control" placeholder="Father Name">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Mother Name</label>
                        <input name="up_mother" type="text" id="input-username" class="form-control" placeholder="Mother Name">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input name="up_email" type="email" id="input-email" class="form-control" placeholder="jesse@example.com" value="<?php echo $email;?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="age">Age</label>
                        <input name="up_age" type="number"  min=14 max=50 id="age" class="form-control" placeholder="Age">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="gender">Gender</label>
                        <select class="form-control" name="up_gender">
                          <option disabled>Gender</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="Height-username">Height</label>
                        <input name="up_height" type="text" id="Height-username" class="form-control" placeholder="Height">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="Hobbies" class="form-control-label">Hobbies</label>
                        <input name="up_hobbies" id="Hobbies" class="form-control" placeholder="Hobbies" type="text">
                      </div>
                    </div>
                    
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="example-date-input" class="form-control-label">Date Of Birth</label>
                        <input class="form-control" name="up_dob" type="date" value="2018-11-23" id="example-date-input">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="example-tel-input" class="form-control-label">Phone</label>
                        <input class="form-control" type="tel" name="up_phone" placeholder="(+91)98888-89444" id="example-tel-input">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="Martial Status" class="form-control-label">Martial Status</label>
                        <select class="form-control" name="up_married">
                          <option disabled>Martial Status</option>
                          <option value="married">Married</option>
                          <option value="single">Single</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="Religion" class="form-control-label">Religion</label>
                        <input class="form-control" name="up_religion" type="text" id="Religion" placeholder="Religion">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="Job Description" class="form-control-label">About You</label>
                        <textarea rows="3" name="up_about" id="About You" class="form-control" placeholder="About You"></textarea>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label for="image" class="form-control-label">Profile Picture</label>
                      <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-dropzone-url="http://">
                        <div class="fallback">
                          <div class="custom-file">
                            <input type="file" name="up_image" class="custom-file-input" id="projectCoverUploads">
                            <label class="custom-file-label" for="projectCoverUploads">Upload your professional profile image here</label>
                          </div>
                        </div>
                        <div class="dz-preview dz-preview-single">
                          <div class="dz-preview-cover">
                            <img class="dz-preview-img" src="..." alt="..." data-dz-thumbnail>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-5" />

                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input name="up_address" id="input-address" class="form-control" placeholder="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input name="up_city" type="text" id="input-city" class="form-control" placeholder="City">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">State</label>
                        <input name="up_state" type="text" id="input-country" class="form-control" placeholder="State">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="form-control-label" for="postal-code">Postal Code</label>
                        <input name="up_postcode" id="postal-code" class="form-control" placeholder="Postal Code" type="text">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country"> Nationality</label>
                        <input name="up_nationality" type="text" id="input-postal-code" class="form-control" placeholder=" Nationality">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-5" />

                <!-- 10 Education -->
                <h6 class="heading-small text-muted mb-4">Matriculation(10th)</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-School">Institute Name</label>
                        <input name="up_10_school" type="text" id="input-School" class="form-control" placeholder="School Name">
                        <div class="valid-feedback">
                            Looks good!
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="school-city">City</label>
                        <input name="up_10_city" type="text" id="school-city" class="form-control" placeholder="City">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="school-State">State</label>
                        <input name="up_10_state" type="text" id="school-State" class="form-control" placeholder="State">
                      </div>
                    </div>
                    
                  </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="Percentage">Percentage(%)</label>
                        <input name="up_10_cgpa" type="text" id="Percentage" class="form-control" placeholder="Percentage(%)">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Board</label>
                        <input name="up_10_board" type="text" id="input-text" class="form-control" placeholder="State or Central Board">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="Year of Passing">Year of Passing</label>
                        <input class="form-control" name="up_10_yop" type="month" id="Year_of_Passing">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-5" />

                <!-- 12 Education -->
                <h6 class="heading-small text-muted mb-4">Secondary Education(12th)</h6>
                <div class="pl-lg-4">

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-School">Institute</label>
                        <input name="up_12_school" type="text" id="input-School" class="form-control" placeholder="School Name">
                        <div class="valid-feedback">
                            Looks good!
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="school-city">City</label>
                        <input name="up_12_city" type="text" id="school-city" class="form-control" placeholder="City">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="school-State">State</label>
                        <input name="up_12_state" type="text" id="school-State" class="form-control" placeholder="State">
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="Percentage">Percentage(%)</label>
                        <input name="up_12_cgpa" type="text" id="Percentage" class="form-control" placeholder="Percentage(%)">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Board</label>
                        <input name="up_12_board" type="text" id="input-text" class="form-control" placeholder="State or Central Board">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="Year of Passing">Year of Passing</label>
                        <input class="form-control" name="up_12_yop" type="month" id="Year_of_Passing">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-5" />

                <!-- UG Education -->
                <h6 class="heading-small text-muted mb-4">Undergraduate(UG)</h6>
                <div class="pl-lg-4">

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-College">Institute</label>
                        <input name="up_ug_college" type="text" id="input-College" class="form-control" placeholder="College Name">
                        <div class="valid-feedback">
                            Looks good!
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="College-city">City</label>
                        <input name="up_ug_city" type="text" id="College-city" class="form-control" placeholder="City">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="College-State">State</label>
                        <input name="up_ug_state" type="text" id="College-State" class="form-control" placeholder="State">
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="CollegeCGPA">Percentage(%)</label>
                        <input name="up_ug_cgpa" type="text" id="CollegeCGPA" class="form-control" placeholder="Percentage(%)">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="College-Board">University</label>
                        <input name="up_ug_university" type="text" id="College-Board" class="form-control" placeholder="Central or State University">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="CollegeYear of Passing">Year of Passing</label>
                        <input class="form-control" name="up_ug_yop" type="month" id="CollegeYear_of_Passing">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-5" />

                <!-- PG Education -->
                <h6 class="heading-small text-muted mb-4">Postgraduate(PG)</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-College">Institute</label>
                        <input name="up_pg_college" type="text" id="input-College" class="form-control" placeholder="College Name">
                        <div class="valid-feedback">
                            Looks good!
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="College-city">City</label>
                        <input name="up_pg_city" type="text" id="College-city" class="form-control" placeholder="City">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="College-State">State</label>
                        <input name="up_pg_state" type="text" id="College-State" class="form-control" placeholder="State">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="CollegeCGPA">Percentage(%)</label>
                        <input name="up_pg_cgpa" type="text" id="CollegeCGPA" class="form-control" placeholder="Percentage(%)">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="College-Board">University</label>
                        <input name="up_pg_university" type="text" id="College-Board" class="form-control" placeholder="Central or State University">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="CollegeYear of Passing">Year of Passing</label>
                        <input class="form-control" name="up_pg_yop" type="month" id="CollegeYear_of_Passing">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-5" />

                <!-- Work Experience -->
                <h6 class="heading-small text-muted mb-4">Work Experience</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="Designation">Designation</label>
                        <input name="up_work_designation" type="text" id="Designation" class="form-control" placeholder="Designation">
                        <div class="valid-feedback">
                            Looks good!
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="Company name">Company name</label>
                        <input name="up_work_company" id="Company name" class="form-control" placeholder="Company name" type="text">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="work_company_address">Address</label>
                        <input name="up_work_address" type="text" id="work_company_address" class="form-control" placeholder="Address with city, state">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="Start_Date" class="form-control-label">Start Date</label>
                        <input class="form-control" name="up_work_start" type="date" min="2010-06-23" max="2025-10-23" id="Start_Date">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="End_Date" class="form-control-label">End Date</label>
                        <input class="form-control" name="up_work_end" type="date" min="2010-06-23" max="2025-10-23" id="End_Date">
                      </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                      <div class="form-group">
                        <input type="file" name="up_work_resume" class="custom-file-input" id="customFileLang" lang="en">
                        <label class="custom-file-label" for="customFileLang">Resume (PDF or Docx Only)</label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label for="Job Description" class="form-control-label">Job Description</label>
                        <textarea rows="5" name="up_work_desc" id="Job Description" class="form-control" placeholder="Job Description"></textarea>
                      </div>
                    </div>
                            
                    
                  </div>

                </div>

                <!-- Work Experience -->
                <h6 class="heading-small text-muted mb-4">Career & Skills</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="Designation">Career Objective</label>
                        <input name="up_career" type="text" id="Designation" class="form-control" placeholder="Career Objective">
                        <div class="valid-feedback">
                            Looks good!
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="Position name">Position of Responsibilities</label>
                        <input name="up_por" id="Position name" class="form-control" placeholder="Position of Responsibilities" type="text">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="Areas">Areas of Interest</label>
                        <input name="up_interest" id="Areas" class="form-control" placeholder="Areas of Interest" type="text">
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="my-5" />

                <div class="row">
                  <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12"></div>
                  <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                    <button type="submit" name="submit" class="btn btn-custon-rounded-three btn-warning">Submit</button>
                  </div>
                  <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>

                  <br><br>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      

    </div>

  </div>

<!-- Optional JS -->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

<?php require_once 'requires/end-scripts.php' ?>
</body>

</html>