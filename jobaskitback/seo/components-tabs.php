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
                                                <div class="col-sm-10"><input name="imagefile" id="exampleFile"   accept=".jpg,.png" type="file" class="form-control-file">
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
