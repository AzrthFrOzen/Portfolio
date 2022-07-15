<?php

use App\Services\ProductoService;
use App\Services\CategoriaService;
use App\Services\ClienteService;
use App\Services\DetalleService;
use App\Services\MarcaService;
use App\Services\PermisoService;
use App\Services\TipoService;
use App\Services\UsuarioService;
use App\Services\VentaService;
use DI\Container;
use Libs\Database;

return [
    'iproductoservice' => function (Container $c)
    {
        return new ProductoService($c->get(Database::class));
    },

    'iclienteservice' => function (Container $c)
    {
        return new ClienteService($c->get(Database::class));
    },

    'idetalleservice' => function (Container $c) 
    {
        return new DetalleService($c->get(Database::class));
    },

    'iventaservice' => function (Container $c) 
    {
        return new VentaService($c->get(Database::class));
    },

    'iusuarioservice' => function (Container $c) 
    {
        return new UsuarioService($c->get(Database::class));
    },

    'icategoriaservice' => function (Container $c) 
    {
        return new CategoriaService($c->get(Database::class));
    },

    'itiposervice' => function (Container $c) 
    {
        return new TipoService($c->get(Database::class));
    },
    
    'ipermisoservice' => function (Container $c) 
    {
        return new PermisoService($c->get(Database::class));
    },

    'imarcaservice' => function (Container $c) 
    {
        return new MarcaService($c->get(Database::class));
    }
];