<!doctype html>
<?php
    require "php/connect.php";
    require "php/messageDisp.php";
    require "php/preCommonHeader.php";
    $hindex = "class='mm-active'";
    require "php/commonHeader.php";
?>
            <!--body-->
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-midnight-bloom " >
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Jobs Applied</div>
                                        <div class="widget-subheading"></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>20</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-arielle-smile" >
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Jobs Available</div>
                                        <div class="widget-subheading"></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>200+</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-grow-early" >
                                <div class="widget-content-wrapper text-white  ">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Upcoming Interviews</div>
                                        <div class="widget-subheading"></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>2</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Recent Jobs
                                    <div class="btn-actions-pane-right">

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Company Name</th>
                                                <th class="text-center">Title</th>
                                                <th class="text-center">Location</th>
                                                <th class="text-center">Last Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
 

                                    // $connection=mysqli_connect("database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com","admin","M=7t-pDLQHGSgoNdbcFujjst9&)kAwou","studentDashboardemo");
                                    $query = "SELECT c.name, comp_id, title, j.loc, lastDate, j.id 
                                    FROM CollegeCompanyDashboard.Jobs AS j
                                    INNER JOIN CollegeCompanyDashboard.Companies AS c ON j.comp_id = c.id 
                                    INNER JOIN CollegeCompanyDashboard.accepted AS a ON j.comp_id = a.compId AND a.collId = $collegeID
                                    WHERE j.id NOT IN (SELECT job_id FROM CollegeCompanyDashboard.applications WHERE stud_id=$studentID)
                                    ORDER BY name";
                                    // $query->execute();
                                    // $result = $query->get_result();
                                    $result = mysqli_query($conn, $query );
                                    //var_dump($result);
                                    if(!$result)
                                        die("ERROR: Couldn't fetch Jobs");
                                    $rows = mysqli_num_rows($result);
                                    if($rows == 0)
                                        echo "<h2 align='center'>No Jobs available</h2>";
                                    else
                                    {
                                        for($i=0; $i<$rows; $i++)
                                        {
                                            // row 0 is company id
                                            $row = mysqli_fetch_array($result);
                                    

                                    



                                    ?>

                                            <tr>
                                                <td class="text-center text-muted"><?php echo ($i+1);?></td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">

                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading"><?php echo $row[0];?></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center"><?php echo $row[2];?></td>
                                                <td class="text-center">
                                                <?php echo $row[3];?>
                                                </td>
                                                <!-- <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1"
                                                        class="btn btn-primary btn-sm">Apply</button>
                                                </td> -->
                                                <td class="text-center"><?php echo $row[4];?></td>
                                            </tr>
                                            <?php }}?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-block text-center card-footer">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Progress </h5>
                            <div class="mb-3 progress" style="height: 30px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 25%;background-color:#ff9500"  >
                                    <h6>Makos</h6>
                                </div>
                            </div>

                            <div class="mb-3 progress" style="height: 30px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 50%;background-color:#ff9500" >
                                    <h6>Jobaskit</h6>
                                </div>
                            </div>
                            <div class="mb-3 progress" style="height: 30px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 75%;background-color:#ff9500" >
                                    <h6>Company</h6>
                                </div>
                            </div>
                            <div class="mb-3 progress" style="height: 30px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 80%;background-color:#ff9500" >
                                    <h6>Dairy</h6>
                                </div>
                            </div>
                            <div class="mb-3 progress" style="height: 30px;">
                                <div class="progress-bar role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 50%;background-color:#ff9500" >
                                    <h6>Makos Infotech</h6>
                                </div>
                            </div>
                            <div class="mb-3 progress" style="height: 30px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;background-color:#ff9500">
                                    <h6>PalTm</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <p>All rights Reversed</p>
                                <button type="button" class="btn mr-2 mb-2 btn-success" data-toggle="modal"
                                    data-target="#exampleModal" style="position: absolute; right: 20px; font-size: 16px;">
                                    Get your trial </button>
                            </div>




                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your trial is booked successfully</h5>
               
            </div>
           
        </div>
    </div>
</div>