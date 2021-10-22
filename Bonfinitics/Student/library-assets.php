<?php require_once 'identification.php';?> 
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Library Assets | Bonfinitics by Makos </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require 'top-scripts.php';?> 
</head>

<body>
    <!-- Start Left menu area -->
    <?php require 'side-nav.php';?> 
    <!-- End Left menu area -->


    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <!-- logo area starts -->
            <?php require 'logo.php';?> 
        <!-- logo area ends  -->

        <div class="header-advance-area">
            <!-- header top area starts -->
            <?php require 'top-nav.php';?> 
            <!-- header top area ends --> 

            <!-- Mobile Menu start -->
                <?php require 'mobile-nav.php';?> 
            <!-- Mobile Menu end -->

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Library Assets</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Library List</h4>
                            <!-- <div class="add-product">
                                <a href="#">Add Library</a>
                            </div> -->
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Name of Asset</th>
                                        <th>Status</th>
                                        <th>Subject</th>
                                        <th>Department</th>
                                        <th>Type</th>
                                        <!-- <th>Price</th> -->
                                        <!-- <th>Setting</th> -->
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="img/product/book-1.jpg" alt="" /></td>
                                        <td>Web Development Book</td>
                                        <td>
                                            <button class="pd-setting">Available</button>
                                        </td>
                                        <td>Html, Css</td>
                                        <td>CSE</td>
                                        <td>Book</td>
                                        
                                        <!-- <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="img/product/book-2.jpg" alt="" /></td>
                                        <td>Quality Bol pen</td>
                                        <td>
                                            <button class="ps-setting">Occupied</button>
                                        </td>
                                        <td>PHP</td>
                                        <td>CSE</td>
                                        <td>CD</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="img/product/book-3.jpg" alt="" /></td>
                                        <td>Box of pendrive</td>
                                        <td>
                                            <button class="ds-setting">Unavailable</button>
                                        </td>
                                        <td>Java</td>
                                        <td>CSE</td>
                                        <td>Book</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="img/product/book-4.jpg" alt="" /></td>
                                        <td>Quality Bol pen</td>
                                        <td>
                                            <button class="pd-setting">Available</button>
                                        </td>
                                        <td>PHP</td>
                                        <td>CSE</td>
                                        <td>CD</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="img/product/book-1.jpg" alt="" /></td>
                                        <td>Web Development Book</td>
                                        <td>
                                            <button class="pd-setting">Available</button>
                                        </td>
                                        <td>Wordpress</td>
                                        <td>CSE</td>
                                        <td>Book</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><img src="img/product/book-2.jpg" alt="" /></td>
                                        <td>Quality Bol pen</td>
                                        <td>
                                            <button class="ps-setting">Occupied</button>
                                        </td>
                                        <td>Java</td>
                                        <td>CSE</td>
                                        <td>CD</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require 'footer.php';?> 
    </div>

    <?php require 'end-scripts.php';?> 
</body>

</html>