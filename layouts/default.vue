<template>
    <v-app>
        <main>
            <v-container fluid>
                <v-layout row>
                    <v-flex xs8>
                        <nuxt/>
                    </v-flex>
                    <v-flex xs4>
                        <v-card>
                            <v-toolbar flat dense card>
                                <img src="https://avatars0.githubusercontent.com/u/14941148?v=3&s=30" />
                                <v-spacer></v-spacer>
                                <v-toolbar-title class="body-2">
                                    hyn/multi-tenant
                                </v-toolbar-title>
                                <v-spacer></v-spacer>
                                <!--<v-btn icon>-->
                                    <!--<v-icon mdi>dots-horizontal</v-icon>-->
                                <!--</v-btn>-->
                            </v-toolbar>
                            <v-list dense class="grey lighten-4">
                                <li>
                                    <v-btn flat nuxt exact to="/">
                                        <v-icon mdi>home</v-icon>
                                    </v-btn>
                                    <v-btn flat tag="a" href="https://github.com/hyn/multi-tenant" target="_blank">
                                        <v-icon mdi>github-box</v-icon>
                                    </v-btn>
                                    <v-btn flat tag="a" href="https://patreon.com/tenancy" target="_blank">
                                        <img src="/patreon.svg" type="image/svg+xml" width="24px" />
                                    </v-btn>
                                    <v-btn flat tag="a" href="https://confirmsubscription.com/h/i/DB343D4781A9960C" target="_blank">
                                        <v-icon mdi>email-alert</v-icon>
                                    </v-btn>
                                </li>
                            </v-list>
                        </v-card>
                        <v-spacer></v-spacer>
                        <v-card>
                            <v-list dense>
                                <v-list-group v-for="route in routes" v-bind:key="route.title" nuxt :to="route.to">
                                    <v-list-tile slot="item">
                                        <v-list-tile-action>
                                            <v-icon mdi>{{ route.mdi }}</v-icon>
                                        </v-list-tile-action>
                                        <v-list-tile-content>
                                            <v-list-tile-title>{{ route.title }}</v-list-tile-title>
                                        </v-list-tile-content>
                                        <v-list-tile-action>
                                            <v-icon>keyboard_arrow_down</v-icon>
                                        </v-list-tile-action>
                                    </v-list-tile>
                                    <v-list-tile v-for="sub in route.subs" v-bind:key="sub.title" nuxt :to="sub.to ? (route.to + sub.to) : null" :href="sub.href" :target="sub.href ? '_blank' : '_self'">
                                        <v-list-tile-action>
                                            <v-icon mdi>{{ sub.mdi }}</v-icon>
                                        </v-list-tile-action>
                                        <v-list-tile-content>
                                            <v-list-tile-title>{{ sub.title }}</v-list-tile-title>
                                            <v-list-tile-sub-title v-if="sub.description">{{ sub.description }}</v-list-tile-sub-title>
                                        </v-list-tile-content>
                                    </v-list-tile>
                                </v-list-group>
                            </v-list>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </main>
    </v-app>
</template>
<script>
    export default {
        head: {
            title: "Multi domain Laravel apps within reach"
        },
        data () {
            return {
                routes: [
                    {
                        title: "Documentation",
                        mdi: "book-open-page-variant",
                        to: "/documentation",
                        subs: [
                            {
                                title: "Installation",
                                description: "Laravel compatibility and installation guide.",
                                mdi: "settings-box",
                                to: "/installation"
                            },
                            {
                                title: "Concept",
                                description: "The basic principles.",
                                mdi: "baby-buggy",
                                to: "/concept"
                            },
                            {
                                title: "Implementation",
                                description: "The quick start guide.",
                                mdi: "worker",
                                to: "/implementation"
                            }
                        ]
                    }
                ]
            }
        }
    }
</script>
