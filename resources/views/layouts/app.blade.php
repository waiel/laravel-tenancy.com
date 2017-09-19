<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/materialdesignicons.css') }}">
    <link href="/image/favicon.png" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Taviraj|Work+Sans|Material+Icons" rel="stylesheet">
    @if(app()->environment('production'))
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106781545-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag('js', new Date());

      gtag('config', 'UA-106781545-1');
    </script>
    @endif
</head>
<body>
<div id="app">
    <v-app light>
        @include('layouts.navigation')
        <main>


            @yield('content')

            <section>
                <v-parallax src="/image/docks-calm.jpeg" height="380">
                    <v-layout column align-center justify-center>
                        <div class="headline white--text mb-3">Support active development</div>
                        <v-btn
                                secondary
                                class="lighten-2 mt-5"
                                dark
                                large
                                href="https://www.patreon.com/tenancy"
                                target="_blank"
                        >
                            <img src="/image/patreon.svg" class="mr-2" height="20px"> Support
                        </v-btn>
                    </v-layout>
                </v-parallax>
            </section>

            <v-footer class="secondary">
                <v-layout row wrap align-center>
                    <v-flex xs12>
                        <div class="white--text ml-3 text-xs-center">
                            Made with
                            <v-icon class="red--text">mdi-heart-outline</v-icon>
                            by <a class="white--text" href="https://hyn.me" target="_blank">Hyn</a>
                            for the Laravel community
                        </div>
                    </v-flex>
                </v-layout>
            </v-footer>
        </main>
    </v-app>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>