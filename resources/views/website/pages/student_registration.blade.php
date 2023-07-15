@extends('website.layout.master')
@section('content')
    <style>
        .form {
            padding: 30px;
        }
    </style>
    <section id="inner-banner">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>REGISTRATION</h1>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="breadcrumb"><a href="index.html">Home</a> / registration</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Registration Form</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form class="forms-sample" id="frm_register" name="frm_register" method="post" role="form"
                        action="{{ route('add-users') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="email" name="u_email" id="u_email" value="{{ old('u_email') }}"
                                placeholder="Email" />

                        </div>
                        @if ($errors->has('u_email'))
                            <span class="red-text"><?php echo $errors->first('u_email', ':message'); ?></span>
                        @endif
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
                            <input type="text" name="mobile_no" id="mobile_no" value="{{ old('mobile_no') }}"
                                placeholder="Mobile no." />

                        </div>
                        @if ($errors->has('mobile_no'))
                            <span class="red-text"><?php echo $errors->first('mobile_no', ':message'); ?></span>
                        @endif
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="u_password" id="u_password" placeholder="Password" />

                        </div>
                        @if ($errors->has('u_password'))
                            <span class="red-text"><?php echo $errors->first('u_password', ':message'); ?></span>
                        @endif
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="Re-type Password" />

                        </div>
                        @if ($errors->has('password_confirmation'))
                            <span class="red-text"><?php echo $errors->first('password_confirmation', ':message'); ?></span>
                        @endif
                        <div class="input_field select_option">
                            <select class="form-control" id="registration_type" name="registration_type">
                                <option>Select Type Of Registration</option>
                                <option value="0" selected>Student</option>
                                <option value="1" hidden>Industry</option>
                            </select>
                            <div class="select_arrow"></div>

                        </div>
                        @if ($errors->has('registration_type'))
                            <span class="red-text"><?php echo $errors->first('registration_type', ':message'); ?></span>
                        @endif
                        <div class="input_field select_option">
                            <select class="form-control" id="institute_type" name="institute_type">
                                <option value="">Select Type Of Course</option>
                                <option value="0">Degree</option>
                                <option value="1">Diploma</option>
                                <option value="2">ITI</option>
                            </select>
                            <div class="select_arrow"></div>

                        </div>
                        @if ($errors->has('institute_type'))
                            <span class="red-text"><?php echo $errors->first('institute_type', ':message'); ?></span>
                        @endif
                        <input class="button" type="submit" value="Register" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $().ready(function() {
            $("#signupForm").validate({
                rules: {
                    nameproject: "required",
                    Nameofyourcollege: "required",
                    nameparticipants: "required",
                    PaymentUTRCode: "required",
                    email: {
                        required: true,
                        email: true,
                    },
                    paymentconfirm: "required",
                    paymentcode: "required",
                    attchcopy: "required",
                    imgupload: "required",
                    projectupload: "required"
                },
                // In 'messages', users have to specify messages as per rules
                messages: {
                    nameproject: "This field is required.*",
                    nameparticipants: "This field is required.*",
                    Nameofyourcollege: "This field is required.*",
                    PaymentUTRCode: "This field is required*.",
                    imgupload: "This field is required.*",
                    projectupload: "This field is required.*"
                },
            });
        });
    </script>
@endsection
