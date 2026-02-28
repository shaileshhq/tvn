<!-- Start header  -->
<!-- Top Bar -->
<header id="mu-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 d-block d-sm-none">
                <div class="mu-header-area">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="mu-header-top-left">
                                <div class="mu-top-email">
                                    <!--<a href="{{ route('front.important-notice') }}" class="blink_me"-->
                                    <!--    target="_blank">ADMISSION OPEN</a>-->
                                    <a href="{{ asset('storage/document/admission-notice.pdf') }}" class="blink_me"
                                        target="_blank">ADMISSION OPEN</a>
                                </div>
                                <div class="mu-top-phone">
                                    <span>CBSE Affilated</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="mu-header-top-right">
                                <div class="mu-top-email">
                                    @if (websiteSetupValue('email'))
                                        <span> <i class="fa fa-envelope me-1"></i>
                                            {{ websiteSetupValue('email') }}</span>
                                    @endif
                                </div>
                                <div class="mu-top-phone">
                                    <i class="fa fa-phone"></i>
                                    @if (websiteSetupValue('contact_number') && websiteSetupValue('whats_app_number'))
                                        <span>{{ websiteSetupValue('contact_number') }},
                                            {{ websiteSetupValue('whats_app_number') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="bg-trans">
                                <a href="https://schoolmitra.com/" class="software-link text-white" target="_blank">Download
                                    Our School ERP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End top bar -->
<!-- Start menu -->
<section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ route('front.index') }}">
                            @if (websiteSetupValue('logo'))
                                <img src="{{ asset('storage/website_setup/' . websiteSetupValue('logo')) }}"
                                    alt="logo">
                            @endif
                        </a>
                        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul id="top-menu" class="nav navbar-nav navbar-left main-nav">
                            <li class="active"><a href="{{ route('front.index') }}" class="link-nav">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle link-nav" data-toggle="dropdown">About <span
                                        class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('front.about') }}">About us</a></li>
                                    <li><a href="{{ route('front.principal') }}">Principal Message</a></li>
                                    <li><a href="{{ route('front.director') }}">Our Director</a></li>
                                    <li><a href="{{ route('front.teacher') }}">Our Teachers</a></li>
                                    <li><a href="{{ route('front.committee') }}">Managing Committee</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle link-nav" data-toggle="dropdown">Campus <span
                                        class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('front.infrastructure') }}">Infrastructure & Facility</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle link-nav" data-toggle="dropdown">Admission
                                    <span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('front.nursery-nine') }}">Form Nursery to 9th Class</a></li>
                                    <li><a href="{{ route('front.eleven') }}">Form 11th Class</a></li>
                                    <li><a href="{{ route('front.guideline') }}">Addmission Guidelines</a></li>
                                    <li><a href="{{ route('front.tc-form') }}">TC Form</a></li>
                                    <li><a href="{{ asset('front/images/lkg-to-2-addmission-form.pdf') }}">Addmission
                                            Form in LKG to 2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle link-nav" data-toggle="dropdown">Info Corner
                                    <span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('front.timing') }}">School Timing</a></li>
                                    <li><a href="{{ route('front.transport') }}">Transport Rules</a></li>
                                    <li><a href="{{ route('front.affiliated') }}">CBSE Affiliations</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle link-nav" data-toggle="dropdown">Alumni <span
                                        class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('front.registrationform') }}">Alumni Registration</a></li>
                                    <li><a href="{{ route('front.loginform') }}">Alumni Login</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('front.news') }}" class="link-nav">News</a></li>
                            <li><a href="{{ route('front.gallery') }}" class="link-nav">Gallery</a></li>
                            <li><a href="{{ route('front.contact') }}" class="link-nav">Contact</a></li>
                        </ul>
                        <a href="{{ route('front.document') }}" class="btn btn-warning button-download">Mandatory Public Disclosure</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</section>
<!-- End menu -->
<!-- End header  -->
