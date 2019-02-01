<!DOCTYPE html>
<?php include('lang.php'); ?>
<html lang="<?php echo $lang['option-lang-folder'] ?>">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $lang['title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta property="og:type"               content="article" />
    <!-- <meta property="og:title"              content="<?php echo $lang['title'] ?>" /> -->
    <meta property="og:description"        content="How much does culture influence creative thinking?" />
    <meta property="og:image"              content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />

    <link rel="shortcut icon" href="img/high-logo.ico" type="image/x-icon">

    <!-- <script src="main.js"></script> -->

    <!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
		<!-- <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.min.css">  -->
		<link rel="stylesheet" href="/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.min.css">


		<!-- Theme CSS -->
		<link rel="stylesheet" href="/css/theme.css">
		<link rel="stylesheet" href="/css/theme-elements.css">
		<!-- <link rel="stylesheet" href="/css/theme-blog.css"> -->
		<!-- <link rel="stylesheet" href="/css/theme-shop.css"> -->
        <link rel="stylesheet" href="/css/Service.css">

		<!-- Current Page CSS -->
		<!-- <link rel="stylesheet" href="/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="/vendor/rs-plugin/css/layers.css"> -->
		<link rel="stylesheet" href="/vendor/rs-plugin/css/navigation.css">

		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="/css/skins/skin-corporate-8.css">

		<!-- Head Libs -->
        <script src="vendor/modernizr/modernizr.min.js"></script>
        <link rel="stylesheet" href="/css/css.css?v=1.1"/>
        <link rel="stylesheet" href="/iconservices/services.css">

        <script src='https://www.google.com/recaptcha/api.js?hl=<?php echo $lang['option-lang-folder'] ?>'></script>
</head>

<body>
    <div class="body">
        <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 164, 'stickySetTop': '-171px', 'stickyChangeLogo': false}">
            <div class="header-body border-0">
                <div class="header-top header-top-default border-bottom-0 bg-color-primary">
                    <div class="container">
                        <div class="header-row py-2">
                            <div class="header-column justify-content-start">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <!-- <ul class="nav nav-pills text-uppercase text-2">
                                            <li class="nav-item nav-item-anim-icon">
                                                <a class="nav-link pl-0 text-light opacity-7" href="/about-us.html"><i
                                                        class="fas fa-angle-right"></i> About Us</a>
                                            </li>
                                            <li class="nav-item nav-item-anim-icon">
                                                <a class="nav-link text-light opacity-7 pr-0" href="/contact-us.html"><i
                                                        class="fas fa-angle-right"></i> Contact Us</a>
                                            </li>
                                        </ul> -->
                                    </nav>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean social-icons-icon-light">
                                        <li class="social-icons-facebook"><a href="https://www.facebook.com/HighMKT" rel="noopener" target="_blank"
                                                title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="https://twitter.com/@highmktstudio" rel="noopener" target="_blank"
                                                title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="https://www.linkedin.com/in/pdi-companies-b303149" rel="noopener" target="_blank"
                                                title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-container container">
                    <div class="header-row py-3">
                        <div class="header-column justify-content-start w-50 order-md-1 d-none d-md-flex">
                            <div class="header-row">
                                <ul class="header-extra-info">
                                    <li class="m-0">
                                        <div class="feature-box feature-box-style-2 align-items-center">
                                            <div class="feature-box-icon">
                                                <i class="far fa-clock text-7 p-relative"></i>
                                            </div>
                                            <div class="feature-box-info">
                                                <p class="pb-0 font-weight-semibold line-height-5 text-2"><?php echo $lang['daystextshort'][0]; ?>:
                                                    09:00 - 18:00<br><?php echo $lang['daystextshort'][1];?></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-column justify-content-start justify-content-md-center order-1 order-md-2">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="/">
                                        <img alt="HighLogo" width="150"  src="img/high-logo.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end w-50 order-2 order-md-3">
                            <div class="header-row">
                                <ul class="header-extra-info">
                                    <li class="m-0">
                                        <div class="feature-box reverse-allres feature-box-style-2 align-items-center">
                                            <div class="feature-box-icon">
                                                <i class="fab fa-whatsapp text-7 p-relative" style="top: -2px;"></i>
                                            </div>
                                            <div class="feature-box-info">
                                                <p class="pb-0 font-weight-semibold line-height-5 text-2">MEX:+52 1 322 178 2993 <br>USA:1 (855) 221 1748 </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav-bar header-nav-bar-top-border bg-light">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-menu "> <!--justify-content-end-->
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="header-nav p-0">
                                        <div class="header-nav header-nav-line header-nav-divisor header-nav-spaced justify-content-lg-center">
                                            
                                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                                <nav class="collapse">
                                                    <ul class="nav nav-pills flex-column flex-lg-row" id="mainNav">
                                                        <li class="dropdown">
                                                            <a class="dropdown-item active" href="/">
                                                            <?php echo $lang['menu-option-index'] ?>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a class="dropdown-item dropdown-toggle" href="/services.php">
                                                            <?php echo $lang['menu-option-services'] ?>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a class="dropdown-item" href="/portfolio.php">
                                                            <?php echo $lang['menu-option-portfolio'] ?>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a class="dropdown-item" href="/contact.php">
                                                            <?php echo $lang['menu-option-contact'] ?>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <!-- <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                                data-target=".header-nav-main nav">
                                                <i class="fas fa-bars"></i>
                                            </button> -->
                                        </div>
                                    </div>
                                    <div class="linklenguage">
                                        <a class="linklenguage" href="?lang=<?php echo $lang['option-lang-set'] ?>"><?php echo $lang['option-lang'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
