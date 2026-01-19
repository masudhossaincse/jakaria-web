<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets-admin/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets-admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets-admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets-admin/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Jul 27 2023 with Bootstrap v5.3.1
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ url('dashboard') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets-admin/img/logo.png') }}" alt="">
            <span class="d-none d-lg-block">Institute Admin</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <h4>
            <a href="{{ url('/') }}">
                {{ $institute->name_en ?: '-' }}
            </a>
        </h4>
{{--        <form class="search-form d-flex align-items-center" method="POST" action="#">--}}
{{--            <input type="text" name="query" placeholder="Search" title="Enter search keyword">--}}
{{--            <button type="submit" title="Search"><i class="bi bi-search"></i></button>--}}
{{--        </form>--}}
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

{{--            <li class="nav-item dropdown">--}}

{{--                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">--}}
{{--                    <i class="bi bi-bell"></i>--}}
{{--                    <span class="badge bg-primary badge-number">4</span>--}}
{{--                </a><!-- End Notification Icon -->--}}

{{--                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">--}}
{{--                    <li class="dropdown-header">--}}
{{--                        You have 4 new notifications--}}
{{--                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li class="notification-item">--}}
{{--                        <i class="bi bi-exclamation-circle text-warning"></i>--}}
{{--                        <div>--}}
{{--                            <h4>Lorem Ipsum</h4>--}}
{{--                            <p>Quae dolorem earum veritatis oditseno</p>--}}
{{--                            <p>30 min. ago</p>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li class="notification-item">--}}
{{--                        <i class="bi bi-x-circle text-danger"></i>--}}
{{--                        <div>--}}
{{--                            <h4>Atque rerum nesciunt</h4>--}}
{{--                            <p>Quae dolorem earum veritatis oditseno</p>--}}
{{--                            <p>1 hr. ago</p>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li class="notification-item">--}}
{{--                        <i class="bi bi-check-circle text-success"></i>--}}
{{--                        <div>--}}
{{--                            <h4>Sit rerum fuga</h4>--}}
{{--                            <p>Quae dolorem earum veritatis oditseno</p>--}}
{{--                            <p>2 hrs. ago</p>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li class="notification-item">--}}
{{--                        <i class="bi bi-info-circle text-primary"></i>--}}
{{--                        <div>--}}
{{--                            <h4>Dicta reprehenderit</h4>--}}
{{--                            <p>Quae dolorem earum veritatis oditseno</p>--}}
{{--                            <p>4 hrs. ago</p>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}
{{--                    <li class="dropdown-footer">--}}
{{--                        <a href="#">Show all notifications</a>--}}
{{--                    </li>--}}

{{--                </ul><!-- End Notification Dropdown Items -->--}}

{{--            </li><!-- End Notification Nav -->--}}

{{--            <li class="nav-item dropdown">--}}

{{--                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">--}}
{{--                    <i class="bi bi-chat-left-text"></i>--}}
{{--                    <span class="badge bg-success badge-number">3</span>--}}
{{--                </a><!-- End Messages Icon -->--}}

{{--                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">--}}
{{--                    <li class="dropdown-header">--}}
{{--                        You have 3 new messages--}}
{{--                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li class="message-item">--}}
{{--                        <a href="#">--}}
{{--                            <img src="{{ asset('assets-admin/img/messages-1.jpg') }}" alt="" class="rounded-circle">--}}
{{--                            <div>--}}
{{--                                <h4>Maria Hudson</h4>--}}
{{--                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>--}}
{{--                                <p>4 hrs. ago</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li class="message-item">--}}
{{--                        <a href="#">--}}
{{--                            <img src="{{ asset('assets-admin/img/messages-2.jpg') }}" alt="" class="rounded-circle">--}}
{{--                            <div>--}}
{{--                                <h4>Anna Nelson</h4>--}}
{{--                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>--}}
{{--                                <p>6 hrs. ago</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li class="message-item">--}}
{{--                        <a href="#">--}}
{{--                            <img src="{{ asset('assets-admin/img/messages-3.jpg') }}" alt="" class="rounded-circle">--}}
{{--                            <div>--}}
{{--                                <h4>David Muldon</h4>--}}
{{--                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>--}}
{{--                                <p>8 hrs. ago</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider">--}}
{{--                    </li>--}}

{{--                    <li class="dropdown-footer">--}}
{{--                        <a href="#">Show all messages</a>--}}
{{--                    </li>--}}

{{--                </ul><!-- End Messages Dropdown Items -->--}}

{{--            </li><!-- End Messages Nav -->--}}

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets-admin/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ auth()->user()->name }}</h6>
                        <span>{{ auth()->user()->email }}</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ url('logout') }}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ url('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="{{ url('notice') }}">
                <i class="bi bi-0-circle"></i>
                <span>নোটিশ</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ url('teacher') }}">
                <i class="bi bi-0-circle"></i>
                <span>শিক্ষক-কর্মচারীর তথ্য</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ url('gallery') }}">
                <i class="bi bi-0-circle"></i>
                <span>Gallery</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>প্রথম পাতা</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('institute') }}">
                        <i class="bi bi-circle"></i><span>শিক্ষা প্রতিষ্ঠানের নাম</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('home-slider') }}">
                        <i class="bi bi-circle"></i><span>Home Slider</span>
                    </a>
                </li>


            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>আমাদের বিষয়</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('institute-history') }}">
                        <i class="bi bi-circle"></i><span>শিক্ষা প্রতিষ্ঠানের ইতিহাস</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('institute-head-speech') }}">
                        <i class="bi bi-circle"></i><span> প্রতিষ্ঠান প্রধানের বাণী</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('institute-committee') }}">
                        <i class="bi bi-circle"></i><span>কমিটি</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('institute-treasure') }}">
                        <i class="bi bi-circle"></i><span>সম্পদ</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav3" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>কার্যাবলী</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('exam-routine') }}">
                        <i class="bi bi-circle"></i><span>পরিক্ষার রুটিন</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('class-routine') }}">
                        <i class="bi bi-circle"></i><span>ক্লাস রুটিন</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('path-tika') }}">
                        <i class="bi bi-circle"></i><span>পাঠটীকা</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('attendance') }}">
                        <i class="bi bi-circle"></i><span>উপস্থিতি</span>
                    </a>
                </li>


            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{ url('homepage-counter') }}">
                <i class="bi bi-0-circle"></i>
                <span>হোমপেজ কাউন্টার</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{ url('important-link') }}">
                <i class="bi bi-0-circle"></i>
                <span>গুরুত্বপূর্ণ লিংক</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{ url('internal-service') }}">
                <i class="bi bi-0-circle"></i>
                <span>অভ্যন্তরীণ ই-সেবাসমূহ</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{ url('contact-list') }}">
                <i class="bi bi-0-circle"></i>
                <span>যোগাযোগ</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">
    @yield('main-section')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>Masud Hossain</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="#">Masud Hossain</a>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


<!-- Template Main JS File -->
<script src="{{ asset('assets-admin/js/main.js') }}"></script>

</body>

</html>
