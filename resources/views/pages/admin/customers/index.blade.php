@extends('layouts.app')

@section('title'){{ 'Admin|Suppliers' }}@stop

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <customers-data-table></customers-data-table>
        </div>
    </div> 
@endsection