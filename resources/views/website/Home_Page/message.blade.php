<div class="quote-sec style-2 p-relative">
    <div class="container">
        <div class="row">
            
                    <div class="col-12">
                        <div class="quote-box bg-blue">
                            <div class="row align-items-end justify-content-between">
                                <div class="col-xl-5 col-lg-6">
                                    <img src="{{ $message->banner_image }}" class="image-fit quote-img" alt="">
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="quote-text">
                                        <div class="section-heading">
                                            <h6 class="text-white mb-xl-10 sub-heading">
                                                <span>{{ $message->caption }}</span>
                                            </h6>
                                            <h4 class="text-white fw-700 title-small">
                                                {{ $message->short_content }}<span class="text-custom-logo">.</span>
                                            </h4>
                                        </div>
                                        <p class="text-white">{{ $message->long_content }}</p>
                                        <a href="message" class="text-white">Read More <i class="fal fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             
        </div>
    </div>
</div>
