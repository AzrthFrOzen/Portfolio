<?php

namespace App\Controllers;

use App\Interfaces\IDetalleService;
use App\Services\DetalleService;
use Libs\Controller;

class DetalleController extends Controller
{
    private DetalleService $service;

    public function __construct(IDetalleService $service) 
    {
        $this->service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll();
        myEcho($data);
    }
}