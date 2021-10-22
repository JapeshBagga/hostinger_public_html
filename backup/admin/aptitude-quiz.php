<?php
require_once "identification.php";
if(empty($_SESSION['message_quiz'])){
	$msg= "Insert Quizes";
}
else{
	$msg = $_SESSION['message_quiz'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
	<meta name="author" content="Creative Tim">
	<title>Aptitude Quizes | JoBaskit</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<?php require_once 'requires/top-scripts.php' ?>
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
            <!-- <li class="nav-item">
              <a class="nav-link" href="introduction.php">
                <i class="ni ni-single-02"></i>
                <span class="nav-link-text">Self-Introduction</span>
              </a>
            </li> -->
             <li class="nav-item active">
              <a class="nav-link" href="aptitude-quizes.php">
                <i class="ni ni-bullet-list-67"></i>
                <span class="nav-link-text">Aptitude Quiz</span>
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
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>

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
                        <i class="ni ni-single-02"></i>
                        <!-- <img alt="Image placeholder" src="img/theme/team-1.jpg" class="avatar rounded-circle"> -->
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
                    <span class="mb-0 text-sm  font-weight-bold">Admin@Japesh</span>
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
    <div class="header pb-1 d-flex align-items-center" style="background-image: url(img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <div class="container-fluid">
         <div class="header-body">
           <div class="row align-items-center py-4">
             <div class="col-lg-6 col-7">
               <h6 class="h2 text-white d-inline-block mb-0"><?php 
			   echo $msg;
			   $_SESSION['message_quiz']="Insert Quizes";
			   ?></h6>
               
             </div>
             <div class="col-lg-6 col-5 text-right">
               <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                 <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                   <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                   <!-- <li class="breadcrumb-item"><a href="#"></a></li> -->
                   <li class="breadcrumb-item active" aria-current="page">Aptitude Quiz</li>
                 </ol>
               </nav>
               <!-- <a href="#" class="btn btn-sm btn-neutral">New</a>
               <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
             </div>
           </div>
         </div>
       </div>
       
    </div>
    
    <!-- Header-1 -->
    <div class="header pb-5 d-flex align-items-center" style=" background-size: cover;">
       <div class="container-fluid">
         <div class="header-body">
           <div class="row align-items-center mt-4">
              <div class="col-lg-3 col-3">
                <div class="form-group">
                  <select class="form-control" id="series" data-toggle="select" required>
                    <option value="0" >Quiz Series</option>
                    <option value="1" >Aptitude</option>
                    <option value="2" >Technical</option>
                    <option value="3" >General Knowledge</option>
                    <option value="4" >Newspaper</option>
					<option value="0" >Other</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
					<input class="form-control" type="search" placeholder="Quiz Type" id="search-type" required>
					<div class="list-group" id="show-list-type">
						<!-- Here autocomplete list will be display -->
					</div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <input class="form-control" type="search" placeholder="Domain" id="search-domain" required>
					<div class="list-group" id="show-list-domain">
					<!-- Here autocomplete list will be display -->
					</div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <input class="form-control" type="search" placeholder="Topics" id="search-topic" required>
					<div class="list-group" id="show-list-topic">
						<!-- Here autocomplete list will be display -->
					</div>
                </div>
              </div>
           </div>
         </div>
       </div>
    </div>

    <!-- Quiz content -->
    <div class="container-fluid mt--5">
        <div class="row">
            <div class="col-lg-12 order-xl-1">
              <form id="formvalue" class="form" method="POST" autocomplete="off">
                <div class="card">
                  <div class="card-header" style="padding-bottom: 0rem;">
                    <div class="row">
                      <div class="col-9 text-right">
                        <div class="form-group">
                          <input class="form-control" type="text" name="qust" placeholder="Question" required>
                        </div>
                      </div>
                      <div class="col-3 text-right">
                        <select class="form-control" name="difficulty-level" id="exampleFormControlSelect1">
                          <option value="0">Difficulty Level</option>
						  <option value="1">Easy</option>
                          <option value="2">Medium</option>
                          <option value="3">Difficult</option>
                          <option value="4">Expert</option>
                          <option value="5">Professional</option>
                        </select>
                      </div> 
                    </div>
                  </div>
                  <div class="card-body">
                    <!-- <h6 class="heading-small text-muted mb-4">Introduce Yourself</h6> -->
                    <div class="pl-lg-10">
                        <!-- Description -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6 col-6">
                                  <div class="custom-control custom-checkbox mb-5">
                                    <input class="custom-control-input" id="customCheck1" name="a" value="a" type="checkbox">
                                    <label class="custom-control-label" for="customCheck1"><input class="form-control" type="search" name="opt1" placeholder="optiona" id="example-search-input" required></label>
                                  </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                  <div class="custom-control custom-checkbox mb-5">
                                    <input class="custom-control-input" id="customCheck2" name="b" value="b" type="checkbox">
                                    <label class="custom-control-label" for="customCheck2"><input class="form-control" type="search" name="opt2" placeholder="optionb" id="example-search-input" required></label>
                                  </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                  <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" id="customCheck3" name="c" value="c" type="checkbox">
                                    <label class="custom-control-label" for="customCheck3"><input class="form-control" type="search" name="opt3" placeholder="optionc" id="example-search-input" required></label>
                                  </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                  <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input" id="customCheck4" name="d" value="d" type="checkbox">
                                    <label class="custom-control-label" for="customCheck4"><input class="form-control" type="search" name="opt4" placeholder="optiond" id="example-search-input" required></label>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="card-footer">
                      <div class="row">
                        <div class="col-10 text-left">
						<lable>Tags :</lable>
                            <input type="text" class="form-control" name="tags" value="IQ" data-toggle="tags">
                        </div>
                        <div class="col-2 text-right">
                          <button type="submit" id="submit" name="submit" class="btn btn-custon-rounded-three btn-primary"data-toggle="modal"data-target="#modal-default">Submit</button>
                        </div>      
                      </div>                
                  </div> 
                </div>

<!-- DELETE THIS LINE ONLY TO HIGHLIGHT -->

                <!-- IF THERE IS ERROR  -->

                  <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Warning!</strong> This is a warning alert—check it out!</span>
                        <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                  </div>

                  <!-- IF THERE IS NO ERROR INSERT SUCCESSFULLY -->

                  <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text"><strong>Success!</strong> INSERTED SUCCESSFULLY</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                  </div>

            </form>
        </div>       
        </div>
    </div>
     </div>

    </div>

<?php require_once 'requires/end-scripts.php' ?>
  
<script>
  $(document).ready(function () {
    // Send Search Text to the server
    $("#search-type").keyup(function () {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: "search-type.php",
          method: "post",
          data: {
            query: searchText,
          },
          success: function (response) {
            $("#show-list-type").html(response);
          },
        });
      } else {
        $("#show-list-type").html("");
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "#tp", function () {
      $("#search-type").val($(this).text());
      $("#show-list-type").html("");
    });
  });
</script>

<script>
  $(document).ready(function () {
    // Send Search Text to the server
    $("#search-domain").keyup(function () {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: "search-domain.php",
          method: "post",
          data: {
            query: searchText,
          },
          success: function (response) {
            $("#show-list-domain").html(response);
          },
        });
      } else {
        $("#show-list-domain").html("");
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "#dm", function () {
      $("#search-domain").val($(this).text());
      $("#show-list-domain").html("");
    });
  });
</script>

<script>
  $(document).ready(function () {
    // Send Search Text to the server
    $("#search-topic").keyup(function () {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: "search-topic.php",
          method: "post",
          data: {
            query: searchText,
          },
          success: function (response) {
            $("#show-list-topic").html(response);
          },
        });
      } else {
        $("#show-list-topic").html("");
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "#tc", function () {
      $("#search-topic").val($(this).text());
      $("#show-list-topic").html("");
    });
  });
</script>

<script>
  $(document).ready(function(){
    $("#submit").on('click',function(){
      var series = $("#series").val();
      var type = $("#search-type").val();
      var domain = $("#search-domain").val();
      var topic = $("#search-topic").val();
      var form = $('#formvalue')[0];
      var formdata = new FormData(form);
      formdata.append("series",series);
      formdata.append("type",type);
      formdata.append("domain",domain);
      formdata.append("topic",topic);
      $.ajax({
        url   :"insert-quiz.php",
        data  :formdata,
        type  :"POST",
        processData: false,
        contentType: false,
        cache :false,
        success:function(result){
          alert(result);
          $("#formvalue")[0].reset();
        }
      });
    });
  });    
</script>
  
</body>

</html>