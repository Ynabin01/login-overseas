<section class="section-padding bg-light-white">
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h6 class="text-blue mb-xl-10 sub-heading"><span>Countries</span></h6>
                <h3 class="text-black fw-700 title">we serve<span class="text-blue">.</span></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="service-slider row">
                    @if (isset($weserves))
                        @foreach ($weserves as $weserve)
                            <div class="slide-item col-12">
                                <div class="service-style-1">
                                    <div class="service-image animate-img">
                                        <a href="#">
                                            <img src="{{ $weserve->banner_image ?? '' }}" class="image-fit"
                                                alt="">
                                            <h5 class="fw-700 mb-1">{{ $weserve->caption }}</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>
