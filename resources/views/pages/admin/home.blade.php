@extends('layouts.app')

@section('title'){{ 'ADMIN|HOME' }}@stop

@section('content')

    <!-- <div class="wrapper"> -->
        <sidebar></sidebar>
        <div class="main-content">
            <router-view></router-view>
        </div>
    <!-- </div> -->

@endsection