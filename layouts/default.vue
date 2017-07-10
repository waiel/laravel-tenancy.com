<template>
    <v-app>
        <main>
            <v-container fluid>
                <v-layout row>
                    <v-flex xs8>
                        <nuxt/>
                    </v-flex>
                    <v-flex xs4>
                        <v-card flat class="primary">
                            <v-toolbar flat dense>
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
                            <v-list dense class="grey lighten-5">
                                <v-list-tile>
                                    <v-list-tile-avatar>
                                        <v-icon mdi>github-box</v-icon>
                                    </v-list-tile-avatar>
                                    <v-list-tile-content>
                                        <v-list-tile-title>GitHub</v-list-tile-title>
                                        <v-list-tile-sub-title>Code & issues.</v-list-tile-sub-title>
                                    </v-list-tile-content>
                                </v-list-tile>

                                <v-list-tile v-for="item in structure">
                                    <v-list-tile-content>
                                        <v-list-tile-title>{{ item.title }}</v-list-tile-title>
                                    </v-list-tile-content>
                                </v-list-tile>
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
            title: "Powering SaaS Apps"
        },

        methods: {
            structure: function() {

                console.log(this.$route());
            }
        }
    }
</script>
