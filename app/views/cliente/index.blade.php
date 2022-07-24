@extends('layouts.template')

@section('title', 'Clientes')

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
                <a href="{{URL.'cliente/detail'}}" is-modal="true" id="nuevo">Nuevo</a>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th style="width: 5%">ID</th>
                    <th style="width: 10%">NOMBRE</th>
                    <th style="width: 10%">APELLIDO</th>
                    <th style="width: 15%">DIRECCIÓN</th>
                    <th style="width: 10%">UBICACIÓN</th>
                    <th style="width: 10%">TELÉFONO</th>
                    <th style="width: 10%">DNI</th>
                    <th style="width: 10%">FEC. NACIMIENTO</th>
                    <th style="width: 10%">SEXO</th>
                    <th style="width: 10%"></th>
                </tr>
            </thead>
            <body>
                @foreach ($data as $item)
                    <tr>
                        <td>{{$item->IdCliente}}</td>
                        <td>{{$item->Nombres}}</td>
                        <td>{{$item->Apellidos}}</td>
                        <td>{{$item->Direccion}}</td>
                        <td>{{$item->Ubicacion}}</td>
                        <td>{{$item->Telf}}</td>
                        <td>{{$item->DNI}}</td>
                        <td>{{$item->Nacimiento}}</td>
                        <td>{{$item->Sexo}}</td>
                        <td>
                            <a class="btn btn-danger btn-sm" is-modal="true" href="<?=URL . "cliente/detail/{$item->IdCliente}/{$item->IdUsuario}" ?>"><i class="fa fa-pencil"></i></a>
                            <button class="btn btn-primary btn-sm" my-name="{{$item->Nombres}}" my-action="<?=URL . "cliente/delete/{$item->IdCliente}" ?>" onclick="remove(this)"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
    @component('layouts.components.modal')
        @slot('title', 'Cliente - Agregar')            
        @slot('size', MODAL_LG)
    @endcomponent
@endsection

    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script>    
    <script src="{{URL}}js/scripts/modal_crud.js"></script>
@endsection