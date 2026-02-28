@extends('frontend.layout.app')
@section('content')
    <style>
        .card {
            text-align: center;
        }

        .trophy img {
            max-width: 200px;
            opacity: 0.4;
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            transition: opacity .5s;
        }

        .trophy img:hover {
            opacity: 1;
            -webkit-filter: none;
            filter: none;
        }

        .modal-body {
            height: 400px;
            overflow: hidden;
            text-align: center;
        }

        .modal-body img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
            /* Ensure image fits within the modal body */
        }

        body.modal-open {
            overflow: hidden !important;
            /* Prevent website page scrolling when modal is open */
        }

        .btn-close {
            position: absolute;
            top: 0px;
            right: 0;
            background: transparent;
            color: #fff;
            border: 1px solid #fff;
        }
    </style>
    <!-- Start Slider -->
    <section id="mu-slider">
        @if ($sliders->count() > 0)
            @foreach ($sliders as $slider)
                <div class="mu-slider-single">
                    <div class="mu-slider-img">
                        <figure>
                            <img src="{{ asset('storage/' . $slider->image) }}" alt="img">
                        </figure>
                    </div>
                    {{-- <div class="mu-slider-content">
                        <h2>{{ $slider->title }}</h2>
                        <p>{{ $slider->short_desc }}</p>
                        <a href="#" class="mu-read-more-btn">Admission Open</a>
                    </div> --}}
                </div>
            @endforeach
        @else
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="{{ asset('assets/img/default.webp') }}" class="w-100">
                </div>
            </div>
        @endif
    </section>
    <!-- End Slider -->

    <!-- Start service  -->
    {{-- <section id="mu-service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-service-area">
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-users" aria-hidden="true"></span>
                            <h3>MANAGEMENT</h3>
                            <p>Management of TVN supports the students in all the possible way for the growth of students,
                                management is committed to provide the best envoirment for studies ...</p>
                        </div>
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-building" aria-hidden="true"></span>
                            <h3>INFRASTRUCTURE</h3>
                            <p>TVN have been designed keeping in mind the needs of children, with special features and
                                facilities that act as an incentive for children to ...</p>
                        </div>
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-cogs" aria-hidden="true"></span>
                            <h3>FACILITIES</h3>
                            <p>Life at TVNS is not all academic. Both indoor and outdoor sports facilities have been created
                                to demonstrate and nurture the students...</p>
                        </div>
                        <!-- Start single service -->
                        <!-- Start single service -->
                        <div class="mu-service-single">
                            <span class="fa fa-book"></span>
                            <h3>LIBRARY</h3>
                            <p>Library is undergoing a Meta (Reader's paradise). Beyond books and journals, the library
                                today has to be the repository of information...</p>
                        </div>
                        <!-- Start single service -->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End service  -->

    <div class="container-fluid p-0 mt-2 mb-2">
        <div class="marquee-container">
            <div class="headertext">Latest News</div>
            <div>
                <marquee style="width:100%;color:red; padding:7px;" onmouseover="this.stop();" onmouseout="this.start();"
                    direction="left" behavior="scroll" scrollamount="7">
                    Class X Result Out <a href="{{ asset('front/class_ten.pdf') }}" target="_blank"> Class X </a>
                    |&nbsp;&nbsp;&nbsp;
                    Class XII Result Out | <a href="{{ asset('front/class_tweleve.pdf') }}" target="_blank"> Class XII </a>
                    |&nbsp;&nbsp;&nbsp;
                    Application forms available for admissions in classes LKG, UKG, I & II |  <a href="{{ asset('front/admission_form.pdf') }}" target="_blank">Click Here </a>
                </marquee>
            </div>
        </div>
    </div>

    <!-- Start about us -->
    <section id="mu-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-about-us-area">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="mu-about-us-left">
                                    <!-- Start Title -->
                                    <div class="about-title">
                                        <h2>About US</h2>
                                        <h4>Tulsi Vidya Niketan (TVN)</h4>
                                    </div>
                                    <!-- End Title -->
                                    <p>Tulsi Vidya Niketan established under the aegis of Sri Goswami Tulsidas Educational Society is an example of Sri Goswami Tulsidas Educational Society’s service in the field of Education. The school carries forward a glorious legacy of around 6 decades in the holy city of Varanasi. Sri Goswami Tulsidas Educational Society has the passion that good quality and affordable education be made accessible to young generation by imbibing them with rich cultural values by making them a responsible citizen.</p>
                                    <p>The important aspect of education is to equip the students so that they become vital part of school curriculum and also be able to lead the society in science, technology, literature, music and pursue their studies in the Universities, Institutions of Eminence (IoE’s) to attain academic ability to compete others in getting responsible jobs, which would enable them to be a part of Nation’s development endeavors. Tulsi Vidya Niketan in its own humble way is trying to fulfill these needs of the society by providing affordable education and safe environment for the students.</p>
                                    <p>With a commitment to make education available to all class of society, the institution is continuously striving to provide quality education with upgraded state-of-art infrastructure to the student’s. The School is continuously focusing on improving the quality of education by adopting 3 E’s of Education i.e, Exposure, Education and Experience. The highest function of education is to bring about an integrated individual who is capable of dealing with life as a whole. The teachers as well as parents have great role and responsibility in educating the children and bringing about new generation of human beings. The School has plethora of experienced and well qualified teachers to take care of student’s educational needs. We are striving with full commitment and utmost emphasis to attain the goal of providing affordable and quality education for all class of society.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="mu-about-us-right">
                                    <img src="assets/img/about-us.jpg" alt="img">
                                    <!-- <div class="image-two">
                                        <img src="assets/img/about-us.jpg" alt="img">
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about us -->

    <!-- Start Achievements -->
    @if ($achievement->count() > 0)
        <section id="mu-achievements">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mu-achievements-area">
                            <!-- begain title -->
                            <div class="mu-title">
                                <h2>Our Student Achievements</h2>
                                <p>Celebrating the remarkable accomplishments of our students in academics, sports, arts,
                                    and
                                    beyond. Their dedication, talent, and hard work continue to inspire excellence and
                                    success.
                                </p>
                            </div>
                            <!-- end title -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mu-related-item">
                            <div class="mu-related-item-area">
                                <div id="mu-achievement-item-slide">
                                    @foreach ($achievement as $data)
                                        <div class="col-md-3 col-12">
                                            <article class="mu-achievement-single-item">
                                                <figure class="mu-achievement-single-img">
                                                    <a href="#" class="news-img">
                                                        <img alt="Achievement Image"
                                                            src="{{ asset('storage/' . $data->image) }}"
                                                            onerror="this.onerror=null; this.src='{{ asset('assets/img/user.png') }}'">
                                                    </a>
                                                    <figcaption class="mu-achievement-caption">
                                                        <h3><a href="#">{{ $data->title }}</a></h3>
                                                        <p>{{ $data->description }}</p>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- End Achievements -->

    <!-- Start our teacher -->
    {{-- @if ($teachers->count() > 0)
        <section id="mu-our-teacher">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-our-teacher-area">
                            <!-- begain title -->
                            <div class="mu-title">
                                <h2>Our Teachers</h2>
                                <p>We have an excellent teacher to child ratio at our school to ensure that each student
                                    receives the attention he or she needs.</p>
                            </div>
                            <!-- end title -->
                            <!-- begain our teacher content -->
                            <div id="teacher-slide" class="mu-our-teacher-content">
                                @foreach ($teachers as $teacher)
                                    <div class="mu-our-teacher-single">
                                        <figure class="mu-our-teacher-img">
                                            <img src="{{ asset('storage/' . $teacher->image) }}"
                                                onerror="this.onerror=null; this.src='{{ asset('assets/img/placeholder.png') }}'"
                                                alt="teacher img">
                                            <div class="mu-our-teacher-social">
                                                <a href="{{ route('front.teacher') }}" class="btn btn-light">View More</a>
                                            </div>
                                        </figure>
                                        <div class="mu-ourteacher-single-content">
                                            <h4>{{ $teacher->name }}</h4>
                                            <p><b>Qulification:</b>{{ $teacher->qualification }}</p>
                                            <div class="courses">
                                                <p>
                                                    <span>DSG- {{ $teacher->designation }}</span>
                                                    <a href="{{ route('front.teacher') }}">EXP-
                                                        {{ $teacher->experience }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- End our teacher content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif --}}
    <!-- End our teacher -->

    <!-- Start from blog -->
    @if ($news_list->count() > 0)
        <section id="mu-from-blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mu-from-blog-area">
                            <!-- start title -->
                            <div class="mu-title news-title">
                                <h2>Latest News</h2>
                            </div>
                            <!-- end title -->
                            <!-- start related course item -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mu-related-item">
                                        <div class="mu-related-item-area">
                                            <div id="mu-related-item-slide">
                                                @foreach ($news_list as $news)
                                                    <div class="col-md-6">
                                                        <article class="mu-blog-single-item">
                                                            <figure class="mu-blog-single-img">
                                                                <a href="{{route('front.news-detail', $news->slug)}}" class="news-img"><img alt="img"
                                                                        src="{{ asset('storage/' . $news->image) }}"
                                                                        onerror="this.onerror=null; this.src='{{ asset('assets/img/placeholder.png') }}'"></a>
                                                                <figcaption class="mu-blog-caption">
                                                                    <h3><a href="{{route('front.news-detail', $news->slug)}}">{{ $news->title }}</a>
                                                                    </h3>
                                                                </figcaption>
                                                            </figure>
                                                            {{-- <div class="mu-blog-meta">
                                                            <a href="#">{{ $news->date }}</a>
                                                        </div> --}}
                                                        </article>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end start related course item -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="{{ route('front.news') }}" class="btn btn-warning view_all">View All</a>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- End from blog -->

    <!-- Start testimonial -->
    @if ($testimonials->count() > 0)
        <section id="mu-testimonial">
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
                                @foreach ($testimonials as $testimonial)
                                    <div class="mu-testimonial-item">
                                        <div class="mu-testimonial-quote">
                                            <blockquote>
                                                <p>{{ $testimonial->description }}</p>
                                            </blockquote>
                                        </div>
                                        <div class="mu-testimonial-img">
                                            <img src="{{ asset('storage/' . $testimonial->image) }}" alt="img">
                                        </div>
                                        <div class="mu-testimonial-info">
                                            <h4>{{ $testimonial->name }}</h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- End testimonial -->

    <!-- Start our event section -->
    @if ($events->count() > 0)
        <section id="mu-latest-courses">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="mu-latest-courses-area">
                            <!-- Start Title -->
                            <div class="mu-title">
                                <h2>Our Events</h2>
                                <p>As part of our efforts to inculcate in students the
                                    appreciation of and respect for
                                    India's
                                    rich heritage and diversity, and also to reinforce in them
                                    national pride and respect
                                    for
                                    all, the school celebrates a number of functions</p>
                            </div>
                            <!-- End Title -->
                            <div id="mu-latest-course-slide" class="mu-latest-courses-content">
                                @foreach ($events as $event)
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <div class="mu-latest-course-single">
                                            <figure class="mu-latest-course-img">
                                                <a href="#"><img src="{{ asset('storage/' . $event->image) }}"
                                                        onerror="this.onerror=null; this.src='{{ asset('assets/img/placeholder.png') }}'"
                                                        alt="img"></a>
                                                <figcaption class="mu-latest-course-imgcaption">
                                                    <a href="#">{{ $event->title }}</a>
                                                </figcaption>
                                            </figure>
                                            <div class="mu-latest-course-single-content">
                                                <p>{{ $event->short_desc }}</p>
                                                <div class="mu-latest-course-single-contbottom">
                                                    <a class="mu-course-details"
                                                        href="{{ route('front.event-detail', $event->slug) }}">View
                                                        More</a>
                                                    <span class="mu-course-price" href="#"><i
                                                            class="fa fa-calendar" aria-hidden="true">
                                                            {{ $event->date }}</i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- End our event section -->

    <!-- Galler-->
    <section id="gallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div id="gallery-slide-front" class="">
                        @foreach ($galleries as $gallery)
                            <div class="mu-gallery-single">
                                <a href="{{ asset('storage/' . $gallery->image) }}" class="mu-gallery-img">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="img">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @if (websiteSetupValue('end_date') >= date('Y-m-d'))
        <div class="modal fade" id="global-modal" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-transparent border-0">
                    <button type="button" class="btn-close m-2 p-2 rounded-circle" data-bs-dismiss="modal"
                        aria-label="Close"> X </button>
                    <a href="{{ websiteSetupValue('modal_url') }}">
                        <img src="{{ asset('storage/website_setup/' . websiteSetupValue('modal_image')) }}"
                            alt="Modal Image" class="img-fluid"
                            onerror="this.onerror=null; this.src='{{ asset('front/images/placeholder.png') }}'" />
                    </a>
                </div>
            </div>
        </div>
    @endif
    {{-- <div class="modal fade" id="global-modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <!--Modal Content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> X </span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 0;">
                    <a href="#" class="text-center">
                        <img src="{{ asset('storage/website_setup/' . websiteSetupValue('modal_image')) }}"
                            alt=""
                            onerror="this.onerror=null; this.src='{{ asset('front/images/placeholder.png') }}'"
                            height="400" />
                    </a>
                </div>
                <div class="modal-footer">
                    <a href="{{ websiteSetupValue('modal_url') }}"
                        class="text-center">{{ websiteSetupValue('modal_url') }}</a>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
