@extends('user.layout.master')
@section('pageName')
    About Us
@endsection
@section('content')
    <!-- ========== Page Title ========== -->

    <header class="page-title pt-large pt-dark pt-plax-lg-dark" data-stellar-background-ratio="0.4">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <h1>About Us</h1>
                    <span class="subheading">Few words about us</span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
    </header>


    <!-- ========== About - Section ========== -->

    <section id="about" class="container">
        <div class="row section">
            <header class="sec-heading">
                <h2>About Us</h2>
            </header>
            <div class="col-md-offset-1 col-md-10">
                <p>{{ $about->description }}</p>
            </div>
            <header class="sec-heading">
                <h2>Welcome Message</h2>
            </header>
            <div class="col-md-offset-1 col-md-10">
                <blockquote>{{ $about->welcome_message }}
                    <footer><cite>{{ $editorInCharge->name }}</cite></footer>
                </blockquote>
            </div>

        </div><!-- / .row -->
        <div class="row ws-m">
            <div class="col-md-12 text-center">
                <a href="{{ route('contact') }}" class="btn-text">Get in touch</a>
            </div>
        </div>
    </section><!-- / .container -->
@endsection
