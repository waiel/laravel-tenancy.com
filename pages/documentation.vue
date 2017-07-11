<template>
    <v-card>
        <v-card-title class="grey lighten-3">
            <h1 class="title">{{ $route.name.split('-').join(', ') }}</h1>
        </v-card-title>
        <v-card-text>
            <nuxt-child/>
        </v-card-text>
    </v-card>
</template>
<script>
    export default {
    }
</script>
