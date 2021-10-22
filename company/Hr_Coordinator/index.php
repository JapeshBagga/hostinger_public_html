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

                    <!-- <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Dashboard
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip"
                                    data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-business-time fa-w-20"></i>
                                        </span>
                                        Buttons
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                        class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span>
                                                        Inbox
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Book
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span>
                                                        Picture
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                    <i class="nav-link-icon lnr-file-empty"></i>
                                                    <span>
                                                        File Disabled
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">New Student</div>

                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>150</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card mb-3 widget-content bg-arielle-smile">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">New Placement</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>67</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card mb-3 widget-content bg-grow-early">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">New Company</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>44</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card mb-3 widget-content bg-grow-early">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">New HRs</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>65</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-premium-dark">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Products Sold</div>
                                        <div class="widget-subheading">Revenue streams</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-warning"><span>$14M</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Institutes
                                    <div class="btn-actions-pane-right">

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Institutes  Name</th>
                                                <th class="text-center">Branch</th>
                                                <th class="text-center">Location</th>
                                                <th class="text-center">Website</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php                                
                                            $query = "SELECT * FROM CollegeCompanyDashboard.Colleges WHERE id IN (SELECT collId FROM CollegeCompanyDashboard.accepted WHERE compId=$compID) ORDER BY name";
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
                                            
                                            echo"<form method='POST' novalidate>
                                            <tr>
                                                <td class='text-center text-muted'>".($i+1)."</td>
                                                <td>
                                                    <div class='widget-content p-0'>
                                                        <div class='widget-content-wrapper'>
                                                            <div class='widget-content-left mr-3'>
                                                                <div class='widget-content-left'>

                                                                </div>
                                                            </div>
                                                            <div class='widget-content-left flex2'>
                                                                <div class='widget-heading'>".$row['name']."</div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class='text-center'>".$row['branch']."</td>
                                                <td class='text-center'>
                                                ".$row['loc']."
                                                </td>
                                                <td class='text-center'>
                                                    <button id='PopoverCustomT-1' name='vieww' value='".$row[0]."'
                                                        class='btn btn-primary btn-sm'>View</button>
                                                </td>
                                            </tr></form>";
                                                }
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>

                                <?php
                                    if(isset($_POST['vieww']))
                                    {
                                        // var_dump($_POST['connect'][0]);
                                        // var_dump((int)$_POST['connect'][0]);
                                        $colllID = (int)$_POST['vieww'];
                                        $query = "SELECT * FROM Colleges WHERE id=$colllID";
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

                                <div class="d-block text-center card-footer">
                                    <!-- <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                                            class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                    <button class="btn-wide btn btn-success">Save</button> -->
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
                                    data-target="#exampleModal"
                                    style="position: absolute; right: 20px; font-size: 16px;">
                                    Get your trial </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your trial is booked successfully</h5>

            </div>

        </div>
    </div>
</div>