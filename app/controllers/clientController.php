<?php

namespace App\Controllers;

use App\Models\ClientModel;
use Libs\Controller;

class ClientController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->loadBlade();
    }

    public function index()
    {
        //echo $this->blade->make('home.index', ['name' => 'Abraham'])->render();
        

        $data = (new ClientModel())->getAll();
        
        myEcho($data);
    }


}
