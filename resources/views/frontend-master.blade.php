<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>

    <!-- Favicon -->
    @yield('tab-icon')

    <!-- Font awesome -->
    <link href="{{ asset("assets/css/font-awesome.css") }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset("assets/css/bootstrap.css") }}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/slick.css") }}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset("assets/css/jquery.fancybox.css") }}" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{ asset("assets/css/theme-color/default-theme.css") }}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{ asset("assets/css/style.css") }}" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>

    <style>
        #notice-board {
            height: 186px;
        }
        tr:hover a {color: white;}
        tr:hover {background-image: linear-gradient(180deg, #101616, #01bafd); color: white;}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container-fluid">


<!--START SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#">
    <i class="fa fa-angle-up"></i>
</a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start top header  -->
    @yield('top-header')
<!-- End top header  -->
{{--    start header--}}
@yield('header')
{{--    end header--}}
    {{--    marquee starts--}}
    @yield('marquee')
    {{--    marquee ends--}}

<!-- Start menu -->
<section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- TEXT BASED LOGO -->
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    <i class="fa fa-university"></i>--}}
{{--                    <span>Koyra Uttar Chak Aminia Multilateral Kamil Madrasa</span>--}}
{{--                </a>--}}
                <!-- IMG BASED LOGO  -->
{{--                <a class="navbar-brand" href="index.html">--}}
{{--                    <p style="display:inline-block;">--}}
{{--                        <img src="{{ asset("assets/img/h-logo.png") }}" width="100" height="100" alt="">--}}
{{--                        Koyra Uttar Chak Aminia Multilateral Kamil Madrasa--}}
{{--                    </p>--}}
{{--                </a>--}}
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}"><b>প্রথম পাতা</b></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>আমাদের বিষয়</b> <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="{{ request()->is('history-institute') ? 'active' : '' }}"><a href="{{ url('history-institute') }}">শিক্ষা প্রতিষ্ঠানের ইতিহাস</a></li>
                            <li class="{{ request()->is('head-speech-institute') ? 'active' : '' }}"><a href="{{ url('head-speech-institute') }}"> প্রতিষ্ঠান প্রধানের বাণী</a></li>
                            <li class="{{ request()->is('committee-institute') ? 'active' : '' }}"><a href="{{ url('committee-institute') }}"> কমিটি</a></li>
                            <li class="{{ request()->is('institute-staff') ? 'active' : '' }}"><a href="{{ url('institute-staff') }}"> জনবল</a></li>
                            <li class="{{ request()->is('treasure-institute') ? 'active' : '' }}"><a href="{{ url('treasure-institute') }}"> সম্পদ </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>কার্যাবলী</b> <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="{{ request()->is('exam-routines') ? 'active' : '' }}"><a href="{{ url('exam-routines') }}">পরীক্ষার রুটিন</a></li>
                            <li class="{{ request()->is('under-construction') ? 'active' : '' }}"><a href="{{ url('under-construction') }}">  ক্লাস রুটিন </a></li>
                            <li class="{{ request()->is('under-construction') ? 'active' : '' }}"><a href="{{ url('under-construction') }}"> পাঠটিকা </a></li>
                            <li class="{{ request()->is('under-construction') ? 'active' : '' }}"><a href="{{ url('under-construction') }}"> উপস্থিতি </a></li>
                            <li class="{{ request()->is('under-construction') ? 'active' : '' }}"><a href="{{ url('under-construction') }}">  প্রকাশনা </a></li>
                            <li class="{{ request()->is('under-construction') ? 'active' : '' }}"><a href="{{ url('under-construction') }}">   সহপাঠ কার্যাবলী  </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>একাডেমিক রেকর্ড</b> <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('under-construction') }}"> ছাত্র-ছাত্রীর রেকর্ড </a></li>
                            <li><a href="{{ url('under-construction') }}">  একাডেমিক পারফরম্যান্স </a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>ফলাফল</b> <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('under-construction') }}"> একাডেমিক </a></li>
                            <li><a href="{{ url('under-construction') }}">  পাবলিক পরীক্ষা  </a></li>
                            <li><a href="{{ url('under-construction') }}"> ভর্তি পরীক্ষা  </a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('institute-gallery') }}"><b>ফটো</b> </a></li>
                    <li><a href="{{ url('contact') }}"><b>যোগাযোগ</b>  </a></li>
                    <li>
                        <a href="#" id="mu-search-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>
<!-- End menu -->
<!-- Start search box -->
<div id="mu-search">
    <div class="mu-search-area">
        <button class="mu-search-close"><span class="fa fa-close"></span></button>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form class="mu-search-form">
                        <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End search box -->

@yield("main-content")

<!-- Start Slider -->
{{--@include("f-includes.home-slider")--}}
<!-- End Slider -->
<!-- Start service  -->
{{--@include("f-includes.home-services")--}}
<!-- End service  -->

<!-- Start about us -->
{{--@include("f-includes.home-aboutus")--}}
<!-- End about us -->

<!-- Start about us counter -->
{{--@include("f-includes.home-aboutus-counter")--}}
<!-- End about us counter -->

<!-- Start features section -->
{{--@include("f-includes.home-features")--}}
<!-- End features section -->

<!-- Start latest course section -->
{{--@include("f-includes.home-courses")--}}
<!-- End latest course section -->

<!-- Start our teacher -->
{{--@include("f-includes.home-teachers")--}}
<!-- End our teacher -->

<!-- Start testimonial -->
{{--@include("f-includes.home-testimonial")--}}
<!-- End testimonial -->

<!-- Start from blog -->
{{--@include("f-includes.home-blog")--}}
<!-- End from blog -->

<!-- Start footer -->
@yield('footer')
<!-- End footer -->

<!-- jQuery library -->
<script src="{{ asset("assets/js/jquery.min.js") }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset("assets/js/bootstrap.js") }}"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{ asset("assets/js/slick.js") }}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{ asset("assets/js/waypoints.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/jquery.counterup.js") }}"></script>
<!-- Mixit slider -->
<script type="text/javascript" src="{{ asset("assets/js/jquery.mixitup.js") }}"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="{{ asset("assets/js/jquery.fancybox.pack.js") }}"></script>


<!-- Custom js -->
<script src="{{ asset("assets/js/custom.js") }}"></script>
</div>
</body>
</html>
