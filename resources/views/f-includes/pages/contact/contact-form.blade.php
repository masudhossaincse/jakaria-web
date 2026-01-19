@extends('frontend-master')
@section('title')
    Contact Page
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
                        <h2>যোগাযোগ</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">প্রথম পাতা</a></li>
                            <li class="active">যোগাযোগ</li>
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
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-lg-4">
                                        <div style="float: left; width: 20%; padding: 10px; height: 100px; border: 1px solid #337ab7;">
                                            <svg style="margin: 27px 5px;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#337ab7" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            </svg>
                                        </div>
                                        <div style="float: left; width: 80%; padding: 10px; height: 100px; border: 1px solid #337ab7;">
                                            <h4>ঠিকানা:</h4>
                                            <p>{{ $institute->address ?: '' }}</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 info mt-4 mt-lg-0">
                                        <div style="float: left; width: 20%; padding: 10px; height: 100px; border: 1px solid #337ab7;">
                                            <svg style="margin: 27px 5px;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#337ab7" class="bi bi-envelope-at" viewBox="0 0 16 16">
                                                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                                                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                                            </svg>
                                        </div>
                                        <div style="float: left; width: 80%; padding: 10px; height: 100px; border: 1px solid #337ab7;">
                                            <h4>Email:</h4>
                                            <p>{{ $institute->email ?: '' }}</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 info mt-4 mt-lg-0">
                                        <div style="float: left; width: 20%; padding: 10px; height: 100px; border: 1px solid #337ab7;">
                                            <svg style="margin: 27px 5px;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#337ab7" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                            </svg>
                                        </div>
                                        <div style="float: left; width: 80%; padding: 10px; height: 100px; border: 1px solid #337ab7;">
                                            <h4>Call:</h4>
                                            <p>{{ $institute->contact ?: '' }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-10">
                                        <form action="{{ url('contact-form') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label style="margin: 10px;" for="exampleInputEmail1" class="form-label">নাম</label>
                                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="নাম টাইপ করুন">
                                            </div>
                                            <div class="mb-3">
                                                <label style="margin: 10px;" for="exampleInputPassword1" class="form-label">ইমেইল</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="ইমেইল টাইপ করুন">
                                            </div>
                                            <div class="mb-3">
                                                <label style="margin: 10px;" for="exampleInputPassword1" class="form-label">মোবাইল নং</label>
                                                <input type="text" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="মোবাইল নং টাইপ করুন">
                                            </div>
                                            <div class="mb-3">
                                                <label style="margin: 10px;" for="exampleInputPassword1" class="form-label">শিরোনাম</label>
                                                <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="মশিরোনাম টাইপ করুন">
                                            </div>
                                            <div class="mb-3">
                                                <label style="margin: 10px;" for="exampleInputPassword1" class="form-label">বর্ণনা</label>
                                                <textarea name="description" id="description" cols="90" rows="5" placeholder="বর্ণনা টাইপ করুন..."></textarea>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
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

{{--                                            <li><a href="https://www.ebmeb.gov.bd/index.php?type=esif" target="_blank">ইএসআইএফ (eSIF)</a></li>--}}
{{--                                            <li><a href="https://www.ebmeb.gov.bd/index.php?type=eff" target="_blank">ইএফএফ (eFF)</a></li>--}}
{{--                                            <li><a href="https://www.ebmeb.gov.bd/index.php?type=ecis" target="_blank">ইসিআইএস (eCIS)</a></li>--}}
{{--                                            <li><a href="https://www.ebmeb.gov.bd/index.php?type=etif" target="_blank">ইটিআইএফ (eTIF)</a></li>--}}
{{--                                            <li><a href="https://www.ebmeb.gov.bd/index.php?type=erps" target="_blank">ইআরপিএস (eRPS)</a></li>--}}
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
{{--                                                    <a class="btn btn-link" href="{{ $li->link ?: '#' }}" target="_blank">{{ $li->title ?: '' }}</a>--}}
                                                    <a href="{{ $li->link ?: '#' }}" target="_blank">{{ $li->title ?: '' }}</a>
                                                </li>
                                                @endforeach

{{--                                            <li><a href="https://iau.edu.bd/">ইসলামি আরবি বিশ্ববিদ্যালয়</a></li>--}}
{{--                                            <li><a href="https://bmeb.gov.bd/">বাংলাদেশ মাদ্রাসা শিক্ষা বোর্ড</a></li>--}}
{{--                                            <li><a href="https://www.moedu.gov.bd/">শিক্ষা মন্ত্রণালয়</a></li>--}}
{{--                                            <li><a href="https://www.banbeis.gov.bd/webnew/">BANBEIS(ব্যানবেইস)</a></li>--}}
{{--                                            <li><a href="https://bangladesh.gov.bd/index.php">National Web Portal</a></li>--}}
{{--                                            <li><a href="https://new.dhakaeducationboard.gov.bd/">Dhaka Education Board</a></li>--}}
{{--                                            <li><a href="http://www.nctb.gov.bd/">NCTB(এনসিটিবি)</a></li>--}}
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
