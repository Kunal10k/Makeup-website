<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Makeup Landing</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <link href="https://db.onlinewebfonts.com/c/9a7e574c3eda05d71d03345d3f9e268e?family=Futura+LT+W01+Light+Oblique" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="assets/img/favicon.jpg">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />


    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">


    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/responsive.css">



</head>

<body>

    <div class="custom-cursor"></div>


    <button id="backToTop">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <a href="https://wa.me/919999999999" class="whatsapp-float" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>


    <!-- <div class="mobile-bottom-bar">
  
        <a href="https://wa.me/919999999999" class="float-icon whatsapp" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
        </a>

     
        <a href="contact.html" class="float-icon contact">
            <i class="fa-solid fa-envelope"></i>
        </a>

    </div> -->


    <header>

        <!-- HEADER START -->

        <nav class="navbar navbar-expand-lg sticky-top custom-navbar">

            <div class="container">

                <!-- LOGO -->
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.jpg" alt="" class="logo">
                </a>


                <li class="nav-item d-md-none d-block">

                    <button class="book-btn ms-2"
                        data-bs-toggle="modal"
                        data-bs-target="#bookingModal">

                        <i class="fa-solid fa-calendar-check"></i>
                        Book Now

                    </button>

                </li>


                <!-- MOBILE TOGGLE BUTTON -->

                <button class="navbar-toggler border-0 shadow-none"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#mobileMenu">

                    <i class="fa-solid fa-bars"></i>

                </button>


                <!-- DESKTOP MENU -->

                <div class="collapse navbar-collapse justify-content-end">

                    <ul class="navbar-nav gap-3 align-items-lg-center">

                        <!-- HOME DISABLED -->
                        <li class="nav-item">
                            <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'index') echo 'active'; ?>"
                                href="index">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'about') echo 'active'; ?>"
                                href="about">
                                About
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'service') echo 'active'; ?>"
                                href="service">
                                Services
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'portfolio') echo 'active'; ?>"
                                href="portfolio">
                                Portfolios
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'contact') echo 'active'; ?>"
                                href="contact">
                                Contact
                            </a>
                        </li>


                        <!-- BOOK NOW BUTTON -->

                        <li class="nav-item">

                            <button class="book-btn ms-2"
                                data-bs-toggle="modal"
                                data-bs-target="#bookingModal">

                                <i class="fa-solid fa-calendar-check"></i>
                                Book Now

                            </button>

                        </li>

                    </ul>

                </div>

            </div>

        </nav>


        <!-- OFFCANVAS MOBILE MENU -->

        <div class="offcanvas offcanvas-start"
            tabindex="-1"
            id="mobileMenu">

            <div class="offcanvas-header">

                <h5 class="offcanvas-title">Menu</h5>

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="offcanvas"></button>

            </div>


            <div class="offcanvas-body">

                <ul class="navbar-nav">

                    <!-- HOME DISABLED -->
                    <li class="nav-item">
                        <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'index') echo 'active'; ?>"
                            href="index">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'about') echo 'active'; ?>"
                            href="about">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'service') echo 'active'; ?>"
                            href="service">
                            Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'portfolio') echo 'active'; ?>"
                            href="portfolio">
                            Portfolios
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'contact') echo 'active'; ?>"
                            href="contact">
                            Contact
                        </a>
                    </li>



                </ul>

            </div>

        </div>

    </header>

    <div class="header_gap">

    </div>