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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
  <link rel="stylesheet" href="css/styles-1.css">
  <link rel="stylesheet" href="styles.css" />
  <title>Contact Us</title>
  <style>

  .box-contact{
          margin-top:150px;
  }
  input:focus{
          box-shadow: none;
          outline: none!important;
      }
  
.registerbutton {
    background-color: orange;
    color: white;
    padding: 12px 15px;
 margin-left:70px;
    border: none;
    margin-top:30px;
    cursor: pointer;
    width: 20%;
    opacity: 0.9;
}
.container.box-contact {
    margin-top: 100px !important;
    margin-bottom: 100px;
}
.registerbutton:hover{
    background-color: #007bff;
}
.box-contact p,hr{
    margin-left:70px;
}

textarea{
    margin-left:70px;
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
 <body>
 <div class="container box-contact">
     
     <h1>Contact <span style="color:orange">Us</span></h1>
     <p>Please fill in this form to create an account.</p>
     <hr>
     
     <form  method="POST"  >
                         <label> NAME<span style="color: red">*</span></label>
                         <input name="Name" type="text" class="form-control" id="name" >

                         <label>EMAIL<span style="color: red">*</span></label>
                         <input name="Email" type="email" class="form-control" id="email" >

                         <label>Contact Number<span style="color: red">*</span></label>
                         <input name="Contact" type="Number" class="form-control">

                         <label>ENQUIRY<span style="color: red">*</span></label>
                         <textarea name="Message" rows="3" maxlength="6000" class="form-control validate" id="message" ></textarea>

     
         <button type="submit" name="register" class="registerbutton">Submit</button>
        
     </form>
 


  </div>
     <?php
  include 'footer.php';
  ?>
 </body>