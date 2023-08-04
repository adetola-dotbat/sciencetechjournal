@extends('user.layout.master')
@section('pageName')
    Articles
@endsection
@section('content')
    <header class="page-title pt-large pt-dark pt-plax-lg-dark" data-stellar-background-ratio="0.4">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <h1>Articles</h1>
                    <span class="subheading">Available articles</span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Articles</li>
                </ol>
            </div>
        </div>
    </header>

    <!-- ========== Portfolio Masonry 2 ========== -->

    <section class="container section portfolio-layout portfolio-masonry-2">
        <div class="row">
            <header class="sec-heading">
                <h2>Our Articles</h2>
                {{-- <span class="subheading">Lorem ipsum </span> --}}
            </header>
        </div><!-- / .row -->

        <!--  -->
        <div class="row">
            <ul id="pfolio-filters" class="portfolio-filters">
                <li class="active"><a href="#" data-filter="*">All</a></li>
                @foreach ($volumes as $volume)
                    <li><a href="#" data-filter=".{{ $volume->title }}">{{ $volume->title }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="row">
            <div class="pfolio-items">
                <div class="grid-sizer"></div>
                @foreach ($articles as $article)
                    <!-- Item 1 -->
                    <div class="p-item {{ $article->volume->title }}">
                        <div class="p-wrapper hover-default">
                            <img src="{{ asset('storage/volume/' . $article->volume->image) }}" alt="Project Example">
                            <div class="p-hover">
                                <div class="p-content">
                                    <h4>{{ Str::title($article->title) }}</h4>
                                    <h6 class="subheading"> {{ Str::upper($article->author) }}</h6>
                                </div>
                            </div>
                        </div>
                    </div><!-- / .p-item -->
                @endforeach
            </div><!-- / .pfolio-items -->
        </div><!-- / .row -->
    </section><!-- / .portfolio-masonry-2 -->

    @push('script')
        <script src="{{ asset('user/assets/js/vendor/packery-mode.pkgd.min.js') }}"></script>
    @endpush
@endsection
