@extends('website.layout.master')
@section('content')
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



    <div class="container">
        <div class="col-8">
            <form class="cmxform" id="signupForm" method="get" action="form-handler.html" autocomplete="off">
                <h2>Talent search - College Students Registration form</h2>
                {{-- <h6>
                    Event organized by Laghu Udyog Bharti & Government Polytechnic,
                    Nashik (DTE)
                </h6> --}}

                <fieldset>
                    <p class="mt-4">
                        <label for="email"><b>Email</b></label><br />
                        <input id="email" name="email" type="email" />
                    </p>

                    <p>
                        <label for="nameproject"><b>Name of project</b></label><br />
                        <input id="nameproject" name="nameproject" type="text" />
                    </p>

                    <p>
                        <label for="nameparticipants"><b>Name of participants</b></label><br />
                        <input id="nameparticipants" name="nameparticipants" type="text" />
                    </p>
                    <p>
                        <label for="Nameofyourcollege"><b>Name of your college</b></label><br />
                        <input id="Nameofyourcollege" name="Nameofyourcollege" type="text" />
                    </p>

                    <div class="mb-3 mt-3 cc">
                        <label for="registrationfees"><b>Registration fees Rs.750/- paid by</b></label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="neft" />
                            <label class="form-check-label" for="neft">NEFT</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="neft" checked />
                            <label class="form-check-label">QR code</label>
                        </div>
                    </div>

                    <p>
                        <label for="PaymentUTRCode"><b>Payment confirmation - UTR Code</b></label><br />
                        <input id="PaymentUTRCode" name="PaymentUTRCode" type="text" />
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
                    <input name="imgupload" type="file" value="Add Screenshot" accept="image/*" />
                    <p class="mt-4"></p>
                    <b>Attach Your Project soft copy (Upload File)</b><br />
                    <input name="projectupload" type="file" value="Add File" accept="pdf" />

                    <p class="mt-4">
                        <input class="submit" type="submit" value="Submit" />
                    </p>
                </fieldset>

            </form>
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
