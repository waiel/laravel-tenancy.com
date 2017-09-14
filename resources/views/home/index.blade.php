@extends('layouts.app')

@section('content')
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
                        href="{{ route('docs.index') }}"
                >
                    Get Started
                </v-btn>
            </v-layout>
        </v-parallax>
    </section>
    <section>
        <v-layout
                column
                wrap
                class="my-5"
                align-center
        >
            <v-flex xs12 sm4 class="my-3">
                <div class="text-xs-center">
                    <h2 class="headline">hyn/multi-tenant</h2>
                    <span class="subheading">
                        Run multiple websites using the same laravel installation while keeping tenant specific data separated for fully independant multi-domain setups.
                    </span>
                </div>
            </v-flex>
            <v-flex xs12>
                <v-container grid-list-xl>
                    <v-layout row wrap align-center>
                        <v-flex xs12 md4>
                            <v-card class="elevation-0 transparent">
                                <v-card-text class="text-xs-center">
                                    <v-icon x-large class="primary--text text--lighten-2">mdi-puzzle</v-icon>
                                </v-card-text>
                                <v-card-title primary-title class="layout justify-center">
                                    <div class="headline text-xs-center">Easy, unobtrusive & flexible</div>
                                </v-card-title>
                                <v-card-text>
                                    Tenancy easily integrates into your Laravel code. No complex installation procedure
                                    is required to make your app multi tenant. This package does not replace any Laravel
                                    code, it safely integrates unobtrusively and still allows for a vast amount of
                                    flexibility.
                                </v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex xs12 md4>
                            <v-card class="elevation-0 transparent">
                                <v-card-text class="text-xs-center">
                                    <v-icon x-large class="primary--text text--lighten-2">mdi-wall</v-icon>
                                </v-card-text>
                                <v-card-title primary-title class="layout justify-center">
                                    <div class="headline">Separation of concern</div>
                                </v-card-title>
                                <v-card-text>
                                    Serving multiple websites from the same Laravel installation, each with one or more
                                    hostnames. Clear separation of assets, database and the ability to override
                                    logic per tenant. Or make global assets, database and code available to every
                                    tenant.
                                </v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex xs12 md4>
                            <v-card class="elevation-0 transparent">
                                <v-card-text class="text-xs-center">
                                    <v-icon x-large class="primary--text text--lighten-2">mdi-heart-pulse</v-icon>
                                </v-card-text>
                                <v-card-title primary-title class="layout justify-center">
                                    <div class="headline text-xs-center">Stable & free</div>
                                </v-card-title>
                                <v-card-text>
                                    Tenancy will remain free to use for any commercial and non-commercial use under
                                    the MIT license. No license changes will be introduced for this or future versions
                                    of this package. This package is well tested, her features and requirements are
                                    covered using continuous integration tests.
                                </v-card-text>
                            </v-card>
                        </v-flex>
                    </v-layout>
                </v-container>
            </v-flex>
        </v-layout>
    </section>
@endsection