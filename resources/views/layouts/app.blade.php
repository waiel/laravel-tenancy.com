<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/materialdesignicons.css') }}">
    <link href="/image/favicon.png" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div id="app">
    <v-app light>
        <v-toolbar fixed class="white">
            <v-toolbar-title>Laravel tenancy</v-toolbar-title>
        </v-toolbar>
        <main>
            <section>
                <v-parallax src="/image/docks.jpeg" height="600">
                    <v-layout
                            column
                            align-center
                            justify-center
                            class="white--text"
                    >
                        <a href="https://hyn.me" target="_blank"><img src="/image/hyn.png" width="30px" alt="Hyn"></a>
                        <h1 class="primary--text mb-2 display-3">Laravel tenancy</h1>
                        <div class="headline mb-3 text-xs-center secondary--text">One installation, any number of portals</div>
                        <v-btn
                                class="accent lighten-2 mt-5"
                                dark
                                large
                                href="/documentation"
                        >
                            Get Started
                        </v-btn>
                    </v-layout>
                </v-parallax>
            </section>

            @yield('content')

        </main>
    </v-app>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>