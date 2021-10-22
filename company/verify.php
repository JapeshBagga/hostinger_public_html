<?php
    session_start();
      require_once 'connection.php';
      require_once 'config.php';
    //   $google_client->setRedirectUri('https://jobaskit.com/manish-test.php');
      
      if(isset($_GET["email"])){
    
        if(empty($_POST['g-recaptcha-response'])){
          echo "<script> alert('Verify reCaptcha Checkbox !'); </script>";
        }
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
            
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $email = trim($email);
            $pwd = mysqli_real_escape_string($conn, $_POST['password']);
            #$pwd = md5($pwd);
            #$pwd = sha1($pwd);
            if(empty($email) || empty($pwd)){
              echo "<script> alert('Email And Password Is Empty !!'); </script>";
            }
            else{
              $sql="SELECT login_id, name, email, password, role, org_name FROM login WHERE email='$email'";
              $result = mysqli_query($conn, $sql);
              $resultCheck = mysqli_num_rows($result);
              if($resultCheck < 1){
                echo "<script> alert('User Not Exist !!'); </script>";
              }
              else{
                $row = mysqli_fetch_assoc($result);
                if($pwd != $row["password"]){
                    echo "<script> alert('Wrong email or Password !!'); </script>";
                }
                else if($pwd == $row["password"]){
                  $_SESSION["name"] = $row["name"];
                  $_SESSION["email"] = $row["email"];
                  $_SESSION["login_id"] = $row["login_id"];
                  $_SESSION["org_name"] = $row["org_name"];
                  
    
                  if($row['role']=="company") header("location: company/index.php");
                  else if($row['role']=="college") header("location: college/index.php");
                  else if($row['role']=="student") header("location: eprep/leaderboard.php");
                  else if($row['role']=="admin") header("location: eprep/admin/leaderboard.php");
                }
                else{
                  echo "<script> alert('Wrong email or Password !!'); </script>";
                }
              }
            } }
    }
?>