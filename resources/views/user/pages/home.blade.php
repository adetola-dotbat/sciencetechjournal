@extends('user.layout.master')
@section('content')
    <!-- ========== Hero Cover ========== -->

    <div class="fs-slider-hero">
        <div class="fs-slider">

            @foreach ($sliders as $item)
                <!-- Slide -->
                <div style="background: url({{ asset('storage/slider/' . $item->image) }}); background-size: cover"
                    class="fs-slider-item fs-slide-{{ $loop->iteration }}">
                    <div class="bg-overlay">

                        <!-- Hero Content -->
                        <div class="hero-content-wrapper">
                            <div class="hero-content">

                                <h3 class="hero-lead wow fadeInUp" data-wow-duration="2s">{{ $item->title }}</h3>
                                <h4 style="color:white" class="h-alt hero-subheading wow fadeIn" data-wow-delay=".5s"
                                    data-wow-duration="1.5s">
                                    {{ Str::limit($item->description, '100', '...') }}</h4>
                                <a href="{{ route('manuscript') }}" class="btn wow fadeIn" data-wow-delay=".7s"
                                    data-wow-duration="2s">Send
                                    manuscript</a>

                            </div>
                        </div>

                    </div><!-- / .bg-overlay -->
                </div><!-- / .fs-slide-1 -->
            @endforeach



        </div><!-- / .fs-slider -->

        <!-- Scroller -->
        <a href="#services" class="scroller">
            <span class="scroller-text">scroll down</span>
            <span class="linea-basic-magic-mouse"></span>
        </a>

    </div><!-- / .fs-slider-hero -->

    <!-- ========== Feature - Steps Numbers ========== -->

    <section class="container ft-steps-numbers">
        <div class="row section">

            <header class="sec-heading ws-s">
                <h2>Welcome Message</h2>
            </header>

            <!-- Step 1 -->
            <div class="col-md-12 mb-sm-100 wow fadeIn text-center" data-wow-duration="1s">
                <p>{{ $about->welcome_message }}</p>
                <h4>{{ $editorInCharge->name }}</h4>
                <span class="subheading">{{ Str::upper($editorInCharge->designation->designation) }}</span>

            </div>

        </div><!-- / .row -->

        <!-- CTA Button -->
        <div class="row ws-m">
            <div class="text-center">
                <a href="{{ route('about') }}" class="btn">read more</a>
            </div>
        </div><!-- / .row -->

    </section><!-- / .container -->

    {{-- TOp picks --}}
    <section>
        <div class="gray-bg">
            <section class="container section team-3col">
                <div class="row">

                    <header class="sec-heading">
                        <h2>Top picks</h2>
                        <span class="subheading">READ SOME OF THE TOP PICKS FROM OUR READERS</span>
                    </header>
                    @foreach ($picks as $pick)
                        <!-- Member 1 -->
                        <div class="col-lg-4 col-md-6 mb-sm-50">
                            <div class="t-item">
                                <!-- Image -->
                                <div class="t-image">
                                    <img src="{{ asset('storage/volume/' . $pick->volume->image) }}" alt="Team Member"
                                        class="img-responsive">
                                    <div class="t-description">
                                        <div class="content-wrapper">
                                            <h4 class="h-alt">Abstract</h4>
                                            <p>{{ Str::limit($pick->abstract, '200', '...') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Info -->
                                <div class="t-info">
                                    <h4 class="t-name">{{ $pick->title }}</h4>
                                    <span class="t-role">{{ $pick->author }}</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-heart"></i> {{ $pick->popularity }}</a></li>

                                    </ul>
                                </div>

                            </div><!-- / .t-item -->
                        </div><!-- / .col-md-4 -->
                    @endforeach

                </div><!-- / .row -->
            </section><!-- / .contianer -->
        </div><!-- / .gray-bg -->



        <!-- ========== Number Counters ========== -->

        <div class="number-counters">
            <div class="container">
                <div id="counters" class="row count-wrapper">

                    <!-- Item 1 -->
                    <div class="col-md-3 mb-sm-100 count-item"></div>

                    <!-- Item 2 -->
                    <div class="col-md-3 mb-sm-100 count-item">
                        <span id="count-2" class="count-nbr">{{ $total_manuscript->count() }}</span>
                        <span class="count-text">Submitted Article</span>
                    </div>

                    <!-- Item 3 -->
                    <div class="col-md-3 mb-sm-100 count-item">
                        <span id="count-3" class="count-nbr">{{ $total_article->count() }}</span>
                        <span class="count-text">Published Article</span>
                    </div>

                    <!-- Item 4 -->
                    <div class="col-md-3 count-item"></div>

                </div><!-- / .row -->
            </div><!-- / .container -->
        </div><!-- / .number-counters -->

    </section>
    <!-- ========== volume Preview ========== -->

    <div class="gray-bg">
        <section class="container section team-4col">
            <div class="row">

                <header class="sec-heading">
                    <h2>VOLUMES</h2>
                    <span class="subheading">available article volumes</span>
                </header>
                @foreach ($volumes as $item)
                    <!-- Member 1 -->
                    <div class="col-lg-3 col-md-6 mb-sm-50">
                        <div class="t-item">
                            <!-- Image -->
                            <div class="t-image">
                                <img src="{{ asset('storage/volume/' . $item->image) }}" alt="Team Member"
                                    class="img-responsive">
                            </div>
                            <!-- Info -->
                            <div class="t-info">
                                <h4 class="t-name">{{ $item->title }}</h4>
                                <span class="t-role">Issue - 1</span>
                            </div>

                        </div><!-- / .t-item -->
                    </div><!-- / .col-lg-3 -->
                @endforeach

            </div><!-- / .row -->
        </section><!-- / .contianer -->
    </div><!-- / .gray-bg -->

    <!-- ========== CTA - Newsletter Signup ========== -->

    <div class="cta-newsletter">
        <div class="bg-overlay">
            <div class="cta-wrapper">
                <h3 class="cta-lead h-alt wow fadeIn" data-wow-delay=".1s" data-wow-duration="1s">call for paper
                </h3>
                <p>
                    {!! $paper->description !!}
                </p>

            </div><!-- / .cta-wrapper -->
        </div><!-- / .bg-overlay -->
    </div><!-- / .cta-newsletter -->


    <!-- ========== Contact ========== -->

    <section class="section contact-1">

        <header class="sec-heading">
            <h2>Countact Us</h2>
            <span class="subheading">We love to hear from you</span>
        </header>

        <div class="contact-wrapper">


            <!-- Show Info Button -->
            <div class="show-info-link">
                <a href="#" class="show-info"><i class="fa fa-info"></i>
                    <h6>Show info</h6>
                </a>
            </div>

            <div class="container">

                <!-- Contact Form -->
                <div class="row">

                    <div class="col-md-offset-2 col-md-4 wow fadeInUp" data-wow-duration="1s">

                        <!-- Name -->
                        <div class="form-group">
                            <h4 for="name-contact-1">Phone</h4>
                            <p>{{ $about->phone }}</p>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <h4 for="name-contact-1">Address</h4>
                            <p>{{ $about->location }}</p>
                        </div>

                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-duration="1s">
                        <!-- Message -->
                        <div class="form-group">
                            <h4 for="name-contact-1">Email</h4>
                            <p>{{ $about->email }}</p>
                        </div>

                    </div><!-- / .col-md-4 -->

                </div><!-- / .row -->
            </div><!-- / .container -->
        </div><!-- / .contact-wrapper -->
    </section><!-- / .contact-1 -->
@endsection
