<?php

namespace App\Controllers;

use App\Interfaces\ITipoService;
use App\Services\TipoService;
use Libs\Controller;

class TipoController extends Controller
{
    private TipoService $service;

    public function __construct(ITipoService $service) {
        $this->service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll();
        myEcho($data);
    }
}