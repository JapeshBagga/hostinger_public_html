<!doctype html>
<?php 
	require 'php/verifyLogin.php';
    require 'php/connection.php';
	require 'php/messageDisp.php';
    require 'php/commonHeader.php';

?>

                 <div class="app-main__outer">
                    <div class="app-main__inner">
                                 
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link show active" id="tab-0" data-toggle="tab" href="#tab-content-0" aria-selected="true">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link show" id="tab-1" data-toggle="tab" href="#tab-content-1" aria-selected="false">
                                    <span>WhyUs</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link show" id="tab-2" data-toggle="tab" href="#tab-content-2" aria-selected="false">
                                    <span>Guide</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link show" id="tab-3" data-toggle="tab" href="#tab-content-3" aria-selected="false">
                                    <span>Banner 1</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link show" id="tab-4" data-toggle="tab" href="#tab-content-4" aria-selected="false">
                                    <span>Banner 2</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form action="php/homeval.php" method="post" >
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Title" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10"><input name="description" id="examplePassword" placeholder="Description" type="text" class="form-control"></div>
                                                
                                            </div>
                                         
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Keywords</label>
                                                <div class="col-sm-10"><textarea name="keyword" id="exampleText" class="form-control"></textarea></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                                                <div class="col-sm-10"><input name="imagefile" id="exampleFile" accept=".jpg,.png" type="file" class="form-control-file">
                                                    <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                </div>
                                            </div>
                                       
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-secondary" type="submit" value="Upload Image" name="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                              
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form action="php/whyus.php" method="post">
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Title" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10"><input name="description" id="examplePassword" placeholder="Description" type="text" class="form-control"></div>
                                                
                                            </div>
                                         
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Keywords</label>
                                                <div class="col-sm-10"><textarea name="keyword" id="exampleText" class="form-control"></textarea></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                                                <div class="col-sm-10"><input name="imagefile" id="exampleFile" accept=".jpg,.png" type="file" class="form-control-file">
                                                    <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                </div>
                                            </div>
                                       
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-secondary" name="submit" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form action="php/guide.php" method="post">
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10"><input name="title" id="exampleEmail" placeholder="Title" type="text" class="form-control"></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10"><input name="description" id="examplePassword" placeholder="Description" type="text" class="form-control"></div>
                                                
                                            </div>
                                         
                                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Keywords</label>
                                                <div class="col-sm-10"><textarea name="keyword" id="exampleText" class="form-control"></textarea></div>
                                            </div>
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                                                <div class="col-sm-10"><input name="imagefile" id="exampleFile" accept=".jpg,.png" type="file" class="form-control-file">
                                                    <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                                </div>
                                            </div>
                                       
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-secondary" type="submit" name="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-3" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Link</label>
                                                <div class="col-sm-10"><input name="link" id="exampleEmail" placeholder="Link" type="url" class="form-control" required></div>
                                            </div>
                                            
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10"><input name="file" id="exampleFile" accept=".jpg,.png,.jpeg" type="file" class="form-control-file">
                                                    <small class="form-text text-muted">Only .jpg, .png and .jpeg files are allowed</small>
                                                </div>
                                            </div>
                                       
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-secondary" type="submit" name="banner1">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-4" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Link</label>
                                                <div class="col-sm-10"><input name="link" id="exampleEmail" placeholder="Link" type="url" class="form-control" required></div>
                                            </div>
                                            
                                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10"><input name="file" id="exampleFile" accept=".jpg,.png,.jpeg" type="file" class="form-control-file">
                                                    <small class="form-text text-muted">Only .jpg, .png and .jpeg files are allowed</small>
                                                </div>
                                            </div>
                                       
                                            <div class="position-relative row form-check">
                                                <div class="col-sm-10 offset-sm-2">
                                                    <button class="btn btn-secondary" type="submit" name="banner2">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <?php
                                if(isset($_POST["banner1"]) && !empty($_FILES["file"]["name"]))
                                {
                                    $statusMsg = '';
                                
                                    // File upload path
                                    $targetDir = "uploads/";
                                    $fileName = basename($_FILES["file"]["name"]);
                                    $targetFilePath = $targetDir . $fileName;
                                    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                            
                                    //Renaming the file
                                    $fileName = "banner1.".$fileType;
                                    $targetFilePath = $targetDir . $fileName;
                                    // Allow certain file formats
                                    $urll = $_POST['link'];
                                    $allowTypes = array('jpg','png','jpeg');
                                    if(in_array($fileType, $allowTypes)){
                                        // Upload file to server
                                        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                                            // Insert image file name into database
                                            $insert = $jobconn->query("UPDATE jobaskit.banners SET file_name='".$fileName."', link='".$urll."', uploaded_on=NOW() WHERE id = 1");
                                            if($insert){
                                                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                                            }else{
                                                $statusMsg = "File upload failed, please try again.";
                                            } 
                                        }else{
                                            $statusMsg = "Sorry, there was an error uploading your file.";
                                        }
                                    }else{
                                        $statusMsg = 'Sorry, only JPG, JPEG, PNG files are allowed to upload.';
                                    }
                                    echo success($statusMsg.$conn->error);
                                }
                                

                                if(isset($_POST["banner2"]) && !empty($_FILES["file"]["name"])){
                                    $statusMsg = '';
                                
                                    // File upload path
                                    $targetDir = "uploads/";
                                    $fileName = basename($_FILES["file"]["name"]);
                                    $targetFilePath = $targetDir . $fileName;
                                    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                            
                                    //Renaming the file
                                    $fileName = "banner2.".$fileType;
                                    $targetFilePath = $targetDir . $fileName;
                                    // Allow certain file formats
                                    $urll = $_POST['link'];
                                    $allowTypes = array('jpg','png','jpeg');
                                    if(in_array($fileType, $allowTypes)){
                                        // Upload file to server
                                        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                                            // Insert image file name into database
                                            $insert = $conn->query("UPDATE jobaskit.banners SET file_name='".$fileName."', link='".$urll."', uploaded_on=NOW() WHERE id = 2");
                                            if($insert){
                                                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                                            }else{
                                                $statusMsg = "File upload failed, please try again.";
                                            } 
                                        }else{
                                            $statusMsg = "Sorry, there was an error uploading your file.";
                                        }
                                    }else{
                                        $statusMsg = 'Sorry, only JPG, JPEG, PNG files are allowed to upload.';
                                    }
                                    echo success($statusMsg.$conn->error);
                                }
                                
                                // Display status message
                                
                                // var_dump($_FILES)
                            ?>
                            
                        </div>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
