@extends('layouts.app')

@section('title'){{ 'Admin|Expenses' }}@stop

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <expenses-data-table></expenses-data-table>
        </div>
    </div>
@endsection