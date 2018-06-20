@extends('layouts.app')

@section('title'){{ 'Sign-in' }}@stop

@section('content')
    <v-container grid-list-md class="mt-4">
        <v-layout row wrap justify-center>
            <v-flex xs12 sm6 md4>
                <v-card class="pa-3">
                    <form>
                        <v-flex xs12>
                            <p class="text-sm-center headline">Login</p>
                            <v-divider class="mt-1"></v-divider>
                        </v-flex>
                        <v-flex xs12>
                            <v-text-field
                                prepend-icon="account_circle" 
                                solo
                                name="username"
                                label="Username or Email"
                            ></v-text-field>
                        </v-flex>
                       <v-flex>
                            <v-text-field prepend-icon="vpn_key" solo name="password" label="Password" type="password"></v-text-field>
                       </v-flex>
                       <v-flex xs12>
                            <a style="color:#0366d6; font-weight: 400; text-transform:uppercase;" class="" href="{{ route('password.request') }}">
                                <small>{{ __('Forgot Your Password?') }}</small>
                            </a>
                        </v-flex>
                       <v-flex xs12>
                            <v-btn color="primary" block>
                            Sign in
                            </v-btn>
                        </v-flex>
                    </form>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
@endsection