@extends('layouts.app')

@section('title'){{ 'Admin|Sales' }}@stop

@section('content')
    <div class="main-content">
        <sales-data-table></sales-data-table>
    </div> 
@endsection