<section id="mu-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-about-us-area">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="mu-about-us-left">
                                <!-- Start Title -->
                                <div class="mu-title">
                                    <h2>প্রতিষ্ঠানের ইতিহাস</h2>
                                </div>
                                <!-- End Title -->
                                <div>
                                    @isset($history->image)
                                        <img src="{{ asset($history->image) ?: 'N/A' }}" style="margin-left: auto; margin-right: auto; margin-bottom: 5px; position: relative; border-radius: 2px;" height="90%" width="90%" alt="image not found">
                                    @endisset
                                </div>
{{--                                {!! \Illuminate\Support\Str::limit($history->description ?? '',500,'') !!}--}}
                                {!! Str::words(strip_tags(($history->description ?: '-')), 70, ' ... ') !!}
                                <a href="{{ url('history-institute') }}" class="btn btn-info align-right">বিস্তারিত</a>
{{--                                @if (strlen(strip_tags($history->description ?: '-')) > 50)--}}
{{--                                    ... <a href="{{ '#' }}" class="btn btn-info btn-sm">Read More</a>--}}
{{--                                @endif--}}
{{--                                {{ Str::words(strip_tags(($history->description ?: '-')), 130, ' ... ') }}--}}
{{--                                {!! $history->description ?: '-' !!}--}}
                                </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
{{--                            <div class="mu-about-us-right">--}}
{{--                                <a id="mu-abtus-video" href="https://www.youtube.com/embed/HN3pm9qYAUs" target="mutube-video">--}}
{{--                                    <img src="{{ asset("assets/img/about-us.jpg") }}" alt="img">--}}
{{--                                </a>--}}
{{--                            </div>--}}
                            <div class="mu-about-us-right">
                                <div class="card" style="background-color: white; border: 1px solid rgba(128,128,128,0.25); border-top: 5px solid #0aabe5; height: auto;">
                                    <div class="card-title">
                                        <h4 style="text-align: center; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: bold; padding: 5px;">প্রতিষ্ঠান প্রধানের বাণী</h4>
                                    </div>
                                    <hr>
                                    <div class="card-body" style="padding: 0; display: block; margin: auto; width: 70%;">
                                        <img class="card-img-top" style="border-radius: 5px;" src="{{ asset($head_speech->image ?? '') }}" alt="Image not found">
                                            <p style="padding: 5px; text-align: center; font-weight: bold; font-size: 18px;">{{ $head_speech->title ?? '' }}</p>
                                        {{--                                        {!! \Illuminate\Support\Str::limit($head_speech->description ?? '',250,'') !!}--}}
                                        <a href="{{ url('head-speech-institute') }}" class="btn btn-info align-right">বিস্তারিত...</a>
                                    </div>
                                </div>
                            </div>

{{--                            <div class="mu-about-us-right">--}}
{{--                                <div class="card" style="background-color: white; border: 1px solid rgba(128,128,128,0.25); border-top: 5px solid #228305; height: auto;">--}}
{{--                                    <div class="card-title">--}}
{{--                                        <h4 style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: bold; padding: 5px;">প্রতিষ্ঠান প্রধানের বাণী</h4>--}}
{{--                                    </div>--}}
{{--                                    <hr>--}}
{{--                                    <div class="card-body" style="padding: 5px; width: 50%;">--}}
{{--                                        {!! $head_speech->description ?: '-' !!}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <aside class="mu-sidebar">--}}
{{--                                <!-- start single sidebar -->--}}
{{--                                <div class="mu-single-sidebar">--}}
{{--                                    <div class="card" style="background-color: white; border: 1px solid rgba(128,128,128,0.25); border-top: 5px solid #228305; height: auto;">--}}
{{--                                        <div class="card-title">--}}
{{--                                            <h4 style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: bold; padding: 5px;">প্রতিষ্ঠান প্রধানের বাণী</h4>--}}
{{--                                        </div>--}}
{{--                                        <hr>--}}
{{--                                        <div class="card-body" style="padding: 5px;">--}}
{{--                                            {!! $head_speech->description ?: '-' !!}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- end single sidebar -->--}}
{{--                            </aside>--}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
