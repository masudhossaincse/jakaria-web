<section id="mu-abtus-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-abtus-counter-area">
                    <div class="row">

                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-users"></span>
                                <h4 class="counter">{{ $counter->students ?? 0 }}</h4>
                                <p>ছাত্র-ছাত্রী</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-user-secret"></span>
                                <h4 class="counter">{{ $counter->teachers ?? 0 }}</h4>
                                <p>শিক্ষক-শিক্ষিকা</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-user-secret"></span>
                                <h4 class="counter">{{ $counter->staff ?? 0 }}</h4>
                                <p>কর্মচারী</p>
                            </div>
                        </div>
                        <!-- End counter item -->
{{--                        <!-- Start counter item -->--}}
{{--                        <div class="col-lg-3 col-md-3 col-sm-3">--}}
{{--                            <div class="mu-abtus-counter-single">--}}
{{--                                <span class="fa fa-flask"></span>--}}
{{--                                <h4 class="counter">65</h4>--}}
{{--                                <p>Modern Lab</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- End counter item -->--}}

                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single no-border">
                                <span class="fa fa-book"></span>
                                {{-- <h4 class="counter">{{ $counter->educational_level ?? 0 }}</h4> --}}
                                <h4>{{ 'HSC to Degree (Pass)' }}</h4>
                                <p>শ্রেণীক্রম</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
