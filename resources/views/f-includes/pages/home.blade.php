@extends('frontend-master')
@section('title')
    প্রথম পাতা
@endsection
@section('tab-icon')
    <link rel="shortcut icon" href="{{ asset($institute->logo ?: '') }}" type="image/x-icon">
@endsection
@section('top-header')
    @include('f-includes.top-header')
@endsection
@section('header')
    @include('f-includes.header')
@endsection
@section('marquee')
    @include('f-includes.marquee')
@endsection
@section('main-content')
    <!-- Start Slider -->
    @include("f-includes.home-slider")
    <!-- End Slider -->
    <!-- Start service  -->
{{--    @include("f-includes.home-services")--}}
    <!-- End service  -->

{{--    home-page-notice-start--}}
    @include("f-includes.notice")
    {{--    home-page-notice-end--}}

    <!-- Start about us -->
    @include("f-includes.home-aboutus")
    <!-- End about us -->

    <!-- Start about us counter -->
    @include("f-includes.home-aboutus-counter")
    <!-- End about us counter -->

    <!-- Start features section -->
{{--    @include("f-includes.home-features")--}}
    <!-- End features section -->

    <!-- Start latest course section -->
{{--    @include("f-includes.home-courses")--}}
    <!-- End latest course section -->

    <!-- Start our teacher -->
    @include("f-includes.home-teachers")
    <!-- End our teacher -->

    <!-- Start testimonial -->
{{--    @include("f-includes.home-testimonial")--}}
    <!-- End testimonial -->

    <!-- Start from blog -->
{{--    @include("f-includes.home-blog")--}}
    <!-- End from blog -->
@endsection
@section('footer')
    @include('f-includes.footer')
@endsection
