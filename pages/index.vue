<template>
    <v-card>
        <v-card-media class="black--text" src="/docks.jpeg" height="200px">
        </v-card-media>
        <v-card-title>
            <h1 class="title">Laravel tenancy</h1>
        </v-card-title>
        <v-card-text>
            <p>
                Run multiple websites using the same laravel installation while keeping tenant specific data separated for fully independant multi-domain setups.
            </p>
            <p>
                The unobtrusive Laravel package that makes your app multi tenant. Serving multiple websites, each with one or more hostnames from the same codebase. But with clear separation of assets, database and the ability to override logic per tenant.
            </p>
            <p>
                Suitable for marketing companies that like to re-use functionality for different clients or start-ups building the next software as a service.
            </p>
        </v-card-text>

        <v-list two-line subheader class="info">
            <v-subheader class="secondary">Separation of data</v-subheader>
            <v-list-tile avatar class="info" nuxt to="/documentation/use">
                <v-list-tile-avatar>
                    <v-icon mdi>database</v-icon>
                </v-list-tile-avatar>
                <v-list-tile-content>
                    <v-list-tile-title>Database</v-list-tile-title>
                    <v-list-tile-sub-title>Split tenant data in separate databases, use prefixes or implement your own separation.</v-list-tile-sub-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile avatar class="info" nuxt to="/documentation/use">
                <v-list-tile-avatar>
                    <v-icon mdi>settings</v-icon>
                </v-list-tile-avatar>
                <v-list-tile-content>
                    <v-list-tile-title>Config</v-list-tile-title>
                    <v-list-tile-sub-title>Override or add specific config settings.</v-list-tile-sub-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile avatar class="info" nuxt to="/documentation/use">
                <v-list-tile-avatar>
                    <v-icon mdi>routes</v-icon>
                </v-list-tile-avatar>
                <v-list-tile-content>
                    <v-list-tile-title>Routes</v-list-tile-title>
                    <v-list-tile-sub-title>Apply tenant specific routes and/or re-use global application routes.</v-list-tile-sub-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile avatar class="info" nuxt to="/documentation/use">
                <v-list-tile-avatar>
                    <v-icon mdi>translate</v-icon>
                </v-list-tile-avatar>
                <v-list-tile-content>
                    <v-list-tile-title>Translations</v-list-tile-title>
                    <v-list-tile-sub-title>Read additional translation files from the tenant trans directory.</v-list-tile-sub-title>
                </v-list-tile-content>
            </v-list-tile>
            <v-list-tile avatar class="info" nuxt to="/documentation/use">
                <v-list-tile-avatar>
                    <v-icon mdi>layers</v-icon>
                </v-list-tile-avatar>
                <v-list-tile-content>
                    <v-list-tile-title>Vendor</v-list-tile-title>
                    <v-list-tile-sub-title>Reads additional code in a tenant vendor directory, fully composer compatible.</v-list-tile-sub-title>
                </v-list-tile-content>
            </v-list-tile>
        </v-list>
    </v-card>
</template>
<script>
</script>
