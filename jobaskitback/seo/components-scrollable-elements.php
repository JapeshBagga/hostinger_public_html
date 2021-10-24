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
                                        <i class="pe-7s-radio icon-gradient bg-strong-bliss">
                                        </i>
                                    </div>
                                    <div>Scrollable Elements
                                        <div class="page-title-subheading">Add scrolling areas to any elements with custom scrollbars or default browser ones.
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
                                    <div class="card-body"><h5 class="card-title">Medium Scrollable Area</h5>
                                        <div class="scroll-area-md">
                                            <div class="scrollbar-container ps--active-y"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales ullamcorper vehicula. Duis placerat quam porta lorem lobortis, sit amet sodales mauris
                                                finibus. Donec posuere diam at volutpat viverra. Cras fringilla auctor augue sed congue. Maecenas mollis quis enim quis egestas. In sollicitudin mi a pretium varius. Integer eleifend sodales pharetra. Nullam vitae
                                                libero sem. Nulla et eros congue, tincidunt ante eu, tincidunt eros. Donec nisl purus, convallis a hendrerit ut, eleifend in lectus. Proin luctus dignissim lacus, in laoreet arcu eleifend non. Quisque viverra ipsum
                                                a massa porta convallis. Donec tincidunt imperdiet purus, interdum elementum ante commodo a. Quisque pharetra arcu sapien, vel ornare magna sollicitudin quis.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Large Scrollable Area</h5>
                                        <div class="scroll-area-lg">
                                            <div class="scrollbar-container ps--active-y"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales ullamcorper vehicula. Duis placerat quam porta lorem lobortis, sit amet sodales mauris
                                                finibus. Donec posuere diam at volutpat viverra. Cras fringilla auctor augue sed congue. Maecenas mollis quis enim quis egestas. In sollicitudin mi a pretium varius. Integer eleifend sodales pharetra. Nullam vitae
                                                libero sem. Nulla et eros congue, tincidunt ante eu, tincidunt eros. Donec nisl purus, convallis a hendrerit ut, eleifend in lectus. Proin luctus dignissim lacus, in laoreet arcu eleifend non. Quisque viverra ipsum
                                                a massa porta convallis. Donec tincidunt imperdiet purus, interdum elementum ante commodo a. Quisque pharetra arcu sapien, vel ornare magna sollicitudin quis.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Small Scrollable Area</h5>
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container ps--active-y"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales ullamcorper vehicula. Duis placerat quam porta lorem lobortis, sit amet sodales mauris
                                                finibus. Donec posuere diam at volutpat viverra. Cras fringilla auctor augue sed congue. Maecenas mollis quis enim quis egestas. In sollicitudin mi a pretium varius. Integer eleifend sodales pharetra. Nullam vitae
                                                libero sem. Nulla et eros congue, tincidunt ante eu, tincidunt eros. Donec nisl purus, convallis a hendrerit ut, eleifend in lectus. Proin luctus dignissim lacus, in laoreet arcu eleifend non. Quisque viverra ipsum
                                                a massa porta convallis. Donec tincidunt imperdiet purus, interdum elementum ante commodo a. Quisque pharetra arcu sapien, vel ornare magna sollicitudin quis.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-card mb-3 card">
                                    <div class="card-header">
                                        <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"> </i>
                                        Header Menu
                                        <div class="btn-actions-pane-right actions-icon-btn">
                                            <button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-leaf btn-icon-wrapper"></i></button>
                                            <button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-cloud-download btn-icon-wrapper"></i></button>
                                            <div class="btn-group">
                                                <button type="button" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-menu btn-icon-wrapper"></i></button>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <div class="p-3 text-right">
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container ps--active-y"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales ullamcorper vehicula. Duis placerat quam porta lorem lobortis, sit amet sodales mauris
                                                finibus. Donec posuere diam at volutpat viverra. Cras fringilla auctor augue sed congue. Maecenas mollis quis enim quis egestas. In sollicitudin mi a pretium varius. Integer eleifend sodales pharetra. Nullam vitae
                                                libero sem. Nulla et eros congue, tincidunt ante eu, tincidunt eros. Donec nisl purus, convallis a hendrerit ut, eleifend in lectus. Proin luctus dignissim lacus, in laoreet arcu eleifend non. Quisque viverra ipsum
                                                a massa porta convallis. Donec tincidunt imperdiet purus, interdum elementum ante commodo a. Quisque pharetra arcu sapien, vel ornare magna sollicitudin quis.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-block text-right card-footer">
                                        <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                                        <button class="btn btn-success btn-lg">Save</button>
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
