<section class="procedure-sec section-padding bg-light-white">
    <div class="container">
        <div class="section-header">
            <div class="section-heading">
                <h6 class="text-blue mb-xl-10 sub-heading"><span>Procedure</span></h6>
                <h3 class="text-black fw-700 title">Job Recruitment<span class="text-blue">.</span></h3>
            </div>
        </div>
        <div class="row">
            @if (isset($jobrecruitment))
                @foreach ($jobrecruitment as $jobreq)
                    <div class="col-lg-2 col-md-3">
                        <div class="choose-us-box style-2 mb-xl-30 mt-xl-30">
                            <div class="top-sec">
                                <div class="icon">
                                    {{ $jobreq->caption }}
                                </div>
                                <h4 class="fw-600 no-margin"> {{ $jobreq->short_content }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
