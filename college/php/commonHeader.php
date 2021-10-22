<html lang="en">
<!-- CONSIDERING COLLEGE ID = 1-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Jobaskit-Campus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
     <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<link href="./main.css" rel="stylesheet"></head>
<link href="./extra.css" rel="stylesheet"></head>
<!-- <link href="./assets/css/new_company.css" rel="stylesheet"></head> -->

<body>
<style>
.app-sidebar:hover{
   overflow-y: scroll;
}
</style>
<?php
echo "
    <div class='app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header'>
        <div class='app-header header-shadow'>
            <div class='app-header__logo'>
                <div class='logo-src'></div>
                <div class='header__pane ml-auto'>
                    <div>
                        <button type='button' class='hamburger close-sidebar-btn hamburger--elastic' data-class='closed-sidebar'>
                            <span class='hamburger-box'>
                                <span class='hamburger-inner'></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class='app-header__mobile-menu'>
                <div>
                    <button type='button' class='hamburger hamburger--elastic mobile-toggle-nav'>
                        <span class='hamburger-box'>
                            <span class='hamburger-inner'></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class='app-header__menu'>
                <span>
                    <button type='button' class='btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav'>
                        <span class='btn-icon-wrapper'>
                            <i class='fa fa-ellipsis-v fa-w-6'></i>
                        </span>
                    </button>
                </span>
            </div>    <div class='app-header__content'>
                <div class='app-header-left'>
                    <div class='search-wrapper'>
                        <div class='input-holder'>
                            <input type='text' class='search-input' placeholder='Type to search'>
                            <button class='search-icon'><span></span></button>
                        </div>
                        <button class='close'></button>
                    </div>
                      </div>
                      <div class='app-header-right'>
                        <div class='header-btn-lg pr-0'>
                            <div class='widget-content p-0'>
                                <div class='widget-content-wrapper'>
                                  
                                    <div class='widget-content-left  ml-3 header-user-info'>
                                        <div class='widget-heading'>
                                           Name
                                        </div>
                                        <div class='widget-subheading'>
                                            Placement Head
                                        </div>
                                    </div>
                                    <div class='widget-content-left ml-3'>
                                        <div class='btn-group'>
                                            <a data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'
                                                class='p-0 btn'>
                                                <img width='60' class='rounded-circle' src='man-icon.jpg' alt=''>
    
                                                <i class='fa fa-angle-down ml-2 opacity-8'></i>
                                            </a>
                                            <div tabindex='-1' role='menu' aria-hidden='true'
                                                class='dropdown-menu dropdown-menu-right'>
                                                <button type='button' tabindex='0' class='dropdown-item'>User
                                                    Account</button>
                                                <button type='button' tabindex='0' class='dropdown-item'>Settings</button>
                                                <button type='button' tabindex='0' class='dropdown-item'>Notifications</button>
                                                <div tabindex='-1' class='dropdown-divider'></div>
                                                <button type='button' tabindex='0' class='dropdown-item'>Logout</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>              <div class='app-main'>
            <div class='app-sidebar sidebar-shadow'>
                <div class='app-header__logo'>
                    <div class='logo-src'></div>
                    <div class='header__pane ml-auto'>
                        <div>
                            <button type='button' class='hamburger close-sidebar-btn hamburger--elastic'
                                data-class='closed-sidebar'>
                                <span class='hamburger-box'>
                                    <span class='hamburger-inner'></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class='app-header__mobile-menu'>
                    <div>
                        <button type='button' class='hamburger hamburger--elastic mobile-toggle-nav'>
                            <span class='hamburger-box'>
                                <span class='hamburger-inner'></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class='app-header__menu'>
                    <span>
                        <button type='button'
                            class='btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav'>
                            <span class='btn-icon-wrapper'>
                                <i class='fa fa-ellipsis-v fa-w-6'></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class='scrollbar-sidebar'>
                    <div class='app-sidebar__inner'>
                        <ul class='vertical-nav-menu'>
                            <li>
                                <a href='index.php' ".$hindex.">
                                    <i class='metismenu-icon pe-7s-rocket'></i>
                                     Dashboard
                                </a>
                            </li>
                            <li class='app-sidebar__heading'>Students Demographics</li>
                            <li>
                                <a href='students_table.php' ".$hstudTable.">
                                    <i class='metismenu-icon pe-7s-rocket'></i>
                                    View all Students
                                </a>
                            </li>
                            <li class='app-sidebar__heading'>Validation </li>
                            <li>
                                <a href='validation.php' ".$hvalid.">
                                    <i class='metismenu-icon pe-7s-diamond'></i>
                                     Validation
                                    <i class='metismenu-state-icon caret-left'></i>
                                </a>
                              
                            <li class='app-sidebar__heading'>Connect With Company</li>
                            <li>
                                <a href='new_company.php' ".$hnewComp.">
                                    <i class='metismenu-icon pe-7s-graph2'>
                                    </i>Add new Company 
                                </a>
                                <a href='pendingConnections.php' ".$hpendingConn.">
                                    <i class='metismenu-icon pe-7s-graph2'>
                                    </i>Pending Connections
                                </a>
                                <a href='accReq.php' ".$haccReq.">
                                    <i class='metismenu-icon pe-7s-graph2'>
                                    </i>Accept Company Request
                                </a>
                                <a href='recentView.php' ".$hrecentView.">
                                    <i class='metismenu-icon pe-7s-graph2'>
                                    </i>Accepted Companies
                                </a>
                            </li> 
                            <li class='app-sidebar__heading'>Job Offer</li>
                            <li>
                                <a href='job_list.php' ".$hjobList.">
                                    <i class='metismenu-icon pe-7s-graph2'>
                                    </i>New Jobs 
                                </a>
                                <a href='Processing.php' ".$hprocess.">
                                    <i class='metismenu-icon pe-7s-graph2'>
                                    </i>Processing  
                                </a>
                                <a href='Pending.php' ".$hpending.">
                                    <i class='metismenu-icon pe-7s-graph2'>
                                    </i>Pending  
                                </a>
                                <a href='Completed.php' ".$hcompleted.">
                                    <i class='metismenu-icon pe-7s-graph2'>
                                    </i>Completed
                                </a>
                            </li> 
                            
                            <li class='app-sidebar__heading'>Feedback</li>
                            <li>
                                <a href='feedback.php' ".$hfeedback."
                                   >
                                    <i class='metismenu-icon pe-7s-graph2'>
                                    </i>
                                    Feedback Form
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div> ";
            ?>