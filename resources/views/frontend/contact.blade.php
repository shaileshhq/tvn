@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Contact Us</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('front.index')}}">Home</a></li>
                            <li class="active">Contact us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
 <!-- Start contact  -->
 <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
           <!-- start title -->
           <div class="mu-title">
             <h2>Get in Touch</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores ut laboriosam corporis doloribus, officia, accusamus illo nam tempore totam alias!</p>
           </div>
           <!-- end title -->
           <!-- start contact content -->
           <div class="mu-contact-content">
             <div class="row">
               <div class="col-md-6">
                 <div class="mu-contact-left">
                   <form action="{{route('front.contactStore')}}" method="POST" class="contactform">
                    @csrf
                     <p class="comment-form-author">
                       <label for="author">Name <span class="required">*</span></label>
                       <input type="text" required="required" size="30" value="" name="name">
                       @error('name')
                           {{$message}}
                       @enderror
                     </p>
                     <p class="comment-form-email">
                       <label for="email">Email <span class="required">*</span></label>
                       <input type="email" required="required" aria-required="true" value="" name="email">
                     </p>
                     <p class="comment-form-url">
                       <label for="number">Number</label>
                       <input type="text" name="phone">
                     </p>
                     <p class="comment-form-comment">
                       <label for="comment">Message</label>
                       <textarea required="required" aria-required="true" rows="8" cols="45" name="message"></textarea>
                     </p>
                     <p class="form-submit">
                        <button type="submit" class="mu-post-btn">Send Message</button>
                     </p>
                   </form>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="mu-contact-right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13211.722377518721!2d83.00515016395967!3d25.278267310126623!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e3193d41e4c83%3A0xd5dd36284633a1a!2sTulsi%20Vidya%20Niketan!5e0!3m2!1sen!2sin!4v1711699434896!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </div>
               </div>
             </div>
           </div>
           <!-- end contact content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End contact  -->
@endsection
