@extends('layouts.template')

@section('title', 'Home')

@section('content')
    @component('layouts.components.alert', )
        @slot('title', 'Advertencia')
        @slot('color', 'primary')
        Alerta Roja
    @endcomponent

    @include('layouts.partials.slider_banner')
@endsection
    
