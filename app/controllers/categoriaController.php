<?php

namespace App\Controllers;

use App\Services\CategoriaService;
use Libs\Controller;

class CategoriaController extends Controller
{
    private $service;
    
    public function index()
    {
        $data = (new CategoriaService())->getAll();
        myEcho($data);
    }

    /*
    public function __construct(CategoriaService $service) {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->getAll();
        myEcho($data);
    }
    */
}
