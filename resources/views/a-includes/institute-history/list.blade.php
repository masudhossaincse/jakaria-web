@extends('admin-master')
@section('title')
    শিক্ষা প্রতিষ্ঠানের ইতিহাস
@endsection
@section('main-section')
{{--    <div class="pagetitle">--}}
{{--        <h1>General Tables</h1>--}}
{{--        <nav>--}}
{{--            <ol class="breadcrumb">--}}
{{--                <li class="breadcrumb-item"><a href="index.html">Home</a></li>--}}
{{--                <li class="breadcrumb-item">Tables</li>--}}
{{--                <li class="breadcrumb-item active">General</li>--}}
{{--            </ol>--}}
{{--        </nav>--}}
{{--    </div><!-- End Page Title -->--}}
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">শিক্ষা প্রতিষ্ঠানের ইতিহাস</h5>
            <a class="btn btn-info mb-3" href="{{ route('institute-history-create') }}" style="float: right;">Create Institute History</a>
            <!-- Bordered Table -->
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lists as $key => $list)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $list->title ?: 'N/A' }}</td>
{{--                        <td>{!! $list->description ?: '-' !!}</td>--}}
                        <td>{!! Str::words(strip_tags(($list->description ?: '-')), 20, ' ... ') !!}</td>
                        <td>
                            <img src="{{ asset($list->image) ?: 'N/A' }}" height="80" width="100" alt="Not Found">
                        </td>
                        <td>{{ $list ? $list->status : '-' }}</td>
                        <td>
                            <a href="{{ url('institute-history-edit/'. ($list->id ?: null)) }}"
                               class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ url('institute-history-delete/'. ($list->id ?: null)) }}" class="btn btn-sm btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {!! $lists->links() !!}
            <!-- End Bordered Table -->
        </div>
    </div>
@endsection
