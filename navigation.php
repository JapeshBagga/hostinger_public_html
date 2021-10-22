<?php  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
?>
<head>
<link relation="type/css" href="nav.css">
<style>
   
</style>
</head>
<nav class="navbar navbar-expand-lg navbar-light fixed-top navi ">
    <div class="container">
        <a class="navbar-brand" href="index.php" >
            <img src="images/jobaskit4.png" class="img-fluid" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="position: relative;left: 2rem;">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="whyus.php"
                        style="margin-top: 0.08rem;text-decoration: none;font-size: 1.2rem; font-weight:500; color:#000;">Why-us</a>
                </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href"#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1.2rem; font-weight:500; color:#000;">
                          For College
                        </a>
              
                        <div class="dropdown-menu dropdown-buttons" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="feature_1.php" style="font-size: 1.3rem; font-weight:500; color:#000;">Features</a>
                            <a class="dropdown-item" href="guide-college.php" style="font-size: 1.3rem; font-weight:500; color:#000;">Guide</a>
                            
                            <a class="dropdown-item" href="images/JoBaskitBrochure_Campus.pdf" target="_blank" style="font-size: 1.3rem; font-weight:500; color:#000;">Product <br>
                            Proposal</a>
                        </div>
                        </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="pricing.php"
                        style="margin-top: 0.08rem;text-decoration: none;font-size: 1.3rem">Pricing</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1.2rem; font-weight:500; color:#000;">
                        For Company
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="feature.php" style="font-size: 1.3rem; font-weight:500; color:#000;">Features</a>
                        <a class="dropdown-item" href="guide-company.php" style="font-size: 1.3rem; font-weight:500; color:#000;">Guide</a>

                        <a class="dropdown-item" href="guide-company.php" style="font-size: 1.3rem; font-weight:500; color:#000;">Product <br>
                            Proposal</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php"
                        style="margin-top: 0.08rem;text-decoration: none;font-size: 1.2rem; font-weight:500; color:#000;">Contact Us</a>
                </li>
                <li class="nav-item"
                    style="padding-left: 0.7rem;padding-right: 0.7rem; padding-left: 0.7rem; padding-top: 0.3rem; color:hover=white !important;">
                    <a class="nav-link btn btn-primary text-white" id="buttons"
                        href="register.html">Get Instant Demo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>