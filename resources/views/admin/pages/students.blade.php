@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">User Details
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> User Details </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="page-title">Talent search - College Students Registration form</h2>
                            <h6 class="page-title mb-4">
                                Event organized by Laghu Udyog Bharti & Government Polytechnic,
                                Nashik (DTE)
                            </h6>
                            <form class="forms-sample" action="{{ route('add-user-details') }}" method="POST"
                                enctype="multipart/form-data" id="regForm">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="project_name">Project Name</label>&nbsp<span
                                                class="red-text">*</span>
                                            <input class="form-control" name="project_name" id="project_name"
                                                placeholder="Enter the Project Name" name="project_name"
                                                value="{{ old('project_name') }}">
                                            @if ($errors->has('project_name'))
                                                <span class="red-text"><?php echo $errors->first('project_name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="participants_name">Participants Name </label>&nbsp<span
                                                class="red-text">*</span>
                                            <input class="form-control" name="participants_name" id="participants_name"
                                                placeholder="Enter the Project Name" name="participants_name"
                                                value="{{ old('participants_name') }}">
                                            @if ($errors->has('participants_name'))
                                                <span class="red-text"><?php echo $errors->first('participants_name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="education">Education</label>
                                        <span class="red-text">*</span>
                                        <select class="form-control" name="education" id="education">
                                            <option value="">Select</option>
                                            <option value="ITI" {{ old('education') == 'ITI' ? 'selected' : '' }}>
                                                ITI
                                            </option>
                                            <option value="Diploma" {{ old('education') == 'Diploma' ? 'selected' : '' }}>
                                                Diploma
                                            </option>
                                            <option value="Degree" {{ old('education') == 'Degree' ? 'selected' : '' }}>
                                                Degree
                                            </option>
                                        </select>
                                        @if ($errors->has('education'))
                                            <span class="red-text">{{ $errors->first('education') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <label for="branch">Branch</label>
                                        <span class="red-text">*</span>
                                        <select class="form-control" name="branch" id="branch">
                                            <option value="">Select</option>
                                            <option value="E&TC" {{ old('branch') == 'E&TC' ? 'selected' : '' }}>
                                                E&TC
                                            </option>
                                            <option value="Computer" {{ old('branch') == 'Computer' ? 'selected' : '' }}>
                                                Computer
                                            </option>
                                            <option value="IT" {{ old('branch') == 'IT' ? 'selected' : '' }}>
                                                IT
                                            </option>
                                        </select>
                                        @if ($errors->has('branch'))
                                            <span class="red-text">{{ $errors->first('branch') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6 pt-2">
                                        <label for="college_name">College Name</label>
                                        <span class="red-text">*</span>
                                        <select class="form-control" name="college_name" id="college_name">
                                            <option value="">Select</option>
                                            <option value="ITI" {{ old('college_name') == 'ITI' ? 'selected' : '' }}>
                                                ITI Society’s
                                            </option>
                                            <option value="Sandip Foundation"
                                                {{ old('college_name') == 'Sandip Foundation' ? 'selected' : '' }}>
                                                Sandip Foundation
                                            </option>
                                            <option value="K. K. Wagh Institute"
                                                {{ old('college_name') == 'K. K. Wagh Institute' ? 'selected' : '' }}>
                                                K. K. Wagh Institute
                                            </option>
                                        </select>
                                        @if ($errors->has('college_name'))
                                            <span class="red-text">{{ $errors->first('college_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-6 pt-2">
                                        <div class="form-group">
                                            <label for="company_name">Company Name </label>&nbsp<span
                                                class="red-text">*</span>
                                            <input class="form-control" name="company_name" id="company_name"
                                                placeholder="Enter the Company Name" name="company_name"
                                                value="{{ old('company_name') }}">
                                            @if ($errors->has('company_name'))
                                                <span class="red-text"><?php echo $errors->first('company_name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="transaction_id">Transaction Id </label>&nbsp<span
                                                class="red-text">*</span>
                                            <input class="form-control" name="transaction_id" id="transaction_id"
                                                placeholder="Enter the Transaction Id" name="transaction_id"
                                                value="{{ old('transaction_id') }}">
                                            @if ($errors->has('transaction_id'))
                                                <span class="red-text"><?php echo $errors->first('transaction_id', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="designation">Designation </label>&nbsp<span
                                                class="red-text">*</span>
                                            <input class="form-control" name="designation" id="designation"
                                                placeholder="Enter the Designation" name="designation"
                                                value="{{ old('designation') }}">
                                            @if ($errors->has('designation'))
                                                <span class="red-text"><?php echo $errors->first('designation', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="registrationfees"><b>Registration fees Rs.750/- paid by</b></label>
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="registration_fees"
                                                id="neft" value="neft" />
                                            <label class="form-check-label" for="neft">NEFT</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="registration_fees"
                                                id="qrcode" value="qrcode" checked />
                                            <label class="form-check-label" for="qrcode">QR code</label>
                                        </div>
                                        @if ($errors->has('registration_fees'))
                                            <span class="red-text">{{ $errors->first('registration_fees') }}</span>
                                        @endif
                                    </div>
                                    {{-- <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="passport_size">Add Payment Screenshot </label>&nbsp<span
                                                class="red-text">*</span><br>
                                            <input type="file" name="passport_size" id="passport_size"
                                                accept="image/*" value="{{ old('passport_size') }}"><br>
                                            @if ($errors->has('passport_size'))
                                                <span class="red-text"><?php //echo $errors->first('passport_size', ':message');
                                                ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="soft_copy">Attach Your Project soft copy (Upload
                                                File)</label>&nbsp<span class="red-text">*</span><br>
                                            <input type="file" name="soft_copy" id="soft_copy" accept="pdf/*"
                                                value="{{ old('soft_copy') }}"><br>
                                            @if ($errors->has('soft_copy'))
                                                <span class="red-text"><?php//echo $errors->first('soft_copy', ':message'); ?> ?></span>
                                            @endif
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-md-6">
                                        <p>
                                            <label for="PaymentUTRCode"><b>Payment confirmation - UTR
                                                    Code</b></label><br />
                                            <input id="PaymentUTRCode" name="PaymentUTRCode" type="text" />
                                        </p>
                                        <div>
                                            <p class="mt-3">
                                                <label for="bankdetails">
                                                    <b>Bank details:</b><br />
                                                    A/c Name: Laghu Udyog Bharati <br />
                                                    Bank: TJSB Bank <br />
                                                    Branch: Gangapur Rd. <br />
                                                    A/c No.: 021110100000661 <br />
                                                    IFS Code: TJSB0000021 <br />
                                                </label>
                                                <img src="../LUB PAYMENT QR.jpg" alt="" />
                                            </p>
                                        </div>
                                    </div> --}}



                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-success">Save &amp; Submit</button>
                                        {{-- <button type="reset" class="btn btn-danger">Cancel</button> --}}
                                        <span><a href="" class="btn btn-sm btn-primary ">Back</a></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
