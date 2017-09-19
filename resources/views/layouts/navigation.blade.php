<v-toolbar fixed class="white">
    <v-toolbar-title class="hidden-sm-and-down">
        <v-btn primary flat href="{{ route('home.index') }}">{{ config('app.name') }}</v-btn>
    </v-toolbar-title>

    <v-breadcrumbs icons divider="forward" class="hidden-sm-and-down">
        <v-breadcrumbs-item v-for="(segment, i) in paths" :key="i">
            <a :href="segment.split('/').length !== 3 ? segment : null">@{{ _.last(segment.split('/')) }}</a>
        </v-breadcrumbs-item>
    </v-breadcrumbs>

    <v-spacer></v-spacer>

    @if(request()->route()->getName() !== 'home.index')
    <v-btn flat href="{{ route('home.index') }}">
        <v-icon>mdi-chevron-double-left</v-icon>
        <span>home</span>
    </v-btn>
    @endif

    <v-btn flat href="{{ route('docs.index') }}">
        <v-icon>mdi-book-open-page-variant</v-icon>
        <span>documentation</span>
    </v-btn>

    @if(config('newsletter.subscribe-link'))
        <v-btn
                flat
                href="{{ route('newsletter.signup') }}" target="_blank"
                v-tooltip:left="{ html: 'Stay tuned, subscribe to the newsletter' }"
        >
            <v-icon>mdi-email-alert</v-icon>
            <span>newsletter</span>
        </v-btn>
    @endif

    @if(config('discord.invite-link'))
        <v-btn
            flat
            href="{{ route('chat') }}" target="_blank"
            v-tooltip:left="{ html: 'Join the chat on Discord' }"
        >
            <v-icon>mdi-discord</v-icon>
            <span>chat</span>
        </v-btn>
    @endif
</v-toolbar>