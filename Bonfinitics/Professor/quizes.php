<?php require_once 'identification.php';?> 
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Quiz | BonFinitics - Makos</title>
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
                                            <li><span class="bread-blod">Add Quiz</span>
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
                        <h3 style="text-align:center;">Add Quiz Questions</h3>
                    </div>

                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12"></div>
                            <div class="col-lg-10 col-md-10 col-sm-6 col-xs-12">
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right pull-right-pro">Choose Subject</label>
                                        </div>
                                        <br><br>
                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                <div class="form-select-list">
                                                    <select class="form-control custom-select-value" name="account">
                                                    <option value="">Subject</option>
                                                    <option value="United States">Backend</option>
                                                    <option value="United Kingdom">Backend Development</option>
                                                    <option value="Afghanistan">Web tech</option>
                                                    </select>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <br><br>
                        <!-- tinymce start-->
                        <div class="row" id="container">
                            <div class="col-md-12" id="mainsection">
                                <h4 class="card-title" id="ques">Question: </h4>
                                <form class="forms-sample">
                                    <div class="form-group">
                                    <input name[]="first" id="ques" type="text" class="form-control tDes" placeholder="Question">
                                    </div>
                                    <div class="form-group">
                                    <h4>Option's</h4>
                                        <input name[]="Option1" id="one" type="text" class="form-control tDes" placeholder="Option 1">
                                        <input name[]="Option2" id="two" type="text" class="form-control tDes" placeholder="Option 2">
                                        <input name[]="Option3" id="three" type="text" class="form-control tDes" placeholder="Option 3">
                                        <input name[]="Option4" id="four" type="text" class="form-control tDes" placeholder="Option 4">
                                        

                                    </div>
                                    <h4>Select Corect Option</h4>
                                    <div class="form-select-list">
                                        <select class="form-control custom-select-value" id="five" name="account">
                                            <option value="Option1">Option 1</option>
                                            <option value="Option2">Option 2</option>
                                            <option value="Option3">Option 3</option>
                                            <option value="Option4">Option 4</option>
                                        </select>
                                    </div>
                                    <br><br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tinymce End-->

        <!-- Submit button -->
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"></div>
            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                <button id="add" type="button" class="btn btn-success mr-2">Add Question</button>
            </div>                
            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>    
            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                <a href="#" ><button type="button" class="btn btn-custon-rounded-three btn-primary">Submit</button> </a>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"></div>
        </div>

        <br><br>

        <?php require 'footer.php';?> 
    </div>

    <script>
        document.getElementById("add").onclick = function () {
            // const ques_no = 1;
            // document.getElementById("ques").innerHTML = `Question {ques_no}`;
            
            var section = document.getElementById("mainsection");
            var characters = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var characters0 = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var characters1 = "ABCDsdfEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var characters2 = "ABCDEsfsdfsfFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
            var characters3 = "ABCDEsfsdfsfFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxfghfghyz";
            var characters4 = "ABCDklmnopqrstuvwxfghfghyz";

            //specify the length for the new string  
            var lenString = 4;
            var lenString0 = 5;
            var lenString1 = 6;
            var lenString2 = 7;
            var lenString3 = 8;
            var lenString4 = 9;
            var randomstring = '';
            var randomstring0 = '';
            var randomstring1 = '';
            var randomstring2 = ''; 
            var randomstring3 = '';
            var randomstring4 = '';
            

            //loop to select a new character in each iteration  
            for (var i = 0; i < lenString; i++) {
                var rnum = Math.floor(Math.random() * characters.length);
                randomstring += characters.substring(rnum, rnum + 1);
            }
             //loop to select a new character in each iteration  
             for (var i = 0; i < lenString0; i++) {
                var rnum0 = Math.floor(Math.random() * characters0.length);
                randomstring0 += characters0.substring(rnum, rnum + 1);
            }
             //loop to select a new character in each iteration  
             for (var i = 0; i < lenString1; i++) {
                var rnum1 = Math.floor(Math.random() * characters1.length);
                randomstring1 += characters1.substring(rnum, rnum + 1);
            }

            for (var i = 0; i < lenString2; i++) {
                var rnum2 = Math.floor(Math.random() * characters2.length);
                randomstring2 += characters2.substring(rnum1, rnum1 + 1);
            }
            for (var i = 0; i < lenString3; i++) {
                var rnum3 = Math.floor(Math.random() * characters3.length);
                randomstring3 += characters3.substring(rnum1, rnum1 + 1);
            }
            for (var i = 0; i < lenString4; i++) {
                var rnum4 = Math.floor(Math.random() * characters4.length);
                randomstring4 += characters4.substring(rnum, rnum + 1);
            }

            var newQues = document.getElementById("ques");
            var newOne = document.getElementById("one");
            var newTwo = document.getElementById("two");
            var newThree = document.getElementById("three");
            var newFour = document.getElementById("four");
            var newFive = document.getElementById("five");

            newQues.setAttribute("name", randomstring);
            // newQues.setAttribute("placeholder", ques_no);
            newOne.setAttribute("name", randomstring1);
            newTwo.setAttribute("name", randomstring2);
            newThree.setAttribute("name", randomstring3);
            newFour.setAttribute("name", randomstring0);
            newFive.setAttribute("name", randomstring0);

            console.log(newOne.name);
            console.log(newTwo.name);
            container.append(section.cloneNode(true));
            // ques_no = 1++;
        }
    </script>

    <?php require 'end-scripts.php';?> 
</body>

</html>

