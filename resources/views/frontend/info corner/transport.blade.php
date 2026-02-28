@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>TVN Transport Rules</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('front.index')}}">Home</a></li>
                            <li class="active"> Transport Rules</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="transport">
        <div class="container">
            <div class="row">
                <!-- Start Title -->
                <div class="heading-tvn">
                    <h2>Transport Rules</h2>
                    <p>The future belongs to you, dear boys and girls, you have therefore to prepare yourselves for the active participation in the world you live in and have a say in the reshaping of the world. Develop youreselves then into intelligent, well informed and responsible men and women.</p>
                </div>
                <!-- End Title -->
                <div class="rules-list">
                    <ul>
                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Bus facility will be provided on a 'first-come-first serve' basis according to the admission numbers.</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Parents should consult the school's transport in-charge for necessary details of bus routes or any changes desired.</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> In case there is a permanent change in stop and/or bus, permission for the same has to be sought through a written application. The change shall become effective only after the school grants written permission.</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Parents should, ensure that their wards are always escorted to and from bus stops. For those children who for any reason, have to travel unescorted to and from their stops, an application mentioning the same must be sent to the Principal.</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> For A student using the school bus is expected to be at the bus stop at least five minutes before the scheduled arrival of the bus. The student has to be on the correct side of the arriving bus.</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> The Please do not enter school buses to see off or receive your wards.</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Please do not get into an argument with the teachers, conductor or driver present in the bus. In case of problem, please give a written complaint to the school office .</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> The drivers are authorized to stop buses at designated stops only, unless otherwise directed by the bus teacher after consultation with the I/C-Transport and Principal.</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Students are allowed to use only their allotted bus and bus stop. There is no provision for temporary change in buses or bus stop.</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Students, who miss the allotted bus, should not try to board any other bus. In such cases it is the responsibility of parents to drop their wards to the school. Such students may, however, return by their allotted bus.
                        </li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Students must make sure school bags and other belongings are properly placed in the bus.</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Parents/Nominees of students who do not avail the school's transport should present themselves at the school gate 15 minutes before the start/ dispersal of the school to drop/collect their wards.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
