@extends('layouts.app')

@section('title'){{ 'Customers|Create' }}@stop

@section('content')
    <sidebar></sidebar>
    <div class="main-content">
       <div class="container-fluid">
           <customer-form></customer-form>
       </div>
    </div> 
@endsection