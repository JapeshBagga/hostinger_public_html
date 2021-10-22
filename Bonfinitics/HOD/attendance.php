<?php require_once 'identification.php';?>  
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Attendance | BonFinitics - Makos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <!-- <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Attendance</span>
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
       
        <!-- Hod Att. Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1><?php echo $_SESSION["name"] ?> Attendance Summary <span class="table-project-n"></span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar2">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="alkl">Export All</option>
											<option value="sselected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar2">
                                        <thead>
                                            <tr>
                                                <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                <!-- <th data-field="id">S.No.</th> -->
                                                <!-- <th data-field="complete">Completed</th> -->
                                                <!-- <th data-field="task" data-editable="true">Timing</th> -->
                                                <!-- <th data-field="professorname">Professor Name</th> -->
                                                <th data-field="name">Subject Name</th>
                                                <th data-field="email">Department</th>
                                                <!-- <th data-field="task">Timing</th> -->
                                                <th data-field="presnt">No. Of Days Present</th>
                                                <th data-field="absent">No. Of Days Absent</th>
                                                <th data-field="total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											$atd_query = "select atd_dept,atd_subject,atd_present_days,atd_absent_days,atd_total_days from attendance where (user_id=$user_id and atd_type='faculty')";
											$atd_query_result = mysqli_query($conn,$atd_query);
											while($row=mysqli_fetch_array($atd_query_result)){
                                            global $dept; 
                                            $dept=$row["atd_dept"];
										?>
                                            <tr>
                                                <td><?php echo $row['atd_subject'];?></td>
                                                <td><?php echo $row['atd_dept'];?></td>
                                                <td><?php echo $row['atd_present_days'];?></td>
                                                <td><?php echo $row['atd_absent_days'];?></td>
                                                <td><?php echo $row['atd_total_days'];?></td>
                                            </tr>
										<?php
											}
										?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hod Att. Table End -->

        <!--  Faculty Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Faculty Attendance Summary <span class="table-project-n"></span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar1">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="alkl">Export All</option>
											<option value="sselected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar1">
                                        <thead>
                                            <tr>
                                                <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                <!-- <th data-field="id">S.No.</th> -->
                                                <!-- <th data-field="complete">Completed</th> -->
                                                <!-- <th data-field="task" data-editable="true">Timing</th> -->
                                                <th data-field="professorname">Professor Name</th>
                                                <th data-field="name">Subject Name</th>
                                                <th data-field="email">Department</th>
                                                <!-- <th data-field="task">Timing</th> -->
                                                <th data-field="presnt">No. Of Days Present</th>
                                                <th data-field="absent">No. Of Days Absent</th>
                                                <th data-field="total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											$atd_query = "select atd_faculty_name, atd_dept,atd_subject,atd_present_days,atd_absent_days,atd_total_days from attendance where (user_id!=$user_id and atd_type='faculty')";
                                            // $atd_query = "select atd_faculty_name, atd_dept,atd_subject,atd_present_days,atd_absent_days,atd_total_days from attendance where (user_id!=$user_id and atd_type='faculty' and atd_dept=$dept )";
                                            $atd_query_result = mysqli_query($conn,$atd_query);
											while($row=mysqli_fetch_array($atd_query_result)){
										?>
                                            <tr>
                                                <td><?php echo $row['atd_faculty_name'];?></td>
                                                <td><?php echo $row['atd_subject'];?></td>
                                                <td><?php echo $row['atd_dept'];?></td>
                                                <td><?php echo $row['atd_present_days'];?></td>
                                                <td><?php echo $row['atd_absent_days'];?></td>
                                                <td><?php echo $row['atd_total_days'];?></td>
                                            </tr>
										<?php
											}
										?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Faculty Table End -->

        <!--  Student Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Students Attendance <span class="table-project-n"></span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tbb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                <!-- <th data-field="id">S.No.</th> -->
                                                <!-- <th data-field="complete">Completed</th> -->
                                                <th data-field="sname" >Student Name</th>
                                                <th data-field="name" >Subject Name</th>
                                                <th data-field="email" >Department</th>
                                                <th data-field="task" >Timing</th>
                                                <th data-field="att" >Attendance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
													$atd_query = "select atd_student_name,atd_dept,atd_subject,atd_timing from attendance where atd_type='student'";
													$atd_query_result = mysqli_query($conn,$atd_query);
													while($row=mysqli_fetch_array($atd_query_result)){
												?>
													<tr>
														<td><?php echo $row['atd_student_name'];?></td>
														<td><?php echo $row['atd_subject'];?></td>
														<td><?php echo $row['atd_dept'];?></td>
														<td><?php echo $row['atd_timing'];?></td>
														<td class="datatable-ct">
															<div class="bt-df-checkbox"> &nbsp; Present<input class="pull-left radio-checked" type="radio"  value="option1" id="optionsRadios1" name="optionsRadios"></div>
															<!-- <div class="bt-df-checkbox">&nbsp; Absent<input class="pull-left" type="radio" value="option2" id="optionsRadios2" name="optionsRadios"></div>
															<div class="bt-df-checkbox">&nbsp; Late<input class="pull-left" type="radio" value="option2" id="optionsRadios2" name="optionsRadios"></div> -->
														</td>
													</tr>
												<?php
													}
												?>
                                                
                                                <!-- <td>
                                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td> -->
                                                <!-- <td class="datatable-ct">
                                                   <div class="bt-df-checkbox"> &nbsp; Present<input class="pull-left radio-checked" type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"></div> -->
                                                    <!-- <div class="bt-df-checkbox">&nbsp; Absent<input class="pull-left" type="radio" value="option2" id="optionsRadios2" name="optionsRadios"></div>
                                                    <div class="bt-df-checkbox">&nbsp; Late<input class="pull-left" type="radio" value="option2" id="optionsRadios2" name="optionsRadios"></div> -->
                                                <!-- </td> --> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Student Table End -->
        
        <?php require 'footer.php';?> 
    </div>

    
    <?php require 'end-scripts.php';?> 
</body>

</html>

