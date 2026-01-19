@extends('admin-master')
@section('title')
    Gallery Update
@endsection
@section('main-section')
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Gallery Update</h5>

                <!-- Vertical Form -->
                <form action="{{ url('gallery-edit/'. $gallery->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    <input name="_method" type="hidden" value="PATCH">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">শিরোনাম</label>
                        <input name="title" type="text" value="{{ $gallery->title ?: '' }}" class="form-control" id="inputNanme4" placeholder="শিরোনাম">
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label><strong>বর্ণনা :</strong></label>
                            <textarea class="ckeditor form-control" name="description">
                                {!! $gallery->description ?: '' !!}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Upload photo</label>
                        <input name="photos[]" type="file" class="form-control" id="inputAddress">
                    </div>
                    <div class="text-center">
                        <a href="{{ route('gallery') }}" type="reset" class="btn btn-secondary">Go Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>

    </div>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
