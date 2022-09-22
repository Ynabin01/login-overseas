@extends('layouts.master')
@section('content')

<!-- Start Subheader -->
 <div class="normal-bg subheader" style="background-image: url('website/images/subheader.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="subheader-content">
                    <h1 class="page-title text-white fw-600">Message From Finance Director</h1>
                    <ul class="custom-flex breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>FD Message</li>
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
                    <!-- post quote -->
                    <blockquote class="bg-orange">
                        <cite class="text-black">By Finance Director</cite>
                        <h3 class="fw-600 text-blue">Deepak Sharma</h3>
                    </blockquote>
                    <p class="fw-500 mb-xl-10">Login Int'l Overseas Recruitment Pvt. Ltd. is a government registered
                        recruitment agency in Nepal providing all kind of manpower management services from Nepal to
                        Saudi Arabia, Dubai, Kuwait, Bahrain, Oman, Qatar, Malaysia and other Gulf Countries. </p>
                    <p class="fw-500 mb-xl-10">Despite the many recruitment agencies in Nepal, Login Int'l Overseas
                        Recruitment Pvt. Ltd. realized that there was a need for a professionally managed
                        recruitment agency and thus the company came into existence. </p>
                    <figure class="image-alignment left">
                        <img src="website/images/team-4.jpg" alt="">
                    </figure>
                    <p class="fw-500 mb-xl-10">The company’s overall philosophy has been to strive for excellence
                        and become the primary provider of competitive, efficient and reliable Manpower resource
                        solutions.</p>
                    <p class="fw-500 mb-xl-10">The high regard, in which Login Int'l Overseas Recruitment Pvt. Ltd.
                        is held today, bears the testimony to the measure of success that the company has been able
                        to achieve. Login Int'l Overseas Recruitment Pvt. Ltd. </p>
                    <p class="fw-500 mb-xl-10">always pay careful attention during the selection and recruitment
                        process and ensure that the professionals recruited by us have a productive and positive
                        attitude.As a professionally managed recruitment agency we focus on the
                        growing needs of companies abroad.</p>
                    <p class="fw-500 mb-xl-10"> We provide highly customized and personalized Human
                        Resource Consultancy to our clients and candidates as well as try to build a courteous as
                        well as professional relationship with all of them.</p>
                    <p class="fw-500 mb-xl-10">We’re always prepared to accept such challenges by integrating each
                        and every type of activities involved in the placement job and bringing them under one roof.
                    </p>
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
                                <a href="message" class="active">Chairman Message</a>
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
