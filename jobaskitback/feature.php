<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php
    include 'config.php';
    $selectSQL = "SELECT * from cguide";
    if( !( $selectRes = mysqli_query($conn, $selectSQL ) ) ){
        echo 'Retrieval of data from Database Failed - #'.mysqli_errno($con).': '.mysqli_error();
    }else{
        if( mysqli_num_rows( $selectRes )==0 ){
            echo '<tr><td colspan="4">No Rows Returned</td></tr>';
        }else{
            $s  = 1;
            while( $row = mysqli_fetch_array($selectRes)){
                // $d     = $s++;
                $title = $row[1];
                $description = $row[2];
                $keywords = $row[3];
                // $pageBanner = $row[4];
            }
        }
    }
    ?>
  <title><?php echo $title;?></title>
  <meta name="keywords" content="keywords" content="<?php echo $keywords;?>">
  <meta name="description" content="<?php echo $description;?>.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/Favicon - JoBaskit.svg">
    <!-- SEO Meta Tags -->
    

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

 
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <!--bootstrap css-->
    <!--title-->
    <link rel="stylesheet" href="css/styles-1.css">
    <link rel="stylesheet" href="css/feature.css">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/feature.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WM5DP9T813"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-WM5DP9T813');
</script>


    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WM5DP9T813"></script>

</style>

<body>
    <!--navigation-->
    <?php
    include 'navigation.php';
    ?>
    <div class="feat ">
        <div class="container" style="padding-top: 100px">
            <div class="row">
                <div class="section-head col-lg-12 mb-4 mb-md-0">
              <h1 style="font-size:5vw;" class="display-1 py-4 text-center animate__animated animate__heartBeat">PRODUCT &nbsp;<span class="rnd">FEATURES</span></h1>
                    <h4><span>Ready to</span> Roll?</h4>

                    <p class="text-justify" style="color:black">Built for Educational Institutions and Companies to give them an experience like never before. JoBaskit works wonder in the area of campus placement. It builds a system of educational institutions and companies. Companies can go through, filter, choose and recruit through a wide range of student skill sets. We work to transform your experience of campus placement and recruitment into a hands-on and worth it experience.  </p>
                </div>
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mt-4 animate__animated animate__fadeInLeft">
                    <div class="text-container">
                        <h2>Best User Interface</h2>
                        <p class="text-justify">While recruitment is a big responsibility, it might also become hectic for the people involved but Jobaskit comes to the rescue with a better user interface to give you a fresh experience. With a better interface, you can experience a decreased search time and smooth flow. Delivering a fine experience at your fingertips.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mb-md-0 animate__animated animate__fadeInRight">
                    <div class="image-container">
                        <img class="img-fluid" src="images/People search-pana.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>
            </div>
           
            <div class="row">
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mb-md-0 ">
                    <div class="image-container animate__animated animate__fadeInLeft ">
                        <img class="img-fluid" src="images/At the office-pana.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mt-4" >
                    <div class="text-container animate__animated animate__fadeInRight">
                        <h2>Connect with Multiple Colleges in a Click</h2>
                        <p class="text-justify">A network of a wide range of colleges is established on JoBaskit, where the  profiles of top institutes in different domains are listed. Thus, giving the companies good opportunities to connect with multiple colleges in just a click.</p>
                    </div>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mt-4" >
                    <div class="text-container animate__animated animate__fadeInLeft">
                        <h2>Get Colleges on Niche Profiles</h2>
                        <p class="text-justify">Choosing the right candidate is not a tough job now. JoBaskit simplifies the process. Profiles can be filtered out based on desired domain knowledge and skill set. Thus, helping recruiters find the right employee suitable for the organization.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0" >
                    <div class="image-container animate__fadeInRight" >
                        <img class="img-fluid" src="images/Job offers-pana.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6  mb-4 mb-md-0">
                    <div class="image-container animate__animated animate__fadeInLeft">
                        <img style="height:400px;" src="images/Data extraction-amico.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>

                <div class="col-lg-6 col-md-6 mb-4 mt-4">
                    <div class="text-container animate__animated animate__fadeInRight">
                        <h2>Organised Database Management</h2>
                        <p class="text-justify">One of the most difficult and hectic tasks in recruitment is database management but with JoBaskit, you can create, store, modify, and manage data with ease like never before. Transforming tedious workload into easily manageable tasks. </p>
                    </div>
                    </p>

                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4 mt-4">
                    <div class="text-container animate__animated animate__fadeInLeft">
                        <h2>Student Profile Recommendations based on the Job Demand</h2>
                        <p class="text-justify">For the right combination of placement and recruitment. JoBaskit makes it effortless and accessible by giving student profile recommendations from different colleges after assessing the nature of the job, skill set, and expertise required for the job. Thus, ensuring a good probability of getting the right candidate for the right job position.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 mb-4 mb-md-0">
                    <div class="image-container animate__animated animate__fadeInRight">
                        <img style="height:450px;" src="images/Learning-amico.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0 animate__animated animate__fadeInLeft">
                    <div class="image-container">
                        <img class="img-fluid" src="images/Career progress-amico.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>

                <div class="col-lg-6 col-md-4 mb-4 mt-4 animate__animated animate__fadeInRight">
                    <div class="text-container">
                        <h2>Faster Recruitment Experience</h2>
                        <p class="text-justify">In today's times, online recruitment is the present and surely the future. And we at JoBaskit understand its importance and ready to support the recruiters. With multiple colleges to connect with, the process of online recruitment becomes easier, smooth, straightforward, and less complicated, ensuring a faster and facile recruitment experience.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4 mt-4 animate__animated animate__fadeInLeft">
                    <div class="text-container">
                        <h2> Feedback from Students </h2>
                        <p class="text-justify">Collecting feedback from students helps to enhance the interview process. Recruitment practices can be modified in the future based on the suggestions. Thus, honest, and accurate feedback helps the companies in evolving the recruitment policies and attracting brilliant candidates. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 mb-4 mb-md-0 animate__animated animate__fadeInRight">
                    <div class="image-container">
                        <img class="img-fluid" src="images/Blue Monday-bro.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0 animate__animated animate__fadeInLeft">
                    <div class="image-container">
                        <img class="img-fluid" src="images/Contact us-pana (1).svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>

                <div class="col-lg-6 col-md-4 mb-4 mt-4 animate__animated animate__fadeInRight">
                    <div class="text-container">
                        <h2>Team Jobaskit is always with our Clients</h2>
                        <p class="text-justify">The users are our priority. We have established a strong after-sales service so that we can assist you every time you need us. We stay in touch with you through personalized Accounts Managers. We work on providing end service to the users by scaling on vertical integration.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4 mt-4 animate__animated animate__fadeInLeft">
                    <div class="text-container">
                        <h2> Solution catering to all your needs </h2>
                        <p class="text-justify">From company profile management to hiring the right candidate and everything in between is managed by Jobaskit. We seek to use innovation to bring out a hassle-free, user-friendly experience for our users. The accuracy is marked by understanding each insight and problem stated by the respondents in the market research.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 mb-4 mb-md-0 animate__animated animate__fadeInRight">
                    <div class="image-container">
                        <img class="img-fluid" src="images/Problem solving-amico.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0 animate__animated animate__fadeInLeft">
                    <div class="image-container">
                        <img class="img-fluid" src="images/Working-amico.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>

                <div class="col-lg-6 col-md-4 mb-4 mt-4 animate__animated animate__fadeInRight">
                    <div class="text-container">
                        <h2>Jobaskit always at work, and updated</h2>
                        <p class="text-justify">We seek to give you a fresh and advanced user experience. Always delivering the finest work experience with improved performance. For this to happen with ease and routinely, we work for it by building updates on the product to provide better services.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!--footer -->
    <?php
    include 'footer.php';
    ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/feature.js"></script>
    <script type="text/javascript">
        AOS.init({
            duration: 1000,
            delay:400,
        });
    </script>
    
    <!--css Stylesheet-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!--popper.js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--bootstrap.js-->
    <div id="fb-root"></div>
    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "104636268447494");
      chatbox.setAttribute("attribution", "biz_inbox");
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v10.0'
        });
      };
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</body>

</html>