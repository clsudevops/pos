@extends('layouts.app')

@section('title'){{ 'Expenses|Create' }}@stop

@section('content')
    <sidebar></sidebar>
    <div class="main-content">
       <div class="container-fluid">
           <expense-form></expense-form>
       </div>
    </div> 
@endsection