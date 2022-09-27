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

    <!-- Apply pop up form -->
    <div class="form-popup-bg">
        <div class="form-container">
            <button id="btnCloseForm" class="close-button fa fa-times-circle"></button>
            <h4>Application Form</h4>
            <p class="text-custom-logo">Cashier Urgently Needed</p>
            <form method="POST" action="{{ route('contactstore') }}" enctype='multipart/form-data'>
                @csrf
                <div class="form-group">
                    <label for="first_name">Full Name</label>
                    <input name="first_name" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="message">Applying For</label>
                    <input name="message" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="email">E-Mail Address</label>
                    <input name="email" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input name="number" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="file">Upload your CV</label>
                    <input name="file" type="file" class="form-control file-upload">
                </div>
                <button>Submit</button>
            </form>
        </div>
    </div>
@endsection
