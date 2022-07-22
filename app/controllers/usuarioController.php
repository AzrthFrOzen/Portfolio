<?php

namespace App\Controllers;

use App\Interfaces\IUsuarioService;
use App\Services\UsuarioService;
use Libs\Controller;

class UsuarioController extends Controller
{
    private UsuarioService $service;

    public function __construct(IUsuarioService $service)
    {
        $this->service = $service;
        $this->loadBlade();
    }

    public function index()
    {
        $data = $this->service->getAll();
    }
}