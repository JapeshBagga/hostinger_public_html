<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Jobaskit-Student</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

    <meta name="msapplication-tap-highlight" content="no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <link href="./main.css" rel="stylesheet">
    <link href="./extra.css" rel="stylesheet">
</head>


<body>
<style>
.app-sidebar:hover{
   overflow-y: scroll;
}
</style>
<?php echo "
    <div class='app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header'>
        <div class='app-header header-shadow'>
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
            <div class='app-header__content'>
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
                                        Student at XYZ
                                    </div>
                                </div>
                                <div class='widget-content-left'>
                                    <div class='btn-group'>
                                        <a data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'
                                            class='p-0 btn'>
                                            <img width='42' class='rounded-circle'
                                                src='assets/images/man-icon-flat-vector-260nw-1371568223.jpg' alt=''>
                                            <i class='fa fa-angle-down ml-2 opacity-8'></i>
                                        </a>
                                        <div tabindex='-1' role='menu' aria-hidden='true'
                                            class='dropdown-menu dropdown-menu-right'>
                                            <button type='button' tabindex='0' class='dropdown-item'>User
                                                Account</button>
                                            <button type='button' tabindex='0' class='dropdown-item'>Settings</button>
                                            <button type='button' tabindex='0'
                                                class='dropdown-item'>Notifications</button>
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
        </div>
        
        <div class='app-main'>
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
                            <li class='app-sidebar__heading'>Application Form </li>
                            <li>
                                <a href='forms-validation.php' ".$hfvalid.">
                                    <i class='metismenu-icon pe-7s-diamond'></i>
                                    Application Form

                                    <i class='metismenu-state-icon caret-left'></i>
                                </a>

                            <li class='app-sidebar__heading'>Edit Portfolio</li>
                            <li>
                                <a href='forms-controls.php' ".$hfcontrol.">
                                    <i class='metismenu-icon pe-7s-mouse'>
                                    </i>Portfolio
                                </a>
                            </li>

                            <li class='app-sidebar__heading'>Job Offer</li>
                            <li>
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
                            <li class='app-sidebar__heading'>Recent Jobs </li>
                            <li>
                                <a href='Joblist.php' ".$hjobList.">
                                    <i class='metismenu-icon pe-7s-graph2'>
                                    </i>
                                    Recent Jobs

                                </a>
                                <a href='appliedJobs.php' ".$happJob.">
                                    <i class='metismenu-icon pe-7s-graph2'>
                                    </i>
                                    Applied Jobs

                                </a>
                            </li>
                            <li class='app-sidebar__heading'>Feedback Form</li>
                            <li>
                                <a href='Feedback.php' ".$hfeedback.">
                                    <i class='metismenu-icon pe-7s-graph2'>
                                    </i>
                                    Feedback Form
                                </a>
                                <a href='college_feedback.php' ".$hcollFeed.">
                                    <i class='metismenu-icon pe-7s-graph2'>
                                    </i>
                                   College Feedback 
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>"?>
