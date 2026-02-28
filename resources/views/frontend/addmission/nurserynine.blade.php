@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Admission Form Nursery to 9th Class </h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="active">Admission Form Nursery to 9th</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->

    <section class="form-section">
        <div class="container">
            <form action="{{ route('front.nurserynineStore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <label>Class in which Admission</label>
                        <select class="form-control fm-input" name="class">
                            <option value="" selected>Class in which admission is sought for</option>
                            @foreach ($class as $class_data)
                                <option value="{{ $class_data->id }}">{{ $class_data->class_name }}</option>
                            @endforeach
                        </select>
                        @error('class')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>Session</label>
                        <input type="text" class="form-control fm-input" name="session" placeholder="Enter Session">
                        @error('session')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control fm-input" name="name" placeholder="Enter Name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>Gender</label>
                        <select class="form-control fm-input" name="gender">
                            <option value="" selected>Select Gender</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="other">Other</option>
                        </select>
                        @error('gender')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>Blood Group</label>
                        <select class="form-control fm-input" name="blood">
                            <option value="" selected>Blood Group</option>
                            <option value="a+">A+</option>
                            <option value="a-">A-</option>
                            <option value="b+">B+</option>
                            <option value="b-">B-</option>
                            <option value="o+">O+</option>
                            <option value="o-">O-</option>
                            <option value="ab+">AB+</option>
                            <option value="ab-">AB-</option>
                        </select>
                        @error('blood')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label>Date Of Birth</label>
                        <input type="date" class="form-control fm-input" name="date_of_birth"
                            placeholder="Enter Date Of Birth">
                        @error('date_of_birth')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label>AGE OF STUDENT ON 31ST MARCH:</label>
                        <h5>DO YOU BELONG TO GEN./SC/ST/OBC/EWS/DISABLED/S.G. CHILD? ATTACH CERTIFICATE / क्या आप
                            सामान्य श्रेणी / अनुसूचित जनजाति/ओबीसी से / आर्थिक रूप से कमजोर वर्ग / विकलांग/इकलौती कन्या,
                            यदि हां तो प्रमाण-पत्र संलग्न करे निम्नलिखित में से जो भी लागु हो उसे सही () करें|</h5>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <select class="form-control fm-input" name="caste">
                            <option value="" selected>Select Caste</option>
                            <option value="gen">General</option>
                            <option value="obc">OBC</option>
                            <option value="st/sc">SC/ST</option>
                            <option value="ews">EWS</option>
                            <option value="disabled">Disabled</option>
                        </select>
                        @error('caste')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>(i) Name (in capital letters) नाम/</td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="mother_name">
                                            @error('mother_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="father_name">
                                            @error('father_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>(ii) Nationality & Occupation/राष्ट्रीयता और व्यवसाय</td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="mother_occupation">
                                            @error('mother_occupation')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="father_occupation">
                                            @error('father_occupation')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>(iii) Name of Office & full address with Telephone No./
                                            कार्यालय का नाम और पूरा पता व मोबाइल न</td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="mother_office_address">
                                            @error('mother_office_address')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="father_offic_address">
                                            @error('father_offic_address')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>(iv) Full residential address with Telephone no./
                                            आवासीय पता व मोबाइल न</td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="">
                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>(v) Annual Income in (₹)/ वार्षिक आय</td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="">

                                        </td>
                                        <td><input type="text" class="form-control fm-table" placeholder=""
                                                name="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <textarea type="text" class="form-control fm-input"
                            placeholder="Name and Adress of local guardian(if any)/ स्थानीय अभिभावक का नाम और पता (यदि हो):" name="local_address"></textarea>
                        @error('local_address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-lg-12">
                        <h5>WEATHER LAST SCHOOL WAS CBSE AFFILIATED/ क्या पिछला Cविद्यालय सीबीएससी बोर्ड से संबंद्धता
                            प्राप्त
                            था:</h5>
                    </div>
                    <div class="col-lg-4">
                        <select class="form-control fm-input" name="cbsc_affilated">
                            <option value="" selected>CBSC Affiliated</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('cbsc_affilated')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                        <h5>IF THE LAST SCHOOL WAS NOT AFFILIATED WITH CBSE, SPECIFY NAME OF THE BOARD/ यदि अंतिम Cविद्यालय
                            सीबीएसई बोर्ड से संबद्ध नहीं था तो सम्बंधित बोर्ड का नाम दर्शाये</h5>
                        <textarea type="text" class="form-control fm-input"
                            placeholder="Name and Adress of local guardian(if any)/ स्थानीय अभिभावक का नाम और पता (यदि हो):"
                            name="not_affilated"></textarea>

                    </div>
                    <div class="col-lg-12 mb-3">
                        <h5>IF LAST SCHOOL NAME/ अंतिम विद्यालय का नाम व पता</h5>
                        <textarea type="text" class="form-control fm-input"
                            placeholder="Name and Adress of local guardian(if any)/ स्थानीय अभिभावक का नाम और पता (यदि हो):"
                            name="last_school"></textarea>
                            @error('last_school')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-12 mb-3">
                        <h5>RESULT OF LAST EXAMINATION/ विगत परीक्षा परिणाम:</h5>
                    </div>
                    <div class="col-lg-4">
                        <select class="form-control fm-input" name="result">
                            <option value="" selected>Select Result</option>
                            <option value="pass">Pass</option>
                            <option value="fail">Fail</option>
                        </select>
                        @error('result')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control fm-input" placeholder="Enter percentage"
                            name="percentage">
                            @error('percentage')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <h5>SUBJECTS PROPOSED TO OFFER/ लिए जाने वाले प्रस्तावित विषय :</h5>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <textarea type="text" class="form-control fm-input" placeholder="Subject" name="subject"></textarea>
                        @error('subject')
                        <small class="text-danger">{{ $message }}</small>
                         @enderror
                    </div>
                    <div class="col-lg-12">
                        <h5>WHETHER THE TRANSFER CERTIFICATE IS ATTACHED /क्या स्थानांतरण प्रमाण पत्र संलग्न है:</h5>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <select class="form-control fm-input" name="certificate">
                            <option value="" selected>Certificate Attached</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('certificate')
                        <small class="text-danger">{{ $message }}</small>
                         @enderror
                    </div>
                    <div class="col-lg-12 mb-3 p-0">
                        <div class="col-lg-4 mb-3">
                            <label>DATE OF T.C.</label>
                            <input type="date" class="form-control fm-input" placeholder="Enter TC" name="tc_date">
                            @error('tc_date')
                            <small class="text-danger">{{ $message }}</small>
                             @enderror
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label>MOTHER TONGUE</label>
                            <input type="text" class="form-control fm-input" placeholder="Mother Tongue / मातृ भाषा:"
                                name="mother_tongue">
                                @error('mother_tongue')
                                <small class="text-danger">{{ $message }}</small>
                                 @enderror
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label>HOME TOWN</label>
                            <input type="text" class="form-control fm-input" placeholder="Home town / गृहनगर:"
                                name="home_town">
                                @error('home_town')
                                <small class="text-danger">{{ $message }}</small>
                                 @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/user1.png') }}" alt="" width="100">
                            </div>
                            <div class="col-md-8">
                                <label>Photo (Passport Size):*</label>
                                <input type="file" class="form-control fm-input" placeholder="" name="image">
                                @error('image')
                                <small class="text-danger">{{ $message }}</small>
                                 @enderror
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
                                @error('signature')
                                <small class="text-danger">{{ $message }}</small>
                                 @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label><input type="checkbox" id="" name="" value="">
                            I hereby declare that above information furnished by me is correct to the best of my knowledge &
                            brlief / मैं एतद्द्वारा घोषणा करता/करती हूँ की मेरे द्वारा दी गयी उपर्युक्त सूचना मेरी जानकारी
                            में सत्य व सही हैं।</label>
                        I shall abide by the rules of the Vidyalaya / मैं विद्यालय के नियमों से प्रतिबद्ध रहूंगा /
                        रहूंगी।</label>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <button type="submit" class="btn btn-warning-submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
