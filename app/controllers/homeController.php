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
        echo $this->blade->make('home.index', ['name' => 'Abraham'])->render();
    }

    public function about()
    {
        echo $this->blade->make('home.about', ['name' => 'Abraham'])->render();
    }

    public function experience()
    {
        echo $this->blade->make('home.experience', ['name' => 'Abraham'])->render();
    }

    public function projects()
    {
        echo $this->blade->make('home.projects', ['name' => 'Abraham'])->render();
    }
}
