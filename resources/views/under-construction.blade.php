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
    <div style="height: 500px; margin-left: auto; padding: 0;">
        <h1 style="text-align: center;">Under Construction!!!</h1>
    </div>
@endsection
@section('footer')
    @include('f-includes.footer')
@endsection
