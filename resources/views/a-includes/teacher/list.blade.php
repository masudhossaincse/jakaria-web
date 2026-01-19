@extends('admin-master')
@section('title')
    শিক্ষক-কর্মচারীর তথ্য
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
            <h5 class="card-title">শিক্ষক-কর্মচারীর তথ্য</h5>
            <a class="btn btn-info mb-3" href="{{ route('teacher-create') }}" style="float: right;">Create Teacher</a>
            <a class="btn btn-success mb-3" href="{{ route('teacher-upload') }}" style="float: right; margin-right: 5px;">Upload Teacher</a>
            <!-- Bordered Table -->
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Index No</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Serial</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lists as $list)
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="{{ asset($list->image) ?: 'N/A' }}" height="80" width="100" alt="Not Found">
                        </td>
                        <td>{{ $list ? $list->name : '-' }}</td>
                        <td>{{ $list ? $list->mpo_code : '-' }}</td>
                        <td>{{ $list ? $list->designation : '-' }}</td>
                        <td>{{ $list ? $list->contact : '-' }}</td>
                        <td>{{ $list ? $list->serial : '-' }}</td>
                        <td>{{ $list ? $list->status : '-' }}</td>
                        <td>
                            <a href="{{ url('teacher-edit/'. ($list->id ?: null)) }}"
                               class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ url('teacher-delete/'. ($list->id ?: null)) }}" class="btn btn-sm btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            {{ $lists->links() }}
            <!-- End Bordered Table -->
        </div>
    </div>
@endsection
