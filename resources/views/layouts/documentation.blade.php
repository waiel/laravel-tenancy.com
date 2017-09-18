@extends('layouts.app')

@section('content')
    <section>
        <v-layout
                column
                align-center
                justify-center
                class="primary--text"
        >
            <h1 class="mb-2 mt-4 display-3">{{ $title }}</h1>
        </v-layout>
    </section>

    <section class="my-5">
        <v-layout row>
            <v-flex xs1 offset-md1 md2>
                @include('documentation.navigation')
            </v-flex>
            <v-flex xs11 md6 offset-md1>
                <v-card raised>
                    <v-card-text class="pa-5 documentation-content">
                        {!! $content !!}
                    </v-card-text>
                </v-card>
            </v-flex>
        </v-layout>
    </section>
@endsection