@extends('layouts.master')
@section('content')
    <!-- Start News -->
    <section class="section-padding bg-light-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-details mb-md-80">
                        <h2 class="text-blue">
                           
                        </h2>
                        <!-- Details -->
                        
                        <p class="fw-500">{{$normal->short_content}}</p>
                        <!-- post image -->
                        @if(strlen($normal->banner_image)>5)
                            <div class="post-image animate-img">
                                <a href="#">
                                    <img src="{{$normal->banner_image}}" class="image-fit" alt="">
                                </a>
                            </div>
                        @endif
                        {{-- <h3 class="fw-600 text-blue">Mission & Vision</h3> --}}
                        <p class="fw-500 mb-xl-40">@php echo $normal->long_content @endphp </p>
                    </div>
                </div>
                <aside class="col-lg-4">
                    <div class="sidebar">
                        @if(isset($childs) && $childs->count()>0)
                            <div class="widget categories-widget mb-xl-30">
                                <ul class="custom">
                                    @foreach($childs as $child)
                                        <li>
                                            <a href="/{{$slug1->nav_name}}/{{$child->nav_name}}" class="active">{{$child->caption}}</a>
                                        </li>
                                    @endforeach                                
                                </ul>
                            </div>
                        @endif
                        <div class="widget popular-feeds mb-xl-30">
                            <h5 class="widget-title text-blue">Popular Jobs</h5>
                            <div class="popular-feed-loop">
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="job-list.html">Bank and Financial</a></h6>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="job-list.html">Medical / Health</a></h6>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="job-list.html">Construction</a></h6>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="job-list.html">Hospitality Sector</a></h6>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="job-list.html">IT Sector</a></h6>
                                    </div>
                                </div>
                                 <div class="single-popular-feed">
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="job-list.html">Educational</a></h6>
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