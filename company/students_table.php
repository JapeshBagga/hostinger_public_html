<!doctype html>
<?php
    require "php/connect.php";
    require "php/messageDisp.php";
    // require "php/preCommonHeader.php";
    // $hnewComp = "class='mm-active'";
    require "php/commonHeader.php";
?>
            <!--body-->
            <div class="app-main__outer">
                <div class="app-main__inner">
                   
                    <div class="col-lg-12">
                         <table id="example" class="table table-striped table-bordered" style="width:100%;background-color: #fff;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email ID</th>
                                    <th>College Name</th>
                                    <th>Graduation Year</th>
                                    <th>Job Title</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
 

                            // $connection=mysqli_connect("database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com","admin","M=7t-pDLQHGSgoNdbcFujjst9&)kAwou","studentDashboardemo");
                            $query = "SELECT s.id,s.name as sname,s.lname,s.email,coll.name as cname,s.passingYr,j.title,app.job_id,app.flag,app.id as app_id
                            FROM CollegeCompanyDashboard.applications AS app
                            INNER JOIN CollegeCompanyDashboard.Jobs AS j ON app.job_id = j.id AND j.comp_id=$compID
                            INNER JOIN CollegeCompanyDashboard.students AS s ON s.id = app.stud_id 
                            INNER JOIN CollegeCompanyDashboard.Colleges AS coll ON coll.id=s.coll_id";
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
                                $row = mysqli_fetch_array($result);
                            echo "
                                <tr>
                                    <th scope='row'>".($i+1)."</th>
                                    <td>".$row['sname']."</td>
                                    <td>".$row['lname']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['cname']."</td>
                                    <td>".$row['passingYr']."</td>
                                    <td>".$row['title']."</td>
                                </tr>";
                               }
                            }  
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
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
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