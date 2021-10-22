<!doctype html>
<?php
   require "php/connect.php";
   require "php/messageDisp.php";
   // require "php/preCommonHeader.php";
   // $hnewComp = "class='mm-active'";
   require "php/commonHeader.php";
   ?>
   <style>
      body{
    background-color: #f9fafb;
    margin-top:20px;}

.profile-page .profile-header {
    box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
    border: 1px solid #f2f4f9;
}

.profile-page .profile-header .cover {
    position: relative;
    border-radius: .25rem .25rem 0 0;
}


.profile-page .profile-header .cover figure {
    margin-bottom: 0;
}

@media (max-width: 767px) {
    .profile-page .profile-header .cover figure {
        height: 110px;
        overflow: hidden;
    }
}

@media (min-width: 2400px) {
    .profile-page .profile-header .cover figure {
        height: 280px;
        overflow: hidden;
    }
}

.profile-page .profile-header .cover figure img {
    border-radius: .25rem .25rem 0 0;
    width: 100%;
    height: 450px;
}

@media (max-width: 767px) {
    .profile-page .profile-header .cover figure img {
        /* -webkit-transform: scale(2);
        transform: scale(2); */
        width:100%;
                height:100%;
        margin-top: 15px;
    }
}

@media (min-width: 2400px) {
    .profile-page .profile-header .cover figure img {
        margin-top: -55px;
    }
}

.profile-page .profile-header .cover .gray-shade {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 50%;
    z-index: 1;
    background: linear-gradient(rgba(255, 255, 255, 0.1), #fff 5000%);
}

.profile-page .profile-header .cover .cover-body {
    position: absolute;
    bottom: -20px;
    left: 0;
    z-index: 2;
    width: 100%;
    padding: 0 20px;
}

.profile-page .profile-header .cover .cover-body .profile-pic {
    border-radius: 50%;
    width: 100px;
}

@media (max-width: 767px) {
    .profile-page .profile-header .cover .cover-body .profile-pic {
        width: 70px;
    }
}

.profile-page .profile-header .cover .cover-body .profile-name {
    font-size: 20px;
    font-weight: 600;
    margin-left: 17px;
}

.profile-page .profile-header .header-links {
    padding: 15px;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    background: #fff;
    border-radius: 0 0 .25rem .25rem;
}

.profile-page .profile-header .header-links ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.profile-page .profile-header .header-links ul li a {
    color: #000;
    -webkit-transition: all .2s ease;
    transition: all .2s ease;
}

.profile-page .profile-header .header-links ul li:hover,
.profile-page .profile-header .header-links ul li.active {
    color: #727cf5;
}

.profile-page .profile-header .header-links ul li:hover a,
.profile-page .profile-header .header-links ul li.active a {
    color: #727cf5;
}

.profile-page .profile-body .left-wrapper .social-links a {
    width: 30px;
    height: 30px;
}

.profile-page .profile-body .right-wrapper .latest-photos > .row {
    margin-right: 0;
    margin-left: 0;
}

.profile-page .profile-body .right-wrapper .latest-photos > .row > div {
    padding-left: 3px;
    padding-right: 3px;
}

.profile-page .profile-body .right-wrapper .latest-photos > .row > div figure {
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
    margin-bottom: 6px;
}

.profile-page .profile-body .right-wrapper .latest-photos > .row > div figure:hover {
    -webkit-transform: scale(1.06);
    transform: scale(1.06);
}

.profile-page .profile-body .right-wrapper .latest-photos > .row > div figure img {
    border-radius: .25rem;
}

.rtl .profile-page .profile-header .cover .cover-body .profile-name {
    margin-left: 0;
    margin-right: 17px;
}
.img-xs {
    width: 37px;
    height: 37px;
}
.rounded-circle {
    border-radius: 50% !important;
}
img {
    vertical-align: middle;
    border-style: none;
}

.card-header:first-child {
    border-radius: 0 0 0 0;
}
.card-header {
    padding: 0.875rem 1.5rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, 0);
    border-bottom: 1px solid #f2f4f9;
}

.card-footer:last-child {
    border-radius: 0 0 0 0;
}
.card-footer {
    padding: 0.875rem 1.5rem;
    background-color: rgba(0, 0, 0, 0);
    border-top: 1px solid #f2f4f9;
}

.grid-margin {
    margin-bottom: 1rem;
}

.card {
    box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
    -webkit-box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
    -moz-box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
    -ms-box-shadow: 0 0 10px 0 rgba(183, 192, 206, 0.2);
}
.rounded {
    border-radius: 0.25rem !important;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #f2f4f9;
    border-radius: 0.25rem;
}
   </style>
<div class="app-main__outer">
   <div class="app-main__inner">
     
   <div class="container">
<div class="profile-page tx-13">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="profile-header">
                <div class="cover">
                    <figure>
                        <img src="https://static01.nyt.com/images/2018/09/27/business/27chrome/merlin_143929716_e0235801-cc57-4f98-b777-86649696f4c9-jumbo.jpg" class="img-fluid" alt="profile cover">
                    </figure>
                    <div class="cover-body d-flex justify-content-between align-items-center">
                        <div>
                            <img class="profile-pic" src="https://e7.pngegg.com/pngimages/556/327/png-clipart-web-browser-google-chrome-for-android-mobile-app-android-heart-web-application.png" alt="profile">
                            <span class="profile-name" style="color:white;font-size: 35px;">Google</span>
                        </div>
                        <div class="d-none d-md-block">
                            <button class="btn btn-primary btn-icon-text btn-edit-profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit btn-icon-prepend">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg> Edit profile
                            </button>
                        </div>
                    </div>
                </div>
                <div class="header-links">
                    <ul class="links d-flex align-items-center mt-3 mt-md-0">
                        <li class="header-link-item d-flex align-items-center active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-columns mr-1 icon-md">
                                <path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18"></path>
                            </svg>
                            <a class="pt-1px d-none d-md-block" href="#">Timeline</a>
                        </li>
                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-1 icon-md">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <a class="pt-1px d-none d-md-block" href="#">About</a>
                        </li>
                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users mr-1 icon-md">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <a class="pt-1px d-none d-md-block" href="#">Campus </a>
                        </li>
                        <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image mr-1 icon-md">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            <a class="pt-1px d-none d-md-block" href="#">Photos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
            <div class="card rounded">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="card-title mb-0">About</h6>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2">
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg> <span class="">Edit</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-branch icon-sm mr-2">
                                        <line x1="6" y1="3" x2="6" y2="15"></line>
                                        <circle cx="18" cy="6" r="3"></circle>
                                        <circle cx="6" cy="18" r="3"></circle>
                                        <path d="M18 9a9 9 0 0 1-9 9"></path>
                                    </svg> <span class="">Update</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm mr-2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg> <span class="">View all</span></a>
                            </div>
                        </div>
                    </div>
                    <p>Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, a search engine, cloud computing, software, and hardware. It is considered one of the Big Five companies in the American information technology industry, along with Amazon, Facebook, Apple, and Microsoft.</p>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Founded:</label>
                        <p class="text-muted">4 September 1998</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Location:</label>
                        <p class="text-muted">Mountain View, California, United States</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Email:</label>
                        <p class="text-muted">google@gmail.com</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Website:</label>
                        <p class="text-muted">www.google.com</p>
                    </div>
                    <div class="mt-3 d-flex social-links">
                        <a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon github">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github" data-toggle="tooltip" title="" data-original-title="github.com/nobleui">
                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                            </svg>
                        </a>
                        <a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter" data-toggle="tooltip" title="" data-original-title="twitter.com/nobleui">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                            </svg>
                        </a>
                        <a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram" data-toggle="tooltip" title="" data-original-title="instagram.com/nobleui">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-6 middle-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card rounded">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="img-xs rounded-circle" src="https://e7.pngegg.com/pngimages/556/327/png-clipart-web-browser-google-chrome-for-android-mobile-app-android-heart-web-application.png" alt="">
                                    <div class="ml-2">
                                        <p style="margin-top:1px">Google</p>
                                    </div>
                                </div>
                                <div class="dropdown" style="padding:5px">
                                    <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-up icon-sm mr-2">
                                                <polyline points="10 9 15 4 20 9"></polyline>
                                                <path d="M4 20h7a4 4 0 0 0 4-4V4"></path>
                                            </svg> <span class="">Go to post</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 icon-sm mr-2">
                                                <circle cx="18" cy="5" r="3"></circle>
                                                <circle cx="6" cy="12" r="3"></circle>
                                                <circle cx="18" cy="19" r="3"></circle>
                                                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                            </svg> <span class="">Share</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy icon-sm mr-2">
                                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                            </svg> <span class="">Copy link</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus minima delectus nemo unde quae recusandae assumenda.</p>
                            <img class="img-fluid" src="https://images.theconversation.com/files/234674/original/file-20180903-41705-adjmb8.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=1200.0&fit=crop" alt="">
                        </div>
                        <!-- <div class="card-footer">
                            <div class="d-flex post-actions">
                                <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-md">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                    </svg>
                                    <p class="d-none d-md-block ml-2">Like</p>
                                </a>
                                <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <p class="d-none d-md-block ml-2">Comment</p>
                                </a>
                                <a href="javascript:;" class="d-flex align-items-center text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share icon-md">
                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                        <polyline points="16 6 12 2 8 6"></polyline>
                                        <line x1="12" y1="2" x2="12" y2="15"></line>
                                    </svg>
                                    <p class="d-none d-md-block ml-2">Share</p>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="col-md-12">
                    <div class="card rounded">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="img-xs rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                    <div class="ml-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">5 min ago</p>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh icon-sm mr-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="8" y1="15" x2="16" y2="15"></line>
                                                <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                                <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                            </svg> <span class="">Unfollow</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-up icon-sm mr-2">
                                                <polyline points="10 9 15 4 20 9"></polyline>
                                                <path d="M4 20h7a4 4 0 0 0 4-4V4"></path>
                                            </svg> <span class="">Go to post</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 icon-sm mr-2">
                                                <circle cx="18" cy="5" r="3"></circle>
                                                <circle cx="6" cy="12" r="3"></circle>
                                                <circle cx="18" cy="19" r="3"></circle>
                                                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                            </svg> <span class="">Share</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy icon-sm mr-2">
                                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                            </svg> <span class="">Copy link</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="mb-3 tx-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <img class="img-fluid" src="../../../assets/images/sample2.jpg" alt="">
                        </div>
                        <div class="card-footer">
                            <div class="d-flex post-actions">
                                <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-md">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                    </svg>
                                    <p class="d-none d-md-block ml-2">Like</p>
                                </a>
                                <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <p class="d-none d-md-block ml-2">Comment</p>
                                </a>
                                <a href="javascript:;" class="d-flex align-items-center text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share icon-md">
                                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                        <polyline points="16 6 12 2 8 6"></polyline>
                                        <line x1="12" y1="2" x2="12" y2="15"></line>
                                    </svg>
                                    <p class="d-none d-md-block ml-2">Share</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- middle wrapper end -->
        <!-- right wrapper start -->
        <div class="d-none d-xl-block col-xl-3 right-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card rounded">
                        <div class="card-body">
                            <h6 class="card-title">latest photos</h6>
                            <div class="latest-photos">
                                <div class="row">
                                    <div class="col-md-4">
                                        <figure>
                                            <img class="img-fluid" src="https://image.shutterstock.com/image-photo/kiev-ukraine-april-27-2015google-260nw-279059117.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure>
                                            <img class="img-fluid" src="https://image.similarpng.com/very-thumbnail/2020/12/Colorful-google-logo-design-on-transparent-PNG-1.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure>
                                            <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNgFbGdcyyKxBlONPPMae2OkWybEMBWOgWhQ&usqp=CAU" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure>
                                            <img class="img-fluid" src="https://blog.malwarebytes.com/wp-content/uploads/2020/07/Google-building-scaled.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure>
                                            <img class="img-fluid" src="https://cdn.vox-cdn.com/thumbor/PxxldlOlChwstW18SWH_MvCZGEg=/0x0:2040x1360/1200x800/filters:focal(857x517:1183x843)/cdn.vox-cdn.com/uploads/chorus_image/image/68641549/acastro_180427_1777_0001.0.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure>
                                            <img class="img-fluid" src="https://i.insider.com/50a6ab6b69bedd5677000022?width=981&format=jpeg" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="mb-0">
                                            <img class="img-fluid" src="https://www.investopedia.com/thmb/FTPjnIl_aMgTodOKwkPaXrASUJo=/680x446/filters:fill(auto,1)/shutterstock_227705986_google_android_robot-5bfc3afbc9e77c00587b1dcf.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="mb-0">
                                            <img class="img-fluid" src="https://live-production.wcms.abc-cdn.net.au/b3bd24c5b18a01afd517cdaae1a8ec29?impolicy=wcms_crop_resize&cropH=1008&cropW=1512&xPos=0&yPos=0&width=862&height=575" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="mb-0">
                                            <img class="img-fluid" src="https://i.guim.co.uk/img/media/e9dc8013770af74fdd4896a50895b7bc746d6891/0_2654_3500_2098/master/3500.jpg?width=1200&quality=85&auto=format&fit=max&s=2d23255b51c401729add47e4f0dbf274" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-12 grid-margin">
                    <div class="card rounded">
                        <div class="card-body">
                            <h6 class="card-title">suggestions for you</h6>
                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                <div class="d-flex align-items-center hover-pointer">
                                    <img class="img-xs rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                                    <div class="ml-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                    </div>
                                </div>
                                <button class="btn btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus" data-toggle="tooltip" title="" data-original-title="Connect">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                </button>
                            </div>
                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                <div class="d-flex align-items-center hover-pointer">
                                    <img class="img-xs rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                    <div class="ml-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                    </div>
                                </div>
                                <button class="btn btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus" data-toggle="tooltip" title="" data-original-title="Connect">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                </button>
                            </div>
                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                <div class="d-flex align-items-center hover-pointer">
                                    <img class="img-xs rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                                    <div class="ml-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                    </div>
                                </div>
                                <button class="btn btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus" data-toggle="tooltip" title="" data-original-title="Connect">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                </button>
                            </div>
                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                <div class="d-flex align-items-center hover-pointer">
                                    <img class="img-xs rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                                    <div class="ml-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                    </div>
                                </div>
                                <button class="btn btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus" data-toggle="tooltip" title="" data-original-title="Connect">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                </button>
                            </div>
                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                <div class="d-flex align-items-center hover-pointer">
                                    <img class="img-xs rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                    <div class="ml-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                    </div>
                                </div>
                                <button class="btn btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus" data-toggle="tooltip" title="" data-original-title="Connect">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                </button>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center hover-pointer">
                                    <img class="img-xs rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                                    <div class="ml-2">
                                        <p>Mike Popescu</p>
                                        <p class="tx-11 text-muted">12 Mutual Friends</p>
                                    </div>
                                </div>
                                <button class="btn btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus" data-toggle="tooltip" title="" data-original-title="Connect">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                </button>
                            </div>

                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- right wrapper end -->
    </div>
</div>
</div>

   </div>
   <footer>
      <div class="app-wrapper-footer">
         <div class="app-footer">
            <div class="app-footer__inner">
               <p>All rights Reversed</p>
            </div>
         </div>
      </div>
   </footer>
</div>
</div>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script src='https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js'></script>
<script>
   $(document).ready(function() {
      $('#example').DataTable();
    } );  
</script>
</body>
</html>