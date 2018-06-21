@extends('layouts.app') @section('title'){{ 'WELCOME' }}@stop @section('content')
<div class="wrapper">
    <div id="home">
        <Jumbotron/>
    </div>
    <div id="products">
        <featured-products></featured-products>
    </div>
    <div id="contact-us">
        <v-card>
            <v-container grid-list-md>
            <v-layout row wrap justify-center>
                <v-flex xs12>
                    <h1 class=" my-3 text-sm-center display-1">Contact us</h1>
                </v-flex>
                <v-flex xs12 sm8 md6>
                    <contact-us></contact-us>
                </v-flex>
            </v-layout>
        </v-container>
        </v-card>
    </div>
</div>
@include('includes.footer') @endsection