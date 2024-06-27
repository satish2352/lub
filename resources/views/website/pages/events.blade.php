@extends('website.layout.master')
@section('content')
<style>
    .post-content{
        height: 370px !important;
    }
    .discription{
        font-size: 15px;
    }
    </style>
    <section id="inner-banner">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>EVENTS</h1>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="breadcrumb"><a href="{{ url('/') }}">Home</a> / Events</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pro-sec">
        <div class="container-fluid" style="padding: 10px 100px;">
            <div class="row text-center">
                <div class="col-lg-3 col-md-3">
                    <div class="grid-image"><img src="{{ asset('website/assets/images/Event24/ETS_23_Judges_Panel.jpg') }}"
                            height="200"></div>
                    <div class="post-content">
                        <h3>इंजीनियरिंग टैलेंट सर्च - 2023</h3>
                        <hr>
                        <p class="discription">लघु उद्योग भारती, नासिक ने बुधवार, दिनांक 12.03.2023 को "इंजीनियरिंग टैलेंट सर्च - 2023" का पुरस्कार वितरण समारोह
                             आयोजित किया। 17 जनवरी 2024 को होटल एक्सप्रेस इन, नासिक में आयोजित किया गया। </p>
                        {{-- <a href="donate.html" title="">Donate Now</a> --}}
                    </div>

                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="grid-image"><img src="{{ asset('website/assets/images/Event24/ETS_23_Audience.jpg') }}"
                            height="200"></div>
                    <div class="post-content">
                        <h3>इंजीनियरिंग टैलेंट सर्च - 2023</h3>
                        <hr>
                        <p class="discription">इस अवसर पर श्री विलास शिंदे, अध्यक्ष, सह्याद्रि फार्म, डिंडोरी, नासिक, श्री. डॉ। गोरक्ष गरजे, संयुक्त निदेशक उच्च तकनीकी शिक्षा एवं प्राचार्य शासकीय तकनीकी शिक्षा नासिक। लघु उद्योग भारती नासिक के अध्यक्ष श्री. विवेक कुलकर्णी एवं अभिनय श्री. मंच पर निखिल तापड़िया मौजूद थे. </p>
                        {{-- <a href="donate.html" title="">Donate Now</a> --}}
                    </div>

                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="grid-image"><img src="{{ asset('website/assets/images/Event24/ETS_23_Colllge_1_st_winner.jpg') }}"
                            height="200"></div>
                    <div class="post-content">
                        <h3>इंजीनियरिंग टैलेंट सर्च - 2023</h3>
                        <hr>
                        <p class="discription">नामित उद्यमी, शिक्षा क्षेत्र के अधिकारी, इंजीनियर, NIMA के पदाधिकारी, AIMA औद्योगिक संघ, लघु उद्योग भारती कार्यकारिणी के सदस्य आदि। 
                            उपस्थित थे। इस कार्यक्रम की खास बात युवा इंजीनियरों की उपस्थिति और जबरदस्त प्रतिक्रिया है।</p>
                        {{-- <a href="donate.html" title="">Donate Now</a> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="grid-image"><img src="{{ asset('website/assets/images/Event24/ETS_23_Industry_1st_winner.jpg') }}"
                            height="200"></div>
                    <div class="post-content">
                        <h3>इंजीनियरिंग टैलेंट सर्च - 2023</h3>
                        <hr>
                        <p class="discription">भारत सरकार के सड़क परिवहन, राजमार्ग मंत्री माननीय श्री नितिन गडकरी ने कार्यक्रम में अपना दस मिनट का विशेष शुभकामना संदेश भेजा। उन्होंने लघु उद्योग 
                            भारती के मिशन और प्रतिभा खोज की सराहना की और भविष्य के लिए शुभकामनाएं दीं।</p>
                        {{-- <a href="donate.html" title="">Donate Now</a> --}}
                    </div>

                </div>
            </div>
                {{-- ============== --}}
                <div class="row text-center d-flex justify-content-center" style="display: flex; justify-content: center; padding-top:60px;">
                <div class="col-lg-3 col-md-3">
                    <div class="grid-image"><img src="{{ asset('website/assets/images/Events/Picture1.png') }}"
                            height="200"></div>
                    <div class="post-content">
                        <h3>उद्यमी सम्मेलन व प्रदेश कार्यकारिणी की वार्षिक सभा</h3>
                        <hr>
                        <p class="discription">lub_छत्तीसगढ़ द्वारा रायपुर मे आयोजित "उद्यमी सम्मेलन व प्रदेश कार्यकारिणी की वार्षिक सभा" बड़े
                            ही हर्षोल्लास के साथ संपन्न हुई। उद्यमी सम्मेलन मे #लघुउद्योगभारती के सदस्यों के साथ साथ अन्य
                            संगठनो के पदाधिकारी भी उपस्थित हुए। बैठक मे केन्द्र व राज्य सरकार की विभिन्न योजनाओ की जानकारी
                            के साथ-साथ संगठन द्वारा किये जा रहे कार्यों की जानकारी दी गयी। </p>
                        {{-- <a href="donate.html" title="">Donate Now</a> --}}
                    </div>

                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="grid-image"><img src="{{ asset('website/assets/images/Events/Picture2.png') }}"
                            height="200"></div>
                    <div class="post-content">
                        <h3>जीएसटी काउंसिल एडवाइजरी</h3>
                        <hr>
                        <p class="discription">जीएसटी काउंसिल एडवाइजरी कमेटी के सदस्य श्री ओ पी मित्तल ( निवर्तमान राष्ट्रीय अध्यक्ष)
                            #लघुउद्योगभारती के प्रयासों से जरी पर से जीएसटी 12% से 5% की मिली छूट lub_काशी प्रांत की से
                            जुड़े उद्यमियों ने सरकार द्वारा जरी पर से जीएसटी कम करने का स्वागत किया। जिसके लिए वाराणसी/ मऊ
                            मे संगठन से जुड़े बनारसी साड़ी निर्माता तथा साड़ी के कच्चे माल के निर्माता निरंतर मांग कर रहे
                            थे।
                        <p>
                            {{-- <a href="donate.html" title="">Donate Now</a> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="grid-image"><img src="{{ asset('website/assets/images/Events/Picture4.png') }}"
                            height="200">
                    </div>
                    <div class="post-content">
                        <h3>बैठक प्रान्त सचिव श्रीमती बिंदु जी जैन के सानिध्य में आमंत्रित की गई।</h3>
                        <hr>
                        <p class="discription">lub_हनुमानगढ़ जिला इकाई, #हनुमानगढ़जंक्शन #हनुमानगढ़टाउन बैठक प्रान्त सचिव श्रीमती बिंदु जी जैन
                            के सानिध्य में आमंत्रित की गई।जिसमें सभी तीनों इकाईयों के पदाधिकारी हमेंद्र चमड़िया जी
                            ज़िलाध्यक्ष, सुभाष जैन जी ज़िला सचिव, सतीश जी प्रांतीय सदस्य ,लघु
                            उद्योगों में आ रही परेशानियों व ज़िला हनुमानगढ़ यूनिट में सदस्यों का विस्तार हेतु
                            चर्चा की।
                        <p>
                            {{-- <a href="donate.html" title="">Donate Now</a> --}}
                    </div>
                </div>
                </div>

                {{-- <div class="col-sm-6 col-md-4 clearfix top-off">
                    <div class="grid-image"><img src="images/test1.jpg"></div>
                    <div class="post-content">
                        <h3>Nepal Earthquake: Clean Water Initiative</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <a href="donate.html" title="">Donate Now</a>
                    </div>
                </div> --}}

                {{-- <div class="col-sm-6 col-md-4 clearfix top-off">
                    <div class="grid-image"><img src="images/test1.jpg"></div>
                    <div class="post-content">
                        <h3>Nepal Earthquake: Clean Water Initiative</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <a href="donate.html" title="">Donate Now</a>
                    </div>
                </div> --}}

                {{-- <div class="col-sm-6 col-md-4 clearfix top-off">
                    <div class="grid-image"><img src="images/test1.jpg"></div>
                    <div class="post-content">
                        <h3>Nepal Earthquake: Clean Water Initiative</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <a href="donate.html" title="">Donate Now</a>
                    </div>
                </div> --}}

                {{-- <div class="col-sm-6 col-md-4 clearfix top-off">
                    <div class="grid-image"><img src="images/test1.jpg"></div>
                    <div class="post-content">
                        <h3>Nepal Earthquake: Clean Water Initiative</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <a href="donate.html" title="">Donate Now</a>
                    </div>
                </div> --}}
                {{-- 
                <div class="col-sm-6 col-md-4 clearfix top-off">
                    <div class="grid-image"><img src="images/test1.jpg"></div>
                    <div class="post-content">
                        <h3>Nepal Earthquake: Clean Water Initiative</h3>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <a href="donate.html" title="">Donate Now</a>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>
@endsection
