@extends('admin-master')
@section('title')
    Institute Create
@endsection
@section('main-section')
    <div class="col-lg-8">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Update Institute Name</h5>

            <!-- Vertical Form -->
            <form action="{{ url('institute-edit/'. $institute->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
                <input name="_method" type="hidden" value="PATCH">
                @csrf
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Institute Name in English</label>
                    <input name="name_en" type="text" class="form-control" id="inputNanme4" value="{{ $institute->name_en ?: '-' }}" placeholder="Institute Name in English">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Institute Name in Bangla</label>
                    <input name="name_bn" type="text" class="form-control" id="inputEmail4" value="{{ $institute->name_bn ?: '-' }}" placeholder="Institute Name in Bangla">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">EIIN No</label>
                    <input name="eiin" type="text" class="form-control" id="inputPassword4" value="{{ $institute->eiin ?: '-' }}" placeholder="EIIN No">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Email Address</label>
                    <input name="email" type="email" class="form-control" id="inputAddress" value="{{ $institute->email ?: '-' }}" placeholder="Email Address">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input name="address" type="text" class="form-control" id="inputAddress" value="{{ $institute->address ?: '-' }}" placeholder="Address">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Mobile No</label>
                    <input name="contact" type="number" class="form-control" id="inputAddress" value="{{ $institute->contact ?: '-' }}" placeholder="Mobile No">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Upload Logo</label>
                    <input name="logo" type="file" class="form-control" id="inputAddress">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Facebook Link(If Any)</label>
                    <input name="facebook" type="text" class="form-control" id="inputAddress" value="{{ $institute->facebook ?: '-' }}" placeholder="Facebook Link(If Any)">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Youtube Link(If Any)</label>
                    <input name="youtube" type="text" class="form-control" id="inputAddress" value="{{ $institute->youtube ?: '-' }}" placeholder="Youtube Link(If Any)">
                </div>

{{--                <fieldset class="row mb-3">--}}
{{--                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>--}}
{{--                    <div class="col-sm-10">--}}
{{--                        <div class="form-check">--}}
{{--                            <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="1">--}}
{{--                            <label class="form-check-label" for="gridRadios1">--}}
{{--                                Active--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <div class="form-check">--}}
{{--                            <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="0">--}}
{{--                            <label class="form-check-label" for="gridRadios2">--}}
{{--                                Inactive--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </fieldset>--}}
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>

    </div>
@endsection
