<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/main/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/main/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/main/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/main/css/plyr.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/main/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/main/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/main/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/main/css/style.css')}}" type="text/css">
    @yield('css')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{route('home')}}">
                            <img src="/assets/main/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">Popular</a></li>
                                <li>
                                    <a href="{{route('animes')}}">List of Anime</a>
                                </li>
                                <li><a href="{{route('genres')}}">Genre</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        @if(Auth::check())
                            <a href="{{route('logout')}}"><span class="icon_profile"></span></a>
                        @else
                            <a href="{{route('login')}}"><span class="icon_profile"></span></a>
                        @endif
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    @yield('breadcrumb')

    @yield('body')

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html"><img src="/assets/main/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="./index.html">Homepage</a></li>
                        <li><a href="./categories.html">Categories</a></li>
                        <li><a href="./blog.html">Our Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                </div>
            </div>
        </div>
    </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="{{asset('assets/main/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/main/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/main/js/player.js')}}"></script>
<script src="{{asset('assets/main/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/main/js/mixitup.min.js')}}"></script>
<script src="{{asset('assets/main/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('assets/main/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/main/js/main.js')}}"></script>
@yield('script')

</body>

</html>