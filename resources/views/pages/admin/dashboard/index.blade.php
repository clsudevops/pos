@extends('layouts.app')

@section('title'){{ 'Admin|Dashboard' }}@stop

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <dashboard></dashboard>
        </div>
    </div> 
@endsection