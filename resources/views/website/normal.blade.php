@extends('layouts.master')
@section('content')
    <!-- Start News -->
    <section class="section-padding bg-light-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-details mb-md-80">
                        <!-- Details -->

                        <p class="fw-500">{{ $normal->short_content}} </p>
                        <!-- post image -->
                        <div class="post-image animate-img">
                            <a href="#">
                                <img src="{{ $normal->banner_image }}" class="image-fit" alt="">
                            </a>
                        </div>
                           <p class="fw-500 mb-xl-40"> {{ $normal->long_content}} </p>
                    </div>
                </div>
                <aside class="col-lg-4">
                    <div class="sidebar">
                        <div class="widget categories-widget mb-xl-30">
                            <ul class="custom">
                                <li>
                                    <a href="inner" class="active">About Company</a>
                                </li>
                                <li>
                                    <a href="message">Chairman Message</a>
                                </li>
                                <li>
                                    <a href="team">Our Team</a>
                                </li>
                                <li>
                                    <a href="chart">Organization Chart</a>
                                </li>
                                <li>
                                    <a href="legal_documentation">Legal Documentation</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget popular-feeds mb-xl-30">
                            <h5 class="widget-title text-blue">Popular Jobs</h5>
                            <div class="popular-feed-loop">
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="job_list">Bank and Financial</a></h6>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="job_list">Medical / Health</a></h6>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="job_list">Construction</a></h6>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="job_list">Hospitality Sector</a></h6>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="job_list">IT Sector</a></h6>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="job_list">Educational</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- End News -->
@endsection
