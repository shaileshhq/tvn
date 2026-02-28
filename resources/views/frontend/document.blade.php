@extends('frontend.layout.app')
@section('content')
    <style>
        .modal-content{
            border:0;
        }
        .modal-fullscreen {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .modal-fullscreen .modal-content {
            /* height: 100%; */
            border-radius: 0;
        }

        .modal-fullscreen .modal-body {
            /* height: calc(100% - 50px); */
            text-align: center;
            overflow: hidden;
            padding: 0;
        }

        .modal-fullscreen iframe {
            width: 100%;
            height: 100%;
        }
    </style>
    <script>
        // PDF Viewer scripts were removed as dynamic document loading is disabled.
    </script>
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>School Documents</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="active">School Documents</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->
    <section id="school-timing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <h3 class="text-center" style="margin-bottom: 30px; text-transform: uppercase; font-weight: bold;">Mandatory Public Disclosure</h3>
                </div>
            </div>

            <!-- General Information Table -->
            <h4 class="text-uppercase" style="margin-top: 20px; margin-bottom: 20px; font-weight: bold;">A. GENERAL INFORMATION</h4>
            <table class="table table-fm table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10%;">S.NO.</th>
                        <th class="text-center" style="width: 40%;">INFORMATION</th>
                        <th class="text-center" style="width: 50%;">DETAILS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>NAME OF THE SCHOOL</td>
                        <td>TULSI VIDYA NIKETAN</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>AFFILIATION NO</td>
                        <td>2130184</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>SCHOOL CODE</td>
                        <td>71294</td>
                    </tr>
                         <td class="text-center">4</td>
                        <td>UDISE CODE</td>
                        <td>09670914234</td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>COMPLETE ADDRESS WITH PIN CODE</td>
                        <td>NAGWA, LANKA, VARANASI - 221005</td>
                    </tr>
                     <tr>
                        <td class="text-center">6</td>
                        <td>PRINCIPAL NAME & QUALIFICATION</td>
                        <td>DR. SUNIL KUMAR SRIVASTAVA, M.Sc, B.Ed, Ph.D</td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td>SCHOOL EMAIL ID</td>
                        <td>tvn.vns@rediffmail.com</td>
                    </tr>
                     <tr>
                        <td class="text-center">8</td>
                        <td>CONTACT DETAILS</td>
                        <td>0542-2985134, 9454369332</td>
                    </tr>
                     <tr>
                        <td class="text-center">9</td>
                        <td>WEBSITE</td>
                        <td>www.tvnschools.com</td>
                    </tr>
                     <tr>
                        <td class="text-center">10</td>
                        <td>AFFILIATION DURATION</td>
                        <td>01-04-2025 to 31-03-2030</td>
                    </tr>
                </tbody>
            </table>

            <h4 class="text-uppercase" style="margin-top: 40px; margin-bottom: 20px; font-weight: bold;">
                B. DOCUMENTS AND INFORMATION
            </h4>
            <table class="table table-fm table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10%;">SL NO</th>
                        <th class="text-center" style="width: 60%;">DOCUMENT / INFORMATION</th>
                        <th class="text-center" style="width: 30%;">UPLOAD DOCUMENT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF AFFILIATION, IF ANY</td>
                        <td class="text-center"><a href="{{ asset('storage/document/affiliation-letter.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/RENEWAL CERTIFICATE, AS APPLICABLE</td>
                        <td class="text-center"><a href="{{ asset('storage/document/society-renewal.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED, IF APPLICABLE, BY THE STATE GOVT./UT</td>
                        <td class="text-center"><a href="{{ asset('storage/document/noc.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT, 2009, AND IT’S RENEWAL IF APPLICABLE</td>
                        <td class="text-center"><a href="{{ asset('storage/document/deo-certificate.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE</td>
                        <td class="text-center"><a href="{{ asset('storage/document/building-certificate.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td>COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY THE COMPETENT AUTHORITY</td>
                        <td class="text-center"><a href="{{ asset('storage/document/fire-certificate.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td>COPY OF THE DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATIONOR SELF CERTIFICATION BY SCHOOL</td>
                        <td class="text-center"><a href="{{ asset('storage/document/deo-certificate.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                    <tr>
                        <td class="text-center">8</td>
                        <td>COPIES OF VALID DRINKING WATER, HEALTH AND SANITATION CERTIFICATES AND WATER TESTING REPORT</td>
                        <td class="text-center"><a href="{{ asset('storage/document/water-health-certificate.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                </tbody>
            </table>

            <h4 class="text-uppercase" style="margin-top: 40px; margin-bottom: 20px; font-weight: bold;">
                C. RESULT AND ACADEMICS
            </h4>

            <table class="table table-fm table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10%;">S.NO.</th>
                        <th class="text-center" style="width: 60%;">DOCUMENTS/INFORMATION</th>
                        <th class="text-center" style="width: 30%;">UPLOAD DOCUMENTS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>FEE STRUCTURE OF THE SCHOOL</td>
                        <td class="text-center"><a href="{{ asset('storage/document/fee-structure.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>ANNUAL ACADEMIC CALANDER.</td>
                        <td class="text-center"><a href="{{ asset('storage/document/academic-calender.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)</td>
                        <td class="text-center"><a href="{{ asset('storage/document/managing-commitee.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS</td>
                        <td class="text-center"><a href="{{ asset('storage/document/school-pta.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                     <tr>
                        <td class="text-center">5</td>
                        <td>LAST THREE-YEAR RESULT OF THE BOARD EXAMINATION (AS PER APPLICABLILITY)</td>
                        <td class="text-center"><a href="{{ asset('storage/document/last-three-year.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                </tbody>
            </table>

            <h5 class="text-uppercase" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">RESULT CLASS -X</h5>
            <table class="table table-fm table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">YEAR</th>
                        <th class="text-center">NO OF REGISTERED STUDENTS</th>
                        <th class="text-center">NO OF STUDENTS PASSED</th>
                        <th class="text-center">PASS PERCENTAGE %</th>
                        <th class="text-center">REMARKS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">2022-23</td>
                        <td class="text-center">298</td>
                        <td class="text-center">295</td>
                        <td class="text-center">99.3%</td>
                        <td class="text-center"></td>
                    </tr>
                    <tr>
                        <td class="text-center">2023-24</td>
                        <td class="text-center">296</td>
                        <td class="text-center">295</td>
                        <td class="text-center">99.6%</td>
                        <td class="text-center"></td>
                    </tr>
                    <tr>
                        <td class="text-center">2024-25</td>
                        <td class="text-center">302</td>
                        <td class="text-center">302</td>
                        <td class="text-center">100%</td>
                        <td class="text-center"></td>
                    </tr>
                </tbody>
            </table>

            <h5 class="text-uppercase" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">RESULT CLASS -XII</h5>
            <table class="table table-fm table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">YEAR</th>
                        <th class="text-center">NO OF REGISTERED STUDENTS</th>
                        <th class="text-center">NO OF STUDENTS PASSED</th>
                        <th class="text-center">PASS PERCENTAGE %</th>
                        <th class="text-center">REMARKS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">2022-23</td>
                        <td class="text-center">296</td>
                        <td class="text-center">272</td>
                        <td class="text-center">92.5%</td>
                        <td class="text-center"></td>
                    </tr>
                    <tr>
                        <td class="text-center">2023-24</td>
                        <td class="text-center">281</td>
                        <td class="text-center">242</td>
                        <td class="text-center">92.5%</td>
                        <td class="text-center"></td>
                    </tr>
                    <tr>
                        <td class="text-center">2024-25</td>
                        <td class="text-center">268</td>
                        <td class="text-center">257</td>
                        <td class="text-center">95.8%</td>
                        <td class="text-center"></td>
                    </tr>
                </tbody>
            </table>

            <h5 class="text-uppercase" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">D. STAFF DETAILS – TEACHING</h5>
            <table class="table table-fm table-bordered">
                <thead>
                     <tr>
                        <th class="text-center" style="width: 10%;">S.NO.</th>
                        <th class="text-center" style="width: 40%;">INFORMATION</th>
                        <th class="text-center" style="width: 20%;">NUMBER/STRENGTH</th>
                        <th class="text-center" style="width: 30%;">NAME AND QUALIFICATIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>PRINCIPAL</td>
                        <td class="text-center">01</td>
                        <td class="text-center">DR. SUNIL KUMAR SRIVASTAVA, M.Sc, B.Ed, Ph.D</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>VICE PRINCIPAL</td>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>HEADMISTRESS/HEADMASTER</td>
                        <td class="text-center">-</td>
                        <td class="text-center">-</td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>TOTAL NO. OF TEACHERS</td>
                        <td class="text-center">71</td>
                        <td class="text-center"></td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td>PGT</td>
                        <td class="text-center">19</td>
                        <td class="text-center"><a href="{{ asset('storage/document/pgt.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td>TGT</td>
                        <td class="text-center">25</td>
                        <td class="text-center"><a href="{{ asset('storage/document/tgt.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                    <tr>
                        <td class="text-center"></td>
                        <td>PRT</td>
                        <td class="text-center">27</td>
                        <td class="text-center"><a href="{{ asset('storage/document/prt.pdf') }}" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                     <tr>
                        <td class="text-center">5</td>
                        <td>TEACHERS SECTION RATIO</td>
                        <td class="text-center">1:1.5</td>
                        <td class="text-center">-</td>
                    </tr>
                     <tr>
                        <td class="text-center">6</td>
                        <td>DETAILS OF SPECIAL EDUCATOR</td>
                        <td class="text-center">NIL</td>
                        <td class="text-center">-</td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td>DETAILS OF COUNSELLOR AND WELLNESS TEACHER</td>
                        <td class="text-center">01</td>
                        <td class="text-center">VINAY KUMAR PANDEY</td>
                    </tr>
                </tbody>
            </table>


            <h5 class="text-uppercase" style="margin-top: 30px; margin-bottom: 20px; font-weight: bold;">E. SCHOOL INFRASTRUCTURE</h5>
            <table class="table table-fm table-bordered">
                <thead>
                     <tr>
                        <th class="text-center" style="width: 10%;">S.NO.</th>
                        <th class="text-center" style="width: 60%;">INFORMATION</th>
                        <th class="text-center" style="width: 30%;">DETAILS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>TOTAL CAMPUS AREA OF THE SCHOOL (IN SQR MTR)</td>
                        <td class="text-center">5998 sq mt</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>NO. AND SIZE OF THE CLASSSROOM (IN SQR MTR)</td>
                        <td class="text-center">48 class rooms (616sqft each) & (57.22 sq mt each)</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQR MTR)</td>
                        <td class="text-center">06 Labs (1073 sqft each & 99.68 sqmt each)</td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>NO. AND SIZE OF LIBRARY (IN SQR MTR)</td>
                        <td class="text-center">1011 sq ft (93.92 sq mt)</td>
                    </tr>
                     <tr>
                        <td class="text-center">5</td>
                        <td>INTERNET FACILITY (YES/NO)</td>
                        <td class="text-center">YES</td>
                    </tr>
                     <tr>
                        <td class="text-center">6</td>
                        <td>NO. OF GIRLS TOILETS</td>
                        <td class="text-center">16</td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td>NO. OF BOYS TOILETS</td>
                        <td class="text-center">16</td>
                    </tr>
                     <tr>
                        <td class="text-center">8</td>
                        <td>NO. OF CWSN TOILETS</td>
                        <td class="text-center">02</td>
                    </tr>
                    <tr>
                        <td class="text-center">9</td>
                        <td>LINK OF YOU TUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF THE SCHOOL</td>
                        <td class="text-center"><a href="https://youtu.be/8EE7x-HrjrM?si=Eiewbko6HfTuVYGs" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-link-45deg"></i> View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

@endsection
