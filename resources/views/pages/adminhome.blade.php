@extends('pages.app')
@section('content-nav')
    @include('navbar.mainnav')
@endsection

@section('content')
    <h2>

        <a href="{{ url('add-admin') }}">add admin</a>
    </h2>
@endsection

