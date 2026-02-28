<!-- Start footer -->
<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
        <div class="container-fluid">
            <div class="mu-footer-top-area">
                <div class="row">
                    <!-- Column 1: Logo & Address -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="mu-footer-widget">
                            @if (websiteSetupValue('logo'))
                                <h4 class="mt-0">
                                    <img src="{{ asset('storage/website_setup/' . websiteSetupValue('logo')) }}" alt="logo" width="100" style="margin-bottom: 20px;">
                                </h4>
                            @endif
                            <div class="contact-item">
                                <i class="fa fa-hashtag"></i>
                                <p>School Code : <strong>71294</strong></p>
                            </div>
                            <div class="contact-item">
                                <i class="fa fa-list-alt"></i>
                                <p>School UDISE Code : <strong>09670914234</strong></p>
                            </div>
                            @if (websiteSetupValue('address'))
                                <div class="contact-item">
                                    <i class="fa fa-map-marker"></i>
                                    <p>{{ websiteSetupValue('address') }}</p>
                                </div>
                            @endif
                            <!-- Social Media -->
                            @if (websiteSetupValue('facebook') || websiteSetupValue('twitter') || websiteSetupValue('instagram') || websiteSetupValue('linkedin') || websiteSetupValue('youtube'))
                                <div class="mu-social-media">
                                    @if(websiteSetupValue('facebook'))
                                        <a href="{{ websiteSetupValue('facebook') }}" class="btn btn-outline btn-social" target="_blank"><i class="fa fa-facebook"></i></a>
                                    @endif
                                    @if(websiteSetupValue('twitter'))
                                        <a href="{{ websiteSetupValue('twitter') }}" class="btn btn-outline btn-social" target="_blank"><i class="fa fa-twitter"></i></a>
                                    @endif
                                    @if(websiteSetupValue('linkedin'))
                                        <a href="{{ websiteSetupValue('linkedin') }}" class="btn btn-outline btn-social" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    @endif
                                    @if(websiteSetupValue('youtube'))
                                        <a href="{{ websiteSetupValue('youtube') }}" class="btn btn-outline btn-social" target="_blank"><i class="fa fa-youtube"></i></a>
                                    @endif
                                    @if(websiteSetupValue('instagram'))
                                        <a href="{{ websiteSetupValue('instagram') }}" class="btn btn-outline btn-social" target="_blank"><i class="fa fa-instagram"></i></a>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Column 2: Quick Links -->
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="mu-footer-widget">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="{{ route('front.about') }}">About Us</a></li>
                                <li><a href="{{ route('front.principal') }}">Principal Message</a></li>
                                <li><a href="{{ route('front.teacher') }}">Our Teachers</a></li>
                                <li><a href="{{ route('front.privacy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('front.refund') }}">Refund Policy</a></li>
                                <li><a href="{{ route('front.terms') }}">Term & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Column 3: School Docs -->
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="mu-footer-widget">
                            <h4>&nbsp;</h4>
                             <ul>
                                <li><a href="">School Documents</a></li>
                                <li><a href="{{ route('front.tc-form') }}">TC & Withdrawls</a></li>
                                <li><a href="{{ route('front.affiliated') }}">CBSE Affiliations</a></li>
                                <li><a href="{{ route('front.registrationform') }}">Alumni Registration</a></li>
                                <li><a href="{{ route('front.timing') }}">School Timing</a></li>
                                <li><a href="{{ route('front.gallery') }}">Photo Gallery</a></li>
                                <li><a href="{{ asset('front/E-Diary.pdf') }}" target="_blank">E-Diary</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Column 4: Apply & Contact -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="mu-footer-widget">
                            <h4>Apply Today</h4>
                            <p>Fill out the application in order to apply today.</p>
                            <a href="#" class="btn btn-now">Apply Now</a>
                            
                            <h4 style="margin-top: 30px;">Contact Us</h4>
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fa fa-clock-o"></i>
                                    <p>Monday - Saturday: (10:00 AM - 05:00 PM)</p>
                                </div>
                                @if (websiteSetupValue('contact_number'))
                                    <div class="contact-item">
                                        <i class="fa fa-phone"></i>
                                        <p>(0542) {{ websiteSetupValue('contact_number') }}</p>
                                    </div>
                                @endif
                                @if (websiteSetupValue('whats_app_number'))
                                    <div class="contact-item">
                                        <i class="fa fa-whatsapp"></i>
                                        <p>Phone: {{ websiteSetupValue('whats_app_number') }}</p>
                                    </div>
                                @endif
                                @if (websiteSetupValue('email'))
                                    <div class="contact-item">
                                        <i class="fa fa-envelope"></i>
                                        <p>{{ websiteSetupValue('email') }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="mu-footer-bottom-area">
                <p>&copy; <?php echo date('Y'); ?> TVN School, Varanasi. All rights reserved | Developed By <a href="https://techuptechnologies.com/" rel="nofollow" target="_blank">techuptechnologies.com</a></p>
            </div>
        </div>
    </div>
    <!-- end footer bottom -->
</footer>
<!-- End footer -->
