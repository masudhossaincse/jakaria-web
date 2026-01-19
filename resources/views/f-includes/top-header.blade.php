<header id="mu-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-header-area">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                            <div class="mu-header-top-left">
                                <div class="mu-top-email">
                                    <i class="fa fa-envelope"></i>
                                    <span>
                                        <a style="color: black;" href="mailto:{{ $institute->email ?: '' }}">{{ $institute->email ?: '' }}</a>
                                    </span>
                                </div>
                                <div class="mu-top-phone">
                                    <i class="fa fa-phone"></i>
                                    <span>{{ $institute->contact ?: '' }}</span>
                                </div>
                                <div class="mu-top-phone">
                                    @php
                                        $englishDate = \Carbon\Carbon::now()->format('l, j F Y');
                                        $search_array= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "January", "February", "March", "April", "May", "June",
                                        "July", "August", "September", "October", "November", "December", ":", ",", "th", "Saturday", "Sunday", "Monday",
                                        "Tuesday", "Wednesday", "Thursday", "Friday");
                                        $replace_array= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০", "জানুয়ারী", "ফেব্রুয়ারী", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই",
                                         "আগষ্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর", ":", ",", "", "শনিবার", "রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার",
                                         "বৃহস্পতিবার", "শুক্রবার");

                                        // convert all english char to bangla char
                                        $date_time = str_replace($search_array, $replace_array, $englishDate);

                                    @endphp
                                        {{ $date_time }}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <div class="mu-header-top-right">
                                <nav>
                                    <ul class="mu-top-social-nav">
                                        <li><a class="btn btn-success shine-effect" href="{{ url('under-construction') }}"> <b>ভর্তি আবেদন</b> </a></li>
                                        <li><a href="{{ $institute->facebook ?: '' }}"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="{{ $institute->youtube ?: '' }}"><span class="fa fa-youtube"></span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
