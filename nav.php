<?php  $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top navi " >
      <div class="container">
        <a class="navbar-brand" href="#" style="padding-top: 0.5%;position: relative;right: 0.5rem;">
          <img src="images/jobaskit4.png" class="img-fluid" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="position: relative;left: 2rem;">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="index.php" style="margin-top: 0.08rem;text-decoration: none;font-size: 1.3rem">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="feature.php" style="margin-top: 0.08rem;text-decoration: none;font-size: 1.3rem">Feature</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pricing.php" style="margin-top: 0.08rem;text-decoration: none;font-size: 1.3rem">Pricing</a>
                </li>
                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1.3rem">
          Resources
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="guide-main.php">Guide</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="help-center-main.php">Help Center</a>
          <div class="dropdown-divider"></div>
         
          </div>
     </li>
                <!-- <li class="nav-item" style="padding-left: 0.7rem;padding-right: 0.7rem;padding-left: 0.7rem;padding-top: 0.3rem;">

                  <a class="nav-link btn btn-primary text-white" href="<?php echo $actual_link; ?>/makos/jobaskit/home.php?login_click=1">Login/Signup</a>
                </li> -->
              </ul>
            </div>      
          </div>
    </nav>