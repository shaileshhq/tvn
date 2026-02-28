@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>About US</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('front.index')}}">Home</a></li>
                            <li class="active">About</li>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about us -->

    <!-- Start about us counter -->
    <!-- <section id="mu-abtus-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-abtus-counter-area">
                        <div class="row">
                            
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-book"></span>
                                    <h4 class="counter">2700+</h4>
                                    <p>Total Students</p>
                                    <p>We have an excellent teacher to child ratio at our school to ensure that each child
                                        receives the attention he or she needs.</p>
                                </div>
                            </div>
                           
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-users"></span>
                                    <h4 class="counter">1</h4>
                                    <p>Campus</p>
                                    <p>We have an excellent teacher to child ratio at our Kindergarten to ensure that each
                                        child receives the attention he or she needs.</p>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-flask"></span>
                                    <h4 class="counter">50+</h4>
                                    <p>Awards</p>
                                    <p>Several awards in sports and scholastic areas .</p>
                                </div>
                            </div>
                           
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single no-border">
                                    <span class="fa fa-user-secret"></span>
                                    <h4 class="counter">250</h4>
                                    <p>Teachers</p>
                                    <p>Several awards in sports and scholastic areas .</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End about us counter -->

    <!--start our mission vission -->
    <section id="vision-mission">
        <div class="container">
            <div class="row">
                 <!-- Start Title -->
                 <div class="mu-title">
                    <h2>Vision & Mission</h2>
                </div>
                <!-- End Title -->
                <div class="col-lg-6">
                    <div class="vision">
                        <h4>Vision</h4>
                        <p>TVN School aims at nurturing individuals with paramount values and multivalent competencies. This
                            lofty ideal is accomplished by virtue of a dynamic curriculum that envisions not only academic
                            but a wholesome all round development of the child, his character and personality, aesthetic
                            refinements, effective skills and the art of living.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission">
                        <h4>Mission</h4>
                        <p>We embark on the mission of creating individuals who are confident about their potential and are Goal oriented, sensitive to their environment ­­­­ above all,co-creators of their own destiny. Our aim is to help a child realize his/ her inner strength and give him a conducive environment to grow & evolve as a good social being and a global citizen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End our mission vission -->
@endsection
