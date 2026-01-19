<section id="mu-our-teacher">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-our-teacher-area">
                    <!-- begain title -->
                    <div class="mu-title">
                        <h2>আমাদের শিক্ষক-শিক্ষিকাবৃন্দ</h2>
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, repudiandae, suscipit repellat minus molestiae ea.</p>--}}
                    </div>
                    <!-- end title -->
                    <!-- begain our teacher content -->
                    <div class="mu-our-teacher-content">
                        <div class="row">
                            @foreach($teacher as $teach)
                                <div class="col-lg-3 col-md-3  col-sm-6">
                                    <div class="mu-our-teacher-single">
                                        <figure class="mu-our-teacher-img">
                                            @isset($teach)
                                                @if($teach->gender == 'male')
                                                    <img src="{{ asset($teach->image ?: 'assets/img/teachers/male.jpeg') }}" alt="teacher img">
                                                @endif
                                                @if($teach->gender == 'female')
                                                    <img src="{{ asset($teach->image ?: 'assets/img/teachers/woman.jpg') }}" alt="teacher img">
                                                @endif
                                            @endisset
                                            <div class="mu-our-teacher-social">
                                                <a href="#">
                                                    <span class="fa fa-eye">
                                                    </span>
                                                </a>
{{--                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Large modal</button>--}}

{{--                                                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">--}}
{{--                                                    <div class="modal-dialog modal-sm">--}}
{{--                                                        <div class="modal-content">--}}
{{--                                                            ...--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </div>
                                        </figure>
                                        <div class="mu-ourteacher-single-content">
                                            <h4>{{ $teach->name ?: '' }}</h4>
                                            <span>{{ $teach->designation ?: '' }}</span>
                                            {{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>--}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center">
                            <a class="btn btn-info" href="{{ url('institute-staff') }}">সকল...</a>
                        </div>

                    </div>
                    <!-- End our teacher content -->
                </div>
            </div>
        </div>
    </div>
</section>
