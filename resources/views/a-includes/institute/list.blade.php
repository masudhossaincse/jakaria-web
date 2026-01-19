@extends('admin-master')
@section('title')
    Institute
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
            <h5 class="card-title">Institute Name</h5>
            <a class="btn btn-info mb-3" href="{{ route('institute-create') }}" style="float: right;">Create Institute Name</a>
            <!-- Bordered Table -->
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">logo</th>
                    <th scope="col">Name(EN & BN)</th>
                    <th scope="col">EIIN</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lists as $list)
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="{{ asset($list->logo) ?: 'N/A' }}" height="80" width="100" alt="Not Found">
                        </td>
                        <td>{{ $list ? $list->name_en : '-' }} <br> {{ $list ? $list->name_bn : '-' }}</td>
                        <td>{{ $list ? $list->eiin : '-' }}</td>
                        <td>{{ $list ? $list->email : '-' }}</td>
                        <td>{{ $list ? $list->contact : '-' }}</td>
                        <td>{{ $list ? $list->status : '-' }}</td>
                        <td>
                            <a href="{{ url('institute-edit/'. ($list->id ?: null)) }}"
                               class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ url('institute-delete/'. ($list->id ?: null)) }}" class="btn btn-sm btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <!-- End Bordered Table -->
        </div>
    </div>
@endsection
