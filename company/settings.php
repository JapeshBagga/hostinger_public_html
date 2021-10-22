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
                <form method="POST" name = "appForm" id = "appForm" novalidate>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Settings</h5>
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail7" class="">Change Password</label>
                                        <input name="change password"id="exampleEmail7" placeholder="change your old password" type="number" class="form-control">
                                    </div>
                                    <!--<div class="position-relative form-group">-->
                                    <!--    <label for="examplePassword9"class="">forget password</label>-->
                                    <!--    <input name="forget password" id="examplePassword9"placeholder="forget password" type="number" class="form-control">-->
                                    <!--</div>-->
                                    <div class="position-relative form-group">
                                        <label for="examplePassword8"class=""></label>
                                        <textarea name="privacy_policy" id="examplePassword8" rows=10 placeholder="Edit your Privacy Policy"class="form-control"></textarea>
                                    </div>
                                    

                                    <button class="mt-1 btn btn-primary" type="submit" name="appSubmit">Submit</button>
                                    <button class="mt-1 btn btn-danger text-right" type="forget" name="forget">Forget Password</button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                </form>
                </div>
            </div>

            <?php require_once "php/footer.php"; ?>
        </div>
               
                <?php
                    if(isset($_POST['appSubmit']))
                    {
                        $query = $conn->prepare("INSERT INTO CollegeCompanyDashboard.Jobs(comp_id,title,loc,lastDate,skills,startDate,duration,jobType,appScreen,jobDesc,stipend,openings) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
                        $query->bind_param("isssssssissi", $compID, $_POST['title'],$_POST['loc'], $_POST['lastDate'], $_POST['skills'], $_POST['startDate'], $_POST['duration'], $_POST['jobType'], $_POST['appScreen'], $_POST['jobDesc'],$_POST['stipend'],$_POST['openings']);
                        if($query->execute())
                            echo success("Details recorded Successfully.");
                        else
                            // echo error_without_field("Couldn\'t record details. Please try again later");
                            echo success($con->error);
                    }
                ?>

       </div>
     </div>
   </div>
    <style>
        .error {
            color: red;
        }
    </style>
    <!-- JQuery Validation -->
    <script>
        $(document).ready(function () {
            $("#appForm").validate({
            rules: {
                title: {
                    required: true,
                    minlength: 3,
                    maxlength: 1000,
                },
                skills: {
                    required: true,
                    maxlength: 1000,
                },
                loc: {
                    required: true,
                    maxlength: 1000,
                },
                startDate: {
                    required: true,
                    date: true,
                },
                duration: {
                    required: true,
                    maxlength: 1000,
                },
                jobType: {
                    required: true,
                    maxlength: 1000,
                },
                appScreen: {
                    required: true,
                    digits: true,
                },
                jobDesc: {
                    required: true,
                    maxlength: 1000,
                },
                stipend: {
                    required: true,
                    number: true,
                },
                openings: {
                    required: true,
                    digits: true,
                },
                lastDate: {
                    required: true,
                    date: true,
                },
            },
            messages: {
                title: {
                    required: 'Please enter Title.',
                    maxlength: "Title should be less than 1000 characters",
                    minlength: "Title should be greater than 3 characters"
                },
                skills: {
                    required: 'Please enter Skills.',
                    maxlength: "Skills should be less than 1000 characters",
                },
                loc: {
                    required: 'Please enter Location.',
                    maxlength: "Location should be less than 1000 characters",
                },
                startDate: {
                    required: 'Please enter Start Date',
                    date: 'Please enter a valid Date',
                },
                duration: {
                    required: 'Please enter Duration.',
                    maxlength: "Duration should be less than 1000 characters",
                },
                jobType: {
                    required: 'Please enter Job Type.',
                    maxlength: "Job Type should be less than 1000 characters",
                },
                appScreen: {
                    required: 'Please enter no of screens.',
                },
                jobDesc: {
                    required: 'Please enter Job Description.',
                    maxlength: "Job Desc should be less than 1000 characters",
                },
                stipend: {
                    required: 'Please enter Stippend amount.',
                },
                openings: {
                    required: 'Please enter Openings.',

                },
                lastDate: {
                    required: 'Please enter Last Date',
                    date: 'Please enter a valid Date',
                },
            },
            errorElement : 'div',
            // errorLabelContainer: '.errorTxt',
            errorPlacement: function(error, element) {
                    error.insertAfter(element);
            },
            submitHandler: function (form) {
                form.submit();
            }
            });
        });
        
    </script>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>