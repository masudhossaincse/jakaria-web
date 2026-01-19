@extends('frontend-master')
@section('title')
    Gallery
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
                        <h2>Gallery</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">প্রথম পাতা</a></li>
                            <li class="active">Gallery</li>
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
                                <div class="row">
                                    @foreach($galleries as $gallery)
                                        <div class="col-md-4">
                                            <div class="card" style="width:400px">
                                                <img class="card-img-top" data-bs-toggle="modal" data-bs-target="#exampleModal" src="{{ $gallery->image ?: '' }}" alt="Card image" style="width:250px; height: 250px;">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $gallery->title ?: '' }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

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
