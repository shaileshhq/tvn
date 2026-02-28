@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>TVN School Timing</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('front.index')}}">Home</a></li>
                            <li class="active">TVN School Timing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="school-timing">
        <div class="container">
            <!-- Start Title -->
            <div class="mu-title">
                <h2>School Timing</h2>
            </div>
            <!-- End Title -->
            <p>The school would like the parents to maintain a close rapport with the teachers. Parents are advised to meet
                the Principal, Co-ordinator or Teachers, according to the schedule given below or by prior appointment only.
            </p>
            <table class="table">
                <thead>
                    <tr>
                        <th>School Timing</th>
                        <th>Classes</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>School Timing</td>
                        <td>LKG TO VII</td>
                        <td>7:00AM - 11:30PM </td>
                    </tr>
                    <tr>
                        <td>School Timing</td>
                        <td>VIII TO XII</td>
                        <td>11:40AM - 4:50PM </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>
@endsection
