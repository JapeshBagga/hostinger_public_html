<?php 
   if(isset($_POST["submit"])){
       $title = $_POST["title"];
       $description = $_POST["description"];
       $keyword = $_POST["keyword"];
// var_dump($title);
// var_dump($description);
// var_dump($keyword);die();
       include 'connection.php';

    //    echo $sql = "UPDATE home SET title='$title',description ='$description', keyword ='$keyword' WHERE id=1";
        

         $sql = "UPDATE cfeature set title='$title', description='$description' , keywords='$keyword' WHERE id=1";

       $result = mysqli_query($conn,$sql);
       if ($result)
       {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Sucessfully Updated.')
            window.location.href='index.php';
            </SCRIPT>");
       }

   }