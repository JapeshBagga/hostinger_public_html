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
                                        <i class="pe-7s-plane icon-gradient bg-tempting-azure">
                                        </i>
                                    </div>
                                    <div>Standard Buttons
                                        <div class="page-title-subheading">Wide selection of buttons that feature different styles for backgrounds, borders and hover options!
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
                                    <div class="card-body">
                                        <h5 class="card-title">Solid
                                        </h5>
                                        <button class="mb-2 mr-2 btn btn-primary">Primary
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-secondary">Secondary
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-success">Success
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-info">Info
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-warning">Warning
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-danger">Danger
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-focus">Focus
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-alternate">Alt
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-light">Light
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-dark">Dark
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-link">link
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Color Transition
                                        </h5>
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-primary">Primary
                                        </button>
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-secondary">Secondary
                                        </button>
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-success">Success
                                        </button>
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-info">Info
                                        </button>
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-warning">Warning
                                        </button>
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-danger">Danger
                                        </button>
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-focus">Focus
                                        </button>
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-alternate">Alt
                                        </button>
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-light">Light
                                        </button>
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-dark">Dark
                                        </button>
                                        <button class="mb-2 mr-2 btn-transition btn btn-outline-link">link
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Color Transition No Borders
                                        </h5>
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-primary">Primary
                                        </button>
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-secondary">Secondary
                                        </button>
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-success">Success
                                        </button>
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-info">Info
                                        </button>
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-warning">Warning
                                        </button>
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger">Danger
                                        </button>
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-focus">Focus
                                        </button>
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-alternate">Alt
                                        </button>
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-light">Light
                                        </button>
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-dark">Dark
                                        </button>
                                        <button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-link">link
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Active State
                                        </h5>
                                        <button class="mb-2 mr-2 btn btn-primary active">Primary
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-secondary active">Secondary
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-success active">Success
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-info active">Info
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-warning active">Warning
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-danger active">Danger
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-focus active">Focus
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-alternate active">Alt
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-light active">Light
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-dark active">Dark
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-link active">link
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Disabled State
                                        </h5>
                                        <button disabled="" class="mb-2 mr-2 btn btn-primary disabled">Primary
                                        </button>
                                        <button disabled="" class="mb-2 mr-2 btn btn-secondary disabled">Secondary
                                        </button>
                                        <button disabled="" class="mb-2 mr-2 btn btn-success disabled">Success
                                        </button>
                                        <button disabled="" class="mb-2 mr-2 btn btn-info disabled">Info
                                        </button>
                                        <button disabled="" class="mb-2 mr-2 btn btn-warning disabled">Warning
                                        </button>
                                        <button disabled="" class="mb-2 mr-2 btn btn-danger disabled">Danger
                                        </button>
                                        <button disabled="" class="mb-2 mr-2 btn btn-focus disabled">Focus
                                        </button>
                                        <button disabled="" class="mb-2 mr-2 btn btn-alternate disabled">Alt
                                        </button>
                                        <button disabled="" class="mb-2 mr-2 btn btn-light disabled">Light
                                        </button>
                                        <button disabled="" class="mb-2 mr-2 btn btn-dark disabled">Dark
                                        </button>
                                        <button disabled="" class="mb-2 mr-2 btn btn-link disabled">link
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Block Level
                                        </h5>
                                        <button class="mb-2 mr-2 btn btn-primary btn-lg btn-block">Block Large
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-primary btn-block">Block Normal
                                        </button>
                                        <button class="mb-2 mr-2 btn btn-primary btn-sm btn-block">Block Small
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Checkbox Buttons
                                        </h5>
                                        <div class="text-center">
                                            <div role="group" class="btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                                <button type="button" class="btn btn-primary">One
                                                </button>
                                                <button type="button" class="btn btn-primary">Two
                                                </button>
                                                <button type="button" class="btn btn-primary">Three
                                                </button>
                                            </div>
                                            <div class="divider">
                                            </div>
                                            <div role="group" class="btn-group" data-toggle="buttons">
                                                <button type="button" class="btn btn-danger">One
                                                </button>
                                                <button type="button" class="btn btn-danger">Two
                                                </button>
                                                <button type="button" class="btn btn-danger">Three
                                                </button>
                                            </div>
                                            <div class="divider">
                                            </div>
                                            <div role="group" class="btn-group-lg btn-group btn-group-toggle" data-toggle="buttons">
                                                <button type="button" class="btn btn-alternate">One
                                                </button>
                                                <button type="button" class="btn btn-alternate">Two
                                                </button>
                                                <button type="button" class="btn btn-alternate">Three
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Radio Buttons
                                        </h5>
                                        <div class="text-center">
                                            <div role="group" class="btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                                    One
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option2" autocomplete="off">
                                                    Two
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="options" id="option3" autocomplete="off">
                                                    Three
                                                </label>
                                            </div>
                                            <div class="divider">
                                            </div>
                                            <div role="group" class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-warning">
                                                    <input type="radio" name="options" id="option4" autocomplete="off">
                                                    One
                                                </label>
                                                <label class="btn btn-warning">
                                                    <input type="radio" name="options" id="option5" autocomplete="off">
                                                    Two
                                                </label>
                                                <label class="btn btn-warning">
                                                    <input type="radio" name="options" id="option6" autocomplete="off">
                                                    Three
                                                </label>
                                            </div>
                                            <div class="divider">
                                            </div>
                                            <div role="group" class="btn-group-lg btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-focus">
                                                    <input type="radio" name="options" id="option7" autocomplete="off">
                                                    One
                                                </label>
                                                <label class="btn btn-focus">
                                                    <input type="radio" name="options" id="option8" autocomplete="off">
                                                    Two
                                                </label>
                                                <label class="btn btn-focus">
                                                    <input type="radio" name="options" id="option9" autocomplete="off">
                                                    Three
                                                </label>
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
