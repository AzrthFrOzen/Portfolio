<?php

use App\Interfaces\IProductoService;
use App\service\ProductoService;
use Libs\Controller;

class ProductoController extends Controller
{
    private ProductoService $service;

    public function __construct(IProductoService $service)
    {
        $this->service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll(true);
    }
}