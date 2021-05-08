<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kamrul Zaman ToNMoy   </title>
    <link rel="shortcut icon" href="{{ asset('frontend/images/title.png')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/venobox.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.animatedheadline.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">
</head>
<body>
     <!--   Preloader start -->
     <div class="preloader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div> 
    <!--   Preloader end-->

    <!--  menu part start   -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <a class="logo" href="index.html">TONMOY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamimmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="hamimmenu">
                <ul class="navbar-nav ml-auto nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="#banner_part">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_part">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio_part">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service_part">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact_part">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--  menu part end   -->

@yield('content')


    <!--    footer part start -->
    <footer id="footer_part">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <p>&copy; Design And Development By <a href="#">ToNMoy</a> - 2021 </p>
                </div>
            </div>
        </div>
    </footer>
    <!--    footer part start -->

    <!--    back to top button start -->
    <div class="bakTop">
        <i class="fas fa-long-arrow-alt-up"></i>
    </div>
    <!--    button end -->


<script src="{{ asset('frontend/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{ asset('frontend/js/popper.min.js')}}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.filterizr.min.js')}}"></script>
<script src="{{ asset('frontend/js/slick.min.js')}}"></script>
<script src="{{ asset('frontend/js/venobox.min.js')}}"></script>
<script src="{{ asset('frontend/js/jquery.animatedheadline.min.js')}}"></script>
<script src="{{ asset('frontend/js/wow.min.js')}}"></script>
<script src="{{ asset('frontend/js/script.js')}}"></script>
</body>

</html>

