<section class="section-padding bg-light-white">
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h6 class="text-blue mb-xl-10 sub-heading"><span>Popular</span></h6>
                <h3 class="text-black fw-700 title">Job Categories<span class="text-blue">.</span></h3>
            </div>
        </div>
        <div class="row">
           
            <div class="col-12">
                <div class="service-slider style-2 row">
                @foreach ($job_categories as $category)
                    <div class="col-12 slide-item">
                        <div class="service-block-3">
                            <div class="service-image animate-img">
                                <img src="{{ $category->banner_image }}" class="image-fit" alt="">
                            </div>
                            <div class="service-caption">
                                <div class="left-side">
                                    <h4 class="fw-600 no-margin"><a href="job_list">{{ $category->caption }}</a>
                                </div>
                                <a href="{{ route('JobList', $category->nav_name) }}" class="block-btn">
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                 @endforeach
                </div>
            </div>
        </div>
        <div class="view-button">
            <a href="jobs" class="btn btn-default">View All</a>
        </div>
    </div>
</section>
