@extends('layouts.app')

@section('content')
    <section>
        <v-parallax src="/image/coffee-beans.jpg" height="200">
            <v-layout
                    column
                    align-center
                    justify-center
                    class="white--text"
            >
                <h1 class="mb-2 display-3">{{ $page->title }}</h1>
            </v-layout>
        </v-parallax>
    </section>

    <section class="my-5">
        <v-layout row>
            <v-flex xs12 offset-md1 md2>
                @include('documentation.navigation')
            </v-flex>
            <v-flex xs12 md6 offset-md1>
                <v-card raised>
                    <v-card-text class="pa-5">
                        {!! $page->getRenderedMarkdown() !!}
                    </v-card-text>
                </v-card>
            </v-flex>
        </v-layout>
    </section>
@endsection