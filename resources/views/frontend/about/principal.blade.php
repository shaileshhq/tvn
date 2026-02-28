@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Principal Message - Tulsi Vidya Niketan</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="active">Principal Message</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <!-- Start about us -->
    <section id="mu-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-us-area">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="card">
                                    @if (websiteSetupValue('principal_image'))
                                        <img src="{{ asset('storage/website_setup/' . websiteSetupValue('principal_image')) }}"
                                            class="card-img-top" alt="...">
                                    @endif
                                    <div class="card-body">
                                        @if (websiteSetupValue('principal_name'))
                                            <h5 class="card-title">
                                                {{ websiteSetupValue('principal_name') }}
                                            </h5>
                                        @endif
                                        <p class="card-text"><b>Principal Message</b><br>
                                            Tulsi Vidya Niketan School</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="mu-about-us-left">
                                    <!-- Start Title -->
                                    <div class="mu-about">
                                        <h2>PRINCIPAL MESSAGE</h2>
                                    </div>
                                    <!-- End Title -->
                                    @if (websiteSetupValue('principal_content'))
                                        {{ websiteSetupValue('principal_content') }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about us -->
@endsection
