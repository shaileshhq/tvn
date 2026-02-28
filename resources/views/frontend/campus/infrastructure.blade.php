@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Infrastructure and Facility</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('front.index')}}">Home</a></li>
                            <li class="active">Infrastructure and Facility</li>
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
                            <div class="col-lg-5 col-md-5">
                                <div class="mu-about-us-right">
                                    <img src="{{asset('assets/img/infra.jpg')}}" alt="img">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <div class="mu-about-us-left">
                                    <!-- Start Title -->
                                    <div class="about-title">
                                        <h2>Infrastructure</h2>

                                    </div>
                                    <!-- End Title -->
                                    <p>A vast expanse of 8.1 acres provides a perfect ambience for an aesthetically
                                        chartered school building. The huge space is facilitated with all the modern day
                                        facilities and learning tools. To aid the process of learning we have a science,
                                        math’s and language lab. A library where books span time, space, culture and genre.
                                    </p>
                                    <p>A sound proof auditorium, art and craft room, resource centre for teachers and
                                        indoor-outdoor sports complex. The campus also includes a completely functional and
                                        hygienic cafeteria. The medical room is easily approachable in case of any
                                        emergency. The open lawns are marked with a colorful bonanza of fresh floral bounty.
                                        The space around the buildings have been designed remembering that children not only
                                        learn inside the classroom but also outside.

                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about us -->

    <!--start facilities -->
    <section id="Facilities">
        <div class="container">
            <!-- Start Title -->
            <div class="mu-title">
                <h2>Facilities</h2>
            </div>
            <!-- End Title -->
            <div class="row">
                <div class="wm-service wm-box-service">
                    <ul>
                        <li>
                            <div class="wm-box-service-wrap">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <h6>Sports</h6>
                                <div class="bg"></div>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap">
                                <i class="fa fa-bus" aria-hidden="true"></i>
                                <h6>Transport</h6>
                                <div class="bg"></div>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                <h6>Computer Lab</h6>
                                <div class="bg"></div>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap">
                                <i class="fa fa-compass" aria-hidden="true"></i>
                                <h6>Physics Lab</h6>
                                <div class="bg"></div>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap">
                                <i class="fa fa-times" aria-hidden="true"></i>
                                <h6>Chemistry Lab</h6>
                                <div class="bg"></div>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap">
                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                                <h6>Biology lab</h6>
                                <div class="bg"></div>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap">
                                <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                <h6>Medical Facility</h6>
                                <div class="bg"></div>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap">
                                <i class="fa fa-fire" aria-hidden="true"></i>
                                <h6>Fire Safety</h6>
                                <div class="bg"></div>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <h6>Special classes</h6>
                                <div class="bg"></div>
                            </div>
                        </li>
                        <li>
                            <div class="wm-box-service-wrap">
                                <i class="fa fa-commenting" aria-hidden="true"></i>
                                <h6>Message</h6>
                                <div class="bg"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End facilities -->
@endsection
