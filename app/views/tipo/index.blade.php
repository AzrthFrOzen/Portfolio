@extends('layouts.template')

@section('title', 'Tipo')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
@endsection

@section('content')
<!--
    {{$_ENV['APP_URL']}}
    {{myEcho($data)}}
-->
    <div class="container">
        <div class="row">
            <div class="col-2">
                <a href="{{URL.'tipo/detail'}}" is-modal="true" id="nuevo">Nuevo</a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th style="width: 30%">ID</th>
                    <th style="width: 60%">ÁREA</th>
                </tr>
            </thead>
            <body>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->IdTipo}}</td>
                        <td>{{$item->Nombre}}</td>
                        <td>
                            <a class="btn btn-danger btn-sm" is-modal="true" href="<?=URL . "tipo/detail/{$item->IdTipo}" ?>"><i class="fa fa-pencil"></i></a>
                            <button class="btn btn-primary btn-sm" my-name="{{$item->Nombre}}" my-action="<?=URL . "tipo/delete/{$item->IdTipo}" ?>" onclick="remove(this)"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
    @component('layouts.components.modal')
        @slot('title', 'Tipo - Agregar')            
        @slot('size', MODAL_SM)
    @endcomponent
@endsection

    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>    
    <script src="{{URL}}js/scripts/modal_crud.js"></script>
@endsection