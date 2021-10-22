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
                                        <i class="pe-7s-wristwatch icon-gradient bg-deep-blue">
                                        </i>
                                    </div>
                                    <div>Utilities
                                        <div class="page-title-subheading">These are helpers that speed up the dev time for various components and effects.
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
                        </div>            <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Animate.css</h5>
                                            <p>All Animate.css animations are available if enabled from the <b>/assets/utils/_animate.css</b> file.</p>
                                            <div class="text-center">
                                                <div class="animated lightSpeedIn">
                                                    <div class="swatch-holder swatch-holder-lg bg-success"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Solid Colors</h5>
                                            <div class="swatch-holder swatch-holder-lg bg-primary" id="TooltipC-0"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-secondary" id="TooltipC-1"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-success" id="TooltipC-2"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-info" id="TooltipC-3"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-warning" id="TooltipC-4"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-danger" id="TooltipC-5"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-focus" id="TooltipC-6"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-alternate" id="TooltipC-7"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-light" id="TooltipC-8"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-dark" id="TooltipC-9"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Gradient Colors</h5>
                                            <div class="swatch-holder swatch-holder-lg bg-happy-green" id="Tooltip-0"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-premium-dark" id="Tooltip-1"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-love-kiss" id="Tooltip-2"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-grow-early" id="Tooltip-3"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-strong-bliss" id="Tooltip-4"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-warm-flame" id="Tooltip-5"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-tempting-azure" id="Tooltip-6"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-sunny-morning" id="Tooltip-7"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-mean-fruit" id="Tooltip-8"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-night-fade" id="Tooltip-9"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-heavy-rain" id="Tooltip-10"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-amy-crisp" id="Tooltip-11"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-malibu-beach" id="Tooltip-12"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-deep-blue" id="Tooltip-13"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-mixed-hopes" id="Tooltip-14"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-happy-itmeo" id="Tooltip-15"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-happy-fisher" id="Tooltip-16"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-arielle-smile" id="Tooltip-17"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-ripe-malin" id="Tooltip-18"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-vicious-stance" id="Tooltip-19"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-midnight-bloom" id="Tooltip-20"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-night-sky" id="Tooltip-21"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-slick-carbon" id="Tooltip-22"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-royal" id="Tooltip-23"></div>
                                            <div class="swatch-holder swatch-holder-lg bg-asteroid" id="Tooltip-24"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Text Colors</h5>
                                            <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                                            <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                            <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                                            <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                                            <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            <p class="bg-dark text-white">Etiam porta sem malesuada ultricies vehicula.</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-warning fade show" role="alert"><h5>Bootstrap Helpers</h5>
                                        <p class="mb-0">All Bootstrap 4 helper classes available in the official Bootstrap documentation are also available in ArchitectUI Framework: Spacing, resets, typography utilities, sizing and others.</p></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Opacity</h5>
                                            <table class="mb-0 table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <th scope="row"><b>.opacity-01 </b> - <b>.opacity-09</b></th>
                                                    <td>Adding this class to any element sets the opacity to <b>1% ... 9%</b></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><b>.opacity-2 </b> - <b>.opacity-10</b></th>
                                                    <td>Adding this class to any element sets the opacity to <b>10% ... 100%</b></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><b>.opacity-01</b></th>
                                                    <td>Adding this class to any element sets the opacity to <b>10%</b></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><b>.opacity-15</b></th>
                                                    <td>Adding this class to any element sets the opacity to <b>15%</b></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Breadcrumbs</h5>
                                            <div>
                                                <nav class="" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="active breadcrumb-item" aria-current="page">Home</li>
                                                    </ol>
                                                </nav>
                                                <nav class="" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                                        <li class="active breadcrumb-item" aria-current="page">Library</li>
                                                    </ol>
                                                </nav>
                                                <nav class="" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Library</a></li>
                                                        <li class="active breadcrumb-item" aria-current="page">Data</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
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
