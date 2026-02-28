@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>CBSE Affiliated</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('front.index')}}">Home</a></li>
                            <li class="active">CBSE Affiliated</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="Affiliated">
        <div class="container">
            <div class="row">
                <!-- Start Title -->
                <div class="heading-tvn">
                    <h2> CBSE Affiliated upto class 12th</h2>
                </div>
                <!-- End Title -->
                <div class="col-12">
                    <div class="affiliated-content">
                        <h4>Pass Criteria</h4>
                        <p>For class XI, the student has to pass in all subjects in the session ending examination. He/she
                            may be given a second chance to appear again in one subject in which the student fails. The
                            second chance will also be treated as defaulters' examination for genuine cases</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="affiliated-content">
                        <h4>Criteria for Class XI has been included in rules </h4>
                        <p>For classes IX and XI, the pass criteria would be the same as laid down in Examination By-Laws of
                            CBSE for Class X and XII.<br>

                            Marks awarded in Project, Assignment, Unit Test and Cumulative Test will not be included in
                            calculation of the final pass percentage but a student has to obtain a minimum satisfactory
                            level of at least 33% marks in aggregate of the Project, Assignment and Unit Tests, to be
                            eligible for declaration of the final results.<br>

                            o pass the examination, a pupil must obtain at least 33% marks in aggregate of each subject. In
                            class XI, in subjects involving practical, a pupil must obtain 33% marks in theory and 33% marks
                            in practical separately.<br>

                            A pupil failing in one subject in Class XI will be placed in Compartmental Examination. The
                            Compartmental Examination will be held after two weeks of the declaration of the result.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="affiliated-content">
                        <h4>Defaulter's Examination</h4>
                        <p>If a student fails to appear in Annual Examination due to genuine medical problem or any other
                            valid reason, he/she should furnish supporting documents with application within a specified
                            date for Defaulter's Examination. After due verification by School Examination Committee, he/she
                            may be given ONE chance to appear in Defaulter's Examination which may be arranged along with
                            the Compartmental Examination. The criteria of passing marks will remain same as fixed for the
                            Session Ending Examination.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
