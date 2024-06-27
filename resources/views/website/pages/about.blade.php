@extends('website.layout.master')
@section('content')
<style>
    .box{
  padding: 20px 10px;
  max-width: 1000px;
  margin: 0 auto;
}
    </style>
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

    <section id="ecsection">
        <div class="container">
            <div class="row ">
        <h1>EC 24-26</h1>
        <div class="table-reponsive box">
            <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Factory Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nikhil Tapadia</td>
                            <td>President</td>
                            <td>NSK Fab & Weld</td>
                        </tr>
                        <tr>
                            <td>Yogesh Joshi</td>
                            <td>Gen. Secretary</td>
                            <td>Devam Udyog </td>
                        </tr>
                        <tr>
                            <td>Dhanlaxmi Patwardhan</td>
                            <td>Treasurer</td>
                            <td>The Link</td>
                        </tr>
                        <tr>
                            <td>Avinash Marathe</td>
                            <td>Vice President</td>
                            <td>Power Control Engineers & Contractors</td>
                        </tr>
                        <tr>
                            <td>Vina Majgaonkar</td>
                            <td>Vice President</td>
                            <td>Armstrong Machine Builders Pvt Ltd</td>
                        </tr>
                        <tr>
                            <td>Vijay Anikevi</td>
                            <td>Jt. Secretary</td>
                            <td>Jt. Secretary</td>
                        </tr>
                        <tr>
                            <td>Atul Deshmukh</td>
                            <td>Jt. Treasurer</td>
                            <td>Niraj Engineering</td>
                        </tr>
                        <tr>
                            <td>Waman Bhanose</td>
                            <td>EC Member</td>
                            <td>Matrix Engineers </td>
                        </tr>
                        <tr>
                            <td>Prashant Kulkarni </td>
                            <td>EC Member</td>
                            <td>Shri Shriniwas Coats </td>
                        </tr>
                        <tr>
                            <td>Ruta Pandit </td>
                            <td>EC Member</td>
                            <td>Devam Udyog </td>
                        </tr>
                        <tr>
                            <td>Prasen Kapadiya </td>
                            <td>EC Member</td>
                            <td>Shalaka Enterpises</td>
                        </tr>
                        <tr>
                            <td>Supriya Deoghare</td>
                            <td>EC Member</td>
                            <td>Sanjay Enterprises </td>
                        </tr>
                        <tr>
                            <td>Sujata Bachhav</td>
                            <td>EC Member</td>
                            <td>Kaleidoscope Advertising</td>
                        </tr>
                        <tr>
                            <td>Vijay Pawar</td>
                            <td>EC Member</td>
                            <td>Aarya Technologies </td>
                        </tr>
                        <tr>
                            <td>Pramod Maheshwari</td>
                            <td>EC Member</td>
                            <td>Film & Drama Production Company</td>
                        </tr>
                        <tr>
                            <td>Urvish Joshi </td>
                            <td>EC Member</td>
                            <td>Maheshwari Hot Dip Galvanizers</td>
                        </tr>
                        <tr>
                            <td>Sarang Attarde </td>
                            <td>EC Member</td>
                            <td>Taraba Tech Solutions Pvt. Ltd.</td>
                        </tr>
                        <tr>
                            <td>Tushar Birari </td>
                            <td>EC Member</td>
                            <td>Saniyo Electrofeb Pvt. Ltd.</td>
                        </tr>
                        <tr>
                            <td>Manjiri Joshi</td>
                            <td>EC Member</td>
                            <td>Tushar Papers</td>
                        </tr>
                        <tr>
                            <td>Kunal Shikare</td>
                            <td>EC Member</td>
                            <td>FOOD  N  U</td>
                        </tr>
                        <tr>
                            <td>Alok Jha</td>
                            <td>EC Member</td>
                            <td>LALIT  HYDRAULIC  SYSTEMS</td>
                        </tr>
                        <tr>
                            <td> Paresh Parashare</td>
                            <td>EC Member</td>
                            <td>ZIGMA  PAINTS  PVT.  LTD.</td>
                        </tr>
                        <tr>
                            <td>Rohit Shahane</td>
                            <td>EC Member</td>
                            <td>Trupti Automation </td>
                        </tr>
                        <tr>
                            <td>Manohar Shewale</td>
                            <td>EC Member</td>
                            <td>Swayam Industry</td>
                        </tr>
                        <tr>
                            <td>Durgesh Puranik</td>
                            <td>EC Member</td>
                            <td>Sai Enterprises</td>
                        </tr>
                        <tr>
                            <td>Ambar Pradhan</td>
                            <td>EC Member</td>
                            <td>DESIGNER  CONCRETE  PVT.  LTD. </td>
                        </tr>

                        <tr>
                            <td>Raosaheb Rakibe</td>
                            <td>EC Member</td>
                            <td>Slidewell Meilleur Tech Pvt Ltd </td>
                        </tr>
                        <tr>
                            <td>Mangesh Bhanage</td>
                            <td>EC Member</td>
                            <td>Praj Electrical Services</td>
                        </tr>
                        <tr>
                            <td>Jayant Pawar</td>
                            <td>EC Member</td>
                            <td>HRRDC Private Limited</td>
                        </tr>
                        <tr>
                            <td>Vivek Kapadnis</td>
                            <td>EC Member</td>
                            <td>National Enterprises</td>
                        </tr>
                        <tr>
                            <td>Kiran  Wagh</td>
                            <td>EC Member</td>
                            <td>Alligo Horizon Pvt. Ltd</td>
                        </tr>
                        <tr>
                            <td>Pooja Mahajan </td>
                            <td>EC Member</td>
                            <td>Pooja  Industrial Training Center</td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
        </script>
@endsection
