@extends('admin.layout.master')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .password-toggle {
            cursor: pointer;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        .fa-eye-slash {
            /* display: none; */
        }
    </style>
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    <b>Event organized by Laghu Udyog Bharti & Government Polytechnic,
                        Nashik (DTE)</b>
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Users Master</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">

                    <div class="card">
                        <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                Project details submitted !
                            </div>

                            <div class="row">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="u_email">Email ID</label>&nbsp<span class="red-text">*</span>
                                        <input type="text" class="form-control" name="u_email" id="u_email"
                                            placeholder="" value="{{ $user_data['u_email'] }}" readonly>
                                        @if ($errors->has('u_email'))
                                            <span class="red-text"><?php echo $errors->first('u_email', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="mobile_no">Contact No</label>&nbsp<span class="red-text">*</span>
                                        <input type="text" class="form-control" name="mobile_no" id="mobile_no"
                                            placeholder="" value="{{ $user_data['mobile_no'] }}" readonly>
                                        @if ($errors->has('mobile_no'))
                                            <span class="red-text"><?php echo $errors->first('mobile_no', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="project_title">Project Title</label>&nbsp<span class="red-text">*</span>
                                        <input type="text" class="form-control" name="project_title" id="project_title"
                                            placeholder="" value="{{ $project_data['project_title'] }}" readonly>
                                        @if ($errors->has('project_title'))
                                            <span class="red-text"><?php echo $errors->first('project_title', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="education_type">Select Qualification</label>&nbsp<span
                                            class="red-text">*</span>
                                        <select class="form-control" id="education_type" name="education_type"
                                            onchange="education_type(this.value)" disabled>
                                            <option value="">Select</option>
                                            <option value="3"
                                                @if ($project_data['education_type'] == '3') {{ 'selected' }} @endif>ITI
                                            </option>
                                            <option value="4"
                                                @if ($project_data['education_type'] == '4') {{ 'selected' }} @endif>Diploma
                                            </option>
                                            <option value="5"
                                                @if ($project_data['education_type'] == '5') {{ 'selected' }} @endif>Degree
                                            </option>
                                            <option value="6"
                                                @if ($project_data['education_type'] == '6') {{ 'selected' }} @endif>Other
                                            </option>

                                        </select>
                                        @if ($errors->has('education_type'))
                                            <span class="red-text"><?php echo $errors->first('education_type', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6" id="other_institute" style="display:none">
                                    <div class="form-group">
                                        <label for="institute_other_name">Enter Education Details</label>&nbsp<span
                                            class="red-text">*</span>
                                        <input type="text" class="form-control" name="institute_other_name"
                                            id="institute_other_name" placeholder=""
                                            value="{{ $project_data['institute_other_name'] }}" readonly>
                                        @if ($errors->has('institute_other_name'))
                                            <span class="red-text"><?php echo $errors->first('institute_other_name', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="name_of_institute">Select Institute</label>&nbsp<span
                                            class="red-text">*</span>
                                        <select class="form-control" id="name_of_institute" name="name_of_institute"
                                            onchange="myFunction(this.value)" disabled>
                                            <option value="">Select</option>
                                            <option value="0"
                                                @if ($project_data['name_of_institute'] == '0') {{ 'selected' }} @endif>Other
                                            </option>

                                        </select>
                                        @if ($errors->has('name_of_institute'))
                                            <span class="red-text"><?php echo $errors->first('name_of_institute', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6" id="other_name_of_school" style="display:none">
                                    <div class="form-group">
                                        <label for="name_of_institute_other">Enter Institute Details</label>&nbsp<span
                                            class="red-text">*</span>
                                        <input type="text" class="form-control" name="name_of_institute_other"
                                            id="name_of_institute_other" placeholder=""
                                            value="{{ $project_data['name_of_institute_other'] }}" readonly>
                                        @if ($errors->has('name_of_institute_other'))
                                            <span class="red-text"><?php echo $errors->first('name_of_institute_other', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="branch_details">Branch</label>&nbsp<span class="red-text">*</span>
                                        <input type="text" class="branch_details form-control" id="branch_details"
                                            name="branch_details" value="{{ $project_data['branch_details'] }}" readonly>
                                        @if ($errors->has('branch_details'))
                                            <span class="red-text"><?php echo $errors->first('branch_details', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="payment_type"><b>Registration fees Rs.1000/- paid by</b>
                                        </label>&nbsp<span class="red-text">*</span>
                                        <select class="form-control" id="payment_type" name="payment_type"
                                            onchange="payment_type(this.value)" disabled>
                                            <option value="">Select Payment Mode</option>
                                            <option value="neft"
                                                @if ($project_data['payment_type'] == 'neft') {{ 'selected' }} @endif>NEFT
                                            </option>
                                            <option value="qr_code"
                                                @if ($project_data['payment_type'] == 'qr_code') {{ 'selected' }} @endif>QR Code
                                            </option>

                                        </select>
                                        @if ($errors->has('payment_type'))
                                            <span class="red-text"><?php echo $errors->first('payment_type', ':message'); ?></span>
                                        @endif
                                    </div>


                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="transaction_details">Payment confirmation - UTR
                                            Code</label>&nbsp<span class="red-text">*</span>
                                        <input type="text" class="transaction_details form-control"
                                            id="transaction_details" name="transaction_details"
                                            value="{{ $project_data['transaction_details'] }}" readonly>
                                        @if ($errors->has('transaction_details'))
                                            <span class="red-text"><?php echo $errors->first('transaction_details', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
                                        data-target="#exampleModal">
                                        View payment receipt
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header img-modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Payment receipt</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <img style="width: 100%;height: 260px;"
                                                            src="{{ env('APP_URL') . '/storage/all_web_data/images/payment_proof/' . $user_data['payment_proof'] }}">

                                                    </div>
                                                </div>
                                                <div class="modal-footer img-modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                                <img style="width: 250px;height: 260px;"
                                                    src="{{ env('APP_URL') . '/storage/all_web_data/images/payment_proof/' . $user_data['payment_proof'] }}">

                                            </div> -->
                                </div>



                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <table width="100%" class="table table-bordered">
                                        <thead>
                                            <th>Sr No.</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Passport Size Photo</th>
                                        </thead>
                                        <tbody>

                                            @forelse($participant_data as $key=>$data)
                                                <tr>
                                                    <td> {{ $key + 1 }}</td>
                                                    <td> {{ $data['f_name'] }}</td>
                                                    <td> {{ $data['m_name'] }}</td>
                                                    <td> {{ $data['l_name'] }}</td>
                                                    <td> <img style="width: 50px;height: 60px;"
                                                            src="{{ env('APP_URL') . '/storage/all_web_data/images/userProfile/' . $data['passport_photo'] }}">
                                                    </td>
                                                <tr>
                                                @empty
                                                    {{ 'No participant found' }}
                                            @endforelse

                                        </tbody>
                                    </table>

                                </div>
                            </div>





                            {{--
                            <div class="col-md-6 col-sm-6 text-center mt-4 msg_chat_box">

                                <div class="msg_container">
                                    @forelse($commincation_messege as $key=> $data)
                                        @if ($data['messege_from'] == 'admin')
                                            <div class="message-blue">
                                                <p class="message-content">{{ $data['messege'] }}</p>
                                                <div class="message-timestamp-left">{{ $data['created_at'] }}</div>
                                            </div>
                                           
                                        @else
                                            <div class="message-orange">
                                                <p class="message-content">{{ $data['messege'] }}</p>
                                                <div class="message-timestamp-right">{{ $data['created_at'] }}</div>
                                            </div>

                                           
                                        @endif


                                    @empty
                                        {{ 'No communication found' }}
                                    @endforelse
                                </div>


                                <form class="forms-sample" id="frm_register" name="frm_register" method="post"
                                    role="form" action="{{ route('save-messege') }}" enctype="multipart/form-data">

                                    <div class="row">
                                        <input type="hidden" name="_token" id="csrf-token"
                                            value="{{ Session::token() }}" />
                                        <input type="hidden" name="user_id" id="user_id"
                                            value="{{ $user_id }}" />
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="messege">Enter Messege</label>&nbsp<span
                                                    class="red-text">*</span>
                                                <input type="text" class="form-control" name="messege" id="messege"
                                                    placeholder="" value="{{ $user_data['messege'] }}">
                                                @if ($errors->has('messege'))
                                                    <span class="red-text"><?php echo $errors->first('messege', ':message'); ?></span>
                                                @endif
                                            </div>
                                            <button type="submit" class="btn btn-success mb-3">Save
                                                &amp; Submit</button>
                                        </div>







                                    </div>
                                </form>

                            </div>
                            --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        function submitRegister() {
            document.getElementById("frm_register").submit();
        }
    </script>
    <script>
        $(document).ready(function() {

            $("#education_type").change(function(e) {

            });

            $("#name_of_institute").change(function(e) {
                if ($("#name_of_institute").val() == '0') {
                    $("#other_name_of_school").show();
                } else {
                    $("#other_name_of_school").attr("style", "display:none");
                }
            });


            var education_type = '{{ $project_data['education_type'] }}';

            //$('#name_of_institute').append('<option value="0">ITI</option>');

            if (education_type !== '5' || education_type !== '6') {
                $.ajax({
                    url: '{{ route('get-college-list') }}',
                    type: 'POST',
                    data: {
                        education_type: education_type
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.institute_list.length > 0) {
                            $('#name_of_institute').html(
                                '<option value="">Select Name Of Institute</option>');
                            $.each(response.institute_list, function(index, institute_list) {
                                $('#name_of_institute').append('<option value="' +
                                    institute_list
                                    .id +
                                    '">' + institute_list.institute_name + '</option>');
                            });
                            $('#name_of_institute').append('<option value="0">Other</option>');
                            $('#name_of_institute').val('{{ $project_data['name_of_institute'] }}');

                            if ('{{ $project_data['name_of_institute'] }}' == '0') {
                                $("#other_name_of_school").show();
                            } else {
                                $("#other_name_of_school").attr("style", "display:none");
                            }

                        }
                    }
                });
            } else {

                if ('{{ $project_data['education_type'] }}' != '6') {
                    $("#other_institute").show();
                } else {
                    $("#other_institute").attr("style", "display:none");
                }



            }


        });
    </script>
@endsection
