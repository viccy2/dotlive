<!doctype html>
<html>

<head>
    <title>DotLive</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="DotLive from DotEightPlus">
    <meta name="keywords"
        content="Get affordable, cheap and beautiful hostels for living, meetups and bootcamps from the comfort of your homes.">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="theme-color" content="#f9f9ff">
    <link rel="manifest" href="manifest.json">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/dotsvg.svg">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!-- ? Preloader Start
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
   Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="./"><img src="assets/img/logo/top.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="./">Home</a></li>
                                                <li><a href="./apartments">Apartments</a></li>
                                                <li><a href="./roomie">Find Roomie</a></li>
                                                <li><a href="faq/./">FAQs</a></li>
                                                <li><a target="_blank" href="https://doteightplus.com/contact">Contact
                                                        us</a></li>
                                                <!-- Button -->
                                                <?php
                                                if (isset($_SESSION['Username'])) {
                                                    
                                                    $we = $_SESSION['Username'];
                                                    
                                                    $sql = "SELECT * FROM `user` WHERE `email` = '$we'";
                                                    $res = query($sql);

                                                    $row = mysqli_fetch_array($res);
                                                ?>
                                                <li><a style="color: #ff0000; text-transform: capitalize;"
                                                        href="dashboard/./">Welcome <?php echo $row['name']; ?></a>
                                                </li>
                                                <?php
                                            } else {
                                                ?>
                                                <li class="button-header margin-left "><a href="./signup"
                                                        class="btn">Sign up</a></li>
                                                <li class="button-header"><a href="./signin" class="btn btn3">Sign
                                                        in</a></li>
                                                <?php
                                            }
                                            ?>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>