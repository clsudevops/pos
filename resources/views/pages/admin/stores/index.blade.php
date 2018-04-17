@extends('layouts.app')

@section('title'){{ 'Admin|Store Configuration' }}@stop

@section('content')
    <sidebar></sidebar>
    <div class="main-content">
        <div class="container-fluid">
            <stores-data-table></stores-data-table>
        </div>
    </div> 
@endsection