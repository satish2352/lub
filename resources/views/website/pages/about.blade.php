@extends('website.layout.master')
@section('content')
    <section id="inner-banner">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>ABOUT US</h1>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="breadcrumb"><a href="{{ url('/') }}">Home</a> / About us</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-sec">
        <div class="container">
            <div class="row">
                <h1 class="">ABOUT LAGHU UDYOG Bharti NASHIK</h1>
                {{-- <hr> --}}
                {{-- <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</h5> --}}
                <p>Laghu Udyog Bharti is a registered all India organization of Micro and Small Industries in India since
                    1994. Today, Laghu udyog Bharti has its membership spread over the length and breadth of the country.
                    It has membership in more than 400 Districts with 250 Branches all over the Country. In a genuine effort
                    to organise MSE sector Laghu Udyog Bharti is fighting the various ills plaguing the sector and to
                    remove impediments coming in the way to MSEs.
                    Laghu Udyog or MSEs : The Scene
                    Worldwide , micro and small enterprises (MSEs) have been accepted as the engine of economic growth and
                    for promoting equitable development. MSEs constitute over 95% of total enterprises in most of the
                    economies and are credited with generating the highest rates of employment growth and account for a
                    major share of industrial production and exports. It contributes more than 45% of total manufacturing
                    production and 40% of exports, while employing 10 crores people, it suits the Indian conditions in the
                    following manner:
                    It is only source which has the potential to absorb about 10 million new youths which enter the
                    workforce every year, as there are hardly any job opportunities in Government sector; the agriculture
                    sector is already super saturated; and the large / corporate sector has had less employment growth in
                    last 2 decades.
                    For country like India which has very scarce capital, promoting MSE is essential as only one tenth of
                    capital investment is required to generate one employment in MSE sector as compared to investment
                    required per capita employment in large sector.
                    It mitigates the problem of migration to cities and slum dwellings in urban areas.
                    It also ensure inclusive growth.
                    The Government policies / programs could be specifically directed to take care of three phases of Micro
                    and Small Enterprises, namely:
                    1. New Enterprises
                    2. Existing or running enterprises
                    3. Sick or in danger of getting sick enterprises.</p>

            </div>
        </div>
    </section>

    <section id="about-sec">
        <div class="container">
            <div class="row">
                <h1 class="">VISION / MISION

                </h1><br>
                {{-- <hr> --}}
                <ul>
                    <li>To encourage entrepreneurship with self employment.</li>
                    <li>Overall sustainable growth of Micro & Small Industries resulting in sustainable growth of country.
                    </li>
                    <li>To operate the industry as a family having owner, worker, customer & supplier as member of this
                        family.</li>
                    <li>To enhance gainful employment, so that each one should get decent standard of living.</li>
                    <li>To maintain a sustained growth in productivity with quality at competitiveness</li>
                    <li>To promote indigenous technology in & by the Micro & Small industry</li>
                    <li>To encourage research & development activity in Micro & Small industry</li>
                    <li>To encourage setting up of Micro & Small industry for utilization of available natural resources
                    </li>
                    <li>To operate Micro & Small industry in eco friendly manner</li>
                    <li>Decentralization of manufacturing activity through ancillarization, cluster formation, to counter
                        the economic imbalance</li>
                    <li>To attain international competitiveness</li>
                    <li>To enhance capacity building of human resources through skill</li>
                </ul>

            </div>
        </div>
    </section>

    <section id="gallery-sec">
        <div class="container">
            <div class="row ">
                <h1>KEY ACHIEVEMENTS</h1>
                {{-- <hr> --}}
                <ul class="clearfix">

                    <li>
                        <a href="{{ asset('website/assets/images/Awards/Award1.png') }}" class="swipebox" title="">
                            <div class="image"><img src="{{ asset('website/assets/images/Awards/Award1.png') }}">
                                <div class="overlay"><i class="fa fa-search-plus"></i></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('website/assets/images/Awards/Award2.png') }}" class="swipebox" title="">
                            <div class="image"><img src="{{ asset('website/assets/images/Awards/Award2.png') }}">
                                <div class="overlay"><i class="fa fa-search-plus"></i></div>
                            </div>
                        </a>
                    </li>


                </ul>

            </div>
        </div>
    </section>
@endsection
