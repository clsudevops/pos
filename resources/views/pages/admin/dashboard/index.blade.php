@extends('layouts.app')

@section('title'){{ 'Admin|Dashboard' }}@stop

@section('content')
    <sidebar></sidebar>
    <div class="main-content">
        <div class="container-fluid">
            <dashboard></dashboard>
        </div>
    </div> 
@endsection