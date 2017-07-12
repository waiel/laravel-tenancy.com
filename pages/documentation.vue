<template>
    <v-card>
        <v-card-title class="grey lighten-3">
            <h1 class="title">{{ $route.name.split('-').join(', ') }}</h1>
        </v-card-title>
        <v-card-text>
            <nuxt-child/>
        </v-card-text>
        <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn tag="a" flat target="_blank" :href="'https://github.com/hyn/laravel-tenancy.com/edit/master/pages/' + $route.name.replace('-', '/') + '.vue'">
                suggest edits on GitHub
                <v-icon mdi right>github-box</v-icon>
            </v-btn>
        </v-card-actions>
    </v-card>
</template>
<script>
    export default {
    }
</script>
