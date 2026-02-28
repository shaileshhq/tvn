@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Photo Gallery Tulsi Vidya Niketan (TVN)</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="active">Photo Gallery</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->

    <!-- Start Gallery -->
    <section id="mu-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-gallery-area">
                        <div class="mu-gallery-content">
                            <div class="mu-gallery-body">
                                <ul id="mixit-container" class="row">
                                    @foreach ($gallery_data as $gallery)
                                        <li class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="mu-single-gallery">
                                                <div class="mu-single-gallery-item">
                                                    <div class="mu-single-gallery-img">
                                                        <img alt="img" src="{{ asset('storage/' . $gallery->image) }}">
                                                    </div>
                                                    <div class="mu-single-gallery-info">
                                                        <div class="mu-single-gallery-info-inner">
                                                            <h4>{{ $gallery->title }}</h4>
                                                            <a href="#" class="mu-search-icon fancybox">
                                                                <span class="fa fa-eye"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery -->

    <!-- Start Search Box -->
    <div id="mu-search">
        <button class="mu-search-close"><span class="fa fa-close"></span></button>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-image">
                        <button class="mu-prev"><span class="fa fa-arrow-left"></span></button>
                        <button class="mu-next"><span class="fa fa-arrow-right"></span></button>
                        <img src="" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Box -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
