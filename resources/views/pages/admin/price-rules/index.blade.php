@extends('layouts.app')

@section('title'){{ 'Admin|Price Rules' }}@stop

@section('content')
    <sidebar></sidebar>
    <div class="main-content">
        <price-rules-data-table></price-rules-data-table>
    </div>
@endsection