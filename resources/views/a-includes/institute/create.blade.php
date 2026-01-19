@extends('admin-master')
@section('title')
    Institute Create
@endsection
@section('main-section')
    <div class="col-lg-8">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Institute Name</h5>

            <!-- Vertical Form -->
            <form action="{{ route('institute-save') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Institute Name in English</label>
                    <input name="name_en" type="text" class="form-control" id="inputNanme4" placeholder="Institute Name in English">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Institute Name in Bangla</label>
                    <input name="name_bn" type="text" class="form-control" id="inputEmail4" placeholder="Institute Name in Bangla">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">EIIN No</label>
                    <input name="eiin" type="text" class="form-control" id="inputPassword4" placeholder="EIIN No">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Email Address</label>
                    <input name="email" type="email" class="form-control" id="inputAddress" placeholder="Email Address">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Address">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Mobile No</label>
                    <input name="contact" type="number" class="form-control" id="inputAddress" placeholder="Mobile No">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Upload Logo</label>
                    <input name="logo" type="file" class="form-control" id="inputAddress">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Facebook Link(If Any)</label>
                    <input name="facebook" type="text" class="form-control" id="inputAddress" placeholder="Facebook Link(If Any)">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Youtube Link(If Any)</label>
                    <input name="youtube" type="text" class="form-control" id="inputAddress" placeholder="Youtube Link(If Any)">
                </div>
                <div class="text-center">
                    <a href="{{ route('institute') }}" type="reset" class="btn btn-secondary">Go Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>

    </div>
@endsection
