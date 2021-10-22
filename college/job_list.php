<!doctype html>
<?php
    require "php/connect.php";
    require "php/messageDisp.php";
    require "php/preCommonHeader.php";
    $hjobList = "class='mm-active'";
    require "php/commonHeader.php";
?>

<div class="app-main__outer">
                <div class="app-main__inner" style="padding-bottom:90px;">
                    <div class="col-lg-12">
                        <table id="example" class="table table-striped table-bordered" style="width:100%;background-color: #fff;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Company Name</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Last Date to Apply</th>
                                    <th>View Job</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php
 

                                    // $connection=mysqli_connect("database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com","admin","M=7t-pDLQHGSgoNdbcFujjst9&)kAwou","studentDashboardemo");
                                    $query = "SELECT c.name, comp_id, title, j.loc, lastDate, j.id 
                                    FROM CollegeCompanyDashboard.Jobs AS j
                                    INNER JOIN CollegeCompanyDashboard.Companies AS c ON j.comp_id = c.id 
                                    INNER JOIN CollegeCompanyDashboard.accepted AS a ON j.comp_id = a.compId AND a.collId = $collegeID
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
                                        
                                        <th scope="row"><?php echo ($i+1);?></th>
                                        <td><?php echo $row[0];?></td>
                                        <td><?php echo $row[2];?></td>
                                        <td><?php echo $row[3];?></td>
                                        <td><?php echo $row[4];?></td>
                                        <td >
                                            <button type="button" id="PopoverCustomT-4"
                                                class="btn btn-primary btn-sm">View</button>
                                        </td>

                                    </tr>
                                    <?php
                                    }}
                                    ?>
                               
                                

                            </tbody>
                           </table>
                    </div>






                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <p>All rights Reversed</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <script src='https://code.jquery.com/jquery-3.5.1.js'></script>
    <script src='https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js'></script>
   <script>
       $(document).ready(function() {
          $('#example').DataTable();
        } );
   </script>
</body>

</html>


            <!--body-->
            <!-- <div class="app-main__outer">
                <div class="app-main__inner" style="padding-bottom:90px;">
                    <div class="col-lg-12">
                        <table id="example" class="table table-striped table-bordered" style="width:100%;background-color: #fff;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Company Name</th>
                                    <th>Profile</th>
                                    <th>Location</th>
                                    <th>Last Date to Apply</th>
                                   

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Cognizant</td>
                                    <td>Software Engineer</td>
                                    <td>Pune</td>
                                    <td>09/06/2021</td>
                                    

                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Opel India</td>
                                    <td>Software Engineer</td>
                                    <td>New Delhi</td>
                                    <td>09/06/2021</td>
                                    

                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Yatra</td>
                                    <td>Trainee Software Engineer</td>
                                    <td>Gurugram</td>
                                    <td>09/06/2021</td>
                                    

                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Microsoft</td>
                                    <td>Software Engineer</td>
                                    <td>Pune</td>
                                    <td>09/06/2021</td>
                                    

                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Accenture</td>
                                    <td>Assoicate Software Engineer</td>
                                    <td>New Delhi</td>
                                    <td>09/06/2021</td>
                                  

                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Flipkart</td>
                                    <td>Front-end Developer</td>
                                    <td>Bangalore</td>
                                    <td>09/06/2021</td>
                                  

                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Adobe</td>
                                    <td>Trainee Software Engineer</td>
                                    <td>Pune</td>
                                    <td>09/06/2021</td>
                                  

                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Microsoft</td>
                                    <td>Software Engineer</td>
                                    <td>Pune</td>
                                    <td>09/06/2021</td>
                                    

                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Accenture</td>
                                    <td>Assoicate Software Engineer</td>
                                    <td>New Delhi</td>
                                    <td>09/06/2021</td>
                                  

                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Cognizant</td>
                                    <td>Software Engineer</td>
                                    <td>Pune</td>
                                    <td>09/06/2021</td>
                                    

                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Opel India</td>
                                    <td>Software Engineer</td>
                                    <td>New Delhi</td>
                                    <td>09/06/2021</td>
                                    

                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Yatra</td>
                                    <td>Trainee Software Engineer</td>
                                    <td>Gurugram</td>
                                    <td>09/06/2021</td>
                                    

                                </tr>

                            </tbody>
                           </table>
                    </div>






                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <p>All rights Reversed</p>

                        </div>
                    </div>
                </div>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
    <script src='https://code.jquery.com/jquery-3.5.1.js'></script>
    <script src='https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js'></script>
   <script>
       $(document).ready(function() {
          $('#example').DataTable();
        } );
   </script>
</body>

</html> -->