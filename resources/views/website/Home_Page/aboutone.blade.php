<section class="aboutus-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-header left-heading">
                    <div class="section-heading">
                        <h6 class="text-blue mb-xl-10 sub-heading"><span>About</span></h6>
                        <h3 class="fw-700 title text-black">{{$about->caption ?? ''}}<span class="text-blue">.</span></h3>
                        <p class="desc fw-500">{{$about->short_content ?? ''}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-side p-relative">
                    <img src="{{$about->banner_image}}" class="image-fit" alt="">
                    <div class="about-counter">
                        <div>
                            <span class="count">{{$about->long_content ?? ''}}</span><span class="text-white">+</span>
                            <p class="no-margin fs-12 text-white">Recruitment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
