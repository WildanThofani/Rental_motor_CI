<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Rental Motor Putut</title>

    <!--=== Bootstrap CSS ===-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <!--=== Slicknav CSS ===-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/slicknav.min.css">
    <!--=== Magnific Popup CSS ===-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/magnific-popup.css">
    <!--=== Owl Carousel CSS ===-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/owl.carousel.min.css">
    <!--=== Gijgo CSS ===-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/gijgo.css">
    <!--=== FontAwesome CSS ===-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.css">
    <!--=== Theme Reset CSS ===-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/reset.css">
    <!--=== Main Style CSS ===-->
    <link rel="stylesheet" href="<?= base_url() ?>style.css">
    <!--=== Responsive CSS ===-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="<?= base_url() ?>assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> 802/2, Mirpur, Dhaka
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +1 800 345 678
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index.html" class="logo">
                            <img src="<?= base_url() ?>assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="#">Home</a>

                                </li>
                                <li><a href="about.html">Motor</a></li>
                                <li><a href="services.html">services</a></li>
                                <li><a href="#">Contact</a>
                                </li>
                                <li><a href="contact.html">About</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== Slider Area Start ==-->
    <section id="slider-area">
        <!--== slide Item One ==-->
        <div class="single-slide-item overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="book-a-car">
                            <form action="index.html">
                                <!--== Pick Up Location ==-->
                                <div class="pickup-location book-item">
                                    <h4>PICK-UP LOCATION:</h4>
                                    <select class="custom-select">
                                      <option selected>Select</option>
                                      <option value="1">Dhaka</option>
                                      <option value="2">Comilla</option>
                                      <option value="3">Barishal</option>
                                      <option value="3">Rangpur</option>
                                    </select>
                                </div>
                                <!--== Pick Up Location ==-->

                                <!--== Pick Up Date ==-->
                                <div class="pick-up-date book-item">
                                    <h4>PICK-UP DATE:</h4>
                                    <input id="startDate" placeholder="Pick Up Date" />

                                    <div class="return-car">
                                        <h4>Return DATE:</h4>
                                        <input id="endDate" placeholder="Return Date" />
                                    </div>
                                </div>
                                <!--== Pick Up Location ==-->

                                <!--== Car Choose ==-->
                                <div class="choose-car-type book-item">
                                    <h4>CHOOSE CAR TYPE:</h4>
                                    <select class="custom-select">
                                      <option selected>Select</option>
                                      <option value="1">BMW</option>
                                      <option value="2">Audi</option>
                                      <option value="3">Lexus</option>
                                    </select>
                                </div>
                                <!--== Car Choose ==-->

                                <div class="book-button text-center">
                                    <button class="book-now-btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-7 text-right">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="slider-right-text">
                                    <h1>RENTAL MOTOR PUTUT</h1>
                                    <p>FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== slide Item One ==-->
    </section>
    <!--== Slider Area End ==-->

    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>Lorem simply dummy is a texted of the printing costed and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi aliquid debitis optio praesentium, voluptate repellat accusantium deserunt eius.</p>
                                <div class="about-btn">
                                    <a href="#">Book a Car</a>
                                    <a href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-video">
                        <iframe src="https://player.vimeo.com/video/121982328?title=0&byline=0&portrait=0"></iframe>
                    </div>
                </div>
                <!-- About Video End -->
            </div>
        </div>
    </section>
    <!--== About Us Area End ==-->
    <section class="content">
    <div class="container-fluid">
        <?php
        $this->load->view($konten);
        ?>
    </div>
</section>
    <!--== Partner Area Start ==-->
  
    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="<?= base_url() ?>assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="<?= base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="<?= base_url() ?>assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="<?= base_url() ?>assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="<?= base_url() ?>assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="<?= base_url() ?>assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="<?= base_url() ?>assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="<?= base_url() ?>assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="<?= base_url() ?>assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="<?= base_url() ?>assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="<?= base_url() ?>assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="<?= base_url() ?>assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>