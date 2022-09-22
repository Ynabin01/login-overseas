<section class="counter-sec-2 count-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="counter-box">
                    <div class="row">
                        @if (isset($statistics))
                            @foreach ($statistics as $statistic)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="counter-with-icon mb-md-40">
                                        <div class="icon text-white">
                                            <i class="flaticon-remote"></i>
                                        </div>
                                        <div class="counter-text">
                                            <span class="count text-white">{{ $statistic->short_content }}</span><span><i
                                                    class="fal fa-plus text-white"></i></span>
                                            <p class="no-margin fw-500 text-white">{{ $statistic->caption }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
