<?php
    // echo "working";
    if(isset($_POST["submit"])){
        // echo "hai working";die("hai");
        $title=$_POST["title"]; 
        $description=$_POST["description"]; 
        $keyword=$_POST["keyword"];             
            // var_dump($title);

        include 'connection.php';

        // echo $query = "INSERT  INTO admin (title,description,keyword) VALUES ('$title','$description','$keyword')";
        echo $sql = "UPDATE register SET title='$title',description ='$description', keyword ='$keyword' WHERE id=1";
        

		$result = mysqli_query($conn,$sql);
		if($result){
				echo "sucess";
	//             echo "<div class='form'>
	// <h3>You are registered successfully.</h3>
	// <br/>Click here to <a href='login.php'>Login</a></div>";
				// header("Location: pricing.php");
			}
	}