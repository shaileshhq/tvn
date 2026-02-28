@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Event Details -(TVN)</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="active">Event Details</li>
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
                            <div class="col-md-9">
                                <!-- start course content container -->
                                <div class="mu-course-container mu-blog-single">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <article class="mu-blog-single-item">
                                                <figure class="mu-blog-single-img">
                                                    <a href="#"><img alt="img"
                                                            src="{{ asset('storage/' . $event_data->image) }}"></a>
                                                    <figcaption class="mu-blog-caption">
                                                        <h3><a href="#">{{ $event_data->title }}</a></h3>
                                                        {{ $event_data->date }}
                                                    </figcaption>
                                                </figure>
                                                <div class="mu-blog-description">
                                                    <blockquote>
                                                        <p>{!! $event_data->short_desc !!}</p>
                                                    </blockquote>
                                                    <hr>
                                                    {!! $event_data->description !!}
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <!-- end course content container -->
                            </div>
                            <div class="col-md-3">
                                <!-- start sidebar -->
                                <aside class="mu-sidebar">
                                    <!-- start single sidebar -->
                                    <div class="mu-single-sidebar">
                                        <h3>Related Events</h3>
                                        <ul class="mu-sidebar-catg">
                                            <li><a href="{{ route('front.event-detail', $event_data->slug) }}">Independence
                                                    Day</a></li>
                                            <li><a href="{{ route('front.event-detail', $event_data->slug) }}">Gandhi
                                                    Jyanti</a></li>
                                            <li><a href="{{ route('front.event-detail', $event_data->slug) }}">Childrens
                                                    Day</a></li>
                                        </ul>
                                    </div>
                                    <!-- end single sidebar -->
                                </aside>
                                <!-- / end sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                    <div id="mu-testimonial-slide" class="mu-testimonial-content">
                        <div class="mu-testimonial-item">
                            <div class="mu-testimonial-quote">
                                <blockquote>
                                    <p>Event Content</p>
                                </blockquote>
                            </div>
                            <div class="mu-testimonial-img">
                                <img src="{{asset('front/images/event.jpg')}}" alt="img">
                            </div>
                            <div class="mu-testimonial-info">
                                <h4>Event Title</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    {{-- <section id="mu-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-testimonial-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>Our Testimonials</h2>
                        </div>
                        <!-- end title -->
                        <div id="mu-testimonial-slide" class="mu-testimonial-content">
                                <div class="mu-testimonial-item">
                                    <div class="mu-testimonial-quote">
                                        <blockquote>
                                            <p>content</p>
                                        </blockquote>
                                    </div>
                                    <div class="mu-testimonial-img">
                                        <img src="" alt="img">
                                    </div>
                                    <div class="mu-testimonial-info">
                                        <h4>test</h4>
                                    </div>
                                </div>
                                <div class="mu-testimonial-item">
                                    <div class="mu-testimonial-quote">
                                        <blockquote>
                                            <p>content2</p>
                                        </blockquote>
                                    </div>
                                    <div class="mu-testimonial-img">
                                        <img src="" alt="img">
                                    </div>
                                    <div class="mu-testimonial-info">
                                        <h4>test2</h4>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
