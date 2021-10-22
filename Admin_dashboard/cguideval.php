<?php 
   if(isset($_POST["submit"])){
       $title = $_POST["title"];
       $description = $_POST["description"];
       $keyword = $_POST["keyword"];

       include 'connection.php';

    //    echo $sql = "UPDATE home SET title='$title',description ='$description', keyword ='$keyword' WHERE id=1";
        

        echo $sql = "UPDATE cguide set title='$title', description='$description' , keyword='$keyword' WHERE id=1";

       $result = mysqli_query($conn,$sql);
       if ($result)
       {
           echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Sucessfully Updated.')
            window.location.href='index.php';
            </SCRIPT>");
       }

   }