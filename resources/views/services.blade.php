@extends('layouts.landing')

@section('title', 'Services')

@section('content')
    <h1>Servives</h1>
    @component('_components.card')
        @slot('title', 'services 1')
        @slot('content', 'lorem ipsum')
    @endcomponent
@endsection

