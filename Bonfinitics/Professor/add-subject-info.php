<?php require_once 'identification.php';?> 
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Subject Info | BonFinitics - Makos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                                            <li><span class="bread-blod">Add Subject Info</span>
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
       
        <!-- tinymce Start-->
        <div class="tinymce-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 style="text-align:center;">Subject Name</h3>
                    </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="tinymce-single">
                            <div class="alert-title">
                                <h4>Update Subject Summary or Info</h4>
                                <p></p>
                            </div>
                            <div id="summernote2">
                                <div class="note-editable panel-body" contenteditable="true" style="height: 200px;">
                                    <!-- <h2 style="font-family: &quot;Open Sans&quot;, sans-serif; font-size: 20px;">
                                        <span style="font-weight: bold;">Heading's .. </span>
                                    </h2> -->
                                    <p style="color:rgb(51, 51, 51);font-size: 14px;line-height: 24px;">Info..1</p>
                                    <p style="font-size: 14px; line-height: 24px;"><span style="color: rgb(206, 0, 0);">info..2</span>
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="tinymce-single">
                            <div class="alert-title">
                                <h4>Upload Image or Video</h4>
                                <p></p>
                            </div>
                            <div class="dropzone-pro mg-tb-30">
                                <div id="dropzone1" class="multi-uploader-cs">
                                    <form action="/upload" class="dropzone dropzone-custom needsclick" id="demo1-upload">
                                        <div class="dz-message needsclick download-custom">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            <h2>Drop files here or click to upload.</h2>
                                            <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12"></div>
                <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                    <a href="#" ><button type="button" class="btn btn-custon-rounded-three btn-primary">Submit</button> </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
            </div>
        </div>

        <!-- tinymce End-->
        
        <?php require 'footer.php';?> 
    </div>

    
    <?php require 'end-scripts.php';?> 
</body>

</html>

