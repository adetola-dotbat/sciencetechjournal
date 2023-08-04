@extends('user.layout.master')
@section('pageName')
    Guideline
@endsection
@section('content')
    <header class="page-title pt-large pt-dark pt-plax-lg-dark" data-stellar-background-ratio="0.4">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <h1>Article Template</h1>
                    <span class="subheading">Template to follow</span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Guideline</li>
                </ol>
            </div>
        </div>
    </header>

    <!-- ========== Single Blog Post ========== -->

    <div id="blog" class="section container blog-classic">
        <div class="row">
            <div class="col-md-12 mb-sm-160">

                <!-- Blog Post -->
                <div class="col-md-12 blog-post-single wow fadeIn" data-wow-delay=".1s" data-wow-duration="2s">

                    <!-- Title -->
                    <h2 class="post-title">Guideline</h2>
                    <div class="blog-post-content">

                        <p>{!! $guideline->guideline !!}</p>
                    </div>

                </div><!-- / .col-md-8 -->

            </div>
        </div><!-- / .row -->
    </div><!-- / .container -->
@endsection
