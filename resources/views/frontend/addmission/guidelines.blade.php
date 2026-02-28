@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Admission Guidelines - Tulsi Vidya Niketan (TVN) </h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('front.index')}}">Home</a></li>
                            <li class="active">Admission Guidelines</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section class="info-section">
        <div class="container">
            <div class="row">
                <!-- Start Title -->
                <div class="heading-tvn">
                    <h2>ADMISSION GUIDELINES</h2>
                </div>
                <!-- End Title -->
                <div class="guideline">
                    <p>The student should complete the age of 5 years on 30 September of the year for admission to Class I but he/she should not be more than 7 years of age. The age for admission to other classes will be regulated accordingly.
                    </p>
                    <p>Admission will be allowed after a student qualifies in the test and submits the transfer certificate of the previous school alongwith the Progress Report of the last examination passed.</p>
                </div>
                <div class="table-data">
                    <h4>The Admission Test shall be held in the following subjects</h4>
                    <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Primary Classes (I to V)</td>
                            <td>English, Hindi, Mathematics, General Science and General Knowledge.</td>
                          </tr>
                          <tr>
                            <td>Class VI to VIII</td>
                            <td>English, Hindi, Mathematics, General Science.</td>
                          </tr>
                          <tr>
                            <td>Class IX</td>
                            <td>English, Hindi, Mathematics, General Science</td>
                          </tr>
                        </tbody>
                      </table>
                      <h4>Admission to class X & XII is not usually given</h4>
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Class XI</td>
                            <td>The Admission Test will be conducted onfy for those students who have passed class X from other schools.</td>
                          </tr>
                        </tbody>
                      </table>
                      <p>The Principal will arrange the Admission Test and his/her decision on the admission will be final.</p>
                </div>
            </div>
            <div class="row">
                <!-- Start Title -->
                <div class="heading-tvn">
                    <h2>FEES RULES</h2>
                </div>
                <!-- End Title -->
                <div class="rules-list">
                    <ul>
                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Without Fee Card fees will not be
                            realized..</li>
                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> If the last date of the month i.e. 30th /
                            31t. There is a holiday the previous working day will be observed as fee day. In case fee is not
                            deposited within the month, a late fine of Rs. 50/- will be charged along with the dues.</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> Fee will be collected on all working days
                            of the month without fine at the fee counters between 8.00 AM to 12.00 O'clock noon</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> The students class X, XI and XII remaining
                            absent without proper information will be fined. 5. If Fee Card is lost, it may be obtained from
                            the office on</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> If Fee Card is lost, it may be obtained
                            from the office on payment of fine of Rs. 25/-</li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> If a student fails to deposit fees for
                            three consecutive months his/her name would be struck off The student will not be allowed to
                            attend classes after His/her name has been struck off. He/she would allowed to be readmitted
                            only after paying the readmission fees of Rs. 200/- along with monthly fines and regular fees.
                        </li>

                        <li><i class="fa fa-check-circle" aria-hidden="true"></i> The readmission fees of Rs. 200/- along
                            with monthly fines and regular fees. 7. Bus facility is available on certain routes. The
                            appropriate fee should be deposited at the fee counter to avail this facility.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
