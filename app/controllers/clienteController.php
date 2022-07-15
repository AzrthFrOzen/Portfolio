<?php

namespace App\Controllers;

use App\Interfaces\IClienteService;
use App\Services\ClienteService;
use Libs\Controller;

class ClienteController extends Controller
{
    private ClienteService $service;

    public function __construct(IClienteService $service) {
        $this->service = $service;
        $this->loadBlade();
    }
    public function index()
    {
        $data = $this->service->getAll(true);
        myEcho($data);
    }
}