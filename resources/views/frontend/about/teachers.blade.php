@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Our Teachers</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="active">Our Teachers</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <!--start our teacher card-->
    <section id="teacher-card">
        <div class="container-fluid">
            <div class="row mt-5">
                @foreach ($teacher_list as $teacher)
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card mb-3 mx-auto" style="max-width: 600px;">
                            <div class="row g-0">
                                <div class="col-lg-4 col-md-4 col-12 d-flex flex-column align-items-center">
                                    <img src="{{ asset('storage/' . $teacher->image) }}"
                                        class="img-fluid rounded-start w-100"
                                        alt="Teacher Image">
                                    <div class="teacher-name text-center mt-2">
                                        <h6 class="fw-bold">{{ $teacher->name }}</h6>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-between align-items-center">
                                                <a href="#" class="btn btn-outline-primary btn-sm"><i
                                                        class="bi bi-folder"></i> PDF</a>
                                                <p class="mb-0"><b>Experience:</b> {{ $teacher->experience }} Years</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="mb-1"><b>Qualification:</b> {{ $teacher->qualification }}</p>
                                                <p class="t-text text-wrap overflow-hidden" style="max-height: 80px;">
                                                    {{ $teacher->description }}</p>
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
    <!--start our teacher card-->
@endsection
