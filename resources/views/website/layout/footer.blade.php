<footer class="footer footer_mt-2">
    <div class="footer-body">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-section">
                        <h4 class="footer-section-title">About LUB</h4><!-- /.footer-section-title -->

                        <div class="footer-section-body">
                            <p>Laghu Udyog Bharti is a registered all India organization of Micro and Small Industries
                                in India since 1994. Today, Laghu udyog Bharti has its membership spread over the
                                length and breadth of the country. It has membership in more than 400 Districts with 250
                                Branches all over the Country. </p>
                        </div><!-- /.footer-section-body -->
                    </div><!-- /.footer-section -->
                </div><!-- /.columns large-3 medium-12 -->

                <div class="col-md-3">
                    <div class="footer-section">
                        <h4 class="footer-section-title">Quick Links</h4><!-- /.footer-section-title -->

                        <div class="footer-section-body">
                            <ul class="list-links">
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>

                                <li>
                                    <a href="{{ url('about') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ url('events') }}">Events</a>
                                </li>

                                <li>
                                    <a href="{{ url('contact-us') }}">Contact Us</a>
                                </li>

                                {{-- <li>
                                    <a href="gallery.html">Gallery</a>
                                </li>

                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li> --}}

                            </ul><!-- /.list-links -->

                        </div><!-- /.footer-section-body -->
                    </div><!-- /.footer-section -->
                </div><!-- /.columns large-3 medium-12 -->

                <div class="col-md-3">
                    <div class="footer-section">
                        <h4 class="footer-section-title">Head Office</h4><!-- /.footer-section-title -->

                        <div class="footer-section-body"><b><i class="fa fa-map-marker"></i> </b>
                            Laghu Udyog Bharti
                            Shri Vishwakarma Bhawan,
                            48, Deen Dayal Upadhyay Marg,
                            Rouse Avenue,
                            New Delhi – 110002<br>
                            <b>
                                <i class="fa fa-envelope-o"></i>
                            </b>
                            headoffice@lubindia.com<br> <b>
                                <i class="fa fa-envelope-o"></i>
                            </b>lubheadoffice@gmail.com<br>
                            Phone: 011-23238582<br>
                            Tel. Fax: 011-23525052

                        </div><!-- /.footer-section-body -->
                    </div><!-- /.footer-section -->
                </div><!-- /.columns large-3 medium-12 -->
                <div class="col-md-3">
                    <div class="footer-section">
                        <h4 class="footer-section-title">Contact Us</h4><!-- /.footer-section-title -->

                        <div class="footer-section-body">
                            <p><b><i class="fa fa-map-marker"></i> </b> 4, Mangaldeep Appartment, Murari nagar, Opp. DGP
                                Nagar
                                2, Kamatwada,
                                Ambad link road, Nashik 422010.</p>

                            <div class="footer-contacts">
                                {{-- <p>
                                    <b>
                                        <i class="fa fa-phone"></i> Phone:
                                    </b>

                                    +1-310-341-3870
                                </p> --}}

                                <p>
                                    <b>
                                        <i class="fa fa-envelope-o"></i>
                                    </b>

                                    lubnsk@gmail.com
                                </p>
                            </div><!-- /.footer-contacts -->
                        </div><!-- /.footer-section-body -->
                    </div><!-- /.footer-section -->
                </div><!-- /.columns large-3 medium-12 -->
            </div><!-- /.row -->
        </div>
    </div><!-- /.footer-body -->

    <div class="bwt-footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 copyright">
                    <div class="left-text">Copyright &copy; Sumago Infotech Pvt. Ltd. © 2023 All Right Reserved</div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{ asset('website/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('website/assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('website/assets/js/bootsnav.js') }}"></script>
<script src="{{ asset('website/assets/js/banner.js') }}"></script>
<script src="{{ asset('website/assets/js/jquery.swipebox.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        /* Basic Gallery */
        $('.swipebox').swipebox();

        /* Video */
        $('.swipebox-video').swipebox();

        /* Dynamic Gallery */
        $('#gallery').click(function(e) {
            e.preventDefault();
            $.swipebox([{
                    href: 'http://swipebox.csag.co/mages/image-1.jpg',
                    title: 'My Caption'
                },
                {
                    href: 'http://swipebox.csag.co/images/image-2.jpg',
                    title: 'My Second Caption'
                }
            ]);
        });

    });
</script>
{{-- <script src="{{ asset('website/assets/js/script.js') }}"></script> --}}
</body>

</html>
