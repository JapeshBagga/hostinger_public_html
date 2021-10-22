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
                    <div class="container">
                    <div class="row" style="width: 100%; margin: auto;">
                        <div class="col-md-12">
                            <div class="mb-3 mt-3 ml-5  text-center card card-body"
                                style="height: 250px;">
                                <h1 style="font-size: x-large;" class="card-title">Add New HR Coordinator</h1>
                                <!-- <hr> -->
                                <br><br>
                                <form action="">
                                    <div class="form-group">
                                        <!-- <label for="email" class="label1">
                                            <h4>Email address:</h4>
                                        </label> -->
                                        <input type="email" class="form-control input1" name="email"
                                            placeholder="Enter Email ID">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary button1">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
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
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>