<!doctype html>
<?php
    require "php/connect.php";
    require "php/messageDisp.php";
    require "php/preCommonHeader.php";
    $hfvalid = "class='mm-active'";
    require "php/commonHeader.php";
    // echo "hello";
    // session_start();
    if(isset($_POST['appSubmit']))
    {
        $query = $conn->prepare("INSERT INTO CollegeCompanyDashboard.students(name, lname, email, phone, dob, portfolio, linkedin, degree, institute, cgpa, passingYr, courses, skills, company, workDesc, hobbies, achievements, activities, languages, files, twitter, insta, fb, pdegree, pinstitute, pcgpa, ppassingYr, designation, cStDate, cEndDate, referencess, rcompany, rtitle, remail, prefJob, relocate, wfh,coll_id) VALUES(?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
        $pfolio = ($_POST['portfolio'] != '') ? $_POST['portfolio'] : NULL;
        $linkedin = ($_POST['linkedin'] != '') ? $_POST['linkedin'] : NULL;
        $hobbies = ($_POST['hobbies'] != '') ? $_POST['hobbies'] : NULL;
        $achievements = ($_POST['achievements'] != '') ? $_POST['achievements'] : NULL;
        $activities = ($_POST['activities'] != '') ? $_POST['activities'] : NULL;
        $languages = ($_POST['languages'] != '') ? $_POST['languages'] : NULL;
        $files = ($_POST['files'] != '') ? $_POST['files'] : NULL;
        $twitter = ($_POST['twitter'] != '') ? $_POST['twitter'] : NULL;
        $insta = ($_POST['insta'] != '') ? $_POST['insta'] : NULL;
        $fb = ($_POST['fb'] != '') ? $_POST['fb'] : NULL;
        $pdegree = ($_POST['pdegree'] != '') ? $_POST['pdegree'] : NULL;
        $pinstitute = ($_POST['pinstitute'] != '') ? $_POST['pinstitute'] : NULL;
        $pcgpa = ($_POST['pcgpa'] != '') ? $_POST['pcgpa'] : NULL;
        $ppassingYr = ($_POST['ppassingYr'] != '') ? $_POST['ppassingYr'] : NULL;
        $designation = ($_POST['designation'] != '') ? $_POST['designation'] : NULL;
        $company = ($_POST['company'] != '') ? $_POST['company'] : NULL;
        $cStDate = ($_POST['cStDate'] != '') ? $_POST['cStDate'] : NULL;
        $cEndDate = ($_POST['cEndDate'] != '') ? $_POST['cEndDate'] : NULL;
        $referencess = ($_POST['referencess'] != '') ? $_POST['referencess'] : NULL;
        $workDesc = ($_POST['workDesc'] != '') ? $_POST['workDesc'] : NULL;
        
        $query->bind_param("sssisssssssssssssssssssssssssssssssssi", $_POST['name'], $_POST['lname'], $_POST['email'], $_POST['phone'], $_POST['dob'], $pfolio, $linkedin, $_POST['degree'], $_POST['institute'], $_POST['cgpa'], $_POST['passingYr'], $_POST['courses'], $_POST['skills'], $_POST['company'], $workDesc, $hobbies, $achievements, $activities, $languages, $files, $twitter, $insta, $fb, $pdegree, $pinstitute, $pcgpa, $ppassingYr, $designation, $cStDate, $cEndDate, $referencess, $_POST['rcompany'], $_POST['rtitle'], $_POST['remail'], $_POST['prefJob'], $_POST['relocate'], $_POST['wfh'],$collegeID);
        if($query->execute())
            echo success("Details recorded Successfully.");
        else
            // echo error_without_field("Couldn\'t record details. Please try again later");
            echo success($con->error);
    
        
    }
?>

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Application Form</h5>
                            <form class="needs-validation" method="POST" name = "appForm" id = "appForm" novalidate>
                                <!-- <i class="fa fa-fw text-center mb-3" aria-hidden="true" title="Copy to use sort-desc">Ý</i> -->
                                <h4 class="text-center mb-3"><span style='font-size:10px;position: relative;bottom: 6px;'>&#9899;</span> Personal Details</h4>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01">First name</label>
                                                <input type="text" class="form-control" id="validationCustom01" name="name"
                                                    placeholder="" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom02">Last name</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="lname"
                                                    placeholder="" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                           
        
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                       
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom03">Email</label>
                                                <input type="email" class="form-control" id="validationCustom03" name="email"
                                                    placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Email
        
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom37">Phone Number</label>
                                                <input type="tel" class="form-control" id="validationCustom37" name="phone"
                                                    placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Phone Number
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom04">Date of Birth</label>
                                                <input type="date" class="form-control" id="validationCustom04" name="dob"
                                                    placeholder="State" required>
                                                <div class="invalid-feedback">
                                                    Please provide a Date of Birth.
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom05">Portfolio</label>
                                                <input type="text" class="form-control" id="validationCustom05" name="portfolio"
                                                    placeholder="">
                                                <div class="invalid-feedback">
                                                    Please provide a valid Portfolio Link.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <hr  style="border: 1px dashed rgb(202, 198, 198);"> <h4 class="text-center mb-3"><span style='font-size:10px;position: relative;bottom: 5px;'>&#9899;</span> Social Details</h4>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom06">LinkedIn</label>
                                                <input type="text" class="form-control" id="validationCustom06" name="linkedin"
                                                    placeholder="LinkedIn URL" >
                                                <div class="invalid-feedback">
                                                    Please provide a valid link .
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom07">Twitter</label>
                                                <input type="text" class="form-control" id="validationCustom07" name="twitter"
                                                    placeholder="Twitter URL" value="" >
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                           
        
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom08">Instagram</label>
                                                <input type="text" class="form-control" id="validationCustom08" name="insta"
                                                    placeholder="Instagram URL" value="" >
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom09">Facebook</label>
                                                <input type="text" class="form-control" id="validationCustom09" name="fb"
                                                    placeholder="Facebook URL" >
                                                <div class="invalid-feedback">
                                                    Please provide a valid link
        
                                                </div>
                                            </div>
                                           
        
                                        </div>
                                    </div>
                                </div>
                                
                                <hr style="border: 0.5px dashed rgb(202, 198, 198);">  <h4 class="text-center mb-3"><span style='font-size:10px;position: relative;bottom: 6px;'>&#9899;</span> Education Details</h4>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <h5 class="card-title">UG Educational Details</h5>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom10">Course/Degree</label>
                                                <input type="text" class="form-control" id="validationCustom10" name="degree"
                                                    placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid course
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom11">Name of Institute</label>
                                                <input type="text" class="form-control" id="validationCustom11" name="institute"
                                                    placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Please provide a Name of Institute .
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom12">Percentage/C.G.P.A</label>
                                                <input type="text" class="form-control" id="validationCustom12" name="cgpa"
                                                    placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Percentage/C.G.P.A .
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom13">Passing Year</label>
                                                <input type="number" class="form-control" id="validationCustom13" placeholder="" name="passingYr"
                                                    required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid Passing Year .
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <h5 class="card-title">PG Educational Details</h5>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom14">Course/Degree</label>
                                                <input type="text" class="form-control" id="validationCustom14" name="pdegree"
                                                    placeholder="">
                                                <div class="invalid-feedback">
                                                    Please provide a valid course
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom15">Name of Institute</label>
                                                <input type="text" class="form-control" id="validationCustom15" name="pinstitute"
                                                    placeholder="" >
                                                <div class="invalid-feedback">
                                                    Please provide a Name of Institute .
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom16">Percentage/C.G.P.A</label>
                                                <input type="text" class="form-control" id="validationCustom16" name="pcgpa"
                                                    placeholder="" >
                                                <div class="invalid-feedback">
                                                    Please provide a valid Percentage/C.G.P.A .
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom17">Passing Year</label>
                                                <input type="number" class="form-control" id="validationCustom17" placeholder="" name="ppassingYr"
                                                    >
                                                <div class="invalid-feedback">
                                                    Please provide a valid Passing Year .
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border: 0.5px dashed rgb(202, 198, 198);"> 
                              
                                
                                <h4 class="text-center mb-3"><span style='font-size:10px;position: relative;bottom: 6px;'>&#9899;</span> Courses</h4>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom18">Courses</label>
                                        <input type="text" class="form-control" id="validationCustom18" name="courses"
                                            placeholder="Courses" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label for="validationCustom19">Skills</label>
                                        <input type="text" class="form-control" id="validationCustom19" name="skills"
                                            placeholder="Skills" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <hr style="border: 0.5px dashed rgb(202, 198, 198);"> 
                                <h4 class="text-center mb-3"><span style='font-size:10px;position: relative;bottom: 3px;'>&#9899;</span> Work Experience</h4>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom20">Designation</label>
                                        <input type="text" class="form-control" id="validationCustom20" name="designation"
                                            placeholder="Designation">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom21">Company name</label>
                                        <input type="text" class="form-control" id="validationCustom21" name="company"
                                            placeholder="Company name">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom22">Start Date</label>
                                        <input type="date" class="form-control" id="validationCustom22" name="cStDate"
                                            placeholder="Start Date">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom23">End Date</label>
                                        <input type="date" class="form-control" id="validationCustom23" name="cEndDate"
                                            placeholder="End Date">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom24">Job Description</label>
                                        <input type="text" class="form-control" id="validationCustom24" name="workDesc"
                                            placeholder="Job Description">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>

                                    </div>
                                </div>
                                <hr style="border: 0.5px dashed rgb(202, 198, 198);"> 

                                <h5 class="card-title">Additional Details</h5>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom25">Hobbies</label>
                                        <input type="text" class="form-control" id="validationCustom25" name="hobbies"
                                            placeholder="Hobbies" >
                                        <div class="invalid-feedback">
                                            Please provide a valid value
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom26">Achievements</label>
                                        <input type="text" class="form-control" id="validationCustom26" name="achievements"
                                            placeholder="Achievements" >
                                        <div class="invalid-feedback">
                                            Please provide Achievements.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom27">Activities</label>
                                        <input type="text" class="form-control" id="validationCustom27" name="activities"
                                            placeholder="Activities" >
                                        <div class="invalid-feedback">
                                            Please provide Activities .
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom28">Languages Known</label>
                                        <input type="text" class="form-control" id="validationCustom28" name="languages"
                                            placeholder="Languages Known">
                                        <div class="invalid-feedback">
                                            Please provide Languages Known .
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title">Reference</h5>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom29">Referee's name</label>
                                        <input type="text" class="form-control" id="validationCustom29" name="referencess"
                                            placeholder="Referee's name" >
                                        <div class="invalid-feedback">
                                            Please provide a valid value.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom30">Name of company</label>
                                        <input type="text" class="form-control" id="validationCustom30" name="rcompany"
                                            placeholder="Achievements" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid value.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom31">Job Title</label>
                                        <input type="text" class="form-control" id="validationCustom31" name="rtitle"
                                            placeholder="Name of Company" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid value .
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom32">Email</label>
                                        <input type="email" class="form-control" id="validationCustom32" name="remail"
                                            placeholder="email" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid email .
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title">Preferred Job Location</h5>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom33">Job location</label>
                                        <input type="text" class="form-control" id="validationCustom33" name="prefJob"
                                            placeholder="Job location" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid value.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom34">Candidate ready to relocate</label>
                                        <input type="text" class="form-control" id="validationCustom34" name="relocate"
                                            placeholder="Candidate ready to relocate" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid value.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom35">Work from home/Work from office</label>
                                        <input type="text" class="form-control" id="validationCustom35" name="wfh"
                                            placeholder="Work from home/Work from office" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid value .
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-6">
                                            <label for="validationCustom36">Upload Resume</label>
                                            <input type="file" class="form-control" id="validationCustom36" name="files" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid value
                                            </div>
                                        </div>
                                    </div>
                                </div>
                          
                                <hr>
                                <button class="btn btn-primary" type="submit" name = "appSubmit">Submit form</button>
                            </form>

                            <!-- <script>
                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                (function () {
                                    'use strict';
                                    window.addEventListener('load', function () {
                                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                        var forms = document.getElementsByClassName('needs-validation');
                                        // Loop over them and prevent submission
                                        var validation = Array.prototype.filter.call(forms, function (form) {
                                            form.addEventListener('submit', function (event) {
                                                if (form.checkValidity() === false) {
                                                    event.preventDefault();
                                                    event.stopPropagation();
                                                }
                                                form.classList.add('was-validated');
                                            }, false);
                                        });
                                    }, false);
                                })();
                            </script> -->

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
                                        name: {
                                            required: true,
                                            minlength: 3,
                                            maxlength: 1000,
                                        },
                                        lname: {
                                            required: true,
                                            minlength: 3,
                                            maxlength: 1000,
                                        },
                                        email: {
                                            required: true,
                                            email: true,
                                            maxlength: 1000,
                                        },
                                        phone: {
                                            required: true,
                                            rangelength: [10, 12],
                                            digits: true,
                                        },
                                        dob: {
                                            required: true,
                                            date: true,
                                        },
                                        portfolio: {
                                            required: false,
                                            url: true,
                                            maxlength: 1000,
                                        },
                                        linkedin: {
                                            required: false,
                                            url: true,
                                            maxlength: 1000,
                                        },
                                        degree: {
                                            required: true,
                                            maxlength: 1000,
                                        },
                                        institute: {
                                            required: true,
                                            maxlength: 1000,
                                        },
                                        cgpa: {
                                            required: true,
                                            number: true,
                                            max: 100,
                                        },
                                        passingYr: {
                                            required: true,
                                            digits: true,
                                        },
                                        courses: {
                                            required: true,
                                            maxlength: 1000,
                                        },
                                        skills: {
                                            required: true,
                                            maxlength: 1000,
                                        },
                                        designation: {
                                            required: false,
                                            maxlength: 1000,
                                        },
                                        company: {
                                            required: false,
                                            maxlength: 1000,
                                        },
                                        cStDate: {
                                            required: false,
                                            date: true,
                                        },
                                        cEndDate: {
                                            required: false,
                                            date: true,
                                        },
                                        workDesc: {
                                            required: false,
                                            maxlength: 1000,
                                        },
                                        hobbies: {
                                            required: false,
                                            maxlength: 1000,
                                        },
                                        achievements: {
                                            required: false,
                                            maxlength: 1000,
                                        },
                                        activities: {
                                            required: false,
                                            maxlength: 1000,
                                        },
                                        languages: {
                                            required: false,
                                            maxlength: 1000,
                                        },
                                        files: {
                                            required: false,
                                            maxlength: 1000,
                                        },
                                        twitter: {
                                            required: false,
                                            url: true,
                                            maxlength: 1000,
                                        },
                                        insta: {
                                            required: false,
                                            url: true,
                                            maxlength: 1000,
                                        },
                                        fb: {
                                            required: false,
                                            url: true,
                                            maxlength: 1000,
                                        },
                                        pdegree: {
                                            required: false,
                                            maxlength: 1000,
                                        },
                                        pinstitute: {
                                            required: false,
                                            maxlength: 1000,
                                        },
                                        pcgpa: {
                                            required: false,
                                            number: true,
                                            max: 100,
                                        },
                                        ppassingYr: {
                                            required: false,
                                            digits: true,
                                        },
                                        referencess: {
                                            required: false,
                                            minlength: 3,
                                            maxlength: 1000,
                                        },
                                        rcompany: {
                                            required: true,
                                            maxlength: 1000,
                                        },
                                        rtitle: {
                                            required: true,
                                            maxlength: 1000,
                                        },
                                        remail: {
                                            required: true,
                                            email: true,
                                            maxlength: 1000,
                                        },
                                        prefJob: {
                                            required: true,
                                            maxlength: 1000,
                                        },
                                        relocate: {
                                            required: true,
                                            maxlength: 1000,
                                        },
                                        wfh: {
                                            required: true,
                                            maxlength: 1000,
                                        },
                                    },
                                    messages: {
                                        name: {
                                            required: 'Please enter Name.',
                                            maxlength: "Name should be less than 1000 characters",
                                            mixlength: "URL should be greater than 3 characters"
                                        },
                                        lname: {
                                            required: 'Please enter Last Name.',
                                            maxlength: "Last Name should be greater than 3 characters",
                                        },
                                        email: {
                                            required: 'Please enter Email Address.',
                                            email: 'Please enter a valid Email Address.',
                                        },
                                        phone: {
                                            required: 'Please enter Contact.',
                                            rangelength: 'Contact should be 10-12 digit number.',
                                        },
                                        dob: {
                                            required: 'Please enter DOB',
                                            date: 'Please enter a valid Date',
                                        },
                                        portfolio: {
                                            url: "Please enter a valid URL",
                                            maxlength: "URL should be less than 1000 characters",
                                        },
                                        linkedin: {
                                            url: "Please enter a valid URL",
                                            maxlength: "URL should be less than 1000 characters",
                                        },
                                        degree: {
                                            required: "Please enter a Degree",
                                            maxlength: "Degree should be less than 1000 characters",
                                        },
                                        institute: {
                                            required: "Please enter a Institute",
                                            maxlength: "Inst name should be less than 1000 characters",
                                        },
                                        cgpa: {
                                            required: "Please enter cgpa",
                                            number: "Please enter a valid number",
                                            max: "cgpa should be less than 100",
                                        },
                                        passingYr: {
                                            required: "Please enter Passing Year",
                                            digits: "Please enter a valid Year",
                                        },
                                        courses: {
                                            required: "Please enter course",
                                            maxlength: "Courses should be less than 1000 characters",
                                        },
                                        skills: {
                                            required: "Please enter skills",
                                            maxlength: "Skills should be less than 1000 characters",
                                        },
                                        workExp: {
                                            required: "Please enter start date",
                                            date: "Please enter a valid Date",
                                        },
                                        workDesc: {
                                            required: "Please enter description",
                                            maxlength: "Desc should be less than 1000 characters",
                                        },
                                        hobbies: {
                                            maxlength: "Hobbies should be less than 1000 characters",
                                        },
                                        achievements: {
                                            maxlength: "Ach should be less than 1000 characters",
                                        },
                                        activities: {
                                            maxlength: "Acts should be less than 1000 characters",
                                        },
                                        languages: {
                                            maxlength: "Langs should be less than 1000 characters",
                                        },
                                        files: {
                                            required: "Please attach resume",
                                            maxlength: "file name should be less than 1000 characters",
                                        },
                                        twitter: {
                                            url: "Please enter a valid URL",
                                            maxlength: "URL should be less than 1000 characters",
                                        },
                                        insta: {
                                            url: "Please enter a valid URL",
                                            maxlength: "URL should be less than 1000 characters",
                                        },
                                        fb: {
                                            url: "Please enter a valid URL",
                                            maxlength: "URL should be less than 1000 characters",
                                        },
                                        pdegree: {
                                            maxlength: "Degree should be less than 1000 characters",
                                        },
                                        pinstitute: {
                                            maxlength: "Degree should be less than 1000 characters",
                                        },
                                        pcgpa: {
                                            number: "Please enter a valid number",
                                            max: "cgpa should be less than 100",
                                        },
                                        ppassingYr: {
                                            digits: "Please enter a valid year",
                                        },
                                        referencess: {
                                            maxlength: "Name should be less than 1000 characters",
                                            minlength: "URL should be greater than 3 characters",
                                        },
                                        rcompany: {
                                            required: "Please enter a company name",
                                            maxlength: "Inst name should be less than 1000 characters",
                                        },
                                        rtitle: {
                                            required: "Please enter job title",
                                            maxlength: "Inst name should be less than 1000 characters",
                                        },
                                        remail: {
                                            required: 'Please enter Email Address.',
                                            email: 'Please enter a valid Email Address.',
                                        },
                                        prefJob: {
                                            required: "Please enter job title",
                                            maxlength: "Inst name should be less than 1000 characters",
                                        },
                                        relocate: {
                                            required: "Please enter relocation status",
                                            maxlength: "Inst name should be less than 1000 characters",
                                        },
                                        wfh: {
                                            required: "Please enter wfh status",
                                            maxlength: "Inst name should be less than 1000 characters",
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