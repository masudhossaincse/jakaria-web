<section id="mu-slider">
    <!-- Start single slider item -->
    @foreach($slider as $slide)
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="{{ asset($slide->image ?: '') }}" alt="img">
            </figure>
        </div>
{{--        <div class="mu-slider-content">--}}
{{--            <h4>Welcome To Varsity</h4>--}}
{{--            <span></span>--}}
{{--            <h2>We Will Help You To Learn</h2>--}}
{{--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet error eius reiciendis eum sint unde eveniet deserunt est debitis corporis temporibus recusandae accusamus.</p>--}}
{{--            <a href="#" class="mu-read-more-btn">Read More</a>--}}
{{--        </div>--}}
    </div>
    @endforeach
    <!-- Start single slider item -->
</section>
