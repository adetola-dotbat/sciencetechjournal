<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>@yield('pageName') | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('administration/assets/css/dashlite0226.css?ver=3.1.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('administration/assets/css/theme0226.css?ver=3.1.2') }}">
    @stack('style')
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91615293-4');
    </script>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar no-touch nk-nio-theme as-mobile" theme="dark">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-sidebar nk-sidebar-fixed is-dark nk-sidebar-mobile nk-sidebar-active"
                data-content="sidebarMenu">
                @include('administration.inc.sidebar')
            </div>
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed is-dark">
                    @include('administration.inc.header')
                </div>
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            @yield('content')
                        </div>
                    </div>
                </div>
                @include('administration.inc.footer')
            </div>
        </div>
    </div>
    @stack('modal')
    <script type="text/javascript" src="{{ asset('administration/assets2/bundles/plugins/jquery/jquery-3.3.1.min.js') }}">
    </script>
    @stack('script')
</body>

</html>
