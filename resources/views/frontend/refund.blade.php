@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Admission Form 11th Class </h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="active">Admission Form 11th Class</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
 <!-- End breadcrumb -->
 <section id="school-timing">
    <div class="container">
        <!-- Start Title -->
        <div class="mu-title">
            <h2>Refund & Policy</h2>
        </div>
        <!-- End Title -->
        <div class="col-12">
            <h4>REFUND POLICY</h4>
            <p>In case of an error found in online fee payment, such as:</p>
            <ul>
                <li><i class="bi bi-dot"></i> Payment gets debited twice due to server error.</li>
                <li><i class="bi bi-dot"></i> The system fails to generate the required acknowledgment due to internet malfunction.</li>
                <li><i class="bi bi-dot"></i> During the online payment through Net banking/ credit/debit card if the payment gets debited and the internet goes down due to some external server malfunctioning or any other similar happening.</li>
            </ul>
            <p>In such cases the parent can raise the chargeback into their respective bank.</p>
        </div>
        <div class="col-12">
            <h4>DISCLAIMER AND LIMITATION OF LIABILITY</h4>
            <p>The information contained in this website is for your general information and use only. It is subjected to change without notice.</p>
            <p>The information or materials obtained at /or through this site is entirely at your own risk for which Tulsi Vidya Niketan (TVN) or its directors/principals or employees shall not be held liable. It shall be your own responsibility to ensure that any services or information available through this website meet your specific requirements and shall not be interpreted as an offer to any kind of support.</p>
            <p>Tulsi Vidya Niketan (TVN) sanctions registrations / admissions to the school after the applications are verified as per its procedures. Approval / rejection of any application may be done at the sole discretion of Director/Principal. Therefore Tulsi Vidya Niketan (TVN) reserves the right to approve/reject any application without assigning any reason whatsoever.</p>
            <p>Every effort is made to keep the website up and running smoothly. However, Tulsi Vidya Niketan (TVN) takes no responsibility for, and will not be liable for, the website being temporarily unavailable due to technical issues beyond our control.</p>
            <p>In no event Tulsi Vidya Niketan (TVN) will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arise out of, or in connection with, the use of this website.</p>
        </div>

    </div>
</section>
@endsection
