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
         $sql = "UPDATE home SET title='$title',description ='$description', keywords ='$keyword' WHERE id=1";    

        if ($conn->query($sql) === TRUE) {
          // echo "Sucess updated";
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Sucessfully Updated.')
            window.location.href='index.php';
            </SCRIPT>");
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close(); 


		
	}