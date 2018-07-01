@extends('layouts.app')

@section('title'){{ 'Sign-in' }}@stop

@section('content')
    <v-container grid-list-md class="mt-4">
        <v-layout row wrap justify-center>
            <v-flex xs12 sm6 md4>
                <v-card class="pa-3">
                    <login><login/>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
@endsection