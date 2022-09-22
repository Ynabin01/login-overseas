
@extends('layouts.master')
@section('content')

 <!-- Start Subheader -->
 <div class="normal-bg subheader" style="background-image: url('website/images/subheader.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="subheader-content">
                    <h1 class="page-title text-white fw-600">Get In Touch</h1>
                    <ul class="custom-flex breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Contact Us</li>
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
                   <div class="comment-form">
                        <h3 class="fw-600 mb-xl-40">Seand a Message</h3>
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-box form-group">
                                        <input type="text" name="#" class="form-control form-control-custom" placeholder="your name">
                                        <span class="icon text-blue">
                                            <i class="fal fa-user"></i>
                                        </span>
                                    </div>
                                    <div class="form-box form-group">
                                        <input type="email" name="#" class="form-control form-control-custom" placeholder="your email">
                                        <span class="icon text-blue">
                                            <i class="fal fa-envelope"></i>
                                        </span>
                                    </div>
                                    <div class="form-box form-group">
                                        <input type="text" name="#" class="form-control form-control-custom" placeholder="your phone">
                                        <span class="icon text-blue">
                                            <i class="fal fa-phone"></i>
                                        </span>
                                    </div>
                                    <div class="form-box form-group">
                                        <textarea name="#" rows="6" class="form-control form-control-custom" placeholder="Type your Message..."></textarea>
                                        <span class="icon text-blue">
                                            <i class="fal fa-pencil-alt"></i>
                                        </span>
                                    </div>
                                    <button type="submit" class="theme-btn btn-blue">Send<i class="fal fa-plus"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.1986057534496!2d85.335121!3d27.742019599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191e3f1a5589%3A0xa7a742707adbd3b9!2sLogin%20Int%60l%20Overseas%20Recruitment%20P.%20Ltd%20Nepal!5e0!3m2!1sen!2snp!4v1656936105972!5m2!1sen!2snp" width="100%" height="310" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <aside class="col-lg-4">
                <div class="sidebar">
                        <div class="contact-admin-box mb-xl-30">
                            <div class="icon text-blue">
                                <i class="fal fa-map"></i>
                            </div>
                            <h3 class="fw-600">Office Address</h3>
                            <a href="https://goo.gl/maps/ugKe7H1KXjSUz6X6A" target="_blank" class="fw-500 fs-16">basundhara 3, Kathmandu</a>
                        </div>
                        <div class="contact-admin-box mb-xl-30">
                            <div class="icon text-blue">
                                <i class="fal fa-phone"></i>
                            </div>
                            <h3 class="fw-600">Phone Number</h3>
                            <a href="tel:015911074" class="fw-500 fs-16">+977-1-5911074</a> / <a href="tel:015911075" class="fw-500 fs-16">75</a>
                        </div>
                        <div class="contact-admin-box">
                            <div class="icon text-blue">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <h3 class="fw-600">Our Mail</h3>
                            <a href="mailto:admin@loginoverseas.com" class="fw-500 fs-16">admin@loginoverseas.com</a>
                        </div>

                </div>
            </aside>
        </div>
    </div>
</section>
<!-- End News -->
@endsection
