<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="icon" type="image/x-icon" href="assets/imgs/logo1.png" sizes="16x16">
    <meta name="author" content="Devcrud" />
    <title>Galactic Marine</title>


    <!-- font icons -->
    <link rel="stylesheet" href="{{ url('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/joeblog.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/fonts/icomoon/style.css') }}">
    <script src="https://kit.fontawesome.com/63491d034f.js" crossorigin="anonymous"></script>

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


    <div class="site-navbar-top" style="background-color:cadet-blue;">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="ml-auto">
                        <a href="mailto:galactic.marine.int@gmail.com" class="p-2 pl-0">
                            <span style="color:black;" class="fa-solid fa-envelope"></span>
                        </a>
                        <a href="tel:+92 343 7137554" class="p-2 pl-0">
                            <span style="color:black;" class="fa-solid fa-phone"></span>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=923267326065" class="p-2 pl-0">
                            <i style="color:black;" class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <div class="mr-auto">
                        <a style="color:black;" href="#" class="p-2 pl-0"><span
                                class="fa-brands fa-twitter"></i></span></a>
                        <a style="color:black;" href="https://www.facebook.com/profile.php?id=100090770391131"
                            class="p-2 pl-0"><span class="fa-brands fa-facebook-f"></span></a>
                        <a style="color:black;" href="https://instagram.com/galacticmarineparts?igshid=ZDdkNTZiNTM="
                            class="p-2 pl-0"><span class="fa-brands fa-instagram"></span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('my-element').style.zIndex = '99';
    </script>

    <div class="site-navbar site-navbar-target js-sticky-header" style="background-color:#128fc8;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <img style="height: 60px;" src="frontend/assets/imgs/logo99.png" alt="">
                </div>
                <div class="col-8">
                    <nav class="site-navigation text-right" role="navigation">
                        <div class="container">
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                    class="site-menu-toggle js-menu-toggle text-white"><span
                                        class="icon-menu h3"></span></a></div>

                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                <li><a href="{{ url('/') }}" class="nav-link active">Home</a></li>
                                <li class="has-children">
                                    <a href="{{ url('/category') }}" class="nav-link">Category</a>
                                    <ul class="dropdown arrow-top">
                                        <li class="has-children">
                                            <a href="{{ url('/category') }}" class="nav-link">Marine</a>
                                            <ul class="dropdown arrow-right">
                                                <li><a href="{{ url('/category') }}" class="nav-link">Cummins</a></li>
                                                <li><a href="{{ url('/yamaha') }}" class="nav-link">Yamaha</a></li>
                                                <li><a href="{{ url('/mtuf') }}" class="nav-link">MTU</a></li>
                                                <li><a href="{{ url('/man') }}" class="nav-link">MAN</a></li>
                                                <li><a href="{{ url('/zf') }}" class="nav-link">ZF</a></li>
                                                <li><a href="{{ url('/kohler') }}" class="nav-link">Kohler</a></li>
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
                                <li><a href="{{ url('/about') }}" class="nav-link">About us</a></li>
                                <li><a href="{{ url('/contact') }}" class="nav-link">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <a href="{{ '/login' }}"><i style="color: aliceblue; font-size:20px;"
                            class="fa-solid fa-right-to-bracket text-align-center"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img style="max-width: 100%;height: auto;" class="img-fluid" src="frontend/assets/imgs/main13.jpg"
                    alt="">
            </div>
            <div id="btn"
                class="col-md-6 col-sm-12 mt-4 d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-center" style="font-size: 60px; color: black;">Galactic Marine</h1>
                <p class="text-center" style="font-size: 20px; color: black; padding: 5px;">All type of Marine
                    Outboard & Inboard original / Replacement parts and Accessories, Marine Generators, Railway
                    items, Traffic devices, Solar, Navigation system & Communication system.</p>
                <a href="{{ url('/category') }}" class="btn btn-outline-primary">
                    Search For Products
                </a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="section-header mb-4">
            <h3> Our main Products : </h3>

        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="frontend/assets/imgs/slider/12.1.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">Marine Generators</h5>
                        <p style="color: black;">All kinds of engines</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="frontend/assets/imgs/slider/engine1.png" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">Marine Engines</h5>
                        <p style="color: black;">All kinds of generators</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="frontend/assets/imgs/slider/p4.png" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">Fire Fighting equipments</h5>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="frontend/assets/imgs/slider/p5.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black;">Diving Kits</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="frontend/assets/imgs/slider/slider3.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Communication systems</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="frontend/assets/imgs/slider/slider5.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Navigation systems</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="frontend/assets/imgs/slider/slider4.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Communication systems</h5>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span style="color: black;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span style="color: black;" class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr>
    </div>

    <div class="container" style="padding: 40px;">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img style="max-width: 100%;height: auto;" class="img-fluid" src="frontend/assets/imgs/11.jpg"
                    alt="">
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="mt-5 section-header">
                    <h3>We offer :</h3>
                    <p style="width:auto; font-size:18px;">All type of Marine Inboard & Outboard replacement and
                        original parts, Marine Generators, tools and accessories, Ships & Yatch assesories, Marine
                        fuel and electric engines, Compressors, Aircraft
                        engine
                        parts, Solar equipments & devices, Traffic equipment & devices,
                        Ground
                        support, Frame parts, Communication system, Navigation equipments, Fishing equipments,
                        Diving suits & equipments, And all kind of spare parts.</p>
                </div>
            </div>

        </div>


        <div class="container mt-5">
            <div id="card2">
                <div class="section-header">
                    <h3>We deal in :</h3>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <img style="max-width: 100%;height: auto;" class="img-fluid mt-5"
                            src="frontend/assets/imgs/15.jpg" alt="">
                        <p style="font-size: 20px; margin: 35px; ">All kinds of Railway Replacement parts</p>
                    </div>
                    <div class="col">
                        <img style="max-width: 100%;height: auto;" class="img-fluid mt-5"
                            src="frontend/assets/imgs/traficc.jpg" alt="">
                        <p style="font-size: 20px; margin-top: 29px;">Traffic equipments and signs</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img style="max-width: 100%;height: 350px;" class="img-fluid mt-5"
                            src="frontend/assets/imgs/solarr.jpg" alt="">
                        <p style="font-size: 20px; margin-top: 29px;">Solar items</p>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-center text-center align-items-center">
                    <i class="fa-solid fa-anchor"
                        style="padding-bottom: 6px; font-size: 35px; margin: 10px; color: #128fc8;"></i>
                    <h3 style="font-size: 35px; color: #128fc8;">Brands</h3>
                </div>
                <p>We deal in all kinds of Automobile, Railways & Marine brands</p>
                <div class="para mt-5">
                    <img style="max-width: 100%;height: auto;" class="img-fluid text-center"
                        src="frontend/assets/imgs/brands.jpg" alt="">
                </div>
            </div>
        </div>


        <div class="container">
            <br>
            <div class="section-header mt-4">
                <h3 class="text-center">Our Products</h3>
            </div>
            <br>
            <div class="row">

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-block" id="card1">
                        <img class="card-img-top" style="height: 150px;" src="frontend/assets/imgs/products/p1.jpg"
                            alt="Card image cap">
                        <div class="card-body card-block" style="margin: 5px;">
                            <h5 class="card-title">Electric & Fuel outboard Engines</h5>

                            <a href="{{ url('mailto:galactic.marine.int@gmail.com') }}"
                                class="btn btn-primary">Contact</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-block" id="card1">
                        <img class="card-img-top" style="height: 150px;" src="frontend/assets/imgs/products/p2.jpg"
                            alt="Card image cap">
                        <div class="card-body card-block" style="margin: 5px;">
                            <h5 class="card-title">Fork Lifter parts</h5>

                            <a href="{{ url('mailto:galactic.marine.int@gmail.com') }}"
                                class="btn btn-primary">Contact</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-block" id="card1">
                        <img class="card-img-top" style="height: 150px;" src="frontend/assets/imgs/products/p3.jpg"
                            alt="Card image cap">
                        <div class="card-body card-block" style="margin: 5px;">
                            <h5 class="card-title">Marine Generators</h5>

                            <a href="{{ url('mailto:galactic.marine.int@gmail.com') }}"
                                class="btn btn-primary">Contact</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-block" id="card1">
                        <img class="card-img-top" style="height: 150px;" src="frontend/assets/imgs/products/p4.jpg"
                            alt="Card image cap">
                        <div class="card-body card-block" style="margin: 5px;">
                            <h5 class="card-title">Fire Fighting Equipments</h5>

                            <a href="{{ url('mailto:galactic.marine.int@gmail.com') }}"
                                class="btn btn-primary">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-block" id="card1">
                        <img class="card-img-top" style="height: 150px;" src="frontend/assets/imgs/products/p5.jpg"
                            alt="Card image cap">
                        <div class="card-body card-block" style="margin: 5px;">
                            <h5 class="card-title">Diving kit</h5>

                            <a href="{{ url('mailto:galactic.marine.int@gmail.com') }}"
                                class="btn btn-primary">Contact</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-block" id="card1">
                        <img class="card-img-top" style="height: 150px;" src="frontend/assets/imgs/products/p6.jpg"
                            alt="Card image cap">
                        <div class="card-body card-block" style="margin: 5px;">
                            <h5 class="card-title">Life Jackets</h5>

                            <a href="{{ url('mailto:galactic.marine.int@gmail.com') }}"
                                class="btn btn-primary">Contact</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-block" id="card1">
                        <img class="card-img-top" style="height: 150px;" src="frontend/assets/imgs/products/p7.jpg"
                            alt="Card image cap">
                        <div class="card-body card-block" style="margin: 5px;">
                            <h5 class="card-title">Fenders</h5>

                            <a href="{{ url('mailto:galactic.marine.int@gmail.com') }}"
                                class="btn btn-primary">Contact</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-block" id="card1">
                        <img class="card-img-top" style="height: 150px;" src="frontend/assets/imgs/products/p8.jpg"
                            alt="Card image cap">
                        <div class="card-body card-block" style="margin: 5px;">
                            <h5 class="card-title">Marine Lights</h5>

                            <a href="{{ url('mailto:galactic.marine.int@gmail.com') }}"
                                class="btn btn-primary">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-block" id="card1">
                        <img class="card-img-top" style="height: 150px;" src="frontend/assets/imgs/products/p9.jpg"
                            alt="Card image cap">
                        <div class="card-body card-block" style="margin: 5px;">
                            <h5 class="card-title">Inflatable , Rescue & work boats</h5>

                            <a href="{{ url('mailto:galactic.marine.int@gmail.com') }}"
                                class="btn btn-primary">Contact</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-block" id="card1">
                        <img class="card-img-top" style="height: 150px;"
                            src="frontend/assets/imgs/slider/slider7.jpg" alt="Card image cap">
                        <div class="card-body card-block" style="margin: 5px;">
                            <h5 class="card-title">Work Boat</h5>

                            <a href="{{ url('mailto:galactic.marine.int@gmail.com') }}"
                                class="btn btn-primary">Contact</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card card-block" id="card1">
                        <img class="card-img-top" style="height: 150px;"
                            src="frontend/assets/imgs/slider/slider6.jpg" alt="Card image cap">
                        <div class="card-body card-block" style="margin: 5px;">
                            <h5 class="card-title">Rescue boats</h5>

                            <a href="{{ url('mailto:galactic.marine.int@gmail.com') }}"
                                class="btn btn-primary">Contact</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-flex justify-content-center">
                <a href="{{ url('/product') }}" class="btn btn-outline-primary">
                    See More
                </a>
                <br>
            </div>
        </div>

        <section id="clients" class="section-bg">
            <div class="container" id="card2" style="background-color:rgba(248, 248, 248, 0.374);">
                <div class="section-header">
                    <div class="row d-flex justify-content-center align-items-center text-center my-3">
                        <h3>Why trust us?</h3>
                    </div>
                </div>
                <p style="color: black; font-size: 20px;">
                    We have extensive 12 years of trading experience in practically all industries. We have operated out
                    of Saudi Arabia and provided our services as a provider of civil and military goods globally.
                </p>
                <div class="all" style="text-align: start">
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>Best Quality.</li>
                                <li>Door to door service.</li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li>Urgent delivery.</li>
                                <li>Best Price.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>All type of equipment & tools/devices & gadgets/parts & accessories related to any
                                    of
                                    the mentioned categories will be provided on demand.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row d-flex justify-content-center align-items-center text-center">
                    <i class="fa-solid fa-people-group"
                        style="padding-bottom: 6px; font-size: 50px; margin: 20px; color: #128fc8;"></i>
                    <h3>Our team</h3>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <a>Abdul Malik Bakhsh - CEO</a>
                        <a href="https://api.whatsapp.com/send?phone=923437137554">
                            <p style="color: rgb(48, 48, 48);"><i class="fa-brands fa-whatsapp"></i> +92 343
                                7137554</p>
                        </a>
                        <p style="color: rgb(39, 39, 39);"><i class="fa-regular fa-envelope"
                                style="color: black;"></i> galactic.marine.int@gmail.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a>Mehmood Alam - Managing Director</a>
                        <a>
                            <p style="color: rgb(39, 39, 39);"><i class="fa-regular fa-envelope"
                                    style="color: black;"></i> gmp.international.pk@gmail.com</p>
                        </a>
                    </div>
                    <div class="col">
                        <a style="display: unset">M Noor Alam - Aviation Head</a>
                        <a>
                            <p style="color: rgb(39, 39, 39);"><i class="fa-regular fa-envelope"
                                    style="color: black;"></i> int.marine.ltd@gmail.com</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <script>
            // Code to change the z-index of the plugin
            var pluginDiv = document.getElementById('skicky-wrapper');
            pluginDiv.style.zIndex = '99';
        </script>
    </div>
    @include('frontend.layout.footer')
