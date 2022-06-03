@extends('layouts.template')

@section('title', 'Home')

@section('content')
    {{$_ENV['APP_URL']}}

    @include('layouts.partials.slider_banner')
@endsection
    
