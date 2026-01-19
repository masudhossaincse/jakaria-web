<section id="mu-about-us" style="background-color: rgba(211,211,211,0.28); padding: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="background-color: white; border: 1px solid rgba(128,128,128,0.25); border-top: 5px solid #01bafd; height: 350px;">
                    <div class="card-title">
                        <h4 style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: bold; padding: 5px;">অভ্যন্তরীণ ই-সেবাসমূহ</h4>
                    </div>
                    <hr>
                    <div class="card-body">
                        <ul>
                            <li>
                                @foreach($service as $ser)
                                    <a class="btn btn-block btn-info" href="{{ $ser->link ?: '#' }}" target="_blank">{{ $ser->title ?: '' }}</a>
                                @endforeach
{{--                                <a class="btn btn-block btn-info" href="https://www.ebmeb.gov.bd/index.php?type=esif" target="_blank">ইএসআইএফ (eSIF)</a>--}}
{{--                                <a class="btn btn-block btn-info" href="https://www.ebmeb.gov.bd/index.php?type=eff" target="_blank">ইএফএফ (eFF)</a>--}}
{{--                                <a class="btn btn-block btn-info" href="https://www.ebmeb.gov.bd/index.php?type=ecis" target="_blank">ইসিআইএস (eCIS)</a>--}}
{{--                                <a class="btn btn-block btn-info" href="https://www.ebmeb.gov.bd/index.php?type=etif" target="_blank">ইটিআইএফ (eTIF)</a>--}}
{{--                                <a class="btn btn-block btn-info" href="https://www.ebmeb.gov.bd/index.php?type=erps" target="_blank">ইআরপিএস (eRPS)</a>--}}
                                <a class="btn btn-block btn-info" href="{{ url('login') }}">অ্যাডমিন লগইন (Admin Login)</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="background-color: white; border: 1px solid rgba(128,128,128,0.25); border-top: 5px solid #228305; height: 350px;">
                    <div class="card-title">
                        <h4 style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: bold; padding: 5px;">নোটিশ বোর্ড</h4>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="row" id="notice-board">
                            <div class="notice-board-bg">
                                <div id="notice-board-ticker">
                                    <ul class="caption">
                                        @foreach($notices as $notice)
                                            <li>
                                                <a href="{{ url('notice-single/'. $notice->id) }}" title="{{ $notice->title ?: '-' }}">
                                                    {!! Str::words(strip_tags(($notice->title ?: '-')), 10, ' ... ') !!}
                                                </a>
                                            </li>
                                        @endforeach
                                     </ul>
                                    <a class="btn btn-light float-right mr-3" href="{{ url('notice-all') }}" title="all Notice">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="background-color: white; border: 1px solid rgba(128,128,128,0.25); border-top: 5px solid #f80a25; height: 350px;">
                    <div class="card-title">
                        <h4 style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-weight: bold; padding: 5px;">গুরুত্বপূর্ণ লিংক</h4>
                    </div>
                    <hr>
                    <div class="card-body">
                        <ul>
                            <li>
                                @foreach($link as $li)
                                    <a class="btn btn-link" href="{{ $li->link ?: '#' }}" target="_blank">{{ $li->title ?: '' }}</a>
                                @endforeach
{{--                                <a class="btn btn-link" href="https://iau.edu.bd/">ইসলামি আরবি বিশ্ববিদ্যালয়</a>--}}
{{--                                <a class="btn btn-link" href="https://bmeb.gov.bd/">বাংলাদেশ মাদ্রাসা শিক্ষা বোর্ড</a>--}}
{{--                                <a class="btn btn-link" href="https://www.moedu.gov.bd/">শিক্ষা মন্ত্রণালয়</a>--}}
{{--                                <a class="btn btn-link" href="https://www.banbeis.gov.bd/webnew/">BANBEIS(ব্যানবেইস)</a>--}}
{{--                                <a class="btn btn-link" href="https://bangladesh.gov.bd/index.php">National Web Portal</a>--}}
{{--                                <a class="btn btn-link" href="https://new.dhakaeducationboard.gov.bd/">Dhaka Education Board</a>--}}
{{--                                <a class="btn btn-link" href="http://www.nctb.gov.bd/">NCTB(এনসিটিবি)</a>--}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
