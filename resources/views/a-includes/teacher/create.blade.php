@extends('admin-master')
@section('title')
    Teacher Create
@endsection
@section('main-section')
    <div class="col-lg-8">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Teacher</h5>

            <!-- Vertical Form -->
            <form action="{{ route('teacher-save') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Upload Photo</label>
                    <input name="image" type="file" class="form-control" id="inputAddress">
                </div>
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Serial</label>
                    <input name="serial" type="number" class="form-control" id="inputNanme4" placeholder="Serial">
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Full Name</label>
                    <input name="name" type="text" class="form-control" id="inputEmail4" placeholder="Full Name">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Mobile No</label>
                    <input name="contact" type="text" class="form-control" id="inputPassword4" placeholder="contact">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Index No</label>
                    <input name="mpo_code" type="text" class="form-control" id="inputAddress" placeholder="Index No">
                </div>
                <div class="col-12">
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" required>
                                <label class="form-check-label" for="gridRadios1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="female" required>
                                <label class="form-check-label" for="gridRadios1">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="others" required>
                                <label class="form-check-label" for="gridRadios1">
                                    Others
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Designation</label>
                    <input name="designation" type="text" class="form-control" id="inputAddress" placeholder="Designation">
                </div>
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Date of Joining</label>
                    <input name="date_of_joining" type="date" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Date of MPO</label>
                    <input name="date_of_mpo" type="date" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Date of Birth</label>
                    <input name="date_of_birth" type="date" class="form-control" id="inputNanme4">
                </div>

                <div class="col-6">
                    <label for="inputAddress" class="form-label">SSC/Dakhil Result</label>
                    <input name="ssc" type="text" class="form-control" id="inputAddress" placeholder="SSC/Dakhil Result">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">HSC/Alim Result</label>
                    <input name="hsc" type="text" class="form-control" id="inputAddress" placeholder="HSC/Alim Result">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">BA Result</label>
                    <input name="ba" type="text" class="form-control" id="inputAddress" placeholder="BA Result">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Honours Result</label>
                    <input name="honours" type="text" class="form-control" id="inputAddress" placeholder="Honours Result">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">Masters Result</label>
                    <input name="masters" type="text" class="form-control" id="inputAddress" placeholder="Masters Result">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">B.Ed Result</label>
                    <input name="b_ed" type="text" class="form-control" id="inputAddress" placeholder="B.Ed Result">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">M.Ed Result</label>
                    <input name="m_ed" type="text" class="form-control" id="inputAddress" placeholder="M.Ed Result">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">M.Phil Result</label>
                    <input name="m_phil" type="text" class="form-control" id="inputAddress" placeholder="M.Phil Result">
                </div>
                <div class="col-6">
                    <label for="inputAddress" class="form-label">PHD</label>
                    <input name="phd" type="text" class="form-control" id="inputAddress" placeholder="PHD">
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
