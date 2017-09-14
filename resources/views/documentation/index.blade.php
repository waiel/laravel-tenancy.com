@extends('layouts.app')

@section('content')
    <section>
        <v-parallax src="/image/docks-calm-waters.jpeg" height="400">
            <v-layout
                    column
                    align-center
                    justify-center
                    class="white--text"
            >
                <h1 class="mb-2 display-3">Tenancy documentation</h1>
                <div class="headline mb-3">
                    <blockquote>
                        <v-icon>mdi-format-quote-open</v-icon>
                        Those who know, do. Those that understand, teach.
                        <v-icon>mdi-format-quote-close</v-icon>
                        <p class="caption">Aristotle</p>
                    </blockquote>
                </div>
                @if(config('discord.invite-link'))
                <v-btn
                        class="accent lighten-2 mt-5"
                        dark
                        large
                        href="{{ route('chat') }}"
                        target="_blank"
                >
                    Chat on Discord
                </v-btn>
                @endif
            </v-layout>
        </v-parallax>
    </section>
    <section>
        <v-layout
                column
                class="my-5"
                align-center
        >
            <v-flex xs12 sm6 class="my-3">
                @include('documentation.navigation', ['open' => true])
            </v-flex>
        </v-layout>
    </section>
@endsection