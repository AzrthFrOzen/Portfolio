<?php

namespace App\Controllers;

use App\Interfaces\IPermisoService;
use App\Services\PermisoService;
use Libs\Controller;

class PermisoConreoller extends Controller
{
    private PermisoService $service;

    public function __construct(IPermisoService $service) {
        $this->service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll();
        myEcho($data);
    }
}