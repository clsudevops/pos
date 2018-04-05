@extends('layouts.app')

@section('title'){{ 'ADMIN|HOME' }}@stop

@section('content')

    <div class="wrapper">
        <sidebar></sidebar>
        <div class="container pt-5 aside-left">
            <router-view></router-view>
        </div>
    </div>

@endsection