<?php

namespace App\Controllers;

use App\Models\CityModel;
use Libs\Controller;

class CityController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->loadBlade();
    }

    public function index()
    {
        //echo $this->blade->make('home.index', ['name' => 'Abraham'])->render();
        myEcho(myEnv('DB_DATABASE'));
        $data = (new CityModel())->getAll();
        myEcho($data);
    }
}
