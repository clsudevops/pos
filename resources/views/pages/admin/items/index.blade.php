@extends('layouts.app')

@section('title'){{ 'Admin|Items' }}@stop

@section('content')
    <sidebar></sidebar>
    <div class="main-content">
        <div class="container-fluid">
            <items-data-table></items-data-table>
        </div>
    </div>
@endsection