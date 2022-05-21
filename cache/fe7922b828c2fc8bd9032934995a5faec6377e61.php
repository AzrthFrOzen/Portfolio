<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Portafolio - <?php echo $__env->yieldContent('title'); ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link href="<?= URL . 'css/bootstrap.min.css' ?>" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?= URL . 'css/dashboard.css' ?>" rel="stylesheet">
    <?php echo $__env->yieldContent("styles"); ?>
</head>

<body class="d-flex flex-column min-vh-100">

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <!-- Logo de RDP -->
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">PORTAFOLIO</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Cerrar Sesión</a>
            </div>
        </div>
    </header>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidenav abajo -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://localhost/Portfolio/public/home/index">
                                <span data-feather="home"></span>
                                Presentación
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Portfolio/public/home/about">
                                <span data-feather="file"></span>
                                Acerca De
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Portfolio/public/home/experience">
                                <span data-feather="users"></span>
                                Experiencia
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Portfolio/public/home/projects">
                                <span data-feather="bar-chart-2"></span>
                                Proyectos
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <?php echo $__env->yieldContent("content"); ?>
            </main>
        </div>
    </div>
    <footer class="content bg-light text-center text-lg-start mt-auto" style="z-index: 101">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © Copyright 2022 - 2023, RDP Digital Todos los derechos reservados.
        </div>
  <!-- Copyright -->
    </footer>
    <?php echo $__env->yieldContent("scripts"); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\Portfolio\app\views/layouts/template.blade.php ENDPATH**/ ?>