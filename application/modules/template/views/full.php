<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Kostlab admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Kostlab admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>RA Hajjah Hasmah Noor</title>
    <link rel = "icon" href =
    "<?php echo base_url() ?>front/images/logotk.png"
        type = "image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url()?>assets/images/ico/apple-icon-120.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/pages/dashboard-analytics.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/pages/card-analytics.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/plugins/tour/tour.min.css">
    <!-- END: Page CSS-->
    <?php if(isset($css)){$this->load->view($css);} ?>

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0"><img src="<?php echo base_url() ?>front/images/logotkdash.png"/> </h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <?php if(isset($sidebar)){$this->load->view($sidebar);} ?>
    </div>


    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">

        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile">
                        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                            <ul class="nav navbar-nav">
                                <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                            </ul>
                            <ul class="nav navbar-nav bookmark-icons">
                                <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                                <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                                <!--     i.ficon.feather.icon-menu-->
                            </ul>
                            <ul class="nav navbar-nav">
                                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                                    <div class="bookmark-input search-input">
                                        <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                        <input class="form-control input" type="text" placeholder="Explore RA Hajjah Hasmah Noor..." tabindex="0" data-search="starter-list" />
                                        <ul class="search-list"></ul>
                                    </div>
                                    <!-- select.bookmark-select-->
                                    <!--   option 1-Column-->
                                    <!--   option 2-Column-->
                                    <!--   option Static Layout-->
                                </li>
                            </ul>
                        </div>
                        <ul class="nav navbar-nav float-right">
                                <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                            </li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                            <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                                <div class="search-input">
                                    <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="input" type="text" placeholder="Explore Kostlab..." tabindex="-1" data-search="starter-list" />
                                    <div class="search-input-close"><i class="feather icon-x"></i></div>
                                    <ul class="search-list"></ul>
                                </div>
                            </li>

                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">Admin</span><span class="user-status">Available</span></div><span><img class="round" src="<?= base_url() ?>assets/images/portrait/small/avatar-s-11.png" alt="avatar" height="40" width="40" /></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= base_url() ?>login/logout"><i class="feather icon-power"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: Header-->

        <div class="content-wrapper">
            <div class="content-body">
              <?php if(isset($content)){$this->load->view($content);} ?>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://kostlab.id" target="_blank">KostLab,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Made with<i class="feather icon-heart pink"></i> Bandung</span>
            <!-- <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button> -->
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url()?>assets/vendors/js/vendors.min.js"></script>
    <script src="<?= base_url()?>assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url()?>assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="<?= base_url()?>assets/vendors/js/extensions/tether.min.js"></script>
    <script src="<?= base_url()?>assets/vendors/js/extensions/shepherd.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url()?>assets/vendors/js/ui/prism.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url()?>assets/js/core/app-menu.js"></script>
    <script src="<?= base_url()?>assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url()?>assets/js/scripts/pages/dashboard.js"></script>  <!-- Uncomment ini untuk start tour-->
    <?php if(isset($js)){$this->load->view($js);} ?>
    <script type="text/javascript">
    $(function(){
        var current = window.location.href;
        $('#sidebar li a').each(function(){
            var $this = $(this);
            // if the current path is like this link, make it active
            if($this.attr('href')== current){
              // alert($this[1]);
              if($this.parents('.sub-item').length==1){
                $this.parents('.sub-item').addClass('active');
              }else{
                $this.parents('.nav-item').addClass('active');
              }
            }
        })
    })
    </script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
