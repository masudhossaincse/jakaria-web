@extends('frontend-master')
@section('title')
    শিক্ষা প্রতিষ্ঠানের ইতিহাস
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

<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>প্রতিষ্ঠান প্রধানের বাণী</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">প্রথম পাতা</a></li>
                        <li class="active">প্রতিষ্ঠান প্রধানের বাণী</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb -->
<section id="mu-course-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-course-content-area">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- start course content container -->
                            <div class="mu-course-container">
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="text-align: center;">{{ $speech->title ?: '-' }}</div>
                                    <div class="panel-body">
                                        <img style="display: block; margin-left: auto; margin-right: auto; margin-bottom: 20px;" height="250" src="{{ asset($speech->image ?? '') }}" alt="{{ $speech->title ?? '' }}">

                                        {!! $speech->description ?: '-'  !!}
                                    </div>
                                    <div class="panel-footer">

                                    </div>
                                </div>
                            </div>
                            <!-- end course content container -->

                        </div>
                        <div class="col-md-3">
                            <!-- start sidebar -->
                            <aside class="mu-sidebar">
                                <!-- start single sidebar -->
                                <div class="mu-single-sidebar">
                                    <h3>অভ্যন্তরীণ ই-সেবাসমূহ</h3>
                                    <hr>
                                    <ul class="mu-sidebar-catg">
                                        @foreach($service as $ser)
                                            <li>
                                                <a href="{{ $ser->link ?: '#' }}" target="_blank">{{ $ser->title ?: '' }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- end single sidebar -->
                                <!-- start single sidebar -->
                                <div class="mu-single-sidebar">
                                    <h3>গুরুত্বপূর্ণ লিংক</h3>
                                    <hr>
                                    <ul class="mu-sidebar-catg mu-sidebar-archives">
                                        @foreach($link as $li)
                                            <li>
                                                <a href="{{ $li->link ?: '#' }}" target="_blank">{{ $li->title ?: '' }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- end single sidebar -->
                            </aside>
                            <!-- / end sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('footer')
    @include('f-includes.footer')
@endsection
