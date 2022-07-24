<?php

namespace App\Controllers;

use App\Interfaces\IVentaService;
use App\Services\VentaService;
use Libs\Controller;

class VentaController extends Controller
{
    private VentaService $service;

    public function __construct(IVentaService $service) {
        $this->service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll();
        echo $this->blade->make('venta.index', ['data' => $data])->render();
    }
}