<?php
//     // echo "working";
//     $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["imagefile"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])){
        // echo "hai working";die("hai");
        $title=$_POST["title"]; 
        $description=$_POST["description"]; 
        $keyword=$_POST["keyword"]; 
        $imagefile=$_POST["imagefile"];            
            // var_dump($title);
            // $check = getimagesize($_FILES["imagefile"]);
            // if($check !== false) {
            //   echo "File is an image - " . $check["mime"] . ".";
            //   $uploadOk = 1;
            // } else {
            //   echo "File is not an image.";
            //   $uploadOk = 0;
            // }
           
          }
          
// Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }
        include 'connection.php';

        // echo $query = "INSERT  INTO admin (title,description,keyword) VALUES ('$title','$description','$keyword')";
         $sql = "INSERT INTO whyus(title,description,keywords,imagefile) VALUES('$title','$description','$keyword','$imagefile')";

        if ($conn->query($sql) === TRUE) {
          // echo "Sucess updated";
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Sucessfully Updated.')
            window.location.href='components-accordions.php';
            </SCRIPT>");
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close(); 


		
	