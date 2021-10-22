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
                                
                        <div class="">
                            
                            <?php                                
                                // $query = $conn->prepare("SELECT * FROM Companies ORDER BY name");
                                // $query = $conn->prepare("SELECT * FROM Companies WHERE NOT EXISTS (SELECT * FROM Requests WHERE  ((Requests.from_id=1 AND Requests.flag=0) OR (Requests.to_id=1 AND Requests.flag=1))) ORDER BY name");
                                // $query = $conn->prepare("SELECT * FROM CollegeCompanyDashboard.Companies t1 LEFT JOIN CollegeCompanyDashboard.Requests t2 ON t2.to_id = t1.id WHERE t2.id IS NULL;");
                                $query = "SELECT * FROM CollegeCompanyDashboard.Colleges WHERE id IN (SELECT from_id FROM CollegeCompanyDashboard.Requests WHERE (flag=0 AND to_id=$compID)) ORDER BY name";
                                // $query->execute();
                                // $result = $query->get_result();
                                $result = mysqli_query($conn, $query );
                                //var_dump($result);
                                if(!$result)
                                    die("ERROR: Couldn't fetch companies");
                                $rows = mysqli_num_rows($result);
                                if($rows == 0)
                                    echo "<h2 align='center'>No company requests available</h2>";
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
                                                                <img style='width: 50%;height: 50%;margin-right: auto;margin-left: auto;' src='assets\images\images123.png' alt='logo'>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='col-lg-6 col-xl-4'>
                                                    <div class='widget-content'>
                                                        <div class='widget-content-outer'>
                                                            <div class='widget-content-wrapper'>
                                                                <div class='widget-content-left'>
                                                                    <div class='widget-heading'><h1 style='font-size: 3.5rem;'>".$row[1]."</h1></div>
                                                                    
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
                                                                    <div class='widget-heading'><h1 style='font-size: 1.3rem;'>Branches</h1></div>
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
                                                                    <button class='mb-2 mr-2 btn-transition btn btn-success ' name='acc' value=".$row[0].">Accept
                                                                    </button>
                                                                    <button class='mb-2 mr-2 btn-transition btn btn-danger' name='rej' value=".$row[0].">Reject
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
                                if(isset($_POST['acc']))
                                {
                                    // var_dump($_POST['connect'][0]);
                                    // var_dump((int)$_POST['connect'][0]);
                                    
                                    $collegeID = (int)$_POST['acc'];
                                    $query = $conn->prepare("INSERT INTO accepted (compId, collId) VALUES (?,?)"); 
                                    $query->bind_param("ii", $compID, $collegeID);
                                    $query->execute();

                                    $query = $conn->prepare("DELETE FROM CollegeCompanyDashboard.Requests WHERE flag = 0 AND from_id=$collegeID AND to_id=$compID");
                                    $query->execute();

                                    echo "<meta http-equiv='refresh' content='0'>";
                                    /*
                                    $query = $conn->prepare("SELECT * FROM companies WHERE id=$companyID");
                                    $query->execute();
                                    $result = $query->get_result();
                                    $row = mysqli_fetch_array($result);
                                    // var_dump($row[1]);
                                    $query2 = $conn->prepare("INSERT INTO requested (name, pastInst, loc, campLoc, description, acceptStatus) VALUES (?,?,?,?,?,?)"); 
                                    $acc = 0;
                                    $query2->bind_param("sssssi", $row[1], $row[2], $row[3], $row[4], $row[5], $acc);
                                    $query2->execute();
                                    $query3 = $conn->prepare("DELETE FROM companies WHERE id=$row[0]"); 
                                    $query3->execute();
                                    echo "<meta http-equiv='refresh' content='0'>";*/
                                }

                                if(isset($_POST['rej']))
                                {
                                    // var_dump($_POST['connect'][0]);
                                    // var_dump((int)$_POST['connect'][0]);
                                    $collegeID = (int)$_POST['rej'];
                                    //flag0 means clg to company request
                                    //flag1 means company to clg request
                                    $query = $conn->prepare("DELETE FROM CollegeCompanyDashboard.Requests WHERE flag = 0 AND from_id=$collegeID AND to_id=$compID");
                                    $query->execute();
                                    echo "<meta http-equiv='refresh' content='0'>";
                                    // $result = $query->get_result();
                                    // $row = mysqli_fetch_array($result);
                                    // var_dump($row[6]);   
                                                         
                                    // $URL=$row[6];
                                    // echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
                                    // echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';                                    
                                }
                            ?>

                            <!-- <div  class="main-card mb-3 card newList">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <img style="width: 50%;height: 50%;margin-right: auto;margin-left: auto;" src="images123.png" alt="logo">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading"><h1 style="font-size: 3.5rem;">Google</h1></div>
                                                        
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
                                                        <div class="widget-heading"><h1 style="font-size: 1.3rem;">Past Institute</h1></div>
                                                        <div class="widget-subheading">IIT Bombay, IIT Kanpur, IIT kgp, IIT Bhilai</div>
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
                                                        <div class="widget-subheading">IIT Bombay is known for its 4 Year, 5 Year & 2 Year programmes for which the entry is through the Joint Entrance Examination – Advanced.</div>
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
                                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-primary">View Company
                                                        </button>
                                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-primary">Connect
                                                        </button>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-card mb-3 card newList">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <img style="width: 50%;height: 50%;margin-right: auto;margin-left: auto;" src="images123.png" alt="logo">
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="widget-content">
                                            <div class="widget-content-outer">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading"><h1 style="font-size: 3.5rem;">Google</h1></div>
                                                        
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
                                                        <div class="widget-heading"><h1 style="font-size: 1.3rem;">Past Institute</h1></div>
                                                        <div class="widget-subheading">IIT Bombay, IIT Kanpur, IIT kgp, IIT Bhilai</div>
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
                                                        <div class="widget-subheading">IIT Bombay is known for its 4 Year, 5 Year & 2 Year programmes for which the entry is through the Joint Entrance Examination – Advanced.</div>
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
                                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-primary">View Company
                                                        </button>
                                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-primary">Connect
                                                        </button>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            
                            
                            
                            
                           






                        
                            <?php require_once "php/footer.php"; ?> 
                 </div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
