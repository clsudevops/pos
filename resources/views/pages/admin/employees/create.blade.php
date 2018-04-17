@extends('layouts.app')

@section('title'){{ 'Employees|Create' }}@stop

@section('content')
    <sidebar></sidebar>
    <div class="main-content">
       <div class="container-fluid">
           <employee-form></employee-form>
       </div>
    </div> 
@endsection