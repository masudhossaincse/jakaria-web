@extends('admin-master')
@section('title')
    Important Link Create
@endsection
@section('main-section')
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create Important Link</h5>

                <!-- Vertical Form -->
                <form action="{{ route('important-link-save') }}" method="POST" enctype="multipart/form-data"
                      class="row g-3">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">শিরোনাম</label>
                        <input name="title" type="text" class="form-control" id="inputNanme4" placeholder="শিরোনাম">
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Link</label>
                        <input name="link" type="text" class="form-control" id="inputNanme4" placeholder="শিরোনাম">
                    </div>
                    <div class="text-center">
                        <a href="{{ route('important-link') }}" type="reset" class="btn btn-secondary">Go Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </div>
@endsection
