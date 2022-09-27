@extends('layouts.master')
@section('content')
@include('website.breadcrumb')
    <!-- Start Services -->
    <section class="section-padding">
        <div class="top-about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @foreach ($services as $key=>$service)
                            <div class="about-wrap-box mb-xl-30">
                                <div class="row no-gutters">
                                    @if($key%2==0)
                                        <div class="col-lg-6">
                                            <div class="left-side full-height">
                                                <img src="{{$service->banner_image}}" class="image-fit" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="right-side">
                                                <div class="section-header left-heading">
                                                    <div class="section-heading">
                                                        <h4 class="text-blue fw-700">{{$service->caption}}</h4>
                                                        <p class="desc">{{$service->short_content}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($key%2!=0)
                                        <div class="col-lg-6">
                                            <div class="right-side">
                                                <div class="section-header left-heading">
                                                    <div class="section-heading">
                                                        <h4 class="text-blue fw-700">{{$service->caption}}</h4>
                                                        <p class="desc">{{$service->short_content}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="left-side full-height">
                                                <img src="{{$service->banner_image}}" class="image-fit" alt="">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div> 
                        @endforeach                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services-->
@endsection