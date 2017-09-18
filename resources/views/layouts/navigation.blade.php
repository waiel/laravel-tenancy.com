<v-toolbar fixed class="white">
    <v-toolbar-title class="hidden-sm-and-down">{{ config('app.name') }}</v-toolbar-title>

    <v-breadcrumbs icons divider="forward" class="hidden-sm-and-down">
        <v-breadcrumbs-item v-for="(segment, i) in paths" :key="i">
            <a :href="segment.split('/').length !== 3 ? segment : null">@{{ _.last(segment.split('/')) }}</a>
        </v-breadcrumbs-item>
    </v-breadcrumbs>

    <v-spacer></v-spacer>

    @if(request()->route()->getName() !== 'home.index')
    <v-btn flat href="{{ route('home.index') }}">
        <v-icon>mdi-chevron-double-left</v-icon> home
    </v-btn>
    @endif

    <v-btn flat href="{{ route('docs.index') }}">
        <v-icon>mdi-help-box</v-icon> documentation
    </v-btn>

    @if(config('discord.invite-link'))
    <v-btn flat href="{{ route('chat') }}" target="_blank">
        <v-icon>mdi-discord</v-icon> chat
    </v-btn>
    @endif
</v-toolbar>