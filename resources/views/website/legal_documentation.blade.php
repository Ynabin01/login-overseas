

@extends('layouts.master')
@section('content')

<!-- Start Subheader -->
<div class="normal-bg subheader" style="background-image: url('website/images/subheader.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="subheader-content">
                    <h1 class="page-title text-white fw-600">Legal Documentation</h1>
                    <ul class="custom-flex breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Legal Documentation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Subheader -->
<!-- Start News -->
<section class="section-padding bg-light-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="post-details mb-md-80">
                    <object data="website/LICENCE.pdf"
            width="100%"
            height="750px"></object>
                </div>
            </div>
            <aside class="col-lg-4">
                <div class="sidebar">
                    <div class="widget categories-widget mb-xl-30">
                        <ul class="custom">
                            <li>
                                <a href="inner">About Company</a>
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
                                <a href="legal_documentation" class="active">Legal Documentation</a>
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
