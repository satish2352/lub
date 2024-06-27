@extends('website.layout.master')
@section('content')
    <section id="inner-banner">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>CONTACT US</h1>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Contact us</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="google-maps">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3749.887140494001!2d73.7453537!3d19.971248!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdded1bda321d4b%3A0x1c27c517f703a80e!2sMangaldeep%20Appartment!5e0!3m2!1sen!2sin!4v1689579394140!5m2!1sen!2sin"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <section id="about-sec">
        <div class="container">
            <div class="row text-center" style=" margin-top:-20px;">
                <div class="col-md-4" style=" margin-top:20px;">
                    <div class="con-box">
                        <div class="fancy-box-icon">
                            <i class="fa fa-mobile-phone"></i>
                        </div>
                        <h3>HEAD OFFICE</h3>
                        <div class="fancy-box-content">
                            <p> Laghu Udyog Bharti
                                Shri Vishwakarma Bhawan,
                                48, Deen Dayal Upadhyay Marg,
                                Rouse Avenue,
                                New Delhi – 110002</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style=" margin-top:20px;">
                    <div class="con-box" style="background:#2f3191;">
                        <div class="fancy-box-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h3>ADDRESS</h3>
                        <div class="fancy-box-content">
                            <p>4, Mangaldeep Appartment, Murari nagar, Opp. DGP Nagar 2, Kamatwada,
                                Ambad link road, Nashik 422010.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style=" margin-top:20px; ">
                    <div class="con-box" style="height:258px; ">
                        <div class="fancy-box-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <h3>EMAIL</h3>
                        <div class="fancy-box-content">
                            <p> lubnsk@gmail.com
                                <br>
                                lubheadoffice@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <h2>IF YOU GOT ANY QUESTIONS<br>
                    PLEASE DO NOT HESITATE TO SEND US A MESSAGE.</h2>
                <div class="con-form clearfix">
                    <div class="col-md-4">
                        <input type="text" name="name" value="" size="40" class="" id="name"
                            aria-required="true" aria-invalid="false" placeholder="Your Name*">
                    </div>
                    <div class="col-md-4">
                        <input type="email" name="email" value="" size="40" class=""
                            aria-required="true" aria-invalid="false" placeholder="Your Email*">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="subject" value="" size="40" class="" id="subject"
                            aria-invalid="false" placeholder="Subject">
                    </div>
                    <div class="col-md-12">
                        <textarea name="message" cols="40" rows="5" class="" id="message" aria-invalid="false"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="col-xs-12 submit-button">
                        <input type="submit" value="send message" class="btn2" id="sub"
                            style="border:none; margin: 20px 0 0 0">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="callout">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Change Their World. Change Yours. This changes everything.</h2><!-- /.callout-title -->
                </div><!-- /.columns large-6 -->

                <div class="col-md-6">
                    <div class="callout-actions">
                        <a href="contact.html" class="button">Become Volunteer</a>

                        <span class="callout-separator">
                            <span>Or</span>
                        </span>

                        <a href="donate.html" class="button">Donate For Cause</a>
                    </div><!-- /.callout-actions -->
                </div><!-- /.columns large-6 -->
            </div><!-- /.row -->
        </div>
    </div> --}}
@endsection
