<?php

namespace App\Controllers;

use App\Interfaces\ICategoriaService;
use App\Services\CategoriaService;
use Libs\Controller;

class CategoriaController extends Controller
{
    private CategoriaService $service;

    public function __construct(ICategoriaService $service)
    {
        $this->service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll();
        myEcho($data);
    }

    /*
    public function index()
    {
        $data = $this->service->getAll();
        myEcho($data);
    }
    */
}
