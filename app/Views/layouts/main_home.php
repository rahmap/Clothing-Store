<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $this->renderSection('title') ?> || <?= APP_NAME ?></title>
    <meta name="description" content="Jual produk berkualitas">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?= base_url('clothing') ?>/images/icons/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?= base_url('clothing') ?>/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?= base_url('clothing') ?>/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?= base_url('clothing') ?>/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?= base_url('clothing') ?>/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= base_url('clothing') ?>/css/responsive.css">
    <!-- User style -->
    <?= $this->renderSection('outCSS') ?>
    <link rel="stylesheet" href="<?= base_url('clothing') ?>/css/custom.css">  
    <link rel="stylesheet" href="<?= base_url('clothing') ?>/css/color/skin-default.css">

    
    <!-- Modernizr JS -->
    <script src="<?= base_url('clothing') ?>/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper shop">
       
        <!-- Start of header area -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar black-bg clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6">
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <div class="social-search-area text-center">
                                <div class="social-icon socile-icon-style-2">
                                    <ul>
                                        <li><a target="_blank" href="http://instagram.com/motoliciousx.co" title="facebook"><i class="fa fa-instagram"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area">
                <div class="container">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="logo ptb-20"><a href="<?= route_to('home') ?>">
                                        <img src="<?= base_url('clothing') ?>/images/logo/logo.png" alt="main logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-10 d-none d-md-block">
                                <nav id="primary-menu">
                                    <ul class="main-menu">
                                        <li><a href="<?= route_to('home') ?>">Home</a>
                                        </li>
                                        <li><a href="<?= route_to('about') ?>">ABOUT</a></li>
                                        <li><a href="<?= route_to('contact') ?>">CONTACT</a></li>
                                    </ul>
                                </nav>
                            </div>
        
                            <!-- mobile-menu-area start -->
                            <div class="mobile-menu-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <nav id="dropdown">
                                                <ul>
                                                    <li><a href="<?= route_to('home') ?>">Home</a>
                                                    </li>
                                                    <li><a href="<?= route_to('about') ?>">ABOUT</a></li>
                                                    <li><a href="<?= route_to('contact') ?>">CONTACT</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--mobile menu area end-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of header area -->
        
        <!--breadcumb area start -->
          <?= $this->renderSection('breadcrumb') ?>
        <!--breadcumb area end -->
        
        <!--shop main area are start-->
          <?= $this->renderSection('content') ?>
        <!--shop main area are end-->
        
        <!--footer bottom area start-->
        <div class="footer-bottom global-table">
            <div class="global-row">
                <div class="global-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="copyrigth"> Copyright @
                                    <a href="<?= CREATOR ?>"><?= CREATOR_NAME ?></a> All right reserved
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="payment-support text-right">
                                    <li>
                                        <a href="#"><img src="<?= base_url('clothing') ?>/images/icons/pay1.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?= base_url('clothing') ?>/images/icons/pay2.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?= base_url('clothing') ?>/images/icons/pay3.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?= base_url('clothing') ?>/images/icons/pay4.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="<?= base_url('clothing') ?>/images/icons/pay5.png" alt="" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom area end-->
        
    </div> 
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="<?= base_url('clothing') ?>/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Popper js -->
    <script src="<?= base_url('clothing') ?>/js/popper.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="<?= base_url('clothing') ?>/js/bootstrap.min.js"></script>
    <!-- Slider js -->
    <script src="<?= base_url('clothing') ?>/js/slider/jquery.nivo.slider.pack.js"></script>
    <script src="<?= base_url('clothing') ?>/js/slider/nivo-active.js"></script>
    <!-- counterUp-->
    <script src="<?= base_url('clothing') ?>/js/jquery.countdown.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?= base_url('clothing') ?>/js/plugins.js"></script>
    <?= $this->renderSection('outJS') ?>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?= base_url('clothing') ?>/js/main.js"></script>

</body>

</html>