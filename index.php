<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <?php
    include 'config.php';
    $selectSQL = "SELECT * from home";
    if (!($selectRes = mysqli_query($conn, $selectSQL))) {
        echo 'Retrieval of data from Database Failed - #' . mysqli_errno($con) . ': ' . mysqli_error($con);
    } else {
        if (mysqli_num_rows($selectRes) == 0) {
            echo '<tr><td colspan="4">No Rows Returned</td></tr>';
        } else {
            $s  = 1;
            while ($row = mysqli_fetch_array($selectRes)) {
                // $d     = $s++;
                $title = $row[1];
                $description = $row[2];
                $keywords = $row[3];
                // $pageBanner = $row[4];
            }
        }
    }
    ?>
    <?php
                                                                        //BANNER 1//
            $query1 = "SELECT * FROM jobaskit.banners WHERE id = 1";
            $result1 = mysqli_query($jobconn, $query1);
            $row1 = mysqli_fetch_array($result1);
            $imageURL1 = 'seo/uploads/' . $row1["file_name"];
            $link1 = $row1["link"];?>
    <title><?php echo $title; ?></title>
    <meta name="keywords" content="keywords" content="<?php echo $keywords; ?>">
    <meta name="description" content="<?php echo $description; ?>.">

    <link rel="shortcut icon" href="images/Favicon - JoBaskit.svg">
    <!--SEO meta tags-->


    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
    <link href="http://fonts.googleapis.com/css?family=poppins:400,300,600,700" rel="stylesheet" type="text/css" />
    <link href="css/fontawesome-all.css" rel="stylesheet" />

    <title>Home</title>
    <!--title-->
    <link rel="stylesheet" href="styles.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <!--bootstrap css-->
    <!--title-->
    <link rel="stylesheet" href="css/styles-1.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stats.css" />
    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- aos css file cdn link  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src=
    "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity=
    "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
                crossorigin="anonymous">
            </script>
            <script src=
    "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity=
    "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous">
            </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WM5DP9T813"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-WM5DP9T813');
    </script>
    <style>
        .custom-shape-divider-bottom-1622027098 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .custom-shape-divider-bottom-1622027098 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 200px;
            transform: rotateY(180deg);
        }

        input:focus {
            box-shadow: none;
            outline: none !important;
        }

        .box-contact p,
        hr {
            margin-left: 70px;
        }

        .registerbtn {
            background-color: orange;
            color: white;
            padding: 12px 15px;
            margin-left: 70px;
            border: none;
            margin-top: 30px;
            cursor: pointer;
            width: 20%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            background-color: #007bff;
        }

        .custom-shape-divider-bottom-1622027098 .shape-fill {
            fill: #fe9504;
        }

        .register button:hover {
            background-color: #FFF;
            color: #fe9504;
            border-color: #B96C00
        }

        textarea {
            margin-left: 70px !important;
        }

        .modal-header {
            background-image: url("<?php echo $imageURL1; ?>");
        }

        .modal-header {
            height: 756px;
            width: 756px;
            background-size: cover;
            padding: 0px;
        }


        .btn-primary {
            color: #fff;
            background-color: #007bff;

            border: none;
        }

        .btn {
            background-color: orange !important;
        }

        .btn-primary:hover {
            background-color: #007bff !important;
        }

        .modal-footer {
            /* padding: 15px; */
            padding: 0px;
            border: none;
            text-align: center;
            bottom: 20%;
            left: 65%;
            position: absolute;
            /* border-top: 1px solid #e5e5e5; */
        }

        .modal-content {
            margin-left: -140px;
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0;
        }

        .register button {
            font-family: 'Fredoka One', cursive;
            width: 150px;
            margin-left: 70px !important;
            border-radius: 20px;
            position: grid;
            place-items: center;
            color: #fff;
            background-color: #fe9504;
            padding: 8px 24px;
            border-color: #B96C00;

        }

        .dropdown-item {
            font-family: 'Fredoka One';

            background-color: transparent;
        }

        .vid {
            margin-top: 6rem;
        }

        @media screen and (max-width: 768px) {
            .vid {
                margin-top: 1rem;
            }
        }
    </style>
</head>


<body>

    <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
    ?>


    <!--nav started-->
    <header>
        <?php
        include 'navigation.php';
        ?>
    </header>
    <!--nav ends-->
    <?php
    //BANNER 1
    if (isset($_POST['vieww1'])) {
        $URL = $link1;
        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
    }
    ?>
    <!--                                                    BANNERS
    <script type="text/javascript">
        $(document).ready(function(){
            $('#myModal').on('hidden.bs.modal',
            function(){
                setTimeout(function() {
                    $('#myNewModal').modal('show');
                }, 3000);
            })
        });
    </script>
    </script>|
    
    <script type="text/javascript">
        $(window).load(function() {
            // alert("hello");
            setTimeout(function() {
                $('#myModal').modal('show');
            }, 3000);
        });
    </script>
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-footer">

                        <form method="POST" novalidate><button class="btn btn-primary" name="vieww1">Read More</button></form>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="modal fade" id="myNewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-footer">

                        <form method="POST" novalidate><button class="btn btn-primary" name="vieww1">Read More</button></form>
                    </div>
                </div>


            </div>
        </div>
    </div>-->

    <section class="home" id="home">
        <div class="container mb-5 mt-5">
            <div class="row min-vh-100 align-items-center text-center text-md-left">
                <div class="col-lg-6 col-md-6 col-lg-6 mt-5" data-aos="fade-right">
                    <img class="imgg" src="images/Job hunt-pana.svg" alt="" />
                </div>
                <div class="col-lg-6 col-md-6 pl-md-5 content" data-aos="fade-left">
                    <h1 style="color: #fe9504; font-family: 'Fredoka One', cursive;">
                        <span style="color: #fe9504; font-family: 'Fredoka One', cursive;">Connect</span> With <span style="color: #fe9504; font-family: 'Fredoka One', cursive;">best</span> Campuses
                    </h1>
                    <h1 style="color: #fe9504; font-family: 'Fredoka One', cursive;"> and Recruiters in one place.</h1>

                </div>

            </div>
        </div>
    </section>

    <!--        SVG -->
    <div class="custom-shape-divider-bottom-1622027098" style="position: relative;">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>
    <!--        SVG -->

    <!-- <section style="margin: 0.5% 0 1% 0;">
        <div class="row" style="width: 75%;justify-content: center;">
            <div class="col-xl-12">
                <button class="btn btn-primary btn-lg" style="position: relative;left: 90%;">
                    <a href="register.html">Register</a>
                    </button>
            </div>
        </div>
    </section> -->
    <section style="margin: 0.5% 0 1% 0;">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-md-6 align-items-center justify-content">
                    <p style="font-size: 3rem;color:#382e29;"">Register now to get free <span style=" font-size: 2.5rem;color:#fe9504;">Early Access</span></p>
                </div>
                <div class="col-xl-2  col-md-6 align-items-center text-center justify-content register">
                    <button class="btn  btn-lg">
                        <a href="register.html" style=" font-family: 'Fredoka One', cursive;font-weight:200">Register</a>
                    </button>
                </div>
            </div>
        </div>


    </section>
    <section class="stats" style="margin-bottom: 20px;">
        <div class="section-counter paralax-mf bg-image" style="background-image: url(images/counters-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="ion-ios-people"></i></span>
                            </div>
                            <div class="counter-num">
                                <p class="counter">0</p>
                                <span class="counter-text">STUDENTS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="fas fa-graduation-cap"></i></span>
                            </div>
                            <div class="counter-num">
                                <p class="counter">0</p>
                                <span class="counter-text">COLLEGES</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="fas fa-building"></i></span>
                            </div>
                            <div class="counter-num">
                                <p class="counter">0</p>
                                <span class="counter-text">COMPANIES</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="fas fa-user-tie"></i></span>
                            </div>
                            <div class="counter-num">
                                <p class="counter">0</p>
                                <span class="counter-text">RECRUITERS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <!--homepage-->
        <div class="container">
            <h1 class="text-center text-capitalize pt5"><u style="font-size: 50px; ">About-us</u></h1>
        </div><br>
        <div class="container">
            <div class="row text-center">
                <div class="vid col-xl-5 col-lg-6 col-md-7 col-sm-12 col-xs-12 d-flex align-items-baseline justify-content-center mb-5">
                    <video controls class="img-fluid" style="border: 15px solid #fe9504; box-sizing:border-box">
                        <source src="video.mp4" />
                    </video>

                </div>
                <div class="col-xl-7 col-lg-6 col-md-5 col-sm-12 col-xs-12">
                    <h1 class="text-capitalize" style="width: 94%; margin:8px 0; ">What We Do?</h1>
                    <p class="para" id="paraa" style="text-align: justify;padding-top: 20px;font-size: 20px;letter-spacing: 0.8px;">In today’s tough times everything is at high stakes. As now placements are being widely conducted online, it becomes important that it is carried out smoothly and efficiently. JoBaskit is built to cater to your needs. A campus placement Solution built with complete analysis and proper understanding of the needs of students, institutions, and companies. The smart solution is designed to answer the needs and requirements of our clients.<br>With a network of Educational Institutions and Companies, placements are conducted and coordinated with efficiency. Our support and service are always with the client both before and after-sales.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="container box-contact">

        <h1>Contact <span style="color:orange">Us</span></h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <form method="POST">
            <label> NAME<span style="color: red">*</span></label>
            <input name="Name" type="text" class="form-control" id="name">

            <label>EMAIL<span style="color: red">*</span></label>
            <input name="Email" type="email" class="form-control" id="email">

            <label>Contact Number<span style="color: red">*</span></label>
            <input name="Contact" type="Number" class="form-control">

            <label>ENQUIRY<span style="color: red">*</span></label>
            <textarea name="Message" rows="3" maxlength="6000" class="form-control validate" id="message"></textarea>


            <button type="submit" name="register" class="registerbtn">Submit</button>

        </form>



    </div>
    <!--        SVG -->
    <div class="custom-shape-divider-bottom-1622027098" style="position: relative;">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
        </svg>
    </div>
    <!--        SVG -->

    <!--footer -->
    <?php
    include 'footer.php';
    ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script type="text/javascript">
        AOS.init({
            duration: 1000,
            delay: 400,
        });
    </script>

    <!--css Stylesheet-->
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <!--popper.js-->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <!--bootstrap.js-->

    <!-- JavaScript Libraries -->
    <!-- <script src="lib/jquery/jquery.min.js"></script> -->
    <!-- <script src="lib/jquery/jquery-migrate.min.js"></script> -->
    <!-- <script src="lib/popper/popper.min.js"></script> -->
    <!-- <script src="lib/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/counterup/jquery.waypoints.min.js"></script>
    <script src="lib/counterup/jquery.counterup.js"></script>
    <!-- <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <script src="js/stats.js"></script>

</body>

</html>