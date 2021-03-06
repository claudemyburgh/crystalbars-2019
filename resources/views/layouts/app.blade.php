<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="amp-google-client-id-api" content="gtag"> <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ config('app.url') }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title', 'Transparent burglar bars in Cape Town')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script language="JavaScript" defer src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-75033958-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-75033958-1');
    </script>

</head>
<body>
    <!-- Global site tag (gtag) - Google Ads: 964038674 -->
    <amp-analytics type="gtag" data-credentials="include">
        <script type="application/json"> { "vars": { "gtag_id": "AW-964038674", "config": { "AW-964038674": { "groups": "default" } } }, "triggers": { } } </script>
    </amp-analytics>

    @include('layouts.partials._facebook')

    <div id="app">


        @include('layouts.partials._nav')

        @if (request()->is('/'))

            <div class="hero">
                <video class="hero__video" muted autoplay loop>
                  <source src="{{ asset('video/file.mp4') }}" type="video/mp4">
                </video>
                <div class="hero__wrapper">
                    <div class="row">
                        <div class="md-col-8">
                            <h1>SECURE YOUR HOME AND BUSINESS WITH THE BEST TRANSPARENT BURGLAR BARS OUT THERE.</h1>
                            <a href="{{ route('quote') }}" class="hero__button">{{ __('hero.get_quote') }}</a>
                        </div>
                    </div>
                </div>

                <div class="bars__holder">
                    <div class="bars"></div>
                    <div class="bars"></div>
                    <div class="bars"></div>
                </div>

            </div>

        @endif

        <main class="main">
            @yield('content')
        </main>
        {{-- <mail-chimp></mail-chimp> --}}

        @include('layouts.partials._profile')
        @include('layouts.partials._footer')
    </div><!-- #app -->
</body>
</html>
