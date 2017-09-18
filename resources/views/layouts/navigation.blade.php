<v-toolbar fixed class="white">
    <v-toolbar-title>{{ config('app.name') }}</v-toolbar-title>

    <v-breadcrumbs icons divider="forward">
        <v-breadcrumbs-item v-for="(segment, i) in paths" :key="i">
            <a :href="segment.split('/').length !== 3 ? segment : null">@{{ _.last(segment.split('/')) }}</a>
        </v-breadcrumbs-item>
    </v-breadcrumbs>

    <v-spacer></v-spacer>

    <v-btn flat href="{{ route('docs.index') }}">
        <v-icon>mdi-help-box</v-icon> documentation
    </v-btn>

    @if(config('discord.invite-link'))
    <v-btn flat href="{{ config('discord.invite-link') }}" target="_blank">
        <v-icon>mdi-discord</v-icon> chat
    </v-btn>
    @endif
</v-toolbar>