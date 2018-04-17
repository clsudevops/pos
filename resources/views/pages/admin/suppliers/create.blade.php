@extends('layouts.app')

@section('title'){{ 'New Supplier' }}@stop

@section('content')
    <sidebar></sidebar>
    <div class="main-content">
       <div class="container-fluid">
           <supplier-form></supplier-form>
       </div>
    </div> 
@endsection