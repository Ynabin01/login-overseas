@php
$normal_gallary_notice = App\Models\Navigation::query()
    ->where('nav_category', 'Main')
    ->where('page_type', 'Normal')

    ->orderBy('position', 'ASC')
    ->get();

$menus = App\Models\Navigation::query()
    ->where('nav_category', 'Main')
    ->where('page_type', '!=', 'Job')
    ->where('page_type', '!=', 'Notice')
    ->where('parent_page_id', 0)
    ->where('page_status', '1')
    ->orderBy('position', 'ASC')
    ->get();
$global_setting = App\Models\GlobalSetting::all()->first();
if (isset($normal)) {
    $seo = $normal;
} elseif (isset($job)) {
    $seo = $job;
}

@endphp

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="#">
    <meta name="description" content="#">

    <!-----SEO--------->

    <title>{{ $seo->page_titile ?? $global_setting->page_title }}</title>
    <meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
    <meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="{{ $global_setting->site_name ?? '' }}">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
    <meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
    <meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
    <meta property="twitter:image"
        content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

    <!-----END SEO------->


    <title>Login Int`l Overseas Recruitment Pvt. Ltd</title>
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{{ $global_setting->favicon }}">
    <!-- Plugin -->
    <link href="/website/css/plugin.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="/website/css/style.css" rel="stylesheet">
    <!-- Custom Responsive -->
    <link href="/website/css/responsive.css" rel="stylesheet">
    <!-- place -->
</head>

<body>

    <body>
        @if (Session::has('contact'))
            <script>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Sucessfully Applyed !!',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
        @endif


        <!-- Start Header -->
        <header class="header header-3">
            <!-- topbar -->
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-sm-10">
                            <ul class="custom-flex left-side">
                                <li>
                                    <a href="tel:{{ $global_setting->phone }}" class="text-blue"><i class="fa fa-phone"
                                            aria-hidden="true"></i>
                                        {{ $global_setting->phone }}</a>
                                    <a href="tel:977-1-5911074" class="text-blue">/75</a>
                                </li>
                                <li>
                                    <a href="mailto:admin@loginoverseas.com" class="text-blue"><i class="fa fa-envelope"
                                            aria-hidden="true"></i> {{ $global_setting->site_email }}</a>
                                </li>
                                <li>
                                    <a href="https://goo.gl/maps/ugKe7H1KXjSUz6X6A" target="_blank" class="text-blue"><i
                                            class="fa fa-map-marker" aria-hidden="true"></i>
                                        {{ $global_setting->website_full_address }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-sm-2">
                            <div class="right-side">
                                <ul class="custom-flex">
                                    <li>
                                        <a href="{{ $global_setting->facebook ?? '' }}" target="_blank"
                                            class="text-blue">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $global_setting->twitter ?? '' }}" target="_blank"
                                            class="text-blue">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $global_setting->linkedin ?? '' }}" target="_blank"
                                            class="text-blue">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $global_setting->extra_one ?? '' }}" class="text-blue">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- navigation -->
            <div class="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-nav">
                                <div class="logo">
                                    <a href="/">
                                        <img src="/uploads/icons/{{ $global_setting->site_logo }}" class="image-fit"
                                            alt="">
                                    </a>
                                </div>
                                <nav>
                                    <ul class="custom-flex main-menu">
                                        <li class="menu-item">
                                            <a href="index.html">Home</a>
                                        </li>
                                        @foreach ($menus as $menu)
                                            <li
                                                @if ($menu->childs->count() > 0) class ="menu-item menu-item-has-children" @endif>
                                                <a
                                                    href="@if ($menu->nav_name == 'about') # @else /{{ $menu->nav_name }} @endif">{{ $menu->caption }}
                                                </a>
                                                @if ($menu->childs->count() > 0)
                                                    <ul class="custom sub-menu">
                                                        @php $submenus = $menu->childs; @endphp

                                                        @foreach ($submenus as $sub)
                                                            <li class="menu-item">
                                                                <a
                                                                    href="/{{ $menu->nav_name }}/{{ $sub->nav_name }}">{{ $sub->caption }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                                {{-- <ul class="custom-flex main-menu">

                                        <li class="menu-item">
                                            <a href="/">Home</a>
                                        </li>
                                           @foreach ($menus as $menu)
                                            @php $submenus = $menu->childs; @endphp

                                            <li class="menu-item menu-item-has-children" @if (isset($slug_detail) && $slug_detail->nav_name == $menu->nav_name)  @endif>
                                                <a  @if ($submenus->count() > 0) href="#" @else href="{{ route('category', $menu->nav_name) }}" @endif>{{ $menu->caption }}</a>
                                                @if ($submenus->count() > 0)
                                                <ul class="custom sub-menu">
                                                    @foreach ($submenus as $sub)
                                                    <li class="menu-item">
                                                        <a  href="{{ route('subcategory', [$menu->nav_name, $sub->nav_name]) }}">{{ $sub->caption }}</a>
                                                    </li>
                                                    @endforeach


                                                </ul>
                                                @endif
                                            </li>

                                        @endforeach
                                    </ul> --}}



                                {{-- <li class="menu-item">
                                    <a href="/">Home</a>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">About Us</a>
                                    <ul class="custom sub-menu">
                                        <li class="menu-item">
                                            <a href="inner">About Company</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="team.html">Our Team</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="legal-documentation.html">Legal Documents</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="message.html">Message From Chairman</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="message-md.html">Message From MD</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="message-fd.html">Message From FD</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="chart.html">Organization Chart</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="service.html">Services</a>
                                </li>
                                <li class="menu-item">
                                    <a href="job-category.html">Job</a>
                                </li>
                                <li class="menu-item">
                                    <a href="gallery.htm">Gallery</a>
                                </li>
                                <li class="menu-item">
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul> --}}

                                </nav>
                                <div class="nav-right">
                                    <a href="#" class="theme-btn btn-white-border">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body-overlay" id="body-overlay"></div>
            </div>
            <!-- Mobile header -->
            <div class="mobile-header style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-header-wrap">
                                <div class="logo">
                                    <a href="/">
                                        <img src="/uploads/icons/{{ $global_setting->site_logo }}" class="image-fit"
                                            alt="">
                                    </a>
                                </div>
                                <div class="hamburger-btn">
                                    <div class="menu-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->

        @yield('content')
        <!---------------------- Start Slider ------------------->

        <!---------------------- Start About ---------------------->

        <!---------------------- Start Statistics ----------------->

        <!-----------------------Start Job Categories home ----------->

        <!---------------------- Start  message ---------------------->

        <!---------------------- Start Country we serve--------------->

        <!---------------------- Start Homeservices ----------------------->

        <!---------------------- Start Procedure Job Recruitment.---------->

        <!---------------------- Start Partner-------------------------->

        <!-- Start Brochure -->
        <div class="brochure">
            <a href="#"><i class="fa fa-file-download" aria-hidden="true"></i> Brochure</a>
        </div>
        <!-- End Brochure -->

        <!-- Start Footer -->
        <footer class="section-padding-top bg-dark-blue footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="ft-logo mb-lg-80">
                            <a href="/">
                                <img src="/uploads/icons/{{ $global_setting->site_logo }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widgets mb-sm-10">
                            <h5 class="fw-600">About Us<span class="text-white">.</span></h5>
                            <ul class="custom">
                                <li>
                                    <a href="inner">About Company</a>
                                </li>
                                <li>
                                    <a href="legal_documentation">Legal Documents</a>
                                </li>
                                <li>
                                    <a href="team">Board Member</a>
                                </li>
                                <li>
                                    <a href="chart">Organization Chart</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widgets mb-sm-10">
                            <h5 class="fw-600">Usefull Links<span class="text-white">.</span></h5>
                            <ul class="custom">
                                <li>
                                    <a href="job_category">Job</a>
                                </li>
                                <li>
                                    <a href="gallery">Gallery</a>
                                </li>
                                <li>
                                    <a href="service">Services</a>
                                </li>
                                <li>
                                    <a href="contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widgets mb-xs-10">
                            <h5 class="fw-600">Get in Touch<span class="text-white">.</span></h5>
                            <ul class="custom">
                                <li>
                                    <a href="https://goo.gl/maps/ugKe7H1KXjSUz6X6A" target="_blank"
                                        class="text-blue">
                                        {{ $global_setting->website_full_address }}</a>
                                </li>
                                <li>
                                    <a href="mailto:{{ $global_setting->site_email }}"
                                        class="text-blue">{{ $global_setting->site_email }}</a>
                                </li>
                                <li>
                                    <a href="tel:{{ $global_setting->phone }}"
                                        class="text-blue">{{ $global_setting->phone }}</a>
                                </li>
                                <li>
                                    <a href="tel:{{ $global_setting->phone_ne }}"
                                        class="text-blue">{{ $global_setting->phone_ne }}</a>
                                </li>
                            </ul>
                            <ul class="custom-flex ft-social">

                                <li>
                                    <a href="{{ $global_setting->facebook ?? '' }}" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $global_setting->twitter ?? '' }}" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $global_setting->linkedin ?? '' }}" target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $global_setting->extra_one ?? '' }}" class="text-white">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p class="text-white fw-500">© 2022 Login Int`l Overseas Recruitment Pvt. Ltd, All Rights Reserved.
                        Developed by <a href="https://radiantnepal.com/" target="_blank">Radiant Infotech</a></p>
                </div>
            </div>
        </footer>

        <div id="back-top" class="back-top">
            <a href="#top"><i class="fal fa-long-arrow-up"></i></a>
        </div>
        <!-- End Footer -->

        <!-- Place all Scripts Here -->
        <!-- jQuery -->
        <script src="/website/js/jquery.min.js"></script>
        <!-- Popper -->
        <script src="/website/js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="/website/js/bootstrap.min.js"></script>
        <!-- Inview -->
        <script src="/website/js/jquery.inview.min.js"></script>
        <!-- Slick Slider -->
        <script src="/website/js/slick.min.js"></script>
        <!-- Nice Select -->
        <script src="/website/js/jquery.nice-select.js"></script>
        <!-- Range Slider -->
        <script src="/website/js/jquery-ui.js"></script>
        <!-- Morris Chart -->
        <script src="/website/js/raphael-min.js"></script>
        <script src="/website/js/morris.min.js"></script>
        <!-- Custom Js -->
        <script src="/website/js/custom.js"></script>
        <!-- /Place all Scripts Here -->
    </body>

</html>
