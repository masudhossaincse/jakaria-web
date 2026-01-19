<section id="mu-header">
    <div class="row">
        <div class="col-md-2">
            <p style="background-color: #d72412; text-align: center; color: white; font-weight: bold; padding: 5px; margin: 0;">
                সাম্প্রতিক খবর
            </p>
        </div>
        <div class="col-md-10">
            <marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()">
                @foreach($notices as $notice)
                    <span>
                    <a target="_blank" style="font-size:16px; font-weight: bold;" href="{{ url('notice-single/'. $notice->id) }}">
                        {{ $notice->title ?: '-' }}
                    </a>
                </span>
                    <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                @endforeach
            </marquee>
        </div>
    </div>
</section>
