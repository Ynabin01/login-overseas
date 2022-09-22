
@extends('layouts.master')
@section('content')

<!-- Start Subheader -->
<div class="normal-bg subheader" style="background-image: url('website/images/subheader.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="subheader-content">
                    <h1 class="page-title text-white fw-600">Message From Managing Director</h1>
                    <ul class="custom-flex breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>MD Message</li>
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
                        <cite class="text-black">By Managing Director</cite>
                        <h3 class="fw-600 text-blue">Rajan Pokharel</h3>
                    </blockquote>
                    <p class="fw-500 mb-xl-10">The world as we know it is constantly changing, and so are
                        organizational needs and resources. At Login Int'l Overseas Recruitment Pvt. Ltd. </p>
                    <p class="fw-500 md-xl-10">We understand the dynamic nature of changing industries, and are
                        quick to adapt to them. Therefore, in the little over a decade of our existence, we have
                        been able to deliver, through excellence and expertise satisfying results to over fifty
                        companies sprawled over more than twelve countries.</p>
                    <p class="fw-500 md-xl-10">The strategic advantage of Login Int'l has always been in identifying
                        the needs of other organizations, and the right kind of resources they would require to
                        accomplish their organizational goals - be it short term, medium term, or long term. </p>
                    <figure class="image-alignment left">
                        <img src="website/images/team-5.jpg" alt="">
                    </figure>
                    <p class="fw-500 mb-xl-10">We have demonstrated our ability to cater to different kinds of
                        industries, and through effective and efficient solutions, have been able to successfully
                        gain their trust.</p>
                    <p class="fw-500 mb-xl-10">To our partners, we are thankful to you for your trust in us. We
                        continue to serve you with the same enthusiasm and expertise, as we have done to you. To
                        those, seeking new and innovative solutions to integrate with their firm, you can be assured
                        that you are in the most trusted hands with Login Int'l Overseas Recruitment Pvt. Ltd. </p>
                    <p class="fw-500 mb-xl-10">Our professional team, which comprises of over twenty people, is
                        equipped with the know-how of the industry, and is directly connected with the human
                        resources at the ground level</p>
                    <p class="fw-500 mb-xl-10">Our assessment criteria of workers, be it in any field, comprises of
                        several tests which helps us assess the potential contribution they can bring to your firm.
                    </p>
                    <p class="fw-500 mb-xl-10">And only when we have the right person for the right job, or the right solution for any facilities problem, do we stop our quest.</p>
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
