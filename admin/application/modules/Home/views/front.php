
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>appsources/assets/images/favicon.png">
    <title>Ample admin Template - The Ultimate Multipurpose admin template</title>
    <!-- chartist CSS -->
    <link href="<?=base_url()?>appsources/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?=base_url()?>appsources/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="<?=base_url()?>appsources/assets/libs/morris.js/morris.css" rel="stylesheet">
    <link href="<?=base_url()?>appsources/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url()?>appsources/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="<?=base_url()?>appsources/assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <!-- needed css -->
    <link href="<?=base_url()?>appsources/dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>appsources/material-icons/css/materialdesignicons.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header border-right">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?=base_url()?>appsources/assets/images/logos/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?=base_url()?>appsources/assets/images/logos/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="<?=base_url()?>appsources/assets/images/logos/logo-text.png" alt="homepage" class="dark-logo" />
                             <!-- Light Logo text -->    
                             <img src="<?=base_url()?>appsources/assets/images/logos/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-18"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-18 mdi mdi-gmail"></i>
                                <div class="notify">
                                    <span class="heartbit"></span>
                                    <span class="point"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title border-bottom">You have 4 new messanges</div>
                                    </li>
                                    <li>
                                        <div class="message-center message-body">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img"> <img src="<?=base_url()?>appsources/assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img"> <img src="<?=base_url()?>appsources/assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img"> <img src="<?=base_url()?>appsources/assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img"> <img src="<?=base_url()?>appsources/assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link text-dark" href="javascript:void(0);"> <b>See all Notifications</b> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-check-circle font-18"></i>
                                <div class="notify">
                                    <span class="heartbit"></span>
                                    <span class="point"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title border-bottom">You have 3 new Tasks</div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center mb-1 text-dark" href="javascript:void(0);"> <strong>See all Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-none d-md-block">Mega <i class="icon-options-vertical"></i></span>
                                <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span>
                            </a>
                            <div class="dropdown-menu animated bounceInDown">
                                <div class="mega-dropdown-menu row">
                                    <div class="col-lg-3 col-xlg-2 mb-4">
                                        <h5 class="mb-3">CAROUSEL</h5>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container p-0"> <img class="d-block img-fluid" src="<?=base_url()?>appsources/assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container p-0"><img class="d-block img-fluid" src="<?=base_url()?>appsources/assets/images/big/img2.jpg" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container p-0"><img class="d-block img-fluid" src="<?=base_url()?>appsources/assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <h5 class="mb-3">ACCORDION</h5>
                                        <!-- Accordian -->
                                        <div id="accordion" class="accordion">
                                            <div class="card mb-1">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Collapsible Group Item #1
                                                </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-1">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Collapsible Group Item #2
                                                </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-1">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  Collapsible Group Item #3
                                                </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3  mb-4">
                                        <h5 class="mb-3">CONTACT US</h5>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </div>
                                    <div class="col-lg-3 col-xlg-4 mb-4">
                                        <h5 class="mb-3">LIST STYLE</h5>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <form class="app-search d-none d-lg-block">
                                <input type="text" class="form-control" placeholder="Search...">
                                <a href="" class="active"><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?=base_url()?>appsources/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="36">
                                <span class="ml-2 font-medium">Steve</span><span class="fas fa-angle-down ml-2"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                                    <div class=""><img src="<?=base_url()?>appsources/assets/images/users/1.jpg" alt="user" class="rounded" width="80"></div>
                                    <div class="ml-2">
                                        <h4 class="mb-0">Steave Jobs</h4>
                                        <p class=" mb-0 text-muted">varun@gmail.com</p>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger text-white mt-2 btn-rounded">View Profile</a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet mr-1 ml-1"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email mr-1 ml-1"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings mr-1 ml-1"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark profile-dd" href="javascript:void(0)" aria-expanded="false">
                                <img src="<?=base_url()?>appsources/assets/images/users/1.jpg" class="rounded-circle ml-2" width="30">
                                <span class="hide-menu">Steve Jection </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="ti-user"></i>
                                        <span class="hide-menu"> My Profile </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="ti-wallet"></i>
                                        <span class="hide-menu"> My Balance </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="ti-email"></i>
                                        <span class="hide-menu"> Inbox </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="ti-settings"></i>
                                        <span class="hide-menu"> Account Setting </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="fas fa-power-off"></i>
                                        <span class="hide-menu"> Logout </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard</span>
                                <span class="badge badge-inverse badge-pill ml-auto mr-3 font-medium px-2 py-1">6</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="index.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 1 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 2 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 3 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index4.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 4 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index5.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 5 </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index6.html" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Dashboard 6 </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-cart-outline"></i>
                                <span class="hide-menu">Ecommerce</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="eco-products.html" class="sidebar-link">
                                        <i class="mdi mdi-cards-variant"></i>
                                        <span class="hide-menu">Products</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-cart.html" class="sidebar-link">
                                        <i class="mdi mdi-cart"></i>
                                        <span class="hide-menu">Products Cart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-edit.html" class="sidebar-link">
                                        <i class="mdi mdi-cart-plus"></i>
                                        <span class="hide-menu">Products Edit</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-detail.html" class="sidebar-link">
                                        <i class="mdi mdi-camera-burst"></i>
                                        <span class="hide-menu">Product Details</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-orders.html" class="sidebar-link">
                                        <i class="mdi mdi-chart-pie"></i>
                                        <span class="hide-menu">Product Orders</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-products-checkout.html" class="sidebar-link">
                                        <i class="mdi mdi-clipboard-check"></i>
                                        <span class="hide-menu">Products Checkout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-format-color-fill"></i>
                                <span class="hide-menu">Ui Elements </span>
                                <span class="badge badge-info badge-pill ml-auto mr-3 font-medium px-2 py-1">12</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="ui-buttons.html" class="sidebar-link">
                                        <i class="mdi mdi-toggle-switch"></i>
                                        <span class="hide-menu"> Buttons</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-modals.html" class="sidebar-link">
                                        <i class="mdi mdi-tablet"></i>
                                        <span class="hide-menu"> Modals</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-tab.html" class="sidebar-link">
                                        <i class="mdi mdi-sort-variant"></i>
                                        <span class="hide-menu"> Tab</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-tooltip-popover.html" class="sidebar-link">
                                        <i class="mdi mdi-image-filter-vintage"></i>
                                        <span class="hide-menu"> Tooltip &amp; Popover</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-notification.html" class="sidebar-link">
                                        <i class="mdi mdi-message-bulleted"></i>
                                        <span class="hide-menu"> Notification</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-progressbar.html" class="sidebar-link">
                                        <i class="mdi mdi-poll"></i>
                                        <span class="hide-menu"> Progressbar</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-typography.html" class="sidebar-link">
                                        <i class="mdi mdi-format-line-spacing"></i>
                                        <span class="hide-menu"> Typography</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-bootstrap.html" class="sidebar-link">
                                        <i class="mdi mdi-bootstrap"></i>
                                        <span class="hide-menu"> Bootstrap Ui</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-breadcrumb.html" class="sidebar-link">
                                        <i class="mdi mdi-equal"></i>
                                        <span class="hide-menu"> Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-list-media.html" class="sidebar-link">
                                        <i class="mdi mdi-file-video"></i>
                                        <span class="hide-menu"> List Media</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-grid.html" class="sidebar-link">
                                        <i class="mdi mdi-view-module"></i>
                                        <span class="hide-menu"> Grid</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-carousel.html" class="sidebar-link">
                                        <i class="mdi mdi-view-carousel"></i>
                                        <span class="hide-menu"> Carousel</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-content-copy"></i>
                                <span class="hide-menu">Sample Pages</span>
                                <span class="badge badge-warning text-white badge-pill ml-auto mr-3 font-medium px-2 py-1">25</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="starter-kit.html" class="sidebar-link">
                                        <i class="mdi mdi-crop-free"></i>
                                        <span class="hide-menu">Starter Kit</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-email-open-outline"></i>
                                        <span class="hide-menu">Email Templates</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="email-templete-alert.html" class="sidebar-link">
                                                <i class="mdi mdi-message-alert"></i>
                                                <span class="hide-menu"> Alert </span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="email-templete-basic.html" class="sidebar-link">
                                                <i class="mdi mdi-message-bulleted"></i>
                                                <span class="hide-menu"> Basic</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="email-templete-billing.html" class="sidebar-link">
                                                <i class="mdi mdi-message-draw"></i>
                                                <span class="hide-menu"> Billing</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="email-templete-password-reset.html" class="sidebar-link">
                                                <i class="mdi mdi-message-bulleted-off"></i>
                                                <span class="hide-menu"> Password-Reset</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-account-circle"></i>
                                        <span class="hide-menu">Authentication</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="authentication-login1.html" class="sidebar-link">
                                                <i class="mdi mdi-account-key"></i>
                                                <span class="hide-menu"> Login </span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="authentication-login2.html" class="sidebar-link">
                                                <i class="mdi mdi-account-key"></i>
                                                <span class="hide-menu"> Login 2 </span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="authentication-register1.html" class="sidebar-link">
                                                <i class="mdi mdi-account-plus"></i>
                                                <span class="hide-menu"> Register</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="authentication-register2.html" class="sidebar-link">
                                                <i class="mdi mdi-account-plus"></i>
                                                <span class="hide-menu"> Register 2</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="authentication-lockscreen.html" class="sidebar-link">
                                                <i class="mdi mdi-account-off"></i>
                                                <span class="hide-menu"> Lockscreen</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="authentication-recover-password.html" class="sidebar-link">
                                                <i class="mdi mdi-account-convert"></i>
                                                <span class="hide-menu"> Recover password</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-alert-box"></i>
                                        <span class="hide-menu">Error Pages</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="error-400.html" class="sidebar-link">
                                                <i class="mdi mdi-alert-outline"></i>
                                                <span class="hide-menu"> Error 400 </span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="error-403.html" class="sidebar-link">
                                                <i class="mdi mdi-alert-outline"></i>
                                                <span class="hide-menu"> Error 403</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="error-404.html" class="sidebar-link">
                                                <i class="mdi mdi-alert-outline"></i>
                                                <span class="hide-menu"> Error 404</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="error-500.html" class="sidebar-link">
                                                <i class="mdi mdi-alert-outline"></i>
                                                <span class="hide-menu"> Error 500</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="error-503.html" class="sidebar-link">
                                                <i class="mdi mdi-alert-outline"></i>
                                                <span class="hide-menu"> Error 503</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-animation.html" class="sidebar-link">
                                        <i class="mdi mdi-debug-step-over"></i>
                                        <span class="hide-menu">Animation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-search-result.html" class="sidebar-link">
                                        <i class="mdi mdi-search-web"></i>
                                        <span class="hide-menu">Search Result</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-gallery.html" class="sidebar-link">
                                        <i class="mdi mdi-camera-iris"></i>
                                        <span class="hide-menu">Gallery</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-treeview.html" class="sidebar-link">
                                        <i class="mdi mdi-file-tree"></i>
                                        <span class="hide-menu">Treeview</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-block-ui.html" class="sidebar-link">
                                        <i class="mdi mdi-codepen"></i>
                                        <span class="hide-menu">Block UI</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-session-timeout.html" class="sidebar-link">
                                        <i class="mdi mdi-timer-off"></i>
                                        <span class="hide-menu">Session Timeout</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-session-idle-timeout.html" class="sidebar-link">
                                        <i class="mdi mdi-timer-sand-empty"></i>
                                        <span class="hide-menu">Session Idle Timeout</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-utility-classes.html" class="sidebar-link">
                                        <i class="mdi mdi-tune"></i>
                                        <span class="hide-menu">Helper Classes</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-maintenance.html" class="sidebar-link">
                                        <i class="mdi mdi-camera-iris"></i>
                                        <span class="hide-menu">Maintenance Page</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-apps"></i>
                                <span class="hide-menu">Apps</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="app-chats.html" class="sidebar-link">
                                        <i class="mdi mdi-comment-processing-outline"></i>
                                        <span class="hide-menu">Chat Message</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-inbox-arrow-down"></i>
                                        <span class="hide-menu">Inbox</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="inbox-email.html" class="sidebar-link">
                                                <i class="mdi mdi-email"></i>
                                                <span class="hide-menu"> Email </span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="inbox-email-detail.html" class="sidebar-link">
                                                <i class="mdi mdi-email-alert"></i>
                                                <span class="hide-menu"> Email Detail </span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="inbox-email-compose.html" class="sidebar-link">
                                                <i class="mdi mdi-email-secure"></i>
                                                <span class="hide-menu"> Email Compose </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                        <i class="ti-user"></i>
                                        <span class="hide-menu">Contacts</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="contact-list.html" class="sidebar-link">
                                                <i class="icon-people"></i>
                                                <span class="hide-menu"> Contact List </span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="contact-grid.html" class="sidebar-link">
                                                <i class="icon-user-follow"></i>
                                                <span class="hide-menu"> Contacts Grid </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-bookmark-plus-outline"></i>
                                        <span class="hide-menu">Tickets</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="ticket-list.html" class="sidebar-link">
                                                <i class="mdi mdi-book-multiple"></i>
                                                <span class="hide-menu"> Ticket List </span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="ticket-detail.html" class="sidebar-link">
                                                <i class="mdi mdi-book-plus"></i>
                                                <span class="hide-menu"> Ticket Detail </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a href="app-taskboard.html" class="sidebar-link">
                                        <i class="mdi mdi-bulletin-board"></i>
                                        <span class="hide-menu"> Taskboard </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <div class="devider"></div>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-tune-vertical"></i>
                                <span class="hide-menu">Sidebar Type </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="sidebar-type-minisidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-view-quilt"></i>
                                        <span class="hide-menu"> Minisidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="sidebar-type-iconsidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-view-parallel"></i>
                                        <span class="hide-menu"> Icon Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="sidebar-type-overlaysidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-view-day"></i>
                                        <span class="hide-menu"> Overlay Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="sidebar-type-fullsidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-view-array"></i>
                                        <span class="hide-menu"> Full Sidebar </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-content-copy"></i>
                                <span class="hide-menu">Page Layouts </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="layout-inner-fixed-left-sidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-format-align-left"></i>
                                        <span class="hide-menu"> Inner Fixed Left Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="layout-inner-fixed-right-sidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-format-align-right"></i>
                                        <span class="hide-menu"> Inner Fixed Right Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="layout-inner-left-sidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-format-float-left"></i>
                                        <span class="hide-menu"> Inner Left Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="layout-inner-right-sidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-format-float-right"></i>
                                        <span class="hide-menu"> Inner Right Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="page-layout-fixed-header.html" class="sidebar-link">
                                        <i class="mdi mdi-view-quilt"></i>
                                        <span class="hide-menu"> Fixed Header </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="page-layout-fixed-sidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-view-parallel"></i>
                                        <span class="hide-menu"> Fixed Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="page-layout-fixed-header-sidebar.html" class="sidebar-link">
                                        <i class="mdi mdi-view-column"></i>
                                        <span class="hide-menu"> Fixed Header &amp; Sidebar </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="page-layout-boxed-layout.html" class="sidebar-link">
                                        <i class="mdi mdi-view-carousel"></i>
                                        <span class="hide-menu"> Box Layout </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <div class="devider"></div>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-clipboard-text"></i>
                                <span class="hide-menu">Forms</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-collage"></i>
                                        <span class="hide-menu">Form Elements</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="form-inputs.html" class="sidebar-link">
                                                <i class="mdi mdi-priority-low"></i>
                                                <span class="hide-menu"> Forms Input</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-input-groups.html" class="sidebar-link">
                                                <i class="mdi mdi-rounded-corner"></i>
                                                <span class="hide-menu"> Input Groups</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-input-grid.html" class="sidebar-link">
                                                <i class="mdi mdi-select-all"></i>
                                                <span class="hide-menu"> Input Grid</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-checkbox-radio.html" class="sidebar-link">
                                                <i class="mdi mdi-shape-plus"></i>
                                                <span class="hide-menu"> Checkboxes &amp; Radios</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-bootstrap-touchspin.html" class="sidebar-link">
                                                <i class="mdi mdi-switch"></i>
                                                <span class="hide-menu"> Bootstrap Touchspin</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-bootstrap-switch.html" class="sidebar-link">
                                                <i class="mdi mdi-toggle-switch-off"></i>
                                                <span class="hide-menu"> Bootstrap Switch</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-select2.html" class="sidebar-link">
                                                <i class="mdi mdi-relative-scale"></i>
                                                <span class="hide-menu"> Select2</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-dual-listbox.html" class="sidebar-link">
                                                <i class="mdi mdi-tab-unselected"></i>
                                                <span class="hide-menu"> Dual Listbox</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-xditable.html" class="sidebar-link">
                                                <i class="mdi mdi-loop"></i>
                                                <span class="hide-menu"> X-editable</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-receipt"></i>
                                        <span class="hide-menu">Form Layouts</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="form-basic.html" class="sidebar-link">
                                                <i class="mdi mdi-vector-difference-ba"></i>
                                                <span class="hide-menu"> Basic Forms</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-horizontal.html" class="sidebar-link">
                                                <i class="mdi mdi-file-document-box"></i>
                                                <span class="hide-menu"> Form Horizontal</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-actions.html" class="sidebar-link">
                                                <i class="mdi mdi-code-greater-than"></i>
                                                <span class="hide-menu"> Form Actions</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-row-separator.html" class="sidebar-link">
                                                <i class="mdi mdi-code-equal"></i>
                                                <span class="hide-menu"> Row Separator</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-bordered.html" class="sidebar-link">
                                                <i class="mdi mdi-flip-to-front"></i>
                                                <span class="hide-menu"> Form Bordered</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-striped-row.html" class="sidebar-link">
                                                <i class="mdi mdi-content-duplicate"></i>
                                                <span class="hide-menu"> Striped Rows</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-detail.html" class="sidebar-link">
                                                <i class="mdi mdi-cards-outline"></i>
                                                <span class="hide-menu"> Form Detail</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-material.html" class="sidebar-link">
                                                <i class="mdi mdi-content-duplicate"></i>
                                                <span class="hide-menu"> Form Material</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-float-input.html" class="sidebar-link">
                                                <i class="mdi mdi-logout"></i>
                                                <span class="hide-menu"> Form Float Input</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-code-equal"></i>
                                        <span class="hide-menu">Form Addons</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="form-paginator.html" class="sidebar-link">
                                                <i class="mdi mdi-export"></i>
                                                <span class="hide-menu"> Paginator</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-img-cropper.html" class="sidebar-link">
                                                <i class="mdi mdi-crop"></i>
                                                <span class="hide-menu"> Image Cropper</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-dropzone.html" class="sidebar-link">
                                                <i class="mdi mdi-crosshairs-gps"></i>
                                                <span class="hide-menu"> Dropzone</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-mask.html" class="sidebar-link">
                                                <i class="mdi mdi-box-shadow"></i>
                                                <span class="hide-menu"> Form Mask</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-typeahead.html" class="sidebar-link">
                                                <i class="mdi mdi-cards-variant"></i>
                                                <span class="hide-menu"> Form Typehead</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-alert-box"></i>
                                        <span class="hide-menu">Form Validation</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="form-bootstrap-validation.html" class="sidebar-link">
                                                <i class="mdi mdi-credit-card-scan"></i>
                                                <span class="hide-menu"> Bootstrap Validation</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-custom-validation.html" class="sidebar-link">
                                                <i class="mdi mdi-credit-card-plus"></i>
                                                <span class="hide-menu"> Custom Validation</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-pencil-box-outline"></i>
                                        <span class="hide-menu">Form Pickers</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="form-picker-colorpicker.html" class="sidebar-link">
                                                <i class="mdi mdi-calendar-plus"></i>
                                                <span class="hide-menu"> Form Colorpicker</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-picker-datetimepicker.html" class="sidebar-link">
                                                <i class="mdi mdi-calendar-clock"></i>
                                                <span class="hide-menu"> Form Datetimepicker</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-picker-bootstrap-rangepicker.html" class="sidebar-link">
                                                <i class="mdi mdi-calendar-range"></i>
                                                <span class="hide-menu"> Form Bootstrap Rangepicker</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-picker-bootstrap-datepicker.html" class="sidebar-link">
                                                <i class="mdi mdi-calendar-check"></i>
                                                <span class="hide-menu"> Form Bootstrap Datepicker</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-picker-material-datepicker.html" class="sidebar-link">
                                                <i class="mdi mdi-calendar-text"></i>
                                                <span class="hide-menu"> Form Material Datepicker</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-dns"></i>
                                        <span class="hide-menu">Form Editor</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="form-editor-ckeditor.html" class="sidebar-link">
                                                <i class="mdi mdi-drawing"></i>
                                                <span class="hide-menu">Ck Editor</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-editor-quill.html" class="sidebar-link">
                                                <i class="mdi mdi-drupal"></i>
                                                <span class="hide-menu">Quill Editor</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-editor-summernote.html" class="sidebar-link">
                                                <i class="mdi mdi-brightness-6"></i>
                                                <span class="hide-menu">Summernote Editor</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="form-editor-tinymce.html" class="sidebar-link">
                                                <i class="mdi mdi-bowling"></i>
                                                <span class="hide-menu">Tinymce Edtor</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-wizard.html" class="sidebar-link">
                                        <i class="mdi mdi-cube-send"></i>
                                        <span class="hide-menu">Form Wizard</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-repeater.html" class="sidebar-link">
                                        <i class="mdi mdi-creation"></i>
                                        <span class="hide-menu">Form Repeater</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-table"></i>
                                <span class="hide-menu">Tables</span>
                                <span class="badge badge-danger text-white badge-pill ml-auto mr-3 font-medium px-2 py-1">11</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-border-none"></i>
                                        <span class="hide-menu">Bootstrap Tables</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="table-basic.html" class="sidebar-link">
                                                <i class="mdi mdi-border-all"></i>
                                                <span class="hide-menu">Basic Table </span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="table-dark-basic.html" class="sidebar-link">
                                                <i class="mdi mdi-border-left"></i>
                                                <span class="hide-menu">Dark Basic Table </span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="table-sizing.html" class="sidebar-link">
                                                <i class="mdi mdi-border-outside"></i>
                                                <span class="hide-menu">Sizing Table </span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="table-layout-coloured.html" class="sidebar-link">
                                                <i class="mdi mdi-border-bottom"></i>
                                                <span class="hide-menu">Coloured Table Layout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-border-inside"></i>
                                        <span class="hide-menu">Datatables</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="table-datatable-basic.html" class="sidebar-link">
                                                <i class="mdi mdi-border-vertical"></i>
                                                <span class="hide-menu"> Basic Initialisation</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="table-datatable-api.html" class="sidebar-link">
                                                <i class="mdi mdi-blur-linear"></i>
                                                <span class="hide-menu"> API</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="table-datatable-advanced.html" class="sidebar-link">
                                                <i class="mdi mdi-border-style"></i>
                                                <span class="hide-menu"> Advanced Initialisation</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-bootstrap.html" class="sidebar-link">
                                        <i class="mdi mdi-border-horizontal"></i>
                                        <span class="hide-menu">Table Bootstrap</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-jsgrid.html" class="sidebar-link">
                                        <i class="mdi mdi-border-top"></i>
                                        <span class="hide-menu">Table Jsgrid</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-responsive.html" class="sidebar-link">
                                        <i class="mdi mdi-border-style"></i>
                                        <span class="hide-menu">Table Responsive</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-footable.html" class="sidebar-link">
                                        <i class="mdi mdi-tab-unselected"></i>
                                        <span class="hide-menu">Table Footable</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-chart-bar"></i>
                                <span class="hide-menu">Charts</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="chart-morris.html" class="sidebar-link">
                                        <i class="mdi mdi-image-filter-tilt-shift"></i>
                                        <span class="hide-menu">Morris Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-chart-js.html" class="sidebar-link">
                                        <i class="mdi mdi-svg"></i>
                                        <span class="hide-menu">Chartjs</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-sparkline.html" class="sidebar-link">
                                        <i class="mdi mdi-chart-histogram"></i>
                                        <span class="hide-menu">Sparkline Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-chartist.html" class="sidebar-link">
                                        <i class="mdi mdi-blur"></i>
                                        <span class="hide-menu">Chartist Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-chemical-weapon"></i>
                                        <span class="hide-menu">C3 Charts</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="chart-c3-axis.html" class="sidebar-link">
                                                <i class="mdi mdi-arrange-bring-to-front"></i>
                                                <span class="hide-menu">Axis Chart</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="chart-c3-bar.html" class="sidebar-link">
                                                <i class="mdi mdi-arrange-send-to-back"></i>
                                                <span class="hide-menu">Bar Chart</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="chart-c3-data.html" class="sidebar-link">
                                                <i class="mdi mdi-backup-restore"></i>
                                                <span class="hide-menu">Data Chart</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="chart-c3-line.html" class="sidebar-link">
                                                <i class="mdi mdi-backburger"></i>
                                                <span class="hide-menu">Line Chart</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-chart-areaspline"></i>
                                        <span class="hide-menu">Echarts</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level">
                                        <li class="sidebar-item">
                                            <a href="chart-echart-basic.html" class="sidebar-link">
                                                <i class="mdi mdi-chart-line"></i>
                                                <span class="hide-menu">Basic Charts</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="chart-echart-bar.html" class="sidebar-link">
                                                <i class="mdi mdi-chart-scatterplot-hexbin"></i>
                                                <span class="hide-menu">Bar Chart</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="chart-echart-pie-doughnut.html" class="sidebar-link">
                                                <i class="mdi mdi-chart-pie"></i>
                                                <span class="hide-menu">Pie &amp; Doughnut Chart</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <div class="devider"></div>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-credit-card-multiple"></i>
                                <span class="hide-menu">Cards</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="ui-cards.html" class="sidebar-link">
                                        <i class="mdi mdi-layers"></i>
                                        <span class="hide-menu"> Basic Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-card-customs.html" class="sidebar-link">
                                        <i class="mdi mdi-credit-card-scan"></i>
                                        <span class="hide-menu">Custom Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-card-weather.html" class="sidebar-link">
                                        <i class="mdi mdi-weather-fog"></i>
                                        <span class="hide-menu">Weather Cards</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-card-draggable.html" class="sidebar-link">
                                        <i class="mdi mdi-bandcamp"></i>
                                        <span class="hide-menu">Draggable Cards</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-credit-card-multiple"></i>
                                <span class="hide-menu">Components</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="component-sweetalert.html" class="sidebar-link">
                                        <i class="mdi mdi-layers"></i>
                                        <span class="hide-menu"> Sweet Alert</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-nestable.html" class="sidebar-link">
                                        <i class="mdi mdi-credit-card-scan"></i>
                                        <span class="hide-menu">Nestable</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-noui-slider.html" class="sidebar-link">
                                        <i class="mdi mdi-weather-fog"></i>
                                        <span class="hide-menu">Noui slider</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-rating.html" class="sidebar-link">
                                        <i class="mdi mdi-bandcamp"></i>
                                        <span class="hide-menu">Rating</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="component-toastr.html" class="sidebar-link">
                                        <i class="mdi mdi-poll"></i>
                                        <span class="hide-menu">Toastr</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <div class="devider"></div>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-settings"></i>
                                <span class="hide-menu">Widgets </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="widgets-apps.html" class="sidebar-link">
                                        <i class="mdi mdi-comment-processing-outline"></i>
                                        <span class="hide-menu"> Apps Widgets </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-data.html" class="sidebar-link">
                                        <i class="mdi mdi-calendar"></i>
                                        <span class="hide-menu"> Data Widgets </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-charts.html" class="sidebar-link">
                                        <i class="mdi mdi-bulletin-board"></i>
                                        <span class="hide-menu"> Charts Widgets</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-face"></i>
                                <span class="hide-menu">Icons</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="icon-material.html" class="sidebar-link">
                                        <i class="mdi mdi-emoticon"></i>
                                        <span class="hide-menu"> Material Icons </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="icon-fontawesome.html" class="sidebar-link">
                                        <i class="mdi mdi-emoticon-cool"></i>
                                        <span class="hide-menu"> Fontawesome Icons</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="icon-themify.html" class="sidebar-link">
                                        <i class="mdi mdi-chart-bubble"></i>
                                        <span class="hide-menu"> Themify Icons</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="icon-weather.html" class="sidebar-link">
                                        <i class="mdi mdi-weather-cloudy"></i>
                                        <span class="hide-menu"> Weather Icons</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="icon-simple-lineicon.html" class="sidebar-link">
                                        <i class="mdi mdi mdi-image-broken-variant"></i>
                                        <span class="hide-menu"> Simple Line icons</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="icon-flag.html" class="sidebar-link">
                                        <i class="mdi mdi-flag-triangle"></i>
                                        <span class="hide-menu"> Flag Icons</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="map-google.html" aria-expanded="false">
                                <i class="mdi mdi-google-maps"></i>
                                <span class="hide-menu">Google Map</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="map-vector.html" aria-expanded="false">
                                <i class="mdi mdi-map-marker-radius"></i>
                                <span class="hide-menu">Vector Map</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-account-multiple"></i>
                                <span class="hide-menu">Users</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="ui-user-card.html" class="sidebar-link">
                                        <i class="mdi mdi-account-box"></i>
                                        <span class="hide-menu"> User Card </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-profile.html" class="sidebar-link">
                                        <i class="mdi mdi-account-network"></i>
                                        <span class="hide-menu"> User Profile</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-user-contacts.html" class="sidebar-link">
                                        <i class="mdi mdi-account-star-variant"></i>
                                        <span class="hide-menu"> User Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-ungroup"></i>
                                <span class="hide-menu">Invoice</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="pages-invoice.html" class="sidebar-link">
                                        <i class="mdi mdi-vector-triangle"></i>
                                        <span class="hide-menu"> Invoice Layout </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="pages-invoice-list.html" class="sidebar-link">
                                        <i class="mdi mdi-vector-rectangle"></i>
                                        <span class="hide-menu"> Invoice List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-apple-safari"></i>
                                <span class="hide-menu">Timeline</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="timeline-center.html" class="sidebar-link">
                                        <i class="mdi mdi-clock-fast"></i>
                                        <span class="hide-menu"> Center Timeline </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="timeline-horizontal.html" class="sidebar-link">
                                        <i class="mdi mdi-clock-end"></i>
                                        <span class="hide-menu"> Horizontal Timeline</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="timeline-left.html" class="sidebar-link">
                                        <i class="mdi mdi-clock-in"></i>
                                        <span class="hide-menu"> Left Timeline</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="timeline-right.html" class="sidebar-link">
                                        <i class="mdi mdi-clock-start"></i>
                                        <span class="hide-menu"> Right Timeline</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-calendar.html" aria-expanded="false">
                                <i class="mdi mdi-calendar-check"></i>
                                <span class="hide-menu">Calendar</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-notification-clear-all"></i>
                                <span class="hide-menu">Multi level dd</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="mdi mdi-octagram"></i>
                                        <span class="hide-menu"> item 1.1</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="mdi mdi-octagram"></i>
                                        <span class="hide-menu"> item 1.2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-playlist-plus"></i>
                                        <span class="hide-menu">Menu 1.3</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="mdi mdi-octagram"></i>
                                                <span class="hide-menu"> item 1.3.1</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="mdi mdi-octagram"></i>
                                                <span class="hide-menu"> item 1.3.2</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="mdi mdi-octagram"></i>
                                                <span class="hide-menu"> item 1.3.3</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <i class="mdi mdi-octagram"></i>
                                                <span class="hide-menu"> item 1.3.4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="mdi mdi-playlist-check"></i>
                                        <span class="hide-menu"> item 1.4</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <div class="devider"></div>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url()?>appsources/docs/documentation.html" aria-expanded="false">
                                <i class="mdi mdi-adjust text-danger"></i>
                                <span class="hide-menu">Documentation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="authentication-login1.html" aria-expanded="false">
                                <i class="mdi mdi-adjust text-info"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-faq.html" aria-expanded="false">
                                <i class="mdi mdi-adjust text-success"></i>
                                <span class="hide-menu">FAQs</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb border-bottom">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                        <h5 class="font-medium text-uppercase mb-0">Dashboard</h5>
                    </div>
                    <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                        <button class="btn btn-danger text-white float-right ml-3 d-none d-md-block">Buy Ample Admin</button>
                        <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                            <ol class="breadcrumb mb-0 justify-content-end p-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="page-content container-fluid">
                <!-- ============================================================== -->
                <!-- Card Group  -->
                <!-- ============================================================== -->
                <div class="card-group">
                    <div class="card p-2 p-lg-3">
                        <div class="p-lg-3 p-2">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-circle btn-danger text-white btn-lg" href="javascript:void(0)">
                                <i class="ti-clipboard"></i>
                            </button>
                                <div class="ml-4" style="width: 38%;">
                                    <h4 class="font-light">Total Projects</h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="display-7 mb-0">23</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-2 p-lg-3">
                        <div class="p-lg-3 p-2">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-circle btn-cyan text-white btn-lg" href="javascript:void(0)">
                                <i class="ti-wallet"></i>
                            </button>
                                <div class="ml-4" style="width: 38%;">
                                    <h4 class="font-light">Total Earnings</h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="display-7 mb-0">76</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-2 p-lg-3">
                        <div class="p-lg-3 p-2">
                            <div class="d-flex align-items-center">
                                <button class="btn btn-circle btn-warning text-white btn-lg" href="javascript:void(0)">
                                <i class="fas fa-dollar-sign"></i>
                            </button>
                                <div class="ml-4" style="width: 38%;">
                                    <h4 class="font-light">Total Earnings</h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="display-7 mb-0">83</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Products yearly sales, Weather Cards Section  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Products Yearly Sales</h5>
                                <ul class="list-inline dl mb-0 float-right">
                                    <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Mac</li>
                                    <li class="list-inline-item text-danger"><i class="fa fa-circle"></i> Windows</li>
                                </ul>
                                <div id="ct-visits" style="height: 320px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="bg-danger">
                                <div id="ct-daily-sales" style="height: 304px"></div>
                            </div>
                            <div class="p-4">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="font-medium">Week Sales</h2>
                                        <h5 class="card-subtitle mb-0">Ios app - 160 sales</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="btn btn-circle btn-info text-white btn-lg" href="javascript:void(0)">
                                            <i class="ti-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Manage Table & Walet Cards Section  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs manage-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#users" role="tab">
                                        <span class="hidden-sm-up">
                                            <h4><i class="ti-user"></i></h4>
                                        </span>
                                        <span class="d-none d-md-block">Select Users</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#permissions" role="tab">
                                        <span class="hidden-sm-up">
                                            <h4><i class="ti-lock"></i></h4>
                                        </span>
                                        <span class="d-none d-md-block">Set Permissions</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                        <span class="hidden-sm-up">
                                            <h4><i class="ti-receipt"></i></h4>
                                        </span>
                                        <span class="d-none d-md-block">Message Users</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#save" role="tab">
                                        <span class="hidden-sm-up">
                                            <h4><i class="ti-check-box"></i></h4>
                                        </span>
                                        <span class="d-none d-md-block">Save and Finish</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="users" role="tabpanel">
                                    <div class="row py-4 px-5 no-gutters mt-3">
                                        <div class="col-sm-12 col-md-6">
                                            <h3 class="font-light">Select Users to Manage</h3>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <ul class="list-inline dl mb-0 float-left float-md-right">
                                                <li class="list-inline-item text-info mr-3">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-success text-white" href="javascript:void(0)">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Add User</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item text-danger">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                            <i class="ti-pencil-alt"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Edit</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light">
                                        <div class="table-responsive border-top manage-table px-4 py-3">
                                            <table class="table no-wrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0">Name</th>
                                                        <th scope="col" class="border-0">Position</th>
                                                        <th scope="col" class="border-0">Joined</th>
                                                        <th scope="col" class="border-0">Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advanced-table active">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c1" checked="">
                                                                <label class="custom-control-label" for="c1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/1.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c2">
                                                                <label class="custom-control-label" for="c2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/2.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin </td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c3">
                                                                <label class="custom-control-label" for="c3">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/3.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c4">
                                                                <label class="custom-control-label" for="c4">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/4.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-4 mt-2">
                                        <h3 class="font-light">1 members selected</h3>
                                        <div class="ml-auto">
                                            <button class="btn btn-danger text-white btn-rounded py-2 px-3">Next <i class="ti-arrow-right ml-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="permissions" role="tabpanel">
                                    <div class="row py-4 px-5 no-gutters mt-3">
                                        <div class="col-sm-12 col-md-6">
                                            <h3 class="font-light">Set Users Permission</h3>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <ul class="list-inline dl mb-0 float-left float-md-right">
                                                <li class="list-inline-item text-info mr-3">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-success text-white" href="javascript:void(0)">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Add User</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item text-danger">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                            <i class="ti-pencil-alt"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Edit</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light">
                                        <div class="table-responsive border-top manage-table px-4 py-3">
                                            <table class="table no-wrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0">Name</th>
                                                        <th scope="col" class="border-0">Position</th>
                                                        <th scope="col" class="border-0">Joined</th>
                                                        <th scope="col" class="border-0">Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c5">
                                                                <label class="custom-control-label" for="c5">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/1.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table active">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c6" checked="">
                                                                <label class="custom-control-label" for="c6">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/2.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin </td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c7">
                                                                <label class="custom-control-label" for="c7">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/3.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c8">
                                                                <label class="custom-control-label" for="c8">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/4.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-4 mt-2">
                                        <h3 class="font-light">1 members selected</h3>
                                        <div class="ml-auto">
                                            <button class="btn btn-danger text-white btn-rounded py-2 px-3">Next <i class="ti-arrow-right ml-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages" role="tabpanel">
                                    <div class="row py-4 px-5 no-gutters mt-3">
                                        <div class="col-sm-12 col-md-6">
                                            <h3 class="font-light">Manage Users</h3>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <ul class="list-inline dl mb-0 float-left float-md-right">
                                                <li class="list-inline-item text-info mr-3">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-success text-white" href="javascript:void(0)">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Add User</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item text-danger">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                            <i class="ti-pencil-alt"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Edit</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light">
                                        <div class="table-responsive border-top manage-table px-4 py-3">
                                            <table class="table no-wrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0">Name</th>
                                                        <th scope="col" class="border-0">Position</th>
                                                        <th scope="col" class="border-0">Joined</th>
                                                        <th scope="col" class="border-0">Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c9">
                                                                <label class="custom-control-label" for="c9">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/1.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c10">
                                                                <label class="custom-control-label" for="c10">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/2.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin </td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table active">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c11" checked="">
                                                                <label class="custom-control-label" for="c11">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/3.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c12">
                                                                <label class="custom-control-label" for="c12">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/4.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-4 mt-2">
                                        <h3 class="font-light">1 members selected</h3>
                                        <div class="ml-auto">
                                            <button class="btn btn-danger text-white btn-rounded py-2 px-3">Next <i class="ti-arrow-right ml-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="save" role="tabpanel">
                                    <div class="row py-4 px-5 no-gutters mt-3">
                                        <div class="col-sm-12 col-md-6">
                                            <h3 class="font-light">Save and finish</h3>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <ul class="list-inline dl mb-0 float-left float-md-right">
                                                <li class="list-inline-item text-info mr-3">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-success text-white" href="javascript:void(0)">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Add User</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item text-danger">
                                                    <a href="#">
                                                        <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                            <i class="ti-pencil-alt"></i>
                                                        </button>
                                                        <span class="ml-2 font-normal text-dark">Edit</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bg-light">
                                        <div class="table-responsive border-top manage-table px-4 py-3">
                                            <table class="table no-wrap">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0"></th>
                                                        <th scope="col" class="border-0">Name</th>
                                                        <th scope="col" class="border-0">Position</th>
                                                        <th scope="col" class="border-0">Joined</th>
                                                        <th scope="col" class="border-0">Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c13">
                                                                <label class="custom-control-label" for="c13">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/1.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Andrew Simons</td>
                                                        <td>Modulator</td>
                                                        <td>6 May 2016</td>
                                                        <td>Gujrat, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c14">
                                                                <label class="custom-control-label" for="c14">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/2.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Hanna Gover</td>
                                                        <td>Admin </td>
                                                        <td>13 Jan 2005</td>
                                                        <td>Texas, United states</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c15">
                                                                <label class="custom-control-label" for="c15">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/3.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Nirav</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2001</td>
                                                        <td>Bhavnagar, India</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="6" class="sml-pd"></td>
                                                    </tr>
                                                    <tr class="advanced-table active">
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="c16" checked="">
                                                                <label class="custom-control-label" for="c16">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img src="<?=base_url()?>appsources/assets/images/users/4.jpg" class="rounded-circle" width="30">
                                                        </td>
                                                        <td>Joshi Sunil</td>
                                                        <td>Admin</td>
                                                        <td>21 Mar 2004</td>
                                                        <td>Gujarat, India</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-4 mt-2">
                                        <h3 class="font-light">1 members selected</h3>
                                        <div class="ml-auto">
                                            <button class="btn btn-danger text-white btn-rounded py-2 px-3">Next <i class="ti-arrow-right ml-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex mt-3">
                                    <button class="btn btn-circle btn-success text-white btn-lg" href="javascript:void(0)">
                                        <i class="ti-plus"></i>
                                    </button>
                                    <div class="ml-3">
                                        <h2 class="display-6">$456.90</h2>
                                        <h5 class="font-light">Your wallet Balance</h5>
                                    </div>
                                </div>
                            </div>
                            <div id="morris-area-chart2" style="height:108px;"></div>
                            <ul class="list-style-none">
                                <li class="py-2 px-4 border-top">
                                    <div class="d-flex align-items-center">
                                        <i class="ti-wallet font-24 text-info"></i>
                                        <a href="#" class="ml-3 font-18 font-light">Withdrow money</a>
                                    </div>
                                </li>
                                <li class="py-2 px-4 border-top">
                                    <div class="d-flex align-items-center">
                                        <i class="ti-bag font-24 text-info"></i>
                                        <a href="#" class="ml-3 font-18 font-light">Shop Now</a>
                                    </div>
                                </li>
                                <li class="py-2 px-4 border-top">
                                    <div class="d-flex align-items-center">
                                        <i class="ti-briefcase font-24 text-info"></i>
                                        <a href="#" class="ml-3 font-18 font-light">Add funds</a>
                                    </div>
                                </li>
                                <li class="py-2 px-4 border-top">
                                    <div class="d-flex align-items-center">
                                        <i class="ti-wallet font-24 text-info"></i>
                                        <a href="#" class="ml-3 font-18 font-light">Shop Now</a>
                                    </div>
                                </li>
                                <li class="py-2 px-4 border-top">
                                    <div class="d-flex align-items-center">
                                        <i class="ti-wallet font-24 text-info"></i>
                                        <a href="#" class="ml-3 font-18 font-light">Withdrow money</a>
                                    </div>
                                </li>
                                <li class="py-2 px-4 border-top">
                                    <div class="d-flex align-items-center">
                                        <i class="ti-bag font-24 text-info"></i>
                                        <a href="#" class="ml-3 font-18 font-light">Shop Now</a>
                                    </div>
                                </li>
                                <li class="py-2 px-4 border-top">
                                    <div class="d-flex align-items-center">
                                        <i class="ti-wallet font-24 text-info"></i>
                                        <a href="#" class="ml-3 font-18 font-light">Withdrow money</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- User Table & Profile Cards Section  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase mb-0">Manage Users</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap user-table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Occupation</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Email</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Category</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="pl-4">1</td>
                                            <td>
                                                <h5 class="font-medium mb-0">Daniel Kristeen</h5>
                                                <span class="text-muted">Texas, Unitedd states</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">Visual Designer</span><br>
                                                <span class="text-muted">Past : teacher</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">daniel@website.com</span><br>
                                                <span class="text-muted">999 - 444 - 555</span>
                                            </td>
                                            <td>
                                                <select class="form-control category-select" id="exampleFormControlSelect1">
                                          <option>Modulator</option>
                                          <option>Admin</option>
                                          <option>User</option>
                                          <option>Subscriber</option>
                                        </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="ti-trash"></i> </button>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="ti-pencil-alt"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-4">2</td>
                                            <td>
                                                <h5 class="font-medium mb-0">Emma Smith</h5>
                                                <span class="text-muted">Texas, Unitedd states</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">Visual Designer</span><br>
                                                <span class="text-muted">Past : teacher</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">daniel@website.com</span><br>
                                                <span class="text-muted">999 - 444 - 555</span>
                                            </td>
                                            <td>
                                                <select class="form-control category-select" id="exampleFormControlSelect1">
                                          <option>Modulator</option>
                                          <option>Admin</option>
                                          <option>User</option>
                                          <option>Subscriber</option>
                                        </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="ti-trash"></i> </button>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="ti-pencil-alt"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-4">3</td>
                                            <td>
                                                <h5 class="font-medium mb-0">Olivia Johnson</h5>
                                                <span class="text-muted">Texas, Unitedd states</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">Visual Designer</span><br>
                                                <span class="text-muted">Past : teacher</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">daniel@website.com</span><br>
                                                <span class="text-muted">999 - 444 - 555</span>
                                            </td>
                                            <td>
                                                <select class="form-control category-select" id="exampleFormControlSelect1">
                                          <option>Modulator</option>
                                          <option>Admin</option>
                                          <option>User</option>
                                          <option>Subscriber</option>
                                        </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="ti-trash"></i> </button>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="ti-pencil-alt"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-4">4</td>
                                            <td>
                                                <h5 class="font-medium mb-0">Isabella Williams</h5>
                                                <span class="text-muted">Texas, Unitedd states</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">Visual Designer</span><br>
                                                <span class="text-muted">Past : teacher</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">daniel@website.com</span><br>
                                                <span class="text-muted">999 - 444 - 555</span>
                                            </td>
                                            <td>
                                                <select class="form-control category-select" id="exampleFormControlSelect1">
                                          <option>Modulator</option>
                                          <option>Admin</option>
                                          <option>User</option>
                                          <option>Subscriber</option>
                                        </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="ti-trash"></i> </button>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="ti-pencil-alt"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-4">5</td>
                                            <td>
                                                <h5 class="font-medium mb-0">Sophia Jones</h5>
                                                <span class="text-muted">Texas, Unitedd states</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">Visual Designer</span><br>
                                                <span class="text-muted">Past : teacher</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">daniel@website.com</span><br>
                                                <span class="text-muted">999 - 444 - 555</span>
                                            </td>
                                            <td>
                                                <select class="form-control category-select" id="exampleFormControlSelect1">
                                          <option>Modulator</option>
                                          <option>Admin</option>
                                          <option>User</option>
                                          <option>Subscriber</option>
                                        </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="ti-trash"></i> </button>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="ti-pencil-alt"></i> </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-4">6</td>
                                            <td>
                                                <h5 class="font-medium mb-0">Charlotte Brown</h5>
                                                <span class="text-muted">Texas, Unitedd states</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">Visual Designer</span><br>
                                                <span class="text-muted">Past : teacher</span>
                                            </td>
                                            <td>
                                                <span class="text-muted">daniel@website.com</span><br>
                                                <span class="text-muted">999 - 444 - 555</span>
                                            </td>
                                            <td>
                                                <select class="form-control category-select" id="exampleFormControlSelect1">
                                          <option>Modulator</option>
                                          <option>Admin</option>
                                          <option>User</option>
                                          <option>Subscriber</option>
                                        </select>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle"><i class="ti-trash"></i> </button>
                                                <button type="button" class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2"><i class="ti-pencil-alt"></i> </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Todo list & Calender application  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="d-flex align-items-center px-3 py-4 border-bottom">
                                <div>
                                    <h5 class="text-dark font-light mb-0">This Months Task</h5>
                                    <h4 class="mb-0 text-uppercase font-medium">To-do List</h4>
                                </div>
                                <div class="ml-auto">
                                    <button class="btn btn-danger text-white btn-rounded" data-toggle="modal" data-target="#addtask">Add Task</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="todo-widget">
                                    <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                                        <li class="list-group-item todo-item pt-0" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label todo-label" for="customCheck">
                                                <span class="todo-desc">Schedule meeting with</span>
                                            </label>
                                            </div>
                                            <ul class="list-style-none assignedto mt-2">
                                                <li class="assignee"><img class="assignee-img" src="<?=base_url()?>appsources/assets/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                                <li class="assignee"><img class="assignee-img" src="<?=base_url()?>appsources/assets/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                                <li class="assignee"><img class="assignee-img" src="<?=base_url()?>appsources/assets/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                <li class="assignee"><img class="assignee-img" src="<?=base_url()?>appsources/assets/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label todo-label" for="customCheck1">
                                                <span class="todo-desc">Give Purchase report to</span><span class="badge badge-pill badge-danger font-medium text-white ml-1">Today </span>
                                            </label>
                                            </div>
                                            <ul class="list-style-none assignedto mt-2">
                                                <li class="assignee"><img class="assignee-img" src="<?=base_url()?>appsources/assets/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                                <li class="assignee"><img class="assignee-img" src="<?=base_url()?>appsources/assets/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label todo-label" for="customCheck3">
                                                <span class="todo-desc">Book flight for holiday</span> 
                                            </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2017</div>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label todo-label" for="customCheck4">
                                                <span class="todo-desc">Forward all tasks</span> <span class="badge badge-pill badge-warning ml-1 text-white font-medium">2 weeks</span>
                                            </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2017</div>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label todo-label" for="customCheck5">
                                                <span class="todo-desc">Recieve shipment</span> 
                                            </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2017</div>
                                        </li>
                                        <li class="list-group-item todo-item pb-0" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                <label class="custom-control-label todo-label" for="customCheck6">
                                                <span class="todo-desc">Important tasks</span><span class="badge badge-pill badge-success font-medium text-white ml-1">2 weeks </span>
                                            </label>
                                            </div>
                                            <ul class="list-style-none assignedto mt-2">
                                                <li class="assignee"><img class="assignee-img" src="<?=base_url()?>appsources/assets/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                                <li class="assignee"><img class="assignee-img" src="<?=base_url()?>appsources/assets/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="addtask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="text_name">Name</label>
                                                    <input type="text" class="form-control" id="text_name" placeholder="Enter your Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="txt_email">Email Address</label>
                                                    <input type="email" class="form-control" id="txt_email" placeholder="Enter Email">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="card">
                            <div class="calender-sidebar">
                                <div id="calendar"></div>
                            </div>
                            <!-- BEGIN MODAL -->
                            <div class="modal none-border" id="my-event">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"><strong>Add Event</strong></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Social Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="<?=base_url()?>appsources/assets/images/big/img1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center mb-3">
                                    <span class="text-muted"><i class="ti-calendar"></i> May 16</span>
                                    <div class="ml-3">
                                        <a href="javascript:void(0)" class="link"><i class="ti-heart"></i> 30</a>
                                    </div>
                                </div>
                                <h3 class="mt-3">Top 20 Models are on the ramp</h3>
                                <p class="mt-3 font-light">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="btn btn-success btn-rounded waves-effect waves-light mt-2 text-white">Read more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="<?=base_url()?>appsources/assets/images/big/img2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center mb-3">
                                    <span class="text-muted"><i class="ti-calendar"></i> Aug 10</span>
                                    <div class="ml-3">
                                        <a href="javascript:void(0)" class="link"><i class="ti-heart"></i> 32</a>
                                    </div>
                                </div>
                                <h3 class="mt-3">Top 20 Models are on the ramp</h3>
                                <p class="mt-3 font-light">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="btn btn-success btn-rounded waves-effect waves-light mt-2 text-white">Read more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="<?=base_url()?>appsources/assets/images/big/img3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center mb-3">
                                    <span class="text-muted"><i class="ti-calendar"></i> Jun 16</span>
                                    <div class="ml-3">
                                        <a href="javascript:void(0)" class="link"><i class="ti-heart"></i> 40</a>
                                    </div>
                                </div>
                                <h3 class="mt-3">Top 20 Models are on the ramp</h3>
                                <p class="mt-3 font-light">Titudin venenatis ipsum ac feugiat. Vestibulum ullamcorper quam.</p>
                                <button class="btn btn-success btn-rounded waves-effect waves-light mt-2 text-white">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Chat App, Timeline & Chat Listing  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <h5 class="card-title text-uppercase p-3 bg-info text-white mb-0">
                                Chat Listing
                            </h5>
                            <div class="p-3">
                                <ul class="list-style-none chat-list">
                                    <li class="mb-3">
                                        <a href="javascript:void(0)">
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>appsources/assets/images/users/1.jpg" class="rounded-circle" width="40">
                                                <div class="ml-3">
                                                    <h5 class="mb-0 text-dark">Varun Dhavan</h5>
                                                    <small class="text-success">Online</small>
                                                </div>
                                                <div class="ml-auto chat-icon">
                                                    <button type="button" class="btn btn-success btn-circle btn-circle text-white">
                                    <i class="fas fa-phone"></i> 
                                  </button>
                                                    <button type="button" class="btn btn-info btn-circle btn-circle ml-2">
                                    <i class="far fa-comments"></i> 
                                  </button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="javascript:void(0)">
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>appsources/assets/images/users/2.jpg" class="rounded-circle" width="40">
                                                <div class="ml-3">
                                                    <h5 class="mb-0 text-dark">Akshay Kumar</h5>
                                                    <small class="text-muted">Offline</small>
                                                </div>
                                                <div class="ml-auto chat-icon">
                                                    <button type="button" class="btn btn-success btn-circle btn-circle text-white">
                                    <i class="fas fa-phone"></i> 
                                  </button>
                                                    <button type="button" class="btn btn-info btn-circle btn-circle ml-2">
                                    <i class="far fa-comments"></i> 
                                  </button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="javascript:void(0)">
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>appsources/assets/images/users/3.jpg" class="rounded-circle" width="40">
                                                <div class="ml-3">
                                                    <h5 class="mb-0 text-dark">Shraddha Kapoor</h5>
                                                    <small class="text-success">Online</small>
                                                </div>
                                                <div class="ml-auto chat-icon">
                                                    <button type="button" class="btn btn-success btn-circle btn-circle text-white">
                                    <i class="fas fa-phone"></i> 
                                  </button>
                                                    <button type="button" class="btn btn-info btn-circle btn-circle ml-2">
                                    <i class="far fa-comments"></i> 
                                  </button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="javascript:void(0)">
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>appsources/assets/images/users/4.jpg" class="rounded-circle" width="40">
                                                <div class="ml-3">
                                                    <h5 class="mb-0 text-dark">Madhuri Dixit</h5>
                                                    <small class="text-danger">Busy</small>
                                                </div>
                                                <div class="ml-auto chat-icon">
                                                    <button type="button" class="btn btn-success btn-circle btn-circle text-white">
                                    <i class="fas fa-phone"></i> 
                                  </button>
                                                    <button type="button" class="btn btn-info btn-circle btn-circle ml-2">
                                    <i class="far fa-comments"></i> 
                                  </button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="javascript:void(0)">
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>appsources/assets/images/users/5.jpg" class="rounded-circle" width="40">
                                                <div class="ml-3">
                                                    <h5 class="mb-0 text-dark">Shaina Nehwal</h5>
                                                    <small class="text-muted">Offline</small>
                                                </div>
                                                <div class="ml-auto chat-icon">
                                                    <button type="button" class="btn btn-success btn-circle btn-circle text-white">
                                    <i class="fas fa-phone"></i> 
                                  </button>
                                                    <button type="button" class="btn btn-info btn-circle btn-circle ml-2">
                                    <i class="far fa-comments"></i> 
                                  </button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="javascript:void(0)">
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>appsources/assets/images/users/6.jpg" class="rounded-circle" width="40">
                                                <div class="ml-3">
                                                    <h5 class="mb-0 text-dark">Varun Dhavan</h5>
                                                    <small class="text-success">Online</small>
                                                </div>
                                                <div class="ml-auto chat-icon">
                                                    <button type="button" class="btn btn-success btn-circle btn-circle text-white">
                                    <i class="fas fa-phone"></i> 
                                  </button>
                                                    <button type="button" class="btn btn-info btn-circle btn-circle ml-2">
                                    <i class="far fa-comments"></i> 
                                  </button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="javascript:void(0)">
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>appsources/assets/images/users/2.jpg" class="rounded-circle" width="40">
                                                <div class="ml-3">
                                                    <h5 class="mb-0 text-dark">Akshay Kumar</h5>
                                                    <small class="text-muted">Offline</small>
                                                </div>
                                                <div class="ml-auto chat-icon">
                                                    <button type="button" class="btn btn-success btn-circle btn-circle text-white">
                                    <i class="fas fa-phone"></i> 
                                  </button>
                                                    <button type="button" class="btn btn-info btn-circle btn-circle ml-2">
                                    <i class="far fa-comments"></i> 
                                  </button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>appsources/assets/images/users/3.jpg" class="rounded-circle" width="40">
                                                <div class="ml-3">
                                                    <h5 class="mb-0 text-dark">Shraddha Kapoor</h5>
                                                    <small class="text-success">Online</small>
                                                </div>
                                                <div class="ml-auto chat-icon">
                                                    <button type="button" class="btn btn-success btn-circle btn-circle text-white">
                                    <i class="fas fa-phone"></i> 
                                  </button>
                                                    <button type="button" class="btn btn-info btn-circle btn-circle ml-2">
                                    <i class="far fa-comments"></i> 
                                  </button>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <h5 class="card-title p-3 bg-info text-white text-uppercase mb-0">
                                User Activity
                            </h5>
                            <div class="card-body scrollable" style="height: 598px;">
                                <div class="steamline mt-0">
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <button type="button" class="btn btn-success btn-circle btn-circle text-white">
                                  <i class="ti-user"></i> 
                                </button>
                                        </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link text-dark">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <p class="mt-1 font-light">Contrary to popular belief</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left">
                                            <button type="button" class="btn btn-info btn-circle btn-circle text-white">
                                  <i class="fas fa-image"></i> 
                                </button>
                                        </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link text-dark">Hritik Roshan</a> <span class="sl-date">5 minutes ago</span>
                                                <p class="mt-1 font-light">Lorem Ipsum is simply dummy</p>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <img src="<?=base_url()?>appsources/assets/images/big/img1.jpg" class="img-fluid">
                                                </div>
                                                <div class="col">
                                                    <img src="<?=base_url()?>appsources/assets/images/big/img2.jpg" class="img-fluid">
                                                </div>
                                                <div class="col">
                                                    <img src="<?=base_url()?>appsources/assets/images/big/img3.jpg" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="<?=base_url()?>appsources/assets/images/users/1.jpg" alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link text-dark">Gohn Doe</a> <span class="sl-date">5 minutes ago</span>
                                                <p class="mt-1 font-light">The standard chunk of ipsum</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="<?=base_url()?>appsources/assets/images/users/2.jpg" alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link text-dark">Varun Dhavan</a> <span class="sl-date">5 minutes ago</span>
                                                <p class="font-light">Contrary to popular belief hi there..!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="<?=base_url()?>appsources/assets/images/users/5.jpg" alt="user" class="rounded-circle" /> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)" class="link text-dark">Tiger Sroff</a> <span class="sl-date">5 minutes ago</span>
                                                <p class="mt-1 font-light">The generated lorem ipsum</p>
                                                <button class="btn btn-outline-success btn-rounded">Approve</button>
                                                <button class="btn btn-outline-danger btn-rounded ml-2">Refuse</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <h5 class="card-title text-uppercase p-3 bg-info text-white mb-0">
                                Recent Chat
                            </h5>
                            <div class="card-body">
                                <div class="chat-box scrollable" style="height:434px;">
                                    <!--chat Row -->
                                    <ul class="chat-list">
                                        <!--chat Row -->
                                        <li class="chat-item">
                                            <div class="chat-img"><img src="<?=base_url()?>appsources/assets/images/users/1.jpg" alt="user"></div>
                                            <div class="chat-content">
                                                <div class="box bg-light-success">
                                                    <h5 class="font-medium">Sonu Nigam</h5>
                                                    <p class="font-light mb-0">Hi, All!</p>
                                                    <div class="chat-time">10.56 am</div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="odd chat-item">
                                            <div class="chat-content">
                                                <div class="box bg-light-success">
                                                    <h5 class="font-medium">Genelia</h5>
                                                    <p class="font-light mb-0">Hi, How are you Sonu? ur next concert?</p>
                                                    <div class="chat-time">11.00 am</div>
                                                </div>
                                            </div>
                                            <div class="chat-img"><img src="<?=base_url()?>appsources/assets/images/users/2.jpg" alt="user"></div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="chat-item">
                                            <div class="chat-img"><img src="<?=base_url()?>appsources/assets/images/users/3.jpg" alt="user"></div>
                                            <div class="chat-content">
                                                <div class="box bg-light-success">
                                                    <h5 class="font-medium">Ritesh</h5>
                                                    <p class="font-light mb-0">Hi, Sonu and Genelia,</p>
                                                    <div class="chat-time">11.02 am</div>
                                                </div>
                                            </div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="odd chat-item">
                                            <div class="chat-content">
                                                <div class="box bg-light-success">
                                                    <h5 class="font-medium">Genelia</h5>
                                                    <p class="font-light mb-0">Hi, How are you Sonu? ur next concert?</p>
                                                    <div class="chat-time">11.04 am</div>
                                                </div>
                                            </div>
                                            <div class="chat-img"><img src="<?=base_url()?>appsources/assets/images/users/2.jpg" alt="user"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="input-field mt-0 mb-0">
                                            <textarea id="textarea1" placeholder="Type and enter" class="form-control border-0"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <a class="btn-circle btn-lg btn-success float-right text-white" href="javascript:void(0)"><i class="fas fa-paper-plane"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Ample admin. Designed and Developed by
                <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
        <a href="javascript:void(0)" class="service-panel-toggle">
            <i class="fa fa-spin fa-cog"></i>
        </a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                        <i class="mdi mdi-wrench font-20"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false">
                        <i class="mdi mdi-message-reply font-20"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                        <i class="mdi mdi-star-circle font-20"></i>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="p-3 border-bottom">
                        <!-- Sidebar -->
                        <h5 class="font-medium mb-2 mt-2">Layout Settings</h5>

                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                            <label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                            <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                            <label class="custom-control-label" for="header-position">Fixed Header</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                            <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                        </div>
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium mb-2 mt-2">Logo Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-medium mb-2 mt-2">Navbar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="mailbox list-style-none mt-3">
                        <li>
                            <div class="message-center chat-scroll">
                                <a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
                                    <span class="user-img">
                                        <img src="<?=base_url()?>appsources/assets/images/users/1.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status online pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                    <span class="user-img">
                                        <img src="<?=base_url()?>appsources/assets/images/users/2.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status busy pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sonu Nigam</h5>
                                        <span class="mail-desc">I've sung a song! See you at</span>
                                        <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                    <span class="user-img">
                                        <img src="<?=base_url()?>appsources/assets/images/users/3.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status away pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Arijit Sinh</h5>
                                        <span class="mail-desc">I am a singer!</span>
                                        <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                    <span class="user-img">
                                        <img src="<?=base_url()?>appsources/assets/images/users/4.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Nirav Joshi</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                    <span class="user-img">
                                        <img src="<?=base_url()?>appsources/assets/images/users/5.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sunil Joshi</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                    <span class="user-img">
                                        <img src="<?=base_url()?>appsources/assets/images/users/6.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Akshay Kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                    <span class="user-img">
                                        <img src="<?=base_url()?>appsources/assets/images/users/7.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                    <span class="user-img">
                                        <img src="<?=base_url()?>appsources/assets/images/users/8.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Varun Dhavan</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h6 class="mt-3 mb-3">Activity Timeline</h6>
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left bg-success">
                                <i class="ti-user"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today
                                    <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="<?=base_url()?>appsources/assets/images/users/2.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="<?=base_url()?>appsources/assets/images/users/1.jpg"> </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-primary">
                                <i class="ti-user"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today
                                    <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="<?=base_url()?>appsources/assets/images/users/4.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="<?=base_url()?>appsources/assets/images/users/6.jpg"> </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?=base_url()?>appsources/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url()?>appsources/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=base_url()?>appsources/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="<?=base_url()?>appsources/dist/js/app.min.js"></script>
    <script src="<?=base_url()?>appsources/dist/js/app.init.js"></script>
    <script src="<?=base_url()?>appsources/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?=base_url()?>appsources/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?=base_url()?>appsources/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?=base_url()?>appsources/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url()?>appsources/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url()?>appsources/dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="<?=base_url()?>appsources/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?=base_url()?>appsources/dist/js/pages/chartist/chartist-plugin-tooltip.js"></script>
    <script src="<?=base_url()?>appsources/assets/extra-libs/c3/d3.min.js"></script>
    <script src="<?=base_url()?>appsources/assets/extra-libs/c3/c3.min.js"></script>
    <script src="<?=base_url()?>appsources/assets/libs/raphael/raphael.min.js"></script>
    <script src="<?=base_url()?>appsources/assets/libs/morris.js/morris.min.js"></script>
    <script src="<?=base_url()?>appsources/dist/js/pages/dashboards/dashboard1.js"></script>
    <script src="<?=base_url()?>appsources/assets/libs/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>appsources/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?=base_url()?>appsources/dist/js/pages/calendar/cal-init.js"></script>
    <script>
        $('#calendar').fullCalendar('option', 'height', 650);

    </script>

</html>
