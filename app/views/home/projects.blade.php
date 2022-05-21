@extends('layouts.template')

@section('title', 'Proyectos')

@section('styles')
    <link href="<?= URL . 'css/dashboard.css' ?>" rel="stylesheet">
@endsection

@section('content')

<section class="content">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Proyectos</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                Calendario
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h2>Proyetos personales/de estudio</h2>
            <br>
            <ul>
                <li>
                    <p>Base de datos de paises del mundo - Diseño de la UI y funcionalidades de la página</p>
                </li>
                <li class="">
                    <p>Sistema Web de gestión de trámites de licencias</p>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection

@section('scripts')
    <script src="<?= URL . 'js/bootstrap.bundle.min.js' ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="http://localhost/ProyectoSistemaRDP/public/js/dashboard.js"></script>
@endsection