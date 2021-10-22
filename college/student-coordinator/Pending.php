<!doctype html>
<?php
    require "php/connect.php";
    require "php/messageDisp.php";
    require "php/preCommonHeader.php";
    $hpending = "class='mm-active'";
    require "php/commonHeader.php";
?>
            <div class="app-main__outer">
                <div class="app-main__inner" style="padding-bottom: 90px ;">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Pending</h5>
                            <div class="mb-3 progress" style="height: 30px;">
                                <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"><h6>MM Groups</h6></div>
                            </div>
                            <div class="mb-3 progress"  style="height: 30px;">
                                <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><h6>KC Private Limited</h6></div>
                            </div>
                            <div class="mb-3 progress"  style="height: 30px;">
                                <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><h6>Suno</h6></div>
                            </div>
                            <div class="mb-3 progress"  style="height: 30px;">
                                <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"><h6>Hot Star</h6></div>
                            </div>
                            <div class="mb-3 progress"  style="height: 30px;">
                                <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"><h6>Amazon</h6></div>
                            </div>
                            <div class="mb-3 progress"  style="height: 30px;">
                                <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"><h6>Xeroax</h6></div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- <div class="app-main__inner">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Pending</h5>
                            <div class="mb-3 progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">MM Groups</div>
                            </div>
                            <div class="mb-3 progress">
                                <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">HSBC</div>
                            </div>
                            <div class="mb-3 progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">Sopra Bank</div>
                            </div>
                            <div class="mb-3 progress">
                                <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">Coforge</div>
                            </div>
                            <div class="mb-3 progress">
                                <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">Infosys</div>
                            </div>
                           
                        </div>
                    </div>
                    
                    
                </div> -->
            <?php
    require "php/commonEnd.php";
    
?>