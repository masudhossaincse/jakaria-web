@extends('admin-master')
@section('title')
    হোমপেজ কাউন্টার
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
            <h5 class="card-title">হোমপেজ কাউন্টার</h5>
            <a class="btn btn-info mb-3" href="{{ route('homepage-counter-create') }}" style="float: right;">Create homepage counter</a>
            <!-- Bordered Table -->
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Students</th>
                    <th scope="col">Teachers</th>
                    <th scope="col">Staff</th>
                    <th scope="col">Educational Level</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lists as $key => $list)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $list->students ?: '-' }}</td>
                        <td>{!! $list->teachers ?: '-' !!}</td>
                        <td>{!! $list->staff ?: '-' !!}</td>
                        <td>{!! $list->educational_level ?: '-' !!}</td>
                        <td>{{ $list ? $list->status : '-' }}</td>
                        <td>
                            <a href="{{ url('homepage-counter-edit/'. ($list->id ?: null)) }}"
                               class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ url('homepage-counter-delete/'. ($list->id ?: null)) }}" class="btn btn-sm btn-danger">
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
