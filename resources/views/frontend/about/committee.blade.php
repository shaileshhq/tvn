@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Managing Committe - Tulsi Vidya Niketan(TVN)</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('front.index')}}">Home</a></li>
                            <li class="active">Managing Committe</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
     <!--start our committee card-->
     <section id="teacher-card">
        <div class="container-fluid">
            <div class="row mt-5">
                @foreach($committee_data as $committee)
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card mb-3" style="max-width: 600px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/' . $committee->image) }}"  onerror="this.onerror=null; this.src='{{asset('assets/img/user.png')}}'" class="img-fluid rounded-start"
                                    alt="...">
                                <div class="teacher-name">
                                    <h6>{{$committee->name}}</h6>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row text-color">
                                        <div class="col-12 gap-box">
                                          <p><i class="bi bi-person-fill"></i><b>Designation :- </b>{{$committee->designation ?? 'NA'}}</p>
                                            <p><i class="bi bi-person-fill"></i><b>Occupation :-</b> {{$committee->occupation ?? 'NA'}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 gap-box">
                                            <p class="t-text">{{$committee->address ?? 'NA'}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--start our committee card-->

@endsection
