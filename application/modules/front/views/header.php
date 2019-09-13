<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Wonderland - Kid Multipurpose Template</title>
    <!-- Custom Main StyleSheet CSS -->
    <link href="<?php echo base_url() ?>front/css/main.css" rel="stylesheet">
    <!-- Color StyleSheet CSS -->
    <link href="<?php echo base_url() ?>front/css/color.css" rel="stylesheet">
    <!-- Responsive StyleSheet CSS -->
    <link href="<?php echo base_url() ?>front/css/responsive.css" rel="stylesheet">
</head>
<body>
    <!--kode4everyone Wrapper Start-->
    <div class="keo_wrapper">
        <!-- Header Wrap Start -->
        <header>
            <!-- Top Wrap Start -->
            <div class="keo_top_bar full_width">
                <div class="container">
                    <div class="keo_top_ui left">
                        <ul>
                            <li>Jalan RS Paru-paru, Ancol Selatan, Tanjung Priok, Jakarta Utara</li>
                            <li>0878 888888</li>
                        </ul>
                    </div>
                    <div class="keo_login_lement right">
                        <ul>
                            <li class="language">
                                Bahasa
                                <i class="ti-angle-down"></i>
                                <ul class="keo_sub_lang">
                                    <li>English</li>
                                </ul>
                            </li>
                            <li class="login-link">Silahkan <a href="#">Log In</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Top Wrap End -->
            <!-- Navigation Wrap Start -->
            <nav class="keo_nav_outer keo_nav2_style theme_bg full_width">
                <div class="container">
                    <div class="keo_logo text-center left">
                        <a href="<?php echo base_url() ?>front/index">
                            <img src="<?php echo base_url() ?>front/images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="keo_nav text-center left">
                        <ul>
                          <li><a href="<?php echo base_url() ?>front/index">Home</a></li>
                          <li>
                              <a href="javascript:void(0)">Profil <i class="ti-angle-down"></i></a>
                              <ul class="time">
                                  <li><a href="<?php echo base_url() ?>front/about">Sejarah Singkat</a></li>
                                  <li><a href="<?php echo base_url() ?>front/page404">Visi Misi</a></li>
                              </ul>
                          </li>
                          <li>
                              <a href="javascript:void(0)">Media <i class="ti-angle-down"></i></a>
                              <ul class="time">
                                  <li><a href="<?php echo base_url() ?>front/gallery">Galeri</a></li>
                                  <li><a href="<?php echo base_url() ?>front/page404">Video</a></li>
                              </ul>
                          </li>
                            <li>
                                <a href="javascript:void(0)">Akademik <i class="ti-angle-down"></i></a>
                                <ul class="time">
                                    <li><a href="<?php echo base_url() ?>front/classListing">Kelas</a></li>
                                    <li><a href="<?php echo base_url() ?>front/teacherListing">Pegajar</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url() ?>front/newsListing">Berita</a></li>
                            <li><a href="<?php echo base_url() ?>front/eventListing">Acara</a></li>
                            <li><a href="<?php echo base_url() ?>front/contact">Kontak Kami</a></li>
                        </ul>
                    </div>
                    <div class="keo_nav_ui right">
                        <ul class="right">
                            <li class="search search-fld">
                                <i class="ti-search"></i>
                            </li>
                            <!-- <li class="cart">
                                <img class="left" src="images/cart-icon.png" alt="">
                                <div class="cart_des">
                                    <span class="item d-block">3 items</span>
                                    <span class="price">$168.00</span>
                                </div>
                            </li> -->
                        </ul>
                        <div class="search-wrapper-area time">
                            <form class="search-area time">
                                <input type="text" class="white_ph" placeholder="Cari Apa?" />
                                <input type="submit" value="Go" />
                            </form>
                            <span class="keo_search_remove_btn time">
                                <i class="ti-close"></i>
                            </span>
                        </div>
                    </div>
                    <!-- Dl Menu Wrap Start -->
                    <!-- <div class="keo_index2 dl-menuwrapper" id="dl-menu">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li>
                                <a href="#">Home</a>
                                <ul class="dl-submenu">
                                    <li><a href="<?php echo base_url() ?>index">Home 01</a></li>
                                    <li><a href="<?php echo base_url() ?>front/index-02.html">Home 02</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Classes</a>
                                <ul class="dl-submenu">
                                    <li><a href="<?php echo base_url() ?>front/class-listing-grid.html">Class Grid</a></li>
                                    <li><a href="<?php echo base_url() ?>front/class-listing-grid-color.html">Class Grid With Color</a></li>
                                    <li><a href="<?php echo base_url() ?>front/class-listing-grid-sidebar.html">Class Grid With Sidebar</a></li>
                                    <li><a href="<?php echo base_url() ?>front/class-listing-list-sidebar.html">Class List With Sidebar</a></li>
                                    <li><a href="<?php echo base_url() ?>front/class-single.html">Class Single</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">News</a>
                                <ul class="dl-submenu">
                                    <li><a href="<?php echo base_url() ?>newsListing">News Grid</a></li>
                                    <li><a href="<?php echo base_url() ?>newsDetail">News Single</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Event</a>
                                <ul class="dl-submenu">
                                    <li><a href="<?php echo base_url() ?>front/event-listing.html">Event Grid</a></li>
                                    <li><a href="<?php echo base_url() ?>front/event-single.html">Event Single</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul class="dl-submenu">
                                    <li><a href="<?php echo base_url() ?>front/about-us.html">About Us</a></li>
                                    <li><a href="<?php echo base_url() ?>front/services.html">Services</a></li>
                                    <li><a href="<?php echo base_url() ?>front/price-plan.html">Price Plan</a></li>
                                    <li><a href="<?php echo base_url() ?>front/gallery.html">Gallery</a></li>
                                    <li>
                                        <a href="#">Teacher</a>
                                        <ul class="dl-submenu">
                                            <li><a href="<?php echo base_url() ?>front/teacher-grid.html">Tecaher Grid</a></li>
                                            <li><a href="<?php echo base_url() ?>front/teacher-detail.html">Teacher Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url() ?>front/404-page.html">404 Page</a></li>
                                    <li><a href="<?php echo base_url() ?>front/coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url() ?>contact">Contact</a></li>
                        </ul>
                    </div><!-- Dl Menu Wrap End --> -->
                </div>
            </nav>
            <!-- Navigation Wrap End -->
        </header><!-- Header Wrap End -->
