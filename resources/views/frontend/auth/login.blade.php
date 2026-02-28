@extends('frontend.layout.app')
@section('content')
    <div class="form-wrapper">
        <div class="container">
            <div class="row form-inner">
                <div class="col-lg-6 col-sm-6 d-sm-none">
                    <div class="image-holder">
                        <img src="{{ asset('assets/img/school-form2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form action="">
                        <h3>ALUMNI LOGIN</h3>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" placeholder="Email" class="form-control fm-input">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" placeholder="Password" class="form-control fm-input">
                        </div>
                        <button type="submit" class="btn btn-warning news-btn">Login</button>
                        <br>
                        <label>Not a Member Yet? </label>
                        <a href="{{route('front.registrationform')}}">Sign up Now!</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
