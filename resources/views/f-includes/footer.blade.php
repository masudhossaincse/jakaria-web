<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
        <div class="container">
            <div class="mu-footer-top-area">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="mu-footer-widget">
                            <h4>অভ্যন্তরীণ ই-সেবাসমূহ</h4>
                            <ul>
                                @foreach($service as $ser)
                                    {{--                                    <a class="btn btn-block btn-info" href="{{ $ser->link ?: '#' }}" target="_blank">{{ $ser->title ?: '' }}</a>--}}
                                    <li>
                                        <a href="{{ $ser->link ?: '#' }}" target="_blank">{{ $ser->title ?: '' }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="mu-footer-widget">
                            <h4>গুরুত্বপূর্ণ লিংক</h4>
                            <ul>
                                @foreach($link as $li)
                                    <li>
                                        <a class="btn btn-link" href="{{ $li->link ?: '#' }}"
                                           target="_blank">{{ $li->title ?: '' }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="mu-footer-widget">
                            <h4>ঠিকানা</h4>
                            <address>
                                <p>{{ $institute->name_bn ?: '' }}</p>
                                <p> {{ $institute->address ?: '' }}</p>
                                <p>মোবাইল নং- {{ $institute->contact ?: '' }}</p>
{{--                                <p>ওয়েবসাইট: <a style="color: white;" href="https://www.koyraucakm.edu.bd ">www.koyraucakm.edu.bd</a></p>--}}
                                <p>ইমেইল: <a style="color: white;" href="mailto:{{ $institute->email ?: '' }}">{{ $institute->email ?: '' }}</a></p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="mu-footer-bottom-area">
                <p>Copyright &copy; {{ now()->year }} {{ $institute->name_en ?: '' }}. All Rights Reserved. Developed by <a href="#" rel="nofollow">Masud Hossain</a></p>
            </div>
        </div>
    </div>
    <!-- end footer bottom -->
</footer>
