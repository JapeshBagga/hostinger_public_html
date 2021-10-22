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
                                        <i class="pe-7s-voicemail icon-gradient bg-arielle-smile">
                                        </i>
                                    </div>
                                    <div>Badges &amp; Labels
                                        <div class="page-title-subheading">Badges and labels are used to offer extra small pieces of info for your content.
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
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Buttons Badges</h5>
                                        <button class="mb-2 mr-2 btn btn-primary">Primary<span class="badge badge-pill badge-light">6</span></button>
                                        <button class="mb-2 mr-2 btn btn-secondary">Secondary<span class="badge badge-pill badge-light">6</span></button>
                                        <button class="mb-2 mr-2 btn btn-success">Success<span class="badge badge-pill badge-light">6</span></button>
                                        <button class="mb-2 mr-2 btn btn-info">Info<span class="badge badge-pill badge-light">6</span></button>
                                        <button class="mb-2 mr-2 btn btn-warning">Warning<span class="badge badge-pill badge-light">6</span></button>
                                        <button class="mb-2 mr-2 btn btn-danger">Danger<span class="badge badge-pill badge-light">6</span></button>
                                        <button class="mb-2 mr-2 btn btn-focus">Focus<span class="badge badge-pill badge-light">6</span></button>
                                        <button class="mb-2 mr-2 btn btn-alternate">Alt<span class="badge badge-pill badge-light">6</span></button>
                                        <button class="mb-2 mr-2 btn btn-light">Light<span class="badge badge-pill badge-light">6</span></button>
                                        <button class="mb-2 mr-2 btn btn-dark">Dark<span class="badge badge-pill badge-light">6</span></button>
                                        <button class="mb-2 mr-2 btn btn-link">Link 1<span class="badge badge-pill badge-primary">6</span></button>
                                        <button class="mb-2 mr-2 btn btn-link">Link 2<span class="badge badge-pill badge-success">6</span></button>
                                        <button class="mb-2 mr-2 btn btn-link">Link 3<span class="badge badge-pill badge-danger">6</span></button>
                                        <button class="mb-2 mr-2 btn btn-link">Link 4<span class="badge badge-pill badge-warning">6</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">With Buttons</h5>
                                        <button class="mb-2 mr-2 btn btn-primary">Primary<span class="badge badge-light">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-secondary">Secondary<span class="badge badge-light">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-success">Success<span class="badge badge-light">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-info">Info<span class="badge badge-light">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-warning">Warning<span class="badge badge-light">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-danger">Danger<span class="badge badge-light">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-focus">Focus<span class="badge badge-light">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-alternate">Alt<span class="badge badge-light">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-light">Light<span class="badge badge-light">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-dark">Dark<span class="badge badge-light">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-link">Link 1<span class="badge badge-primary">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-link">Link 2<span class="badge badge-success">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-link">Link 3<span class="badge badge-danger">NEW</span></button>
                                        <button class="mb-2 mr-2 btn btn-link">Link 4<span class="badge badge-warning">NEW</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title">Colors</h5>
                                <div class="mb-2 mr-2 badge badge-primary">Primary</div>
                                <div class="mb-2 mr-2 badge badge-secondary">Secondary</div>
                                <div class="mb-2 mr-2 badge badge-success">Success</div>
                                <div class="mb-2 mr-2 badge badge-info">Info</div>
                                <div class="mb-2 mr-2 badge badge-warning">Warning</div>
                                <div class="mb-2 mr-2 badge badge-danger">Danger</div>
                                <div class="mb-2 mr-2 badge badge-focus">Focus</div>
                                <div class="mb-2 mr-2 badge badge-alternate">Alt</div>
                                <div class="mb-2 mr-2 badge badge-light">Light</div>
                                <div class="mb-2 mr-2 badge badge-dark">Dark</div>
                                <div class="divider"></div>
                                <h5 class="card-title">Pills</h5>
                                <div class="mb-2 mr-2 badge badge-pill badge-primary">Primary</div>
                                <div class="mb-2 mr-2 badge badge-pill badge-secondary">Secondary</div>
                                <div class="mb-2 mr-2 badge badge-pill badge-success">Success</div>
                                <div class="mb-2 mr-2 badge badge-pill badge-info">Info</div>
                                <div class="mb-2 mr-2 badge badge-pill badge-warning">Warning</div>
                                <div class="mb-2 mr-2 badge badge-pill badge-danger">Danger</div>
                                <div class="mb-2 mr-2 badge badge-pill badge-focus">Focus</div>
                                <div class="mb-2 mr-2 badge badge-pill badge-alternate">Alt</div>
                                <div class="mb-2 mr-2 badge badge-pill badge-light">Light</div>
                                <div class="mb-2 mr-2 badge badge-pill badge-dark">Dark</div>
                                <div class="divider"></div>
                                <h5 class="card-title">Links</h5><a href="javascript:void(0);" class="mb-2 mr-2 badge badge-primary">Primary</a><a href="javascript:void(0);" class="mb-2 mr-2 badge badge-secondary">Secondary</a><a
                                        href="javascript:void(0);" class="mb-2 mr-2 badge badge-success">Success</a><a href="javascript:void(0);" class="mb-2 mr-2 badge badge-info">Info</a><a href="javascript:void(0);"
                                                                                                                                                                                                class="mb-2 mr-2 badge badge-warning">Warning</a><a
                                        href="javascript:void(0);" class="mb-2 mr-2 badge badge-danger">Danger</a><a href="javascript:void(0);" class="mb-2 mr-2 badge badge-focus">Focus</a><a href="javascript:void(0);"
                                                                                                                                                                                                class="mb-2 mr-2 badge badge-alternate">Alt</a><a
                                        href="javascript:void(0);" class="mb-2 mr-2 badge badge-light">Light</a><a href="javascript:void(0);" class="mb-2 mr-2 badge badge-dark">Dark</a></div>
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
