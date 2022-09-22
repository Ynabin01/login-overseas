@if(isset($sliders))
<div class="main-slider-section p-relative">
    <div class="main-slider">
        @foreach($sliders as $slider)
        <div class="slide-item">
            <img src="{{$slider->banner_image}}" class="image-fit" alt="">
            <div class="transform-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="banner-content">
                                <h1 class="text-white fw-600 heading-title">{{$slider->caption}}</h1>
                                <p class="no-margin text-white">{{$slider->short_content}}</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif