@extends('layouts.app')

@section('title'){{ 'Admin|Suppliers' }}@stop

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <suppliers-data-table></suppliers-data-table>
        </div>
    </div>
@endsection