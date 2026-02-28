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
    <section class="form-section">
        <div class="container">
            @if($errors->any())
            {{ implode('', $errors->all('<p>:message</p>')) }}
            @endif
            <form action="{{route('front.elevenStore')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <label>YOUR STREAM</label>
                        <select class="form-control fm-input" name="stream">
                            <option>Select Your Stream</option>
                            <option value="maths">Maths</option>
                            <option value="bio">Bio</option>
                            <option value="commerce">Commerce</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>ROLL NO</label>
                        <input type="text" class="form-control fm-input" name="roll_no" placeholder="Enter Roll No.">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>DATE OF APPLICATION</label>
                        <input type="date" class="form-control fm-input" name="date_of_admission" placeholder="Enter Date">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>CLASS TO WHICH ADMISSION IS SOUGHT</label>
                        <input type="text" class="form-control fm-input" name="class"
                            placeholder="Class to which admission is sought">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>FULL NAME</label>
                        <input type="text" class="form-control fm-input" name="name" placeholder="Enter Name">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>Date Of Birth</label>
                        <input type="date" class="form-control fm-input" name="date_of_birth"
                            placeholder="Enter Date Of Birth">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <h5>APPLICANT'S AGE IN YEARS AND MONTHS IN 1ST APRIL AT THE TIME OF ADMISSION:YEARS</h5>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>YEARS MONTHS DATE</label>
                        <input type="date" class="form-control fm-input" name="" placeholder="Enter Date">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>BLOOD GROUP</label>
                        <select class="form-control fm-input" name="blood">
                            <option>Blood Group</option>
                            <option value="a+">A+</option>
                            <option value="a-">A-</option>
                            <option value="b+">B+</option>
                            <option value="b-">B-</option>
                            <option value="o+">O+</option>
                            <option value="o-">O-</option>
                            <option value="ab+">AB+</option>
                            <option value="ab-">AB-</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>CASTE CATEGORY</label>
                        <select class="form-control fm-input" name="caste">
                            <option>Select Caste</option>
                            <option value="gen">General</option>
                            <option value="obc">OBC</option>
                            <option value="st/sc">SC/ST</option>
                            <option value="ews">EWS</option>
                            <option value="disabled">Disabled</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>NATIONALITY</label>
                        <input type="text" class="form-control fm-input" name="nationality" placeholder="Enter Nationality">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>MOTHER TONGUE</label>
                        <input type="text" class="form-control fm-input" name="mother_tongue"
                            placeholder="Enter Mother tongue">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <h4>Details of Parents / माता-पिता का विवरण:-</h4>
                        <div class="table-responsive">
                            <table class="table table-fm table-bordered">
                                <thead>
                                    <tr>
                                        <th>DETAILS OF PARENTS / माता-पिता का विवरण</th>
                                        <th>MOTHER/माता</th>
                                        <th>FATHER/पिता</th>
                                        <th>GUARDIAN</th>
                                        <th>INTRODUCER</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>(i) Name (in capital letters) नाम/</td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="mother_name">
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="father_name">
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="g_name"></td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="intro_name"></td>
                                    </tr>
                                    <tr>
                                        <td>(ii) Nationality & Occupation/राष्ट्रीयता और व्यवसाय</td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="mother_occupation">
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="father_occupation">
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="g_occupation"></td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="intro_occupation"></td>
                                    </tr>
                                    <tr>
                                        <td>(iii) Address (Local)</td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="mother_office_address">
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="father_office_address">
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="g_address"></td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="intro_address"></td>
                                    </tr>
                                    <tr>
                                        <td>(iv) Address (Permanent)</td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="mother_permanent_address">
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="father_permanent_address">
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="g_permanent_address"></td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="intro_permanent_address"></td>
                                    </tr>
                                    <tr>
                                        <td>(v) Phone (R)</td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="mother_number">
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="father_number">
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="g_number"></td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="intro_number"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <h5>INTRODUCER SHOULD BE A TEACHER OF TULSI VIDYA NIKETAN/OFFICER BEARER OF MEMBER OF MANAGING
                            COMMITTEE/A PROMINENT CITIZEN OF VARANASI KNOWN TO EITHER A TEACHER OF TULSI VIDYA NIKETAN OR
                            OFFICER BEARER OR MEMBER OF MANAGING COMMITTEE.</h5>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>SCHOOL HE/SHE HAS LAST ATTENDED</label>
                        <input type="text" class="form-control fm-input"
                            placeholder="School he/she has last attended " name="last_school_attended">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>CLASS IN WHICH HE/SHE WAS STUDING</label>
                        <input type="text" class="form-control fm-input"
                            placeholder="Class in which he/she was studing" name="last_school_studing">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>MEDIUM OF INSTRUCTION</label>
                        <input type="text" class="form-control fm-input" placeholder="Medium of Instruction"
                            name="instruction">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>PERCENTAGE OF MARKS OBTAINED</label>
                        <input type="text" class="form-control fm-input" placeholder="Percentage of Marks Obtained"
                            name="percentage">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>DATE OF T.C.</label>
                        <input type="date" class="form-control fm-input" placeholder="Date of T.C. / टी. सी. की तारीख"
                            name="tc_date">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>HOME TOWN / गृहनगर:</label>
                        <input type="text" class="form-control fm-input" placeholder="HOME TOWN / गृहनगर:"
                            name="home_town">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <h5>WHETHER THE TC(TRANSFER CERTIFICATE)/ COUNTERSIGNED TC IS SUBMITTED:</h5>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>RESULT</label>
                        <select class="form-control fm-input" name="result">
                            <option>Select Result</option>
                            <option value="gen">Pass</option>
                            <option value="obc">Fail</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>I WILL SUBMIT MY TC/ COUNTERSIGNED TC BY</label>
                        <input type="text" class="form-control fm-input"
                            placeholder="I will submit my TC/ Countersigned TC by" name="countersigned">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>BIRTH CERTIFICATE SUBMITTED</label>
                        <select class="form-control fm-input" name="certificate">
                            <option>Birth certificate submitted</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/user1.png') }}" alt="" width="100">
                            </div>
                            <div class="col-md-8">
                                <label>Photo (Passport Size):*</label>
                                <input type="file" class="form-control fm-input" placeholder="" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/sign.png') }}" alt="" width="100;">
                            </div>
                            <div class="col-md-8">
                                <label>Signature Image* :</label>
                                <input type="file" class="form-control fm-input" placeholder="" name="signature">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label><input type="checkbox" id="" name="" value="">
                            Having read carefully all the Rule's and Regulation laid down in student's Diary, We hereby
                            agree to abide by them and to be responsible for any act of indiscipline/vandalism in and
                            outside the school premises, failing which the school is free to intiate disciplinary action
                            against the student including financial punishment/suspention/rustication from the
                            school.</label>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <button type="submit" class="btn btn-warning-submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection
