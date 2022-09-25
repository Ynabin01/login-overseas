@extends('layouts.master')
@section('content')
    <!-- Start Subheader -->
    <div class="normal-bg subheader" style="background-image: url('/website/images/subheader.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subheader-content">
                        <h1 class="page-title text-white fw-600">Sales Section</h1>
                        <ul class="custom-flex breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="job_category">Job Category</a></li>
                            <li>Sales Section</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subheader -->

    <!-- Start Portfolio -->
    <section class="project-details section-padding"> 
        <div class="container">
            @if (isset($jobs))
                @foreach ($jobs as $job)
            <div class="row">
                
                <div class="project-head">
                    <ul class="custom-flex details">
                        <li>
                            <h5 class="fw-700">{{ $job->caption}}</h5>
                            <p class="fw-500 fs-12 text-custom-logo">{{ $job->getJob->total_demand}}</p>
                        </li>
                        <li>
                            <img src="{{ $job->banner_image}}" alt="default-img">
                        </li>
                        <li>
                            <h5 class="fw-500">{{ $job->getJob->company_name }}</h5>
                            <p class="fw-500 fs-12"><i class="fa fa-map-marker-alt text-custom-logo"></i> {{ $job->getJob->country }}</p>
                        </li>
                    </ul>
                    <div class="action">
                        <a href="#" id="btnOpenForm" class="theme-btn btn-blue">Apply Now<i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
               
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
                @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
