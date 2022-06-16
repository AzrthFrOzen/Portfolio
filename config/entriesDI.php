<?php

use App\service\ProductoService;
use DI\Container;
use Libs\Database;

return [
    'iproductoservice' => function (Container $c)
    {
        return new ProductoService($c->get(Database::class));
    }

];