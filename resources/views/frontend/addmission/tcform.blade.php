@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>TC Form - Tulsi Vidya Niketan (TVN) </h2>
                        <ol class="breadcrumb">
                            <li><a href="{{route('front.index')}}">Home</a></li>
                            <li class="active">Tc Form</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->

    <section class="form-section">
        <div class="container">
            <form action="{{route('front.tcformStore')}}" method="POST">
            @csrf
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <label>NAME</label>
                        <input type="text" class="form-control fm-input" name="name" placeholder="Enter Name">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>MOTHER'S NAME</label>
                        <input type="text" class="form-control fm-input" name="mother_name" placeholder="Enter Mother Name">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>FATHER'S NAME</label>
                        <input type="text" class="form-control fm-input" name="father_name" placeholder="Enter Father Name">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>Nationality</label>
                        <input type="text" class="form-control fm-input" name="nationality" placeholder="Enter Nationality">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>WHETHER THE PUPIL BELONGS TO SC/ST/OBC CAT...</label>
                        <select class="form-control fm-input" name="caste">
                            <option>Select Cast</option>
                            <option value="sc">Sc</option>
                            <option value="st">St</option>
                            <option value="obc">OBC</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>D/O/B ACCORDING TO THE ADMISSION REGISTRATION</label>
                        <input type="date" class="form-control fm-input" name="date_of_birth"
                            placeholder="Enter Date Of Birth">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>WHEATHER THE STUDENT IS FAILED</label>
                        <select class="form-control fm-input" name="result">
                            <option>Select Student Result</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>SUBJECT OFFERD</label>
                        <input type="text" class="form-control fm-input" name="subject"
                            placeholder="Enter Subject Offerd">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>CLASS IN WHICH THE PUPIL LAST STUDIED</label>
                        <input type="text" class="form-control fm-input" name="last_class_studied" placeholder="Last Studied">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>SCHOOL/EXAMINATION LAST TAKEN WITH RESULT</label>
                        <select class="form-control fm-input" name="school_result">
                            <option>Select Last Result</option>
                            <option value="pass">Pass</option>
                            <option value="fail">Fail</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>QUALIFIED PROMATION TO THE NEXT HIGHER CLASS</label>
                        <select class="form-control fm-input" name="qualified">
                            <option>Qualified the Next Higher Class</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>STUDENT PAID ALL THE AMOUNT OF THE SCHOOL</label>
                        <select class="form-control fm-input" name="full_ammount">
                            <option>All the Amount of The School</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <h5>WHETHER PUPIL WAS IN RECEIPT OF ANY FEE CONCESSION, IF SO THE NATURE OF SUCH CONCESSION/ क्या
                            विद्यार्थी को कोई शुल्क रियायत प्रदान की गई थी, यदि हाँ, तो उसकी प्रकृति ।</h5>
                        <textarea type="text" class="form-control fm-input"
                            placeholder="Whether pupil was in receipt of any fee concession, if so the nature of such concession/ क्या विद्यार्थी को कोई शुल्क रियायत प्रदान की गई थी, यदि हाँ, तो उसकी प्रकृति ।"
                            name="receipt"></textarea>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <h5>क्या विद्यार्थी एन0सी0सी0 कैडेट, स्काउट है? विवरण दे : WHETHER THE PUPIL IS NCC CADET/BOY
                            SCOUT/GIRL GUIDE (GIVE DETAILS):</h5>
                        <textarea type="text" class="form-control fm-input"
                            placeholder="क्या विद्यार्थी एन0सी0सी0 कैडेट, स्काउट है? विवरण दे : Whether the pupil is NCC Cadet/Boy Scout/Girl Guide (give details)"
                            name="ncc"></textarea>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>DATE ON WHICH PUPIL'S NAME WAS STRUCK</label>
                        <input type="date" class="form-control fm-input" placeholder="Enter date" name="date_name_struck">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>NO. OF MEETINGS UP TO DATE</label>
                        <input type="text" class="form-control fm-input" placeholder="अंतिम तिथि तक उपस्थितियों की कुल संख्या" name="full_count">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>NO. OF SCHOOL DAYS THE PUPIL ATTENDED</label>
                        <input type="text" class="form-control fm-input" placeholder="विद्यार्थी की विद्यालय दिवसों की कुल परिस्थितियाँ" name="full_present">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <h5>REASON FOR LEAVING THE VIDYALAYA / विद्यालय छोड़ने का कारण</h5>
                        <textarea type="text" class="form-control fm-input" placeholder="विद्यालय छोड़ने का कारण" name="reasion"></textarea>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <h5>सामान्य आचरण/GENERAL CONDUCT</h5>
                        <textarea type="text" class="form-control fm-input" placeholder="सामान्य आचरण/General Conduct" name="gen_conduct"></textarea>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <h5>कोई अन्य टिप्पणी/ANY OTHER REMARKS</h5>
                        <textarea type="text" class="form-control fm-input" placeholder="कोई अन्य टिप्पणी/Any other Remarks" name="remark"></textarea>
                    </div>
                    <div class="col-lg-4 mb-3">
                       <label>DATE OF ISSUE OF CERTIFICATE</label>
                       <input type="date" class="form-control fm-input" name="issue_date" placeholder="Enter Date">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <button type="submit" class="btn btn-warning-submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
