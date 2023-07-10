<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Start your development with JoeBLog landing page." />
    <link rel="icon" type="image/x-icon" href="assets/imgs/logo1.png" sizes="16x16">
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
                                        <a href="{{ url('/category') }}" class="nav-link active">Category</a>
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
                                    <li><a href="{{ url('/about') }}" class="nav-link">About us</a></li>
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
            <h1 class="text-center" style="font-size: 50px; color: white;">Our Products</h1>

        </div>

    </div>

    <div class="hero"
        style="height: 300px; background-image: url({{ url('frontend/assets/imgs/wall.jpg') }}); filter: brightness(50%);">
    </div>
    <br>


    <style>
        .pill-nav a {
            display: inline-block;
            color: black;
            text-align: center;
            padding: 14px;
            text-decoration: none;
            font-size: 17px;
            border-radius: 5px;
        }

        /* Change the color of links on mouse-over */
        .pill-nav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Add a color to the active/current link */
        .pill-nav a.active {
            background-color: dodgerblue;
            color: white;
        }

        @media only screen and (max-width: 770px) {
            .pill-nav a {
                display: block;
            }
        }
    </style>
    <div class="container d-flex justify-content-center section-header my-5">
        <div class="pill-nav">
            <a href="{{ url('/category') }}">Marine</a>
            <a href="{{ url('/railway') }}">Railway Supplies</a>
            <a href="{{ url('/solar') }}">Solar</a>
            <a href="{{ url('/traffic') }}">Traffic equipments</a>
            <a class="active" href="{{ url('/aviation') }}">Aviation</a>
        </div>
    </div>

    <div class="section-header">
        <h3>
            Search your Part Name here :
        </h3>
    </div>

    <div class="container my-4" style="border: 1px solid rgba(0, 0, 0, 0.482); border-radius: 10px; padding: 15px;">
        <div class="row p-3">
            <div class="col">
                <li>Engine Parts</li>
                <li>Communication system</li>
                <li>Navigation System</li>

            </div>
            <div class="col">
                <li>Other Tools, Assesories & Spare parts</li>
            </div>
        </div>

    </div>

    <div class="section-header">
        <p> <b> Note : If you donot find your Part No. / Name of any brand, Just <a href="{{ url('/contact') }}">
                    contact us </a>
                through email. We will provide you your product in best price with Urgent Delivery Worldwide. </b> </p>
    </div>

    @include('frontend.layout.footer')
