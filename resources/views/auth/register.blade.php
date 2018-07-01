@extends('layouts.app')

@section('title'){{ 'SIGN-UP' }}@stop

@section('content')
<v-container>
    <v-layout row wrap>
        <v-flex xs12 md6>
            <v-card>
                <v-card-title><h4 class="title">{{ __('Register') }}</h4></v-card-title>

                <v-card-text>
                    <v-form method="POST" action="{{ route('register') }}">
                        @csrf

                        <v-flex xs12>
                            <v-text-field
                                class="{{ $errors->has('name') ? ' error--text' : '' }}"
                                solo
                                name="name"
                                label="Name"
                                required
                                autofocus
                                value="{{ old('name') }}"
                            ></v-text-field>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                           
                        </v-flex>

                        <v-flex xs12>
                            <v-text-field
                                class="{{ $errors->has('username') ? ' error--text' : '' }}"
                                solo
                                name="username"
                                label="Username"
                                required
                                value="{{ old('username') }}"
                            ></v-text-field>
                            @if ($errors->has('username'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                           
                        </v-flex>

                        <v-flex xs12>
                            <v-text-field
                                class="{{ $errors->has('email') ? ' error--text' : '' }}"
                                solo
                                name="email"
                                label="Email"
                                required
                                type="email"
                                value="{{ old('email') }}"
                            ></v-text-field>    
                                
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                           
                        <v-flex/>

                        <v-flex xs12>
                            
                            <v-text-field
                                class="{{ $errors->has('password') ? ' error--text' : '' }}"
                                solo
                                name="password"
                                label="Name"
                                required
                                type="password"
                            ></v-text-field>
                                
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            
                        </v-flex>

                        <v-flex xs12>
                            <v-text-field
                                solo
                                id="password-confirm"
                                name="password_confirmation"
                                label="Confirm Password"
                                required
                            ></v-text-field>
                        <v-flex/>

                        <div class="form-group ">
    
                                <button type="submit" class="btn btn-block btn-raised btn-primary">
                                    {{ __('Register') }}
                                </button>
    
                        </div>
                    </v-form>
                </v-card-text>
            </v-card>
        </v-flex>
    </v-layout>
</v-container>
@endsection
