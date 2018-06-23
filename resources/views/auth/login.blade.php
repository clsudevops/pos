@extends('layouts.app')

@section('title'){{ 'Sign-in' }}@stop

@section('content')
    <v-container grid-list-md class="mt-4">
        <v-layout row wrap justify-center>
            <v-flex xs12 sm6 md4>
                <v-card class="pa-3">
                    <v-flex xs12>
                        <p class="text-sm-center headline">Login</p>
                        <v-divider class="mt-1"></v-divider>
                    </v-flex>
                    <v-form method="POST" action="{{ route('login') }}">
                        @csrf
                        <v-flex xs12>
                            <v-text-field
                                prepend-icon="account_circle"
                                class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                solo
                                name="email"
                                label="Username or Email"
                                value="{{ old('email') }}"
                            ></v-text-field>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </v-flex>
                       <v-flex>
                            <v-text-field 
                                prepend-icon="vpn_key" 
                                solo 
                                class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                name="password" 
                                label="Password" 
                                type="password"></v-text-field>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                       </v-flex>
                       <v-flex xs12>
                            
                            <v-checkbox v-model="remember" label="Remember me" type="checkbox" name="remember" value="{{ old( 'remember') ? true : false }}"></v-checkbox>
                       </v-flex>
                       <v-flex xs12>
                            <a style="color:#0366d6; font-weight: 400; text-transform:uppercase;" class="" href="{{ route('password.request') }}">
                                <small>{{ __('Forgot Your Password?') }}</small>
                            </a>
                        </v-flex>
                       <v-flex xs12>
                            <v-btn type="submit" color="primary" block>
                            Sign in
                            </v-btn>
                        </v-flex>
                    </v-form>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
@endsection