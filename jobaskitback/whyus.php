<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
  <title>Why us</title>
  <meta name="keywords" content="keywords" content="<?php echo $keywords;?>">
  <meta name="description" content="<?php echo $description;?>.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/Favicon - JoBaskit.svg">
    <!-- SEO Meta Tags -->
   
    <!--Transforming hectic work load into easily manageable task.">-->

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <!-- SEO Meta Tags -->
    
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WM5DP9T813"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-WM5DP9T813');
</script>
<style>
     .modal-header{
      <?php 
                                                //BANNER 1//
        $query1 = "SELECT * FROM jobaskit.banners WHERE id = 1";
        $result1 = mysqli_query($jobconn, $query1);
        $row1 = mysqli_fetch_array($result1);
        $imageURL1 = 'seo/uploads/'.$row1["file_name"];
        $link1 = $row1["link"];
      ?>
        background-image: url("<?php echo $imageURL1;?>");
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
    .btn-primary:hover{
        background-color:#007bff!important;
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
        border: 1px solid rgba(0,0,0,.2);
        border-radius: .3rem;
        outline: 0;
    }
    
    .img-fluid {
    max-width: 80%;
    height: auto;
}
img {
    max-width: 80%;
    height: auto;
}
</style>
</head>


<body>
<!--   <script>
   	$(window).load(function()
		{
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
               
                <form method = "POST" novalidate><button class="btn btn-primary" name="vieww1">Read More</button></form>
              </div>
            </div>
        
           
          </div>
        </div>
    </div> --!>
    <!--navigation-->
    <?php
    include 'navigation.php';
    ?>
    <div >
        <div class="container" style="padding-top: 100px">
            <div class="row">
                <div class="section-head col-lg-12 mb-4 mb-md-0">
            
                    <h4><span>Why</span> Us?</h4>

                  
                </div>
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mt-4 animate__animated animate__fadeInLeft">
                    <div class="text-container feedback"style="padding-top:-30px;">
                        <h2>Grow With Continous Feedback</h2>
                        <p class="text-justify">We believe that there’s always room to improve. 
                                JoBaskit provides the opportunity   to   give   feedback   and   also   receive   feedback   between Campuses and Companies. 
                                Working together to constantly improve the overall process.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mb-md-0 animate__animated animate__fadeInRight">
                    <div class="image-container">
                        <img class="img-fluid" src="images/undraw_Job_hunt_tinb 1.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>
            </div>
           
            <div class="row">
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mb-md-0 ">
                    <div class="image-container animate__animated animate__fadeInLeft ">
                        <img class="img-fluid" src="images/undraw_social_sharing_ibwq 1 (1).svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mt-4" >
                    <div class="text-container animate__animated animate__fadeInRight">
                        <h2>Adopt Change in a Smart Way</h2>
                        <p class="text-justify">Recruitment has taken a new direction with technology-assisted services and 
                                JoBaskit provides you the one-stop recruitment solution to adopt thischange.</p>
                    </div>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mt-4" >
                    <div class="text-container animate__animated animate__fadeInLeft">
                        <h2>Reliable Data</h2>
                        <p class="text-justify">We ensure that all the data is validated so users can trust the
                                 data they use to be accurate and maintain data integrity.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0" >
                    <div class="image-container animate__fadeInRight" >
                        <img class="img-fluid" src="images/undraw_Investing_re_bov7 2 (1).svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6  mb-4 mb-md-0">
                    <div class="image-container animate__animated animate__fadeInLeft">
                        <img style="height:400px;" src="images/undraw_season_change_f99v 2 (1).svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>

                <div class="col-lg-6 col-md-6 mb-4 mt-4">
                    <div class="text-container animate__animated animate__fadeInRight">
                        <h2>Always with you 24/7</h2>
                        <p class="text-justify">Our dedicated JoBaskit team will always be on standby and ready to  assist, whenever you need it.</p>
                    </div>
                    </p>

                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4 mt-4">
                    <div class="text-container animate__animated animate__fadeInLeft">
                        <h2>Simple User Interface</h2>
                        <p class="text-justify">From dashboards to graphics, we provide 
                                a simple interface that users can get familiar with quickly and use efficiently.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 mb-4 mb-md-0">
                    <div class="image-container animate__animated animate__fadeInRight">
                        <img style="height:450px;" src="images/undraw_insert_08ir 1 (1).svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0 animate__animated animate__fadeInLeft">
                    <div class="image-container">
                        <img class="img-fluid" src="images/software-as-a-service-database 1 (1).svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>

                <div class="col-lg-6 col-md-4 mb-4 mt-4 animate__animated animate__fadeInRight">
                    <div class="text-container">
                        <h2>Database Management</h2>
                        <p class="text-justify">We provide a properly organized database management to allow ease in managing data while ensuring data consistency. 
                                Thus, increasing the overall efficiency of the process.</p>
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