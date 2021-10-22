<?php 
session_start();
if(isset($_SESSION["role_id"])) {
       header("Location: login.php");;
    }

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/signup.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6 col-xs-12 ">
                <img src="images/jobaskit4.png" class="logo">
                <div class="d-none d-sm-block">
                    <h6 class="title">We provide you best job opportunities.</h6>
                </div>
                <div class="d-none d-sm-block">
                    <img class="pic2" src="images/job.jpg">
                </div>
            </div>
            <!--Form Starts-->
            <div class="col-sm-6 col-lg-6 col-xs-12 ">
                <div class="signup-form" id="form">
                    <form action="home.php" method="post">
                        <h4>Sign Up</h4>
                        <p>Please fill in this form to create an account!</p>
                        <hr>
                        <input type="hidden" id="role_id" name="role_id" >
                        <p class="ra">Institute<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck">
                        Company<input type="radio" onclick="javascript:noCheck();" name="yesno" id="nooCheck"><br></p>
                        <!--Institute-->
                        <div id="ifYes" style="display: none ; padding-bottom: 20px">
                            <div class="form-row">
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="colName" placeholder="Name" id="colName" 
                                                 >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="tel" class="form-control" name="collegeContact_Number" id="collegeContact_Number" 
                                                placeholder="Contact Number" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="email" class="form-control" name="collegeemail" placeholder="Email" id="collegeemail" 
                                                >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="collegename" placeholder="University Name" id="collegename" 
                                                >
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                            <!-- <div class="form-row">
                                <div class="col-lg-12 col-xs-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="UniversityAddress" id="UniversityAddress"  placeholder="University Address"
                                                  id="color">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-row">
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                                    <!--  onchange='checkvalue(this.value)' -->
                                            <select name="Universitytype" class="form-control" id="Universitytype" >
                                                <option value="" disabled selected hidden>
                                                    University type</option>
                                                <option value="Governmen">Government</option>
                                                <option value="Governmen">Private</option>
                                                <option value="affliated">Affliated</option>
                                                <option value="Standalone">Standalone</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select name="collegeCountry" id="collegeCountry" class="form-control" placeholder="choose">
                                                    <option value="" disabled selected hidden>
                                                        Country</option>
                                                    <option value="India">India</option>


                                                </select>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">

                                            <div class="input-group-prepend">
                                                <select name="collegeState" id="collegeState" class="form-control" placeholder="choose">

                                                    <option id="" value="" disabled selected hidden>
                                                        State</option>
                                                    <option value="India">India</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and
                                                        Nicobar
                                                        Islands</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar
                                                        Haveli
                                                    </option>
                                                    <option value="Daman and Diu">Daman and Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Odisha">Odisha</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="collegecity" placeholder="City" id="collegecity" 
                                                >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="collegestreet" id="collegestreet" placeholder="Street"
                                                >
                                        </div>
                                    </div>
                                </div>
                                
                                    <div class="col-lg-6 col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                                <input type="password" class="form-control" name="collegepassword"  id="collegepassword" 
                                                    placeholder="Password" >
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!--Company-->
                        <div id="ifno" style="display: none; padding-bottom: 20px;">
                            <div class="form-row">
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="comName" placeholder="Name" id="comName" 
                                                >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="tel" class="form-control" name="companyContactNumber" id="companyContactNumber" 
                                                placeholder="Contact Number" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="email" class="form-control" name="companyemail" placeholder="Email ID" id="companyemail" 
                                                >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="comapnyname" id="comapnyname" 
                                                placeholder="Name of Company" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="companyucc" placeholder="UCC" id="companyucc" 
                                                >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select name="Companytype" id="Companytype" class="form-control" placeholder="choose">
                                                    <option value="" disabled selected hidden>
                                                        Company type</option>
                                                    <option value="Governmen">Proprietary</option>
                                                    <option value="Governmen">LLP</option>
                                                    <option value="Governmen">Private Limited</option>
                                                    <option value="Governmen">Public Limited</option>
                                                    <option value="Governmen">Start up</option>


                                                </select>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select name="companyCountry" id="companyCountry" class="form-control" placeholder="choose">
                                                    <option value="" disabled selected hidden>
                                                        Country</option>
                                                    <option value="India">India</option>
                                                </select>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <select name="companyState" id="companyState" class="form-control" placeholder="choose">
                                                    <option value="" disabled selected hidden>
                                                        State</option>
                                                    <option value="India">India</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar
                                                        Islands</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli
                                                    </option>
                                                    <option value="Daman and Diu">Daman and Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Odisha">Odisha</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                </select>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">


                                            </div>
                                            <input type="search" class="form-control" name="companycity" id="companycity" placeholder="City"
                                                >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">

                                            </div>
                                            <input type="text" class="form-control" name="companystreet" id="companystreet" placeholder="Street"
                                                >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-xs-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">


                                            </div>
                                            <input type="password" class="form-control" name="companypassword" id="companypassword" placeholder="Password"
                                                >
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>

                        <input type="hidden" name="work" value="Signup">
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-primary btn-lg">Sign Up</button>
                            </div>
                    </form>
                    <!--Form Ends-->

                </div>


            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="mainfooter text-center" role="contentinfo">
        <div class="footer-middle">
            <div class="container">


                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <h4>Follow Us</h4>
                        <p>Join millions of people who organize work and life with Todoist.</p>
                        <ul class="social-network social-circle">

                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4 class="text-left">FEATURES</h4>
                            <ul class="list-unstyled text-left">

                                <li><a href="#">How It Works</a></li>
                                <li><a href="#">For Teams</a></li>
                                <li><a href="#"> Templates</a></li>
                                <li><a href="#">Pricing</a></li>

                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4 class="text-left">COMPANY</h4>
                            <ul class="list-unstyled text-left">
                                <li><a href="#"> We are Hiring</a></li>
                                <li><a href="#"> About Us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Twist</a></li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4 class="text-left">Resources</h4>
                            <ul class="list-unstyled text-left">
                                <li><a href="#"> Productivity Methods</a></li>
                                <li><a href="#"> Channel Partners</a></li>
                                <li><a href="#"> Developer APIs</a></li>
                                <li><a href="#">Download Apps</a></li>
                                <li><a href="#"> Refer a Friend</a></li>
                                <li><a href="#"> Help Center</a></li>
                                <li><a href="#"> Integrations</a></li>
                            </ul>
                        </div>
                    </div>


                </div>



            </div>
        </div>
    </footer>
    <!--footer ends-->

   
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script language="Javascript">
        function yesnoCheck() {

            if ($("#yesCheck").prop("checked", true)) {
                $("#ifYes").show();
                $("#ifno").hide();
                $("#role_id").val('college')
            }
            else{
                $("#ifYes").hide();
            }

        }
        function noCheck() {
            if ($("#nooCheck").prop("checked", true)) {
                $("#ifno").show();
                $("#ifYes").hide();
                $("#role_id").val('company')
            }
            else{
                $("#ifno").hide();
            }
            
        }
        /*function checkvalue(val) {
            if (val === "affliated")
                document.getElementById('color').style.display = 'block';
            else
                document.getElementById('color').style.display = 'none';
        }*/

    </script>    
</body>

</html>