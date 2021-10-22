<!doctype html>
<?php
    require "php/connect.php";
    require "php/messageDisp.php";
    require "php/preCommonHeader.php";
    $hfeedback = "class='mm-active'";
    require "php/commonHeader.php";


    
?>
<head>

<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<style>
div.stars {
  width: auto;
  display: inline-block;
  float: left;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 30px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #3f6ad8;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color:#3f6ad8;
  text-shadow: 0 0 20px #3f6ad8;
}

input.star-1:checked ~ label.star:before { color: #3f6ad8; }

label.star:hover { transform: rotate(-15deg) scale(1.2); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
</style>

</head>
<?php

    $con = mysqli_connect("database-1.cawkcllqzbpg.ap-south-1.rds.amazonaws.com", "admin", "M=7t-pDLQHGSgoNdbcFujjst9&)kAwou", "jobaskitcollege") or die(mysqli_error($con));
    // session_start();
    if(isset($_POST['submit'])){
    // $email = mysqli_real_escape_string($con, $_POST['email']);
    // $Rating = mysqli_real_escape_string($con, $_POST['Rating']);
    // $Feedback = mysqli_real_escape_string($con, $_POST['Feedback']);
    // $Issues= $_POST['Issues'];

    // $user_feedback_query = "INSERT INTO `Feedback`(`email`, `Rating`, `Feedback`, `Issues`) values ('$email', '$Rating', '$Feedback', '$Issues')";
    // $user_feedback_submit = mysqli_query($con, $user_feedback_query) or die(mysqli_error($con));
        echo success("Feed Back recorded!");
    }
    ?>


            <!--body-->
            <div class="app-main__outer">
                <div class="app-main__inner">
                <form method="POST" novalidate>
                    <div class="main-card mb-3 card" style="width:70%;margin-left:150px;">
                        <div class="card-body"><h5 class="card-title">Feedback</h5>
                            
                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10"><input name="email" id="exampleEmail" placeholder="email" type="email" class="form-control"></div>
                                </div>
                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label" style="margin-top:20px ;">Rating(A-E)</label>
                                    <div class="col-sm-10"><div class="stars">
                
                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                    <label class="star star-5" for="star-5"></label>
                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                    <label class="star star-4" for="star-4"></label>
                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                    <label class="star star-3" for="star-3"></label>
                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                    <label class="star star-2" for="star-2"></label>
                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                    <label class="star star-1" for="star-1"></label>
                
</div></div>
                                </div>
                                             
                                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Feedback</label>
                                    <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                </div>
                               
                               
                                
                                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Issues</label>
                                    <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                </div>
                               
                                
                                
                                <div class="position-relative row form-check">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button class="btn btn-secondary"  name="submit" style="float: right;
    margin-top: 40px;
    margin-right: 20px;">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <?php
    require "php/commonEnd.php";
   
?>
<script src="js/addons/rating.js"></script>
