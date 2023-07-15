<footer class="footer">
    <div class="footer-body">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-section">
                        <h4 class="footer-section-title">About Charity</h4><!-- /.footer-section-title -->

                        <div class="footer-section-body">
                            <p>Charity vitae diam pulvinar, tempus dia aliquam tellus. Quisque mattis odio eu
                                placerat luctus. Vivamus magna elit, ultrices non lacinia vel, tempor vitae tell
                                Fusce sit amet sem sit amet.</p>
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
                        <h4 class="footer-section-title">Newsletter Signup</h4><!-- /.footer-section-title -->

                        <div class="footer-section-body">
                            <p>Select your newsletters, enter your email address, and click "Subscribe"</p>

                            <div class="subscribe">
                                <form action="?" method="post">
                                    <input type="submit" value="Go" class="subscribe-btn">

                                    <div class="subscribe-inner">
                                        <input type="email" id="mail" name="mail" value=""
                                            placeholder="Email Address" class="subscribe-field">
                                    </div><!-- /.subscribe-inner -->
                                </form>
                            </div><!-- /.subscribe -->
                        </div><!-- /.footer-section-body -->
                    </div><!-- /.footer-section -->
                </div><!-- /.columns large-3 medium-12 -->
                <div class="col-md-3">
                    <div class="footer-section">
                        <h4 class="footer-section-title">Contact Us</h4><!-- /.footer-section-title -->

                        <div class="footer-section-body">
                            <p><b>Address:</b> 3104 Doctors Drive, Los Angeles, California, United States</p>

                            <div class="footer-contacts">
                                <p>
                                    <b>
                                        <i class="fa fa-phone"></i> Phone:
                                    </b>

                                    +1-310-341-3870
                                </p>

                                <p>
                                    <b>
                                        <i class="fa fa-envelope-o"></i> Email:
                                    </b>

                                    info@charityhope.com
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
                    <div class="left-text">Copyright &copy; Charity Hope 2017. All Rights Reserved</div>
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
<script src="{{ asset('website/assets/js/script.js') }}"></script>
</body>

</html>
