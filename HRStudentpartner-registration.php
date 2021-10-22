<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <?php
    include 'config.php';
    $selectSQL = "SELECT * from home";
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


    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WM5DP9T813"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-WM5DP9T813');
</script>
<style>  </style>
</head>


<body>
  <?php //$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
  ?>
  
  <!--nav started-->
  <header>
    <?php
    include 'navigation.php';
    ?>

<!-- <?php  //$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
?>
<head>
<link relation="type/css" href="nav.css">
<style>
   
</style>
</head>
<nav class="navbar navbar-expand-lg navbar-light fixed-top navi ">
    <div class="container">
        <a class="navbar-brand" href="index.php" >
            <img src="D:/chrome downs/jobaskit4.png" alt="LOGO" class="img-fluid" height="40">
        </a>
            
        </div>
    </div>
</nav> -->



  </header>
  <section class="home" id="home">
    <div class="container mb-5 mt-5"> 
    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLSfXwae51yA5jzh-orUC8_jh4WjLsft6chZfxaMB7j_duNymdA/viewform?embedded=true" width="640" height="488" frameborder="2" marginheight="0" marginwidth="0">Loading…</iframe>
</div>

    <!-- <iframe data-src="https://docs.google.com/forms/d/e/1FAIpQLSfXwae51yA5jzh-orUC8_jh4WjLsft6chZfxaMB7j_duNymdA/viewform?embedded=true" class="lozad" frameborder="0" style="border:1px solid #ddd;height:500px;max-height:100vh; margin: auto;" src="https://docs.google.com/forms/d/e/1FAIpQLSfXwae51yA5jzh-orUC8_jh4WjLsft6chZfxaMB7j_duNymdA/viewform?embedded=true" data-loaded="true"></iframe> -->
</div></section>
<?php
  include 'footer.php';
  ?>