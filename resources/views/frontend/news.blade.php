@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>News</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="active">News</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <!--start News section -->
    <section id="tvn-news">
        <div class="container">
            <div class="row">
                @foreach ($news_list as $news)
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card mb-3" style="max-width: 600px;">
                            <div class="card-body">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('storage/' . $news->image) }}"
                                            onerror="this.onerror=null; this.src='{{ asset('assets/img/placeholder.png') }}'"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="line-clamp">{{ $news->title }}</h4>
                                                <div class="line-clamp">{!! $news->description !!}</div>
                                                <div class="calendar">
                                                    <p><i class="bi bi-calendar3"></i> {{ dateFormat($news->created_at) }}
                                                    </p>
                                                    <div class="button-end">
                                                        <a href="{{ route('front.news-detail', $news->slug) }}"
                                                            class="btn btn-warning news-btn">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End News Section-->
@endsection
