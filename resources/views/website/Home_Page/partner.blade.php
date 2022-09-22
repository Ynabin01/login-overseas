<section class="brand-sec">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="brand-slider row">
                    @if (isset($partners))
                        @foreach ($partners as $partner)
                            <div class="slide-item col-12">
                                <a href="#" class="brand-box">
                                    <img src="{{ $partner->banner_image }}" class="image-fit" alt="">
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
