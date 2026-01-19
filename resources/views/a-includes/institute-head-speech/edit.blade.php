@extends('admin-master')
@section('title')
    Institute Head Speech Update
@endsection
@section('main-section')
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Institute Head Speech Update</h5>

                <!-- Vertical Form -->
                <form action="{{ url('institute-head-speech-edit/'. $inst_head->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    <input name="_method" type="hidden" value="PATCH">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">শিরোনাম</label>
                        <input name="title" type="text" value="{{ $inst_head->title ?: '' }}" class="form-control" id="inputNanme4" placeholder="শিরোনাম">
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label><strong>বর্ণনা :</strong></label>
                            <textarea class="ckeditor form-control" name="description">
                                {!! $inst_head->description ?: '' !!}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Upload Photo</label>
                        <input name="image" type="file" class="form-control" id="inputNanme4" placeholder="শিরোনাম">
                    </div>
                    <div class="text-center">
                        <a href="{{ route('institute-head-speech') }}" type="reset" class="btn btn-secondary">Go Back</a>
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
