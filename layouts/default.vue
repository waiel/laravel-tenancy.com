<template>
    <v-app light>
        <v-toolbar class="white">
            <v-toolbar-title v-text="title"></v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn flat nuxt exact to="/" v-tooltip:right="{html: 'Return to the home page.'}">
                <v-icon mdi>home</v-icon>
            </v-btn>
            <v-btn v-tooltip:bottom="{html: 'View code and issues on GitHub.'}" flat tag="a" href="https://github.com/hyn/multi-tenant" target="_blank">
                <v-icon mdi>github-box</v-icon>
            </v-btn>
            <v-btn v-tooltip:bottom="{html: 'Keep this package free, support it!'}" flat tag="a" href="https://patreon.com/tenancy" target="_blank">
                <img src="/patreon.svg" type="image/svg+xml" width="24px" />
            </v-btn>
            <v-btn v-tooltip:left="{html: 'Newsletter, occasional progress updates.'}" flat tag="a" href="https://confirmsubscription.com/h/i/DB343D4781A9960C" target="_blank">
                <v-icon mdi>email-alert</v-icon>
            </v-btn>
        </v-toolbar>
        <main>

            <nuxt/>
        </main>
    </v-app>
        <!---->
        <!--<main>-->
            <!--<v-container fluid>-->
                <!--<v-layout row>-->
                    <!--<v-flex xs8>-->
                        <!--<nuxt/>-->
                    <!--</v-flex>-->
                    <!--<v-flex xs4 class="sideMenu">-->
                        <!--<v-card class="grey lighten-4">-->
                            <!--<v-toolbar flat dense card>-->
                                <!--<img src="https://avatars0.githubusercontent.com/u/14941148?v=3&s=30" />-->
                                <!--<v-spacer></v-spacer>-->
                                <!--<v-toolbar-title class="body-2">-->
                                    <!--hyn/multi-tenant-->
                                <!--</v-toolbar-title>-->
                                <!--<v-spacer></v-spacer>-->
                                <!--<v-chip label class="info">5.x</v-chip>-->
                            <!--</v-toolbar>-->
                            <!--<div class="text-xs-center grey lighten-4">-->

                                <!--<v-btn flat nuxt exact to="/" v-tooltip:right="{html: 'Return to the home page.'}">-->
                                    <!--<v-icon mdi>home</v-icon>-->
                                <!--</v-btn>-->
                                <!--<v-btn v-tooltip:bottom="{html: 'View code and issues on GitHub.'}" flat tag="a" href="https://github.com/hyn/multi-tenant" target="_blank">-->
                                    <!--<v-icon mdi>github-box</v-icon>-->
                                <!--</v-btn>-->
                                <!--<v-btn v-tooltip:bottom="{html: 'Keep this package free, support it!'}" flat tag="a" href="https://patreon.com/tenancy" target="_blank">-->
                                    <!--<img src="/patreon.svg" type="image/svg+xml" width="24px" />-->
                                <!--</v-btn>-->
                                <!--<v-btn v-tooltip:left="{html: 'Newsletter, occasional progress updates.'}" flat tag="a" href="https://confirmsubscription.com/h/i/DB343D4781A9960C" target="_blank">-->
                                    <!--<v-icon mdi>email-alert</v-icon>-->
                                <!--</v-btn>-->
                            <!--</div>-->
                            <!--<v-list dense class="grey lighten-4">-->
                                <!--<v-list-group v-for="route in routes" :value="$route.path.startsWith(route.to)" v-bind:key="route.title" nuxt :to="route.to">-->
                                    <!--<v-list-tile slot="item">-->
                                        <!--<v-list-tile-action>-->
                                            <!--<v-icon mdi>{{ route.mdi }}</v-icon>-->
                                        <!--</v-list-tile-action>-->
                                        <!--<v-list-tile-content>-->
                                            <!--<v-list-tile-title>{{ route.title }}</v-list-tile-title>-->
                                        <!--</v-list-tile-content>-->
                                        <!--<v-list-tile-action>-->
                                            <!--<v-icon>keyboard_arrow_down</v-icon>-->
                                        <!--</v-list-tile-action>-->
                                    <!--</v-list-tile>-->
                                    <!--<v-list-tile class="grey lighten-4" v-for="sub in route.subs" v-bind:key="sub.title" nuxt :to="sub.to ? (route.to + sub.to) : null" :href="sub.href" :target="sub.href ? '_blank' : '_self'">-->
                                        <!--<v-list-tile-action>-->
                                            <!--<v-icon mdi>{{ sub.mdi }}</v-icon>-->
                                        <!--</v-list-tile-action>-->
                                        <!--<v-list-tile-content>-->
                                            <!--<v-list-tile-title>{{ sub.title }}</v-list-tile-title>-->
                                            <!--<v-list-tile-sub-title v-if="sub.description">{{ sub.description }}</v-list-tile-sub-title>-->
                                        <!--</v-list-tile-content>-->
                                    <!--</v-list-tile>-->
                                <!--</v-list-group>-->
                            <!--</v-list>-->
                        <!--</v-card>-->
                    <!--</v-flex>-->
                <!--</v-layout>-->
            <!--</v-container>-->
        <!--</main>-->
    <!--</v-app>-->
</template>
<script>
    export default {
        head: {
            title: "Multi domain Laravel apps within reach"
        },
        data () {
            return {
                title: 'Laravel tenancy',
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
                                title: "Use",
                                description: "The quick start guide.",
                                mdi: "worker",
                                to: "/use"
                            },
                            {
                                title: "Extend",
                                description: "Build additional functionality.",
                                mdi: "creation",
                                to: "/extend"
                            }
                        ]
                    },
                    {
                        title: "Connect",
                        mdi: "account-network",
                        subs: [
                            {
                                title: "Newsletter",
                                description: "Occasional progress updates.",
                                mdi: "email-alert",
                                href: "https://confirmsubscription.com/h/i/DB343D4781A9960C"
                            },
                            {
                                title: "Patreon community",
                                description: "Keep this package free, support it!",
                                mdi: "comment-text",
                                href: "https://patreon.com/tenancy/community"
                            },
                            {
                                title: "Twitter",
                                mdi: "twitter",
                                href: "https://twitter.com/luceos"
                            },
                            {
                                title: "LinkedIn",
                                mdi: "linkedin",
                                href: "https://linkedin.com/in/luceos"
                            }
                        ]
                    }
                ]
            }
        }
    }
</script>
