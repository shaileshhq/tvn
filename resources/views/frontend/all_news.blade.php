@extends('frontend.layout.app')
@section('content')
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;
            position: relative;
            margin-bottom: 20px;
            background:#fafafa;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
        }

        .news-overlay {
            transition: opacity 0.3s ease;
        }

        .position-relative:hover .news-overlay {
            opacity: 1;
        }

        .fixed-image {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            padding: 10px;
        }

        .card-title {
            color: #003d69;
            font-weight: 600;
            font-size: 16px;
            letter-spacing: 0.5px;
        }

        .btn-warning {
            padding: 10px;
            border-radius: 0;
            margin-top: 10px;
        }
    </style>
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>All News</h2>
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

    <!-- Start News  -->
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row mu-contact-content">
                        @foreach ($news as $data)
                            <div class="col-lg-4 col-md-12 d-flex align-items-stretch">
                                <div class="card shadow-lg border-0 rounded-4 overflow-hidden w-100">
                                    <div class="position-relative">
                                        <img class="card-img-top fixed-image" src="{{ asset('storage/' . $data->image) }}"
                                            onerror="this.onerror=null; this.src='{{ asset('assets/img/placeholder.png') }}'"
                                            alt="News Image">
                                    </div>
                                    <div class="card-body d-flex flex-column p-4">
                                        <h5 class="card-title fw-bold text-dark">{{ $data->title }}</h5>
                                        <div class="line-camp">
                                            <p class="card-text text-muted flex-grow-1">{!! $data->description !!}</p>
                                        </div>
                                        <a href="{{ route('front.news-detail', $data->slug) }}"
                                            class="btn btn-warning mt-auto w-100">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News  -->
@endsection
