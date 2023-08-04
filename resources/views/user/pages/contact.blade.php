@extends('user.layout.master')
@section('pageName')
    About Us
@endsection
@section('content')
    {{-- <header class="page-title pt-large pt-dark pt-plax-lg-dark" data-stellar-background-ratio="0.4">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <h1>Contact</h1>
                    <span class="subheading">WE LOVE TO HEAR FROM YOU</span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
    </header> --}}

    <section id="contact" class="footer-contact">
        <div class="container-fluid">
            <div class="row">

                <!-- Map and address -->
                <div class="col-lg-6 no-gap contact-info">



                    <div class="footer-map"></div>

                    <address class="contact-info-wrapper">
                        <ul>
                            <!-- Address -->
                            <li class="contact-group">
                                <span class="adr-heading">Address</span>
                                <span class="adr-info">{{ $about->location }}</span>
                            </li>
                            <!-- Email -->
                            <li class="contact-group">
                                <span class="adr-heading">Email</span>
                                <span class="adr-info">{{ $about->email }}</span>
                            </li>
                        </ul>
                        <ul>
                            <!-- Phone -->
                            <li class="contact-group">
                                <span class="adr-heading">Phone</span>
                                <span class="adr-info">{{ $about->phone }}</span>
                            </li>
                            <!-- Mobile -->

                        </ul>

                    </address>

                </div><!-- / .col-lg-6 -->


                <!-- Contact Form -->
                <div style="" class="col-lg-6 no-gap ">
                    {{-- <header class="sec-heading">
                        <h2>Contact</h2>
                        <span class="subheading">Lorem ipsum dolor sit amet</span>
                    </header> --}}

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.923298877267!2d2.9829141970341806!3d6.892896700610783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b0f39af9ffa69%3A0xafda89b113521487!2sFederal%20Polytechnic%2C%20Ilaro!5e0!3m2!1sen!2sng!4v1689674730922!5m2!1sen!2sng"
                        width="100%" height="783" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div><!-- / .col-lg-6 -->

            </div><!-- / .row -->
        </div><!-- / .container-fluid -->

    </section>
@endsection
