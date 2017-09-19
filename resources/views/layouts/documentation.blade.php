@extends('layouts.app')

@section('content')
    <section>
        <v-layout
                column
                align-center
                justify-center
                class="primary--text"
        >
            <h1 class="mb-2 mt-4 display-2">
                {{ $title }}
            </h1>
        </v-layout>
    </section>

    <section class="my-5">
        <v-layout row>
            <v-flex xs1 offset-md1 md2>
                @include('documentation.navigation')
            </v-flex>
            <v-flex xs11 md6 offset-md1>
                <v-card raised>
                    @if(config('github.documentation-repo-url'))
                    <v-card-text class="pa-5 documentation-content">
                        <v-btn
                                href="{{ config('github.documentation-repo-url') }}/tree/master/resources/markdown/documentation/{{ $slug }}.md"
                                small
                                absolute
                                fab
                                top
                                right
                                secondary
                                v-tooltip:left="{ html: 'Suggest edits on GitHub' }"
                        >
                            <v-icon class="white--text">mdi-github-box</v-icon>
                        </v-btn>
                        @endif
                        {!! $content !!}
                    </v-card-text>
                </v-card>
            </v-flex>
        </v-layout>
    </section>
@endsection