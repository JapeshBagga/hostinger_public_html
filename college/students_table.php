<!doctype html>
<?php
    require "php/connect.php";
    require "php/messageDisp.php";
    require "php/preCommonHeader.php";
    $hstudTablehow = "class='mm-active'";
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
                                    <th>Degree</th>
                                    <th>Graduation Year</th>
                                    <th>No. of applied companies</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php                                
                                // $query = $conn->prepare("SELECT * FROM Companies ORDER BY name");
                                // $query = $conn->prepare("SELECT * FROM Companies WHERE NOT EXISTS (SELECT * FROM Requests WHERE  ((Requests.from_id=1 AND Requests.flag=0) OR (Requests.to_id=1 AND Requests.flag=1))) ORDER BY name");
                                // $query = $conn->prepare("SELECT * FROM CollegeCompanyDashboard.Companies t1 LEFT JOIN CollegeCompanyDashboard.Requests t2 ON t2.to_id = t1.id WHERE t2.id IS NULL;");
                                $query = "SELECT * FROM CollegeCompanyDashboard.students WHERE coll_id=$collegeID";
                                // $query->execute();
                                // $result = $query->get_result();
                                $result = mysqli_query($conn, $query );
                                //var_dump($result);
                                if(!$result)
                                    die("ERROR: Couldn't fetch companies");
                                $rows = mysqli_num_rows($result);
                                if($rows == 0)
                                    echo "<h2 align='center'>No companies available</h2>";
                                else
                                {
                                    for($i=0; $i<$rows; $i++)
                                    {
                                        // row 0 is company id
                                        $row = mysqli_fetch_array($result);
                                        echo "
                            
                                <tr>
                                    <th scope='row'>".($i+1)."</th>
                                    <td>".$row['name']."</td>
                                    <td>".$row['lname']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['degree']."</td>
                                    <td>".$row['passingYr']."</td>
                                    <td>tbd</td>
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