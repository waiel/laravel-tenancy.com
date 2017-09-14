@extends('layouts.app')

@section('content')
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
                                    <v-icon mdi x-large class="primary--text text--lighten-2">puzzle</v-icon>
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
                                    <v-icon mdi x-large class="primary--text text--lighten-2">speedometer</v-icon>
                                </v-card-text>
                                <v-card-title primary-title class="layout justify-center">
                                    <div class="headline">For SaaS and web development agencies</div>
                                </v-card-title>
                                <v-card-text>
                                    Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt ornare.
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                    Nullam in aliquet odio. Aliquam eu est vitae tellus bibendum tincidunt. Suspendisse potenti.
                                </v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex xs12 md4>
                            <v-card class="elevation-0 transparent">
                                <v-card-text class="text-xs-center">
                                    <v-icon mdi x-large class="primary--text text--lighten-2">heart-pulse</v-icon>
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