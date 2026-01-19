@extends('admin-master')
@section('title')
    Teacher upload
@endsection
@section('main-section')
    <div class="col-lg-8">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Upload Teacher</h5>

            <!-- Vertical Form -->
            <form action="{{ route('teacher-upload') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Upload Excel File</label>
                    <input name="teacher_import" type="file" class="form-control" id="inputAddress">
                </div>
                <div class="text-center">
                    <a href="{{ url('teacher') }}" type="reset" class="btn btn-secondary">Go Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>

    </div>
@endsection
