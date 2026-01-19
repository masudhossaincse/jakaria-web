@extends('frontend-master')
@section('title')
    Notice Details
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
                    <h2>নোটিশ</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">প্রথম পাতা</a></li>
                        <li class="active">নোটিশ</li>
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
                                <div style="background-color: white;">
                                    <h3>নোটিশ</h3>
                                    <hr>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>ক্রমিক</th>
                                            <th>শিরোনাম</th>
                                            <th>প্রকাশের তারিখ</th>
                                            <th>ডাউনলোড</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($all_notice as $key => $notice)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td><a href="{{ url('notice-single/'. $notice->id) }}" title="{{ $notice->title ?: '-' }}">{{ $notice->title ?: '-' }}</a></td>
                                                <td>{!! (\Carbon\Carbon::parse($notice->published_date)->format('j F, Y')) ?: '-' !!}</td>
                                                <td><a target="_blank" href="{{ asset($notice->attachment ?: '-') }}"><i class="fa fa-download"></i></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {!! $all_notice->links() !!}
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
