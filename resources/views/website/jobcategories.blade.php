@extends('layouts.master')
@section('content')
    <!-- Start Portfolio -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                @foreach ($job_categories as $cat)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-block-3">
                            <div class="service-image animate-img">
                                <img src="{{ $cat->banner_image }}" class="image-fit" alt="">
                            </div>
                            <div class="service-caption">
                                <div class="left-side">
                                    <h4 class="fw-600 no-margin"><a href="{{ route('JobList', $cat->nav_name) }}">{{ $cat->caption }}</a>
                                </div>
                                <a href="{{ route('JobList', $cat->nav_name) }}" class="block-btn">
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Portfolio -->

    
@endsection
