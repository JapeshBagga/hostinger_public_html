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
                                        <i class="pe-7s-stopwatch icon-gradient bg-amy-crisp">
                                        </i>
                                    </div>
                                    <div>Cards
                                        <div class="page-title-subheading">Wide selection of cards with multiple styles, borders, actions and hover effects.
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
                        </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>Basic</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                                    <span>Color States</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Basic Example</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p></div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Card with Subtitle</h5><h6 class="card-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h6>
                                                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis eni</p></div>
                                        </div>
                                        <div class="mb-3 card card-body"><h5 class="card-title">Special Title Treatment</h5>With supporting text below as a natural lead-in to additional content.
                                            <button class="btn btn-primary">Go somewhere</button>
                                        </div>
                                        <div class="mb-3 text-center card card-body"><h5 class="card-title">Special Title Treatment</h5>With supporting text below as a natural lead-in to additional content.
                                            <button class="btn btn-danger">Go somewhere</button>
                                        </div>
                                        <div class="mb-3 text-right card card-body"><h5 class="card-title">Special Title Treatment</h5>With supporting text below as a natural lead-in to additional content.
                                            <button class="btn btn-outline-focus">Go somewhere</button>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-header">Header</div>
                                            <div class="card-body"><h5 class="card-title">Special Title Treatment</h5>With supporting text below as a natural lead-in to additional content.
                                                <button class="btn btn-warning">Go somewhere</button>
                                            </div>
                                            <div class="card-footer">Footer</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="main-card mb-3 card"><img width="100%" src="https://placeholdit.imgix.net/~text?txtsize=33&amp;txt=318%C3%97180&amp;w=318&amp;h=180" alt="Card image cap" class="card-img-top">
                                            <div class="card-body"><h5 class="card-title">Card title</h5><h6 class="card-subtitle">Card subtitle</h6>Some quick example text to build on the card title and make up the bulk of the card's content.
                                                <button class="btn btn-secondary">Button</button>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Card Title</h5>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </div>
                                            <img width="100%" src="https://placeholdit.imgix.net/~text?txtsize=33&amp;txt=318%C3%97180&amp;w=318&amp;h=180" alt="Card image cap" class="card-img-bottom"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Card title</h5><h6 class="mb-0 card-subtitle">Card subtitle</h6></div>
                                            <img width="100%" src="https://placeholdit.imgix.net/~text?txtsize=33&amp;txt=318%C3%97180&amp;w=318&amp;h=180" alt="Card image cap">
                                            <div class="card-body">Some quick example text to build on the card title and make up the bulk of the card's content.<a href="javascript:void(0);" class="card-link">Card Link</a><a href="javascript:void(0);"
                                                                                                                                                                                                                                 class="card-link">Another
                                                Link</a></div>
                                        </div>
                                        <div class="main-card mb-3 card"><img width="100%" src="https://placeholdit.imgix.net/~text?txtsize=33&amp;txt=318%C3%97180&amp;w=318&amp;h=180" alt="Card image cap" class="card-img-top">
                                            <div class="card-body"><h5 class="card-title">Card Title</h5>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-shadow-primary border mb-3 card card-body border-primary"><h5 class="card-title">Primary Card Shadow</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-shadow-secondary border mb-3 card card-body border-secondary"><h5 class="card-title">Secondary Card Shadow</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-shadow-warning border mb-3 card card-body border-warning"><h5 class="card-title">Warning Card Shadow</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-shadow-danger border mb-3 card card-body border-danger"><h5 class="card-title">Danger Card Shadow</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-shadow-success border mb-3 card card-body border-success"><h5 class="card-title">Success Card Shadow</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-shadow-info border mb-3 card card-body border-info"><h5 class="card-title">Info Card Shadow</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-shadow-focus border mb-3 card card-body border-focus"><h5 class="card-title">Focus Card Shadow</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-shadow-alternate border mb-3 card card-body border-alternate"><h5 class="card-title">Alternate Card Shadow</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="mb-3 card text-white"><img width="100%" src="https://placeholdit.imgix.net/~text?txtsize=33&amp;txt=318%C3%97270&amp;w=318&amp;h=270&amp;bg=333333&amp;txtclr=666666" alt="Card image cap" class="card-img">
                                            <div class="card-img-overlay"><h5 class="text-white card-title">Card Title</h5>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                                <small class="text-white">Last updated 3 mins ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-border mb-3 card card-body border-primary"><h5 class="card-title">Primary Card Border</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-border mb-3 card card-body border-secondary"><h5 class="card-title">Secondary Card Border</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-border mb-3 card card-body border-warning"><h5 class="card-title">Warning Card Border</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-border mb-3 card card-body border-danger"><h5 class="card-title">Danger Card Border</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-border mb-3 card card-body border-success"><h5 class="card-title">Success Card Border</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-border mb-3 card card-body border-info"><h5 class="card-title">Info Card Border</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-border mb-3 card card-body border-focus"><h5 class="card-title">Focus Card Border</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="card-border mb-3 card card-body border-alternate"><h5 class="card-title">Alternate Card Border</h5>With supporting text below as a natural lead-in to additional content.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3 card text-white bg-primary">
                                            <div class="card-header">Header</div>
                                            <div class="card-body">With supporting text below as a natural lead-in to additional content.</div>
                                            <div class="card-footer">Footer</div>
                                        </div>
                                        <div class="mb-3 card text-white card-body" style="background-color: rgb(51, 51, 51); border-color: rgb(51, 51, 51);"><h5 class="text-white card-title">Special Title Treatment</h5>With supporting text below as a
                                            natural lead-in to additional content.
                                        </div>
                                        <div class="mb-3 card text-white card-body bg-primary"><h5 class="text-white card-title">Special Title Treatment</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="mb-3 card text-white card-body bg-success"><h5 class="text-white card-title">Special Title Treatment</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="mb-3 card text-white card-body bg-danger"><h5 class="text-white card-title">Special Title Treatment</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="mb-3 card text-white card-body bg-info"><h5 class="text-white card-title">Special Title Treatment</h5>With supporting text below as a natural lead-in to additional content.</div>
                                        <div class="mb-3 card text-white card-body bg-warning"><h5 class="text-white card-title">Special Title Treatment</h5>With supporting text below as a natural lead-in to additional content.</div>
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
