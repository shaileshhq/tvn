@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
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
            <table class="table table-fm table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Document</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">Affiliation Letter</td>
                        <td class="text-center">
                            <a href="{{ asset('front/documents/affiliationLetter-09670914234.pdf') }}" target="_blank"
                                class="btn btn-success">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">Annual Academic Calendar</td>
                        <td class="text-center">
                            <a href="{{ asset('front/documents/affiliationLetter-09670914234.pdf') }}" target="_blank"
                                class="btn btn-success">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">Building Certificate</td>
                        <td class="text-center">
                            <a href="{{ asset('front/documents/BuildingCertificate-09670914234.pdf') }}" target="_blank"
                                class="btn btn-success">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">DEO Certificate</td>
                        <td class="text-center">
                            <a href="{{ asset('front/documents/DEOCertificate-09670914234.pdf') }}" target="_blank"
                                class="btn btn-success">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">Fee Structure</td>
                        <td class="text-center">
                            <a href="{{ asset('front/documents/FeeStructure-09670914234.pdf') }}" target="_blank"
                                class="btn btn-success">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">Fire Certificate</td>
                        <td class="text-center">
                            <a href="{{ asset('front/documents/FireCertificate-09670914234.pdf') }}" target="_blank"
                                class="btn btn-success">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">Last 3 Years Result</td>
                        <td class="text-center">
                            <a href="{{ asset('front/documents/Last3YearsResult-09670914234.pdf') }}" target="_blank"
                                class="btn btn-success">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">NOC</td>
                        <td class="text-center">
                            <a href="{{ asset('front/documents/NOC-09670914234.pdf') }}" target="_blank"
                                class="btn btn-success">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">Parent Teacher Association</td>
                        <td class="text-center">
                            <a href="{{ asset('front/documents/ParentTeacherAssociation-09670914234.pdf') }}"
                                target="_blank" class="btn btn-success">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">Recognition Certificate</td>
                        <td class="text-center">
                            <a href="{{ asset('front/documents/RecognitionCertificate-09670914234.pdf') }}" target="_blank"
                                class="btn btn-success">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">School Managing Committee</td>
                        <td class="text-center">
                            <a href="{{ asset('front/documents/SchoolManagingCommitee-09670914234.pdf') }}" target="_blank"
                                class="btn btn-success">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">Trust Certificate</td>
                        <td class="text-center">
                            <a href="{{ asset('front/documents/TrustCertificate-09670914234.pdf') }}" target="_blank"
                                class="btn btn-success">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">Water Health Certificate</td>
                        <td class="text-center">
                            <a href="{{ asset('front/documents/WaterHealthCertificate-09670914234.pdf') }}" target="_blank"
                                class="btn btn-success">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
