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
                                <a href="/JobList" class="block-btn">
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

    <!-- Apply pop up form -->
    <div class="form-popup-bg">
        <div class="form-container">
            <button id="btnCloseForm" class="close-button fa fa-times-circle"></button>
            <h4>Application Form</h4>
            <p class="text-custom-logo">Cashier Urgently Needed</p>
            <form action="">
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="">Applying For</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="">E-Mail Address</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="">Upload your CV</label>
                    <input type="file" class="form-control file-upload">
                </div>
                <button>Submit</button>
            </form>
        </div>
    </div>
@endsection
