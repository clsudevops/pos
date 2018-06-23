@extends('layouts.app')

@section('title'){{ 'Admin|Transactions' }}@stop

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <transactions-data-table></transactions-data-table>
        </div>
    </div>
@endsection