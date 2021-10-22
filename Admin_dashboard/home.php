<?php
session_start();
if (empty($_SESSION['useremail'])) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
        
       window.location.href='signin.php';
      </SCRIPT>");
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="profile.css">
  <link href="css/registration.css" rel="stylesheet">
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="signout.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />

</head>
<style>
  .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
    background-color: #f1f1f1
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .dropdown:hover .dropbtn {
    background-color: #3e8e41;
  }
</style>
<style>
  .card {
    background: white;
    padding: 60px;
    border-radius: 4px;
    box-shadow: 0 2px 3px #C8D0D8;
    display: inline-block;
    margin: 0 auto;
  }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">


    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->


        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>


            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <img src="user.png" width="30">

          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            <div class="dropdown-divider"></div>
            <a href="profile.html" class="dropdown-item">
              Profile
            </a>
            <a href="setting.html" class="dropdown-item">
              settings
            </a>
            <a href="#" class="dropdown-item" id="signout">
              Signout
            </a>


            <div class="dropdown-divider"></div>

          </div>
        </li>

      </ul>
  </div>
  </div>
  </div>

  </li>
  </ul>
  </nav>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background-color: white; height: 60px">
      <img src="#" alt=" Logo" class="brand-image" style="width: 200px">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="padding-left: 0px;">
      <!-- Sidebar user panel (optional) -->


      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li>
            <a href="index.html" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p style="font-size: 30px;">
                Admin

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p style="font-size: 20px;">
                Jobaskit
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="registration.php" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p style="font-size: 20px;">
                    Registration
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="home.php" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p style="font-size: 20px;">
                    Home
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="college_feature.php" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p style="font-size: 20px;">
                    College Feature
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="company_feature.php" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p style="font-size: 20px;">
                    Company Feature
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="college_guide.php" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p style="font-size: 20px;">
                    College Guide
                  </p>
                </a>
              </li><li class="nav-item">
                <a href="company_guide.php" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p style="font-size: 20px;">
                    Company Guide
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="import.php" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p style="font-size: 20px;">
                    Import
                  </p>
                </a>
              </li>






            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid ">

        <!-- <div class="container"> -->

        <section class="get-in-touch">
          <h1 class="title2">Home</h1>
          <p class="title1">Please fill the required details</p>
          <form action="homeval.php" method="post" class="contact-form row">
            <!-- <div class="form-field col-lg-12">
              <select name="mylist" class="input-text js-input" style="color: #5543ca; background-color: #fff;"
                onchange='checkvalue(this.value)'>
                <option value="" disabled selected hidden>
                  Choose</option>
                <option value="Institute">Institute</option>
                <option value="Company">Company</option>

              </select>
            </div> -->
            <div class="form-field col-lg-12" style="margin-top: 0px; margin-bottom: 0px;">
              <input name="title" class="input-text js-input" type="text">
              <label class="label">Title</label>
            </div>
            <div class="form-field col-lg-12" style="margin-top: 0px; margin-bottom: 0px;">
              <input name="description" class="input-text js-input" type="text">
              <label class="label">Description</label>
            </div>
            <div class="form-field col-lg-12 " style="margin-top: 0px; margin-bottom: 0px;">
              <input name="keyword" class="input-text js-input" type="text">
              <label class="label">Keyword</label>
            </div>

            <div class="form-field col-lg-12" style="margin-top: 0px; margin-bottom: 0px;">
              <input class="submit-btn" type="submit" name="submit" value="Submit">
            </div>

          </form>
        </section>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="text-align: center;">
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">jobaskit</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">

    </div>
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  </div>
  <div class="popup">
    <div class="popup-content">
      <img src="close.png" alt="close" width="10" class="close">



      <img src="user.png" width="120">
      <h1>Thank You</h1>
      <p>You have Signed out Successfully!</p>
    </div>


  </div>

  <!-- ./wrapper -->

  <!-- jQuery -->
  <script>

    document.getElementById("signout").addEventListener("click", function () {
      document.querySelector(".popup").style.display = "flex";
    });

    document.querySelector(".close").addEventListener("click", function () {
      document.querySelector(".popup").style.display = "none";
    });
  </script>
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!--css Stylesheet-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <!--popper.js-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>