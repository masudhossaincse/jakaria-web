@extends('frontend-master')
@section('title')
    জনবল
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
                    <h2>সম্পদ</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">প্রথম পাতা</a></li>
                        <li class="active">জনবল</li>
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
                                <h2>আমাদের শিক্ষক-শিক্ষিকা বৃন্দ</h2>
                                <br>
                                <div class="table-responsive" style="background-color: white;">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td>ক্রমিক</td>
                                            <td>ফটো</td>
                                            <td>নাম</td>
                                            <td>মোবাইল নং</td>
                                            <td>ইনডেক্স নং</td>
                                            <td>লিঙ্গ</td>
                                            <td>পদবি</td>
                                            <td>জয়েনিংয়ের তারিখ</td>
                                            <td>এমপিও'র তারিখ</td>
                                            <td>জন্মতারিখ</td>
                                            <td>SSC/Dakhil</td>
                                            <td>HSC/Alim</td>
                                            <td>BA</td>
                                            <td>Honours</td>
                                            <td>Masters</td>
                                            <td>B.Ed</td>
                                            <td>M.Ed</td>
                                            <td>M.Phil</td>
                                            <td>PHD</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($staff as $key => $teach)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>
                                                    <img src="{{ asset($teach->image ?: '') }}" height="110" width="100" alt="{{ 'image' }}">
                                                </td>
                                                <td>{{ $teach->name ?: '' }}</td>
                                                <td>{{ $teach->contact ?: '' }}</td>
                                                <td>{{ $teach->mpo_code ?: '' }}</td>
                                                <td>{{ $teach->gender ?: '' }}</td>
                                                <td>{{ $teach->designation ?: '' }}</td>
                                                <td>{{ $teach->date_of_joining ?: '' }}</td>
                                                <td>{{ $teach->date_of_mpo ?: '' }}</td>
                                                <td>{{ $teach->date_of_birth ?: '' }}</td>
                                                <td>{{ $teach->ssc ?: '' }}</td>
                                                <td>{{ $teach->hsc ?: '' }}</td>
                                                <td>{{ $teach->ba ?: '' }}</td>
                                                <td>{{ $teach->honours ?: '' }}</td>
                                                <td>{{ $teach->masters ?: '' }}</td>
                                                <td>{{ $teach->b_ed ?: '' }}</td>
                                                <td>{{ $teach->m_ed ?: '' }}</td>
                                                <td>{{ $teach->m_phil ?: '' }}</td>
                                                <td>{{ $teach->phd ?: '' }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
