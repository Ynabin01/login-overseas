@extends('layouts.master')
@section('content')
    <!-- Start Subheader -->
    <div class="normal-bg subheader" style="background-image: url('website/images/subheader.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subheader-content">
                        <h1 class="page-title text-white fw-600">Gallery</h1>
                        <ul class="custom-flex breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subheader -->
    @if (isset($photos))
    <section class="section-padding">
        <div class="container">
            <div class="gallery-view">
                <div class="row" id="lightgallery">
                    @foreach ($photos as $photo)
                    <div class="item col-md-4" data-src="/uploads/photo_gallery/{{$photo->file}}"
                        data-sub-html="<h4>{{$photo->caption}}</h4>">
                        <a href="">
                            <img src="/uploads/photo_gallery/{{$photo->file}}" alt="Login Int'l" />
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

@endsection
