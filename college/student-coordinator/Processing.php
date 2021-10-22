<!doctype html>
<?php
    require "php/connect.php";
    require "php/messageDisp.php";
    require "php/preCommonHeader.php";
    $hprocess = "class='mm-active'";
    require "php/commonHeader.php";
?>
            <div class="app-main__outer">
                <div class="app-main__inner" style="padding-bottom: 80px;">
                    <div class="main-card mb-3 card" >
                        <div class="card-body">
                            <h5 class="card-title">Progress </h5>
                            <div class="mb-3 progress" style="height: 40px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 25%;background-color:#ff9500"  >
                                    <h6 style="font-size: 1.4rem;">Wipro</h6>
                                </div>
                            </div>

                            <div class="mb-3 progress" style="height: 40px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 50%;background-color:#ff9500" >
                                    <h6 style="font-size: 1.4rem;">TCS</h6>
                                </div>
                            </div>
                            <div class="mb-3 progress" style="height: 40px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 75%;background-color:#ff9500" >
                                    <h6 style="font-size: 1.4rem;">IBM</h6>
                                </div>
                            </div>
                            <div class="mb-3 progress" style="height: 40px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 80%;background-color:#ff9500" >
                                    <h6 style="font-size: 1.4rem;">Tech Mahindra</h6>
                                </div>
                            </div>
                            <div class="mb-3 progress" style="height: 40px;">
                                <div class="progress-bar role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 50%;background-color:#ff9500" >
                                    <h6 style="font-size: 1.4rem;">Makos Infotech</h6>
                                </div>
                            </div>
                            <div class="mb-3 progress" style="height: 40px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;background-color:#ff9500">
                                    <h6 style="font-size: 1.4rem;">Paypal</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Progress </h5>
                            <div class="mb-3 progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">TCS</div>
                            </div>
                        
                            <div class="mb-3 progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">Wipro</div>
                            </div>
                            <div class="mb-3 progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">Capgemini</div>
                            </div>
                            <div class="mb-3 progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Amdocs</div>
                            </div>
                          
                        </div>
                    </div> -->
                  
                    
                </div>
            
                <?php
    require "php/commonEnd.php";
    
?>