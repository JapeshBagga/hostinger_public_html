<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php
    include 'config.php';
    $selectSQL = "SELECT * from guide";
    if( !( $selectRes = mysqli_query($conn, $selectSQL ) ) ){
        echo 'Retrieval of data from Database Failed - #'.mysqli_errno($con).': '.mysqli_error();
    }else{
        if( mysqli_num_rows( $selectRes )==0 ){
            echo '<tr><td colspan="4">No Rows Returned</td></tr>';
        }else{
            $s  = 1;
            while( $row = mysqli_fetch_array($selectRes)){
                // $d     = $s++;
                $title = $row[3];
                $description = $row[1];
                $keywords = $row[2];
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
   
    Transforming hectic work load into easily manageable task.">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/guide-main-styles.css" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WM5DP9T813"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-WM5DP9T813');
</script>
</head>
<style>
   
    .text-container p{
       font-family: 'Poppins', sans-serif;
    }
</style>
<body >
    <?php
        include 'navigation.php';
    ?>
    <header class="cd-header flex flex-column flex-center" >
  <div class="text-component text-center">
    <h1 style="color: #fff;padding-top: 50px;">How It Works </h1>
    
  </div>
</header>
    
  

    <!-- Details 1 -->
    <div id="details" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>STEP 1 : Post Your Job</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                
                                <div class="media-body text-dark">&#9672;&nbsp;&nbsp;Post your jobs in JoBaskit,</div>
                            </li>
                            <li class="media">
                               
                                <div class="media-body text-dark">&#9672;&nbsp;&nbsp;We help you in connecting with different institutes, </div>
                            </li>
                            <li class="media">
                                
                                <div class="media-body text-dark">&#9672;&nbsp;&nbsp;Students would be able to apply for jobs.</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/apply.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/Interview.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>STEP 2 : Conduct Interview Process</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                
                                <div class="media-body text-dark">&#9672;&nbsp;&nbsp;Filter the applications based on the desired skillset</div>
                            </li>
                            <li class="media">
                               
                                <div class="media-body text-dark">&#9672;&nbsp;&nbsp;Schedule interviews for the shortlisted students,</div>
                            </li>
                            <li class="media">
                                
                                <div class="media-body text-dark">&#9672;&nbsp;&nbsp;Monitor the status of the interview process.</div>
                            </li>
                        </ul>
                        <!--<a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">Lightbox</a>
                        <a class="btn-outline-reg" href="article.html">Details</a>-->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of details 2 -->


  


    <!-- Details 3 -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>STEP 3 : Hire the Candidate</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                               
                                <div class="media-body text-dark">&#9672;&nbsp;&nbsp;Select the right candidate for the Job,</div>
                            </li>
                            <li class="media">
                               
                                <div class="media-body text-dark">&#9672;&nbsp;&nbsp;Display the results of the selection procedure, </div>
                            </li>
                            <li class="media">
                               
                                <div class="media-body text-dark">&#9672;&nbsp;&nbsp;Collect feedback about the interview process from students.</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/Hire.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of details 3 -->


    <?php
        include 'footer.php';
    ?>


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
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