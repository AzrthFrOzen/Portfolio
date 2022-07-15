<?php

namespace App\Controllers;
use Libs\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->loadBlade();
    }
    
    public function index()
    {
        echo $this->blade->render('home.index', ['name' => 'Abraham']);
    }
}
