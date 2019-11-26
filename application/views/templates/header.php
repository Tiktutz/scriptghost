<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <title>
            Black Dashboard by Creative Tim
        </title>

        <!--     Links do Template do Black Dashboard by Creative Tim - Cley Anjos     -->
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Nucleo Icons -->
        <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="assets/demo/demo.css" rel="stylesheet" />

        <!--     Links do OwnCarousel2 - Cley Anjos     -->

        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

        <!--     Links do Animate.CSS - Cley Anjos     -->
        <link href="assets/animatecss/animate.min.css" rel="stylesheet" type="text/css"/>

        <style>
            .item{
                height: 400px;
            }

            .item2{
                height: 200px;
            }

            #navSlidePrev{
                opacity: 0.5;
            }

            #navSlidePrev:hover{
                opacity: 1;
            }

            #navSlideProx{
                opacity: 0.5;
            }

            #navSlideProx:hover{
                opacity: 1;
            }

            /********************* Shopping Demo-6 **********************/
            .product-grid6,.product-grid6 .product-image6{overflow:hidden}
            .product-grid6{font-family:'Open Sans',sans-serif;text-align:center;position:relative;transition:all .5s ease 0s}
            .product-grid6:hover{box-shadow:0px 0px 30px rgba(225,78,202,1)}
            .product-grid6 .product-image6 a{display:block}
            .product-grid6 .product-image6 img{width:100%;transition:all .5s ease 0s}
            .product-grid6:hover .product-image6 img{transform:scale(1.1)}
            .product-grid6 .product-content{padding:12px 12px 15px;transition:all .5s ease 0s}
            .product-grid6:hover .product-content{opacity:0}
            .product-grid6 .title{font-size:20px;font-weight:600;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
            .product-grid6 .title a{color:#000}
            .product-grid6 .title a:hover{color:#2e86de}
            .product-grid6 .price{font-size:18px;font-weight:600;color:#2e86de}
            .product-grid6 .price span{color:#999;font-size:15px;font-weight:400;text-decoration:line-through;margin-left:7px;display:inline-block}
            .product-grid6 .social{background-color:#fff;width:100%;padding:0;margin:0;list-style:none;opacity:0;transform:translateX(-50%);position:absolute;bottom:-50%;left:50%;z-index:1;transition:all .5s ease 0s}
            .product-grid6:hover .social{opacity:1;bottom:20px}
            .product-grid6 .social li{display:inline-block}
            .product-grid6 .social li a{color:#909090;font-size:16px;line-height:45px;text-align:center;height:45px;width:45px;margin:0 7px;border:1px solid #909090;border-radius:50px;display:block;position:relative;transition:all .3s ease-in-out}
            .product-grid6 .social li a:hover{color:#fff;background-color:#2e86de;width:80px}
            .product-grid6 .social li a:after,.product-grid6 .social li a:before{content:attr(data-tip);color:#fff;background-color:#2e86de;font-size:12px;letter-spacing:1px;line-height:20px;padding:1px 5px;border-radius:5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
            .product-grid6 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-20px;z-index:-1}
            .product-grid6 .social li a:hover:after,.product-grid6 .social li a:hover:before{opacity:1}
            @media only screen and (max-width:990px){.product-grid6{margin-bottom:30px}
            }

        </style>

    </head>

    <body class="">
        <div class="wrapper">
            <div class="sidebar">


                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="javascript:void(0)" class="simple-text logo-mini">
                            CT
                        </a>
                        <a href="javascript:void(0)" class="simple-text logo-normal">
                            Creative Tim
                        </a>
                    </div>
                    <ul class="nav">
                        <li class="active ">
                            <a href="./dashboard.html">
                                <i class="tim-icons icon-chart-pie-36"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="./icons.html">
                                <i class="tim-icons icon-atom"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                        <li>
                            <a href="./map.html">
                                <i class="tim-icons icon-pin"></i>
                                <p>Maps</p>
                            </a>
                        </li>
                        <li>
                            <a href="./notifications.html">
                                <i class="tim-icons icon-bell-55"></i>
                                <p>Notifications</p>
                            </a>
                        </li>
                        <li>
                            <a href="./user.html">
                                <i class="tim-icons icon-single-02"></i>
                                <p>User Profile</p>
                            </a>
                        </li>
                        <li>
                            <a href="./tables.html">
                                <i class="tim-icons icon-puzzle-10"></i>
                                <p>Table List</p>
                            </a>
                        </li>
                        <li>
                            <a href="./typography.html">
                                <i class="tim-icons icon-align-center"></i>
                                <p>Typography</p>
                            </a>
                        </li>
                        <li>
                            <a href="./rtl.html">
                                <i class="tim-icons icon-world"></i>
                                <p>RTL Support</p>
                            </a>
                        </li>
                        <li class="active-pro">
                            <a href="./upgrade.html">
                                <i class="tim-icons icon-spaceship"></i>
                                <p>Upgrade to PRO</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent position-fixed">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-toggle d-inline">
                                <button type="button" class="navbar-toggler">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                            <a class="navbar-brand" href="javascript:void(0)">TIK-TUTZ</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav ml-auto">
                                <li class="search-bar input-group">
                                    <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split" ></i>
                                        <span class="d-lg-none d-md-block">Search</span>
                                    </button>
                                </li>
                                <li class="dropdown nav-item">
                                    <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                        <div class="notification d-none d-lg-block d-xl-block"></div>
                                        <i class="tim-icons icon-sound-wave"></i>
                                        <p class="d-lg-none">
                                            Notifications
                                        </p>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                                        <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to your email</a></li>
                                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a></li>
                                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a></li>
                                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a></li>
                                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown nav-item">
                                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                        <div class="photo">
                                            <img src="assets/img/anime3.png" alt="Profile Photo">
                                        </div>
                                        <b class="caret d-none d-lg-block d-xl-block"></b>
                                        <p class="d-lg-none">
                                            Log out
                                        </p>
                                    </a>
                                    <ul class="dropdown-menu dropdown-navbar">
                                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li>
                                    </ul>
                                </li>
                                <li class="separator d-lg-none"></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="tim-icons icon-simple-remove"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Navbar -->
