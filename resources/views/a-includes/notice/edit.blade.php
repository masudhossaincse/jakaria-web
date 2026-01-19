@extends('admin-master')
@section('title')
    Notice Update
@endsection
@section('main-section')
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Notice Update</h5>

                <!-- Vertical Form -->
                <form action="{{ url('notice-edit/'. $notice->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    <input name="_method" type="hidden" value="PATCH">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">শিরোনাম</label>
                        <input name="title" type="text" value="{{ $notice->title ?: '' }}" class="form-control" id="inputNanme4" placeholder="শিরোনাম">
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label><strong>বর্ণনা :</strong></label>
                            <textarea class="ckeditor form-control" name="description">
                                {!! $notice->description ?: '' !!}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="inputNanme4" class="form-label">আপলোড নোটিশ ফাইল</label>
                        <input name="attachment" type="file" class="form-control" value="{{ $notice->attachment ?: '' }}" id="inputNanme4">
                    </div>
                    <div class="col-6">
                        <label for="inputNanme4" class="form-label">প্রকাশের তারিখ</label>
                        <input name="published_date" type="date" class="form-control" value="{{ $notice->published_date ?: '' }}" id="inputNanme4">
                    </div>
                    <div class="col-6">
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="1" required>
                                    <label class="form-check-label" for="gridRadios1">
                                        Active
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="0" required>
                                    <label class="form-check-label" for="gridRadios2">
                                        Inactive
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="text-center">
                        <a href="{{ url('notice') }}" type="reset" class="btn btn-secondary">Go Back</a>
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
