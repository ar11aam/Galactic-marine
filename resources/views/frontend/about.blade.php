<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Start your development with JoeBLog landing page." />
    <link rel="icon" type="image/x-icon" href="frontend/assets/imgs/logo1.png" sizes="16x16">
    <meta name="author" content="Devcrud" />
    <title>Galactic Marine</title>

    <link rel="stylesheet" href="{{ url('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/joeblog.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/style2.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/style1.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/fonts/icomoon/style.css') }}">
    <script src="https://kit.fontawesome.com/63491d034f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>

</head>

<body data-spy="scroll" data-offset="40" id="home">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar-wrap">
        <div class="site-navbar-top">
            <div class="container py-3">
                <script src="https://kit.fontawesome.com/63491d034f.js" crossorigin="anonymous"></script>
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="ml-auto">
                            <a href="mailto:galactic.marine.int@gmail.com" class="p-2 pl-0">
                                <span style="color:white;" class="icon-envelope"></span>
                            </a>
                            <a href="tel:+92 343 7137554" class="p-2 pl-0">
                                <span style="color:white;" class="icon-phone"></span>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=923267326065" class="p-2 pl-0">
                                <i style="color:white;" class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="mr-auto">
                            <a style="color:white;" href="#" class="p-2 pl-0"><span
                                    class="icon-twitter"></span></a>
                            <a style="color:white;" href="https://www.facebook.com/profile.php?id=100090770391131"
                                class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a style="color:white;" href="https://instagram.com/galacticmarineparts?igshid=ZDdkNTZiNTM="
                                class="p-2 pl-0"><span class="icon-instagram"></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-2">
                        <img style="height: 60px;" src="{{ url('frontend/assets/imgs/logo1.png') }}" alt="">
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                        class="site-menu-toggle js-menu-toggle text-white"><span
                                            class="icon-menu h3"></span></a></div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                                    <li class="has-children">
                                        <a href="{{ url('/category') }}" class="nav-link">Category</a>
                                        <ul class="dropdown arrow-top">
                                            <li class="has-children">
                                                <a href="{{ url('/category') }}" class="nav-link">Marine</a>
                                                <ul class="dropdown arrow-right">
                                                    <li><a href="{{ url('/category') }}" class="nav-link">Cummins</a>
                                                    </li>
                                                    <li><a href="{{ url('/yamaha') }}" class="nav-link">Yamaha</a></li>
                                                    <li><a href="{{ url('/mtuf') }}" class="nav-link">MTU</a></li>
                                                    <li><a href="{{ url('/man') }}" class="nav-link">MAN</a></li>
                                                    <li><a href="{{ url('/zf') }}" class="nav-link">ZF</a></li>
                                                    <li><a href="{{ url('/kohler') }}" class="nav-link">Kohler</a>
                                                    </li>
                                                    <li><a href="{{ url('/volvo') }}" class="nav-link">Volvo</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('/railway') }}" class="nav-link">Railway</a></li>
                                            <li><a href="{{ url('/solar') }}" class="nav-link">Solar</a></li>
                                            <li><a href="{{ url('/traffic') }}" class="nav-link">Traffic</a></li>
                                            <li><a href="{{ url('/aviation') }}" class="nav-link">Aviation</a></li>
                                            <hr>
                                            <li><a href="{{ url('/category') }}" class="nav-link">See all items</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/about') }}" class="nav-link active">About us</a></li>
                                    <li><a href="{{ url('/contact') }}" class="nav-link">Contact us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

            </div>

        </div>
        <div style="padding-top: 100px;"
            class="container d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-center" style="font-size: 50px; color: white;">About Us</h1>

        </div>

    </div>

    <div class="hero"
        style="height: 300px; background-image: url({{ url('frontend/assets/imgs/wall.jpg') }}); filter: brightness(50%);">
    </div>
    <br>
    <div class="container">
        <div class="row align-items-center text-center d-flex justify-content-center">
            <div class="col m-5">
                <div class="section-header m-4">
                    <h3>Who we are?</h3>
                </div>
                <p class="text-center" style="margin-bottom: 50px; color: black;"> Our company, "Galactic Marine Parts
                    International," focuses on the buying and selling of various tools, equipment, and supplies.

                    related to the marine industry, as well as to cars, trains, planes, traffic devices, and other
                    transportation-related equipment. Our business deals with a wide range of goods, including safety
                    gear, navigational aids, communication technology, and electronic and electrical engine components.
                    We are producers and distributors who search the globe for premium goods to satisfy the needs of the
                    marine industry. We offer services to a range of clients, including commercial shipping firms, naval
                    fleets, manufacturers of technological devices, and recreational boaters.
                    We make sure that all crew members and boats have the gear they need to operate safely and
                    effectively.
                </p>
            </div>
            <div class="col">
                <img style="height: 300px;" src="{{ url('frontend/assets/imgs/2.jpg') }}" alt="">
            </div>

        </div>
    </div>

    <div class="container mt-5" id="container2">
        <div class="row align-items-center text-center d-flex justify-content-center">
            <div class="col">
                <img style="height: 300px;" src="{{ url('frontend/assets/imgs/1.jpg') }}" alt="">
            </div>
            <div class="col">
                <div class="section-header m-4">
                    <h3>Why us?</h3>
                </div>
                <p class="text-center" style="color: black;">
                    We "Galactic Marine Parts International" are a company that specialises in the purchasing and
                    selling of various tools, equipment,
                    and supplies for the maritime industry as well as for the Automotive, Railways, Aviation, and
                    Traffic Equipments & Devices industries.
                    Our business deals with a wide range of goods, including safety gear, navigational aids,
                    communication technology,
                    and electronic and electrical engine components. We are producers and suppliers who search the globe
                    for premium goods to satisfy the needs of the marine sector.
                    We offer services to a range of clients, including commercial shipping firms, naval fleets,
                    manufacturers of technological devices, and recreational boaters.
                    We make sure that all crew members and boats have the gear they need to operate safely and
                    effectively.</p>
            </div>
        </div>
    </div>



    <hr>
    <div class="container flex-column d-flex text-center justify-content-center align-items-center">
        <div class="txt w-50 p-1 text-center section-header">
            <h3>FBR REGISTERED :</h3>
        </div>
        <div class="img p-3 d-flex text-center justify-content-center align-items-center">
            <img style="max-width: 100%;height: auto;" class="img-fluid text-center"
                src="{{ url('frontend/assets/imgs/company_certs/fbr.png') }}" alt="">
        </div>
    </div>

    <div class="container flex-column d-flex text-center justify-content-center align-items-center">
        <div class="txt w-50 p-1 text-center section-header">
            <h3>Certified by :</h3>
        </div>
        <div class="img w-50 p-3 d-flex text-center justify-content-center align-items-center">
            <img style="height: 500px;" src="{{ url('frontend/assets/imgs/company_certs/security.png') }}"
                alt="">
        </div>
    </div>

    <footer class="text-center text-lg-start text-white" style="background-color: #128fc8">
        <!-- Grid container -->
        <div class="container ">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Galactic Marine Parts.
                        </h6>
                        <p style="color: white;">
                            International Pvt. limited
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Addresses</h6>
                        <p style="color: white;"><i class="fas fa-home mr-3"></i> Office no. 05, Trust plaza, Dera
                            adda,
                            Multan, Pk</p>
                        <p style="color: white;"><i class="fas fa-home mr-3"></i> CA-17 Office no. 01, Shah Faisal
                            town,
                            Jinnah Avenue, Malir Halt, Karachi, Pk</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr>

            <!-- Section: Copyright -->
            <section class="p-1 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <!-- Copyright -->
                        <div class="p-3">
                            © 2023 Copyright:
                            <a class="text-white" href="#">galactic-marine.com <br>
                                A Project by SEECS
                            </a>
                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <div class="navbar-nav ml-auto">
                            <div class="socials">
                                <a href="https://www.facebook.com/profile.php?id=100090770391131"><span
                                        class="icon-facebook"></span></a>
                                <a href="https://instagram.com/galacticmarineparts?igshid=ZDdkNTZiNTM="><span
                                        class="icon-instagram"></span></i></a>
                                <a href="#"><span class="icon-twitter"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>

    <script src="{{ url('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('frontend/js/popper.min.js') }}"></script>
    <script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.sticky.js') }}"></script>
    <script src="{{ url('frontend/js/main.js') }}"></script>

</body>

</html>
