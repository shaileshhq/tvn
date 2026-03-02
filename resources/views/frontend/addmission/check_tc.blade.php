@extends('frontend.layout.app')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Check TC - Tulsi Vidya Niketan (TVN)</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="active">Check TC</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->

    <section class="form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                    <div class="tc-check-card" style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 15px rgba(0,0,0,0.1); margin: 30px 0;">
                        <h3 style="text-align:center; margin-bottom: 25px; color: #333;">Check Your Transfer Certificate</h3>
                        <form action="{{ route('front.check-tc') }}" method="GET">
                            <div class="mb-3">
                                <label style="font-weight: 600; margin-bottom: 5px; display: block;">TC No. <span style="color: red;">*</span></label>
                                <input type="text" class="form-control fm-input" name="tc_no" placeholder="Enter TC Number" value="{{ request('tc_no') }}" required>
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-warning-submit">
                                    <i class="fa fa-search"></i> Search TC
                                </button>
                            </div>
                        </form>

                        @if(request('tc_no'))
                            @if(isset($tc_data) && $tc_data)
                                <div class="tc-result" style="margin-top: 20px; padding: 20px; border: 1px solid #28a745; border-radius: 8px; background: #f0fff4;">
                                    <h4 style="color: #28a745; margin-bottom: 15px;"><i class="bi bi-check-circle-fill"></i> TC Found!</h4>
                                    <table class="table" style="margin-bottom: 15px;">
                                        <tr>
                                            <td><strong>TC No.</strong></td>
                                            <td>{{ $tc_data->tc_no }}</td>
                                        </tr>
                                        @if($tc_data->admission_no)
                                        <tr>
                                            <td><strong>Admission No.</strong></td>
                                            <td>{{ $tc_data->admission_no }}</td>
                                        </tr>
                                        @endif
                                    </table>
                                    <a href="{{ asset('storage/' . $tc_data->file) }}" download class="btn btn-success" style="width: 100%; padding: 10px;">
                                        <i class="fa fa-download"></i> View / Download TC
                                    </a>
                                </div>
                            @else
                                <div class="tc-result" style="margin-top: 20px; padding: 20px; border: 1px solid #dc3545; border-radius: 8px; background: #fff5f5;">
                                    <h4 style="color: #dc3545;"><i class="bi bi-x-circle-fill"></i> TC Not Found!</h4>
                                    <p style="margin-bottom: 0; color: #666;">No Transfer Certificate found with TC No. <strong>{{ request('tc_no') }}</strong>. Please check the number and try again.</p>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
