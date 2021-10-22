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
                <?php                                
                    // $query = $conn->prepare("SELECT * FROM Companies ORDER BY name");
                    // $query = $conn->prepare("SELECT * FROM Companies WHERE NOT EXISTS (SELECT * FROM Requests WHERE  ((Requests.from_id=1 AND Requests.flag=0) OR (Requests.to_id=1 AND Requests.flag=1))) ORDER BY name");
                    // $query = $conn->prepare("SELECT * FROM CollegeCompanyDashboard.Companies t1 LEFT JOIN CollegeCompanyDashboard.Requests t2 ON t2.to_id = t1.id WHERE t2.id IS NULL;");
                    $query = "SELECT * FROM CollegeCompanyDashboard.Colleges WHERE id NOT IN (SELECT to_id FROM CollegeCompanyDashboard.Requests WHERE flag = 1 AND from_id=$compID) AND id NOT IN (SELECT from_id FROM CollegeCompanyDashboard.Requests WHERE flag = 0 AND to_id=$compID) AND id NOT IN (SELECT collId FROM CollegeCompanyDashboard.accepted WHERE compId=$compID) ORDER BY name";
                    // $query->execute();
                    // $result = $query->get_result();
                    $result = mysqli_query($conn, $query );
                    //var_dump($result);
                    if(!$result)
                        die("ERROR: Couldn't fetch colleges");
                    $rows = mysqli_num_rows($result);
                    if($rows == 0)
                        echo "<h2 align='center'>No colleges available</h2>";
                    else
                    {
                        for($i=0; $i<$rows; $i++)
                        {
                            // row 0 is company id
                            $row = mysqli_fetch_array($result);
                            // $queryCond1 = $conn->prepare("SELECT * FROM Requests WHERE flag = 0 AND to_id=$collegeID);
                            // $queryCond1->execute();
                            // $resultCond1 = $queryCond1->get_result()
                            // $rows = mysqli_num_rows($result);
                            // if($row[0])
                            echo "<form method='post' novalidate>
                    <div class='main-card mb-3 card newList'>
                        <div class='row'>
                            <div class='col-lg-6 col-xl-4'>
                                <div class='widget-content'>
                                    <div class='widget-content-outer'>
                                        <div class='widget-content-wrapper'>
                                            <img style='width: 50%;height: 50%;margin-right: auto;margin-left: auto;'
                                                src='assets\images\images123.png' alt='logo'>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-6 col-xl-4'>
                                <div class='widget-content'>
                                    <div class='widget-content-outer'>
                                        <div class='widget-content-wrapper'>
                                            <div class='widget-content-left'>
                                                <div class='widget-heading'>
                                                    <h1 style='font-size: 3.5rem;'>".$row[1]."</h1>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-6 col-xl-4'>
                                <div class='widget-content'>
                                    <div class='widget-content-outer'>
                                        <div class='widget-content-wrapper'>
                                            <div class='widget-content-left'>
                                                <div class='widget-heading'>
                                                    <h1 style='font-size: 1.3rem;'>Branches</h1>
                                                </div>
                                                <div class='widget-subheading'>".$row[2]."</div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-6 col-xl-4'>
                                <div class='widget-content'>
                                    <div class='widget-content-outer'>
                                        <div class='widget-content-wrapper'>
                                            <div class='widget-content-left'>
                                                <div class='widget-heading'>Location</div>
                                                <div class='widget-subheading'>".$row[3]."</div>
                                            </div>

                                        </div>
                                        <div class='widget-content-left'>
                                            <div class='widget-heading'>Campus Locations</div>
                                            <div class='widget-subheading'>".$row[4]."</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-6 col-xl-4'>
                                <div class='widget-content'>
                                    <div class='widget-content-outer'>
                                        <div class='widget-content-wrapper'>
                                            <div class='widget-content-left'>
                                                <div class='widget-heading'>Description</div>
                                                <div class='widget-subheading'>".$row[5]."</div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-6 col-xl-4'>
                                <div class='widget-content'>
                                    <div class='widget-content-outer'>
                                        <div class='widget-content-wrapper'>

                                            <div class='widget-content-right'>
                                                <button class='mb-2 mr-2 btn-transition btn btn-outline-primary' name='vieww' value=".$row[0].">View
                                                    Institute
                                                </button>
                                                <button class='mb-2 mr-2 btn-transition btn btn-outline-primary' name='connect' value=".$row[0].">Connect
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></form>";
                        }
                    }
                    
                ?>

                    <?php       
                        if(isset($_POST['connect']))
                        {
                            // var_dump($_POST['connect'][0]);
                            // var_dump((int)$_POST['connect'][0]);
                            $collegeID = (int)$_POST['connect'];
                            $query = $conn->prepare("INSERT INTO Requests (from_id, to_id, flag) VALUES (?,?,?)"); 
                            $flag = 1;
                            $query->bind_param("iii", $compID, $collegeID,$flag);
                            $query->execute();
                            echo "<meta http-equiv='refresh' content='0'>";
                        }

                        if(isset($_POST['vieww']))
                        {
                            // var_dump($_POST['connect'][0]);
                            // var_dump((int)$_POST['connect'][0]);
                            $companyID = (int)$_POST['vieww'];
                            $query = "SELECT * FROM Colleges WHERE id=$companyID";
                            // $query->execute();
                            // $result = $query->get_result();
                            $result = mysqli_query($conn, $query );
                            $row = mysqli_fetch_array($result);
                            // var_dump($row[6]);   
                                                    
                            $URL=$row[6];
                            echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                            echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';                                    
                        }
                    ?>
                    <!-- <div class='main-card mb-3 card newList'>
                        <div class='row'>
                            <div class='col-lg-6 col-xl-4'>
                                <div class='widget-content'>
                                    <div class='widget-content-outer'>
                                        <div class='widget-content-wrapper'>
                                            <img style='width: 50%;height: 50%;margin-right: auto;margin-left: auto;'
                                                src='assets\images\images123.png' alt="logo">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">
                                                    <h1 style="font-size: 3.5rem;">IITM</h1>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">
                                                    <h1 style="font-size: 1.3rem;">Branches</h1>
                                                </div>
                                                <div class="widget-subheading">IITM Bombay, IITM Kanpur, IITM kgp, IIT</div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Location</div>
                                                <div class="widget-subheading">Mumbai, Maharashtra</div>
                                            </div>

                                        </div>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Campus Locations</div>
                                            <div class="widget-subheading">Mumbai,Nagpur,Kolkata,Pune,Jammu</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Description</div>
                                                <div class="widget-subheading">IITM is known for its 4 Year, 5
                                                    Year & 2 Year programmes for which the entry is through the
                                                    Joint Entrance Examination – Advanced.</div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">

                                            <div class="widget-content-right">
                                                <button class="mb-2 mr-2 btn-transition btn btn-outline-primary">View
                                                    Institute
                                                </button>
                                                <button class="mb-2 mr-2 btn-transition btn btn-outline-primary">Connect
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> -->
                        <!-- </div>
                    </div> -->
                
                    
                <!-- </div> -->
                <?php require_once "php/footer.php"; ?>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>