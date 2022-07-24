@extends('layouts.template')

@section('title', 'Usuarios')

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
                <a href="{{URL.'usuario/detail'}}" is-modal="true" id="nuevo">Nuevo</a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th style="width: 5%">ID</th>
                    <th style="width: 35%">USUARIO</th>
                    <th style="width: 35%">NIVEL</th>
                    <th style="width: 10%">CORREO</th>
                    <th style="width: 10%"></th>
                </tr>
            </thead>
            <body>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->IdUsuario}}</td>
                        <td>{{$item->Usuario}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->Correo}}</td>
                        <td>
                            <a class="btn btn-danger btn-sm" is-modal="true" href="<?=URL . "usuario/detail/{$item->IdUsuario}/{$item->IdTipo}" ?>"><i class="fa fa-pencil"></i></a>
                            <button class="btn btn-primary btn-sm" my-name="{{$item->Usuario}}" my-action="<?=URL . "usuario/delete/{$item->IdUsuario}" ?>" onclick="remove(this)"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
    @component('layouts.components.modal')
        @slot('title', 'Usuario - Agregar')            
        @slot('size', MODAL_LG)
    @endcomponent
@endsection

    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>    
    <script src="{{URL}}js/scripts/modal_crud.js"></script>
@endsection