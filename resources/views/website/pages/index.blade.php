@extends('website.layout.master')
@section('content')
    <style>
        .marqueeMain {
            background-color: #595aa7;
            color: #fff !important;
            font-size: 20px;
            letter-spacing: 0px;
            font-weight: 600;
            line-height: 27px;
            padding: 10px;
        }

        .marqueeMain p {
            margin: 0px;
        }
        .stop-marquee {
            animation-play-state: paused;
        }
    </style>
    <script>
        function toggleMarquee() {
            var marquee = document.getElementById("myMarquee");
            marquee.classList.toggle("stop-marquee");
        }
    </script>

    <div id="first-slider">
        <div class="marqueeMain d-flex align-items-center">

            <marquee id="myMarquee" behavior="scroll" direction="left" onmouseover="toggleMarquee()"
                onmouseout="toggleMarquee()">
                <p class="p-1">Last date Of Project Submission 31st. August 2023</p>
            </marquee>
        </div>
        <div id="carousel-example-generic" class="carousel slide carousel-fade">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- Item 1 -->
                <div class="item active">
                    <img class="d-block w-100" src="{{ asset('website/assets/images/Slider/Event222.jpeg') }}"
                        alt="First slide">
                    {{-- <h2 data-animation="animated bounceInDown"><span>Give a little change a lot</span></h2> --}}
                    {{-- <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3> --}}
                    {{-- <h4 data-animation="animated bounceInUp"><a href="{{ url('about') }}">READ MORE</a></h4> --}}
                </div>
                <!-- Item 2 -->
                <div class="item">
                    <img class="d-block w-100" src="{{ asset('website/assets/images/Slider/Event233.png') }}"
                        alt="Secound slide">
                    {{-- <h2 data-animation="animated bounceInDown"><span>More charity More better life</span></h2> --}}
                    {{-- <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3>
                    <h4 data-animation="animated bounceInUp"><a href="{{ url('about') }}">READ MORE</a></h4> --}}
                </div>
                <!-- Item 3 -->
                <div class="item">
                    <img class="d-block w-100" src="{{ asset('website/assets/images/Slider/slide1.jpg') }}"
                        alt="Third slide">
                    {{-- <h2 data-animation="animated bounceInDown"><span>Raise fund Warm heart</span></h2> --}}
                    {{-- <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3> --}}
                    {{-- <h4 data-animation="animated bounceInUp"><a href="{{ url('about') }}">READ MORE</a></h4> --}}
                </div>
                <!-- Item 4 -->
                <div class="item">
                    <img class="d-block w-100" src="{{ asset('website/assets/images/Slider/Event24.png') }}"
                        alt="Forth slide">
                    {{-- <h2 data-animation="animated bounceInDown"><span>Raise your funds for a cause</span></h2> --}}
                    {{-- <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3> --}}
                    {{-- <h4 data-animation="animated bounceInUp"><a href="{{ url('about') }}">READ MORE</a></h4> --}}
                </div>
                <!-- End Item 4 -->

            </div>
            <!-- End Wrapper for slides-->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <section id="video-sec">
        <div class="container">
            <div class="row text-center">
                <h1>25 Years of Thriving: Celebrating Our Success Story</h1>
                <hr>
                <h5>Documentary "Udyamev Jayate" Celebrating 25 yearsof Laghu Udyog Bharti- Nashik Branch</h5>
                <div class="text-left">
                    <div class="col-md-6 clearfix top-off">
                        <a href="https://www.youtube.com/watch?v=vuAcpNvFYE4"> <video width="400" controls>

                                <source src="https://www.youtube.com/watch?v=vuAcpNvFYE4" type="video/mp4">

                            </video></a>



                    </div>
                    <div class="col-md-6 clearfix top-off">
                        <div class="media">
                            {{-- <div class="media-image">
                                <img src="images/g1.png" class="attachment-full size-full" alt="g1">
                            </div> --}}
                            <div class="media-text">
                                {{-- <h5>BECOME A VOLUNTEER</h5> --}}
                                <p>देशभरात लघू उद्योग भारती 27 प्रदेशात च्या 501 जिल्ह्यामध्ये 750
                                    पेक्षा जास्त शाखा असून
                                    41000 पेक्षा जास्त सभासद आहे, तसेच ३३ महिला शाखा सुद्धा आहेत, लघू उद्योग भारती चे
                                    केंद्रीय कार्यालय दिल्ली येथे विश्वकर्मा भवन नावाने आहे.</p>
                            </div>
                        </div>
                        <div class="media">
                            {{-- <div class="media-image">
                                <img src="images/g2.png" class="attachment-full size-full" alt="g1">
                            </div> --}}
                            <div class="media-text">
                                {{-- <h5>MAKE A GIFT</h5> --}}
                                <p>भविष्यात उद्योग पोषक पॉलिसी बनविण्यात पुढाकार , विवीध उपक्रमातून उद्योग सक्षमीकरण,
                                    उद्योजकात राष्ट्रीय भावना निर्माण करणे, सेवा कार्य उभे करणे, संख्यात्मक वाढीबरोबर
                                    गुणात्मक वाढ साध्य करण्यासाठी कार्यपद्धती मध्ये बदल करून लघू उद्योग भारतीची वाटचाल अधिक
                                    सक्षम करण्याचे नाशिक कार्यकारिणी ने ठरविले आहे</p>
                            </div>
                        </div>
                        {{-- <div class="media">
                            <div class="media-image">
                                <img src="images/g1.png" class="attachment-full size-full" alt="g1">
                            </div>
                            <div class="media-text">
                                <h5>GIVE A SCHOLASHIP</h5>
                                <p>Give us a brief description of the service that you are promoting.</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-sec">
        <div class="container">
            <div class="row">
                <h1 class="text-center">LUB HAS REPRESENTATIONS IN FOLLOWING COMMITTEES
                </h1>
                <hr>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2">

                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <ul>
                            <li>Parliamentary Standing Committee on MSM constituted</li>
                            <li>E-board on MSM</li>
                            <li>Central and State Board of Professional Education
                                National Labor Organization (ILO)</li>
                            <li>Child labor projects</li>
                            <li>International Labor Organization (ILA)</li>
                            <li>Tripartite Committee on Ethos National Standards Bureau
                                (BIS)</li>
                            <li>National Social Security Board</li>
                            <li>Pre-Budget Advisory Committee constituted by Prime
                                Minister and Finance Minister</li>
                            <li>National Productivity Council</li>
                            <li>Technical Support Board constituted by Ministry of
                                Industry</li>
                            <li> DGS&D's Ministry of Permanent Commerce</li>
                            <li> Working Group for Labor Laws (Tark Four)</li>
                            <li> Review on Credit Flows constituted by Reserve Bank</li>
                            <li> Committees constituted by the Ministry of Labor and Employment</li>
                            <li> Jute and Cotton Industrial Opposition Committee constituted by Varach Ministry</li>
                            <li> Gunning and Technical Approval Board of Ministry of Industry</li>
                            <li> Advisory Committee on ESI</li>
                            <li> National Selection Committee to award MSE</li>
                            <li> Advisory Committee on Provident Fund</li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">

                    </div>
                </div>
                {{-- <div class="text-center">
                    <a href="donate.html" class="btn1">donate now</a>
                    <a href="{{ url('about') }}" class="btn2">Read More</a>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- <section id="activities-sec">
        <div class="container">
            <div class="row text-center">
                <h1>WHAT WE DO?</h1>
                <hr>
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</h5>
                <div class="text-left">
                    <div class="col-md-4 clearfix top-off">
                        <div class="grid-content-left"><i class="fa fa-heart"></i></div>
                        <div class="grid-content-wrapper">
                            <h4>Charity for Education</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
                                dignissim.</p>
                            <a href="activities.html" title="">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix top-off">
                        <div class="grid-content-left"><i class="fa fa-cutlery"></i></div>
                        <div class="grid-content-wrapper">
                            <h4>Feed for Hungry Child</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
                                dignissim.</p>
                            <a href="activities.html" title="">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix top-off">
                        <div class="grid-content-left"><i class="fa fa-home"></i></div>
                        <div class="grid-content-wrapper">
                            <h4>Home for Homeless</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
                                dignissim.</p>
                            <a href="activities.html" title="">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix top-off">
                        <div class="grid-content-left"><i class="fa fa-tint"></i></div>
                        <div class="grid-content-wrapper">
                            <h4>Bringing Clean Water</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
                                dignissim.</p>
                            <a href="activities.html" title="">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix top-off">
                        <div class="grid-content-left"><i class="fa fa-thumbs-up"></i></div>
                        <div class="grid-content-wrapper">
                            <h4>Help Little Hands</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
                                dignissim.</p>
                            <a href="activities.html" title="">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix top-off">
                        <div class="grid-content-left"><i class="fa fa-money"></i></div>
                        <div class="grid-content-wrapper">
                            <h4>Donate for Children</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis
                                dignissim.</p>
                            <a href="activities.html" title="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    {{-- <section id="projects-sec">
        <div class="container">
            <div class="row text-center">
                <h1>OUR PROJECTS</h1>
                <hr>
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</h5>
                <div class="text-center">
                    <div class="col-md-4 clearfix top-off">
                        <div class="grid-image"><img src="images/test1.jpg"></div>
                        <div class="post-content">
                            <h3>Nepal Earthquake: Clean Water Initiative</h3>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <a href="projects.html" title="">View Project</a>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix top-off">
                        <div class="grid-image"><img src="images/test2.jpg"></div>
                        <div class="post-content">
                            <h3>Nepal Earthquake: Clean Water Initiative</h3>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <a href="projects.html" title="">View Project</a>
                        </div>
                    </div>
                    <div class="col-md-4 clearfix top-off">
                        <div class="grid-image"><img src="images/test3.jpg"></div>
                        <div class="post-content">
                            <h3>Nepal Earthquake: Clean Water Initiative</h3>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <a href="projects.html" title="">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="gallery-sec">
        <div class="container">
            <div class="row text-center">
                <h1>OUR GALLERY</h1>
                <hr>
                <h5>Capturing Moments: Glimpse of talent search 2022<h5>
                        <ul class="clearfix">

                            <li>
                                <a href="{{ asset('website/assets/images/Events/gallery.jpg') }}" class="swipebox"
                                    title="">
                                    <div class="image"><img src="{{ asset('website/assets/images/Events/gallery.jpg') }}">
                                        <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('website/assets/images/Events/gallery1.jpg') }}" class="swipebox"
                                    title="">
                                    <div class="image"><img src="{{ asset('website/assets/images/Events/gallery1.jpg') }}">
                                        <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="{{ asset('website/assets/images/Events/gallery2.jpg') }}" class="swipebox"
                                    title="">
                                    <div class="image"><img src="{{ asset('website/assets/images/Events/gallery2.jpg') }}">
                                        <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="{{ asset('website/assets/images/Events/gallery3.jpg') }}" class="swipebox"
                                    title="">
                                    <div class="image"><img
                                            src="{{ asset('website/assets/images/Events/gallery3.jpg') }}">
                                        <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('website/assets/images/Events/gallery4.jpg') }}" class="swipebox"
                                    title="">
                                    <div class="image"><img
                                            src="{{ asset('website/assets/images/Events/gallery4.jpg') }}">
                                        <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('website/assets/images/Events/gallery5.jpg') }}" class="swipebox"
                                    title="">
                                    <div class="image"><img
                                            src="{{ asset('website/assets/images/Events/gallery5.jpg') }}">
                                        <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('website/assets/images/Events/gallery6.jpg') }}" class="swipebox"
                                    title="">
                                    <div class="image"><img
                                            src="{{ asset('website/assets/images/Events/gallery6.jpg') }}">
                                        <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('website/assets/images/Events/gallery7.jpg') }}" class="swipebox"
                                    title="">
                                    <div class="image"><img
                                            src="{{ asset('website/assets/images/Events/gallery7.jpg') }}">
                                        <div class="overlay"><i class="fa fa-search-plus"></i></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        {{-- <div class="text-center">
                            <a href="gallery.html" class="btn1">View More</a>
                        </div> --}}
            </div>
        </div>
    </section>

    <section id="gallery-sec">
        <div class="container">
            <div class="row text-center">
                <h1>NEWS</h1>
                <hr>
                <ul class="clearfix">

                    <li>
                        <a href="{{ asset('website/assets/images/news1.jpg') }}" class="swipebox" title="">
                            <div class="image"><img src="{{ asset('website/assets/images/news1.jpg') }}"
                                    height="200">
                                <div class="overlay"><i class="fa fa-search-plus"></i></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('website/assets/images/news2.jpg') }}" class="swipebox" title="">
                            <div class="image"><img src="{{ asset('website/assets/images/news2.jpg') }}"
                                    height="200">
                                <div class="overlay"><i class="fa fa-search-plus"></i></div>
                            </div>
                        </a>
                    </li>


                </ul>
                {{-- <div class="text-center">
                            <a href="gallery.html" class="btn1">View More</a>
                        </div> --}}
            </div>
        </div>
    </section>
@endsection
