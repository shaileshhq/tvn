@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>News Detail Tulsi Vidya Niketan (TVN)</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="active">News Detail</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="mu-course-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-course-content-area">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- start course content container -->
                                <div class="mu-course-container mu-blog-single">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <article class="mu-blog-single-item">
                                                <figure class="mu-blog-single-img">
                                                    <a href="#"><img alt="img"
                                                            src="{{ asset('storage/' . $news_data->image) }}"
                                                            onerror="this.onerror=null; this.src='{{ asset('assets/img/placeholder.png') }}'"></a>
                                                </figure>
                                                <div class="mu-blog-description">
                                                    <blockquote>
                                                        <p>{{ $news_data->title }}</p>
                                                    </blockquote>
                                                    <hr>
                                                    <p>{!! $news_data->description !!}</p>
                                                </div>
                                                <!-- start blog social share -->
                                                {{-- <div class="mu-blog-social">
                                                    <ul class="mu-news-social-nav">
                                                        <li>SOCIAL SHARE :</li>
                                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-google-plus"></span></a>
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                                <!-- End blog social share -->
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <!-- end course content container -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
