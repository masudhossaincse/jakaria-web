@extends('admin-master')
@section('title')
    হোমপেজ কাউন্টার Create
@endsection
@section('main-section')
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create homepage counter</h5>

                <!-- Vertical Form -->
                <form action="{{ route('homepage-counter-save') }}" method="POST" enctype="multipart/form-data"
                      class="row g-3">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Students</label>
                        <input name="students" type="number" class="form-control" id="inputNanme4" placeholder="students">
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Teachers</label>
                        <input name="teachers" type="number" class="form-control" id="inputNanme4" placeholder="teachers">
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Staff</label>
                        <input name="staff" type="number" class="form-control" id="inputNanme4" placeholder="staff">
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Educational Level</label>
                        <input name="educational_level" type="number" class="form-control" id="inputNanme4" placeholder="educational_level">
                    </div>

                    <div class="text-center">
                        <a href="{{ route('homepage-counter') }}" type="reset" class="btn btn-secondary">Go Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </div>

@endsection
