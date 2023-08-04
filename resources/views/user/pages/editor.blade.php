@extends('user.layout.master')
@section('pageName')
    Editors
@endsection
@section('content')
    <header class="page-title pt-large pt-dark pt-plax-lg-dark" data-stellar-background-ratio="0.4">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <h1>Editors</h1>
                    <span class="subheading">Take a look at our editors</span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Editors</li>
                </ol>
            </div>
        </div>
    </header>

    <div class="gray-bg">
        <section class="container section team-3col">
            @foreach ($designations as $designation)
                <div class="row">
                    <header style="padding-top: 10rem" class="sec-heading ">
                        <h2> {{ $designation->designation }}</h2>
                        {{-- <span class="subheading">We are creative professionals</span> --}}
                    </header>

                    @foreach ($designation->editors as $editor)
                        <!-- Member 1 -->
                        <div class="col-lg-4 col-md-6 mb-sm-50">
                            <div class="t-item">

                                <!-- Image -->
                                <div class="t-image">
                                    <img src="{{ asset('storage/editors/' . $editor->image) }}" alt="Team Member"
                                        class="img-responsive">

                                </div>

                                <!-- Info -->
                                <div class="t-info">
                                    <h4 class="t-name">{{ $editor->name }}</h4>
                                    <span class="t-role">{{ $editor->institution }}</span>

                                </div>

                            </div><!-- / .t-item -->
                        </div><!-- / .col-md-4 -->
                    @endforeach
                </div><!-- / .row -->
            @endforeach
        </section><!-- / .contianer -->
    </div><!-- / .gray-bg -->
@endsection
