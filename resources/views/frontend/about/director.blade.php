@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Our Secretary & Treasurer - Tulsi Vidya Niketan</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="active">Director</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <!-- Start about us -->
    <section id="mu-about-us">
        @if (websiteSetupValue('director_content') || websiteSetupValue('director_name') || websiteSetupValue('director_image'))
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-about-us-area">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-12">
                                    <div class="mu-about-us-left">
                                        <!-- Start Title -->
                                        <div class="mu-about">
                                            <h2>Secretary & Treasurer Message</h2>
                                        </div>
                                        <!-- End Title -->
                                        @if (websiteSetupValue('director_content'))
                                            {{ websiteSetupValue('director_content') }}
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-12">
                                    <div class="card">
                                        @if (websiteSetupValue('director_image'))
                                            <img src="{{ asset('storage/website_setup/' . websiteSetupValue('director_image')) }}"
                                                class="card-img-top" alt="...">
                                        @endif
                                        <div class="card-body">
                                            @if (websiteSetupValue('director_name'))
                                            <p class="text-danger my-2">Secretary & Treasurer</p>
                                                <h2 class="card-title">
                                                    {{ websiteSetupValue('director_name') }}
                                                </h2>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>
    <!-- End about us -->
@endsection
