<!doctype html>
<?php
    require "php/connect.php";
    require "php/messageDisp.php";
    // require "php/preCommonHeader.php";
    // $hnewComp = "class='mm-active'";
    require "php/commonHeader.php";
?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <!-- <table id="example" class="table table-striped table-bordered dt-responsive nowrap twoDes "
                        style="width:100%; background-color:white;">
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>E-mail</th>
                                <th>Contact No.</th>
                                <th>College Name</th>
                                <th>College ID No.</th>
                                <th>Skills</th>
                                <th>Job Applied for</th>
                                <th>Shortlisted</th>
                                <th>Selected</th>
                                <th>Rejected</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fas fa-plus-square hid"></i><a href="studentProfile.html">Aadesh</a></td>
                                <td><a href="studentProfile.html">Sharma</a></td>
                                <td>aadesh@gmail.net</td>
                                <td>9876543210</td>
                                <td>IIT Bhilai</td>
                                <td>4442345</td>
                                <td>Reactjs,MERN,HTML</td>
                                <td>Frontend</td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>


                            </tr>
                            <tr>
                                <td><i class="fas fa-plus-square hid"></i><a href="studentProfile.html">Aadesh</a></td>
                                <td><a href="studentProfile.html">Sharma</a></td>
                                <td>aadesh@gmail.net</td>
                                <td>9876543210</td>
                                <td>IIT Bhilai</td>
                                <td>4442345</td>
                                <td>Reactjs,MERN,HTML</td>
                                <td>Frontend</td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>

                            </tr>
                            <tr>
                                <td><i class="fas fa-plus-square hid"></i><a href="studentProfile.html">Aadesh</a></td>
                                <td><a href="studentProfile.html">Sharma</a></td>
                                <td>aadesh@gmail.net</td>
                                <td>9876543210</td>
                                <td>IIT Bhilai</td>
                                <td>4442345</td>
                                <td>Reactjs,MERN,HTML</td>
                                <td>Frontend</td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>

                            </tr>
                            <tr>
                                <td><i class="fas fa-plus-square hid"></i><a href="studentProfile.html">Aadesh</a></td>
                                <td><a href="studentProfile.html">Sharma</a></td>
                                <td>aadesh@gmail.net</td>
                                <td>9876543210</td>
                                <td>IIT Bhilai</td>
                                <td>4442345</td>
                                <td>Reactjs,MERN,HTML</td>
                                <td>Frontend</td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>

                            </tr>
                            <tr>
                                <td><i class="fas fa-plus-square hid"></i><a href="studentProfile.html">Aadesh</a></td>
                                <td><a href="studentProfile.html">Sharma</a></td>
                                <td>aadesh@gmail.net</td>
                                <td>9876543210</td>
                                <td>IIT Bhilai</td>
                                <td>4442345</td>
                                <td>Reactjs,MERN,HTML</td>
                                <td>Frontend</td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>

                            </tr>
                            <tr>
                                <td><i class="fas fa-plus-square hid"></i><a href="studentProfile.html">Aadesh</a></td>
                                <td><a href="studentProfile.html">Sharma</a></td>
                                <td>aadesh@gmail.net</td>
                                <td>9876543210</td>
                                <td>IIT Bhilai</td>
                                <td>4442345</td>
                                <td>Reactjs,MERN,HTML</td>
                                <td>Frontend</td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>

                            </tr>
                            <tr>
                                <td><i class="fas fa-plus-square hid"></i><a href="studentProfile.html">Aadesh</a></td>
                                <td><a href="studentProfile.html">Sharma</a></td>
                                <td>aadesh@gmail.net</td>
                                <td>9876543210</td>
                                <td>IIT Bhilai</td>
                                <td>4442345</td>
                                <td>Reactjs,MERN,HTML</td>
                                <td>Frontend</td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>

                            </tr>
                            <tr>
                                <td><i class="fas fa-plus-square hid"></i><a href="studentProfile.html">Aadesh</a></td>
                                <td><a href="studentProfile.html">Sharma</a></td>
                                <td>aadesh@gmail.net</td>
                                <td>9876543210</td>
                                <td>IIT Bhilai</td>
                                <td>4442345</td>
                                <td>Reactjs,MERN,HTML</td>
                                <td>Frontend</td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>

                            </tr>
                            <tr>
                                <td><i class="fas fa-plus-square hid"></i><a href="studentProfile.html">Aadesh</a></td>
                                <td><a href="studentProfile.html">Sharma</a></td>
                                <td>aadesh@gmail.net</td>
                                <td>9876543210</td>
                                <td>IIT Bhilai</td>
                                <td>4442345</td>
                                <td>Reactjs,MERN,HTML</td>
                                <td>Frontend</td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>

                            </tr>
                            <tr>
                                <td><i class="fas fa-plus-square hid"></i><a href="studentProfile.html">Aadesh</a></td>
                                <td><a href="studentProfile.html">Sharma</a></td>
                                <td>aadesh@gmail.net</td>
                                <td>9876543210</td>
                                <td>IIT Bhilai</td>
                                <td>4442345</td>
                                <td>Reactjs,MERN,HTML</td>
                                <td>Frontend</td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>

                            </tr>
                            <tr>
                                <td><i class="fas fa-plus-square hid"></i><a href="studentProfile.html">Aadesh</a></td>
                                <td><a href="studentProfile.html">Sharma</a></td>
                                <td>aadesh@gmail.net</td>
                                <td>9876543210</td>
                                <td>IIT Bhilai</td>
                                <td>4442345</td>
                                <td>Reactjs,MERN,HTML</td>
                                <td>Frontend</td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-plus-square hid"></i><a href="studentProfile.html">Aadesh</a></td>
                                <td><a href="studentProfile.html">Sharma</a></td>
                                <td>aadesh@gmail.net</td>
                                <td>9876543210</td>
                                <td>IIT Bhilai</td>
                                <td>4442345</td>
                                <td>Reactjs,MERN,HTML</td>
                                <td>Frontend</td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>

                            </tr>
                            <tr>
                                <td><i class="fas fa-plus-square hid"></i><a href="studentProfile.html">Aadesh</a></td>
                                <td><a href="studentProfile.html">Sharma</a></td>
                                <td>aadesh@gmail.net</td>
                                <td>9876543210</td>
                                <td>IIT Bhilai</td>
                                <td>4442345</td>
                                <td>Reactjs,MERN,HTML</td>
                                <td>Frontend</td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>
                                <td><button type="button" class="btn btn-info"
                                        style="margin-right: 2%;">Yes</button><button type="button"
                                        class="btn btn-info">No</button></td>

                            </tr>



                        </tbody>
                    </table> -->

                    <table id="example" class="table table-striped table-bordered" style="width:100%;background-color: #fff;">
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>E-mail</th>
                                <th>Contact No.</th>
                                <th>College Name</th>
                                <th>College ID No.</th>
                                <th>Skills</th>
                                <th>Job Applied for</th>
                                <th>Shortlisted</th>
                                <th>Selected</th>
                                <th>Rejected</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
 

                            // $connection=mysqli_connect("database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com","admin","M=7t-pDLQHGSgoNdbcFujjst9&)kAwou","studentDashboardemo");
                            $query = "SELECT s.id,s.name as sname,s.lname,s.email,s.phone,coll.name as cname,s.coll_id,s.skills,j.title,app.job_id,app.flag,app.id as app_id
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
                            // row 0 is company id
                                $row = mysqli_fetch_array($result);
                                // $status = "disabled";
                                $short="";
                                $short2 = "Short";
                                $selec="";
                                $selec2="Select";
                                $rej="";
                                $rej2="Reject";
                                $flag = $row['flag'];
                                // echo success($flag);
                                if ($flag==0)
                                {

                                }
                                else if ($flag == 1)
                                {
                                    $short = "disabled";
                                    $short2 = "Shortlisted";
                                }
                                else if ($flag == 2)
                                {
                                    $selec2 = "Selected";
                                    $short="disabled";
                                    $rej="disabled";
                                    $selec="disabled";
                                }
                                else
                                {
                                    $rej2 = "Rejected";
                                    $short="disabled";
                                    $selec="disabled";
                                    $rej="disabled";
                                }
                                echo "
                            <tr>
                                <td><a href='studentProfile.html'>".$row['sname']."</a></td>
                                <td><a href='studentProfile.html'>".$row['lname']."</a></td>
                                <td>".$row['email']."</td>
                                <td>".$row['phone']."</td>
                                <td>".$row['cname']."</td>
                                <td>".$row['coll_id']."</td>
                                <td>".$row['skills']."</td>
                                <td>".$row['title']."</td>
                                <form method='post' novalidate> <td><button  class='btn btn-info' ".$short." name ='shortt' value=".$row['app_id']." 
                                    style='margin-right: 2%;'>".$short2."</button></form>
                                <form method='post' novalidate><td><button  class='btn btn-success' ".$selec." name='selectt' value=".$row['app_id']." 
                                    style='margin-right: 2%;'>".$selec2."</button></form>
                                <form method='post' novalidate><td><button  class='btn btn-danger' ".$rej." name='rejt' value=".$row['app_id']." 
                                    style='margin-right: 2%;'>".$rej2."</button></form>


                            </tr>";}}?>
                            
                        </tbody>
                        
                    </table>
                </div>
                <?php
                                if(isset($_POST['shortt']))
                                {
                                    $appID = (int)$_POST['shortt'];
                                    $query = $conn->prepare("UPDATE CollegeCompanyDashboard.applications SET flag = 1 WHERE id = $appID"); 
                                    $query->execute();

                                    echo "<meta http-equiv='refresh' content='0'>";
                                }

                                if(isset($_POST['selectt']))
                                {
                                    $appID = (int)$_POST['selectt'];
                                    $query = $conn->prepare("UPDATE CollegeCompanyDashboard.applications SET flag = 2 WHERE id = $appID"); 
                                    $query->execute();

                                    echo "<meta http-equiv='refresh' content='0'>";
                                }

                                if(isset($_POST['rejt']))
                                {
                                    $appID = (int)$_POST['rejt'];
                                    $query = $conn->prepare("UPDATE CollegeCompanyDashboard.applications SET flag = 3 WHERE id = $appID"); 
                                    $query->execute();

                                    echo "<meta http-equiv='refresh' content='0'>";
                                }
                            ?>

                <footer>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <p>All rights Reversed</p>

                            </div>
                        </div>
                    </div>
                </footer>
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