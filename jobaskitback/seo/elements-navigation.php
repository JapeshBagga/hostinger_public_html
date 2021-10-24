<!doctype html>
<?php 
	require 'php/verifyLogin.php';
    require 'php/connection.php';
	require 'php/messageDisp.php';
    require 'php/commonHeader.php';

?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-photo-gallery icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Navigation Menus
                                        <div class="page-title-subheading">Navigation menus are one of the basic building blocks for any web or mobile app.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div>            <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Vertical Menu</h5>
                                        <div class="row">
                                            <div class="col">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Link</a></li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Link
                                                        <div class="ml-auto badge badge-success">New</div>
                                                    </a></li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Another Link
                                                        <div class="ml-auto badge badge-warning">512</div>
                                                    </a></li>
                                                    <li class="nav-item"><a disabled="" href="javascript:void(0);" class="nav-link disabled">Disabled Link</a></li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-inbox"> </i><span>Inbox</span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a></li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-book"> </i><span>Book</span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a></li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon lnr-picture"> </i><span>Picture</span></a></li>
                                                    <li class="nav-item"><a disabled="" href="javascript:void(0);" class="nav-link disabled"><i class="nav-link-icon lnr-file-empty"> </i><span>File Disabled</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-center">
                                            <div class="btn-group dropdown">
                                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Dropdown Basic</button>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Link</a></li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Link
                                                            <div class="ml-auto badge badge-success">New</div>
                                                        </a></li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Another Link
                                                            <div class="ml-auto badge badge-warning">512</div>
                                                        </a></li>
                                                        <li class="nav-item"><a disabled="" href="javascript:void(0);" class="nav-link disabled">Disabled Link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Separators &amp; Headers</h5>
                                        <div class="row">
                                            <div class="col">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item">Activity</li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                        <div class="ml-auto badge badge-pill badge-info">8</div>
                                                    </a></li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                                    <li class="nav-item-header nav-item">My Account</li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Settings
                                                        <div class="ml-auto badge badge-success">New</div>
                                                    </a></li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages
                                                        <div class="ml-auto badge badge-warning">512</div>
                                                    </a></li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                                    <li class="nav-item-divider nav-item"></li>
                                                    <li class="nav-item-btn nav-item">
                                                        <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item">Activity</li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Chat</span>
                                                        <div class="ml-auto badge badge-pill badge-info">8</div>
                                                    </a></li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-wallet"> </i><span>Recover Password</span></a></li>
                                                    <li class="nav-item-header nav-item">My Account</li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-config"> </i><span>Settings</span>
                                                        <div class="ml-auto badge badge-success">New</div>
                                                    </a></li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-coffee"> </i><span>Messages</span>
                                                        <div class="ml-auto badge badge-warning">512</div>
                                                    </a></li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-box2"> </i><span>Logs</span></a></li>
                                                    <li class="nav-item-divider nav-item"></li>
                                                    <li class="nav-item-btn nav-item">
                                                        <button class="btn-pill btn btn-success btn-sm">Save</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="text-center">
                                            <div class="dropdown btn-group">
                                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="mb-2 mr-2 dropdown-toggle btn btn-primary">Dropdown Basic</button>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Activity</li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat
                                                            <div class="ml-auto badge badge-pill badge-info">8</div>
                                                        </a></li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover Password</a></li>
                                                        <li class="nav-item-header nav-item">My Account</li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Settings
                                                            <div class="ml-auto badge badge-success">New</div>
                                                        </a></li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages
                                                            <div class="ml-auto badge badge-warning">512</div>
                                                        </a></li>
                                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                                        <li class="nav-item-divider nav-item"></li>
                                                        <li class="nav-item-btn nav-item">
                                                            <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Horizontal Menu</h5>
                                        <ul class="nav"><a href="javascript:void(0);" class="nav-link active">Link</a><a href="javascript:void(0);" class="nav-link">Link</a><a href="javascript:void(0);" class="nav-link">Another Link</a><a disabled=""
                                                                                                                                                                                                                                               href="javascript:void(0);"
                                                                                                                                                                                                                                               class="nav-link disabled">Disabled
                                            Link</a></ul>
                                        <div class="divider"></div>
                                        <div class="nav">
                                            <a href="javascript:void(0);" class="nav-link active"><i class="nav-link-icon pe-7s-settings"> </i><span>Link</span></a>
                                            <a href="javascript:void(0);" class="nav-link"><i
                                                    class="nav-link-icon pe-7s-wallet"> </i><span>Link</span>
                                                <div class="badge badge-pill badge-danger">12</div>
                                            </a>
                                            <a href="javascript:void(0);" class="nav-link"><span>Another Link</span></a>
                                            <a disabled="" href="javascript:void(0);" class="nav-link disabled"><i
                                                    class="nav-link-icon pe-7s-box1"> </i><span>Disabled Link</span></a>
                                        </div>
                                        <div class="divider"></div>
                                        <ul class="nav nav-justified">
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link active"><i class="nav-link-icon pe-7s-settings"> </i><span>Justified</span></a></li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i><span>Link</span>
                                                <div class="badge badge-success">NEW</div>
                                            </a></li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><span>Another Link</span></a></li>
                                            <li class="nav-item"><a disabled="" href="javascript:void(0);" class="nav-link disabled"><i class="nav-link-icon pe-7s-box1"> </i><span>Disabled Link</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Active Links</h5>
                                        <div class="nav nav-pills"><a href="javascript:void(0);" class="nav-link active">Link</a><a href="javascript:void(0);" class="nav-link">Link</a><a href="javascript:void(0);" class="nav-link">Another Link</a><a
                                                disabled="" href="javascript:void(0);" class="nav-link disabled">Disabled Link</a></div>
                                        <div class="divider"></div>
                                        <div class="nav nav-pills"><a href="javascript:void(0);" class="nav-link active"><i class="nav-link-icon pe-7s-settings"> </i><span>Link</span></a><a href="javascript:void(0);" class="nav-link"><i
                                                class="nav-link-icon pe-7s-wallet"> </i><span>Link</span>
                                            <div class="badge badge-pill badge-danger">12</div>
                                        </a><a href="javascript:void(0);" class="nav-link"><span>Another Link</span></a><a disabled="" href="javascript:void(0);" class="nav-link disabled"><i
                                                class="nav-link-icon pe-7s-box1"> </i><span>Disabled Link</span></a></div>
                                        <div class="divider"></div>
                                        <ul class="nav nav-pills nav-justified">
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link active"><i class="nav-link-icon pe-7s-settings"> </i>Justified</a></li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i class="nav-link-icon pe-7s-chat"> </i>Link
                                                <div class="badge badge-success">NEW</div>
                                            </a></li>
                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Another Link</a></li>
                                            <li class="nav-item"><a disabled="" href="javascript:void(0);" class="nav-link disabled"><i class="nav-link-icon pe-7s-box1"> </i>Disabled Link</a></li>
                                        </ul>
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
