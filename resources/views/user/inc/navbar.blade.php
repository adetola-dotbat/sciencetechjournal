<nav class="navbar navbar-default navbar-fixed-top mega navbar-trans">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Logo -->
            <a class="navbar-brand"><img style="max-width: 20%" class="navbar-logo"
                    src="{{ asset('storage/federalPolyLogo.png') }}" alt="Logo"></a>
        </div><!-- / .navbar-header -->

        <!-- Navbar Links -->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>

                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>

                <!-- Blog -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                        data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Authors <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('article.template') }}">Template</a></li>
                        <li><a href="{{ route('guideline') }}">Guideline</a></li>
                    </ul>
                </li><!-- / Blog -->

                <li>
                    <a href="{{ route('articles') }}">Articles</a>
                </li>

                <li>
                    <a href="{{ route('editor') }}">Editors</a>
                </li>

                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>

                <li style="margin-left: 4rem">
                    @if (auth()->user())
                        <a class="btn wow fadeIn" href="{{ route('logout') }}">logout</a>
                    @else
                        <a class="btn wow fadeIn" href="{{ route('login') }}">Login</a>
                    @endif

                </li>


            </ul><!-- / .nav .navbar-nav -->

        </div><!--/.navbar-collapse -->


    </div><!-- / .container -->
</nav><!-- / .navbar -->
