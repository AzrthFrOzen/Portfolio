

<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('styles'); ?>
    <link href="<?= URL . 'css/dashboard.css' ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="content">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Presentación</h1>
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
        <h2>Desarrollador de Sistemas</h2>
        <h4>Info:</h4>
        <ul>
            <li>
                <p>Correo: <a href="mailto:">abraham_esg@hotmail.com</a></p>
            </li>
            <li class="">
                <p>Telf: +51 951753628</p>
            </li>
            <li class="">
                <p>Dirección: 183 Jr. Jangas, Breña, Lima.</p>
            </li>
        </ul>
    </div>
    <div class="col-sm-6">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?= URL . "img/spishtar2.jpg"?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Abraham Sánchez</h5>
                <p class="card-text">Estudiante de Desarrollo de Sistemas e Ingeniería Mecatrónica.</p>
            </div>
        </div>
    </div>
    </div>
    
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?= URL . 'js/bootstrap.bundle.min.js' ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="http://localhost/ProyectoSistemaRDP/public/js/dashboard.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Portfolio\app\views/home/index.blade.php ENDPATH**/ ?>