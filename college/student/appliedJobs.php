<!doctype html>
<?php
    require "php/connect.php";
    require "php/messageDisp.php";
    require "php/preCommonHeader.php";
    $happJob = "class='mm-active'";
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
                                    <th>Status</th>

                                </tr>
                            </thead>
                            
                            <tbody>
                            
                            <?php
 

                                    // $connection=mysqli_connect("database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com","admin","M=7t-pDLQHGSgoNdbcFujjst9&)kAwou","studentDashboardemo");
                                    $query = "SELECT c.name, comp_id, title, j.loc, lastDate, j.id, app.flag
                                    FROM CollegeCompanyDashboard.Jobs AS j
                                    INNER JOIN CollegeCompanyDashboard.Companies AS c ON j.comp_id = c.id 
                                    INNER JOIN CollegeCompanyDashboard.accepted AS a ON j.comp_id = a.compId AND a.collId = $collegeID
                                    INNER JOIN CollegeCompanyDashboard.applications AS app ON j.id = app.job_id AND app.stud_id=$studentID
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
                                            $colorr= "primary";
                                            $status = "Applied";
                                            $flag = $row[6];
                                            if ($flag == 0)
                                                $status = "Applied";
                                            else if ($flag == 1)
                                                {$status = "Shortlisted";
                                                $colorr = "warning";}
                                            else if ($flag == 2)
                                                {$status = "Selected";
                                                $colorr = "success";}
                                            else
                                                {$status = "Rejected";
                                                $colorr = "danger";}
                                    



                                    ?>
                                    <tr>
                                        
                                        <th scope="row"><?php echo ($i+1);?></th>
                                        <td><?php echo $row[0];?></td>
                                        <td><?php echo $row[2];?></td>
                                        <td><?php echo $row[3];?></td>
                                        <td><?php echo $row[4];?></td>
                                        <td >
                                        <form method='post' novalidate><button id="PopoverCustomT-4"
                                                class="btn btn-<?php echo $colorr; ?> btn-sm" name="statuss" value="<?php echo $row[5]; ?>"><?php echo "$status"; ?></button></form>
                                        </td>

                                    </tr>
                                    <?php
                                    }}
                                    ?>
                               
                                

                            </tbody>
                           </table>
                    </div>
                    <?php
                                // if(isset($_POST['applyy']))
                                // {
                                //     // var_dump($_POST['connect'][0]);
                                //     var_dump((int)$_POST['applyy'][0]);
                                //     $jobID = (int)$_POST['applyy'][0];
                                //     $query = $conn->prepare("INSERT INTO CollegeCompanyDashboard.applications (stud_id,job_id) VALUES (?,?)"); 
                                //     $flag = 0;
                                //     $query->bind_param("ii", $studentID, $jobID);
                                //     $query->execute();
                                //     echo "<meta http-equiv='refresh' content='0'>";
                                //     /*
                                //     $query = $conn->prepare("SELECT * FROM companies WHERE id=$companyID");
                                //     $query->execute();
                                //     $result = $query->get_result();
                                //     $row = mysqli_fetch_array($result);
                                //     // var_dump($row[1]);
                                //     $query2 = $conn->prepare("INSERT INTO requested (name, pastInst, loc, campLoc, description, acceptStatus) VALUES (?,?,?,?,?,?)"); 
                                //     $acc = 0;
                                //     $query2->bind_param("sssssi", $row[1], $row[2], $row[3], $row[4], $row[5], $acc);
                                //     $query2->execute();
                                //     $query3 = $conn->prepare("DELETE FROM companies WHERE id=$row[0]"); 
                                //     $query3->execute();
                                //     echo "<meta http-equiv='refresh' content='0'>";*/
                                // }
                        ?>





                </div>
                <?php
    require "php/commonEnd.php";
    
?>