<section id="mu-header">
    <div class="container-fluid header-container">
        <div class="row">
            <div class="col-md-2">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="brand-logo" src="{{ asset($institute->logo ?: '') }}" alt="{{ asset($institute->logos ?: 'resources/css/64f859889b6cf.jpg') }}">
                </a>
            </div>
            <div class="col-md-8">
                <a class="navbar-brand header-text" href="{{ url('/') }}">
                    <p class="h2" style="color: white;"><strong>{{ $institute->name_en ?: '' }}</strong></p>
                    <p class="h3" style="color: white;"><strong>{{ $institute->name_bn ?: '' }}</strong></p>
                    <p class="h4" style="color: #101616;"><strong>EIIN: {{ $institute->eiin ?: '' }}</strong></p>
                </a>
            </div>
            <div class="col-md-2">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="brand-logo1" src="{{ asset("assets/img/bd_gov.png") }}" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

