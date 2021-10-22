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
                $query = "SELECT * FROM CollegeCompanyDashboard.Colleges WHERE id IN (SELECT to_id FROM CollegeCompanyDashboard.Requests WHERE (flag=1 AND from_id=$compID)) ORDER BY name";
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
                        $row = mysqli_fetch_array($result);
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
                                        <!-- <div class='widget-content-left'>
                                            <div class='widget-heading'>Campus Locations</div>
                                            <div class='widget-subheading'>".$row[4]."</div>
                                        </div> -->
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
                                            <button class='mb-2 mr-2 btn-transition btn btn-outline-primary'>Requested
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
                    <!-- <div class='main-card mb-3 card newList'>
                        <div class='row'>
                            <div class='col-lg-6 col-xl-4'>
                                <div class='widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <img style="width: 50%;height: 50%;margin-right: auto;margin-left: auto;"
                                                src="assets\images\images123.png" alt="logo">
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
                                                    <h1 style="font-size: 3.5rem;">KT University</h1>
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
                                                <div class="widget-subheading">Bombay, Chennai, kgp,
                                                    Bhilai</div>
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
                                                <div class="widget-subheading">Chennai, Tamil Nadau</div>
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
                                                <div class="widget-subheading">KT is known for its 4 Year, 5
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
                            </div>
                        </div>
                    </div>
              
                  
                   
                    
                
                    
                </div> -->
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
</body>

</html>