<template>
    <div>

        <section>
            <v-parallax src="docks.jpeg" height="600">
                <v-layout
                        column
                        align-center
                        justify-center
                        class="black--text"
                >
                    <img src="https://avatars0.githubusercontent.com/u/14941148?v=3&s=30" alt="Hyn">
                    <h1 class="secondary--text mb-2 display-3">hyn/multi-tenant</h1>
                    <div class="headline mb-3 text-xs-center">Laravel tenancy</div>
                    <v-btn
                            class="blue lighten-2 mt-5"
                            dark
                            large
                            nuxt
                            to="introduction/what-is-tenancy"
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
                        <h2 class="headline">One Laravel installation, multiple tenant apps</h2>
                        <span class="subheading">
                            Run multiple websites using the same laravel installation while keeping tenant specific data separated for fully independent multi-domain setups.
                        </span>
                    </div>
                </v-flex>
                <v-flex xs12>
                    <v-container grid-list-xl>
                        <v-layout row wrap align-center>
                            <v-flex xs12 md4>
                                <v-card class="elevation-0 transparent">
                                    <v-card-text class="text-xs-center">
                                        <v-icon x-large class="blue--text text--lighten-2">extension</v-icon>
                                    </v-card-text>
                                    <v-card-title primary-title class="layout justify-center">
                                        <div class="headline text-xs-center">Shared and separated</div>
                                    </v-card-title>
                                    <v-card-text class="subheading">
                                        The unobtrusive Laravel package that makes your app multi tenant. Serving
                                        multiple websites, each with one or more hostnames from the same codebase.
                                        But with clear separation of assets, database and the ability to override
                                        logic per tenant.
                                    </v-card-text>
                                </v-card>
                            </v-flex>
                            <v-flex xs12 md4>
                                <v-card class="elevation-0 transparent">
                                    <v-card-text class="text-xs-center">
                                        <v-icon x-large class="blue--text text--lighten-2">explore</v-icon>
                                    </v-card-text>
                                    <v-card-title primary-title class="layout justify-center">
                                        <div class="headline">Easy and flexible</div>
                                    </v-card-title>
                                    <v-card-text class="subheading">
                                        Suitable for marketing companies that like to re-use functionality for
                                        different clients or start-ups building the next software as a service.
                                        Configure to your needs and start implementing those awesome features.
                                    </v-card-text>
                                </v-card>
                            </v-flex>
                            <v-flex xs12 md4>
                                <v-card class="elevation-0 transparent">
                                    <v-card-text class="text-xs-center">
                                        <v-icon x-large class="blue--text text--lighten-2">favorite_border</v-icon>
                                    </v-card-text>
                                    <v-card-title primary-title class="layout justify-center">
                                        <div class="headline text-xs-center">Open source</div>
                                    </v-card-title>
                                    <v-card-text class="subheading">
                                        Free to use for any use. Commercial or not, single developer or multinational.
                                        And if you love this package, simply support the work on
                                        <a class="accent--text" href="https://patreon.com/tenancy" target="_blank">patreon</a>.
                                    </v-card-text>
                                </v-card>
                            </v-flex>
                        </v-layout>
                    </v-container>
                </v-flex>
            </v-layout>
        </section>
    </div>
    <!--<v-card>-->
        <!--<v-card-media class="black&#45;&#45;text" src="/docks.jpeg" height="200px">-->
        <!--</v-card-media>-->
        <!--<v-card-title>-->
            <!--<h1 class="title">Laravel tenancy</h1>-->
        <!--</v-card-title>-->
        <!--<v-card-text>-->
            <!--<p>-->
                <!--Run multiple websites using the same laravel installation while keeping tenant specific data separated for fully independant multi-domain setups.-->
            <!--</p>-->
            <!--<p>-->
                <!--The unobtrusive Laravel package that makes your app multi tenant. Serving multiple websites, each with one or more hostnames from the same codebase. But with clear separation of assets, database and the ability to override logic per tenant.-->
            <!--</p>-->
            <!--<p>-->
                <!--Suitable for marketing companies that like to re-use functionality for different clients or start-ups building the next software as a service.-->
            <!--</p>-->
        <!--</v-card-text>-->

        <!--<v-list two-line subheader class="info">-->
            <!--<v-subheader class="secondary">Separation of data</v-subheader>-->
            <!--<v-list-tile avatar class="info" nuxt to="/documentation/use">-->
                <!--<v-list-tile-avatar>-->
                    <!--<v-icon mdi>database</v-icon>-->
                <!--</v-list-tile-avatar>-->
                <!--<v-list-tile-content>-->
                    <!--<v-list-tile-title>Database</v-list-tile-title>-->
                    <!--<v-list-tile-sub-title>Split tenant data in separate databases, use prefixes or implement your own separation.</v-list-tile-sub-title>-->
                <!--</v-list-tile-content>-->
            <!--</v-list-tile>-->
            <!--<v-list-tile avatar class="info" nuxt to="/documentation/use">-->
                <!--<v-list-tile-avatar>-->
                    <!--<v-icon mdi>settings</v-icon>-->
                <!--</v-list-tile-avatar>-->
                <!--<v-list-tile-content>-->
                    <!--<v-list-tile-title>Config</v-list-tile-title>-->
                    <!--<v-list-tile-sub-title>Override or add specific config settings.</v-list-tile-sub-title>-->
                <!--</v-list-tile-content>-->
            <!--</v-list-tile>-->
            <!--<v-list-tile avatar class="info" nuxt to="/documentation/use">-->
                <!--<v-list-tile-avatar>-->
                    <!--<v-icon mdi>routes</v-icon>-->
                <!--</v-list-tile-avatar>-->
                <!--<v-list-tile-content>-->
                    <!--<v-list-tile-title>Routes</v-list-tile-title>-->
                    <!--<v-list-tile-sub-title>Apply tenant specific routes and/or re-use global application routes.</v-list-tile-sub-title>-->
                <!--</v-list-tile-content>-->
            <!--</v-list-tile>-->
            <!--<v-list-tile avatar class="info" nuxt to="/documentation/use">-->
                <!--<v-list-tile-avatar>-->
                    <!--<v-icon mdi>translate</v-icon>-->
                <!--</v-list-tile-avatar>-->
                <!--<v-list-tile-content>-->
                    <!--<v-list-tile-title>Translations</v-list-tile-title>-->
                    <!--<v-list-tile-sub-title>Read additional translation files from the tenant trans directory.</v-list-tile-sub-title>-->
                <!--</v-list-tile-content>-->
            <!--</v-list-tile>-->
            <!--<v-list-tile avatar class="info" nuxt to="/documentation/use">-->
                <!--<v-list-tile-avatar>-->
                    <!--<v-icon mdi>layers</v-icon>-->
                <!--</v-list-tile-avatar>-->
                <!--<v-list-tile-content>-->
                    <!--<v-list-tile-title>Vendor</v-list-tile-title>-->
                    <!--<v-list-tile-sub-title>Reads additional code in a tenant vendor directory, fully composer compatible.</v-list-tile-sub-title>-->
                <!--</v-list-tile-content>-->
            <!--</v-list-tile>-->
        <!--</v-list>-->
    <!--</v-card>-->
</template>
<script>
</script>
