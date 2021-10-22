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
                        <div class="col-md-6">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Post A job</h5>
                                        
                                        <div class="position-relative form-group"><label for="exampleEmail1" class="">Job
                                                Title</label><input name="title" id="exampleEmail1"
                                                placeholder="Job Title" type="text" class="form-control"></div>
                                        <div class="position-relative form-group"><label for="examplePassword2"
                                                class="">Skills Required</label><input name="skills"
                                                id="examplePassword2" placeholder="Skills" type="text"
                                                class="form-control"></div>
                                        <div class="position-relative form-group"><label for="examplePassword3"
                                                class="">Location</label><input name="loc" id="examplePasswor3"
                                                placeholder="Location" type="text" class="form-control"></div>
                                        <div class="position-relative form-group"><label for="examplePasswor4"
                                                class="">Starting Date</label><input name="startDate"
                                                id="examplePassword4" placeholder="Date" type="date"
                                                class="form-control"></div>
                                        <div class="position-relative form-group"><label for="examplePassword5"
                                                class="">Duration</label><input name="duration" id="examplePassword5"
                                                placeholder="Duration" type="text" class="form-control"></div>
                                        <div class="position-relative form-group"><label for="examplePassword6"
                                                class="">Job type</label><input name="jobType" id="examplePassword6"
                                                placeholder="Job type" type="text" class="form-control"></div>


                                        <!-- <div class="position-relative form-group"><label for="exampleText" class="">Text
                                                Area</label><textarea name="text" id="exampleText"
                                                class="form-control"></textarea></div> -->


                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main-card mb-3 card">
                                <div class="card-body">

                                    
                                        <div class="position-relative form-group"><label for="exampleEmail7" class="">
                                                No. of application for screening</label><input name="appScreen"
                                                id="exampleEmail7" placeholder="No. of application for screening"
                                                type="number" class="form-control"></div>
                                        <div class="position-relative form-group"><label for="examplePassword8"
                                                class="">Job description</label><textarea name="jobDesc" id="examplePassword8"
                                                class="form-control"></textarea></div>
                                        <div class="position-relative form-group"><label for="examplePassword9"
                                                class="">Stipend</label><input name="stipend" id="examplePassword9"
                                                placeholder="Stipend" type="number" class="form-control"></div>
                                        <div class="position-relative form-group"><label for="examplePassword10"
                                                class="">No. of openings</label><input name="openings"
                                                id="examplePassword10" placeholder="No. of openings" type="number"
                                                class="form-control"></div>
                                                <div class="position-relative form-group"><label for="examplePassword11"
                                                    class="">Last date to submit resume</label><input name="lastDate"
                                                    id="examplePassword11" placeholder="Last date to submit resume" type="date"
                                                    class="form-control"></div>




                                        <button class="mt-1 btn btn-primary" type="submit" name="appSubmit">Submit</button>
                                    
                                </div>
                            </div>
                            </form>
                        </div>


                    </div>





                </div>
               
                <!-- JQuery Validation -->
                <style>
                    .error {
                        color: red;
                    }
                </style>

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


                <?php require_once "php/footer.php"; ?>

            </div>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>