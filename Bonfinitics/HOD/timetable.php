<?php require_once 'identification.php';?> 
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Time Table | BonFinitics - Makos</title>
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
                                            <li><span class="bread-blod">Time Table</span>
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
       
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Time Table <span class="table-project-n"></span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
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
                                                <!--<th data-field="id">S.No.</th>-->
                                                <th data-field="sname" >Subject Name</th>
                                                <th data-field="dname" >Department Name</th>
                                                <th data-field="phone" >Day</th>
                                                <th data-field="email" >Timming</th>
                                                <!-- <th data-field="complete">Completed</th> -->
                                                <!-- <th data-field="task" data-editable="true">Subject</th> -->
                                                <th data-field="date" >Date</th>
                                                <th data-field="price" >Room No</th>
                                                <!-- <th data-field="action">Action</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
												require_once "connection.php";
												$tt_query = "select tt_subject,tt_dept,tt_day,tt_timing,tt_date,tt_room from time_table";
												$tt_query_result = mysqli_query($conn,$tt_query);
												while($row=mysqli_fetch_array($tt_query_result)){
											?>
                                            <tr>
                                                <!-- <td></td> -->
                                                <!--<td>19</td>-->
                                                <td><?php echo $row['tt_subject'];?></td>
                                                <td><?php echo $row['tt_dept'];?></td>
                                                <td><?php echo $row['tt_day'];?></td>
                                                <!-- <td class="datatable-ct"><span class="pie">2,7</span> -->
                                                </td>
                                                <td><?php echo $row['tt_timing'];?></td>
                                                <td><?php echo $row['tt_date'];?></td>
                                                <td><?php echo $row['tt_room'];?></td>
                                                
                                                <!-- <td class="datatable-ct"><i class="fa fa-check"></i> -->
                                                </td>
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
        <!-- Static Table End -->
        
        <?php require 'footer.php';?> 
    </div>

    
    <?php require 'end-scripts.php';?> 
</body>

</html>

