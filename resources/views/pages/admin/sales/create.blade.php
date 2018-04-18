@extends('layouts.app')

@section('title'){{ 'Admin|Sales' }}@stop

@section('content')
    <sidebar></sidebar>
    <div class="main-content">
        <sales-form></sales-form>
    </div> 
@endsection