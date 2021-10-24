<!-- start PHP code -->
        <?php
            require_once 'connection.php';
            session_start();
            if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
                $hash = mysqli_real_escape_string($conn, $_GET['hash']); $hash = trim($hash);
                $email =mysqli_real_escape_string($conn, $_GET['email']); $email = trim($email);

                $query = "SELECT email, hash, active FROM login WHERE email='".$email."' AND hash='".$hash."' AND active='0'";
                $search = mysqli_query($conn, $query); 
                $match  = mysqli_num_rows($search);
                
                if($match > 0){
                    $query1 = "UPDATE login SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'";
                    $search1 = mysqli_query($conn, $query1); 

                    echo '<h1 style="text-align:center";>Your account has been activated. <br> <a href="index.php">click here</a> to login</h1>';
                    
                }else{
                    echo '<h4 style="text-align:center";>The url is either invalid or you already have activated your account.</h4>';
                }
                              
            }else echo '<h4>Invalid approach, please use the link that has been send to your email.</h4>';

                  
        ?>
        
        <!-- stop PHP Code -->

<!DOCTYPE html>
<html>
<head>
    <title>Verification</title>
</head>
<body>
</body>
</html>