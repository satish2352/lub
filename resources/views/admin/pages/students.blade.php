@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Student Form
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Master</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Student Form</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">                         
                            <script>
                              $().ready(function () {
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
                                    imgupload:"required",
                                    projectupload:"required"
                                  },
                                  // In 'messages', users have to specify messages as per rules
                                  messages: {
                                    nameproject: "This field is required.*",
                                    nameparticipants: "This field is required.*",
                                    Nameofyourcollege: "This field is required.*",
                                    PaymentUTRCode: "This field is required*.",
                                    imgupload:"This field is required.*",
                                    projectupload:"This field is required.*"
                                  },
                                });
                              });
                            </script>
                          {{-- </head> --}}
                        
                          {{-- <body>
                            <div class="container"> --}}
                              <div class="col-8">
                                <form
                                  class="cmxform"
                                  id="signupForm"
                                  method="get"
                                  action="form-handler.html"
                                  autocomplete="off"
                                >
                                @csrf
                                <h3 class="page-title">
                                  Talent search - College Students Registration form
                              </h3>
                              <h4 class="page-title">
                                <b>Event organized by Laghu Udyog Bharti & Government Polytechnic,
                                Nashik (DTE)</b>
                              </h4>
                              
                                  <h2></h2>
                                  <h6>
                                   
                                  </h6>
                        
                                  <fieldset>
                                    <p class="mt-4">
                                      <label for="email"><b>Email</b></label
                                      ><br />
                                      <input id="email" name="email" type="email" class="form-control" />
                                    </p>
                        
                                    <p>
                                      <label for="nameproject"><b>Name of project</b></label
                                      ><br />
                                      <input id="nameproject" name="nameproject" type="text" class="form-control"/>
                                    </p>
                        
                                    <p>
                                      <label for="nameparticipants"><b>Name of participants</b></label
                                      ><br />
                                      <input
                                        id="nameparticipants"
                                        name="nameparticipants"
                                        type="text"
                                        class="form-control"
                                      />
                                    </p>
                                    <p>
                                      <label for="Nameofyourcollege"><b>Name of your college</b></label
                                      ><br />
                                      <input
                                        id="Nameofyourcollege"
                                        name="Nameofyourcollege"
                                        type="text"
                                        class="form-control"
                                      />
                                    </p>
                        
                                    <div class="mb-3 mt-3 cc">
                                      <label for="registrationfees"
                                        ><b>Registration fees Rs.750/- paid by</b></label
                                      >
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="neft" class="form-control"/>
                                        <label class="form-check-label" for="neft">NEFT</label>
                                      </div>
                                      <div class="form-check">
                                        <input
                                          class="form-check-input"
                                          type="radio"
                                          name="neft"
                                          checked
                                        />
                                        <label class="form-check-label">QR code</label>
                                      </div>
                                    </div>
                        
                                    <p>
                                      <label for="PaymentUTRCode"
                                        ><b>Payment confirmation - UTR Code</b></label
                                      ><br />
                                      <input id="PaymentUTRCode" name="PaymentUTRCode" type="text" class="form-control"/>
                                    </p>
                        
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
                                    <p class="mt-3"><b>Add Payment Screenshot</b></p>
                                    <input name="imgupload" type="file" value="Add Screenshot" accept="image/*"/>
                                    <p class="mt-4"></p>
                                    <b>Attach Your Project soft copy (Upload File)</b><br />
                                    <input  name="projectupload"  type="file" value="Add File" accept="pdf"/>
                        
                                    {{-- <p class="mt-4">
                                      <input class="submit" type="submit" value="Submit" />
                                    </p> --}}
                                    <div class="col-md-12 col-sm-12 text-center">
                                      <button type="submit" class="btn btn-success">Save &amp; Submit</button>
                                      {{-- <button type="reset" class="btn btn-danger">Cancel</button> --}}
                                      <span><a href=""
                                              class="btn btn-sm btn-primary">Back</a></span>
                                  </div>
                                  </fieldset>
                                  <script
                                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                                    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                                    crossorigin="anonymous"
                                  ></script>
                                </form>
                              </div>
                          

                          {{-- ======================================== --}}
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
