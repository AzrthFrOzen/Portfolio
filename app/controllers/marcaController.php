<?php

namespace App\Controllers;

use App\Interfaces\IMarcaService;
use App\Services\MarcaService;
use Libs\Controller;

class MarcaController extends Controller
{
    private MarcaService $service;

    public function __construct(IMarcaService $service)
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