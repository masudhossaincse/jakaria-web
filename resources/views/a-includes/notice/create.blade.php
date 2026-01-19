@extends('admin-master')
@section('title')
    Notice Create
@endsection
@section('main-section')
    <div class="col-lg-12">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create New Notice</h5>

            <!-- Vertical Form -->
            <form action="{{ route('notice-save') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">শিরোনাম</label>
                    <input name="title" type="text" class="form-control" id="inputNanme4" placeholder="শিরোনাম" required>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label><strong>বর্ণনা :</strong></label>
                        <textarea class="ckeditor form-control" name="description"></textarea>
                    </div>
                </div>
                <div class="col-6">
                    <label for="inputNanme4" class="form-label">আপলোড নোটিশ ফাইল</label>
                    <input name="attachment" type="file" class="form-control" id="inputNanme4">
                </div>
                <div class="col-6">
                    <label for="inputNanme4" class="form-label">প্রকাশের তারিখ</label>
                    <input name="published_date" type="date" class="form-control" id="inputNanme4">
                </div>
                <div class="text-center">
                    <a href="{{ route('notice') }}" type="reset" class="btn btn-secondary">Go Back</a>
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
