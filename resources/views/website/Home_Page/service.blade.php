<section class="section-padding" style="position: relative;">
    <div class="container">
        <div class="lb-big-text text-white">Services</div>
        <div class="row">
            @if (isset($services))
            @foreach ($services as $service)
            <div class="col-lg-3">
                <div class="service-style-2" style="background: url({{ $service->banner_image }}) rgb(37 23 118 / 64%);">
                    <div class="service-content">
                        <h4 class="fw-600 text-white">{{ $service->caption }}</h4>
                        <p class="fw-500 text-white">{{ $service->short_content }}</p>
                        <a href="services" class="underline fw-600 text-white fs-14">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
