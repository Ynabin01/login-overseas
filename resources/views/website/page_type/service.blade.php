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
                                                <img src="assets/images/consulting-1.jpg" class="image-fit" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="right-side">
                                                <div class="section-header left-heading">
                                                    <div class="section-heading">
                                                        <h4 class="text-blue fw-700">Consulting</h4>
                                                        <p class="desc">We deal with every individual and find their core qualities and forward their necessary documents to employer of the company. People who seek to develop their careers in abroad. We are the obvious choice to consult with. Our team of expert counselors welcomes the candidates with open arms for counseling. On the other hand. We are consulting with companies and industries as well to place qualitative human resources.</p>
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
                                                        <h4 class="text-blue fw-700">Consulting</h4>
                                                        <p class="desc">We deal with every individual and find their core qualities and forward their necessary documents to employer of the company. People who seek to develop their careers in abroad. We are the obvious choice to consult with. Our team of expert counselors welcomes the candidates with open arms for counseling. On the other hand. We are consulting with companies and industries as well to place qualitative human resources.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="left-side full-height">
                                                <img src="assets/images/consulting-1.jpg" class="image-fit" alt="">
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