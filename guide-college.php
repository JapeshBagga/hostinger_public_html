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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WM5DP9T813"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-WM5DP9T813');
</script>
<style>
    body{
        overflow-x: hidden;
    }
</style>
</head>


<body>
    <!--navigation-->
    <?php
    include 'navigation.php';
    ?>
    <div >
        <div class="container" style="padding-top: 100px">
            <div class="row">
                <div class="section-head col-lg-12 mb-4 mb-md-0">
            
                    <h4><span>How it</span> Works?</h4>

                  
                </div>
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mt-4 animate__animated animate__fadeInLeft">
                    <div class="text-container feedback"style="padding-top:-30px;">
                        <h2>Step 1: Register With Us</h2>
                        <div class="text-justify" >
                        <div class="media-body text-dark" style="padding-top:10px;">&#9672;&nbsp;&nbsp;Click <strong>Get Instant Demo</strong> or <strong>Register</strong> button</div>
                        <div class="media-body text-dark " style="padding-top:10px;">&#9672;&nbsp;&nbsp;Etner the required basic information details</div>
                        <div class="media-body text-dark" style="padding-top:10px;">&#9672;&nbsp;&nbsp;Click the Submit button</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mb-md-0 animate__animated animate__fadeInRight">
                    <div class="image-container">
                        <img class="img-fluid" src="images/undraw_online_ad_re_ol62.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>
            </div>
           
            <div class="row">
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mb-md-0 ">
                    <div class="image-container animate__animated animate__fadeInLeft ">
                        <img class="img-fluid" src="images/WelcomeKit.svg" alt="alternative" width="70%">
                    </div> <!-- end of image-container -->
                </div>
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mt-4" >
                    <div class="text-container animate__animated animate__fadeInRight">
                        <h2>STEP 2 : Get the Welcome Kit</h2>
                        
                        <div class="text-justify" >
                        <div class="media-body text-dark" style="padding-top:10px;">&#9672;&nbsp;&nbsp;Addtional Features such as Product training,Negotiation skills training etc will be provided under the Welcome Kit.</div>

                        </div>
                    </div>
                    </div>
                    </p>
                </div>
            </div>
            
          
            
            <div class="row">
              
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mt-4 animate__animated animate__fadeInLeft">
                    <div class="text-container feedback"style="padding-top:-30px; margin-left:200px;">
                        <h2>STEP 3 : Get Assistance and update your data</h2>
                        <div class="text-justify" >
                        <div class="media-body text-dark " style="padding-top:10px;">&#9672;&nbsp;&nbsp;Students need to login to their account</div>
                        <div class="media-body text-dark" style="padding-top:10px;">&#9672;Fill all the details including Basic Information, Education details,Work Experience etc.</div>
                    
                        <div class="media-body text-dark" style="padding-top:10px;">&#9672;&nbsp;&nbsp;Submit the Application Form</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mb-md-0 animate__animated animate__fadeInRight">
                    <div class="image-container" style="margin-right:200px; height:">
                        <img class="img-fluid" src="images/Assitance.svg" alt="alternative" style="margin-left:50px;">
                    </div> <!-- end of image-container -->
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mb-md-0 ">
                    <div class="image-container animate__animated animate__fadeInLeft " style="margin-left:100px;width:75%;margin-top:50px; ">
                        <img class="img-fluid" src="images/Validate.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div>
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mt-4" >
                    <div class="text-container animate__animated animate__fadeInRight">
                        <h2>STEP 4 : Validate the data</h2>
                        
                        <div class="text-justify" >
                        <div class="media-body text-dark" style="padding-top:10px;">&#9672;&nbsp;&nbsp;Student Placement coordinator needs to login to their account</div>
                        <div class="media-body text-dark " style="padding-top:10px;">&#9672;&nbsp;&nbsp;Validate the profile of students by cross checking the details</div>
                        
                        </div>
                    </div>
                    </div>
                    </p>
                </div>
                
            
            <div class="row">
              
              <div class="col-lg-6 col-md-6 col-md-4 mb-4 mt-4 animate__animated animate__fadeInLeft">
                  <div class="text-container feedback"style="padding-top:-30px; margin-left:200px;">
                      <h2>STEP 5 : Connect with Companies</h2>
                      <div class="text-justify" >
                      <div class="media-body text-dark" style="padding-top:10px;">&#9672;&nbsp;&nbsp;View the profiles of various companies</div>
                      <div class="media-body text-dark " style="padding-top:10px;">&#9672;Connect with HR of Recruitor of the comapny by sending connection request</div>
                      
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-md-4 mb-4 mb-md-0 animate__animated animate__fadeInRight">
                  <div class="image-container" style="margin-right:200px; ">
                      <img class="img-fluid" src="images/undraw_Co_workers_re_1i6i.svg" alt="alternative" width="60%" style="margin-left:50px;">
                  </div> <!-- end of image-container -->
              </div>
          </div>
                      
          <div class="row">
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mb-md-0 ">
                    <div class="image-container animate__animated animate__fadeInLeft " style="margin-left:100px;width:75%; ">
                        <img class="img-fluid" src="images/undraw_Hiring_re_yk5n.svg" alt="alternative"  width="60%" style="margin-left:100px;">
                    </div> <!-- end of image-container -->
                </div>
                <div class="col-lg-6 col-md-6 col-md-4 mb-4 mt-4" >
                    <div class="text-container animate__animated animate__fadeInRight">
                        <h2>STEP 6 : Get Placed</h2>
                        
                        <div class="text-justify" >
                        <div class="media-body text-dark" style="padding-top:10px;">&#9672;&nbsp;&nbsp;Apply for the job</div>
                        <div class="media-body text-dark " style="padding-top:10px;">&#9672;&nbsp;&nbsp;Crack all the interview steps</div>
                        <div class="media-body text-dark" style="padding-top:10px;">&#9672;&nbsp;&nbsp;Get Placed</div>
                        </div>
                    </div>
                    </div>
                    </p>
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